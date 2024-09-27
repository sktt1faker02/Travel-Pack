<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Hotel Search Results</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-hotels.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/leaflet/leaflet.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/leaflet/geocoder.css">
</head>

<body>

    <div id="herohome" class="herowithform" style="background-image:url(<?= getBaseUrl() ?>/assets/img/hotels/innerhero.jpg)">
        <?php include '../sections/global/header-nav.php'; ?>
    </div><!-- main hero -->

    <section class="block pt-0 search-wrap bggray searchresults-formwrap" id="hotels-search">
        <div class="container">
            <div id="special-offers-searchbar" class="searchbar">
                <div class="searchbar-top mb-2 mb-md-3 row align-items-center">
                    <div class="col-md-5">
                        <h2>
                            Where's next?
                        </h2>
                    </div>
                </div><!-- searchbartop -->
                <?php include '../sections/searchform/main-forms/searchform-hotels.php'; ?>
            </div><!-- searchbar -->
        </div><!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 tp-page-title">
                    <h1>
                        Showing 1,500 properties in London from Fri, 07 to Thu, 16
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
                            <div class="searchinput tp-input-wrap">
                                <label for="search-hotel">
                                    Search Hotel
                                </label>

                                <div class="searchinputmain gap-3 d-flex justify-content-between">
                                    <input type="text" name="search-hotel" class="tp-input" placeholder="Hotel Name">
                                    <input type="submit" value="Go" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="option-wrap mt-2">
                                <span>
                                    Meal Plans
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
                            <div class="option-wrap">
                                <span>
                                    Rating
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
                            <div class="option-wrap">
                                <span>
                                    Refundable
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

                    <div class="filters-box">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Guest Ratings
                                </div><i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox1">
                                        <label for="checkbox1"><span class="checkboxtext">Any</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox2">
                                        <label for="checkbox2"><span class="checkboxtext">Wonderful 4.5+</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3"><span class="checkboxtext">Ver Good 4+</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox4">
                                        <label for="checkbox4"><span class="checkboxtext">Good 3+</span></label>
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
                                    Amenities
                                </div><i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                            <ul class="checkbox-list">
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox5">
                                        <label for="checkbox5"><span class="checkboxtext">Rooms Only</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox6">
                                        <label for="checkbox6"><span class="checkboxtext">Bed & Breakfast</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox7">
                                        <label for="checkbox7"><span class="checkboxtext">Free Wi-fi</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox8">
                                        <label for="checkbox8"><span class="checkboxtext">Gym</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox9">
                                        <label for="checkbox9"><span class="checkboxtext">Another Amenity</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox9">
                                        <label for="checkbox9"><span class="checkboxtext">Another Amenity</span></label>
                                    </div>
                                    <span>120</span>
                                </li>
                                <li>
                                    <div class="checkbox-container">
                                        <input type="checkbox" id="checkbox9">
                                        <label for="checkbox9"><span class="checkboxtext">Another Amenity</span></label>
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

                <div class="col-12 col-lg-9 tp-main sortby">
                    <div class="tp-tabs mb-4">
                        <ul class="nav nav-tabs " id="tabs-flight" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tab-listings" data-bs-toggle="tab" data-bs-target="#tab-listings-pane" type="button" role="tab" aria-controls="tab-listings-pane" aria-selected="true">Listings</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab-onmap" data-bs-toggle="tab" data-bs-target="#tab-onmap-pane" type="button" role="tab" aria-controls="tab-onmap-pane" aria-selected="true">On Map</button>
                            </li>
                        </ul>
                        <div class="select mb-0">
                            <select>
                                <option>Cheapest</option>
                                <option>Cheapest</option>
                                <option>Cheapest</option>
                                <option>Cheapest</option>
                            </select>
                            <div class="select_arrow"></div>
                        </div><!-- select -->
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab-listings-pane" role="tabpanel" aria-labelledby="tab-listings-pane" tabindex="0">

                            <form action="hotels-main.php" method="post">
                                <div class="loadmore-boxes-wrap">
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                    <div class="whiteboxbg listingbox loadmorebox">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 listing-left">
                                                <div class="listing-image">
                                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/listing-image.jpg" alt="">
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 col-lg-3 listing-mid">
                                                <div class="listing-mid-top">
                                                    <h3>
                                                        YHA London Earl’s Court - Hostel
                                                    </h3>
                                                    <span class="listing-location">
                                                        London (3.11 miles)
                                                    </span>
                                                </div><!-- listing-mid-top -->
                                                <div class="guest-score">
                                                    4.4 Guest Score
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 offset-lg-1 col-lg-4 listing-right d-flex flex-lg-column justify-content-lg-between">
                                                <div class="listing-right-top d-flex justify-content-lg-between">
                                                    <div class="listing-right-top-left">
                                                        <span>
                                                            Standard Double Room
                                                        </span>
                                                        <div class="txt-gray d-flex flex-column">
                                                            <span>Room Only</span>
                                                            <span>Non-Refundable</span>
                                                        </div>
                                                    </div><!-- listing-right-top-left -->

                                                    <div class="esd-rating">
                                                        4.5 <i class="fa-solid fa-star"></i>
                                                    </div>
                                                </div><!-- listing-right-top -->
                                                <div class="listing-right-bottom d-flex align-items-center justify-content-lg-between">
                                                    <div class="d-flex flex-column">
                                                        <span class="txt-gray">
                                                            £60.95 Per Night
                                                        </span>
                                                        <span class="listing-price">
                                                            £635.72
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div>
                                                </div><!-- listing-right-top-right -->
                                            </div><!-- listing right -->
                                        </div><!-- row -->
                                    </div><!-- whitebox -->
                                </div><!-- load moreboxes wrap -->
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
                        </div><!-- tab pane -->

                        <div class="tab-pane fade show active" id="tab-onmap-pane" role="tabpanel" aria-labelledby="tab-onmap-pane" tabindex="0">
                            <div class="whiteboxbg" id="map" style="height: 500px;width:100%;"></div>
                        </div>
                    </div><!-- tab content -->
                </div>
            </div><!-- row -->
        </div>
    </section>

    <!-- <div id="map" style="height: 500px;width:100%;">
    </div> -->



    <?php include '../sections/global/cta.php'; ?>

    <?php include '../sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/rangeslider.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/loadmoreboxes.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/leaflet/leaflet.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/leaflet/geocoder.js"></script>


    <script>
        const hotelData = [{
                title: "Hotel A",
                img: 'https://thumbs.dreamstime.com/b/hotel-rooms-8146308.jpg',
                location: "London (3.11 miles)",
                hotelType: "Standard Double Room",
                description: "Room only",
                refundable: "Non-refundable",
                pricePerNight: "£60.95 Per Night",
                price: "£635.72",
                starRate: 5,
                guestScore: 4.5,
                buttonLink: "https://travelpack.wpdev.ws/hotels/hotels-main.php",
                lat: 51.5074,
                lng: -0.1278
            },
            {
                title: "Hotel B",
                img: 'https://media.istockphoto.com/id/1453121684/photo/modern-hotel-room-with-double-bed-night-tables-and-day-sofa-bed.webp?b=1&s=612x612&w=0&k=20&c=ZUIsX9QtpzxC5eq9pXQm6mdBlektEb78ABWlv2r4dI8=',
                location: "London (2.50 miles)",
                hotelType: "Deluxe Room",
                description: "Breakfast included",
                refundable: "Refundable",
                pricePerNight: "£80.00 Per Night",
                price: "£800.00",
                starRate: 4,
                guestScore: 4.5,
                buttonLink: "https://travelpack.wpdev.ws/hotels/hotels-main.php",
                lat: 51.5155,
                lng: -0.0922
            },
            {
                title: "Hotel C",
                img: 'https://watermark.lovepik.com/photo/20211121/large/lovepik-hotel-room-picture_500597052.jpg',
                location: "London (1.75 miles)",
                hotelType: "Superior Suite",
                description: "Room only",
                refundable: "Non-refundable",
                pricePerNight: "£120.00 Per Night",
                price: "£1200.00",
                starRate: 5,
                guestScore: 4.5,
                buttonLink: "https://travelpack.wpdev.ws/hotels/hotels-main.php",
                lat: 51.5133,
                lng: -0.0886
            },
            {
                title: "Hotel D",
                img: 'https://cdn.pixabay.com/photo/2015/11/06/11/45/interior-1026452_640.jpg',
                location: "London (4.10 miles)",
                hotelType: "Standard Room",
                description: "Room only",
                refundable: "Non-refundable",
                pricePerNight: "£50.00 Per Night",
                price: "£500.00",
                starRate: 3,
                guestScore: 4.5,
                buttonLink: "https://travelpack.wpdev.ws/hotels/hotels-main.php",
                lat: 51.5055,
                lng: -0.0754
            },
            {
                title: "Hotel E",
                img: 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg',
                location: "London (2.20 miles)",
                hotelType: "Executive Room",
                description: "Breakfast included",
                refundable: "Refundable",
                pricePerNight: "£90.00 Per Night",
                price: "£900.00",
                starRate: 4,
                guestScore: 4.5,
                buttonLink: "https://travelpack.wpdev.ws/hotels/hotels-main.php",
                lat: 51.5085,
                lng: -0.1257
            },
            {
                title: "Hotel F",
                img: 'https://i0.wp.com/travellingpeoples.com/wp-content/uploads/2023/09/img_9578.jpg?fit=3024%2C2268&ssl=1',
                location: "London (3.60 miles)",
                hotelType: "Junior Suite",
                description: "Room only",
                refundable: "Non-refundable",
                pricePerNight: "£150.00 Per Night",
                price: "£1500.00",
                starRate: 5,
                guestScore: 4.5,
                buttonLink: "https://travelpack.wpdev.ws/hotels/hotels-main.php",
                lat: 51.5014,
                lng: -0.1419
            },
            {
                title: "Hotel G",
                img: 'https://www.hotelscombined.com/himg/2c/aa/37/expedia_group-468216-97943727-694747.jpg',
                location: "London (5.00 miles)",
                hotelType: "Family Room",
                description: "Room only",
                refundable: "Refundable",
                pricePerNight: "£110.00 Per Night",
                price: "£1100.00",
                starRate: 4,
                guestScore: 4.5,
                buttonLink: "https://travelpack.wpdev.ws/hotels/hotels-main.php",
                lat: 51.4922,
                lng: -0.1663
            },
            {
                title: "Hotel H",
                img: 'https://4.imimg.com/data4/NF/PM/ANDROID-60284273/product.jpeg',
                location: "London (3.85 miles)",
                hotelType: "Penthouse Suite",
                description: "Room only",
                refundable: "Non-refundable",
                pricePerNight: "£200.00 Per Night",
                price: "£2000.00",
                starRate: 5,
                guestScore: 4.5,
                buttonLink: "https://travelpack.wpdev.ws/hotels/hotels-main.php",
                lat: 51.4619,
                lng: -0.0301
            },
            {
                title: "Hotel I",
                img: 'https://www.usatoday.com/gcdn/-mm-/05b227ad5b8ad4e9dcb53af4f31d7fbdb7fa901b/c=0-64-2119-1259/local/-/media/USATODAY/USATODAY/2014/08/13/1407953244000-177513283.jpg',
                location: "London (1.50 miles)",
                hotelType: "Basic Room",
                description: "Room only",
                refundable: "Refundable",
                pricePerNight: "£40.00 Per Night",
                price: "£400.00",
                starRate: 3,
                guestScore: 4.5,
                buttonLink: "https://travelpack.wpdev.ws/hotels/hotels-main.php",
                lat: 51.5145,
                lng: -0.1614
            },
            {
                title: "Hotel J",
                img: 'https://hoteldel.com/wp-content/uploads/2021/01/hotel-del-coronado-views-suite-K1TOS1-K1TOJ1-1600x900-1.jpg',
                location: "London (2.90 miles)",
                hotelType: "Luxury Room",
                description: "Breakfast included",
                refundable: "Non-refundable",
                pricePerNight: "$160.00 Per Night",
                price: "$1600.00",
                starRate: 5,
                guestScore: 4.5,
                buttonLink: "https://travelpack.wpdev.ws/hotels/hotels-main.php",
                lat: 51.5076,
                lng: -0.0877
            },
        ];

        const loadLeafLet = () => {
            const mapCenter = [51.5074, -0.1278]; // center niya ung map
            const map = L.map('map').setView(mapCenter, 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            hotelData.forEach(hotel => {
                const marker = L.marker([hotel.lat, hotel.lng]).addTo(map);

                var customOptions = {
                    'maxWidth': '800',
                    'className': 'custom'
                }

                marker.on('click', () => {
                    const popupContent = L.popup({
                        maxWidth: '800',
                    }).setContent(`<div class="popup-map">
                                        <div class="img">
                                            <img src="${hotel.img}" alt="${hotel.title}">
                                            <span>${hotel.guestScore} Guest Score</span>
                                        </div>
                                        <div class="content">
                                            <h5>${hotel.title}</h5>
                                            <p>${hotel.location}</p>
                                            <hr>
                                            <div class="mid">
                                                <h6>${hotel.description}</h6>
                                                <div class="rate">
                                                    5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <p>${hotel.hotelType}</p>
                                            <p>${hotel.refundable}</p>
                                            <br>
                                            <div class="bottom-text">
                                                <div>
                                                    <p>${hotel.pricePerNight}</p>
                                                    <h2>${hotel.price}</h2>
                                                </div>
                                                <div>
                                                    <a href="${hotel.buttonLink}">Select</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`);

                    marker.bindPopup(popupContent, customOptions).openPopup();
                });
            });
        };

        document.addEventListener('DOMContentLoaded', loadLeafLet);
    </script>


<style>
    .leaflet-popup-content{
        width: 500px;
    }
    .popup-map *{
        margin: 0;
        padding: 0;
    }
    .popup-map p{
        margin: 0;
        padding: 0;
        color: #a3a3a3;
    }
    .popup-map{
        width: 100%;
        display: flex;
        column-gap: 20px;
        align-items: center;
    }
    .popup-map .img{
        width: 50%;
        position: relative;
    }
    .popup-map .img span{
        position: absolute;
        left: 10px;
        top: 10px;
        background: #ffee57;
        color: #052e5a;
        font-size: 16px;
        padding: 10px 20px;
        font-weight: 600;
        border-radius: 30px;
    }
    .popup-map .img img{
        width: 300px;
        height: 200px;
        object-fit: cover;
    }
    .popup-map .content{
        width: 50%;
    }
    .popup-map .content h5{
        font-size: 24px;
        font-weight: 600;
        color: #052e5a;
    }
    .popup-map .content hr{
        margin: 10px 0;
    }
    .popup-map .content .mid,
    .popup-map .content .bottom-text
    {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .popup-map .content .mid .rate{
        color: #2ca5d0;
        font-size: 18px;
    }
    .popup-map .content .bottom-text h2{
        font-size: 25px;
        color: #052e5a;
    }
    .popup-map .content .bottom-text a{
        font-size: 18px;
        color: #FFFFFF;
        background: #621192;
        padding: 10px 20px;
        border-radius: 5px;
    }
</style>
</body>

</html>