<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Cruise Search</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-cruise.css">
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
    <div id="herohome" style="background-image:url(<?= getBaseUrl() ?>/assets/img/car-hire/hero-car-hire-search.jpg)">
        <?php include '../sections/global/header-nav.php'; ?>
    </div><!-- main hero -->

    <section class="block search-wrap bggray" id="hotels-search">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 tp-page-title">
                    <h1>
                        Showing 50 results of Portugal Cruises
                    </h1>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12 col-lg-3 tp-sidebar">
                    <div class="filters-box filters">
                        <div class="fb-top fw-semibold">
                            <div>
                                Filters
                            </div>
                            <div class="resetbtn txt-black">
                                Reset All <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div><!-- fb-top   -->
                        <div class="fb-bottom">
                            <div class="option-wrap">
                                <span>
                                    Ports To Visit
                                </span>
                                <div class="select">
                                    <select>
                                        <option>Port 1</option>
                                        <option>Port 2</option>
                                        <option>Port 3</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div>
                            </div><!-- option-wrap -->
                        </div>
                    </div>

                    <div class="filters-box cruise-transfer">
                        <div class="fb-top fw-semibold">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Duration
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div><!-- fb-top   -->
                        <div class="fb-bottom">
                            <div class="slider-container two-slide">
                                <div class="slider-wrapper">
                                    <div class="s-container">
                                        <div class="slider-track"></div>
                                        <input type="range" min="1" max="30" value="10" slide-type="duration" id="slider-1" oninput="firstSlide()">
                                        <input type="range" min="1" max="30" value="20" slide-type="duration" id="slider-2" oninput="secondSlide()">
                                    </div>
                                    <div class="val">
                                        <span>1 Day</span>
                                        <div class="range-val">
                                            <span id="val1">
                                                0
                                            </span>
                                            <span id="val2">
                                                100
                                            </span>
                                        </div>
                                        <span>30 Days</span>
                                    </div>
                                </div>
                            </div>
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
                    </div>

                </div><!-- col -->

                <div class="col-12 col-lg-9 tp-main">
                    <form action="cruise-main.php" method="post">
                        <div class="loadmore-boxes-wrap">
                            <div class="whiteboxbg cruise-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12 d-flex">
                                        <div class="cruise-image">
                                            <img src="" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row" style="flex:1;">
                                            <div class="col-lg-9 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h2>
                                                        Spain, Portugal and Canary Islands (Valiant Lady)
                                                    </h2>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row cruise-features mt-3">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4 cruise-features-left">
                                                        <h6>
                                                            Departs
                                                        </h6>
                                                        <span>
                                                            Southampton, UK <br>
                                                            15 Jun 2014
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-lg-4 cruise-features-mid">
                                                        <h6>
                                                            Arrives
                                                        </h6>
                                                        <span>
                                                            Southampton, UK <br>
                                                            29 Jun 2014
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-lg-4 cruise-features-right">
                                                        <h6>
                                                            Sailing Ventura
                                                        </h6>
                                                        <span>
                                                            14 Nights
                                                        </span>
                                                    </div>
                                                </div><!-- row -->
                                            </div><!-- col -->
                                        </div><!-- row -->

                                        <div class="row mt-4 align-items-center">
                                            <div class="col-lg-6">
                                                <div class="cruise-tag">
                                                    <strong>10% off</strong> Classic Drinks Package
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                                                        <div class="cruisebox-price">
                                                            <h3>
                                                                <span>Inside cabin from</span>
                                                                £949.50
                                                            </h3>
                                                        </div><!-- cruisebox -->
                                                    </div><!-- col -->
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div><!-- col lg -->
                                                </div><!-- row -->
                                            </div><!-- col -->
                                        </div>
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg cruise-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12 d-flex">
                                        <div class="cruise-image">
                                            <img src="" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row" style="flex:1;">
                                            <div class="col-lg-9 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h2>
                                                        Spain, Portugal and Canary Islands (Valiant Lady)
                                                    </h2>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row cruise-features mt-3">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4 cruise-features-left">
                                                        <h6>
                                                            Departs
                                                        </h6>
                                                        <span>
                                                            Southampton, UK <br>
                                                            15 Jun 2014
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-lg-4 cruise-features-mid">
                                                        <h6>
                                                            Arrives
                                                        </h6>
                                                        <span>
                                                            Southampton, UK <br>
                                                            29 Jun 2014
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-lg-4 cruise-features-right">
                                                        <h6>
                                                            Sailing Ventura
                                                        </h6>
                                                        <span>
                                                            14 Nights
                                                        </span>
                                                    </div>
                                                </div><!-- row -->
                                            </div><!-- col -->
                                        </div><!-- row -->

                                        <div class="row mt-4 align-items-center">
                                            <div class="col-lg-6">
                                                <div class="cruise-tag">
                                                    <strong>10% off</strong> Classic Drinks Package
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                                                        <div class="cruisebox-price">
                                                            <h3>
                                                                <span>Inside cabin from</span>
                                                                £949.50
                                                            </h3>
                                                        </div><!-- cruisebox -->
                                                    </div><!-- col -->
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div><!-- col lg -->
                                                </div><!-- row -->
                                            </div><!-- col -->
                                        </div>

                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg cruise-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12 d-flex">
                                        <div class="cruise-image">
                                            <img src="" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row" style="flex:1;">
                                            <div class="col-lg-9 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h2>
                                                        Spain, Portugal and Canary Islands (Valiant Lady)
                                                    </h2>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row cruise-features mt-3">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4 cruise-features-left">
                                                        <h6>
                                                            Departs
                                                        </h6>
                                                        <span>
                                                            Southampton, UK <br>
                                                            15 Jun 2014
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-lg-4 cruise-features-mid">
                                                        <h6>
                                                            Arrives
                                                        </h6>
                                                        <span>
                                                            Southampton, UK <br>
                                                            29 Jun 2014
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-lg-4 cruise-features-right">
                                                        <h6>
                                                            Sailing Ventura
                                                        </h6>
                                                        <span>
                                                            14 Nights
                                                        </span>
                                                    </div>
                                                </div><!-- row -->
                                            </div><!-- col -->
                                        </div><!-- row -->

                                        <div class="row mt-4 align-items-center">
                                            <div class="col-lg-6">
                                                <div class="cruise-tag">
                                                    <strong>10% off</strong> Classic Drinks Package
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                                                        <div class="cruisebox-price">
                                                            <h3>
                                                                <span>Inside cabin from</span>
                                                                £949.50
                                                            </h3>
                                                        </div><!-- cruisebox -->
                                                    </div><!-- col -->
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div><!-- col lg -->
                                                </div><!-- row -->
                                            </div><!-- col -->
                                        </div>

                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg cruise-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12 d-flex">
                                        <div class="cruise-image">
                                            <img src="" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row" style="flex:1;">
                                            <div class="col-lg-9 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h2>
                                                        Spain, Portugal and Canary Islands (Valiant Lady)
                                                    </h2>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row cruise-features mt-3">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4 cruise-features-left">
                                                        <h6>
                                                            Departs
                                                        </h6>
                                                        <span>
                                                            Southampton, UK <br>
                                                            15 Jun 2014
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-lg-4 cruise-features-mid">
                                                        <h6>
                                                            Arrives
                                                        </h6>
                                                        <span>
                                                            Southampton, UK <br>
                                                            29 Jun 2014
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-lg-4 cruise-features-right">
                                                        <h6>
                                                            Sailing Ventura
                                                        </h6>
                                                        <span>
                                                            14 Nights
                                                        </span>
                                                    </div>
                                                </div><!-- row -->
                                            </div><!-- col -->
                                        </div><!-- row -->

                                        <div class="row mt-4 align-items-center">
                                            <div class="col-lg-6">
                                                <div class="cruise-tag">
                                                    <strong>10% off</strong> Classic Drinks Package
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                                                        <div class="cruisebox-price">
                                                            <h3>
                                                                <span>Inside cabin from</span>
                                                                £949.50
                                                            </h3>
                                                        </div><!-- cruisebox -->
                                                    </div><!-- col -->
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div><!-- col lg -->
                                                </div><!-- row -->
                                            </div><!-- col -->
                                        </div>

                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                            <div class="whiteboxbg cruise-box loadmorebox">
                                <div class="row">
                                    <div class="col-lg-4 col-12 d-flex">
                                        <div class="cruise-image">
                                            <img src="" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                        <div class="row" style="flex:1;">
                                            <div class="col-lg-9 car-hire-title">
                                                <div class="car-hire-boxtitle-main">
                                                    <h2>
                                                        Spain, Portugal and Canary Islands (Valiant Lady)
                                                    </h2>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-lg-3 col-12 d-flex justify-content-end">
                                                <div class="esd-rating">
                                                    5 <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                        <div class="row cruise-features mt-3">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4 cruise-features-left">
                                                        <h6>
                                                            Departs
                                                        </h6>
                                                        <span>
                                                            Southampton, UK <br>
                                                            15 Jun 2014
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-lg-4 cruise-features-mid">
                                                        <h6>
                                                            Arrives
                                                        </h6>
                                                        <span>
                                                            Southampton, UK <br>
                                                            29 Jun 2014
                                                        </span>
                                                    </div>
                                                    <div class="col-12 col-lg-4 cruise-features-right">
                                                        <h6>
                                                            Sailing Ventura
                                                        </h6>
                                                        <span>
                                                            14 Nights
                                                        </span>
                                                    </div>
                                                </div><!-- row -->
                                            </div><!-- col -->
                                        </div><!-- row -->

                                        <div class="row mt-4 align-items-center">
                                            <div class="col-lg-6">
                                                <div class="cruise-tag">
                                                    <strong>10% off</strong> Classic Drinks Package
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                                                        <div class="cruisebox-price">
                                                            <h3>
                                                                <span>Inside cabin from</span>
                                                                £949.50
                                                            </h3>
                                                        </div><!-- cruisebox -->
                                                    </div><!-- col -->
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <button class="btn btn-primary">
                                                            Select
                                                        </button>
                                                    </div><!-- col lg -->
                                                </div><!-- row -->
                                            </div><!-- col -->
                                        </div>

                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                        </div><!-- loadmore boxes wrap -->
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
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/loadmoreboxes.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/rangeSlider.js"></script>

</body>

</html>