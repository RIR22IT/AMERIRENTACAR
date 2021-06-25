<?php include('./database/connection.php'); ?>

<?php
// if (isset($_GET['view'])) {
    $vehicleID = $_GET['vehicleID'];
    $pickDate = strtotime($_GET['pickDate']);
    $dropDate = strtotime($_GET['dropDate']);
    $qty = ($dropDate - $pickDate)/60/60/24;
    $startDate = $_GET['pickDate'];
    $endDate = $_GET['dropDate'];
    $pickupLoc = $_GET['pickupLoc'];
    $dropLoc = $_GET['dropLoc']; 
    $select = $_GET['choice'];


    $qry = "select * from car where id = $vehicleID";
    $run = $db->query($qry);
    if ($run->num_rows > 0) {
        while ($row = $run->fetch_assoc()) {
            $id = $row['id'];
            $model = $row['model'];
            $rental = $row['rental'];
            $week = $row['week'];
            $month = $row['month'];
            $type = $row['type'];
            $img = $row['img']; 
        }
    }

    $tot = 0;
    if(0 < $qty && $qty < 7){
        $tot = $tot + ($qty * $rental);
    }else if(7 < $qty && $qty < 29){
        $tot = $tot +  ($qty * ($week/7));
    }else{
        $tot = $tot + ($qty * ($month/30));
    }

    //define the total
    $subTot = 0;

    //Pickuploc charges
    if($pickupLoc == 'hotelP'){
        $subTot = $subTot + $tot + 8;
    }else if($pickupLoc == 'airportP'){
        $subTot = $subTot + $tot + 17;
    }else{
        $subTot = $subTot + $tot;
    }

    
    //DropLoc charges
    if($dropLoc == 'hotelD'){
        $subTot = $subTot + $tot + 8;
    }else if($dropLoc == 'airportP'){
        $subTot = $subTot + $tot + 17;
    }else{
        $subTot = $subTot + $tot;
    }

    
    $c = count($select);
    
    for($i=0; $i<$c; $i++){
        if($select[$i] == 'arriving'){
            if($pickupLoc == 'hotelP' || $pickupLoc == 'airportP'){
                $subTot = $subTot + 10;
            }else{
                $subTot = $subTot;
            }
        }
        if($select[$i] == 'departing'){
            if($dropLoc == 'hotelD' || $dropLoc == 'airportD'){
                $subTot = $subTot +  10;
            }else{
                $subTot = $subTot;
            }

        }
        if($select[$i] == 'millage'){
            $subTot = $subTot +  (2 * $tot);
        }
        if($select[$i] == 'excess'){
            if($type == 'Compact Car' || $type == 'Midsize sedan' || $type == 'Midsize Estate' || $type == 'Large Sedan' || $type == 'Large Estate' || $type == 'Large Sedan'){
                $subTot = $subTot + 10;
            }else{
                $subTot = $subTot + 30;
            }

        }
        if($select[$i] == 'license'){
            $subTot = $subTot +  25;
        }
        if($select[$i] == 'require'){
            $subTot = $subTot;
        }
    }

    

    // if(isset($_GET['arriving'])){
    //     $arriving = $_GET['arriving'];
    // }
    // if(isset($_GET['departing'])){
    //     $departing = $_GET['departing'];
    // }
    // if(isset($_GET['millage'])){
    //     $millage = $_GET['millage'];
    // }
    // if(isset($_GET['excess'])){
    //     $excess = $_GET['excess'];
    // }
    // if(isset($_GET['license'])){
    //     $license = $_GET['license'];
    // }

    // $update = true;
   

    //Calculate the subtotal
    //$subTot = $rental * $qty;
    // $tot = 0;
    // if(0 < $qty && $qty < 7){
    //     $tot += $qty * $rental;
    // }else if(7 < $qty && $qty < 29){
    //     $tot += $qty * ($week/7);
    // }else{
    //     $tot += $qty * ($month/30);
    // }

    // $finalTot = 0;
    // if($millage == 'millage'){
    //     $finalTot += (2 * $tot);
    // }
    // if($excess =='excess'){
    //     $finalTot += 10;
    // }
    // if($license == 'license'){
    //     $finalTot += 25;
    // }

    $localPrice   = number_format((float)$subTot * 200, 2, '.', '');


// }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AMERIRENTACAR | RENTAL CAR</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="assets/css/master.css" />
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
        <!-- Start Switcher-->

        <!-- end switcher-->
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
                            <h1 class="b-title-page bg-primary_a">YOUR ORDER</h1>
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
                            <li><a href="home.html"><i class="icon fa fa-home"></i></a>
                            </li>
                            <li class="active">YOUR ORDER</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb-->

        <div class="typography-section typography-section-border">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-container">
                            <table class="table table_primary">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>VEHICLE IMG</th>
                                        <th>PRODUCT</th>
                                        <th>PICKUP DATE</th>
                                        <th>DROP DATE</th>
                                        <th>PRICE (PER DAY)</th>
                                        <th>QUANTITY</th>
                                        <th>SUBTOTAL</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <!-- <td><?php echo $id ?></td> -->
                                        <td><?php echo '<img src="./admin/upload/' .$img.'" width = "70px;" height = "60px;" alt = "Image">'?>
                                        </td>
                                        <td><b>Vehicle: </b><?php echo $type ?><br><br>
                                            <b>Model:</b> <?php echo $model ?>
                                        </td>
                                        <td><?php echo $startDate ?></td>
                                        <td><?php echo $endDate ?></td>
                                        <td>$<?php echo $rental ?>.00</td>
                                        <td><?php echo $qty ?> Day(s)</td>
                                        <td>$<?php echo (round($subTot)) ?>.00 | Rs. <?php echo $localPrice?></td>
                                    </tr>
                                    <?php     
                                    ?>
                                </tbody>
                            </table>

                            <aside class="l-sidebar-3">
                                <div class="b-bnr-2" style="width: 540px; height: 250px;">
                                    <div class="b-bnr-2__inner">
                                        <div class="widget widget-newsletter section-sidebar">
                                            <h3 class="widget-title ui-title-inner" style="color: white;">CART TOTAL
                                            </h3>
                                            <div class="widget-content">
                                                <form class="form-sidebar" id="newsletter-form" style="width: 500px;"
                                                    action="userform.php" method="GET">

                                                    <div class="b-car-info__item" style="font-size: 20px;" disabled>
                                                        $<?php echo (round($subTot)) ?>.00 | Rs.
                                                        <?php echo $localPrice?>
                                                        <div class="b-car-info__item-inner"><span
                                                                class="b-car-info__item-info">TOTAL</span>
                                                        </div>
                                                    </div><br>

                                                    <input type="hidden" name="startDate"
                                                        value="<?php  echo $startDate ?>">
                                                    <input type="hidden" name="endDate" value="<?php  echo $endDate ?>">
                                                    <input type="hidden" name="pickLoc"
                                                        value="<?php  echo $pickupLoc ?>">
                                                    <input type="hidden" name="dropLoc" value="<?php  echo $dropLoc ?>">
                                                    <div class="col-md-3 col-md-offset-3">
                                                        <input type="hidden" name="vehicleID"
                                                            value="<?php  echo $id ?>">
                                                        <button class="btn btn-primary" name="proceedBtn">proceed to
                                                            checkout</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>

                        </div>
                    </div>
                </div>
            </div>
        </div>



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
</body>

</html>