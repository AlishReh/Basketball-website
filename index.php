<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		
		<title>Basket</title>
		<link href="css/style.css?t=<?php echo time();?>" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
		<link href="css/adaptive.css?t=<?php echo time();?>" rel="stylesheet">
		<style>
		.main-element{
		    margin:10px auto;
		}
		@media only screen and (max-width: 1300px){
  .top{
    width: 1400px;
  }
  .headerinner{
    font-size: 100px;
  }
  .rim-image-h{
    font-size: 180px;
  }
  .definition-basket{
    font-size: 40px;
    margin: 0;
  }
  .main{
    margin-left: 145px;
  }
  .main-element{
    font-size: 80px;
  }
  .contacts-info{
    width: 1400px;
    margin-left: 100px;
    margin-bottom: 20px;
  }
  .footer{
    width: 1390px;
  }
  .myname{
    font-size: 60px;
  }
  .contacts-adress,.contacts-email,.contacts-number{
    font-size: 30px;
  }
  .social-icons li{
    margin: 10px;
    display: flex;
    padding-right: 100px;
  }
  .social-icons li img {
    width: 60px;
    height: 60px;
  }
  .footerinner{
    font-size: 60px;
  }
  .form{
    font-size: 60px;
  }
  .submit-message{
    font-size: 60px;
  }
  .map{
    padding: 70px;
    padding-left: 75px;
  }
}
	</style>
	</head>
	<body>
		<!--Header-->
		<header>
			<div class="">
				<a href="" class="headerinner">BASKET</a>
			</div>
		</header>


		<div class="top">
			<div class="image">
				<div class="rim-image"><h3 class="rim-image-h">BASKETBALL</h3></div>
			</div>
			<div class="search">
				<form class="" action="index.html" method="post">

				</form>
				<p class="definition-basket">Basketball is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court, compete with</p>
				<p class="definition-basket"> the primary objective of shooting a basketball </p>
			</div>
		</div>


		<!--Main-->
		<div class="main">
			<div class="main-element Sneakers">
				<a href="#" class="main-element-item">Sneakers</a>
			</div>

			<div class="main-element Jerseys">
				<a href="#" class="main-element-item">Jerseys</a>
			</div>

			<div class="main-element NBA">
				<a href="pages/111.html" class="main-element-item">NBA</a>
			</div>

			<div class="main-element Wallpapers">
				<a href="pages/wallpapers.php" class="main-element-item">Wallpapers</a>
			</div>
		</div>


		<!--Footer-->
		<footer class="footer">
			<div class="one">
				<div class="contacts">
					<div class="contacts-info">
						<h5 class="myname">Toktarkhan Alisher</h5>
						<p class="contacts-adress">Almaty</p>
						<a class="contacts-email" href="#">Alisher.to@mail.ru</a>
						<p class="contacts-number">+77772597536</p>
					</div>
					<ul class="social-icons">
    				<li><a href="http://www.facebook.com"><img src='images/instagram.png' /></a></li>
    				<li><a href="http://www.twitter.com"><img src='images/vk.png' /></a></li>
    				<li><a href="http://www.youtube.com"><img src='images/telegram.png' /></a></li>
					</ul>
				</div>
			</div>
			<div class="message">
				<div class="message-in">
					<p class="footerinner">Свяжитесь с нами</p>
					<form class="" action="index.html" method="post">
						<label class="form">Имя</label>
						<input type="text" name="" class="input-message">
						<label class="form">Email</label>
						<input type="email" name="" class="input-message">
						<label class="form">Сообщение</label>
						<input type="text" name="" class="input-message last">
						<button type="submit" class="submit-message">ОТПРАВИТЬ</button>
					</form>
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d372172.9093118701!2d76.66397963861934!3d43.21786053173777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e7d16c5cbab%3A0x3d44668fad986d76!2z0JDQu9C80LDRgtGL!5e0!3m2!1sru!2skz!4v1638267050063!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</footer>
	</body>
</html>
