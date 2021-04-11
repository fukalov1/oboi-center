<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use AvtoDev\SmsPilotNotifications\Messages\SmsPilotMessage;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{

    private $fio, $phone;

    public function getCode(Request $request)
    {
        $validate = $this->validateData($request);

        if ($validate===false) {
            $data = [
                'success' => false,
                'code' => null,
                'error' => 'Нет данных',
            ];
        }
        else  {
            if ($this->validateThrottleRequests($this->phone)) {
                $data = [
                    'success' => false,
                    'code' => null,
                    'error' => 'Запрос на получение купона можно отослать один раз в сутки',
                ];
            }
            else {
                $code = $this->generateCode();
                $number = $this->generateNumber(10);

                $coupon = new Coupon();
                $coupon->fio = $this->fio;
                $coupon->phone = $this->phone;
                $coupon->code = $code;
                $coupon->number = $number;
                $coupon->save();

                $result = $this->toSmsPilot($code);
                $data = [
                    'success' => true,
                    'error' => $result
                ];
            }

        }
        return json_encode($data);
    }

    public function getCallback(Request $request)
    {
        $validate = $this->validateData($request);

        if ($validate===false) {
            $data = [
                'success' => false,
                'code' => null,
                'error' => 'Нет данных',
            ];
        }
        else  {
            try {
                $user_data = ['fio' => $this->fio, 'phone' => $this->phone];
                Mail::send('emails.sendform', ['data' => $user_data], function ($message) use ($user_data) {

                    $email = 'oboi-center@yandex.ru';
                    $message->from($email, ' ', 'Обои-центр');
                    $message->to($email)->subject('заказ обратного звонка  с сайта oboi-center.ru');
                });
                $data = [
                    'success' => true,
                    'message' => 'Успешно! Ожидайте звонка от менеджера.',
                    'error' => null
                ];
            }
            catch (\Throwable $exception) {
                $data = [
                    'success' => true,
                    'message' => 'Ошибка! Заказ не отправлен.',
                    'error' => $exception->getMessage()
                ];
            }
        }
        return json_encode($data);
    }

    public function getCoupon(Request $request)
    {
        $data = [
            'success' => false,
            'error' => 'Купон не сформирован'
        ];
        if ($this->validateData($request)) {
            $coupons = new Coupon();
            $coupon = $coupons
                ->where('phone', $this->phone)
                ->where('code', $request->code)
                ->first();
            if ($coupon) {
                $coupons->type = 1;
                $coupon->save();
                $data = [
                    'success' => true,
                    'error' => null
                ];
                $request->session()->put('number_coupon', $coupon->number);
            }
        }
        return json_encode($data);
    }

    public function printCoupon(Request $request)
    {
        if (session('number_coupon')) {
            header('Content-type: image/png');
            $image = imagecreatefrompng(public_path('/images/coupon.png'));
            $font_file = public_path('/fonts/ARIAL.TTF');
            $black = '000000';
            imagefttext($image, 24, 0, 105, 140, $black, $font_file, session('number_coupon'));
            imagefttext($image, 24, 0, 331, 140, $black, $font_file, date('d-m-Y', time()));
            imagepng($image);
        } else {
            header("Content-Type: text/html; charset=windows-1251");
            print "Купон не найден";
        }
    }

    private function generateCode($length = 4)
    {
        $result = '';
        for($i=1;$i<=$length;$i++) {
            $result .= rand(0,9);
        }
        return $result;

    }

    private function generateNumber()
    {
        $result = $this->generateCode(10);
        $count = Coupon::where('number', $result)->count();
        if ($count>0) {
            $this->generateNumber();
        }
        return $result;

    }

    private function validateThrottleRequests($phone)
    {
        $coupon = Coupon::where('phone', $phone)
            ->whereRaw("date_format(created_at, '%Y-%m-%d') = date_format(now(), '%Y-%m-%d')")
            ->get()->count();
        if ($coupon>0) {
            return true;
        }
        else {
            return false;
        }
    }

    private function toSmsPilot($code)
    {
        $api_key = env('SMS_PILOT_API_KEY', '15A8F290772QMY593V357L73FFH2686YJHKJ693W2A93L7004DD021FD1Z4QM8E8');
        $content = "Код подтверждения $code. http://oboi-center.ru";
        return file_get_contents("http://smspilot.ru/api.php?send={$content}&to={$this->phone}&apikey=$api_key");
//        $smsPilot = SmsPilotMessage::create();
//        return $smsPilot
//            ->from('oboi-center')
//            ->to($phone)
//            ->content("Код подтверждения $code. http://oboi-center.ru");
    }

    private function validateData($request)
    {
        $fio = preg_replace("/\s+/"," ", $request->fio);

        $phone = preg_replace("/\s/","",$request->phone);
        $phone = preg_replace("/^\+7/","",$phone);
        $phone = preg_replace("/\-/","",$phone);
        $phone = preg_replace("/\(/","",$phone);
        $phone = preg_replace("/\)/","",$phone);

        if (($fio == '') or ($fio == ' ') or ($phone == '') or (strlen($phone) < 10)) {
            return false;
        }
        else {
            $this->fio = $fio;
            $this->phone = $phone;
            return true;
        }
    }

}
