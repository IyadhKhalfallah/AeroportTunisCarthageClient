@extends('template')
@section('head')
@endsection
@section('content')
    <!--================= PAGE-COVER =================-->
    <section class="page-cover" id="cover-car-grid-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Car Listing Left Sidebar</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Car Listing Left Sidebar</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->


    <!--==== INNERPAGE-WRAPPER =====-->
    <section class="innerpage-wrapper">
        <div id="car-listing" class="innerpage-section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                        <div class="side-bar-block filter-block">
                            <h3>Sort By Filter</h3>
                            <p>Find your dream flights today</p>

                            <div class="panels-group">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-1" data-toggle="collapse" >Select Category <span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->

                                    <div id="panel-1" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check01" name="checkbox"/>
                                                    <label for="check01"><span><i class="fa fa-check"></i></span>All</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check02" name="checkbox"/>
                                                    <label for="check02"><span><i class="fa fa-check"></i></span>Compact</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check03" name="checkbox"/>
                                                    <label for="check03"><span><i class="fa fa-check"></i></span>Economy</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check04" name="checkbox"/>
                                                    <label for="check04"><span><i class="fa fa-check"></i></span>Full Size</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check05" name="checkbox"/>
                                                    <label for="check05"><span><i class="fa fa-check"></i></span>Luxury</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check06" name="checkbox"/>
                                                    <label for="check06"><span><i class="fa fa-check"></i></span>Mini Car</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check07" name="checkbox"/>
                                                    <label for="check07"><span><i class="fa fa-check"></i></span>Special</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check08" name="checkbox"/>
                                                    <label for="check08"><span><i class="fa fa-check"></i></span>Van</label></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-2" data-toggle="collapse" >Facility <span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->

                                    <div id="panel-2" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check09" name="checkbox"/>
                                                    <label for="check09"><span><i class="fa fa-check"></i></span>Air Conditioning</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check10" name="checkbox"/>
                                                    <label for="check10"><span><i class="fa fa-check"></i></span>Doors</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check11" name="checkbox"/>
                                                    <label for="check11"><span><i class="fa fa-check"></i></span>Pessanger Quantity</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check12" name="checkbox"/>
                                                    <label for="check12"><span><i class="fa fa-check"></i></span>Navigation</label></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#panel-3" data-toggle="collapse" >Rating <span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->

                                    <div id="panel-3" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check13" name="checkbox"/>
                                                    <label for="check13"><span><i class="fa fa-check"></i></span>1 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check14" name="checkbox"/>
                                                    <label for="check14"><span><i class="fa fa-check"></i></span>2 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check15" name="checkbox"/>
                                                    <label for="check15"><span><i class="fa fa-check"></i></span>3 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check16" name="checkbox"/>
                                                    <label for="check16"><span><i class="fa fa-check"></i></span>4 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check17" name="checkbox"/>
                                                    <label for="check17"><span><i class="fa fa-check"></i></span>5 Star</label></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->

                            </div><!-- end panel-group -->

                            <div class="price-slider">
                                <p><input type="text" id="amount" readonly></p>
                                <div id="slider-range"></div>
                            </div><!-- end price-slider -->
                        </div><!-- end side-bar-block -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block main-block ad-block">
                                    <div class="main-img ad-img">
                                        <a href="#">
                                            <img src="images/car-ad.jpg" class="img-responsive" alt="car-ad" />
                                            <div class="ad-mask">
                                                <div class="ad-text">
                                                    <span>Luxury</span>
                                                    <h2>Car</h2>
                                                    <span>Offer</span>
                                                </div><!-- end ad-text -->
                                            </div><!-- end columns -->
                                        </a>
                                    </div><!-- end ad-img -->
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block support-block">
                                    <h3>Need Help</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                    <div class="support-contact">
                                        <span><i class="fa fa-phone"></i></span>
                                        <p>+1 123 1234567</p>
                                    </div><!-- end support-contact -->
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                        <div class="list-block main-block cr-list-block">
                            <div class="list-content">
                                <div class="main-img list-img cr-list-img">
                                    <a href="car-detail-left-sidebar.html">
                                        <img src="images/car-list-1.jpg" class="img-responsive" alt="car-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$1250.00<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end cr-list-img -->

                                <div class="list-info cr-list-info">
                                    <h3 class="block-title"><a href="car-detail-left-sidebar.html">Luxury</a></h3>
                                    <p class="block-minor">Range Rover</p>
                                    <ul class="list-unstyled list-inline car-features">
                                        <li><span><i class="fa fa-user"></i></span>04</li>
                                        <li><span><i class="fa fa-briefcase"></i></span>04</li>
                                        <li><span><i class="fa fa-map-marker"></i></span>Gps</li>
                                        <li><span><i class="fa fa-tint"></i></span>Fuel</li>
                                        <li><span><i class="fa fa-music"></i></span>Music</li>
                                        <li><span><i class="fa fa-tv"></i></span>TV</li>
                                    </ul>
                                    <a href="car-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                </div><!-- end crs-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end cr-list-block -->

                        <div class="list-block main-block cr-list-block">
                            <div class="list-content">
                                <div class="main-img list-img cr-list-img">
                                    <a href="car-detail-left-sidebar.html">
                                        <img src="images/car-list-2.jpg" class="img-responsive" alt="car-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$1250.00<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end cr-list-img -->

                                <div class="list-info cr-list-info">
                                    <h3 class="block-title"><a href="car-detail-left-sidebar.html">Luxury</a></h3>
                                    <p class="block-minor">Range Rover</p>
                                    <ul class="list-unstyled list-inline car-features">
                                        <li><span><i class="fa fa-user"></i></span>04</li>
                                        <li><span><i class="fa fa-briefcase"></i></span>04</li>
                                        <li><span><i class="fa fa-map-marker"></i></span>Gps</li>
                                        <li><span><i class="fa fa-tint"></i></span>Fuel</li>
                                        <li><span><i class="fa fa-music"></i></span>Music</li>
                                        <li><span><i class="fa fa-tv"></i></span>TV</li>
                                    </ul>
                                    <a href="car-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                </div><!-- end crs-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end cr-list-block -->

                        <div class="list-block main-block cr-list-block">
                            <div class="list-content">
                                <div class="main-img list-img cr-list-img">
                                    <a href="car-detail-left-sidebar.html">
                                        <img src="images/car-list-3.jpg" class="img-responsive" alt="car-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$1250.00<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end cr-list-img -->

                                <div class="list-info cr-list-info">
                                    <h3 class="block-title"><a href="car-detail-left-sidebar.html">Luxury</a></h3>
                                    <p class="block-minor">Range Rover</p>
                                    <ul class="list-unstyled list-inline car-features">
                                        <li><span><i class="fa fa-user"></i></span>04</li>
                                        <li><span><i class="fa fa-briefcase"></i></span>04</li>
                                        <li><span><i class="fa fa-map-marker"></i></span>Gps</li>
                                        <li><span><i class="fa fa-tint"></i></span>Fuel</li>
                                        <li><span><i class="fa fa-music"></i></span>Music</li>
                                        <li><span><i class="fa fa-tv"></i></span>TV</li>
                                    </ul>
                                    <a href="car-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                </div><!-- end crs-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end cr-list-block -->

                        <div class="list-block main-block cr-list-block">
                            <div class="list-content">
                                <div class="main-img list-img cr-list-img">
                                    <a href="car-detail-left-sidebar.html">
                                        <img src="images/car-list-4.jpg" class="img-responsive" alt="car-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$1250.00<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end cr-list-img -->

                                <div class="list-info cr-list-info">
                                    <h3 class="block-title"><a href="car-detail-left-sidebar.html">Luxury</a></h3>
                                    <p class="block-minor">Range Rover</p>
                                    <ul class="list-unstyled list-inline car-features">
                                        <li><span><i class="fa fa-user"></i></span>04</li>
                                        <li><span><i class="fa fa-briefcase"></i></span>04</li>
                                        <li><span><i class="fa fa-map-marker"></i></span>Gps</li>
                                        <li><span><i class="fa fa-tint"></i></span>Fuel</li>
                                        <li><span><i class="fa fa-music"></i></span>Music</li>
                                        <li><span><i class="fa fa-tv"></i></span>TV</li>
                                    </ul>
                                    <a href="car-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                </div><!-- end crs-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end cr-list-block -->

                        <div class="list-block main-block cr-list-block">
                            <div class="list-content">
                                <div class="main-img list-img cr-list-img">
                                    <a href="car-detail-left-sidebar.html">
                                        <img src="images/car-list-5.jpg" class="img-responsive" alt="car-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$1250.00<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end cr-list-img -->

                                <div class="list-info cr-list-info">
                                    <h3 class="block-title"><a href="car-detail-left-sidebar.html">Luxury</a></h3>
                                    <p class="block-minor">Range Rover</p>
                                    <ul class="list-unstyled list-inline car-features">
                                        <li><span><i class="fa fa-user"></i></span>04</li>
                                        <li><span><i class="fa fa-briefcase"></i></span>04</li>
                                        <li><span><i class="fa fa-map-marker"></i></span>Gps</li>
                                        <li><span><i class="fa fa-tint"></i></span>Fuel</li>
                                        <li><span><i class="fa fa-music"></i></span>Music</li>
                                        <li><span><i class="fa fa-tv"></i></span>TV</li>
                                    </ul>
                                    <a href="car-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                </div><!-- end crs-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end cr-list-block -->

                        <div class="list-block main-block cr-list-block">
                            <div class="list-content">
                                <div class="main-img list-img cr-list-img">
                                    <a href="car-detail-left-sidebar.html">
                                        <img src="images/car-list-6.jpg" class="img-responsive" alt="car-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$1250.00<span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end cr-list-img -->

                                <div class="list-info cr-list-info">
                                    <h3 class="block-title"><a href="car-detail-left-sidebar.html">Luxury</a></h3>
                                    <p class="block-minor">Range Rover</p>
                                    <ul class="list-unstyled list-inline car-features">
                                        <li><span><i class="fa fa-user"></i></span>04</li>
                                        <li><span><i class="fa fa-briefcase"></i></span>04</li>
                                        <li><span><i class="fa fa-map-marker"></i></span>Gps</li>
                                        <li><span><i class="fa fa-tint"></i></span>Fuel</li>
                                        <li><span><i class="fa fa-music"></i></span>Music</li>
                                        <li><span><i class="fa fa-tv"></i></span>TV</li>
                                    </ul>
                                    <a href="car-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                                </div><!-- end crs-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end cr-list-block -->

                        <div class="pages">
                            <ol class="pagination">
                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                            </ol>
                        </div><!-- end pages -->

                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end car-listing -->
    </section><!-- end innerpage-wrapper -->


    <!--======================= BEST FEATURES =====================-->
    <section id="best-features" class="banner-padding black-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-dollar"></i></span>
                        <h3>Best Price Guarantee</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>Safe and Secure</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <h3>Best Travel Agents</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->

                <div class="col-sm-6 col-md-3">
                    <div class="b-feature-block">
                        <span><i class="fa fa-bars"></i></span>
                        <h3>Travel Guidelines</h3>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    </div><!-- end b-feature-block -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end best-features -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscibe to receive our interesting updates</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end newsletter-1 -->
@endsection