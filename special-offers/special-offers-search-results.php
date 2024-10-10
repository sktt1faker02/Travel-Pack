<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Special Offers Search Results</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-special-offers.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/mediaqueries.css">

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
    <div id="herohome" class="herowithform" style="background-image:url(<?= getBaseUrl() ?>/assets/img/special-offers/bghero-specialoffers.jpg)">
        <?php include '../sections/global/header-nav.php';?>
    </div><!-- main hero -->

    <section class="block pt-0 search-wrap searchresults-formwrap bggray" id="special-offers-search">
        <div class="container">
            <div id="special-offers-searchbar" class="searchbar">
                <div class="searchbar-top mb-2 mb-md-3 row align-items-center">
                    <div class="col-md-5">
                        <h2>
                            Where's next?
                        </h2>
                    </div>
                </div><!-- searchbartop -->
                
                <?php include '../sections/searchform/main-forms/searchform-special-offers.php';?>
            </div><!-- searchbar -->
        </div><!-- container -->
        <div class="container mt-5 pt-4">
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
                    
                    <!-- Duration Filter Box -->
                    <div class="filters-box time-range durationfilter">
                        <div class="fb-top fw-semibold">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Duration
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div><!-- fb-top -->
                        <div class="fb-bottom">
                            <div class="slider-container">
                                <div class="rangeslider-wrap">
                                    <input type="range" min="2" max="33" value="6" class="slider" id="durationRange">
                                    <span class="sliderValue-below" id="durationValue">6 Nights</span>
                                </div>
                                <div class="value-display">
                                    <span>2 Nights</span>
                                    <span>33 Nights</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- filtersbox -->

                    <!-- Rating Filter Box -->
                    <div id="ratingContainer" class="filters-box time-range">
                        <div class="fb-top fw-semibold">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                Rating
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div><!-- fb-top -->
                        <div class="fb-bottom">
                            <div class="slider-container">
                                <div class="rangeslider-wrap">
                                    <input type="range" min="0" max="5" value="2" class="slider" id="ratingRange">
                                    <span class="sliderValue-below" id="ratingValueBelow">2</span>
                                </div>
                                <div class="value-display">
                                    <span>0</span>
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- filtersbox -->

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
                                    <input type="range" min="600" max="10000" value="600" class="slider" id="priceRange">
                                    <span class="sliderValue-below" id="priceValueBelow">£600</span>
                                </div>
                                <div class="value-display">
                                    <span>£600</span>
                                    <span>£10000</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- filtersbox -->

                    <!-- Guest Ratings Filter Box -->
                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                Guest Ratings
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="guest-rating1">
                                        <label for="guest-rating1"><span class="checkboxtext">Any</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="guest-rating2">
                                        <label for="guest-rating2"><span class="checkboxtext">Wonderful 4.5+</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="guest-rating3">
                                        <label for="guest-rating3"><span class="checkboxtext">Ver Good 4+</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="guest-rating4">
                                        <label for="guest-rating4"><span class="checkboxtext">Good 3+</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div><!-- filtersbox -->

                    <!-- Holiday Type Filter Box -->
                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                Holiday Type
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="holiday-type1">
                                        <label for="holiday-type1"><span class="checkboxtext">Any</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="holiday-type2">
                                        <label for="holiday-type2"><span class="checkboxtext">Kids Holidays</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="holiday-type3">
                                        <label for="holiday-type3"><span class="checkboxtext">Couple Holidays</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="holiday-type4">
                                        <label for="holiday-type4"><span class="checkboxtext">Adventure Holidays</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div><!-- filtersbox -->

                    <!-- Board Basis Filter Box -->
                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                Board Basis
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="board-basis1">
                                        <label for="board-basis1"><span class="checkboxtext">All Inclusive</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="board-basis2">
                                        <label for="board-basis2"><span class="checkboxtext">Full Board</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="board-basis3">
                                        <label for="board-basis3"><span class="checkboxtext">Half Board</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="board-basis4">
                                        <label for="board-basis4"><span class="checkboxtext">Bed & Breakfast</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="board-basis5">
                                        <label for="board-basis5"><span class="checkboxtext">Self Catering</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                            </ul>
                        </div>
                    </div><!-- filtersbox -->
                </div><!-- col -->

                <div class="col-12 col-lg-9 tp-main specialoffer-main">
                    <div class="tp-main-heading">
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

                    <div class="loadmore-boxes-wrap mt-3">
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-md-6 col-lg-4 loadmorebox">
                            <div class="whiteboxbg specialoffers-box">
                                <div class="spobox-image">
                                    <div class="yph-price global-price-tag">
                                        <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search">
                                            <strong>20% off</strong> On Advance Booking
                                        </a>
                                    </div>
                                    <i class="fa-regular fa-image"></i>
                                </div>
                                <div class="spobox-content">
                                    <div class="spobox-content-top pb-2">
                                        <div class="row g-1">
                                            <div class="col-9">
                                                <div class="spobox-title fw-medium">
                                                    MotoGp <br>
                                                    Potugal Grand Prix
                                                </div>
                                                <div class="spobox-detail">
                                                    Zest sports & events campaign
                                                </div>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    4.5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spobox-content-mid">
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Stay
                                            </div>
                                            <div class="spboxmid-right">
                                                5 nights
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Hotel
                                            </div>
                                            <div class="spboxmid-right">
                                                Bed & Breakfast
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Airport
                                            </div>
                                            <div class="spboxmid-right">
                                                London Gatwick Airport, UK
                                            </div>
                                        </div><!-- d-flex -->
                                        <div class="d-flex">
                                            <div class="spboxmid-left">
                                                Duration
                                            </div>
                                            <div class="spboxmid-right">
                                                20 Mar 24 - 20 Mar 24
                                            </div>
                                        </div><!-- d-flex -->
                                    </div>
                                    <div class="spobox-content-bot pt-3 row align-items-center">
                                        <div class="col-6">
                                            <span class="spobox-price">
                                                £600.50
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-primary">
                                                More Info
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
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
                </div>
            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/loadmoreboxes.js"></script>

</body>

</html>