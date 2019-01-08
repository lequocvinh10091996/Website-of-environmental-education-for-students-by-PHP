<!DOCTYPE html>
<html lang="en">
<head>
<title>Diễn Đàn</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

        <?php session_start(); include ('modules/dien_dan/header.php'); ?>

	<!-- Menu -->

<!--	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">-->
<!--		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>-->
<!--		<div class="search">-->
<!--			<form action="#" class="header_search_form menu_mm">-->
<!--				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">-->
<!--				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">-->
<!--					<i class="fa fa-search menu_mm" aria-hidden="true"></i>-->
<!--				</button>-->
<!--			</form>-->
<!--		</div>-->
<!--		<nav class="menu_nav">-->
<!--			<ul class="menu_mm">-->
<!--				<li class="menu_mm"><a href="index.html">Home</a></li>-->
<!--				<li class="menu_mm"><a href="#">About</a></li>-->
<!--				<li class="menu_mm"><a href="#">Courses</a></li>-->
<!--				<li class="menu_mm"><a href="#">Blog</a></li>-->
<!--				<li class="menu_mm"><a href="#">Page</a></li>-->
<!--				<li class="menu_mm"><a href="contact.html">Contact</a></li>-->
<!--			</ul>-->
<!--		</nav>-->
<!--	</div>-->
	
	<!-- Home -->
    <?php include ('modules/dien_dan/home.php'); ?>
	<!-- Contact -->

	<div class="contact">

		<!-- Contact Map -->

		<!-- Contact Info -->
        <?php include ('modules/dien_dan/dien_dan.php'); ?>
	</div>

	<!-- Newsletter -->

<!--	<div class="newsletter">-->
<!--		<div class="newsletter_background" style="background-image:url(images/newsletter_background.jpg)"></div>-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col">-->
<!--					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">-->
<!---->
					<!-- Newsletter Content -->-
<!--						<div class="newsletter_content text-lg-left text-center">-->
<!--							<div class="newsletter_title">sign up for news and offers</div>-->
<!--							<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>-->
<!--						</div>-->
<!---->
						<!-- Newsletter Form -->
<!--						<div class="newsletter_form_container ml-lg-auto">-->
<!--							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">-->
<!--								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">-->
<!--								<button type="submit" class="newsletter_button">subscribe</button>-->
<!--							</form>-->
<!--						</div>-->
<!---->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->

	<!-- Footer -->

    <?php include ('modules/index/footer.php'); ?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>
</body>
</html>