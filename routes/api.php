<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('get-code', [\App\Http\Controllers\MainController::class, 'getCode']);
Route::post('get-coupon', [\App\Http\Controllers\MainController::class, 'getCoupon']);
Route::post('send-request-coupon', [\App\Http\Controllers\MainController::class, 'sendRequestCoupon']);
