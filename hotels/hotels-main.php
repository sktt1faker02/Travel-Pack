<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Hotel Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-hotels.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/mediaqueries.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/michael.css">


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="hotel-individual">
    <div id="nohero-inner">
        <?php include '../sections/global/header-nav.php'; ?>
    </div><!-- main hero -->

    <section class="block search-wrap bggray" id="hotels-search">
        <div class="container">
            <div class="row hotel-single-top align-items-start">
                <div class="col-12 col-md-4 hotel-single-top-left">
                    <h2>
                        YHA London Earl’s
                        Court - Hostel
                    </h2>
                </div><!-- col -->
                <div class="col-md-5 hotel-single-top-mid d-flex justify-content-between flex-row">
                    <div class="hotel-address">
                        <h5 class="fontfam2">
                            Address
                        </h5>
                        <span>
                            38 Bolton Garden,<br />
                            Earl Shilton, London
                        </span>
                    </div>
                    <div class="hotel-telephone">
                        <h5 class="fontfam2">
                            Telephone
                        </h5>
                        <span>
                            44- 345- 3719114
                        </span>
                    </div>
                </div><!-- col -->
                <div class="col-12 col-md-3 d-flex justify-content-end">
                    <?php include '../sections/global/star-rating.php'; ?>
                </div>
            </div><!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="goback fw-medium mb-1 mt-3">
                        <button onclick="goBack()">
                            <i class="fa-solid fa-chevron-left fs-icon me-2"></i> Back to Results
                        </button>
                    </div>
                </div>
            </div><!-- row -->
        </div>

        <div class="container">
            <div class="hotel-rooms-main-top my-4">
                <div class="row g-0">
                    <div class="col-12 col-lg-4 parent-slide">
                        <div class="free-cancellation">
                            Free Cancellation
                        </div>
                        <div class="carousel-modal-bottom-wrap">
                            <div class="carousel-modal-counter">
                                01/03
                            </div>
                            <div class="carousel-modal-view-all">
                                View All <i class="fa-solid fa-chevron-right fs-icon fs13 ms-2 txt-blue"></i>
                            </div>
                        </div><!-- wrap -->
                        <div class="hotel-rooms-main-top-slider carousel-modal-main v-slide-wrap">
                            <div class="hotel-rooms-main-top-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/mainlisting-slide.jpg" alt="">
                            </div>
                            <div class="hotel-rooms-main-top-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/mainlisting-slide.jpg" alt="">
                            </div>
                            <div class="hotel-rooms-main-top-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotelmap.jpg" alt="">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-lg-8 d-flex">
                        <div class="hotel-rooms-main-top-right p-4">
                            <ul class="nav nav-tabs tp-tabs mb-4" id="tabs-flight" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="tab-description" data-bs-toggle="tab" data-bs-target="#tab-description-pane" type="button" role="tab" aria-controls="tab-description-pane" aria-selected="true">
                                        Description
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-fees" data-bs-toggle="tab" data-bs-target="#tab-fees-pane" type="button" role="tab" aria-controls="tab-fees-pane" aria-selected="true">
                                        Fees
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-location" data-bs-toggle="tab" data-bs-target="#tab-location-pane" type="button" role="tab" aria-controls="tab-location-pane" aria-selected="true">
                                        Location
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-checkindetails" data-bs-toggle="tab" data-bs-target="#tab-checkindetails-pane" type="button" role="tab" aria-controls="tab-checkindetails-pane" aria-selected="true">
                                        Check In Details
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-hotelamenities" data-bs-toggle="tab" data-bs-target="#tab-hotelamenities-pane" type="button" role="tab" aria-controls="tab-hotelamenities-pane" aria-selected="true">
                                        Hotel Amenities
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-map" data-bs-toggle="tab" data-bs-target="#tab-map-pane" type="button" role="tab" aria-controls="tab-map-pane" aria-selected="true">
                                        Map
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content hoteltabcontent txt-black" id="hotel-tab-content">
                                <div class="tab-pane fade show active" id="tab-description-pane" role="tabpanel" aria-labelledby="tab-best-pane" tabindex="0">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur. Adipiscing pharetra vitae eget at amet. Sagittis condimentum et ante ullamcorper morbi aenean porttitor.
                                            </p>

                                            <h3>
                                                Rooms
                                            </h3>
                                            <p>
                                                arcu sed vestibulum accumsan at. Vitae augue quis tortor proin eu nisl dolor quam. Et feugiat porttitor scelerisque at. Enim a massa bibendum enim. Quis vestibulum adipiscing placerat sed tincidunt dolor ullamcorper. Porttitor ut elementum eget sem. Ornare massa magnis donec sit scelerisque.
                                            </p>

                                            <h3>
                                                Dining
                                            </h3>
                                            <p>
                                                mi est sit nunc adipiscing nulla venenatis risus. Ac ut tortor accumsan. Gravida neque vitae pulvinar posuere pellentesque. Scelerisque non sed ut rhoncus tempor maecenas hendrerit. Gravida at est egestas etiam sit mi sit mauris ultrices.
                                            </p>
                                        </div><!-- col -->
                                        <div class="col-12 col-lg-6">
                                            <h3>
                                                Business Amenities
                                            </h3>
                                            <p>
                                                nec odio euismod montes natoque massa. Id tpus nulla ac dolor. Quam sed at rutrum faucibus nibh commodo. Cursus sapien in imperdiet ut dictumstfusce pretium. Eget vestibulum amet quis donec Interdum aliquet commodo sem ac aliquam etiam.
                                            </p>
                                        </div><!-- col -->
                                        <div class="col-12 d-flex justify-content-end mt-3">
                                            <button class="btn btn-white">
                                                Change Hotel
                                            </button>
                                        </div>
                                    </div><!-- row -->
                                </div><!-- tab pane -->
                                <div class="tab-pane fade" id="tab-fees-pane" role="tabpanel" aria-labelledby="tab-fees-pane" tabindex="0">
                                    Fees Tab Content Here
                                </div><!-- tab pane -->
                                <div class="tab-pane fade" id="tab-location-pane" role="tabpanel" aria-labelledby="tab-location-pane" tabindex="0">
                                    Location Tab Content Here
                                </div><!-- tab pane -->
                                <div class="tab-pane fade" id="tab-checkindetails-pane" role="tabpanel" aria-labelledby="tab-checkindetails-pane" tabindex="0">
                                    Check In Details Tab Content Here
                                </div><!-- tab pane -->
                                <div class="tab-pane fade" id="tab-hotelamenities-pane" role="tabpanel" aria-labelledby="tab-hotelamenities-pane" tabindex="0">
                                    Hotel Amenities Tab Content Here
                                </div><!-- tab pane -->
                                <div class="tab-pane fade" id="tab-map-pane" role="tabpanel" aria-labelledby="tab-map-pane" tabindex="0">
                                    Map Tab Content Here
                                </div><!-- tab pane -->
                            </div><!-- tab content -->
                        </div><!-- hotel-rooms-main-top-right -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- hotel-rooms-main-top -->

            <div class="hotel-select-number-of-guest pt-3 pb-4">
                <h5 class="fontfam2 mb-3 txt-black">
                    Select Number of Guests
                </h5>

                <div class="row gx-3">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="hsng-box">
                            <div class="hsng-boxtop">
                                Room 01
                            </div><!-- hsng boxtop -->
                            <div class="hsng-boxbottom">
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Adults
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">
                                            01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Adults
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Age of Child 01
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Age of Child 02
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                            </div><!-- hsng boxbottom -->
                        </div><!-- hsng box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="hsng-box">
                            <div class="hsng-boxtop">
                                Room 02
                            </div><!-- hsng boxtop -->
                            <div class="hsng-boxbottom">
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Adults
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Adults
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Age of Child 01
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Age of Child 02
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                            </div><!-- hsng boxbottom -->
                        </div><!-- hsng box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="hsng-box">
                            <div class="hsng-boxtop">
                                Room 03
                            </div><!-- hsng boxtop -->
                            <div class="hsng-boxbottom">
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Adults
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Adults
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Age of Child 01
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Age of Child 02
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                            </div><!-- hsng boxbottom -->
                        </div><!-- hsng box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="hsng-box">
                            <div class="hsng-boxtop">
                                Room 04
                            </div><!-- hsng boxtop -->
                            <div class="hsng-boxbottom">
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Adults
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Adults
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Age of Child 01
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                                <div class="hsng-box-inner">
                                    <div class="hsng-box-inner-text">
                                        Age of Child 02
                                    </div><!-- hsngbox inner text -->
                                    <div class="hsng-box-inner-dd">
                                        <div class="hsng-dd-wrap">01
                                        </div><!-- hsng dd wrap -->
                                    </div><!-- hsng-box-inner -->
                                </div><!-- hsng box inner -->
                            </div><!-- hsng boxbottom -->
                        </div><!-- hsng box -->
                    </div><!-- col -->

                    <div class="col-12 d-flex justify-content-end mt-4 mb-2">
                        <button class="btn btn-white">
                            Change Details
                        </button>
                    </div>
                </div><!-- row -->
            </div>

            <div class="hotel-rooms-main">
                <div class="hrmf-top">
                    <div class="hotelrooms-main-filter">
                        <div class="row">
                            <div class="col-12">
                                <h3>
                                    01 Room
                                </h3>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="tp-input-wrap">
                                    <label for="hotel-main-rate-type">
                                        Rate Types
                                    </label>
                                    <div class="select">
                                        <select name="passenger1-title" required="">
                                            <option>All Rate Types</option>
                                            <option>All Rate Types</option>
                                            <option>All Rate Types</option>
                                            <option>All Rate Types</option>
                                        </select>
                                        <div class="select_arrow"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="tp-input-wrap">
                                    <label for="hotel-main-rate-type">
                                        Meal Plans
                                    </label>
                                    <div class="select">
                                        <select name="passenger1-title" required="">
                                            <option>All Meal Plans</option>
                                            <option>All Meal Plans</option>
                                            <option>All Meal Plans</option>
                                        </select>
                                        <div class="select_arrow"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div><!-- main filter -->
                </div><!-- hrmf top -->
                <div class="row hotel-rooms-filter">
                </div>

                <div class="hotelroomsbox-wrap">
                    <form method="post" class="noreload">
                        <div class="hotel-rooms-box">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="hotelrooms-image-slider v-slide-wrap">
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                    </div><!-- sldier -->
                                </div><!-- col -->

                                <div class="col-12 col-lg-8 hotel-rooms-box-right d-flex flex-column justify-content-between">
                                    <div class="hotel-rooms-box-righttop row align-items-center">
                                        <div class="hotelrooms-name col-12 col-md-7">
                                            <h5 class="fontfam2 mt-4 mt-lg-0">
                                                Standard Room
                                            </h5>
                                            <span class="small txt-black">
                                                Breakfast, Free Cancellation
                                            </span>
                                        </div>
                                        <div class="hotelrooms-price col-12 col-md-5 d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-column">
                                                <span class="small">
                                                    £60.95 Per Night
                                                </span>
                                                <span class="hotelrooms-price-main">
                                                    £1,400.58
                                                </span>
                                            </div><!-- dflex -->
                                            <button class="btn btn-primary">Select</button>
                                        </div><!-- hotelrooms-price -->
                                    </div>

                                    <div class="hotel-rooms-box-rightbottom mt-4">
                                        <div class="tp-table">
                                            <div class="responsive-table">
                                                <div class="tp-table-main">
                                                    <table class="table-flightseat">
                                                        <thead>
                                                            <tr>
                                                                <th>Cancel From</th>
                                                                <th>Cancel To</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thu, 30 May 2024</td>
                                                                <td>Sat, 10 August 2024</td>
                                                                <td>£ 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sun, 11 August 2024</td>
                                                                <td>Sun, 11 August 2024</td>
                                                                <td>£ 31.88</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- tp table main -->
                                            </div><!-- responsive table -->
                                        </div><!-- tp table -->
                                    </div><!-- hotel rooms box -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- hotel-rooms-box -->
                        <div class="hotel-rooms-box">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="hotelrooms-image-slider v-slide-wrap">
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                    </div><!-- sldier -->
                                </div><!-- col -->

                                <div class="col-12 col-lg-8 hotel-rooms-box-right d-flex flex-column justify-content-between">
                                    <div class="hotel-rooms-box-righttop row align-items-center">
                                        <div class="hotelrooms-name col-12 col-md-7">
                                            <h5 class="fontfam2 mt-4 mt-lg-0">
                                                Standard Room
                                            </h5>
                                            <span class="small txt-black">
                                                Breakfast, Free Cancellation
                                            </span>
                                        </div>
                                        <div class="hotelrooms-price col-12 col-md-5 d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-column">
                                                <span class="small">
                                                    £60.95 Per Night
                                                </span>
                                                <span class="hotelrooms-price-main">
                                                    £1,400.58
                                                </span>
                                            </div><!-- dflex -->
                                            <button class="btn btn-primary">Select</button>
                                        </div><!-- hotelrooms-price -->
                                    </div>

                                    <div class="hotel-rooms-box-rightbottom mt-4">
                                        <div class="tp-table">
                                            <div class="responsive-table">
                                                <div class="tp-table-main">
                                                    <table class="table-flightseat">
                                                        <thead>
                                                            <tr>
                                                                <th>Cancel From</th>
                                                                <th>Cancel To</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thu, 30 May 2024</td>
                                                                <td>Sat, 10 August 2024</td>
                                                                <td>£ 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- tp table main -->
                                            </div><!-- responsive table -->
                                        </div><!-- tp table -->
                                    </div><!-- hotel rooms box -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- hotel-rooms-box -->
                        <div class="hotel-rooms-box">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="hotelrooms-image-slider v-slide-wrap">
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                    </div><!-- sldier -->
                                </div><!-- col -->

                                <div class="col-12 col-lg-8 hotel-rooms-box-right d-flex flex-column justify-content-between">
                                    <div class="hotel-rooms-box-righttop row align-items-center">
                                        <div class="hotelrooms-name col-12 col-md-7">
                                            <h5 class="fontfam2 mt-4 mt-lg-0">
                                                Standard Room
                                            </h5>
                                            <span class="small txt-black">
                                                Breakfast, Free Cancellation
                                            </span>
                                        </div>
                                        <div class="hotelrooms-price col-12 col-md-5 d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-column">
                                                <span class="small">
                                                    £60.95 Per Night
                                                </span>
                                                <span class="hotelrooms-price-main">
                                                    £1,400.58
                                                </span>
                                            </div><!-- dflex -->
                                            <button class="btn btn-primary">Select</button>
                                        </div><!-- hotelrooms-price -->
                                    </div>

                                    <div class="hotel-rooms-box-rightbottom mt-4">
                                        <div class="tp-table">
                                            <div class="responsive-table">
                                                <div class="tp-table-main">
                                                    <table class="table-flightseat">
                                                        <thead>
                                                            <tr>
                                                                <th>Cancel From</th>
                                                                <th>Cancel To</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thu, 30 May 2024</td>
                                                                <td>Sat, 10 August 2024</td>
                                                                <td>£ 0.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- tp table main -->
                                            </div><!-- responsive table -->
                                        </div><!-- tp table -->
                                    </div><!-- hotel rooms box -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- hotel-rooms-box -->
                    </form>
                </div>
            </div><!-- hotel rooms main -->
            <div class="hotel-rooms-main">
                <div class="hrmf-top">
                    <div class="hotelrooms-main-filter">
                        <div class="row">
                            <div class="col-12">
                                <h3>
                                    02 Room
                                </h3>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="tp-input-wrap">
                                    <label for="hotel-main-rate-type">
                                        Rate Types
                                    </label>
                                    <div class="select">
                                        <select name="passenger1-title" required="">
                                            <option>All Rate Types</option>
                                            <option>All Rate Types</option>
                                            <option>All Rate Types</option>
                                            <option>All Rate Types</option>
                                        </select>
                                        <div class="select_arrow"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="tp-input-wrap">
                                    <label for="hotel-main-rate-type">
                                        Meal Plans
                                    </label>
                                    <div class="select">
                                        <select name="passenger1-title" required="">
                                            <option>All Meal Plans</option>
                                            <option>All Meal Plans</option>
                                            <option>All Meal Plans</option>
                                        </select>
                                        <div class="select_arrow"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div><!-- main filter -->
                </div><!-- hrmf top -->
                <div class="row hotel-rooms-filter">
                </div>

                <div class="hotelroomsbox-wrap">
                    <form action="" method="post">
                        <div class="hotel-rooms-box">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="hotelrooms-image-slider v-slide-wrap">
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                    </div><!-- sldier -->
                                </div><!-- col -->

                                <div class="col-12 col-lg-8 hotel-rooms-box-right d-flex flex-column justify-content-between">
                                    <div class="hotel-rooms-box-righttop row align-items-center">
                                        <div class="hotelrooms-name col-12 col-md-7">
                                            <h5 class="fontfam2 mt-4 mt-lg-0">
                                                Standard Room
                                            </h5>
                                            <span class="small txt-black">
                                                Breakfast, Free Cancellation
                                            </span>
                                        </div>
                                        <div class="hotelrooms-price col-12 col-md-5 d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-column">
                                                <span class="small">
                                                    £60.95 Per Night
                                                </span>
                                                <span class="hotelrooms-price-main">
                                                    £1,400.58
                                                </span>
                                            </div><!-- dflex -->
                                            <button class="btn btn-primary">Select</button>
                                        </div><!-- hotelrooms-price -->
                                    </div>

                                    <div class="hotel-rooms-box-rightbottom mt-4">
                                        <div class="tp-table">
                                            <div class="responsive-table">
                                                <div class="tp-table-main">
                                                    <table class="table-flightseat">
                                                        <thead>
                                                            <tr>
                                                                <th>Cancel From</th>
                                                                <th>Cancel To</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thu, 30 May 2024</td>
                                                                <td>Sat, 10 August 2024</td>
                                                                <td>£ 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sun, 11 August 2024</td>
                                                                <td>Sun, 11 August 2024</td>
                                                                <td>£ 31.88</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- tp table main -->
                                            </div><!-- responsive table -->
                                        </div><!-- tp table -->
                                    </div><!-- hotel rooms box -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- hotel-rooms-box -->
                        <div class="hotel-rooms-box">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="hotelrooms-image-slider v-slide-wrap">
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                    </div><!-- sldier -->
                                </div><!-- col -->

                                <div class="col-12 col-lg-8 hotel-rooms-box-right d-flex flex-column justify-content-between">
                                    <div class="hotel-rooms-box-righttop row align-items-center">
                                        <div class="hotelrooms-name col-12 col-md-7">
                                            <h5 class="fontfam2 mt-4 mt-lg-0">
                                                Standard Room
                                            </h5>
                                            <span class="small txt-black">
                                                Breakfast, Free Cancellation
                                            </span>
                                        </div>
                                        <div class="hotelrooms-price col-12 col-md-5 d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-column">
                                                <span class="small">
                                                    £60.95 Per Night
                                                </span>
                                                <span class="hotelrooms-price-main">
                                                    £1,400.58
                                                </span>
                                            </div><!-- dflex -->
                                            <button class="btn btn-primary">Select</button>
                                        </div><!-- hotelrooms-price -->
                                    </div>

                                    <div class="hotel-rooms-box-rightbottom mt-4">
                                        <div class="tp-table">
                                            <div class="responsive-table">
                                                <div class="tp-table-main">
                                                    <table class="table-flightseat">
                                                        <thead>
                                                            <tr>
                                                                <th>Cancel From</th>
                                                                <th>Cancel To</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thu, 30 May 2024</td>
                                                                <td>Sat, 10 August 2024</td>
                                                                <td>£ 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- tp table main -->
                                            </div><!-- responsive table -->
                                        </div><!-- tp table -->
                                    </div><!-- hotel rooms box -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- hotel-rooms-box -->
                        <div class="hotel-rooms-box">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="hotelrooms-image-slider v-slide-wrap">
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                    </div><!-- sldier -->
                                </div><!-- col -->

                                <div class="col-12 col-lg-8 hotel-rooms-box-right d-flex flex-column justify-content-between">
                                    <div class="hotel-rooms-box-righttop row align-items-center">
                                        <div class="hotelrooms-name col-12 col-md-7">
                                            <h5 class="fontfam2 mt-4 mt-lg-0">
                                                Standard Room
                                            </h5>
                                            <span class="small txt-black">
                                                Breakfast, Free Cancellation
                                            </span>
                                        </div>
                                        <div class="hotelrooms-price col-12 col-md-5 d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-column">
                                                <span class="small">
                                                    £60.95 Per Night
                                                </span>
                                                <span class="hotelrooms-price-main">
                                                    £1,400.58
                                                </span>
                                            </div><!-- dflex -->
                                            <button class="btn btn-primary">Select</button>
                                        </div><!-- hotelrooms-price -->
                                    </div>

                                    <div class="hotel-rooms-box-rightbottom mt-4">
                                        <div class="tp-table">
                                            <div class="responsive-table">
                                                <div class="tp-table-main">
                                                    <table class="table-flightseat">
                                                        <thead>
                                                            <tr>
                                                                <th>Cancel From</th>
                                                                <th>Cancel To</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thu, 30 May 2024</td>
                                                                <td>Sat, 10 August 2024</td>
                                                                <td>£ 0.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- tp table main -->
                                            </div><!-- responsive table -->
                                        </div><!-- tp table -->
                                    </div><!-- hotel rooms box -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- hotel-rooms-box -->
                    </form>
                </div>
            </div><!-- hotel rooms main -->
            <div class="hotel-rooms-main">
                <div class="hrmf-top">
                    <div class="hotelrooms-main-filter">
                        <div class="row">
                            <div class="col-12">
                                <h3>
                                    03 Room
                                </h3>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="tp-input-wrap">
                                    <label for="hotel-main-rate-type">
                                        Rate Types
                                    </label>
                                    <div class="select">
                                        <select name="passenger1-title" required="">
                                            <option>All Rate Types</option>
                                            <option>All Rate Types</option>
                                            <option>All Rate Types</option>
                                            <option>All Rate Types</option>
                                        </select>
                                        <div class="select_arrow"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="tp-input-wrap">
                                    <label for="hotel-main-rate-type">
                                        Meal Plans
                                    </label>
                                    <div class="select">
                                        <select name="passenger1-title" required="">
                                            <option>All Meal Plans</option>
                                            <option>All Meal Plans</option>
                                            <option>All Meal Plans</option>
                                        </select>
                                        <div class="select_arrow"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div><!-- main filter -->
                </div><!-- hrmf top -->
                <div class="row hotel-rooms-filter">
                </div>

                <div class="hotelroomsbox-wrap">
                    <form action="" method="post">
                        <div class="hotel-rooms-box">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="hotelrooms-image-slider v-slide-wrap">
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                    </div><!-- sldier -->
                                </div><!-- col -->

                                <div class="col-12 col-lg-8 hotel-rooms-box-right d-flex flex-column justify-content-between">
                                    <div class="hotel-rooms-box-righttop row align-items-center">
                                        <div class="hotelrooms-name col-12 col-md-7">
                                            <h5 class="fontfam2 mt-4 mt-lg-0">
                                                Standard Room
                                            </h5>
                                            <span class="small txt-black">
                                                Breakfast, Free Cancellation
                                            </span>
                                        </div>
                                        <div class="hotelrooms-price col-12 col-md-5 d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-column">
                                                <span class="small">
                                                    £60.95 Per Night
                                                </span>
                                                <span class="hotelrooms-price-main">
                                                    £1,400.58
                                                </span>
                                            </div><!-- dflex -->
                                            <button class="btn btn-primary">Select</button>
                                        </div><!-- hotelrooms-price -->
                                    </div>

                                    <div class="hotel-rooms-box-rightbottom mt-4">
                                        <div class="tp-table">
                                            <div class="responsive-table">
                                                <div class="tp-table-main">
                                                    <table class="table-flightseat">
                                                        <thead>
                                                            <tr>
                                                                <th>Cancel From</th>
                                                                <th>Cancel To</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thu, 30 May 2024</td>
                                                                <td>Sat, 10 August 2024</td>
                                                                <td>£ 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sun, 11 August 2024</td>
                                                                <td>Sun, 11 August 2024</td>
                                                                <td>£ 31.88</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- tp table main -->
                                            </div><!-- responsive table -->
                                        </div><!-- tp table -->
                                    </div><!-- hotel rooms box -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- hotel-rooms-box -->
                        <div class="hotel-rooms-box">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="hotelrooms-image-slider v-slide-wrap">
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                    </div><!-- sldier -->
                                </div><!-- col -->

                                <div class="col-12 col-lg-8 hotel-rooms-box-right d-flex flex-column justify-content-between">
                                    <div class="hotel-rooms-box-righttop row align-items-center">
                                        <div class="hotelrooms-name col-12 col-md-7">
                                            <h5 class="fontfam2 mt-4 mt-lg-0">
                                                Standard Room
                                            </h5>
                                            <span class="small txt-black">
                                                Breakfast, Free Cancellation
                                            </span>
                                        </div>
                                        <div class="hotelrooms-price col-12 col-md-5 d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-column">
                                                <span class="small">
                                                    £60.95 Per Night
                                                </span>
                                                <span class="hotelrooms-price-main">
                                                    £1,400.58
                                                </span>
                                            </div><!-- dflex -->
                                            <button class="btn btn-primary">Select</button>
                                        </div><!-- hotelrooms-price -->
                                    </div>

                                    <div class="hotel-rooms-box-rightbottom mt-4">
                                        <div class="tp-table">
                                            <div class="responsive-table">
                                                <div class="tp-table-main">
                                                    <table class="table-flightseat">
                                                        <thead>
                                                            <tr>
                                                                <th>Cancel From</th>
                                                                <th>Cancel To</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thu, 30 May 2024</td>
                                                                <td>Sat, 10 August 2024</td>
                                                                <td>£ 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mon, 30 August 2024</td>
                                                                <td>Tue, 13 August 2024</td>
                                                                <td>£ 1,400.58</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- tp table main -->
                                            </div><!-- responsive table -->
                                        </div><!-- tp table -->
                                    </div><!-- hotel rooms box -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- hotel-rooms-box -->
                        <div class="hotel-rooms-box">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="hotelrooms-image-slider v-slide-wrap">
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                        <div class="hotelrooms-image-slide v-slide">
                                            <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                        </div><!-- slide -->
                                    </div><!-- sldier -->
                                </div><!-- col -->

                                <div class="col-12 col-lg-8 hotel-rooms-box-right d-flex flex-column justify-content-between">
                                    <div class="hotel-rooms-box-righttop row align-items-center">
                                        <div class="hotelrooms-name col-12 col-md-7">
                                            <h5 class="fontfam2 mt-4 mt-lg-0">
                                                Standard Room
                                            </h5>
                                            <span class="small txt-black">
                                                Breakfast, Free Cancellation
                                            </span>
                                        </div>
                                        <div class="hotelrooms-price col-12 col-md-5 d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-column">
                                                <span class="small">
                                                    £60.95 Per Night
                                                </span>
                                                <span class="hotelrooms-price-main">
                                                    £1,400.58
                                                </span>
                                            </div><!-- dflex -->
                                            <button class="btn btn-primary">Select</button>
                                        </div><!-- hotelrooms-price -->
                                    </div>

                                    <div class="hotel-rooms-box-rightbottom mt-4">
                                        <div class="tp-table">
                                            <div class="responsive-table">
                                                <div class="tp-table-main">
                                                    <table class="table-flightseat">
                                                        <thead>
                                                            <tr>
                                                                <th>Cancel From</th>
                                                                <th>Cancel To</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thu, 30 May 2024</td>
                                                                <td>Sat, 10 August 2024</td>
                                                                <td>£ 0.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- tp table main -->
                                            </div><!-- responsive table -->
                                        </div><!-- tp table -->
                                    </div><!-- hotel rooms box -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- hotel-rooms-box -->
                    </form>
                </div>
            </div><!-- hotel rooms main -->
        </div><!-- container -->
    </section>

    <section class="hotel-rooms">
    </section>

    <?php include '../sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-hotels.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/galleryPopup.js"></script>

</body>

</html>