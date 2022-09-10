<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Website Demo</title>
	<link rel="icon" href="img/logo.png">

	<!-- css links -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!-- owl carousel -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">

	<!-- aos css -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- magnific poup -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

  
</head>
<body>

	<!-- header section -->
	<header>
		<div class="header">
			<div class="top_sec_top">
				<div class="top_sec container">
					<div class="top_icon">
						<a href="#"><i class="bi bi-facebook"></i></a>
						<a href="#"><i class="bi bi-instagram"></i></a>
						<a href="#"><i class="bi bi-twitter"></i></a>
					</div>
					<div class="top_email">
						<a href="#"><i class="bi bi-envelope-fill"></i> contact@gmail.com</a>
					</div>
				</div>
			</div>

            <!-- nav bar -->
			<nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                                    Services
                                </a>
                                <ul class="dropdown-menu" >
                                    <li><a class="dropdown-item" href="#">Services 1</a></li>
                                    <li><a class="dropdown-item" href="#">Services 2</a></li>
                                    <li><a class="dropdown-item" href="#">Services 3</a></li>
                                </ul>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
		</div>
	</header>

	<!-- carousel section start -->
	<section class="slider">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
			    <div class="carousel-item active">
				    <img src="img/carousel1.jpg" class="d-block">
				    <div class="carousel-caption d-md-block">
				        <h5><span>First</span> slide label</h5>
				        <p>Some representative placeholder content for the first slide.</p>
				        <div class="c_btn">
				        	<a href="#">About us</a>
				        </div>
				    </div>
			    </div>
			    <div class="carousel-item">
				    <img src="img/carousel2.jpg" class="d-block">
				    <div class="carousel-caption d-md-block">
				        <h5><span>Second</span> slide label</h5>
				        <p>Some representative placeholder content for the second slide.</p>
				        <div class="c_btn">
				        	<a href="#">About us</a>
				        </div>
				    </div>
			    </div>
			    <div class="carousel-item">
				    <img src="img/carousel3.jpg" class="d-block">
				    <div class="carousel-caption d-md-block">
				        <h5><span>Third</span> slide label</h5>
				        <p>Some representative placeholder content for the third slide.</p>
				        <div class="c_btn">
				        	<a href="#">About us</a>
				        </div>
				    </div>
			    </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>

	<!-- feature sections start -->
	<section class="feature">
		<h1 class="head_line"><span>F</span>eature</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="f_box">
						<img src="img/car1.jpg">
						<h3>Scorpio</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="feat_btn">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="f_box">
						<img src="img/car2.jpg">
						<h3>Scorpio</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="feat_btn">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="f_box">
						<img src="img/car3.jpg">
						<h3>Scorpio</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="feat_btn">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="f_box">
						<img src="img/car4.jpg">
						<h3>Scorpio</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="feat_btn">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About section start -->
	<section class="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="about">
						<h2><span>A</span>bout Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<div class="ab_btn">
							<a href="#">About Us</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="about">
						<img data-aos="fade-left" data-aos-delay="100" src="img/car5.png">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- services section -->
	<section class="services">
		<h1 class="head_line"><span>S</span>ervices</h1>
		<div class="container">
			<div class="owl-carousel owl-theme">
				<div class="serv_box">
					<img src="img/car1.jpg">
					<h3> Mahindra Scorpio 2022 </h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="serv_box">
					<img src="img/car2.jpg">
					<h3> Mahindra Scorpio 2022 </h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="serv_box">
					<img src="img/car3.jpg">
					<h3> Mahindra Scorpio 2022 </h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="serv_box">
					<img src="img/car4.jpg">
					<h3> Mahindra Scorpio 2022 </h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- gallery section -->
	<section class="gallery">
		<h1 class="head_line"><span>G</span>allery</h1>
		<div class="container">
			<div class="popup-gallery">
				<div class="row">
					<div class="col-md-3">
						<a href="img/car1.jpg" title="The Cleaner">
							<img src="img/car1.jpg">
						</a>
					</div>
					<div class="col-md-3">
						<a href="img/car2.jpg" title="The Cleaner">
							<img src="img/car2.jpg">
						</a>
					</div>	
					<div class="col-md-3">
						<a href="img/car3.jpg" title="The Cleaner">
							<img src="img/car3.jpg">
						</a>
					</div>	
					<div class="col-md-3">
						<a href="img/car4.jpg" title="The Cleaner">
							<img src="img/car4.jpg">
						</a>
					</div>	
					<div class="col-md-3">
						<a href="img/carousel1.jpg" title="The Cleaner">
							<img src="img/carousel1.jpg">
						</a>
					</div>	
					<div class="col-md-3">
						<a href="img/carousel2.jpg" title="The Cleaner">
							<img src="img/carousel2.jpg">
						</a>
					</div>	
					<div class="col-md-3">
						<a href="img/carousel3.jpg" title="The Cleaner">
							<img src="img/carousel3.jpg">
						</a>
					</div>	
					<div class="col-md-3">
						<a href="img/carousel4.jpeg" title="The Cleaner">
							<img src="img/carousel4.jpeg">
						</a>
					</div>		
				</div>
			</div>
		</div>
	</section>
	
	<!-- videos sections -->
	<section class="videos">
		<h1 class="head_line"><span>V</span>ideos</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="videos_box">
						<iframe id="ytplayer" type="text/html" width="100%" height="350"
							src="https://www.youtube.com/embed/5waZAbCGC-A?autoplay=1&origin=http://example.com"
							frameborder="0"></iframe>
					</div>
				</div>
				<div class="col-md-6">
					<div class="videos_box">
						<iframe id="ytplayer" type="text/html" width="100%" height="350"
							src="https://www.youtube.com/embed/dlmsLnGwrDE?autoplay=1&origin=http://example.com"
							frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- section testimonial -->
	<section class="testimonial">
		<h1 class="head_line"><span>T</span>estimonial</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="testi_box" onclick="myFunction('1')">
						<div class="row">
							<div class="col-md-4">
								<div class="testi_details">
									<img src="img/testimg1.jpg">
								</div>
							</div>
							<div class="col-md-8">
								<div class="testi_details">
									<div class="star">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
									</div>
									<p>19-07-2022 04:23:58 pm</p>
									<h2>BK MD Pal <span> Reflexologist</span></h2>
									<h4>Click here to see riviews</h4>
								</div>
							</div>
						</div>
					</div>
					<div id="myDIV-1"class="t_details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<br>
				</div>
				
				<div class="col-md-6">
					<div class="testi_box" onclick="myFunction('2')">
						<div class="row">
							<div class="col-md-4">
								<div class="testi_details">
									<img src="img/testimg2.jpg">
								</div>
							</div>
							<div class="col-md-8">
								<div class="testi_details">
									<div class="star">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
									</div>
									<p>19-07-2022 04:23:58 pm</p>
									<h2>BK MD Pal <span> Reflexologist</span></h2>
									<h4>Click here to see riviews</h4>
								</div>
							</div>
						</div>
					</div>
					<div id="myDIV-2" class="t_details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<br>
				</div>
				
				<div class="col-md-6">
					<div class="testi_box" onclick="myFunction('3')">
						<div class="row">
							<div class="col-md-4">
								<div class="testi_details">
									<img src="img/testimg3.jpg">
								</div>
							</div>
							<div class="col-md-8">
								<div class="testi_details">
									<div class="star">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
									</div>
									<p>19-07-2022 04:23:58 pm</p>
									<h2>BK MD Pal <span> Reflexologist</span></h2>
									<h4>Click here to see riviews</h4>
								</div>
							</div>
						</div>
					</div>
					<div id="myDIV-3" class="t_details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<br>
				</div>
				
				<div class="col-md-6">
					<div class="testi_box" onclick="myFunction('4')">
						<div class="row">
							<div class="col-md-4">
								<div class="testi_details">
									<img src="img/testimg1.jpg">
								</div>
							</div>
							<div class="col-md-8">
								<div class="testi_details">
									<div class="star">
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
										<i class="bi bi-star-fill"></i>
									</div>
									<p>19-07-2022 04:23:58 pm</p>
									<h2>BK MD Pal <span> Reflexologist</span></h2>
									<h4>Click here to see riviews</h4>
								</div>
							</div>
						</div>
					</div>
					<div id="myDIV-4" class="t_details">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<br>
				</div>

			</div>
		</div>
	</section>

	<!-- section contact -->
	<section class="contact">
		<h1 class="head_line"><span>C</span>ontact</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact_box">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="c_box">
									<i class="bi bi-geo-alt-fill"></i>
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="c_box">
									<h3>Our Office Address</h3>
									<p>Malad West, Mumbai, Maharashtra 400064</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="c_box">
									<i class="bi bi-envelope-fill"></i>
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="c_box">
									<h3>Our Email</h3>
									<p>contact@gmail.com</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="c_box">
									<i class="bi bi-telephone-fill"></i>
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="c_box">
									<h3>Call Us</h3>
									<p>+91-9988665533</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact_box">
						<form>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter Name">
							    <input type="email" class="form-control" placeholder="Enter email">
							    <input type="number" class="form-control" placeholder="Enter Number">
							    <textarea class="form-control" placeholder="Your Message" rows="4"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
				<div class="col-md-12">
					<div class="contact_box">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115408.23982817648!2d82.92106844222832!3d25.32074609976792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2db76febcf4d%3A0x68131710853ff0b5!2sVaranasi%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1662797622086!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- footer section -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer_box">
						<h2>About Us</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. 
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer_box">
						<h2>Quick links</h2>
						<ul>
							<li><a href="#">About</a></li>
							<li><a href="#">Feature</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer_box">
						<h2>Contact</h2>
						<ul>
							<li>Malad West, Mumbai, Maharashtra 400064</li>
							<li>contact@gmail.com</li>
							<li>+91-9988665566</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p>&copy; Copyrights 2022 - 2023.Pepper.All Rights Reserved.</p>
		</div>
	</footer>






	<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


	<script src="js/main.js"></script>

	<!-- aos css -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  	AOS.init();
	</script>

	<!-- owl carousel -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script>
		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    autoplay:true,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:4
		        }
		    }
		})
	</script>

	<!-- magnific poup -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.popup-gallery').magnificPopup({
				delegate: 'a',
				type: 'image',
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-img-mobile',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0,1]
				}
			});
		});
	</script>

	<!-- hide and show -->
	<script>
		function myFunction(y) {
		   if (y === undefined) {
		      y = 1;
		   }
		   var x = document.getElementById('myDIV-'+y);
		   if (x.style.display === 'block') {
		     x.style.display = 'none';
		   } else {
		     x.style.display = 'block';
		   }
		}
	</script>

</body>
</html>