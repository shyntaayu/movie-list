@extends('layout.header')
@section('content')
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
										<a href="{{ url('/detail/'.$listupcoming[$i]->id.'-'.str_replace(' ', '-',$listupcoming[$i]->original_title)) }}"><span class="lnr lnr-frame-expand"></span></a>
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

			@stop