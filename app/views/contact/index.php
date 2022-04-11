<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="<?=BASEURL;?>/img/logo/<?=$pars['home']['logo'];?>" type="image/png">
  <title>Contact</title>
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
              <li class="nav-item"><a class="nav-link setFont" href="<?=BASEURL;?>/about">About</a></li>
              <li class="nav-item"><a class="nav-link aktif setFont" href="<?=BASEURL;?>/contact">Contact</a></li>
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
                  <h2>Contact Us</h2>
                  <div class="page_link">
                      <a href="index.html">Home</a>
                      <a href="blog.html">Contact</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->



  <!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -0.225865, lng: 100.6256124};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -0.30, lng: 100.10},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form action="" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="primary_btn button-contactForm">Send Message</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3><?=$pars['kontak']['alamat'];?></h3>
              <p><?=$pars['kontak']['small_alamat'];?></p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654"><?=$pars['kontak']['telepon'];?></a></h3>
              <p><?=$pars['kontak']['small_telepon'];?></p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com"><?=$pars['kontak']['email'];?></a></h3>
              <p><?=$pars['kontak']['small_email'];?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->


        
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