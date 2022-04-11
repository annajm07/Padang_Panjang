<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?=BASEURL;?>/img/logo/<?=$pars['home']['logo']; ?>" type="image/png">
	<title>My Porfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?=BASEURL;?>/porfolio/css/bootstrap.css">
	<link rel="stylesheet" href="<?=BASEURL;?>/porfolio/css/mycss.css">
	<link rel="stylesheet" href="<?=BASEURL;?>/porfolio/vendors/linericon/style.css">
  <link rel="stylesheet" href="<?=BASEURL;?>/porfolio/css/themify-icons.css">
  <link rel="stylesheet" href="<?=BASEURL;?>/porfolio/vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?=BASEURL;?>/porfolio/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?=BASEURL;?>/porfolio/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=BASEURL;?>/porfolio/vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?=BASEURL;?>/porfolio/css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img style="max-width: 80px;" src="<?=BASEURL;?>/img/logo/<?=$pars['home']['logo']; ?>" alt=""></a>
					<a class="navbar-brand logo_inner_page" href="index.html"><img src="<?=BASEURL;?>/porfolio/img/logo2.png" alt=""></a>      
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset " id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ">
							<li class="nav-item"><a class="nav-link aktif setFont" href="<?=BASEURL;?>">Home</a></li>
							<li class="nav-item"><a class="nav-link setFont" href="<?=BASEURL;?>/about">About</a></li>
							<li class="nav-item"><a class="nav-link setFont" href="<?=BASEURL;?>/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->
	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<div class="banner_content">
							<h3>Hey There !</h3>
							<h1 class="text-uppercase">I am <?=$pars['home']['nama']; ?></h1>
							<h5 class="text-uppercase"><?=$pars['home']['pekerjaan']; ?></h5>
							<div class="social_icons my-5">
								<a href="#"><i class="ti-twitter"></i></a>
								<a href="#"><i class="ti-skype"></i></a>
								<a href="#"><i class="ti-instagram"></i></a>
								<a href="#"><i class="ti-dribbble"></i></a>
								<a href="#"><i class="ti-vimeo"></i></a>
							</div>
							<a class="primary_btn" href="#"><span>See My Work</span></a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="home_right_img">
							<img class="img-fluid" style="max-width: 400px; min-height: 350px;" src="<?=BASEURL;?>/img/profil/<?=$pars['home']['foto_profil']; ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->


	<!--================ Start Statistics Area =================-->

	<!--================ End Statistics Area =================-->


	<!--================ Start About Us Area =================-->
	
	<!--================ End About Us Area =================-->

	<!--================ Start Features Area =================-->
	<section class="services_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">Our Service <span></span></p>
						<h2>My Skill <br>
							Offer For You </h2>
					</div>
				</div>
			</div>

			<div class="row">
				<?php foreach($pars['skill'] as $skill) :?>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="service_item">
						<img src="<?=BASEURL;?>/img/pekerjaan/<?=$skill['gambar'];?>" alt="">
						<h4><?=$skill['keahlian']; ?></h4>
						<p><?=$skill['detail_keahlian']; ?></p>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->


  <!--================ Start Testimonial Area =================-->

	<!--================ End Testimonial Area =================-->




	<!--================ Start Portfolio Area =================-->

	<!--================ End Portfolio Area =================-->



	<!--================ Start Blog Area =================-->
	
	<!--================ End Blog Area =================-->


	<!--================ Start Brands Area =================-->
	
	<!--================ End Brands Area =================-->


	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="fa fa-heart" aria-hidden="true"></i></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?=BASEURL;?>/porfolio/js/jquery-3.2.1.min.js"></script>
	<script src="<?=BASEURL;?>/porfolio/js/popper.js"></script>
	<script src="<?=BASEURL;?>/porfolio/js/bootstrap.min.js"></script>
	<script src="<?=BASEURL;?>/porfolio/js/stellar.js"></script>
	<script src="<?=BASEURL;?>/porfolio/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="<?=BASEURL;?>/porfolio/vendors/isotope/isotope-min.js"></script>
	<script src="<?=BASEURL;?>/porfolio/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?=BASEURL;?>/porfolio/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?=BASEURL;?>/porfolio/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?=BASEURL;?>/porfolio/js/gmaps.min.js"></script>
	<script src="<?=BASEURL;?>/porfolio/js/theme.js"></script>
</body>

</html>