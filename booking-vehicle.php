<?php include './database/connection.php'; ?>

<?php
if (isset($_GET['view'])) {
    $id     = $_GET['view'];
    $update = true;
    $qry    = "select * from car where id = $id";
    $run    = $db->query($qry);
    if ($run->num_rows > 0) {
        while ($row = $run->fetch_assoc()) {
            $id           = $row['id'];
            $model        = $row['model'];
            $year         = $row['year'];
            $engine       = $row['engine'];
            $rental       = $row['rental'];
            $passenger    = $row['passenger'];
            $luggage      = $row['luggage'];
            $type         = $row['type'];
            $transmission = $row['transmission'];
            $fuel         = $row['fuel'];
            $door         = $row['door'];
            $musicOn      = $row['musicOn'];
            $ac           = $row['ac'];
            $img          = $row['img'];
            $localPrice   = number_format((float)$rental * 200, 2, '.', '');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AMERIRENTACAR | BOOKING VEHICLE</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="assets/css/master.css" />
    <!--fav-icon-->
    <link rel="shortcut icon" href="fav-icon.png"/>
    <!-- SWITCHER-->
    <link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" />
    <link href="assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" />
    <link href="assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" />
    <link href="assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" />
    <link href="assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" />
 
    <!--[if lt IE 9 ]>
<script src="assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->

    <!--Whatsapp CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/whatsapp.css">
    
    <style>
    @media only screen and (max-width: 1200px){
        .b-filter-2__title{
            font-size: 15px !important;
        }
    }
    </style>
    
</head>

<body>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span>
    </div>
    </div>
    <!-- Loader end-->
    <!-- ==========================-->

    <!-- Mobile Header -->
    <?php include './inc/mobile-slider.php' ?>

    <!--WHATSAPP CONTENT
        =============================================-->
    <a href="https://wa.me/94777312848" class="whatsapp_float" target="_blank"> <i
            class="fa fa-whatsapp whatsapp-icon"></i></a>

    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container" style="top: -120px">
        <!-- Start Switcher-->

        <!-- end switcher-->
        <!-- ==========================-->
        <!-- SEARCH MODAL-->
        <!-- ==========================-->
        <!-- <div class="header-search open-search">
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
        </div> -->
        <!-- Header -->
        <?php include './inc/header.php' ?>

        <!-- main slider start-->
        <div class="main-slider main-slider-1">
            <div class="slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="700px"
                data-slider-arrows="true" data-slider-buttons="false">
                <div class="sp-slides"> 
                    <!-- Slide 1-->
                    <div class="sp-slide">
                        <img class="sp-image" src="assets/media/components/b-main-slider/1.jpg" alt="slider" />
                        <div class="main-slider__wrap sp-layer" data-width="" data-position="centerLeft"
                            data-horizontal="62%" data-show-transition="left" data-hide-transition="left"
                            data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                            <div class="main-slider__title">mercedes benz<span
                                    class="main-slider__label bg-primary">model 2018</span>
                            </div>
                            <div class="main-slider__subtitle">smart drive</div><a
                                class="main-slider__btn btn btn-white btn-lg" href="services.html"><span
                                    class="main-slider__btn-label">Starting</span><span class="main-slider__btn-price">
                                    $<strong>560/M</strong></span></a><a class="main-slider__btn btn btn-primary btn-lg"
                                href="services.html">book now</a>
                        </div>
                    </div>
                    <!-- Slide 2-->
                    <div class="sp-slide">
                        <img class="sp-image" src="assets/media/components/b-main-slider/2.jpg" alt="slider" />
                        <div class="main-slider__wrap sp-layer" data-width="" data-position="centerLeft"
                            data-horizontal="62%" data-show-transition="left" data-hide-transition="left"
                            data-show-duration="2000" data-show-delay="1200" data-hide-delay="400">
                            <div class="main-slider__title">mercedes benz<span
                                    class="main-slider__label bg-primary">model 2018</span>
                            </div>
                            <div class="main-slider__subtitle">smart drive</div><a
                                class="main-slider__btn btn btn-white" href="services.html">Starting<span
                                    class="main-slider__btn-price"> $<strong>560/M</strong></span></a><a
                                class="main-slider__btn btn btn-primary" href="services.html">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end .header-->
        <div class="section-title-page area-bg area-bg_dark area-bg_op_70">
            <div class="area-bg__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="b-title-page bg-primary_a"><?php echo $type; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end .b-title-page-->
        <div class="bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php"><i class="icon fa fa-home"></i></a>
                            </li>
                            <li class="active"><?php echo $type; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb-->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <main class="l-main-content">
                        <!-- end .filter-goods-->
                        <div class="goods-group-2 list-goods list-goods_th">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <main class="l-main-content">
                                            <article class="b-post b-post-full clearfix">

                                                <div class="row ">
                                                    <div class="col-md-4 col-md-offset-4" style="left: -260px;">
                                                        <h1 class="b-filter-2__title"
                                                            style="width: 730px; height: 55px; bottom: -100px; font-size: 35px;">
                                                            <?php echo $type; ?> | <?php echo $model; ?></h1>
                                                    </div>
                                                </div><br>

                                                <div class="entry-media">
                                                    <?php echo '<img src="./admin/upload/' . $img . '" width = "100%" height = "53%" alt = "Image">' ?>

                                                </div>

                                            </article>


                                        </main>

                                        <!-- end .l-main-content-->
                                    </div>

                                    <div class="col-md-4">
                                        <aside class="l-sidebar">

                                            <form class="b-filter-2 bg-grey" action="vehicle-order.php" method="GET">
                                                <h3 class="b-filter-2__title">$<?php echo $rental; ?> Day | Rs.
                                                    <?php echo $localPrice ?></h3>


                                                <div class="b-filter-2__inner">
                                                    <div class="b-filter-2__group">
                                                        <div class="b-filter-2__group-title">Pick-Up Date</div>
                                                        <input class="form-control" name="pickDate" id="pickDate"
                                                            type="date" placeholder="Select Date" required />
                                                    </div>

                                                    <div class="b-filter-2__group">
                                                        <div class="b-filter-2__group-title">Drop-Off Date</div>
                                                        <input class="form-control" name="dropDate" id="dropDate"
                                                            type="date" placeholder="Select Date" required />
                                                    </div>

                                                    <div class="b-filter-2__group">
                                                        <div class="b-filter-2__group-title">PICKUP LOCATION</div>
                                                        <select class="form-control" name="pickupLoc" id="pickLoc"
                                                            onfocusout="check()" data-width="100%" required="true">
                                                            <option value="">PICKUP LOCATION</option>
                                                            <option value="officeP">OFFICE</option>
                                                            <option value="airportP">AIRPORT</option>
                                                            <option value="hotelP">HOTEL (AROUND COLOMBO)</option>
                                                        </select><br /><br />
                                                        <div class="b-filter-2__group-title">FLIGHT ARRIVING TIME</div>
                                                        <br />
                                                        <input name="choice[]" value="arriving" type="checkbox" />
                                                        <label>between 9.00 pm - 5.00 am</label>
                                                    </div>


                                                    <div class="b-filter-2__group">
                                                        <div class="b-filter-2__group-title">DROP LOCATION</div>
                                                        <select class="form-control" name="dropLoc" od="dropLoc"
                                                            data-width="100%" required="true">
                                                            <option value="">DROP LOCATION</option>
                                                            <option value="officeD">OFFICE</option>
                                                            <option value="airportD">AIRPORT</option>
                                                            <option value="hotelD">HOTEL (AROUND COLOMBO)</option>
                                                        </select><br /><br />
                                                        <div class="b-filter-2__group-title">FLIGHT DEPARTING TIME</div>
                                                        <br />
                                                        <input name="choice[]" value="departing" type="checkbox" />
                                                        <label>between 9.00 pm - 5.00 am</label>
                                                    </div>
                                                    <div>
                                                        <input name="choice[]" value="millage" type="checkbox" />
                                                        <label>Unlimited millage</label>
                                                    </div>

                                                    <div>
                                                        <input name="choice[]" value="excess" type="checkbox" />
                                                        <label>Excess weaver</label>
                                                    </div>

                                                    <div>
                                                        <input name="choice[]" value="license" type="checkbox" />
                                                        <label>Local License Required</label><br />
                                                    </div>
                                                    </br>
                                                    <div>
                                                        <input name="choice[]" value="require" type="checkbox"
                                                            required />
                                                        <label>I accept the <a href="our-terms.php" style="color: #00245b;">Terms and
                                                                conditions</a></label>
                                                    </div>
                                                    <br />

                                                    <input type="hidden" name="vehicleID" value="<?php echo $id ?>">
                                                    <button class="btn btn-primary" style="width: 310px;">Book this
                                                        Car</a></button>

                                                    <div class="row">

                                                        <ul class="b-rent__list list-unstyled"><br />
                                                            <div class="b-filter-2__group-title">Specification</div>
                                                            <br />
                                                            <li class="b-rent__list-item"><i
                                                                    class="icon flaticon-car"></i>Vehicle Type -
                                                                <?php echo $type ?></li>
                                                            <li class="b-rent__list-item"><i
                                                                    class="icon flaticon-car"></i>Model Year -
                                                                <?php echo $year ?></li>
                                                            <li class="b-rent__list-item"><i
                                                                    class="icon flaticon-oil"></i>Fuel -
                                                                <?php echo $fuel ?></li>
                                                            <li class="b-rent__list-item"><i
                                                                    class="icon flaticon-transmision"></i>Transmission -
                                                                <?php echo $transmission ?></li>
                                                            <li class="b-rent__list-item"><i
                                                                    class="icon flaticon-wheel-and-manometer"></i>Engine
                                                                -
                                                                <?php echo $engine ?></li>
                                                            <li class="b-rent__list-item"><i
                                                                    class="icon flaticon-doors"></i>Doors -
                                                                <?php echo $door ?></li>
                                                            <li class="b-rent__list-item"><i
                                                                    class="icon flaticon-transport-1"></i>Passengers -
                                                                <?php echo $passenger ?></li>
                                                            <li class="b-rent__list-item"><i
                                                                    class="icon flaticon-ac"></i>A/C - <?php echo $ac ?>
                                                            </li>
                                                            <li class="b-rent__list-item"><i
                                                                    class="icon flaticon-suitcase-with-white-details"></i>Luggages
                                                                - <?php echo $luggage ?></li>
                                                            <li class="b-rent__list-item"><i
                                                                    class="icon flaticon-smartphone"></i>Music Player
                                                                - <?php echo $musicOn ?></li>
                                                        </ul>
                                                    </div>
                                                </div><br><br><br>
                                            </form>
                                            <!-- end .b-filter-->
                                        </aside>
                                        <!-- end .l-sidebar-->

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end .goods-group-2-->
                    </main>
                    <!-- end .l-main-content-->
                </div>
            </div>

        </div>



        <!-- footer start here-->
        <?php include './inc/footer.php' ?>

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
    <!-- <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script> -->
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
    <!--Date picker-->
    <script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }

    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("pickDate").setAttribute("min", today);
    document.getElementById("dropDate").setAttribute("min", today);
    </script>
    <script>
    // function check() {
    //     var x = document.getElementById("pickLoc").selectedOptions[0].label;

    //     if (x == "PICKUP LOCATION") {
    //         alert("Please select an option.");
    //     }
    // }
    </script>
</body>

</html>