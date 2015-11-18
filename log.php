
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Заголовок</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/linea/_ICONFONT/styles.css" />
	<link rel="stylesheet" href="libs/linea/styles.css" />

	<link rel="stylesheet" href="libs/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="libs/animate/animate.min.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/skins/purple.css" />
	<link rel="stylesheet" href="css/media.css" />
	<link rel="stylesheet" href="libs/slick-1.5.0/slick/slick.css">
    <link rel="stylesheet" href="libs/slick-1.5.0/slick/slick-theme.css">
</head>
<body>

	<div class="loader">
		<div class="loader_inner"></div>
	</div>

	<header class="main_head main_color_bg" data-parallax="scroll" data-image-src="img/bg.jpg" data-z-index="1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

				<button class="toggle_mnu">
					<span class="sandwich">
						<span class="sw-topper"></span>
						<span class="sw-bottom"></span>
						<span class="sw-footer"></span>
					</span>
				</button>
				<nav class="top_mnu">
					<ul>
						<li><a href="index.html">Главная</a></li>
						<li><a href="#about">О проекте</a></li>
						<li><a href="learn.html">Обучение</a></li>
						<li><a href="news.html">Новости</a></li>
						<li><a href="history.html">Истории успеха</a></li>
						<li><a href="#">Вход/регистрация</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="top_wrapper">
		<div class="top_descr">
			    <div class="logo">
			        <a href="/"></a>
			    </div>
			<div class="top_centered">
				<div class="top_text">
					<h1>Бизнес будущего</h1>

				</div>
			</div>
		</div>
	</div>
</header>


<section id="resume" class="s_resume">
	<div class="section_header">
		<h2>Авторизация</h2>
<!--		<div class="s_descr_wrap">
			<div class="s_descr"></div>
		</div>-->
	</div>

</section>
<?php 
    if($_GET['referer']){
        $ref=(int)$_GET['referer'];
    }
?>
<div class="container regis">
	<div class="row">
		<div class="col-md-4">
			<p class="reginform">
				Придумайте себе логин <span class="zvezda">*</span>
			</p>
		</div>
		<div class="col-md-8">
			<input type="text" name="form1" value="" id="input1" placeholder="Используйте только латинские буквы и цифры">
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<p class="reginform">
				Фамилия <span class="zvezda">*</span>
			</p>
		</div>
		<div class="col-md-8">
			<input type="text" name="form1" value="" id="input2" placeholder="Введите Вашу Фамилию">
		</div>
	</div>


<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Имя <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" id="input3" value="" placeholder="Введите Ваше Имя">
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Отчество <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input4" placeholder="Введите Ваше Отчество">
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Дата Рождения <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="date" name="form1" value="" id="input5" placeholder="Введите Вашу Дату Рождения">
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Серия, номер паспорта <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input6" placeholder="Введит серию и номер паспорта">
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Индекс <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input7" placeholder="Введите Индекс">
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Страна <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input8" placeholder="Введите Страну">
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Область <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input9" placeholder="Введите Область проживания">
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Город <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input10" placeholder="Введите Город Проживания">
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Улица, дом,корпус,квартира <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input11" placeholder="Введите Улицу, дом, корпус, квартиру">
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			E-mail <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input12" placeholder="Введите адрес электронной почты">
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<p class="reginform">
		Мобильный телефон <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input13" placeholder="Введите номер мобильного телефона">
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Ваш Skype
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input14" placeholder="Введите адрес Skype">
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<p class="reginform">
			Ссылка на страницу в соц.сети <span class="zvezda">*</span>
		</p>
	</div>
	<div class="col-md-8">
		<input type="text" name="form1" value="" id="input15" placeholder="Введите Страницу в соц.сети">
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<p class="reginform">

		</p>	</div>
		<div class="col-md-8">
			<input type="hidden" id="input16" value="masha1">
		</div>
</div>
<div class="row">
	<div class="col-md-4">
</div>
		<div class="col-md-8">
    <input type="hidden" id="input17" value="<?=$ref;?>">
		</div>
</div>
<div class="row">
	<div class="col-md-12">
		<button type="button" name="button" class="sendform">Отправить анкету для регистрации сейчас!</button>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<span class="zvezda">*</span> - Обязательно для заполнения
	</div>
</div>
</div>

<footer class="main_footer bg_dark">
	<div class="container">
		<div class="row">
			<!--div class="col-md-12">
				&copy; 2015 Александр Прокопский
				<div class="social_wrap">
					<ul>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-vk"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-github"></i></a></li>
					</ul>
				</div>
			</div-->
			<div class="col-md-4">
			    <h3>Информация</h3>
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta tempore ex animi, dolores voluptas, est omnis vero nihil ut iusto voluptatum molestias dolorum explicabo! Qui, atque, quod? Ducimus quo, non.</p>
			</div>
			<div class="col-md-4">
			    <h3>Контакты</h3>
			    <ul>
			        <li>Улица, дом</li>
			        <li>8(900)800 7000</li>
			        <li>skype: skypeNum</li>
			    </ul>
			</div>
			<div class="col-md-4">
			    <div class="social">
                    <a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
			        <a href="#" target="_blank"><i class="fa fa-vk fa-2x"></i></a>
			        <a href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
			        <a href="#" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
                </div>
                <form class="main_form" novalidate target="_blank" method="post">
						<label class="form-group">
							<span class="color_element">*</span> Ваше имя:
							<input type="text" name="name" data-validation-required-message="Вы не ввели имя" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Ваш E-mail:
							<input type="email" name="email"  data-validation-required-message="Не корректно введен E-mail" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Ваше сообщение:
							<textarea name="message"  data-validation-required-message="Вы не ввели сообщение" required></textarea>
							<span class="help-block text-danger"></span>
						</label>
						<button>Отправить</button>
					</form>
			</div>
		</div>
	</div>
</footer>

<div class="hidden"></div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<script src="libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="libs/parallax/parallax.min.js"></script>
	<script src="libs/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="libs/mixitup/mixitup.min.js"></script>
	<script src="libs/scroll2id/PageScroll2id.min.js"></script>
	<script src="libs/waypoints/waypoints.min.js"></script>
	<script src="libs/animate/animate-css.js"></script>
	<script src="libs/jqBootstrapValidation/jqBootstrapValidation.js"></script>
	<script src="libs/slick-1.5.0/slick/slick.min.js"></script>

	<script src="js/common.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".sendform").click(function(){
					var login=$("#input1").val();
					var fam=$("#input2").val();
					var name=$("#input3").val();
					var surname=$("#input4").val();
					var date=$("#input5").val();
					var passport=$("#input6").val();
					var index=$("#input7").val();
					var country=$("#input8").val();
					var region=$("#input9").val();
					var city=$("#input10").val();
					var street=$("#input11").val();
					var mail=$("#input12").val();
					var mobile=$("#input13").val();
					var skype=$("#input14").val();
					var social=$("#input15").val();
					var ref=$("#input16").val();
					var idref=$("#input17").val();


					var str="login="+login+"&fam="+fam+"&name="+name+"&surname="+surname+"&date="+date+"&passport="+passport+"&index="+index;
					str+="&country="+country+"&region="+region+"&city="+city+"&street="+street+"&mail="+mail+"&mobile="+mobile+"&skype="+skype;
					str+="&social="+social+"&reg="+ref+"&referal="+idref;

				console.log(str);
				$.ajax({
					type: "POST",
					url: "reg.php",
					data: str ,
					success: function(){

					}
				});



			});
		});
	</script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>
