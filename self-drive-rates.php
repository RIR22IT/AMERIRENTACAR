<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AMERIRENTACAR | SELF DRIVE RATES</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="assets/css/master.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/index.css" />
    <!--fav-icon-->
    <link rel="shortcut icon" href="fav-icon.png" />

    <!-- SWITCHER-->
    <link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" />
    <link href="assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" />
    <link href="assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" />
    <link href="assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" />
    <link href="assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" />
    <!--<link rel="icon" type="image/x-icon" href="favicon.ico" />-->

    <!--Whatsapp CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/whatsapp.css">

    <!--[if lt IE 9 ]>
<script src="assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->

    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
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
    <a href="https://wa.me/94777312848" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">

        <?php include './inc/header.php' ?>

        <div class="section-title-page area-bg area-bg_dark area-bg_op_70">
            <div class="area-bg__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <br/><h1 class="b-title-page bg-primary_a">SELF DRIVE RATES IN SRI LANKA</h1>
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
                            <li><a href="index.php"><i class="icon fa fa-home" style="color: #000"></i></a>
                            </li>
                            <li class="active">SELF DRIVE RATES IN SRI LANKA</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb-->

        <center>

            <div>
                <div style="overflow-x:auto;">
                    <div>
                        <table>
                            <thead>
                                <tr style="background-color: #c7effc;">
                                    <th>Vehicles</th>
                                    <th>Rate Per Month</th>
                                    <th>Rate Per Week</th>
                                    <th>Excess Mileage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- General Cars -->
                                <tr>
                                    <th style="font-size:30px">GENERAL CARS</th>
                                </tr>
                                <?php
                                include('./database/connection.php');
                                $query = "SELECT * FROM selfdriverates WHERE category = 'General Cars'";
                                $data = mysqli_query($db, $query) or die('error');

                                if (mysqli_num_rows($data) > 0) {
                                    while ($row = mysqli_fetch_assoc($data)) {
                                        $id = $row['id'];
                                        $vehicle = $row['vehicle'];
                                        $category = $row['category'];
                                        $ratePerMonth = $row['ratePerMonth'];
                                        $ratePerWeek = $row['ratePerWeek'];
                                        $ExcessMileage = $row['ExcessMileage'];
                                ?>
                                        <tr>
                                            <td><?php echo $vehicle ?></td>
                                            <td><?php echo $ratePerMonth ?></td>
                                            <td><?php echo $ratePerWeek ?></td>
                                            <td><?php echo $ExcessMileage ?></td>

                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                                <!-- Premium Cars -->
                                <tr>
                                    <th style="font-size:30px">PREMIUM CARS</th>
                                </tr>
                                <?php
                                include('./database/connection.php');
                                $query = "SELECT * FROM selfdriverates WHERE category = 'Premium Cars'";
                                $data = mysqli_query($db, $query) or die('error');

                                if (mysqli_num_rows($data) > 0) {
                                    while ($row = mysqli_fetch_assoc($data)) {
                                        $id = $row['id'];
                                        $vehicle = $row['vehicle'];
                                        $category = $row['category'];
                                        $ratePerMonth = $row['ratePerMonth'];
                                        $ratePerWeek = $row['ratePerWeek'];
                                        $ExcessMileage = $row['ExcessMileage'];
                                ?>
                                        <tr>
                                            <td><?php echo $vehicle ?></td>
                                            <td><?php echo $ratePerMonth ?></td>
                                            <td><?php echo $ratePerWeek ?></td>
                                            <td><?php echo $ExcessMileage ?></td>

                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                                <!-- Semi Luxury Cars -->
                                <tr>
                                    <th style="font-size:30px">SEMI LUXURY CARS</th>
                                </tr>
                                <?php
                                include('./database/connection.php');
                                $query = "SELECT * FROM selfdriverates WHERE category = 'Semi Luxury Cars'";
                                $data = mysqli_query($db, $query) or die('error');

                                if (mysqli_num_rows($data) > 0) {
                                    while ($row = mysqli_fetch_assoc($data)) {
                                        $id = $row['id'];
                                        $vehicle = $row['vehicle'];
                                        $category = $row['category'];
                                        $ratePerMonth = $row['ratePerMonth'];
                                        $ratePerWeek = $row['ratePerWeek'];
                                        $ExcessMileage = $row['ExcessMileage'];
                                ?>
                                        <tr>
                                            <td><?php echo $vehicle ?></td>
                                            <td><?php echo $ratePerMonth ?></td>
                                            <td><?php echo $ratePerWeek ?></td>
                                            <td><?php echo $ExcessMileage ?></td>

                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                                <!-- Vans  -->
                                <tr>
                                    <th style="font-size:30px">VANS</th>
                                </tr>
                                <?php
                                include('./database/connection.php');
                                $query = "SELECT * FROM selfdriverates WHERE category = 'Vans'";
                                $data = mysqli_query($db, $query) or die('error');

                                if (mysqli_num_rows($data) > 0) {
                                    while ($row = mysqli_fetch_assoc($data)) {
                                        $id = $row['id'];
                                        $vehicle = $row['vehicle'];
                                        $category = $row['category'];
                                        $ratePerMonth = $row['ratePerMonth'];
                                        $ratePerWeek = $row['ratePerWeek'];
                                        $ExcessMileage = $row['ExcessMileage'];
                                ?>
                                        <tr>
                                            <td><?php echo $vehicle ?></td>
                                            <td><?php echo $ratePerMonth ?></td>
                                            <td><?php echo $ratePerWeek ?></td>
                                            <td><?php echo $ExcessMileage ?></td>

                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                                <!-- 4WD  -->
                                <tr>
                                    <th style="font-size:30px">4WD</th>
                                </tr>
                                <?php
                                include('./database/connection.php');
                                $query = "SELECT * FROM selfdriverates WHERE category = '4WD'";
                                $data = mysqli_query($db, $query) or die('error');

                                if (mysqli_num_rows($data) > 0) {
                                    while ($row = mysqli_fetch_assoc($data)) {
                                        $id = $row['id'];
                                        $vehicle = $row['vehicle'];
                                        $category = $row['category'];
                                        $ratePerMonth = $row['ratePerMonth'];
                                        $ratePerWeek = $row['ratePerWeek'];
                                        $ExcessMileage = $row['ExcessMileage'];
                                ?>
                                        <tr>
                                            <td><?php echo $vehicle ?></td>
                                            <td><?php echo $ratePerMonth ?></td>
                                            <td><?php echo $ratePerWeek ?></td>
                                            <td><?php echo $ExcessMileage ?></td>

                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <table>
                        <tr>
                            <th>VEHICLES</th>
                            <th>RATE PER MONTH</th>
                            <th>RATE PER WEEK</th>
                            <th>EXCESS MILEAGE</th>
                        </tr>
                        <tr>
                            <th style="font-size:30px">GENERAL CARS</th>
                        </tr>
                        <tr>
                            <td>SUZUKI ALTO (MANUAL TRANSMISSION)</td>
                            <td>50,000/- U$ 323</td>
                            <td>21,000/- U$ 137</td>
                            <td>25.00</td>
                        </tr>
                        <tr>
                            <td>SUZUKI ALTO HYBRID JAPAN (AUTO TRANSMISSION)</td>
                            <td>58,500/- U$ 334</td>
                            <td>22,000/- U$ 126</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA PIXIS HYBRID</td>
                            <td>63,000/- U$ 360</td>
                            <td>25,600/- U$ 146</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <td>SUZUKI WAGON R HYBRID</td>
                            <td>63,000/- U$ 360</td>
                            <td>25,200/- U$ 144</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <td>VIVA AXIA</td>
                            <td>71,500/- U$ 409</td>
                            <td>27,000/- U$ 154</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA VITZ 2010</td>
                            <td>58,500/- U$ 334</td>
                            <td>22.000/- U$ 126</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA AQUA</td>
                            <td>76,500/- U$ 437</td>
                            <td>28,300/- U$ 162</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <td>SUZUKI BELENO</td>
                            <td>76,500/- U$ 437</td>
                            <td>28,300/- U$ 162</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <td>HONDA FIT HYBRID</td>
                            <td>85,500/- U$ 551</td>
                            <td>32,500/- U$ 210</td>
                            <td>45.00</td>
                        </tr>
                        <tr>
                            <td>KIA PICANTO 2016</td>
                            <td>67,500/- U$ 386</td>
                            <td>25,200/- U$ 144</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <td>PERODUA BEZZA 2018</td>
                            <td>85,000/- U$ 486</td>
                            <td>31,500/- U$ 180</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <th style="font-size:30px">PREMIUM CARS</th>
                        </tr>
                        <tr>
                            <td>TOYOTA YARIS / BELTA</td>
                            <td>67,500/- U$ 386</td>
                            <td>22,500/- U$ 129</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA NZE 121</td>
                            <td>58,500/- U$ 334</td>
                            <td>22,000/- U$ 126</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <th style="font-size:30px">SEMI LUXURY CARS</th>
                        </tr>
                        <tr>
                            <td>TOYOTA COROLLA NZE 141</td>
                            <td>81,000/- U$ 463</td>
                            <td>27,000/- U$ 154</td>
                            <td>35.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA AXIO HYBRID</td>
                            <td>112,500/- U$ 643</td>
                            <td>31,500/- U$ 180</td>
                            <td>45.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA ALLION 260</td>
                            <td>121,500/- U$ 694</td>
                            <td>40,500/- U$ 231</td>
                            <td>50.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA PRIUS</td>
                            <td>121,500/- U$ 694</td>
                            <td>41,000/- U$ 234</td>
                            <td>50.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA PREMIO 260 (2017')</td>
                            <td>139,500/- U$ 797</td>
                            <td>40,500/- U$ 231</td>
                            <td>50.00</td>
                        </tr>
                        <tr>
                            <td>CONTINENTAL CARS</td>
                            <td>BY SPECIAL ARRANGEMENT</td>
                        </tr>
                        <tr>
                            <th style="font-size:30px">VANS</th>
                        </tr>
                        <tr>
                            <td>TOYOTA HIACE TRH200 (PETROL)</td>
                            <td>135,000/- U$ 771</td>
                            <td>45,000/- U$ 257</td>
                            <td>75.00</td>
                        </tr>
                        <tr>
                            <th style="font-size:30px">4WD</th>
                        </tr>
                        <tr>
                            <td>MITSUBISHI L200 4WD | TOYOTA HILUX</td>
                            <td>135,000/- U$ 771</td>
                            <td>45,000/- U$ 257</td>
                            <td>75.00</td>
                        </tr>
                        <tr>
                            <td>MITSUBISHI OUTLANDER</td>
                            <td>166,500/- U$951</td>
                            <td>50,400/- U$288</td>
                            <td>75.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA CHR</td>
                            <td>179,500/- U$ 1026</td>
                            <td>58,500/- U$334</td>
                            <td>75.00</td>
                        </tr>
                        <tr>
                            <td>KIA SPORTAGE</td>
                            <td>135,000/- U$ 771</td>
                            <td>44,100/- U$ 252</td>
                            <td>75.00</td>
                        </tr>
                        <tr>
                            <td>MITSUBISHI MONTERO SPORT</td>
                            <td>175,500/- U$ 1003</td>
                            <td>67,500/- U$ 386</td>
                            <td>120.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA LANDCRUISER – TRJ 120</td>
                            <td>202,500/- U$ 1157</td>
                            <td>85,500/- U$489</td>
                            <td>120.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA LANDCRUISER PRADO TRJ 150</td>
                            <td>315,000/- U$ 1800</td>
                            <td>112,500/- U$643</td>
                            <td>175.00</td>
                        </tr>
                        <tr>
                            <td>HONDA VEZEL HYBRID</td>
                            <td>135,000/- U$ 771</td>
                            <td>45,000/- U$ 257</td>
                            <td>75.00</td>
                        </tr>
                        <tr>
                            <td>KIA SORANTA 7 SEATER SUV</td>
                            <td>157,500/- U$ 900</td>
                            <td>50,400/- U$ 288</td>
                            <td>75.00</td>
                        </tr>
                        <tr>
                            <td>TOYOTA FORTUNA</td>
                            <td>175,500/- U$ 1003</td>
                            <td>67,500/- U$ 386</td>
                            <td>75.00</td>
                        </tr>
                    </table> -->

                </div>
            </div>
        </center>



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