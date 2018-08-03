<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Shop</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
		    <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.css')}}" />
		    <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.skinFlat.css')}}" />
			<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="menutop-wrap">
					<div class="menu-top container">
						<div class="d-flex justify-content-between align-items-center">
							<ul class="list">
								<li><a href="tel:+12312-3-1209">+12312-3-1209</a></li>
								<li><a href="mailto:support@colorlib.com">support@colorlib.com</a></li>								
							</ul>
							<ul class="list">
								<li><a href="#">login</a></li>
							</ul>
						</div>
					</div>					
				</div>
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="#">
						  	<img src="img/logo.png" alt="">
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="#home">Home</a></li>
								<li><a href="#catagory">Now Playing</a></li>
								<li><a href="#men">UpComing</a></li>
								<li><a href="#women">Popular</a></li>
								<li><a href="#latest">Top Rated</a></li>
									<!-- Dropdown -->
								    <li class="dropdown">
								      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								        Pages
								      </a>
								      <div class="dropdown-menu">
								        <a class="dropdown-item" href="category.html">Category</a>
								        <a class="dropdown-item" href="single.html">Single</a>
								        <a class="dropdown-item" href="cart.html">Cart</a>
								        <a class="dropdown-item" href="checkout.html">Checkout</a>
								        <a class="dropdown-item" href="confermation.html">Confermation</a>
								        <a class="dropdown-item" href="login.html">Login</a>
								        <a class="dropdown-item" href="tracking.html">Tracking</a>
								        <a class="dropdown-item" href="generic.html">Generic</a>
								        <a class="dropdown-item" href="elements.html">Elements</a>
								      </div>
								    </li>									
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="container-fluid">
					<div class="row fullscreen align-items-center justify-content-center">
						<div class="col-lg-6 col-md-12 d-flex align-self-end img-right no-padding">
							<img class="img-fluid" src="https://image.tmdb.org/t/p/original/{{$popular->poster_path}}" alt="">
						</div>
						<div class="banner-content col-lg-6 col-md-12">
							<h1 class="title-top"><span>Flat</span> 75%Off</h1>
							<h1 class="text-uppercase">
								It’s Happening <br>
								this Season!
							</h1>
							<button class="primary-btn text-uppercase"><a href="#">Purchase Now</a></button>
						</div>							
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start category Area -->
			<section class="category-area section-gap section-gap" id="catagory">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40">
							<div class="title text-center">
								<h1 class="mb-10">Now Playing</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					
					<div class="row">
                    @for ($i = 0; $i < 6; $i++)
						<div class="col-lg-4 col-md-4 mb-10">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="https://image.tmdb.org/t/p/original/{{$listnowplaying[$i]->poster_path}}" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">{{$listnowplaying[$i]->original_title}}</h3>
						      </div>
						    </a>
						  </div>
                        </div>
                        @endfor				
					</div>
				</div>	
			</section>
			<!-- End category Area -->
			
			<!-- Start men-product Area -->
			<section class="men-product-area section-gap relative" id="men">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40">
							<div class="title text-center">
								<h1 class="text-white mb-10">New Upcoming Movies</h1>
								<p class="text-white">Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>
					<div class="row">
                    @for ($i = 0; $i < 4; $i++)

						<div class="col-lg-3 col-md-6 single-product">
						  <div class="content">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="https://image.tmdb.org/t/p/original/{{$listupcoming[$i]->poster_path}}" alt="">
						      <div class="content-details fadeIn-bottom">
							        <div class="bottom d-flex align-items-center justify-content-center">
										<a href="#"><span class="lnr lnr-heart"></span></a>
										<a href="#"><span class="lnr lnr-layers"></span></a>
										<a href="#"><span class="lnr lnr-cart"></span></a>
										<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
									</div>
						      </div>
						  </div>
						  <div class="price">
						  		<h5 class="text-white">{{$listupcoming[$i]->original_title}}</h5>
						  		<h3 class="text-white">
                                  @if ($listupcoming[$i]->vote_average >= 1 && $listupcoming[$i]->vote_average <= 3)
    Rp 3.500
@elseif ($listupcoming[$i]->vote_average >= 3 && $listupcoming[$i]->vote_average <= 6)
    Rp 8.250
@elseif ($listupcoming[$i]->vote_average >= 6 && $listupcoming[$i]->vote_average <= 8)
    Rp 16.350
    @elseif ($listupcoming[$i]->vote_average >= 8 && $listupcoming[$i]->vote_average <= 10)
    Rp 21.250
@endif
                                  </h3>
						   </div>
                        </div>	
                        @endfor																		
					</div>
				</div>	
			</section>
			<!-- End men-product Area -->

			<!-- Start women-product Area -->
			<section class="women-product-area section-gap" id="women">
				<div class="container">
					<div class="countdown-content pb-40">
						<div class="title text-center">
							<h1 class="mb-10">Popular</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>
					<div class="row">
                    @for ($i = 0; $i < 4; $i++)
						<div class="col-lg-3 col-md-6 single-product">
						  <div class="content">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" width="10%" src="https://image.tmdb.org/t/p/original/{{$listpopular[$i]->poster_path}}" alt="">
						      <div class="content-details fadeIn-bottom">
							        <div class="bottom d-flex align-items-center justify-content-center">
										<a href="#"><span class="lnr lnr-heart"></span></a>
										<a href="#"><span class="lnr lnr-layers"></span></a>
										<a href="#"><span class="lnr lnr-cart"></span></a>
										<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
									</div>
						      </div>
						  </div>
						  <div class="price">
						  		<h5>{{$listpopular[$i]->original_title}}</h5>
						  		<h3>
                                  @if ($listpopular[$i]->vote_average >= 1 && $listpopular[$i]->vote_average <= 3)
    Rp 3.500
@elseif ($listpopular[$i]->vote_average >= 3 && $listpopular[$i]->vote_average <= 6)
    Rp 8.250
@elseif ($listpopular[$i]->vote_average >= 6 && $listpopular[$i]->vote_average <= 8)
    Rp 16.350
    @elseif ($listpopular[$i]->vote_average >= 8 && $listpopular[$i]->vote_average <= 10)
    Rp 21.250
@endif
                                  </h3>
						   </div>						  
                        </div>
                        @endfor																						
					</div>
				</div>	
			</section>
			<!-- End women-product Area -->
			
			<!-- Start Count Down Area -->
			<div class="countdown-area">
				<div class="container">
					<div class="countdown-content">
						<div class="title text-center">
							<h1 class="mb-10">Exclusive Hot Deal Ends in:</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-4"></div>
						<div class="col-xl-6 col-lg-7">
							<div class="countdown d-flex justify-content-center justify-content-md-end" id="js-countdown">
								<div class="countdown-item">
									<div class="countdown-timer js-countdown-days time" aria-labelledby="day-countdown">

									</div>

									<div class="countdown-label" id="day-countdown">Days</div>
								</div>

								<div class="countdown-item">
									<div class="countdown-timer js-countdown-hours" aria-labelledby="hour-countdown">

									</div>

									<div class="countdown-label" id="hour-countdown">Hours</div>
								</div>

								<div class="countdown-item">
									<div class="countdown-timer js-countdown-minutes" aria-labelledby="minute-countdown">

									</div>

									<div class="countdown-label" id="minute-countdown">Minutes</div>
								</div>

								<div class="countdown-item">
									<div class="countdown-timer js-countdown-seconds" aria-labelledby="second-countdown">

									</div>

									<div class="countdown-label text" id="second-countdown">Seconds</div>
								</div>
								<a href="#" class="view-btn primary-btn2"><span>Shop Now</span></a>
								<img src="img/cd.png" class="img-fluid cd-img" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Count Down Area -->

			<!-- Start related-product Area --> 
			<section class="related-product-area section-gap" id="latest">
				<div class="container">
					<div class="related-content">
						<div class="title text-center">
							<h1 class="mb-10">Top Rated</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>					
					<div class="row">
                    @for ($i = 0; $i < 12; $i++)
						<div class="col-lg-3 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
                                <a href="#"><img style="height:120px" class="img-fluid d-block mx-auto" src="https://image.tmdb.org/t/p/original/{{$listtoprated[$i]->poster_path}}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">{{$listtoprated[$i]->original_title}}</a>
                                    <div class="price"><span class="lnr lnr-tag"></span>
                                    @if ($listtoprated[$i]->vote_average >= 1 && $listtoprated[$i]->vote_average <= 3)
    Rp 3.500
@elseif ($listtoprated[$i]->vote_average >= 3 && $listtoprated[$i]->vote_average <= 6)
    Rp 8.250
@elseif ($listtoprated[$i]->vote_average >= 6 && $listtoprated[$i]->vote_average <= 8)
    Rp 16.350
    @elseif ($listtoprated[$i]->vote_average >= 8 && $listtoprated[$i]->vote_average <= 10)
    Rp 21.250
@endif
                                </div>
								</div>
							</div>							
                        </div>
                        @endfor																			
                    </div>
                </div>
			</section>
			<!-- End related-product Area -->
	
			<!-- Start brand Area -->
			<section class="brand-area pb-100">
				<div class="container">
					<div class="row logo-wrap">
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/br1.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/br2.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/br3.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/br4.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/br5.png" alt="">
							</a>
					</div>	
				</div>	
			</section>
			<!-- End brand Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">

										<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="d-flex flex-row">

											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
				                          	
											<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
										</div>		
										<div class="info"></div>
										</form>
								</div>
								</div>
						</div>						
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
					<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">

						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
			<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
			<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
			<script src="{{ asset('assets/js/ion.rangeSlider.js')}}"></script>
			<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>			
			<script src="{{ asset('assets/js/main.js')}}"></script>	
			
		</body>
	</html>