@extends('layout.header')
@section('content')
            <!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first" style="width: 100%;">
                            <h1>Detail {{$detail->original_title}}</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="{{ url('/') }}">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href="#">{{$detail->original_title}}</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

            <!-- Start Product Details -->
            <div class="container">
                <div class="product-quick-view">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="">
                                <div class="item">
<img class="content-image img-fluid d-block mx-auto" src="https://image.tmdb.org/t/p/original/{{$detail->poster_path}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="quick-view-content">
                                <div class="top">
                                    <h3 class="head">{{$detail->original_title}}</h3>
                                    <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">
                                    @if ($detail->vote_average >= 1 && $detail->vote_average <= 3)
    Rp 3.500
@elseif ($detail->vote_average >= 3 && $detail->vote_average <= 6)
    Rp 8.250
@elseif ($detail->vote_average >= 6 && $detail->vote_average <= 8)
    Rp 16.350
    @elseif ($detail->vote_average >= 8 && $detail->vote_average <= 10)
    Rp 21.250
@endif
                                    </span></div>
                                    <div class="category">Category: <span>Household</span></div>
                                    <div class="available">Availibility: <span>In Stock</span></div>
                                </div>
                                <div class="middle">
                                    <p class="content">{{$detail->overview}}</p>
                                </div>
                                <div >
                                    <div class="quantity-container d-flex align-items-center mt-15">
                                        Quantity:
                                        <input type="text" class="quantity-amount ml-15" value="1" />
                                        <div class="arrow-btn d-inline-flex flex-column">
                                            <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                                            <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                                        </div>

                                    </div>
                                    <div class="d-flex mt-20">
                                        <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                                        <a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
                                        <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="details-tab-navigation d-flex justify-content-center mt-30">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li>
                            <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-expanded="true">Description</a>
                        </li>
                        <li>
                            <a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification" role="tab" aria-controls="specification">Credit</a>
                        </li>
                        <li>
                            <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments">Comments</a>
                        </li>
                        <li>
                            <a class="nav-link active" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description">
                        <div class="description">
                            <p>{{$detail->overview}}</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification">
                    <div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="country">Character</div>
									<div class="visit">Name</div>
                                </div>
                                @foreach ($credit as $credit)
								<div class="table-row">
									<div class="serial">{{$loop->index+1}}</div>
									<div class="country"> 
                                        @if($credit->profile_path!=null)
                                        <img style="height:100px" src="https://image.tmdb.org/t/p/original/{{$credit->profile_path}}" alt="{{$credit->character}}">{{$credit->character}}
                                        @endif
                                    </div>
									<div class="visit">{{$credit->name}}</div>
                                </div>
                                @endforeach
							</div>
						</div>
                    </div>
                    <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments">
                        <div class="review-wrapper">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="total-comment">
                                        <div class="single-comment">
                                            <div class="user-details d-flex align-items-center flex-wrap">
                                                <img src="img/organic-food/u1.png" class="img-fluid order-1 order-sm-1" alt="">
                                                <div class="user-name order-3 order-sm-2">
                                                    <h5>Blake Ruiz</h5>
                                                    <span>12th Feb, 2017 at 05:56 pm</span>
                                                </div>
                                                <a href="#" class="view-btn color-2 reply order-2 order-sm-3"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a>
                                            </div>

                                            <p class="user-comment">
                                                Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                            </p>
                                        </div>
                                        <div class="single-comment reply-comment">
                                            <div class="user-details d-flex align-items-center flex-wrap">
                                                <img src="img/organic-food/u2.png" class="img-fluid order-1 order-sm-1" alt="">
                                                <div class="user-name order-3 order-sm-2">
                                                    <h5>Logan May</h5>
                                                    <span>12th Feb, 2017 at 05:56 pm</span>
                                                </div>
                                                <a href="#" class="view-btn color-2 reply order-2 order-sm-3"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a>
                                            </div>
                                            <p class="user-comment">
                                                Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                            </p>
                                        </div>
                                        <div class="single-comment">
                                            <div class="user-details d-flex align-items-center flex-wrap">
                                                <img src="img/organic-food/u3.png" class="img-fluid order-1 order-sm-1" alt="">
                                                <div class="user-name order-3 order-sm-2">
                                                    <h5>Aaron Anderson</h5>
                                                    <span>12th Feb, 2017 at 05:56 pm</span>
                                                </div>
                                                <a href="#" class="view-btn color-2 reply order-2 order-sm-3"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a>
                                            </div>
                                            <p class="user-comment">
                                                Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer hears tales of diamonds and begins dreaming of vast riches. He sells his farm and hikes off over the horizon, never to be heard from again.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="add-review">
                                        <h3>Post a comment</h3>
                                        <form action="#" class="main-form">
                                            <input type="text" placeholder="Your Full name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Your Full name'" required class="common-input">
                                            <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address'" required class="common-input">
                                            <input type="text" placeholder="Phone Number" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone Number'" required class="common-input">
                                            <textarea placeholder="Messege" onfocus="this.placeholder=''" onblur="this.placeholder = 'Messege'" required class="common-textarea"></textarea>
                                            <button class="view-btn color-2"><span>Submit Now</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews">
                        <div class="review-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="review-stat d-flex align-items-center flex-wrap">
                                        <div class="review-overall">
                                            <h3>Overall</h3>
                                            <div class="main-review">4.0</div>
                                            <span>(03 Reviews)</span>
                                        </div>
                                        <div class="review-count">
                                            <h4>Based on 3 Reviews</h4>
                                            <div class="single-review-count d-flex align-items-center">
                                                <span>5 Star</span>
                                                <div class="total-star five-star d-flex align-items-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <span>01</span>
                                            </div>
                                            <div class="single-review-count d-flex align-items-center">
                                                <span>4 Star</span>
                                                <div class="total-star four-star d-flex align-items-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <span>01</span>
                                            </div>
                                            <div class="single-review-count d-flex align-items-center">
                                                <span>3 Star</span>
                                                <div class="total-star three-star d-flex align-items-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <span>01</span>
                                            </div>
                                            <div class="single-review-count d-flex align-items-center">
                                                <span>2 Star</span>
                                                <div class="total-star two-star d-flex align-items-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <span>00</span>
                                            </div>
                                            <div class="single-review-count d-flex align-items-center">
                                                <span>1 Star</span>
                                                <div class="total-star one-star d-flex align-items-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <span>00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total-comment">
                                    @foreach ($review as $review)
                                        <div class="single-comment">
                                            <div class="user-details d-flex align-items-center">
                                                <img src="img/organic-food/u1.png" class="img-fluid" alt="">
                                                <div class="user-name">
                                                    <h5>{{$review->author}}</h5>
                                                    <div class="total-star five-star d-flex align-items-center">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="user-comment">
                                            {{$review->content}}
                                            </p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="add-review">
                                        <h3>Add a Review</h3>
                                        <div class="single-review-count mb-15 d-flex align-items-center">
                                            <span>Your Rating:</span>
                                            <div class="total-star five-star d-flex align-items-center">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <span>Outstanding</span>
                                        </div>
                                        <form action="#" class="main-form">
                                            <input type="text" placeholder="Your Full name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Your Full name'" required class="common-input">
                                            <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address'" required class="common-input">
                                            <input type="text" placeholder="Phone Number" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone Number'" required class="common-input">
                                            <textarea placeholder="Review" onfocus="this.placeholder=''" onblur="this.placeholder = 'Review'" required class="common-textarea"></textarea>
                                            <button class="view-btn color-2"><span>Submit Now</span></button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Details -->
                    
            <!-- Start Most Search Product Area -->
            <section class="pt-100 pb-100">
                <div class="container">
                    <div class="organic-section-title text-center">
                        <h3>Most Recommendations Movie</h3>
                    </div>
                    <div class="row mt-30">
                    @for ($i = 0; $i < 12; $i++)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="02-11-product-details.html"><img src="https://image.tmdb.org/t/p/original/{{$recom[$i]->poster_path}}" alt=""></a>
                                <div class="desc">
                                    <a href="02-11-product-details.html" class="title">{{$recom[$i]->original_title}}</a>
                                    <div class="price"><span class="lnr lnr-tag"></span>
                                    @if ($recom[$i]->vote_average >= 1 && $recom[$i]->vote_average <= 3)
    Rp 3.500
@elseif ($recom[$i]->vote_average >= 3 && $recom[$i]->vote_average <= 6)
    Rp 8.250
@elseif ($recom[$i]->vote_average >= 6 && $recom[$i]->vote_average <= 8)
    Rp 16.350
    @elseif ($recom[$i]->vote_average >= 8 && $recom[$i]->vote_average <= 10)
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
            <!-- End Most Search Product Area -->
            
            <!-- Modal Quick Product View -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="container relative">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="product-quick-view">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="quick-view-carousel">
                                        <div class="item" style="background: url(img/organic-food/q1.jpg);">

                                        </div>
                                        <div class="item" style="background: url(img/organic-food/q1.jpg);">

                                        </div>
                                        <div class="item" style="background: url(img/organic-food/q1.jpg);">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="quick-view-content">
                                        <div class="top">
                                            <h3 class="head">Mill Oil 1000W Heater, White</h3>
                                            <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$149.99</span></div>
                                            <div class="category">Category: <span>Household</span></div>
                                            <div class="available">Availibility: <span>In Stock</span></div>
                                        </div>
                                        <div class="middle">
                                            <p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.</p>
                                            <a href="#" class="view-full">View full Details <span class="lnr lnr-arrow-right"></span></a>
                                        </div>
                                        <div class="bottom">
                                            <div class="color-picker d-flex align-items-center">Color:
                                                <span class="single-pick"></span>
                                                <span class="single-pick"></span>
                                                <span class="single-pick"></span>
                                                <span class="single-pick"></span>
                                                <span class="single-pick"></span>
                                            </div>
                                            <div class="quantity-container d-flex align-items-center mt-15">
                                                Quantity:
                                                <input type="text" class="quantity-amount ml-15" value="1" />
                                                <div class="arrow-btn d-inline-flex flex-column">
                                                    <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                                                    <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                                                </div>

                                            </div>
                                            <div class="d-flex mt-20">
                                                <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                                                <a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
                                                <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @stop  