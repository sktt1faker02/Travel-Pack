<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Rails Search Results</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-rail.css">
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
    <div id="herohome" class="herowithform" style="background-image:url(<?= getBaseUrl() ?>/assets/img/rail/bghero-rail.jpg)">
        <?php include '../sections/global/header-nav.php'; ?>
    </div><!-- main hero -->

    <section class="block search-wrap pt-0 searchresults-formwrap bggray" id="special-offers-search">
        <div class="container">
            <div id="special-offers-searchbar" class="searchbar">
                <div class="searchbar-top mb-2 mb-md-3 row align-items-center">
                    <div class="col-md-5">
                        <h2>
                            Where's next?
                        </h2>
                    </div>
                </div><!-- searchbartop -->

                <?php include '../sections/searchform/main-forms/searchform-rail.php'; ?>
            </div><!-- searchbar -->
        </div><!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 tp-page-title">
                    <h1>
                        We're experts at making your dream holiday a reality <br>
                        Check out our deals and offers!
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
                            <div class="option-wrap mt-2">
                                <span>
                                    Train Number
                                </span>
                                <div class="select">
                                    <select>
                                        <option>Enter Train Number Here</option>
                                        <option>Any</option>
                                        <option>Any</option>
                                        <option>Any</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div>
                            </div><!-- option-wrap -->
                            <div class="option-wrap mt-2">
                                <span>
                                    Operated By
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
                    </div><!-- filters box -->

                    <!-- Price Range Filter Box -->
                    <div id="priceContainer" class="filters-box time-range">
                        <div class="fb-top fw-semibold">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Price Range
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <div class="slider-container">
                                <div class="rangeslider-wrap">
                                    <input type="range" min="20" max="2000" value="600" class="slider" id="priceRange" slide-name="price">
                                    <span class="sliderValue-below" id="priceValueBelow">£600</span>
                                </div>
                                <div class="value-display">
                                    <span>£20</span>
                                    <span>£2000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Departure Time Filter Box -->
                    <div id="departureContainer" class="filters-box time-range">
                        <div class="fb-top fw-semibold">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Departure Time
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <div class="slider-container">
                                <div class="rangeslider-wrap">
                                    <input type="range" min="0" max="1440" value="60" step="60" class="slider" id="departureTime" slide-name="durationTime">
                                    <span class="sliderValue-below" id="departureTimeValueBelow">01:00</span>
                                </div>
                                <div class="value-display">
                                    <span>00:00</span>
                                    <span>24:00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Return Time Filter Box -->
                    <div id="returnContainer" class="filters-box time-range">
                        <div class="fb-top fw-semibold">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Return Time
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <div class="slider-container">
                                <div class="rangeslider-wrap">
                                    <input type="range" min="0" max="1440" value="60" step="60" class="slider" id="returnTime" slide-name="returnTime">
                                    <span class="sliderValue-below" id="returnTimeValueBelow">01:00</span>
                                </div>
                                <div class="value-display">
                                    <span>00:00</span>
                                    <span>24:00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Departing from
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="departing1">
                                        <label for="departing1"><span class="checkboxtext">London St Pancras International</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="departing2">
                                        <label for="departing2"><span class="checkboxtext">Lorem Ipsum</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="departing3">
                                        <label for="departing3"><span class="checkboxtext">Lorem Ipsum</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="departing4">
                                        <label for="departing4"><span class="checkboxtext">Lorem Ipsum</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div><!-- filtersbox -->
                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Returning To
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="returning1">
                                        <label for="returning1"><span class="checkboxtext">London St Pancras International</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="returning2">
                                        <label for="returning2"><span class="checkboxtext">Lorem Ipsum</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="returning3">
                                        <label for="returning3"><span class="checkboxtext">Lorem Ipsum</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="returning4">
                                        <label for="returning4"><span class="checkboxtext">Lorem Ipsum</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div><!-- filtersbox -->
                    <div class="filters-box needbox">
                        <div class="fb-top fw-semibold">
                            <div>
                                Need Help?
                            </div>
                        </div><!-- fb-top   -->
                        <div class="fb-bottom txt-black">
                            <div class="flightpurchase-box">
                                If you need any help with your bookings simply <a href="#"><u>Contact Us</u></a> and we shall get in touch with you or Just call us on <a href="#">+44 208 585 4080 </a>
                            </div><!-- flight purchase box -->
                        </div>
                    </div><!-- filters box -->
                </div><!-- col -->

                <div class="col-12 col-lg-9 tp-main">
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

                    <div class="flights-wrap">
                        <div class="loadmore-boxes-wrap">
                            <div class="flights-main loadmorebox">
                                <div class="flights-box">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-2">
                                            <div class="airline-image">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-10 flightbox-left">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <span class="fs13 fw-medium txt-black">Outbound</span>
                                                </div>
                                                <div class="col-12 col-lg-3 fb-inner-left">
                                                    <h4>London</h4>
                                                    <div class="flight-details">
                                                        <strong>St Pancras International Station</strong>
                                                        <span>
                                                            Sun 09 Jun 2024
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                    <div class="flighttime">14:55</div>
                                                    <div class="flightduration text-center">
                                                        <div class="fw-semibold">
                                                            Direct
                                                        </div>
                                                        10hrs,30mins
                                                    </div>
                                                    <div class="flighttime">18:55</div>
                                                </div>
                                                <div class="col-12 col-lg-3 fb-inner-right">
                                                    <h4>Paris</h4>
                                                    <div class="flight-details">
                                                        <strong>Gare du <br>
                                                            Nord Station</strong>
                                                        <span>
                                                            Sun 10 Jun 2024
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mt-4">
                                        <div class="col-12 col-lg-2">
                                            <div class="airline-image">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-10 flightbox-left">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <span class="fs13 fw-medium txt-black">Return</span>
                                                </div>
                                                <div class="col-12 col-lg-3 fb-inner-left">
                                                    <h4>Paris</h4>
                                                    <div class="flight-details">
                                                        <strong>St Pancras International Station</strong>
                                                        <span>
                                                            Sun 09 Jun 2024
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                    <div class="flighttime">14:55</div>
                                                    <div class="flightduration text-center">
                                                        <div class="fw-semibold">
                                                            Direct
                                                        </div>
                                                        10hrs,30mins
                                                    </div>
                                                    <div class="flighttime">18:55</div>
                                                </div>
                                                <div class="col-12 col-lg-3 fb-inner-right">
                                                    <h4>London</h4>
                                                    <div class="flight-details">
                                                        <strong>Gare du <br>
                                                            Nord Station</strong>
                                                        <span>
                                                            Sun 10 Jun 2024
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- flights box -->

                                <div class="flightdetailsmore cruisedetailsmore txt-black">
                                    <div class="d-flex flex-column">
                                        <div class="fdm-content-wrap show">
                                            <div class="row align-items-center">
                                                <div class="col-12 offset-lg-2 col-lg-10 d-flex fdm-content-cruise fdm-content flex-column">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <h3 class="fontfam2 txt-black fs18">
                                                                Outbound
                                                            </h3>
                                                            <div class="fdm-box d-flex align-items-center">
                                                                <div class="fdm-box-main">
                                                                    <div class="loclines">
                                                                        <div class="loclines-wrap"></div>
                                                                    </div>
                                                                    <div class="fdmbox-wrap">
                                                                        <div class="fdm-top fdmbox">
                                                                            <span>
                                                                                Sun 09 Jun - 20:55
                                                                            </span>
                                                                            <strong>
                                                                                International St. Pancras Station
                                                                            </strong>
                                                                        </div>
                                                                        <div class="fdm-top fdmbox">
                                                                            <span>
                                                                                Sun 09Jun - 06:45
                                                                            </span>
                                                                            <strong>
                                                                                Lorem Ipsum
                                                                            </strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- fdm box -->
                                                            <div class="py-3">
                                                                <div class="fdm-box-separator">
                                                                    <span>
                                                                        <strong>Journey Gap</strong>
                                                                    </span>
                                                                    <span>
                                                                        1hr, 40Mins
                                                                    </span>
                                                                </div>
                                                            </div><!-- stopwrap -->
                                                            <div class="fdm-box d-flex align-items-center">
                                                                <div class="fdm-box-main">
                                                                    <div class="loclines">
                                                                        <div class="loclines-wrap"></div>
                                                                    </div>
                                                                    <div class="fdmbox-wrap">
                                                                        <div class="fdm-top fdmbox">
                                                                            <span>
                                                                                Sun 09 Jun - 20:55
                                                                            </span>
                                                                            <strong>
                                                                                International St. Pancras Station
                                                                            </strong>
                                                                        </div>
                                                                        <div class="fdm-top fdmbox">
                                                                            <span>
                                                                                Sun 09Jun - 06:45
                                                                            </span>
                                                                            <strong>
                                                                                Lorem Ipsum
                                                                            </strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- fdm box -->
                                                        </div><!-- col -->
                                                        <div class="col-12 col-lg-6">
                                                            <h3 class="fontfam2 txt-black fs18">
                                                                Return
                                                            </h3>
                                                            <div class="fdm-box d-flex align-items-center">
                                                                <div class="fdm-box-main">
                                                                    <div class="loclines">
                                                                        <div class="loclines-wrap"></div>
                                                                    </div>
                                                                    <div class="fdmbox-wrap">
                                                                        <div class="fdm-top fdmbox">
                                                                            <span>
                                                                                Sun 09 Jun - 20:55
                                                                            </span>
                                                                            <strong>
                                                                                International St. Pancras Station
                                                                            </strong>
                                                                        </div>
                                                                        <div class="fdm-top fdmbox">
                                                                            <span>
                                                                                Sun 09Jun - 06:45
                                                                            </span>
                                                                            <strong>
                                                                                Lorem Ipsum
                                                                            </strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- fdm box -->
                                                            <div class="py-3">
                                                                <div class="fdm-box-separator">
                                                                    <span>
                                                                        <strong>Journey Gap</strong>
                                                                    </span>
                                                                    <span>
                                                                        1hr, 40Mins
                                                                    </span>
                                                                </div>
                                                            </div><!-- stopwrap -->
                                                            <div class="fdm-box d-flex align-items-center">
                                                                <div class="fdm-box-main">
                                                                    <div class="loclines">
                                                                        <div class="loclines-wrap"></div>
                                                                    </div>
                                                                    <div class="fdmbox-wrap">
                                                                        <div class="fdm-top fdmbox">
                                                                            <span>
                                                                                Sun 09 Jun - 20:55
                                                                            </span>
                                                                            <strong>
                                                                                International St. Pancras Station
                                                                            </strong>
                                                                        </div>
                                                                        <div class="fdm-top fdmbox">
                                                                            <span>
                                                                                Sun 09Jun - 06:45
                                                                            </span>
                                                                            <strong>
                                                                                Lorem Ipsum
                                                                            </strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- fdm box -->
                                                        </div><!-- col -->
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- row -->
                                        </div><!-- fdm-content-wrap -->
                                    </div><!-- d-flex -->
                                    <div class="row">
                                        <div class="offset-lg-2 ps-0 col-lg-10 flights-readmore-info">
                                            <span class="flights-rmore-btn fw-semibold change">
                                                Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- flightdetailsmore -->

                                <div class="flightsprice-wrap">
                                    <div class="row">
                                        <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                            <div class="row g-2">
                                                <div class="col-12 col-lg-4">
                                                    <div class="flightprice-box">
                                                        <div class="d-flex fpb-top">
                                                            <div class="flightprice">
                                                                <span>
                                                                    Standard
                                                                </span>
                                                                <div class="flightprice-main">
                                                                    £708.47
                                                                </div>
                                                            </div>
                                                            <div class="flightprice-option">
                                                                <button class="btn btn-primary">
                                                                    Select
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex fpb-bottom">
                                                            <div class="flightpax">
                                                                2x Adults
                                                            </div>
                                                            <div class="flightlinks">
                                                                <a href="">Rules</a>
                                                                <a href="">Breakdown</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                                <div class="col-12 col-lg-4">
                                                    <div class="flightprice-box">
                                                        <div class="d-flex fpb-top">
                                                            <div class="flightprice">
                                                                <span>
                                                                    Standard Premier
                                                                </span>
                                                                <div class="flightprice-main">
                                                                    £708.47
                                                                </div>
                                                            </div>
                                                            <div class="flightprice-option">
                                                                <button class="btn btn-primary">
                                                                    Select
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex fpb-bottom">
                                                            <div class="flightpax">
                                                                2x Adults
                                                            </div>
                                                            <div class="flightlinks">
                                                                <a href="">Rules</a>
                                                                <a href="">Breakdown</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                                <div class="col-12 col-lg-4">
                                                    <div class="flightprice-box">
                                                        <div class="d-flex fpb-top">
                                                            <div class="flightprice">
                                                                <span>
                                                                    Standard Premier
                                                                </span>
                                                                <div class="flightprice-main">
                                                                    £708.47
                                                                </div>
                                                            </div>
                                                            <div class="flightprice-option">
                                                                <button class="btn btn-primary">
                                                                    Select
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex fpb-bottom">
                                                            <div class="flightpax">
                                                                2x Adults
                                                            </div>
                                                            <div class="flightlinks">
                                                                <a href="">Rules</a>
                                                                <a href="">Breakdown</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flightsmain -->
                        </div>
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
                    </div><!-- flights wrap -->
                </div>
            </div><!-- row -->
        </div>
    </section>

    <section id="cta" class="block" style="background-image: url(<?= getBaseUrl() ?>/assets/img/home/ctabg.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt-white text-center">
                        Unsure where to go next?
                    </h2>
                </div><!-- col -->
                <div class="col-12 col-lg-6 offset-lg-3 text-center txt-white">
                    <p>
                        To book your holiday call us or simply share your details and we shall get in touch with youJust call us on +44 208 585 4080
                    </p>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cta-modal">
                        Get In Touch
                    </button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="cta-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/action_page.php">
                        <div class="row align-items-center mb-4">
                            <div class="col-6 ctamodal-top-left">
                                All required areas*
                            </div>
                            <div class="col-6 d-flex justify-content-end ctamodal-top-right">
                                <button type="button" class="txt-blue btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">
                                    Share your details
                                    with us
                                </h2>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="fname">
                                        First Name*
                                    </label>
                                    <input placeholder="First Name" type="text" id="fname" name="fname" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="surname">
                                        Surname*
                                    </label>
                                    <input type="text" placeholder="Surname" id="surname" name="surname" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="phone">
                                        Phone Number*
                                    </label>
                                    <input type="number" placeholder="0123456789" id="phonenumber" name="phone" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="emailaddress">
                                        Email Address*
                                    </label>
                                    <input type="email" placeholder="example@email.com" id="emailaddress" name="surnemailaddressame" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="address">
                                        Address*
                                    </label>
                                    <input type="text" placeholder="Address" id="address" name="address" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="traveldates">
                                        Travel Dates*
                                    </label>
                                    <input placeholder="DD/MM/YYYY - DD/MM/YYYY" type="email" id="traveldates" name="traveldates" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputwrap">
                                    <label for="message">
                                        Text*
                                    </label>
                                    <textarea id="message" placeholder="Start typing here..." name="message" rows="2" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include '../sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-search.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar.js?v=1.0.0"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/loadmoreboxes.js"></script>

</body>

</html>