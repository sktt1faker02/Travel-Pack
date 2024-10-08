<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Car Hire Search</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-car-hire.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/mediaqueries.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/mediaqueries-searchforms.css">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= getBaseUrl() ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= getBaseUrl() ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= getBaseUrl() ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= getBaseUrl() ?>/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= getBaseUrl() ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?= getBaseUrl() ?>/assets/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?= getBaseUrl() ?>/assets/img/favicon/browserconfig.xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <div id="herohome" class="herowithform" style="background-image:url(<?= getBaseUrl() ?>/assets/img/car-hire/hero-car-hire-search.jpg)">
        <?php include '../sections/global/header-nav.php';?>
    </div><!-- main hero -->

    <section class="block search-wrap bggray searchresults-formwrap pt-0" id="car-hire-search">
        <div class="container">
            <div id="special-offers-searchbar" class="searchbar">
                <div class="searchbar-top mb-2 mb-md-3 row align-items-center">
                    <div class="col-md-5">
                        <h2>
                            Where's next?
                        </h2>
                    </div>
                </div><!-- searchbartop -->
                <?php include '../sections/searchform/main-forms/searchform-car-hire.php';?>
            </div><!-- searchbar -->
        </div><!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 tp-page-title">
                    <h1>
                    Pickup from Stansted Airport London [STN] on Thu 13 Jun 2024 at 02:30 <br>
                    Returning off from Heathrow Airport London [HRW] ON Fri 21 Jun 2024 at 16:00
                    </h1>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12 col-lg-3 tp-sidebar">
                    <div class="filters-box filters filters-reset d-flex flex-row align-items-center justify-content-between">
                        <div>
                            <h5 class="fontfam2 mb-0">
                                Filters
                            </h5>
                        </div>
                        <div>
                            <a href="#" class="btn btn-white">
                                Reset All
                            </a>
                        </div>
                    </div>

                    <div class="filters-box filters">
                        <div class="fb-bottom">
                            <div class="option-wrap">
                                <span>
                                    Car Company
                                </span>
                                <div class="select">
                                    <select>
                                        <option>Any</option>
                                        <option>Any</option>
                                        <option>Any</option>
                                        <option>Any</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div>
                            </div><!-- option-wrap -->
                        </div>
                    </div>

                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Car Type
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom togglecheckbox">
                            <ul class="checkbox-list togglecheckbox">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox1">
                                        <label for="checkbox1"><span class="checkboxtext">7 Seat Minivan</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox2">
                                        <label for="checkbox2"><span class="checkboxtext">Cargo Van</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3"><span class="checkboxtext">Estate</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox4">
                                        <label for="checkbox4"><span class="checkboxtext">Compact</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox5">
                                        <label for="checkbox5"><span class="checkboxtext">Economy</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div><!-- fb bottom -->
                    </div><!-- filters-box -->

                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Doors
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom togglecheckbox">
                            <ul class="checkbox-list togglecheckbox">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox11">
                                        <label for="checkbox11"><span class="checkboxtext">2 Doors</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox12">
                                        <label for="checkbox12"><span class="checkboxtext">4 Doors</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox13">
                                        <label for="checkbox13"><span class="checkboxtext">5 Doors</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div><!-- fb bottom -->
                    </div><!-- filters-box -->

                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Transmission
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom togglecheckbox">
                            <ul class="checkbox-list togglecheckbox">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox14">
                                        <label for="checkbox14"><span class="checkboxtext">Automatic</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox15">
                                        <label for="checkbox15"><span class="checkboxtext">Manual</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div><!-- fb bottom -->
                    </div><!-- filters-box -->  
                    
                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Passengers
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom togglecheckbox">
                            <ul class="checkbox-list togglecheckbox">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox6">
                                        <label for="checkbox6"><span class="checkboxtext">2 Passengers</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox7">
                                        <label for="checkbox7"><span class="checkboxtext">3 Passengers</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox8">
                                        <label for="checkbox8"><span class="checkboxtext">4 Passengers</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox9">
                                        <label for="checkbox9"><span class="checkboxtext">5 Passengers</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox10">
                                        <label for="checkbox10"><span class="checkboxtext">7 Passengers</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div><!-- fb bottom -->
                    </div><!-- filters-box -->      
                    
                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Bags
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom togglecheckbox">
                            <ul class="checkbox-list togglecheckbox">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox1">
                                        <label for="checkbox1"><span class="checkboxtext">1 Bag</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox2">
                                        <label for="checkbox2"><span class="checkboxtext">2 Bags</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3"><span class="checkboxtext">3 Bags</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox4">
                                        <label for="checkbox4"><span class="checkboxtext">4 Bags</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox5">
                                        <label for="checkbox5"><span class="checkboxtext">6 Bags</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div><!-- fb bottom -->
                    </div><!-- filters-box -->
                    
                    <div class="filters-box needbox">
                        <div class="fb-top fw-semibold">
                            <div>
                                Need Help?
                            </div>
                        </div><!-- fb-top   -->
                        <div class="fb-bottom txt-black">
                            <div class="flightpurchase-box">
                                If you need any help with your bookings simply <a href="#"><u>Contact Us</u></a> and we shall get in touch with you or Just call us on  <a href="#">+44 208 585 4080 </a>
                            </div><!-- flight purchase box -->
                        </div>
                    </div>

                </div><!-- col -->

                <div class="col-12 col-lg-9 tp-main specialoffer-main">
                    <div class="tp-main-heading mb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="mb-0 fontfam2">
                                    Results
                                </h5>
                            </div><!-- col -->
                            <div class="col-6 d-flex justify-content-end sortby">
                                <div class="select mb-0">
                                    <select>
                                        <option>Cheapest</option>
                                        <option>Cheapest</option>
                                        <option>Cheapest</option>
                                        <option>Cheapest</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div><!-- select -->
                            </div>
                        </div><!-- special offers -->
                    </div>
                    
                    <form action="car-hire-extras.php" method="post">    
                        <div class="loadmore-boxes-wrap">
                            <div class="whiteboxbg carhire-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="car-hire-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/car-hire/car-thumb.jpg" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row">
                                            <div class="col-lg-3 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h3>
                                                        Toyota Aygo
                                                    </h3>
                                                    <span>
                                                        or similar
                                                    </span>
                                                </div>

                                                <div class="fuelpolicy">
                                                    <h6>
                                                        Fuel Policy (unspecified)
                                                    </h6>
                                                    <span>
                                                        Pick up and return full
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-6 car-hire-features col-12 d-flex flex-row column-gap-4">
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Rate Includes
                                                    </h6>
                                                    <ul>
                                                        <li>Breakdown Assistance</li>
                                                        <li>Airport Fee</li>
                                                        <li>Road Tax</li>
                                                        <li>Environmental Fee</li>
                                                        <li>Tax</li>
                                                        <li>One Way Fee</li>
                                                        <li>Unlimited Mileage</li>
                                                    </ul>
                                                </div>
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Car Features
                                                    </h6>
                                                    <ul>
                                                        <li>Mini (MCMR)</li>
                                                        <li>4 Passengers</li>
                                                        <li>2 Bags</li>
                                                        <li>3 Doors</li>
                                                        <li>Manual Transmission</li>
                                                        <li>Air Conditioned</li>
                                                    </ul>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 carhirelogo">
                                                <img src="<?= getBaseUrl() ?>/assets/img/car-hire/green-motors.png" alt="">
                                            </div>
                                        </div><!-- row -->

                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-9 d-flex justify-content-between align-items-center">
                                                <div class="carhire-termslink">
                                                    <a href="#">
                                                        Show Terms & Conditions
                                                    </a>
                                                </div><!-- carhire termslink -->
                                                <div class="carhirebox-price">
                                                    <h3>
                                                        £117.72
                                                    </h3>
                                                </div><!-- carehirebox -->
                                            </div><!-- col -->
                                            <div class="col-lg-3 d-flex justify-content-end">
                                                <button class="btn btn-primary">
                                                    Select
                                                </button>
                                            </div><!-- col lg -->
                                        </div><!-- row -->
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg carhire-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="car-hire-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/car-hire/car-thumb.jpg" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row">
                                            <div class="col-lg-3 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h3>
                                                        Toyota Aygo
                                                    </h3>
                                                    <span>
                                                        or similar
                                                    </span>
                                                </div>

                                                <div class="fuelpolicy">
                                                    <h6>
                                                        Fuel Policy (unspecified)
                                                    </h6>
                                                    <span>
                                                        Pick up and return full
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-6 car-hire-features col-12 d-flex flex-row column-gap-4">
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Rate Includes
                                                    </h6>
                                                    <ul>
                                                        <li>Breakdown Assistance</li>
                                                        <li>Airport Fee</li>
                                                        <li>Road Tax</li>
                                                        <li>Environmental Fee</li>
                                                        <li>Tax</li>
                                                        <li>One Way Fee</li>
                                                        <li>Unlimited Mileage</li>
                                                    </ul>
                                                </div>
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Car Features
                                                    </h6>
                                                    <ul>
                                                        <li>Mini (MCMR)</li>
                                                        <li>4 Passengers</li>
                                                        <li>2 Bags</li>
                                                        <li>3 Doors</li>
                                                        <li>Manual Transmission</li>
                                                        <li>Air Conditioned</li>
                                                    </ul>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 carhirelogo">
                                                <img src="<?= getBaseUrl() ?>/assets/img/car-hire/green-motors.png" alt="">
                                            </div>
                                        </div><!-- row -->

                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-9 d-flex justify-content-between align-items-center">
                                                <div class="carhire-termslink">
                                                    <a href="#">
                                                        Show Terms & Conditions
                                                    </a>
                                                </div><!-- carhire termslink -->
                                                <div class="carhirebox-price">
                                                    <h3>
                                                        £117.72
                                                    </h3>
                                                </div><!-- carehirebox -->
                                            </div><!-- col -->
                                            <div class="col-lg-3 d-flex justify-content-end">
                                                <button class="btn btn-primary">
                                                    Select
                                                </button>
                                            </div><!-- col lg -->
                                        </div><!-- row -->
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg carhire-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="car-hire-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/car-hire/car-thumb.jpg" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row">
                                            <div class="col-lg-3 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h3>
                                                        Toyota Aygo
                                                    </h3>
                                                    <span>
                                                        or similar
                                                    </span>
                                                </div>

                                                <div class="fuelpolicy">
                                                    <h6>
                                                        Fuel Policy (unspecified)
                                                    </h6>
                                                    <span>
                                                        Pick up and return full
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-6 car-hire-features col-12 d-flex flex-row column-gap-4">
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Rate Includes
                                                    </h6>
                                                    <ul>
                                                        <li>Breakdown Assistance</li>
                                                        <li>Airport Fee</li>
                                                        <li>Road Tax</li>
                                                        <li>Environmental Fee</li>
                                                        <li>Tax</li>
                                                        <li>One Way Fee</li>
                                                        <li>Unlimited Mileage</li>
                                                    </ul>
                                                </div>
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Car Features
                                                    </h6>
                                                    <ul>
                                                        <li>Mini (MCMR)</li>
                                                        <li>4 Passengers</li>
                                                        <li>2 Bags</li>
                                                        <li>3 Doors</li>
                                                        <li>Manual Transmission</li>
                                                        <li>Air Conditioned</li>
                                                    </ul>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 carhirelogo">
                                                <img src="<?= getBaseUrl() ?>/assets/img/car-hire/green-motors.png" alt="">
                                            </div>
                                        </div><!-- row -->

                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-9 d-flex justify-content-between align-items-center">
                                                <div class="carhire-termslink">
                                                    <a href="#">
                                                        Show Terms & Conditions
                                                    </a>
                                                </div><!-- carhire termslink -->
                                                <div class="carhirebox-price">
                                                    <h3>
                                                        £117.72
                                                    </h3>
                                                </div><!-- carehirebox -->
                                            </div><!-- col -->
                                            <div class="col-lg-3 d-flex justify-content-end">
                                                <button class="btn btn-primary">
                                                    Select
                                                </button>
                                            </div><!-- col lg -->
                                        </div><!-- row -->
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg carhire-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="car-hire-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/car-hire/car-thumb.jpg" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row">
                                            <div class="col-lg-3 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h3>
                                                        Toyota Aygo
                                                    </h3>
                                                    <span>
                                                        or similar
                                                    </span>
                                                </div>

                                                <div class="fuelpolicy">
                                                    <h6>
                                                        Fuel Policy (unspecified)
                                                    </h6>
                                                    <span>
                                                        Pick up and return full
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-6 car-hire-features col-12 d-flex flex-row column-gap-4">
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Rate Includes
                                                    </h6>
                                                    <ul>
                                                        <li>Breakdown Assistance</li>
                                                        <li>Airport Fee</li>
                                                        <li>Road Tax</li>
                                                        <li>Environmental Fee</li>
                                                        <li>Tax</li>
                                                        <li>One Way Fee</li>
                                                        <li>Unlimited Mileage</li>
                                                    </ul>
                                                </div>
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Car Features
                                                    </h6>
                                                    <ul>
                                                        <li>Mini (MCMR)</li>
                                                        <li>4 Passengers</li>
                                                        <li>2 Bags</li>
                                                        <li>3 Doors</li>
                                                        <li>Manual Transmission</li>
                                                        <li>Air Conditioned</li>
                                                    </ul>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 carhirelogo">
                                                <img src="<?= getBaseUrl() ?>/assets/img/car-hire/green-motors.png" alt="">
                                            </div>
                                        </div><!-- row -->

                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-9 d-flex justify-content-between align-items-center">
                                                <div class="carhire-termslink">
                                                    <a href="#">
                                                        Show Terms & Conditions
                                                    </a>
                                                </div><!-- carhire termslink -->
                                                <div class="carhirebox-price">
                                                    <h3>
                                                        £117.72
                                                    </h3>
                                                </div><!-- carehirebox -->
                                            </div><!-- col -->
                                            <div class="col-lg-3 d-flex justify-content-end">
                                                <button class="btn btn-primary">
                                                    Select
                                                </button>
                                            </div><!-- col lg -->
                                        </div><!-- row -->
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg carhire-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="car-hire-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/car-hire/car-thumb.jpg" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row">
                                            <div class="col-lg-3 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h3>
                                                        Toyota Aygo
                                                    </h3>
                                                    <span>
                                                        or similar
                                                    </span>
                                                </div>

                                                <div class="fuelpolicy">
                                                    <h6>
                                                        Fuel Policy (unspecified)
                                                    </h6>
                                                    <span>
                                                        Pick up and return full
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-6 car-hire-features col-12 d-flex flex-row column-gap-4">
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Rate Includes
                                                    </h6>
                                                    <ul>
                                                        <li>Breakdown Assistance</li>
                                                        <li>Airport Fee</li>
                                                        <li>Road Tax</li>
                                                        <li>Environmental Fee</li>
                                                        <li>Tax</li>
                                                        <li>One Way Fee</li>
                                                        <li>Unlimited Mileage</li>
                                                    </ul>
                                                </div>
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Car Features
                                                    </h6>
                                                    <ul>
                                                        <li>Mini (MCMR)</li>
                                                        <li>4 Passengers</li>
                                                        <li>2 Bags</li>
                                                        <li>3 Doors</li>
                                                        <li>Manual Transmission</li>
                                                        <li>Air Conditioned</li>
                                                    </ul>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 carhirelogo">
                                                <img src="<?= getBaseUrl() ?>/assets/img/car-hire/green-motors.png" alt="">
                                            </div>
                                        </div><!-- row -->

                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-9 d-flex justify-content-between align-items-center">
                                                <div class="carhire-termslink">
                                                    <a href="#">
                                                        Show Terms & Conditions
                                                    </a>
                                                </div><!-- carhire termslink -->
                                                <div class="carhirebox-price">
                                                    <h3>
                                                        £117.72
                                                    </h3>
                                                </div><!-- carehirebox -->
                                            </div><!-- col -->
                                            <div class="col-lg-3 d-flex justify-content-end">
                                                <button class="btn btn-primary">
                                                    Select
                                                </button>
                                            </div><!-- col lg -->
                                        </div><!-- row -->
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg carhire-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="car-hire-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/car-hire/car-thumb.jpg" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row">
                                            <div class="col-lg-3 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h3>
                                                        Toyota Aygo
                                                    </h3>
                                                    <span>
                                                        or similar
                                                    </span>
                                                </div>

                                                <div class="fuelpolicy">
                                                    <h6>
                                                        Fuel Policy (unspecified)
                                                    </h6>
                                                    <span>
                                                        Pick up and return full
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-6 car-hire-features col-12 d-flex flex-row column-gap-4">
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Rate Includes
                                                    </h6>
                                                    <ul>
                                                        <li>Breakdown Assistance</li>
                                                        <li>Airport Fee</li>
                                                        <li>Road Tax</li>
                                                        <li>Environmental Fee</li>
                                                        <li>Tax</li>
                                                        <li>One Way Fee</li>
                                                        <li>Unlimited Mileage</li>
                                                    </ul>
                                                </div>
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Car Features
                                                    </h6>
                                                    <ul>
                                                        <li>Mini (MCMR)</li>
                                                        <li>4 Passengers</li>
                                                        <li>2 Bags</li>
                                                        <li>3 Doors</li>
                                                        <li>Manual Transmission</li>
                                                        <li>Air Conditioned</li>
                                                    </ul>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 carhirelogo">
                                                <img src="<?= getBaseUrl() ?>/assets/img/car-hire/green-motors.png" alt="">
                                            </div>
                                        </div><!-- row -->

                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-9 d-flex justify-content-between align-items-center">
                                                <div class="carhire-termslink">
                                                    <a href="#">
                                                        Show Terms & Conditions
                                                    </a>
                                                </div><!-- carhire termslink -->
                                                <div class="carhirebox-price">
                                                    <h3>
                                                        £117.72
                                                    </h3>
                                                </div><!-- carehirebox -->
                                            </div><!-- col -->
                                            <div class="col-lg-3 d-flex justify-content-end">
                                                <button class="btn btn-primary">
                                                    Select
                                                </button>
                                            </div><!-- col lg -->
                                        </div><!-- row -->
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg carhire-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="car-hire-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/car-hire/car-thumb.jpg" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row">
                                            <div class="col-lg-3 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h3>
                                                        Toyota Aygo
                                                    </h3>
                                                    <span>
                                                        or similar
                                                    </span>
                                                </div>

                                                <div class="fuelpolicy">
                                                    <h6>
                                                        Fuel Policy (unspecified)
                                                    </h6>
                                                    <span>
                                                        Pick up and return full
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-6 car-hire-features col-12 d-flex flex-row column-gap-4">
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Rate Includes
                                                    </h6>
                                                    <ul>
                                                        <li>Breakdown Assistance</li>
                                                        <li>Airport Fee</li>
                                                        <li>Road Tax</li>
                                                        <li>Environmental Fee</li>
                                                        <li>Tax</li>
                                                        <li>One Way Fee</li>
                                                        <li>Unlimited Mileage</li>
                                                    </ul>
                                                </div>
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Car Features
                                                    </h6>
                                                    <ul>
                                                        <li>Mini (MCMR)</li>
                                                        <li>4 Passengers</li>
                                                        <li>2 Bags</li>
                                                        <li>3 Doors</li>
                                                        <li>Manual Transmission</li>
                                                        <li>Air Conditioned</li>
                                                    </ul>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 carhirelogo">
                                                <img src="<?= getBaseUrl() ?>/assets/img/car-hire/green-motors.png" alt="">
                                            </div>
                                        </div><!-- row -->

                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-9 d-flex justify-content-between align-items-center">
                                                <div class="carhire-termslink">
                                                    <a href="#">
                                                        Show Terms & Conditions
                                                    </a>
                                                </div><!-- carhire termslink -->
                                                <div class="carhirebox-price">
                                                    <h3>
                                                        £117.72
                                                    </h3>
                                                </div><!-- carehirebox -->
                                            </div><!-- col -->
                                            <div class="col-lg-3 d-flex justify-content-end">
                                                <button class="btn btn-primary">
                                                    Select
                                                </button>
                                            </div><!-- col lg -->
                                        </div><!-- row -->
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg carhire-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="car-hire-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/car-hire/car-thumb.jpg" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row">
                                            <div class="col-lg-3 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h3>
                                                        Toyota Aygo
                                                    </h3>
                                                    <span>
                                                        or similar
                                                    </span>
                                                </div>

                                                <div class="fuelpolicy">
                                                    <h6>
                                                        Fuel Policy (unspecified)
                                                    </h6>
                                                    <span>
                                                        Pick up and return full
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-6 car-hire-features col-12 d-flex flex-row column-gap-4">
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Rate Includes
                                                    </h6>
                                                    <ul>
                                                        <li>Breakdown Assistance</li>
                                                        <li>Airport Fee</li>
                                                        <li>Road Tax</li>
                                                        <li>Environmental Fee</li>
                                                        <li>Tax</li>
                                                        <li>One Way Fee</li>
                                                        <li>Unlimited Mileage</li>
                                                    </ul>
                                                </div>
                                                <div class="car-hire-features-inner">
                                                    <h6 class="txt-black fontfam2">
                                                        Car Features
                                                    </h6>
                                                    <ul>
                                                        <li>Mini (MCMR)</li>
                                                        <li>4 Passengers</li>
                                                        <li>2 Bags</li>
                                                        <li>3 Doors</li>
                                                        <li>Manual Transmission</li>
                                                        <li>Air Conditioned</li>
                                                    </ul>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 carhirelogo">
                                                <img src="<?= getBaseUrl() ?>/assets/img/car-hire/green-motors.png" alt="">
                                            </div>
                                        </div><!-- row -->

                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-9 d-flex justify-content-between align-items-center">
                                                <div class="carhire-termslink">
                                                    <a href="#">
                                                        Show Terms & Conditions
                                                    </a>
                                                </div><!-- carhire termslink -->
                                                <div class="carhirebox-price">
                                                    <h3>
                                                        £117.72
                                                    </h3>
                                                </div><!-- carehirebox -->
                                            </div><!-- col -->
                                            <div class="col-lg-3 d-flex justify-content-end">
                                                <button class="btn btn-primary">
                                                    Select
                                                </button>
                                            </div><!-- col lg -->
                                        </div><!-- row -->
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                        </div>
                    </form>

                    <div class="loadmore-nav mx-auto mt-5">
                        <div class="loadmore-navdetails">
                            1-<span class="loadmore-number"></span>
                            of
                            <span class="loadmore-total">

                            </span>
                        </div>
                        <div class="loadmore-gauge">
                            <div class="loadmore-gauge-bar"></div>
                        </div>
                        <button class="btn btn-white loadmorebtn mt-3">
                            Load More
                        </button>
                    </div><!-- load more -->
                    
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </section>


    <?php include '../sections/global/cta.php';?>
    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-search.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/loadmoreboxes.js"></script>

</body>

</html>