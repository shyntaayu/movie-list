<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/ic_logo.png')}}"/>

    <title>Angkringan</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/pricing.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">


    <script src="{{ asset('assets/js/jquery-1.11.2.min.js')}}"></script>
    <!-- <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script> -->

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(-7.9457792, 112.6502346),
                zoom: 16,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-7.9457792, 112.6502346),
                title: "Mamma's Kitchen Restaurant"
            });

            // To add the marker to the map, call setMap();
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</head>

<body data-spy="scroll" data-target="#template-navbar">

    <!--== 4. Navigation ==-->
    <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img id="logo" src="{{asset('assets/images/Logo_main.png')}}" class="logo img-responsive">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="Food-fair-toggle">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">about</a>
                    </li>
                    <li>
                        <a href="#list">list</a>
                    </li>
                    <li>
                        <a href="#team">team</a>
                    </li>
                    <li>
                        <a href="#contact">contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.row -->
    </nav>


    <!--== 5. Header ==-->
    <section id="header-slider" class="owl-carousel">
        <div class="item">
            <div class="container">
                <div class="header-content">
                    <h1 class="header-title"> JER BASUKI MAWA BEA</h1>
                    <p class="header-sub-title">kabeh gegayuhan iku mesthi ana ragade utawa ana biayane/pangorbanan</p>
                </div>
                <!-- /.header-content -->
            </div>
        </div>
        <div class="item">
            <div class="container">
                <div class="header-content">
                    <h1 class="header-title">BATHOK BOLU ISI MADU</h1>
                    <p class="header-sub-title">wong asor nanging sugih kapinteran</p>
                </div>
                <!-- /.header-content -->
            </div>
        </div>
        <div class="item">
            <div class="container">
                <div class="header-content text-right pull-right">
                    <h1 class="header-title">BECIK KETITIK ALA KETARA</h1>
                    <p class="header-sub-title">becik utawa ala bakal ketara ing tembe burine</p>
                </div>
                <!-- /.header-content -->
            </div>
        </div>
    </section>



    <!--== 6. About us ==-->
    <section id="about" class="about">
        <!--<img src="images/icons/about_color.png" class="img-responsive section-icon hidden-sm hidden-xs">-->
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                    </div>
                    <div class="vl"></div>
                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <h3 class="section-content-title">About us</h3>
                            <p class="section-content-para">
                                <strong>Angkringan</strong> (berasal dari bahasa Jawa
                                <i>angkring</i> yang berarti alat dan tempat jualan makanan keliling yang pikulannya berbentuk
                                melengkung ke atas) adalah sebuah gerobak dorong untuk menjual berbagai macam makanan dan
                                minuman di pinggir jalan di Jawa Tengah dan Yogyakarta.
                            </p>
                            <p class="section-content-para">
                                Di Solo angkringan dikenal sebagai warung
                                <strong>hik</strong> ("
                                <strong>h</strong>idangan
                                <strong>istimewa</strong> a la
                                <strong>kampung</strong>") atau wedangan. Gerobag angkringan biasa ditutupi dengan kain terpal plastik
                                dan bisa memuat sekitar 8 orang pembeli. Beroperasi mulai sore hari, ia mengandalkan penerangan
                                tradisional yaitu
                                <strong>senthir</strong> (ind.lentera, penerangan sangat sederhana tanpa kaca semprong dibanding
                                dengan lampu tempel atau teplok yang terdiri dari botol biasanya berukuran pendek lengkap
                                dengan sumbu dan minyak tanah atau minyak kelentik sebagai bahan bakarnya), dan juga dibantu
                                oleh terangnya lampu jalan.
                            </p>
                        </div>
                        <!-- /.section-content -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#about -->


    <!--==  7. Afordable Pricing  ==-->
    <section id="list" class="pricing">
        <div id="w">
            <div class="pricing-filter">
                <div class="pricing-filter-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="section-header">
                                    <h2 class="pricing-title">
                                        <center>
                                            <i>Angkringan</i> in Malang</h2>
                                    </center>
                                    <ul id="filter-list" class="clearfix">
                                        <li class="filter" data-filter="all">All</li>
                                        <li class="filter" data-filter=".cafe">Cafe</li>
                                        <li class="filter" data-filter=".restaurant">Restaurant</li>
                                        <li class="filter" data-filter=".coffeeShop">Coffee Shop</li>
                                        <li class="filter" data-filter=".javaneseRestaurant">Javanese Restaurant</li>
                                        <li class="filter" data-filter=".coffeeStore">Coffee Store</li>
                                    </ul>
                                    <!-- @end #filter-list -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <ul id="menu-pricing" class="menu-price">
                            <li class="item cafe">

                                <a href="#">
                                    <img src="images/angkringan/0.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc text-center">
                                        <span>
                                            <h3>Angkringan Tjak Gareng</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal0">
                                        Read more ...
                                    </span>
                                </p>
                            </li>

                            <li class="item restaurant">
                                <a href="#">
                                    <img src="images/angkringan/1.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Bikers Mak E</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal1">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item restaurant">
                                <a href="#">
                                    <img src="images/angkringan/2.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Malang</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal2">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item cafe">
                                <a href="#">
                                    <img src="images/angkringan/3.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Malioboro</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal3">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item coffeeShop">
                                <a href="#">
                                    <img src="images/angkringan/4.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>ANGKRINGAN MALIOBORO</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal4">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item cafe">
                                <a href="#">
                                    <img src="images/angkringan/5.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Malioboro</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal5">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item javaneseRestaurant restaurant">
                                <a href="#">
                                    <img src="images/angkringan/6.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Pondok Angkringan</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal6">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item cafe">
                                <a href="#">
                                    <img src="images/angkringan/7.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Candi Prambaban</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal7">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item cafe">
                                <a href="#">
                                    <img src="images/angkringan/no-image.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Warnet Aravind & Angkringan Mbah Kung</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal8">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item javaneseRestaurant restaurant">
                                <a href="#">
                                    <img src="images/angkringan/9.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Podjok Malang</h3>

                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal9">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item cafe">
                                <a href="#">
                                    <img src="images/angkringan/10.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>angkringan malioboro arjosari</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal10">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item restaurant">
                                <a href="#">
                                    <img src="images/angkringan/11.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Asli Jogja</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal11">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item restaurant">
                                <a href="#">
                                    <img src="images/angkringan/12.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Jogja Malioboro</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal12">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item cafe">
                                <a href="#">
                                    <img src="images/angkringan/no-image.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Sego Sambel Gendhis</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal13">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item cafe">
                                <a href="#">
                                    <img src="images/angkringan/no-image.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Suhat</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal14">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item javaneseRestaurant restaurant">
                                <a href="#">
                                    <img src="images/angkringan/15.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Sego Kucing</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal15">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item breakfastRestaurant restaurant">
                                <a href="#">
                                    <img src="images/angkringan/16.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Malioboro Jogja</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal16">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item coffeeStore">
                                <a href="#">
                                    <img src="images/angkringan/17.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Jogja Malioboro</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal17">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item javaneseRestaurant restaurant">
                                <a href="#">
                                    <img src="images/angkringan/18.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Angkringan Tugu Jogja</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal18">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                            <li class="item javaneseRestaurant restaurant">
                                <a href="#">
                                    <img src="images/angkringan/19.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                            <h3>Soto Angkringan Boyolali</h3>
                                        </span>
                                    </div>
                                </a>
                                <p class="text-right">
                                    <span type="button" style="cursor:pointer; padding:10px;" class="white" data-toggle="modal" data-target="#modal19">
                                        Read more ...
                                    </span>
                                </p>
                            </li>
                        </ul>

                        <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--== 13. Menu List ==-->
    <section id="team" style="margin-bottom:50px" class="menu-list">
        <div class="container">
            <div class="row menu">
                <div class="col-md-10 col-md-offset-1 col-sm-9 col-sm-offset-2 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-catagory text-center">
                                    <h2>Our Team</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <center>
                                <div class="row">
                                    <div class="menu-catagory">
                                        <img class="img-responsive" style="border-radius: 50%; width:250px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            src="images/team/shynta.jpg">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Shynta Ayu Dwi Darmawan</h3>
                                        <p class="menu-about">17.51.0016</p>
                                        <p class="menu-about">
                                            <strong>Sistem Informasi</strong>
                                        </p>
                                    </div>
                                </div>
                            </center>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <center>
                                <div class="row">
                                    <div class="menu-catagory">
                                        <img class="img-responsive" style="border-radius: 50%; width:250px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            src="images/team/aliefa.jpg">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Aliefa Nuzula</h3>
                                        <p class="menu-about">17.51.0020</p>
                                        <p class="menu-about">
                                            <strong>Sistem Informasi</strong>
                                        </p>
                                    </div>
                                </div>
                            </center>
                        </div>


                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <center>
                                <div class="row">
                                    <div class="menu-catagory">
                                        <img class="img-responsive" style="border-radius: 50%; width:250px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            src="images/team/deky.jpg">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="menu-item">
                                        <h3 class="menu-title">Deky Deni Kurniawan</h3>
                                        <p class="menu-about">17.52.0026</p>
                                        <p class="menu-about">
                                            <strong>Teknik Informasi</strong>
                                        </p>
                                    </div>
                                </div>
                            </center>
                        </div>

                    </div>

                    <div id="moreMenuContent"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container-fluid color-bg">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 dis-table-cell">
                    <h2 class="section-title">Contact With us</h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <p>No.249a, Jl. Laksda Adi Sucipto, Pandanwangi, Blimbing, Malang City, East Java 65126</p>
                        <p>(0341) 412699</p>
                        <a href="http://stimata.ac.id/" target="_blank">stimata.ac.id</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div id="map-canvas"></div>
        </div>
    </div>



    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <form class="contact-form" method="post" action="contact.php">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Message"></textarea>
                            </div>

                            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                <div class="text-center">
                                    <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--== Modal List ==-->
    <div class="modal fade" id="modal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Tjak Gareng</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/0.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Tjak Gareng</strong>
                                <br>
                                <mark>Cafe</mark>
                                <br>Jl. Soekarno Hatta No.4, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142
                                <br>
                                <abbr title="Phone">P:</abbr> +62 821-4055-1551
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Bikers Mak E</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/1.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Bikers Mak E</strong>
                                <br>
                                <mark>Restaurant</mark>
                                <br>Jl. Raya Malang - Surabaya No.123-127, Purwodadi, Blimbing, Kota Malang, Jawa Timur 65126
                                <br>
                                <abbr title="Phone">P:</abbr> +62 (895) 502-2087
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 1 -->

    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Malang</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/2.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Malang</strong>
                                <br>
                                <mark>Restaurant</mark>
                                <br>Jl. Raya Tlogomas No.48, Tlogomas, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144
                                <br>
                                <abbr title="Phone">P:</abbr> +62 822-3041-5550
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 2 -->
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Malioboro</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/3.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Malioboro</strong>
                                <br>
                                <mark>Cafe</mark>
                                <br>Jl. Soekarno Hatta, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142
                                <br>
                                <abbr title="Phone">P:</abbr> +62 856-2696-298
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 3-->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">ANGKRINGAN MALIOBORO</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/4.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>ANGKRINGAN MALIOBORO</strong>
                                <br>
                                <mark>Coffee Shop</mark>
                                <br>Jl. Candi Kalasan IV, Blimbing, Kota Malang, Jawa Timur 65125
                                <br>
                                <abbr title="Phone">P:</abbr> +62 822-3196-1395
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 4-->
    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Malioboro</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/5.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                            <span class="rating-star empty-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Malioboro</strong>
                                <br>
                                <mark>Cafe</mark>
                                <br>Jl. Raden Intan, Arjosari, Blimbing, Kota Malang, Jawa Timur 65126
                                <br>
                                <abbr title="Phone">P:</abbr> +62 858-5054-8547
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 5-->
    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Pondok Angkringan</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/6.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Pondok Angkringan</strong>
                                <br>
                                <mark>Javanese Restaurant</mark>
                                <br>Malang Town Square, Jl. Veteran, Penanggungan, Klojen, Kota Malang, Jawa Timur 65145
                                <br>
                                <abbr title="Phone">P:</abbr> (0341) 559007
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 6-->
    <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Candi Prambaban</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/7.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                            <span class="rating-star empty-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Candi Prambaban</strong>
                                <br>
                                <mark>Cafe</mark>
                                <br>Jl. Raden Intan No.58, Arjosari, Blimbing, Kota Malang, Jawa Timur 65126
                                <br>
                                <abbr title="Phone">P:</abbr> +62 878-5972-5199
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 7-->
    <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Warnet Aravind & Angkringan Mbah Kung</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/no-image.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Warnet Aravind & Angkringan Mbah Kung</strong>
                                <br>
                                <mark>Cafe</mark>
                                <br>Bunulrejo, Blimbing, Malang City, East Java 65123
                                <br>
                                <abbr title="Phone">P:</abbr> +62 (846) 463-3887
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 8-->
    <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Podjok Malang</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/9.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Podjok Malang</strong>
                                <br>
                                <mark>Javanese Restaurant</mark>
                                <br>Jl. Mertojoyo Sel. No.318, Merjosari, Kec. Lowokwaru, Kota Malang, Jawa, Timur, Merjosari,
                                Kec. Lowokwaru, malang, Jawa Timur 65144
                                <br>
                                <abbr title="Phone">P:</abbr> +62 856-0813-0013
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 9-->
    <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">angkringan malioboro arjosari</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/10.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>angkringan malioboro arjosari</strong>
                                <br>
                                <mark>Cafe</mark>
                                <br>Jl. Raden Intan No.99, Arjosari, Blimbing, Kota Malang, Jawa Timur 65126
                                <br>
                                <abbr title="Phone">P:</abbr> +62 858-5054-8547
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 10-->
    <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Asli Jogja</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/11.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Asli Jogja</strong>
                                <br>
                                <mark>Restaurant</mark>
                                <br>Jl. Candi Panggung Bar. No.66C, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142
                                <br>
                                <abbr title="Phone">P:</abbr> +62 822-4778-6975
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 11-->
    <div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Jogja Malioboro</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/12.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Jogja Malioboro</strong>
                                <br>
                                <mark>Restaurant</mark>
                                <br>Jl. Jend. Ahmad Yani Utara No.171, Purwodadi, Blimbing, Kota Malang, Jawa Timur 65126
                                <br>
                                <abbr title="Phone">P:</abbr> +62 (883) 498-2686
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 12-->
    <div class="modal fade" id="modal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Sego Sambel Gendhis</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/no-image.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Sego Sambel Gendhis</strong>
                                <br>
                                <mark>Cafe</mark>
                                <br>Jl. B. Cengkeh, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                                <br>
                                <abbr title="Phone">P:</abbr> +62 (863) 489-3113
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 13-->
    <div class="modal fade" id="modal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Suhat</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/no-image.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                            <span class="rating-star empty-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Suhat</strong>
                                <br>
                                <mark>Cafe</mark>
                                <br>Sukarno Hatta Indah I-II, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142
                                <br>
                                <abbr title="Phone">P:</abbr> +62 (914) 488-3570
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 14-->
    <div class="modal fade" id="modal15" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Sego Kucing</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/15.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Sego Kucing</strong>
                                <br>
                                <mark>Javanese Restaurant</mark>
                                <br>Jl. Candi Panggung Bar. No.66C, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142
                                <br>
                                <abbr title="Phone">P:</abbr> +62 (843) 471-2876
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 15-->
    <div class="modal fade" id="modal16" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Malioboro Jogja</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/16.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Malioboro Jogja</strong>
                                <br>
                                <mark>Breakfast Restaurant</mark>
                                <br>Jl. Tidar, Karangbesuki, Sukun, Kota Malang, Jawa Timur 65149
                                <br>
                                <abbr title="Phone">P:</abbr> +62 (826) 400-2249
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 16-->
    <div class="modal fade" id="modal17" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Jogja Malioboro</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/17.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Jogja Malioboro</strong>
                                <br>
                                <mark>Coffee Store</mark>
                                <br>Jl. Mayjen.M.Wiyono, Polehan, Blimbing, Kota Malang, Jawa Timur 65126
                                <br>
                                <abbr title="Phone">P:</abbr> +62 856-2696-298
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 17-->
    <div class="modal fade" id="modal18" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Angkringan Tugu Jogja</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/18.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star empty-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Angkringan Tugu Jogja</strong>
                                <br>
                                <mark>Javanese Restaurant</mark>
                                <br>Jalan Panglima Sudirman Kav. 21, Klojen, Kesatrian, Blimbing, Kota Malang, Jawa Timur 65111
                                <br>
                                <abbr title="Phone">P:</abbr> +62 812-1703-0381
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 18-->
    <div class="modal fade" id="modal19" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Soto Angkringan Boyolali</h4>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="images/angkringan/19.jpg" class="img-responsive" style="height:200px;width:auto;" alt="Angkringan">
                        <br>
                        <div class="rating-box">
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                            <span class="rating-star full-star"></span>
                        </div>
                    </center>
                    <div class="container row" style="margin-top:10px;">
                        <div class="col-sm-8">
                            <address>
                                <strong>Soto Angkringan Boyolali</strong>
                                <br>
                                <mark>Javanese Restaurant</mark>
                                <br>Jl. Gajayana No.21A, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144
                                <br>
                                <abbr title="Phone">P:</abbr> +62 (843) 424-3910
                            </address>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal 19-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="copyright text-center">
                        <p>
                            &copy; Copyright, 2018
                            <br>
                            <a target="_blank" href="https://angkringan-list.000webhostapp.com/">angkringan-list.000webhostapp.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.mixitup.min.js')}}"></script>
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.hoverdir.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jQuery.scrollSpeed.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>


</body>

</html>