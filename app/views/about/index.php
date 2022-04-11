<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?=BASEURL;?>/img/logo/<?=$pars['home']['logo']; ?>" type="image/png">
	<title>About</title>
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
							<li class="nav-item"><a class="nav-link setFont" href="<?=BASEURL;?>">Home</a></li>
							<li class="nav-item"><a class="nav-link aktif setFont" href="<?=BASEURL;?>/about">About</a></li>
							<li class="nav-item"><a class="nav-link setFont" href="<?=BASEURL;?>/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

  <!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>About Us</h2>
                  <div class="page_link">
                      <a href="index.html">Home</a>
                      <a href="about.html">About</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->


  <!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="<?=BASEURL;?>/porfolio/img/about-us.png" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
						<p class="top_text">About me <span></span></p>
						<h2>
							<?=$pars['home']['pekerjaan']; ?>
						</h2>
						<p>
							<?=$pars['about']['deskripsi']; ?>
						</p>
						<a class="primary_btn" href="#"><span>Download CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
  <!--================ End About Us Area =================-->
  

  <!--================ Start Testimonial Area =================-->
	
	<!--================ End Testimonial Area =================-->


  <!--================ Start Brands Area =================-->
	<
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