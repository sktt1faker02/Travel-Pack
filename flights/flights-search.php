<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Flights Search Results</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-flights.css">
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
    <div id="herohome"  class="herowithform"  style="background-image:url(<?= getBaseUrl() ?>/assets/img/hotels/hero-search-hotels.jpg)">
        <?php include '../sections/global/header-nav.php';?>
    </div><!-- main hero -->

    <section class="block pt-0 search-wrap bggray searchresults-formwrap" id="flights-search">
        <div class="container">
            <div id="special-offers-searchbar" class="searchbar">
                <div class="searchbar-top mb-2 mb-md-3 row align-items-center">
                    <div class="col-md-5">
                        <h2>
                            Where's next?
                        </h2>
                    </div>
                </div><!-- searchbartop -->
                
                <?php include '../sections/searchform/main-forms/searchform-flights.php';?>
            </div><!-- searchbar -->
        </div><!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 tp-page-title">
                    <h1>
                        Showing 72 results for London Heathrow(LHR) - Dubai Bus Station(XNB)
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
                                    Flight Number
                                </span>
                                <input type="text" class="input-text" placeholder="Flight Number...">
                            </div>
                        </div>
                    </div>

                    <!-- Price Filter Box -->
                    <div id="priceContainer" class="filters-box time-range">
                        <div class="fb-top fw-semibold">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Price
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div><!-- fb-top -->
                        <div class="fb-bottom">
                            <div class="slider-container">
                                <div class="rangeslider-wrap">
                                    <input type="range" min="300" max="2000" value="600" class="slider" id="priceRange">
                                    <span class="sliderValue-below" id="priceValueBelow">£600</span>
                                </div>
                                <div class="value-display">
                                    <span>£300</span>
                                    <span>£2000</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- filtersbox -->

                    <div class="filters-box time-range">
                        <div class="fb-top fw-semibold">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Departure Time
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div><!-- fb-top -->
                        <div class="fb-bottom">
                            <div class="slider-container two-slide">
                                <div class="slider-wrapper">
                                    <div class="s-container">
                                        <div class="slider-track"></div>
                                        <input type="range" min="0" max="1440" value="600" slide-type="departure" id="slider-1" oninput="firstSlide()">
                                        <input type="range" min="0" max="1440" value="720" slide-type="departure" id="slider-2" oninput="secondSlide()">
                                    </div>
                                    <div class="val">
                                        <span>00:00h</span>
                                        <div class="range-val">
                                            <span id="val1">
                                                0
                                            </span>
                                            <span id="val2">
                                                100
                                            </span>
                                        </div>
                                        <span>23:59</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- fb-bottom -->
                    </div>

                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Departure Airport
                                </div>
                                <i class="fa-solid fa-chevron-down"></i></div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox1">
                                        <label for="checkbox1"><span class="checkboxtext">London City Airport (LCY)</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox2">
                                        <label for="checkbox2"><span class="checkboxtext">London Heathrow Airport (LHR)</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3"><span class="checkboxtext">Stansted Airport (STN)</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox4">
                                        <label for="checkbox4"><span class="checkboxtext">London Luton Airport (LTN)</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Return Airport
                                </div><i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox5">
                                        <label for="checkbox5"><span class="checkboxtext">London City Airport (LCY)</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox6">
                                        <label for="checkbox6"><span class="checkboxtext">London Heathrow Airport (LHR)</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox7">
                                        <label for="checkbox7"><span class="checkboxtext">Stansted Airport (STN)</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox8">
                                        <label for="checkbox8"><span class="checkboxtext">London Luton Airport (LTN)</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Cabin (Departure Flight)
                                </div><i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox9">
                                        <label for="checkbox9"><span class="checkboxtext">Economy</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox10">
                                        <label for="checkbox10"><span class="checkboxtext">Premium Economy</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox11">
                                        <label for="checkbox11"><span class="checkboxtext">First Class</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox12">
                                        <label for="checkbox12"><span class="checkboxtext">Business Class</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">                         
                                Cabin (Return Flight)
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox13">
                                        <label for="checkbox13"><span class="checkboxtext">Economy</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox14">
                                        <label for="checkbox14"><span class="checkboxtext">Premium Economy</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox15">
                                        <label for="checkbox15"><span class="checkboxtext">First Class</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox16">
                                        <label for="checkbox16"><span class="checkboxtext">Business Class</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">      
                                Stops
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox17">
                                        <label for="checkbox17"><span class="checkboxtext">Direct</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox18">
                                        <label for="checkbox18"><span class="checkboxtext">Stops</span></label>
                                    </div> 
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">   
                                Operated By
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom togglecheckbox">
                            <ul class="checkbox-list togglecheckbox">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox20">
                                        <label for="checkbox20"><span class="checkboxtext">Air France</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox21">
                                        <label for="checkbox21"><span class="checkboxtext">Etihad Airways</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox22">
                                        <label for="checkbox22"><span class="checkboxtext">Saudi Arabian Airlines</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox23">
                                        <label for="checkbox23"><span class="checkboxtext">Direct</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox24">
                                        <label for="checkbox24"><span class="checkboxtext">Direct</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox25">
                                        <label for="checkbox25"><span class="checkboxtext">Direct</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div>
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

                    <div class="flights-wrap loadmore-boxes-wrap">
                        <div class="flights-main loadmorebox">
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>LGW</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>XNB</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->

                            <div class="flightdetailsmore txt-black">
                                <div class="d-flex flex-column">
                                    <div class="fdm-content-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">              
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">           
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 1
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 2
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                    </div><!-- fdm-content-wrap -->
                                </div><!-- d-flex -->




                                <div class="row">
                                    <div class="offset-lg-2 ps-0 col-lg-10 flights-readmore-info">
                                        <span class="flights-rmore-btn fw-semibold">
                                            Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- flightdetailsmore -->

                            <div class="flightsprice-wrap">
                                <div class="row">
                                    <div class="offset-lg-2 col-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- flights main -->
                        <div class="flights-main loadmorebox">
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>LGW</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>XNB</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->

                            <div class="flightdetailsmore txt-black">
                                <div class="d-flex flex-column">
                                    <div class="fdm-content-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">              
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">           
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 1
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 2
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                    </div><!-- fdm-content-wrap -->
                                </div><!-- d-flex -->




                                <div class="row">
                                    <div class="offset-lg-2 ps-0 col-lg-10 flights-readmore-info">
                                        <span class="flights-rmore-btn fw-semibold">
                                            Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- flightdetailsmore -->

                            <div class="flightsprice-wrap">
                                <div class="row">
                                    <div class="offset-lg-2 col-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- flights main -->
                        <div class="flights-main loadmorebox">
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>LGW</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>XNB</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->

                            <div class="flightdetailsmore txt-black">
                                <div class="d-flex flex-column">
                                    <div class="fdm-content-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">              
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">           
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 1
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 2
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                    </div><!-- fdm-content-wrap -->
                                </div><!-- d-flex -->




                                <div class="row">
                                    <div class="offset-lg-2 ps-0 col-lg-10 flights-readmore-info">
                                        <span class="flights-rmore-btn fw-semibold">
                                            Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- flightdetailsmore -->

                            <div class="flightsprice-wrap">
                                <div class="row">
                                    <div class="offset-lg-2 col-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- flights main -->
                        <div class="flights-main loadmorebox">
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>LGW</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>XNB</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->

                            <div class="flightdetailsmore txt-black">
                                <div class="d-flex flex-column">
                                    <div class="fdm-content-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">              
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">           
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 1
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 2
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                    </div><!-- fdm-content-wrap -->
                                </div><!-- d-flex -->




                                <div class="row">
                                    <div class="offset-lg-2 ps-0 col-lg-10 flights-readmore-info">
                                        <span class="flights-rmore-btn fw-semibold">
                                            Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- flightdetailsmore -->

                            <div class="flightsprice-wrap">
                                <div class="row">
                                    <div class="offset-lg-2 col-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- flights main -->
                        <div class="flights-main loadmorebox">
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>LGW</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>XNB</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->

                            <div class="flightdetailsmore txt-black">
                                <div class="d-flex flex-column">
                                    <div class="fdm-content-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">              
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">           
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 1
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 2
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                    </div><!-- fdm-content-wrap -->
                                </div><!-- d-flex -->




                                <div class="row">
                                    <div class="offset-lg-2 ps-0 col-lg-10 flights-readmore-info">
                                        <span class="flights-rmore-btn fw-semibold">
                                            Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- flightdetailsmore -->

                            <div class="flightsprice-wrap">
                                <div class="row">
                                    <div class="offset-lg-2 col-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- flights main -->
                        <div class="flights-main loadmorebox">
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>LGW</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->
                            <div class="flights-box">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-2">
                                        <div class="airline-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10 flightbox-left">
                                        <div class="row mt-2 align-items-center">
                                            <div class="col-12 col-lg-3 fb-inner-left">
                                                <h4>AUH</h4>
                                                <div class="flight-details">
                                                    <strong>Departing</strong>
                                                    <span>
                                                        Sun 09 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-5 fb-inner-mid d-flex align-items-center justify-content-center">
                                                <div class="flighttime">14:55</div>
                                                <div class="flightduration text-center">
                                                    <div class="fw-semibold">
                                                        4 Stops
                                                    </div>
                                                    10hrs,30mins
                                                </div>
                                                <div class="flighttime">18:55</div>
                                            </div>
                                            <div class="col-12 col-lg-3 fb-inner-right text-end">
                                                <h4>XNB</h4>
                                                <div class="flight-details">
                                                    <strong>Arriving</strong>
                                                    <span>
                                                        Sun 10 Jun 2024 
                                                    </span>
                                                    <span>
                                                        Terminal 3
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- flights box -->

                            <div class="flightdetailsmore txt-black">
                                <div class="d-flex flex-column">
                                    <div class="fdm-content-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">              
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">           
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 1
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row stop-wrap">
                                            <div class="offset-lg-2 px-0 col-12 col-lg-10">
                                                <div class="fdm-box-separator">
                                                    <span class="fw-semibold">
                                                        Stop 2
                                                    </span>
                                                    <span>
                                                        <strong>Ground Time</strong>
                                                    </span>
                                                    <span>
                                                        1hr, 40Mins
                                                    </span>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row align-items-center noborder-fdm">
                                            <div class="col-12 col-lg-2">
                                                <div class="airline-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/flights/flightlogo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10 d-flex fdm-content flex-column">
                                                <div class="fdm-box d-flex align-items-center">
                                                    <div class="col-12 col-lg-7 fdm-box-main">
                                                        <div class="loclines">
                                                            <div class="loclines-wrap"></div>
                                                        </div>
                                                        <div class="fdmbox-wrap">
                                                            <div class="fdm-top fdmbox">            
                                                                <strong>
                                                                    AUH - Abu Dhabi Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                            <div class="fdm-bottom fdmbox">             
                                                                <strong>
                                                                    LGW - London Gatwick Airport
                                                                </strong>
                                                                <span>
                                                                    Sun 09 Jun 
                                                                </span>
                                                                <span>
                                                                    Terminal 03
                                                                </span>
                                                                <span>
                                                                    Departing 14:55
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 fdm-right text-end">
                                                        <strong>
                                                            Emirates Airlines
                                                        </strong>
                                                        <span>
                                                            EK10 -Economy
                                                        </span>
                                                        <span>
                                                            Flight Time 6h 50m
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                    </div><!-- fdm-content-wrap -->
                                </div><!-- d-flex -->




                                <div class="row">
                                    <div class="offset-lg-2 ps-0 col-lg-10 flights-readmore-info">
                                        <span class="flights-rmore-btn fw-semibold">
                                            Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- flightdetailsmore -->

                            <div class="flightsprice-wrap">
                                <div class="row">
                                    <div class="offset-lg-2 col-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="flightprice-box">
                                                    <div class="d-flex fpb-top">
                                                        <div class="flightprice">
                                                            <span>
                                                                Economy Flex(k)
                                                            </span>
                                                            <div class="flightprice-main">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select Option
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- flights main -->
                    </div><!-- flights wrap -->


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
                </div>
            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-search.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/loadmoreboxes.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar-flights.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/rangeSlider.js"></script>


</body>

</html>