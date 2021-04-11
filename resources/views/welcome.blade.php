<!DOCTYPE html>
<html lang="ru">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>«Обои Центр» - Продажа обоев, клея, фотообоев в Самарской области</title>
	<meta name="description" content="Продажа обоев, клея, фотообоев в Самарской области">
	<meta name="keywords" content="Продажа обоев, клея, фотообоев в Самарской области">
	<meta name="author" content="Line-decor">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="css/vendor.css">



	<link rel="stylesheet" href="css/main.css">

	<link href='https://fonts.googleapis.com/css?family=Roboto:300,900|Roboto+Condensed:300,700|PT+Sans:700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="landing.css">
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js') }}"></script>
    <script src="{{ asset('https://unpkg.com/vue') }}"></script>

	</head>
	<body>
	<div id="app" class="wrapper">

		<header class="header">
			<div class="top-header">
				<div class="container">
					<a href="#" class="logo"></a>
					<div class="right">
						<div class="rezhim">
						    <div class="rezhim__title">Выберите город:</div>
                            <select class="line1"
                                    v-model="address"
                                    style="border: none;">
                                <option :value="item"
                                        class="line1"
                                        v-for="(item, index) in contacts" :key="index">
                                    @{{ item.name }}
                                </option>
                            </select>
							<div class="line2" v-for="(item, index) in address.data" :key="index">
                                @{{ item.address }}
                            </div>
						</div>
						<div class="contact">
							<!--<a href="#callback" class="fancybox button">онлайн-заявка</a>--><br/>
							<a :href="'tel:'+item.phone" class="tel"
                               v-for="(item, index) in address.data" :key="index">
                                @{{ item.phone }}
                            </a>
						</div>
					</div>
				</div>
			</div>
			<nav class="header-nav">
				<div class="container">
					<div class="menu">
						<a href="#s1" class="scroll link">О нас</a>
						<a href="#s2" class="scroll link">Почему мы</a>
						<a href="#s4" class="scroll link">наш ассортимент</a>
						<a href="#s5" class="scroll link">Видео</a>
						<a href="#s10" class="scroll link">Получить купон</a>
						<a href="#s11" class="scroll link">доставка</a>
						<a href="#s-map" class="scroll link">контакты</a>
					</div>
				</div>
			</nav>
		</header>
		<div id="s1" class="sect1">
			<div class="container">
				<div class="main-content">
					<div class="title">
						Обои Центр - <br/>
						<span>лучшее качество<br/>
						 проверенное временем
						</span>
					</div>
					<div class="text">
						<p><br/>
							Мы сохраняем десятилетиями традиции,<br>
							ставя во главу угла высокое качество. <br>
							Ассортимент обоев максимально разнообразен <br>
							 и отвечает всем современным тенденциям
						</p>
					</div>
				</div>
			</div>
		</div>
		<div id="s2" class="ovxh">
			<div id="transform-side2" class="sect2 row-scroll row-scroll-cube row-scroll-or">
				<div class="container">
					<div class="sect-title">Почему мы? </div>
					<div class="top-row">
						<div class="item">
							<img src="{{ asset('/images/s2-i1.png') }}" alt="">
							<div class="title">
								Офлайн витрина
							</div>
							<div class="text">
								которая позволяет пощупать товар, посмотреть как он выглядит на свету
							</div>
						</div>
						<div class="item">
							<img src="{{ asset('/images/s2-i2.png') }}" alt="">
							<div class="title">
								Постоянное наличие товара на складе
							</div>
							<div class="text">
								в отличии от магазинов, где можно посмотреть,<br/> но товар только<br/>
								под заказ
							</div>
						</div>
						<div class="item">
							<img src="{{ asset('/images/s2-i3.png') }}" alt="">
							<div class="title">Ассортимент обоев </div>
							<div class="text">
								от бумажных обоев до виниловых обоев на флизелиновой основе от известных торговых марок
							</div>
						</div>
					</div>
				</div>
				<div class="green-row">
					<div class="container">
						<div class="text">
							Обои Центр в Тольятти отличается от конкурентов рядом важных преимуществ. Например, офлайн-витрина позволяет визуально оценить товар и попробовать его на ощупь, что могут предложить далеко не все магазины. Важно также, что товар всегда есть на складе – он доступен к покупке сразу, а не под заказ. Ассортимент «Обои Центра» охватывает все ценовые сегменты, поэтому покупатели с любым уровнем достатка найдут здесь интересующий товар. Стоимость рулона обоев начинается от 149 рублей. Иными словами, для клиентов создаются все условия для осмысленной и взвешенной покупки
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="sect3" class="sect3 row-scroll-cube">
			<div class="container">
				<div class="sect-title">
					<b>Сегодня успех магазина</b><br/>

					строится на 5 основных составляющих
				</div>
				<div class="row">
					<div class="item">
						<div class="icon icon1"></div>
						<div class="text text-center">
							Мы постоянно изучаем<br/> спрос и потребности<br/> покупателей для<br/> формирования<br/> нашего ассортимента
						</div>
					</div>
					<div class="item">
						<div class="icon icon2"></div>
						<div class="text text-center">
							Разнообразие<br/> цветов и<br/> стилей — изюминка<br/> нашего ассортимента
						</div>
					</div>
					<div class="item">
						<div class="icon icon3"></div>
						<div class="text text-center">
							Стабильно<br/> низкие цены за счет<br/> прямых поставок<br/> обоев
						</div>
					</div>
					<div class="item">
						<div class="icon icon4"></div>
						<div class="text text-center">
							В наших магазинах<br/> работают доброжелательные<br/> и отзывчивые консультанты
						</div>
					</div>
					<div class="item">
						<div class="icon icon5"></div>
						<div class="text text-center">
							Весь товар можно<br/> приобрести в рассрочку<br/> без переплаты на 4 месяца
						</div>
					</div>
				</div>
			</div>
		</div>
		<div  id="transform-side4" class="sect4">
			<div id="s4" class="container">
				<div class="sect-title">наш ассортимент </div>
				<div class="row">
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i1.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>

					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i2.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>

					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i3.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>
					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i4.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>
					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i5.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>
					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i6.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>
					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i7.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>
					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i8.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>
					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i9.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>
					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i10.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>
					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i11.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>
					</div>
					<div class="item">
						<div class="image">
							<img src="{{ asset('/images/s4i12.jpg') }}" alt="">
							<div class="title" style="padding-left: 0px;"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div id="transform-side5">
			<div id="s5" class="sect5">
				<div class="container">
					<div class="row">
						<div class="item">
							<iframe width="320" height="260" src="{{ asset('https://www.youtube.com/embed/BQZZWLbLPz8" frameborder="0') }}" allowfullscreen></iframe>
						</div>
						<div class="item">
							<iframe width="320" height="260" src="{{ asset('https://www.youtube.com/embed/hbtqlvQShB4" frameborder="0') }}" allowfullscreen></iframe>
						</div>
						<div class="item">
							<iframe width="320" height="260" src="{{ asset('https://www.youtube.com/embed/iZnl6dUAv5U" frameborder="0') }}" allowfullscreen></iframe>
						</div>
						<div class="item">
							<iframe width="320" height="260" src="{{ asset('https://www.youtube.com/embed/eTyliQpiDmU" frameborder="0') }}" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ovxh">
			<div id="scroll-fly-right2">
				<div id="s6" class="sect6">
					<div class="container">
						<div class="sect-title">
							<p class="big">
								В салонах «Обои Центр» в Тольятти
							</p>
							<p>
								вы можете приобрести не только<br/>
								обои на любой вкус и кошелек,
								Вам понравится не только<br/>
								огромный выбор обоев,
							</p>
							<p>
								но и  отличный ассортимент люстр,<br/>
								картин, фотообоев, декора, самоклеющейся<br/>
								пленки, плинтусов и других сопутствующих товаров
							</p>
						</div>
						<div class="row">
							<div class="item">
								<div class="img"><img src="{{ asset('/images/s6i4.jpg') }}" alt=""></div>
								<div class="text">Плинтусы</div>
							</div>
							<div class="item">
								<div class="img"><img src="{{ asset('/images/s6i2.jpg') }}" alt=""></div>
								<div class="text">Люстры</div>
							</div>
							<div class="item">
								<div class="img"><img src="{{ asset('/images/s6i1.jpg') }}" alt=""></div>
								<div class="text">Картины</div>
							</div>
							<div class="item">
								<div class="img"><img src="{{ asset('/images/s6i3.jpg') }}" alt=""></div>
								<div class="text">Инструменты</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div id=" ">
            <div id="s10" class="sect10">
                <div class="container">
                    <div class="title">скидка 10%</div>
                    <div class="green-row">
                        Распечатай купон и получи <b>скидку 10%!!!</b>
                    </div>
                    <div @click="showFormCoupon=true" class="button">Получить купон</div>
                </div>
            </div>
        </div>
		<div id="s11" class="ovxh">
			<div id="scroll-fly-right">
				<div class="sect11">
                    <div id="map"  style="width: 100%; height: 350px"></div>
<!--					<yandex-map :settings="settings">-->
<!--						&lt;!&ndash;Markers&ndash;&gt;-->
<!--					</yandex-map>-->
				</div>
			</div>
		</div>

		<div id="s-map" class="social">
    		<div class="social__title">Мы в соцсетях.</div>
    		<div class="social-row">
    			<a href="https://vk.com/oboi_centre" class="social__btn" target="_blank"><img src="{{ asset('/images/icon-soc-vk.png') }}" width="70" height="70" alt="image"></a>
    			<a href="https://www.instagram.com/oboi_centre/?r=nametaghttps://instagram.com/oboi_centre?r=nametag" class="social__btn" target="_blank"><img src="{{ asset('/images/icon-soc-inst.png') }}" width="70" height="70" alt="image"></a>
    		</div>
<br/>
	<div class="social__title">Подпишитесь и узнавайте все новости первыми!</div>
    	</div>

		<div class="hidden">
			<div class="modal-zakaz" id="callback" >
				<h2>Обратный звонок</h2>
				<!-- <p>
					Укажите свои контактные данные<br/> и мы перезвоним Вам в течении 30  минут
				</p> -->
				<form class="form-callback" method="post" action="send/send.php">
					<input class="input-text" type="text" name="name" placeholder="Имя" required><br/>
					<input class="input-text" type="tel" name="phone" placeholder="Телефон" required><br/>
					<input type="submit" value="Отправить" class="button">
				</form>
			</div>
			<div class="modal-zakaz" id="get-cupon" >
				<h2>Получить купон</h2>
				<!-- <p>
					Укажите свои контактные данные<br/> и мы перезвоним Вам в течении 30  минут
				</p> -->
				<form class="form-cupon" method="post" action="send/send.php">
					<input class="input-text" type="text" name="name" placeholder="Имя" required><br/>
					<input class="input-text" type="email" name="email" placeholder="E-mail" required><br/>
					<input class="input-text" type="phone" name="phone" placeholder="Телефон" required><br/>
					<input type="submit" value="Отправить" class="button">
				</form>
			</div>
			<div id="modal-thanks" class="modal-zakaz popup-uspeh">
				<h2>Спасибо!</h2>
				<p>Мы перезвоним вам в ближайшее время</p>
			</div>
			<div id="cupon-thanks" class="modal-zakaz popup-uspeh">
				<h2>Спасибо!</h2>
				<p>Купон отправлен на указанный адрес</p>
			</div>
		</div>
		<footer class="top-header">
			<div class="container">
					<a href="#" class="logo"></a>
					<div class="right">
						<div class="rezhim">
						    <div class="rezhim__title">Выберите город:</div>
                            <select class="line1"
                                    v-model="address"
                                    style="border: none;">
                                <option :value="item"
                                        class="line1"
                                        v-for="(item, index) in contacts" :key="index">
                                    @{{ item.name }}
                                </option>
                            </select>
                            <div class="line2" v-for="(item, index) in address.data" :key="index">
                                @{{ item.address }}
                            </div>
						</div>
						<div class="contact">
							<a href="#callback" class="fancybox button">онлайн-заявка</a>
                            <a :href="'tel:'+item.phone" class="tel"
                               v-for="(item, index) in address.data" :key="index">
                                @{{ item.phone }}
                            </a>
						</div>
					</div>
				</div>
		</footer>

        <div id="fade"></div>

        <div id="modal_kup"
             name="fade"
             v-if="showFormCoupon"
             style="background: rgba(0, 0, 0, 0.5);position: fixed;width: 100%;height: 100%;top: 0px;">
            <div style="background: #fff;width: 700px;height: 450px;border-radius: 5px; margin: 12% auto;">

                <div class="modal-container">
                    <div class="row">
                        <div class="form-close" @click="showFormCoupon=false">
                            &#x2715
                        </div>
                        <h1 style="border-bottom: 2px solid #666;; color: #666; text-align: center;">Купон на скидку</h1>
                        <h3>Получение купона <span class="text-underline">бесплатно</span> и не предусматривает каких-либо платежей или подписок.</h3>
                        <div class="col-md-12">
                            <div class="error-message" v-if="error && success===false">
                                <h3>@{{ error }}</h3>
                            </div>
                            <div v-else>
                                <div class="form-cupon" v-if="step==1">
                                    <input class="input-text"
                                           v-model="fio"
                                           placeholder="ФИО"
                                           required
                                           type="text"/><br/>
                                    <input class="input-text phone"
                                           v-model="phone"
                                           placeholder="Телефон"
                                           required
                                           type="phone"/>

                                    <input class="get-code button" @click="getCode" type="button" value="Отправить"/>
                                </div>

                                <div class="form-cupon" v-if="step==2">
                                    <input class="input-text" v-model="code" placeholder="введите код из смс" required="" type="text"/>
                                    <input class="get-code button" @click="getCoupon" type="button" value="Отправить"/>
                                </div>


                            </div>

                            <span class="notice"> * для получения купона необходимо заполнить поля формы.
                На указанный Вами номер телефона поступит смс-сообщение с кодом подтверждения.<br />
                * Распечатав купон, Вы подтверждаете свое согласие на бесплатное получение информации о проводимых акциях или распродажах,
                проводимых сетью салонов &quot;Обои Центр&quot;
            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>

<!--
<div class="modal-zakaz popup-uspeh" id="modal-thanks">
<h2>Спасибо!</h2>

<p>Мы перезвоним вам в ближайшее время</p>
	</div>
</div>

<div class="modal-zakaz" id="get_cupon">

</div>

<div class="modal-zakaz popup-uspeh" id="cupon-thanks">
<h2>Спасибо!</h2>

<p>Купон отправлен на указанный адрес</p>
</div>
-->

</div>


	<script src="{{ asset('/js/vendor.js') }}"></script>
	<script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
	<script type="text/javascript"
            charset="utf-8" async
            src="{{ asset('https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa0558457aae1c7bfcd1b26b1a45923fdeb81bf9ef6d453a88166293aa36bbaaf&amp;width=100%&amp;height=350&amp;lang=ru_RU&amp;scroll=true&amp;id=map') }}">
    </script>

	</body>

</html>
