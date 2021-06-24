<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AMERIRENTACAR | Home</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="assets/css/master.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    </script>
    <!-- SWITCHER-->
    <link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" />
    <link href="assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" />
    <link href="assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" />
    <link href="assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" />
    <link href="assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!--[if lt IE 9 ]>
<script src="assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->

    <!--Whatsapp CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/whatsapp.css">

</head>

<body>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span>
    </div>
    <!-- Loader end-->
    <!-- ==========================-->

    <!-- Mobile Header -->
    <?php include('./inc/mobile-slider.php') ?>

    <!--WHATSAPP CONTENT
			=============================================-->
    <a href="https://wa.me/94777312848" class="whatsapp_float" target="_blank"> <i
            class="fa fa-whatsapp whatsapp-icon"></i></a>

    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">

        <!-- ==========================-->
        <!-- SEARCH MODAL-->
        <!-- ==========================-->
        <div class="header-search open-search">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form class="search-global">
                                <input class="search-global__input" type="text" placeholder="Type to search"
                                    autocomplete="off" name="s" value="" />
                                <button class="search-global__btn"><i class="icon stroke icon-Search"></i>
                                </button>
                                <div class="search-global__note">Begin typing your search above and press return to
                                    search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button class="search-close close" type="button"><i class="fa fa-times"></i>
            </button>
        </div>
        <div data-off-canvas="slidebar-1 left overlay">
            <ul class="nav navbar-nav">
                <li><a class="scrollTo" href="#features-section">features</a>
                </li>
                <li><a class="scrollTo" href="#services-section">Services</a>
                </li>
                <li><a class="scrollTo" href="#works-section">Works</a>
                </li>
                <li><a class="scrollTo" href="#about-section">About</a>
                </li>
                <li><a class="scrollTo" href="#team-section">Team</a>
                </li>
                <li><a href="#">News</a>
                    <div class="wrap-inside-nav">
                        <div class="inside-col">
                            <ul class="inside-nav">
                                <li><a href="blog.html">Blog 1</a>
                                </li>
                                <li><a href="blog-2.html">Blog 2</a>
                                </li>
                                <li><a href="blog-single.html">Blog single</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">Portfolio</a>
                    <div class="wrap-inside-nav">
                        <div class="inside-col">
                            <ul class="inside-nav">
                                <li><a href="portfolio.html">Portfolio</a>
                                </li>
                                <li><a href="portfolio-single.html">Portfolio single</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">Contact</a>
                    <div class="wrap-inside-nav">
                        <div class="inside-col">
                            <ul class="inside-nav">
                                <li><a href="contact.html">Contact 1</a>
                                </li>
                                <li><a href="contact-2.html">Contact 2</a>
                                </li>
                                <li><a href="contact-3.html">Contact 3</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Header -->
        <?php include('./inc/header.php') ?>

        <section class="section-filter">
            <div class="main-slider main-slider-4">
                <div class="slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="650px"
                    data-slider-arrows="false" data-slider-buttons="false">
                    <div class="sp-slides">

                        <div class="sp-slide">
                            <img class="sp-image" src="assets/media/components/b-main-slider/2.jpg" alt="slider" />

                            <div class="area-bg__inner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h1 class="b-title-page bg-primary_a">Find Your Car</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br><br>

                            <div class="container">

                                <form class="b-booking-form" action="list.php" method="POST">
                                    <div class="area-bg__inner">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <select class="selectpicker" name="make" data-width="100%">
                                                    <option>All Makes</option>
                                                    <option value="Honda">HONDA</option>
                                                    <option value="Mitshubishi">MITSHUBISHI</option>
                                                    <option value="Kia">KIA</option>
                                                    <option value="Perodua">PERODUA</option>
                                                    <option value="Toyota">TOYOTA</option>
                                                    <option value="Suzuki">SUZUKI</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="selectpicker" name="fuel" data-width="100%">
                                                    <option>All Fuel Type</option>
                                                    <option value="Petrol">Petrol</option>
                                                    <option value="Diesel">Diesel</option>
                                                    <option value="Hybrid">Hybrid</option>
                                                    <option value="Plugin Electric">Plugin Electric</option>
                                                    <option value="Petrol + CNG">Petrol + CNG</option>
                                                    <option value="LPG">LPG</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="selectpicker" name="transmission" data-width="100%">
                                                    <option>All Transmission</option>
                                                    <option value="Automatic">Automatic</option>
                                                    <option value="Manual">Manual</option>
                                                    <option value="Semi-Automatic">Semi-Automatic</option>
                                                </select>
                                            </div><br><br><br><br><br>

                                            <!-- <div class="col-md-3">
                                                <input class="form-control" type="text" id="datepicker"
                                                    placeholder="Pickup Date" />
                                            </div> -->

                                            <div class="col-md-3 col-md-offset-4" style = "width: 360px;">
                                                <button class="btn btn-primary" name="search">Find Now
                                                </button>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-3">
                                                <input class="form-control" type="text" id="datepicker"
                                                    placeholder="Pickup Date" />
                                            </div>
                                            <div class="col-md-3">
                                                <input class="form-control" type="text" id="offdatepicker"
                                                    placeholder="Drop Off Date" />
                                            </div>
                                        </div> -->

                                    </div>
                                </form>
                                <!-- <form class="b-booking-form" method="POST" action="rental-car.php">
                                    <div class="area-bg__inner">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="selectpicker" name="make" data-width="100%">
                                                    <option>All Makes</option>
                                                    <option value="Honda">HONDA</option>
                                                    <option value="Mitshubishi">MITSHUBISHI</option>
                                                    <option value="Kia">KIA</option>
                                                    <option value="Perodua">PERODUA</option>
                                                    <option value="Toyota">TOYOTA</option>
                                                    <option value="Suzuki">SUZUKI</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="selectpicker" data-width="100%">
                                                    <option>All Models</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input class="form-control" type="text" id="datepicker"
                                                    placeholder="Pickup Date" />
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="selectpicker" name="fuel" data-width="100%">
                                                    <option>All Fuel Type</option>
                                                    <option value="Petrol">Petrol</option>
                                                    <option value="Diesel">Diesel</option>
                                                    <option value="Hybrid">Hybrid</option>
                                                    <option value="Plugin Electric">Plugin Electric</option>
                                                    <option value="Petrol + CNG">Petrol + CNG</option>
                                                    <option value="LPG">LPG</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <select class="selectpicker" name="transmission" data-width="100%">
                                                    <option>All Transmission</option>
                                                    <option value="Automatic">Automatic</option>
                                                    <option value="Manual">Manual</option>
                                                    <option value="Semi-Automatic">Semi-Automatic</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input class="form-control" type="text" id="offdatepicker"
                                                    placeholder="Drop Off Date" />
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-3 col-md-offset-3">
                                        <button class="btn btn-primary" name="search" type="submit">Find Now
                                        </button>
                                    </div>
                                </form> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end .main-slider-->
        <br>
        <section class="section-filter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center">


                            <div class="col-md-12">
                                <div class="section-advantages-1">
                                    <section class="b-advantages-1"><i
                                            class="b-advantages-1__icon flaticon-car-dashboard"></i>
                                        <h3 class="b-advantages-1__title">Fast & Easy Booking</h3>
                                        <div class="b-advantages-1__info">MotorLand is nisi aliquip ex consequat duis
                                            velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.
                                        </div><span class="ui-decor-2"></span>
                                    </section>
                                    <!-- end .b-advantages-->
                                    <section class="b-advantages-1 active"><i
                                            class="b-advantages-1__icon flaticon-doors"></i>
                                        <h3 class="b-advantages-1__title">Many Pickup Locations</h3>
                                        <div class="b-advantages-1__info">We pride ourselves on providing a many pickup
                                            and drop locations service with our wide range of rental cars. Our goal is
                                            to provide a great customer experience.</div><span
                                            class="ui-decor-2"></span>
                                    </section>
                                    <!-- end .b-advantages-->
                                    <section class="b-advantages-1"><i
                                            class="b-advantages-1__icon flaticon-calculator"></i>
                                        <h3 class="b-advantages-1__title">Best Prices in Sri Lanka</h3>
                                        <div class="b-advantages-1__info">We are all about helping people find the best
                                            car deals in Sri Lanka. Guaranteed best deals for self drive rates and with
                                            driver rates in Sri Lanka.</div><span class="ui-decor-2"></span>
                                    </section>
                                    <!-- end .b-advantages-->
                                </div>
                                <!-- end .section-advantages-1-->
                            </div>


                        </div>
                    </div>
                </div>
            </div><br /><br /><br /><br />

            <!-- end .b-filter-->
        </section>
        <!-- end .section-filter-->

        <!-- end .section-default-->

        <section class="section-advantages-2 section-dark area-bg area-bg_dark parallax"
            style="background-image: url(assets/media/content/bg/bg-1.jpg)">
            <div class="area-bg__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="text-center">
                                <img class="sp-image" src="./images/dealer.png"
                                    style="margin-left: auto; margin-right: auto; width: 40%;" />

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <section class="b-about section-default">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="b-about__inner">
                            <h2 class="ui-title-block">GET IN TOUCH WITH US</h2>
                            <div class="ui-subtitle-block">Whether its a car for self drive or chauffeur driven vehicle
                                for an event, you are sure to get the best tailored deals and support from us around the
                                clock 356 days.</div>
                            <div class="ui-decor"></div>
                            <div class="b-about-main">
                                <div class="b-about-main__title">We are a Trusted Name in Rent Vehicle Industry</div>
                                <div class="b-about-main__subtitle">Best Vehicles for rent in Sri Lanka!</div>
                                <p></p>
                                <p>Slamco laboris nisi ut aliquip ex ea comdo consequat uis aute irure dolor
                                    raeprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="b-about-main__btns"><a class="btn btn-dark" href="contact.php">Contact
                                        Us</a><a class="btn btn-primary" href="#">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <ul class="b-about-list list-unstyled">
                            <li class="b-about-list__item"><i class="b-about-list__icon flaticon-transport"></i>
                                <div class="b-about-list__inner">
                                    <div class="b-about-list__title">No.43, School Lane, Colombo-03, Sri Lanka</div>
                                    <!-- <div class="b-about-list__info">MotorLand is nisi aliquip ea consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div> -->
                                    <div class="ui-decor-2"></div>
                                </div>
                            </li>
                            <li class="b-about-list__item"><i class="b-about-list__icon flaticon-smartphone"></i>
                                <div class="b-about-list__inner">
                                    <div class="b-about-list__title">Support Phone : &nbsp; &nbsp; (+94) 777 312 848,
                                        (+94) 777668166, (+94) 727343435, (+94) 0765566431</div>
                                    <!-- <div class="b-about-list__info">MotorLand is nisi aliquip ea consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint occaecat.</div> -->
                                    <div class="ui-decor-2"></div>
                                </div>
                            </li>
                            <li class="b-about-list__item"><i class="b-about-list__icon flaticon-sportive-car"></i>
                                <div class="b-about-list__inner">
                                    <div class="b-about-list__title">E mails: amerirentacar@gmail.com</div>
                                    <div class="ui-decor-2"></div>
                                </div>
                            </li>
                            <li class="b-about-list__item"><i class="b-about-list__icon "></i>
                                <div class="b-about-list__inner">
                                    <div class="b-about-list__title">Working Hours: 08:30 am - 05:30 pm</div>

                                    <div class="ui-decor-2"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end .b-about-->
        </section>
        <!-- end .b-about-->
        <div class="info-group block-table block-table_md">
            <div class="info-group__section col-md-6">
                <section class="b-info b-info_mod-a area-bg area-bg_op_80 area-bg_prim parallax"
                    style="background-image: url(assets/media/content/bg/bg-4.jpg)">
                    <div class="area-bg__inner">
                        <h2 class="b-info__title">Call Today For Booking Your Next Ride<strong
                                class="b-info__title_lg">(+94) 777 312 848</strong></h2>
                        <div class="b-info__desc">Operators available 24/7.</div><a class="btn btn-white"
                            href="#">search your car</a>
                    </div>
                </section>
            </div>
            <div class="info-group__section col-md-6">
                <section class="b-info b-info_mod-b area-bg area-bg_op_80 area-bg_dark-2 parallax"
                    style="background-image: url(assets/media/content/bg/bg-3.jpg)">
                    <div class="area-bg__inner">
                        <h2 class="b-info__title">Please Contact Us<strong class="b-info__title_lg">For Special Discount
                                and Promos</strong></h2>
                        <div class="b-info__desc">MotorLand is nisi aliquip exa con velit esse cillum dolore fugiatal
                            sint occaecat excepteur ipsum dolor sit amet consectetur.</div><a class="btn btn-white"
                            href="#">cONTACT US</a>
                    </div>
                </section>
            </div>
        </div>
        <!-- end .b-info-group-->

        <!-- end .section-default-->

        <!-- end .section-isotope-->
        <br><br>

        <!-- end .b-list-brands-->
        <div class="section-reviews area-bg area-bg_dark parallax"
            style="background-image: url(assets/media/content/bg/bg-6.jpg)">

            <div class="area-bg__inner">

                <div class="container">

                    <div class="row">

                        <center>
                            <h2 class="b-info__title"><strong class="b-info__title_lg">CUSTOMER REVIEWS</strong></h2>
                        </center>
                        <div class="col-xs-12">
                            <div class="carousel-reviews owl-carousel owl-theme owl-theme_w-btn enable-owl-carousel"
                                data-min768="1" data-min992="2" data-min1200="2" data-margin="0" data-pagination="true"
                                data-navigation="false" data-auto-play="4000" data-stop-on-hover="true">

                                <div class="b-blockquote b-blockquote-1">
                                    <!-- <div class="b-blockquote__img">
                                            <img src="assets/media/components/b-blockquote/face-1.jpg" alt="foto" />
                                        </div> -->
                                    <blockquote>
                                        <cite class="b-blockquote__cite" title="Blockquote Title"><span
                                                class="b-blockquote__author">Chris Fogden</span><span
                                                class="b-blockquote__category"></span></cite>
                                        <p>Great car in excellent condition and find working order. The staff were
                                            Friendly and helpful and prices are very competitive.They also organised my
                                            local driving permit with ease. I look forward to renting with them again.
                                        </p>
                                    </blockquote>
                                </div>
                                <!-- end .b-blockquote-->
                                <div class="b-blockquote b-blockquote-1">
                                    <!-- <div class="b-blockquote__img">
                                            <img src="assets/media/components/b-blockquote/face-2.jpg" alt="foto" />
                                        </div> -->
                                    <blockquote>
                                        <cite class="b-blockquote__cite" title="Blockquote Title"><span
                                                class="b-blockquote__author">Gayani Loid</span><span
                                                class="b-blockquote__category"></span></cite>
                                        <p>I had a great service from this company!!! The KIA SUV was in really good
                                            condition. Communication with staff was verry proffessional and very
                                            helpful! I have been using this company for two years and will use them
                                            again without any doubt! Thank you Amire rental!</p>
                                    </blockquote>
                                </div>
                                <!-- end .b-blockquote-->
                                <div class="b-blockquote b-blockquote-1">
                                    <!-- <div class="b-blockquote__img">
                                            <img src="assets/media/components/b-blockquote/face-1.jpg" alt="foto" />
                                        </div> -->
                                    <blockquote>
                                        <cite class="b-blockquote__cite" title="Blockquote Title"><span
                                                class="b-blockquote__author">Taste Of India</span><span
                                                class="b-blockquote__category"></span></cite>
                                        <p>We were very happy with Ameri Rent a Car.Sajad Ismail was very friendly and
                                            helpful. The rental car was in very good condition.Should we again need a
                                            car in Sri Lanka. We will definitely rent again at Ameri. Highly
                                            recommended.</p>
                                    </blockquote>
                                </div>

                                <div class="b-blockquote b-blockquote-1">
                                    <blockquote>
                                        <cite class="b-blockquote__cite" title="Blockquote Title"><span
                                                class="b-blockquote__author">James Liam</span><span
                                                class="b-blockquote__category">Quality Assurance Manager</span></cite>
                                        <p>Motorland uis aute irure reprehender voluptate velit ese acium fugiat nulla
                                            pariatur lorem excepteur ipsum et dolore magna aliqua. Ut enim minim veniam
                                            quis nostrud exercitation ullamco.</p>
                                    </blockquote>
                                </div>
                                <!-- end .b-blockquote-->
                            </div>
                            <!-- end .carousel-reviews-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end .section-reviews-->

        <!-- end .section-default-->
        <section class="section-news area-bg area-bg_light area-bg_op_90 parallax"
            style="background-image: url(assets/media/content/bg/bg-7.jpg)">
            <div class="area-bg__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="text-center">
                                <h2 class="ui-title-block">EXPLORE SRI LANKA</h2>
                                <div class="ui-subtitle-block">TIPS FOR TRAVEL AROUND SRI LANKA</div>
                                <div class="ui-decor"></div>
                            </div>
                            <div class="carousel-news owl-carousel owl-theme owl-theme_w-btn enable-owl-carousel"
                                data-min768="2" data-min992="3" data-min1200="3" data-margin="30"
                                data-pagination="false" data-navigation="true" data-auto-play="4000"
                                data-stop-on-hover="true">
                                <!-- end .post-->
                                <section class="b-post b-post-1 clearfix">
                                    <div class="entry-media">
                                        <img class="img-responsive" src="./images/home_blog/to-do.jpg" alt="Foto"
                                            style="max-height:200px" />
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <div class="entry-meta">
                                                <div class="entry-meta__face">
                                                    <!-- <img class="img-responsive" src="assets/media/content/posts/face/76x76_1.jpg" alt="face" /> -->
                                                </div><span class="entry-meta__item">Post by<a class="entry-meta__link"
                                                        href="#"> Admin</a></span><a class="entry-meta__categorie"
                                                    href="#"><strong>19 OCT</strong></a>
                                            </div>
                                            <h2 class="entry-title"><a href="blog-post.html">Things to do in Sri Lanka
                                                </a></h2>
                                        </div>
                                        <div class="entry-content">
                                            <p>Every forth one male man which. Brought won’t divide in. Hath gathering.
                                                Have. Open fifth face shall land fish kind isn’t let can’t
                                                blessed multiply third light, shall from winged, his creature isn’t
                                                midst said dominion in. Male firmament beginning dominion fourth he
                                                place shall. [...]</p>
                                        </div>
                                    </div>
                                </section>
                                <!-- end .post-->
                                <section class="b-post b-post-1 clearfix">
                                    <div class="entry-media">
                                        <img class="img-responsive"
                                            src="./images/home_blog/stockvault-sri-lankan-heritage-of-art.jpg"
                                            alt="Foto" style="max-height:200px" />
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <div class="entry-meta">
                                                <div class="entry-meta__face">

                                                </div><span class="entry-meta__item">Post by<a class="entry-meta__link"
                                                        href="#"> Admin</a></span><a class="entry-meta__categorie"
                                                    href="#"><strong>19 OCT</strong></a>
                                            </div>
                                            <h2 class="entry-title"><a href="blog-post.html">CITIES IN SRI LANKA</a>
                                            </h2>
                                        </div>
                                        <div class="entry-content">
                                            <p>Every forth one male man which. Brought won’t divide in. Hath gathering.
                                                Have. Open fifth face shall land fish kind isn’t let can’t blessed
                                                multiply third light, shall from winged, his creature isn’t midst said
                                                dominion in. Male firmament beginning dominion fourth he place
                                                shall[...]</p>
                                        </div>
                                    </div>
                                </section>
                                <!-- end .post-->
                                <section class="b-post b-post-1 clearfix">
                                    <div class="entry-media">
                                        <img class="img-responsive" src="./images/home_blog/ocean.jpg" alt="Foto"
                                            style="max-height:200px" />
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <div class="entry-meta">
                                                <div class="entry-meta__face">
                                                </div>
                                                <span class="entry-meta__item">Post by<a class="entry-meta__link"
                                                        href="#">Admin</a></span><a class="entry-meta__categorie"
                                                    href="blog-main.html"><strong>29 JUL</strong></a>
                                            </div>
                                            <h2 class="entry-title"><a href="blog-post.html">BEST BEACHES IN
                                                    SRILANKA</a></h2>
                                        </div>
                                        <div class="entry-content">
                                            <p>Negombo Negombo is a modest beach town located just 10km from
                                                Bandaranaike International Airport. With a stash of decent hotels and
                                                restaurants to suit all pockets, a friendly local community. Negombo is
                                                the Major tourist destination in Sri Lanka.
                                                Negombo offers one of the best beaches […]</p>
                                        </div>
                                    </div>
                                </section>
                                <!-- end .post-->
                            </div>
                            <!-- end .carousel-news-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end .section-news-->

        <!-- footer start here-->
        <?php include('./inc/footer.php') ?>

    </div>
    <!-- end layout-theme-->


    <!-- ++++++++++++-->
    <!-- MAIN SCRIPTS-->
    <!-- ++++++++++++-->
    <script src="assets/libs/jquery-1.12.4.min.js"></script>
    <script src="assets/libs/jquery-migrate-1.2.1.js"></script>
    <!-- Bootstrap-->
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
    <!-- User customization-->
    <script src="assets/js/custom.js"></script>
    <!-- Headers scripts-->
    <script src="assets/plugins/headers/slidebar.js"></script>
    <script src="assets/plugins/headers/header.js"></script>
    <!-- Color scheme-->
    <script src="assets/plugins/switcher/js/dmss.js"></script>
    <!-- Select customization & Color scheme-->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Slider-->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Pop-up window-->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Mail scripts-->
    <script src="assets/plugins/jqBootstrapValidation.js"></script>
    <script src="assets/plugins/contact_me.js"></script>
    <!-- Filter and sorting images-->
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/plugins/isotope/imagesLoaded.js"></script>
    <!-- Progress numbers-->
    <script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
    <!-- NoUiSlider-->
    <script src="assets/plugins/noUiSlider/nouislider.min.js"></script>
    <script src="assets/plugins/noUiSlider/wNumb.js"></script>
    <!-- Animations-->
    <script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script>
    <!-- Main slider-->
    <script src="assets/plugins/slider-pro/jquery.sliderPro.min.js"></script>
    <!-- User map-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqQ_bBw186KJnMcRByvn5ffZueg88wp1E"></script>
    <!-- Maps customization-->
    <script src="assets/js/map-custom.js"></script>
    <!-- Datepicker-->
    <script src="assets/plugins/datepicker/jquery.datetimepicker.js"></script>

</body>

</html>