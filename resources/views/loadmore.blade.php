@extends('layout.header-detail')
@section('content')
            <!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb" style="margin-top: 50px;">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>{{$title}}</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="{{ url('/') }}">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href="#">{{$title}}</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-lg-8 col-md-7">
						<!-- Start Filter Bar -->
						<div class="filter-bar d-flex flex-wrap align-items-center">
							<a href="#" class="grid-btn active"><i class="fa fa-th" aria-hidden="true"></i></a>
							<div class="pagination">
								<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a href="#">6</a>
								<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<!-- End Filter Bar -->
						<!-- Start Best Seller -->
						<section class="lattest-product-area pb-40 category-list">
							<div class="row">
                                @if(count($list)>1)
                            @foreach($list as $list)
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="https://image.tmdb.org/t/p/original/{{$list->poster_path}}" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="{{ url('/detail/'.$list->id.'-'.str_replace(' ', '-',$list->original_title)) }}">Detail</a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>{{$list->original_title}}</h5>
								  		<h3>
                                          @if ($list->vote_average >= 1 && $list->vote_average <= 3)
    Rp 3.500
@elseif ($list->vote_average >= 3 && $list->vote_average <= 6)
    Rp 8.250
@elseif ($list->vote_average >= 6 && $list->vote_average <= 8)
    Rp 16.350
    @elseif ($list->vote_average >= 8 && $list->vote_average <= 10)
    Rp 21.250
@endif
                                          </h3>
								   </div>
                                </div>																						@endforeach			
                                @else
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="https://image.tmdb.org/t/p/original/{{$list->poster_path}}" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="{{ url('/detail/'.$list->id.'-'.str_replace(' ', '-',$list->original_title)) }}">Detail</a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>{{$list->original_title}}</h5>
								  		<h3>
                                          @if ($list->vote_average >= 1 && $list->vote_average <= 3)
    Rp 3.500
@elseif ($list->vote_average >= 3 && $list->vote_average <= 6)
    Rp 8.250
@elseif ($list->vote_average >= 6 && $list->vote_average <= 8)
    Rp 16.350
    @elseif ($list->vote_average >= 8 && $list->vote_average <= 10)
    Rp 21.250
@endif
                                          </h3>
								   </div>
                                </div>			
                                @endif															
							</div>
						</section>
						<!-- End Best Seller -->
						<!-- Start Filter Bar -->
						<div class="filter-bar d-flex flex-wrap align-items-center">
							<div class="pagination">
								<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a href="#">6</a>
								<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<!-- End Filter Bar -->
					</div>
					<div class="col-xl-3 col-lg-4 col-md-5">
						<div class="sidebar-categories">
							<div class="head">Browse Categories</div>
							<ul class="main-categories">
                                @foreach($category as $category)
								<li class="main-nav-list"><a href="{{ url('/loadmore/'.$category->link) }}"><span class="lnr lnr-arrow-right"></span>{{$category->cat}}<span class="number">({{$category->total}})</span></a>
                                </li>
                                @endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
            @stop  
