<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/outbreak.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 14:28:28 GMT -->
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/icofont.min.css">
		<link rel="stylesheet" href="assets/css/lightcase.css">
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		
		<title>Covid-19 Outbreak</title>
	</head>

	<body>
		<!-- Mobile Menu Start Here -->
		<div class="mobile-menu">
			<nav class="mobile-header">
				<div class="header-logo">
					<a href="{{ route('home') }}"><img src="assets/images/logo/01.png" alt="logo"></a>
				</div>
				<div class="header-bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
			<nav class="mobile-menu">
				<div class="mobile-menu-area">
					<div class="mobile-menu-area-inner">
						<ul class="lab-ul">
							<li><a href="#">Home</a>
								<ul class="lab-ul">
									<li><a href="index.html">Home Style One</a></li>
									<li><a href="index-2.html">Home Style Two</a></li>
									<li><a href="index-3.html">Home Style Three</a></li>
									<li><a href="index-4.html">Home Style Four <sup>New</sup></a></li>
									<li><a href="index-5.html">Home Style Five <sup>New</sup></a></li>
									<li><a href="index-6.html">Home Style Six <sup>New</sup></a></li>
									<li><a href="index-7.html">Home Style Seven <sup>New</sup></a></li>
									<li><a href="one-page.html">One Page</a></li>
									<li><a href="index-box.html">Box Layout</a></li>
									<li><a href="http://demos.codexcoder.com/labartisan/html/covid-19-rtl/index.html">Rtl Layout</a></li>
								</ul>
							</li>
							<li class="active"><a href="#">Pages</a>
								<ul class="lab-ul">
									<li><a href="#0">About Page</a>
										<ul class="lab-ul">
											<li><a href="about.html">About Style 1</a></li>
											<li><a href="about-2.html">About Style 2</a></li>
										</ul>
									</li>
									<li><a href="faq.html">Faq</a></li>
									<li class="active"><a href="outbreak.html">Outbreak</a></li>
									<li><a href="coming-soon.html">ComingSoon</a></li>
									<li><a href="404.html">404 Page</a></li>
								</ul>
							</li>
							<li><a href="service.html">Prevention</a></li>
							<li><a href="#">Blog</a>
								<ul class="lab-ul">
									<li><a href="blog.html">Blog Style 1</a></li>
									<li><a href="blog-2.html">Blog Style 2</a></li>
									<li><a href="blog-3.html">Blog Style 3</a></li>
									<li><a href="blog-single.html">Blog Single</a></li>
								</ul>
							</li>
							<li><a href="#0">Shop</a>
								<ul class="lab-ul">
									<li><a href="shop-page.html">Products Page</a></li>
									<li><a href="shop-single.html">Product Single</a></li>
									<li><a href="cart-page.html">Cart Page</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- Mobile Menu Ending Here -->

		<!-- desktop menu start here -->
		<header class="header-section transparent-header">
			<div class="header-area">
				<div class="container">
					<div class="primary-menu">
						<div class="logo">
							<a href="{{ route('home') }}"><img src="assets/images/logo/02.png" alt="logo"></a>
                        </div>
						<div class="main-area">
							<div class="main-menu">
								<ul class="lab-ul">
									<li><a href="#">Home</a>
										<ul class="lab-ul">
											<li><a href="index.html">Home Style One</a></li>
											<li><a href="index-2.html">Home Style Two</a></li>
											<li><a href="index-3.html">Home Style Three</a></li>
											<li><a href="index-4.html">Home Style Four <sup>New</sup></a></li>
											<li><a href="index-5.html">Home Style Five <sup>New</sup></a></li>
											<li><a href="index-6.html">Home Style Six <sup>New</sup></a></li>
											<li><a href="index-7.html">Home Style Seven <sup>New</sup></a></li>
											<li><a href="one-page.html">One Page</a></li>
											<li><a href="index-box.html">Box Layout</a></li>
											<li><a href="http://demos.codexcoder.com/labartisan/html/covid-19-rtl/index.html">Rtl Layout</a></li>
										</ul>
									</li>
									<li class="active"><a href="#">Pages</a>
										<ul class="lab-ul">
											<li><a href="#0">About Page</a>
												<ul class="lab-ul">
													<li><a href="about.html">About Style 1</a></li>
													<li><a href="about-2.html">About Style 2</a></li>
												</ul>
											</li>
											<li><a href="faq.html">Faq</a></li>
											<li class="active"><a href="outbreak.html">Outbreak</a></li>
											<li><a href="coming-soon.html">ComingSoon</a></li>
											<li><a href="404.html">404 Page</a></li>
										</ul>
									</li>
									<li><a href="service.html">Prevention</a></li>
									<li><a href="#">Blog</a>
										<ul class="lab-ul">
											<li><a href="blog.html">Blog Style 1</a></li>
											<li><a href="blog-2.html">Blog Style 2</a></li>
											<li><a href="blog-3.html">Blog Style 3</a></li>
											<li><a href="blog-single.html">Blog Single</a></li>
										</ul>
									</li>
									<li><a href="#0">Shop</a>
										<ul class="lab-ul">
											<li><a href="shop-page.html">Products Page</a></li>
											<li><a href="shop-single.html">Product Single</a></li>
											<li><a href="cart-page.html">Cart Page</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<div class="header-btn">
								<a href="{{ route('track') }}" class="lab-btn style-2"><span>See more</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- desktop menu ending here -->

        <!-- Page Header Section Start Here -->
        <section class="page-header">
            <div class="container">
                <div class="page-title">
                    <h2>Mapping the Coronavirus Outbreak</h2>
                    <ul class="breadcrumb lab-ul">
                        <li><a href="index.html">Home</a></li>
                        <li>Coronavirus Outbreak</li>
                    </ul>
                </div>
            </div>
        </section>
		<!-- Page Header Section Ending Here -->
		
		<!-- corona count section start here -->
        <section class="corona-count-section pt-0 padding-tb">
            <div class="container">
				<div class="corona-wrap" id="app">
					<count></count>
					<div class="corona-count-bottom">
						<div class="gmaps">
                            <img src="assets/images/map.png" alt="map">
                        </div>
					</div>

					<div class="countcorona">
						<div class="countcorona-area" id="app">
						  	<taybo></taybo>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!-- corona count section ending here -->
		
		<!-- Footer Section Start Here -->
		<footer style="background-image: url(assets/css/bg-image/bg-3.jpg);">
			<div class="footer-top padding-tb">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="footer-item first-set">
								<div class="footer-inner">
									<div class="footer-content">
										<div class="title">
											<h6>About Covid-19</h6>
										</div>
										<div class="content">
											<p>We believe in Simple Creative and Flexible Design Standards.</p>
											<h6>Headquarters:</h6>
											<p>795 Folsom Ave, Suite 600 San Francisco, CA 94107</p>
											<ul class="lab-ul">
												<li>
													<p><span>Phone:</span>(91) 8547 632521</p>
												</li>
												<li>
													<p><span>Email:</span><a href="#">info@covid-19.com</a></p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="footer-item">
								<div class="footer-inner">
									<div class="footer-content">
										<div class="title">
											<h6>Navigate</h6>
										</div>
										<div class="content">
											<ul class="lab-ul">
												<li><a href="#"><i class="icofont-caret-right"></i>Advertisers</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>Developers</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>Resources</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>Company</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>Connect</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="footer-item">
								<div class="footer-inner">
									<div class="footer-content">
										<div class="title">
											<h6>Social Contact</h6>
										</div>
										<div class="content">
											<ul class="lab-ul">
												<li><a href="#"><i class="icofont-facebook"></i>Facebook</a></li>
												<li><a href="#"><i class="icofont-twitter"></i>Twitter</a></li>
												<li><a href="#"><i class="icofont-instagram"></i>Instagram</a></li>
												<li><a href="#"><i class="icofont-youtube"></i>YouTube</a></li>
												<li><a href="#"><i class="icofont-xing"></i>Xing</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="footer-item">
								<div class="footer-inner">
									<div class="footer-content">
										<div class="title">
											<h6>Privacy And Tos</h6>
										</div>
										<div class="content">
											<ul class="lab-ul">
												<li><a href="#"><i class="icofont-caret-right"></i>Advertiser Agreement</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>Acceptable Use Policy</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>Privacy Policy</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>Technology Privacy</a></li>
												<li><a href="#"><i class="icofont-caret-right"></i>Developer Agreement</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="section-wrapper">
						<p>&copy; 2020 All Rights Reserved. Designed by <a href="https://themeforest.net/user/codexcoder">CodexCoder</a></p>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer Section Ending Here -->

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
		<!-- scrollToTop ending here -->

		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/functions.js"></script>
		<script src="{{ mix('js/app.js') }}"></script>
		<script>
			$(document).ready(function() {
				$("#example").DataTable();
			});
		</script>
	</body>

<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/outbreak.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 14:28:31 GMT -->
</html>