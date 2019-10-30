@extends('layout.header')
@section('content')
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="container-fluid">
					<div class="row fullscreen align-items-center justify-content-center">
						<div class="col-lg-6 col-md-12 d-flex align-self-end img-right no-padding">
							<img style="height:auto; width:400px"lass="img-fluid img-responsive" src="https://image.tmdb.org/t/p/original/{{$popular->poster_path}}" alt="">
						</div>
						<div class="banner-content col-lg-6 col-md-12">
							<h1 class="title-top"><span>Rate</span> {{$popular->vote_average}}</h1>
							<h1 class="text-uppercase">
								{{$popular->original_title}}
							</h1>
							<button class="primary-btn text-uppercase"><a href="{{ url('/loadmore/popular') }}">Most popular this time</a></button>
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
								<p>Here's the now playing movie</p>
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
								<h4 class="text-white">
                                  @if ($listnowplaying[$i]->vote_average >= 1 && $listnowplaying[$i]->vote_average <= 3)
    Rp 3.500
@elseif ($listnowplaying[$i]->vote_average >= 3 && $listnowplaying[$i]->vote_average <= 6)
    Rp 8.250
@elseif ($listnowplaying[$i]->vote_average >= 6 && $listnowplaying[$i]->vote_average <= 8)
    Rp 16.350
    @elseif ($listnowplaying[$i]->vote_average >= 8 && $listnowplaying[$i]->vote_average <= 10)
    Rp 21.250
@endif
								  </h4>
								  <br>
								  <a href="{{ url('/detail/'.$listnowplaying[$i]->id.'-'.str_replace(' ', '-',$listnowplaying[$i]->original_title)) }}" class="genric-btn default-border radius">Detail</a>
						      </div>
						    </a>
						  </div>
                        </div>
                        @endfor				
					</div>
					<br><br>
					<div class="row">
						<div class="col-md-4"></div>
					<a href="{{ url('/loadmore/nowplaying') }}" class="col-md-4 genric-btn primary-border circle">Load More <span class="lnr lnr-sync"></span></a>
					<div class="col-md-4"></div>
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
								<p class="text-white">Here's the new upcoming movie</p>
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
										<a href="{{ url('/detail/'.$listupcoming[$i]->id.'-'.str_replace(' ', '-',$listupcoming[$i]->original_title)) }}">Detail</a>
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
					<br><br>
					<div class="row">
						<div class="col-md-4"></div>
					<a href="{{ url('/loadmore/upcoming') }}" class="col-md-4 genric-btn primary-border circle">Load More <span class="lnr lnr-sync"></span></a>
					<div class="col-md-4"></div>
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
									<a href="{{ url('/detail/'.$listpopular[$i]->id.'-'.str_replace(' ', '-',$listpopular[$i]->original_title)) }}">Detail</a>
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
					<br><br>
					<div class="row">
						<div class="col-md-4"></div>
					<a href="{{ url('/loadmore/popular') }}" class="col-md-4 genric-btn primary-border circle">Load More <span class="lnr lnr-sync"></span></a>
					<div class="col-md-4"></div>
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
								<img src="{{ asset('assets/img/cd.png')}}" class="img-fluid cd-img" alt="">
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
							<p>Here's the top rated movie</p>
						</div>
					</div>					
					<div class="row">
                    @for ($i = 0; $i < 12; $i++)
						<div class="col-lg-3 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
                                <a href="{{ url('/detail/'.$listtoprated[$i]->id.'-'.str_replace(' ', '-',$listtoprated[$i]->original_title)) }}"><img style="height:120px" class="img-fluid d-block mx-auto" src="https://image.tmdb.org/t/p/original/{{$listtoprated[$i]->poster_path}}" alt=""></a>
								<div class="desc">
									<a href="{{ url('/detail/'.$listtoprated[$i]->id.'-'.str_replace(' ', '-',$listtoprated[$i]->original_title)) }}" class="title">{{$listtoprated[$i]->original_title}}</a>
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
					<br><br>
					<div class="row">
						<div class="col-md-4"></div>
					<a href="{{ url('/loadmore/toprated') }}" class="col-md-4 genric-btn primary-border circle">Load More <span class="lnr lnr-sync"></span></a>
					<div class="col-md-4"></div>
</div>
                </div>
			</section>
			<!-- End related-product Area -->

			@stop