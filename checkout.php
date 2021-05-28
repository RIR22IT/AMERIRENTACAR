<?php include('./database/connection.php'); ?>
<?php include('./admin/php_code.php'); ?>

<?php
// if (isset($_GET['view'])) {
    $vehicleID = $_GET['vehicleID'];
    $pickDate = strtotime($_GET['startDate']);
    $dropDate = strtotime($_GET['endDate']);
    $qty = ($dropDate - $pickDate)/60/60/24;
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];

    // $update = true;
    $qry = "select * from car where id = $vehicleID";
    $run = $db->query($qry);
    if ($run->num_rows > 0) {
        while ($row = $run->fetch_assoc()) {
            $id = $row['id'];
            $model = $row['model'];
            $rental = $row['rental'];
            $make = $row['make'];
            $img = $row['img']; 
        }
    }

    //Calculate the subtotal
    $subTot = $rental * $qty;
// }
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AMERIRENTACAR |  Billing Details</title>
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

    <!-- MOBILE MENU-->
    <!-- ==========================-->
    <div data-off-canvas="mobile-slidebar left overlay">
        <a class="navbar-brand scroll" href="index.php">
            <img class="normal-logo img-resonsive visible-xs visible-sm" src="assets/media/general/logo.png" alt="logo" />
            <img class="scroll-logo img-resonsive hidden-xs hidden-sm" src="assets/media/general/logo-dark.png" alt="logo" />
        </a>
        <ul class="nav navbar-nav">
            <li>
                <h4><a href="">Mobile sidebar</a></h4>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Home<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="home.html" tabindex="-1">Home one page</a>
                    </li>
                    <li><a href="home-2.html" tabindex="-1">Home standart</a>
                    </li>
                </ul>
            </li>
            <li><a href="repair-shop.html">Repair Shop</a>
            </li>
            <li><a href="car-rental.html">Car Rental</a>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Listings<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="listings-1.html" tabindex="-1">Listings ver 01</a>
                    </li>
                    <li><a href="listings-2.html" tabindex="-1">Listings ver 02</a>
                    </li>
                    <li><a href="listings-3.html" tabindex="-1">Listings ver 03</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Blog<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="blog-main.html" tabindex="-1">Blog main</a>
                    </li>
                    <li><a href="blog-post.html" tabindex="-1">Blog post</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pages<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="car-details.html" tabindex="-1">Car details</a>
                    </li>
                    <li><a href="typography.html" tabindex="-1">Typography</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

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
                            <input class="search-global__input" type="text" placeholder="Type to search" autocomplete="off" name="s" value="" />
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

    <br><br><br>
    <!-- end .header-->
    <div class="section-title-page area-bg area-bg_dark area-bg_op_70">
        <div class="area-bg__inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="b-title-page bg-primary_a">CHECKOUT</h1>
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
                        <li class="active">CHECKOUT</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- end breadcrumb-->
    <div class="rtd typography-page">
        <div class="typography-section typography-section-border">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="typography-title">Billing details</h2>
                        <div class="row">
                            <div class="col-md-9">
                                <form class="ui-form-3" id="contactForm" action="checkout_connection.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="firstname" type="text" name="firstname" placeholder="Your First name *" required="required" />
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="lastname" type="text" name="lastname" placeholder="Last name *" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input class="form-control" id="companyname" type="text" name="companyname" placeholder="Company name (optional)" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <select class="selectpicker" data-width="100%" id="country" name="country">
                                                    <option>Country*</option>
                                                    <option value="Afganistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bonaire">Bonaire</option>
                                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Canary Islands">Canary Islands</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Channel Islands">Channel Islands</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos Island">Cocos Island</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Curaco">Curacao</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Ter">French Southern Ter</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Great Britain">Great Britain</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Hawaii">Hawaii</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="India">India</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea North">Korea North</option>
                                                    <option value="Korea Sout">Korea South</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Midway Islands">Midway Islands</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Nambia">Nambia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                    <option value="Nevis">Nevis</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau Island">Palau Island</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Phillipines">Philippines</option>
                                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="St Barthelemy">St Barthelemy</option>
                                                    <option value="St Eustatius">St Eustatius</option>
                                                    <option value="St Helena">St Helena</option>
                                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                    <option value="St Lucia">St Lucia</option>
                                                    <option value="St Maarten">St Maarten</option>
                                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                    <option value="Saipan">Saipan</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="Samoa American">Samoa American</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Tahiti">Tahiti</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                                    <option value="United States of America">United States of America</option>
                                                    <option value="Uraguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City State">Vatican City State</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                    <option value="Wake Island">Wake Island</option>
                                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zaire">Zaire</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" id="streat" type="text" name="streat" placeholder="House number and street" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" id="unit" type="text" name="unit" placeholder="Apartment,suite,unit,etc.(optional)" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" id="city" type="text" name="city" placeholder="Town , City" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" id="postcode" type="text" name="postcode" placeholder="Post code , Zip" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" id="phone" type="text" name="phone" placeholder="Phone" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" id="emailaddress" type="text" name="emailaddress" placeholder="Email adrress" required="required" />
                                            </div>

                                            <textarea class="form-control" id="information" type="text" name="information" rows="9" placeholder="Additional Information (Notes about the order)" required="required"></textarea>

                                            <!-- <button class="btn btn-primary">PLACE ORDER</button> -->
                                        </div>
                                        <div class="col-md-20">
                                            <button type="submit" name="book" class="btn btn-primary">Booking Confirmed</button>
                                        </div>
                                </form>



                                <div class="col-xs-12">
                                    <h2 class="typography-title">Your order</h2>
                                    <div class="table-container">
                                        <table class="table table_primary">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>VEHICLE IMG</th>
                                                    <th>PRODUCT</th>
                                                    <th>PICKUP DATE</th>
                                                    <th>DROP DATE</th>
                                                    <th>PRICE</th>
                                                    <th>QUANTITY</th>
                                                    <th>SUBTOTAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $id ?></td>
                                                    <td><?php echo '<img src="./admin/upload/' . $img . '" width = "70px;" height = "60px;" alt = "Image">' ?></td>
                                                    <td><?php echo $make ?><br><br>
                                                    <?php echo $model ?></td>
                                                    <td><?php echo $startDate ?></td>
                                                    <td><?php echo $endDate ?></td>
                                                    <td>$<?php echo $rental ?>.00</td>
                                                    <td><?php echo $qty ?> Day(s)</td>
                                                    <td>$<?php echo $subTot ?>.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><br><br><br>


                                    <div class="col-md-8 col-md-offset-2">
                                        <h2 class="typography-title">Accordion</h2>
                                        <div class="panel-group accordion accordion-1" id="accordion-1">
                                            <div class="panel panel-default">
                                                <div class="checkbox-group">
                                                    <input class="forms__check hidden" id="check-1" type="checkbox" />
                                                    <label class="forms__label forms__label-check forms__label-check-1" for="check-1">CASH ON DELIVERY (Pay with cash upon delivery.)</label>
                                                    <input class="forms__check hidden" id="check-2" type="checkbox" checked="checked" />
                                                    <label class="forms__label forms__label-check forms__label-check-1" for="check-2"> PAYMENT BY GENIE (Pay securely by Credit or Debit card through Genie IPG.)</label>
                                                    <!-- <input class="forms__check hidden" id="check-3" type="checkbox" />
                                            <label class="forms__label forms__label-check forms__label-check-2" for="check-3">Check box (checked)</label> -->
                                                </div>
                                            </div>

                                            <!-- <button class="btn btn-primary">PLACE ORDER</button> -->
                                        </div>
                                        <!-- end .accordion-->
                                    </div>
                                </div>
                                <!-- 
                                        </form> -->
                            </div>

                        </div>
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
    <!-- Datepicker-->
    <script src="assets/plugins/datepicker/jquery.datetimepicker.js"></script>
</body>

</html>