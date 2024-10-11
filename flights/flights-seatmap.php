<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Flights Seat Map</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-flights.css">
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
    <div id="nohero-inner">
        <?php include '../sections/global/header-nav.php';?>
    </div><!-- main hero -->
    <section class="block search-wrap bggray" id="hotels-search">
        <div class="container">
            <div class="row">
                <div class="col-10 mb-4 tp-page-title">
                    <h1>
                        Select Seat for Passenger for Flight 03 LGW[London Gatwick Airport]
                        to [ADA] Adu Dhabi Airport
                    </h1>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">

                <?php include '../sections/sidebar/flights.php';?>

                <div class="col-12 col-lg-8 tp-main">
                    <ul class="nav nav-tabs tp-tabs" id="tabs-flight" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab-flight01" data-bs-toggle="tab" data-bs-target="#tab-flight01-pane" type="button" role="tab" aria-controls="tab-flight01-pane" aria-selected="true">Flight 01</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-flight02" data-bs-toggle="tab" data-bs-target="#tab-flight02-pane" type="button" role="tab" aria-controls="tab-flight02-pane" aria-selected="false">Flight 02</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-flight03" data-bs-toggle="tab" data-bs-target="#tab-flight03-pane" type="button" role="tab" aria-controls="tab-flight03-pane" aria-selected="false">Flight 03</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-flight04" data-bs-toggle="tab" data-bs-target="#tab-flight04-pane" type="button" role="tab" aria-controls="tab-flight04-pane" aria-selected="false">Flight 04</button>
                        </li>
                        <!-- You can add more flight tabs as needed -->
                    </ul>
                    <ul class="nav nav-tabs tp-tabs mb-4" id="tabs-passengers" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab-passenger01" data-bs-toggle="tab" data-bs-target="#tab-passenger01-pane" type="button" role="tab" aria-controls="tab-passenger01-pane" aria-selected="true">P01</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger02" data-bs-toggle="tab" data-bs-target="#tab-passenger02-pane" type="button" role="tab" aria-controls="tab-passenger02-pane" aria-selected="false">P02</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger03" data-bs-toggle="tab" data-bs-target="#tab-passenger03-pane" type="button" role="tab" aria-controls="tab-passenger03-pane" aria-selected="false">P03</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger04" data-bs-toggle="tab" data-bs-target="#tab-passenger04-pane" type="button" role="tab" aria-controls="tab-passenger04-pane" aria-selected="false">P04</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger05" data-bs-toggle="tab" data-bs-target="#tab-passenger05-pane" type="button" role="tab" aria-controls="tab-passenger05-pane" aria-selected="false">P05</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger06" data-bs-toggle="tab" data-bs-target="#tab-passenger06-pane" type="button" role="tab" aria-controls="tab-passenger06-pane" aria-selected="false">P06</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger07" data-bs-toggle="tab" data-bs-target="#tab-passenger07-pane" type="button" role="tab" aria-controls="tab-passenger07-pane" aria-selected="false">P07</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger08" data-bs-toggle="tab" data-bs-target="#tab-passenger08-pane" type="button" role="tab" aria-controls="tab-passenger08-pane" aria-selected="false">P08</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger09" data-bs-toggle="tab" data-bs-target="#tab-passenger09-pane" type="button" role="tab" aria-controls="tab-passenger09-pane" aria-selected="false">P09</button>
                        </li>
                    </ul>

                    <div class="flights-wrap">
                        <div class="flights-main">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab-passenger01-pane" role="tabpanel" aria-labelledby="tab-best-pane" tabindex="0">
                                <div class="seatmap-legend">
                                    <div class="row">
                                        <div class="col-12 col-lg-8">
                                            <div class="row g-3">
                                                <div class="col-4 seatmap-legend-box">
                                                    <img class="legend-img" width="40px" src="../assets/img/seats/seat-available.png">
                                                    <strong>Available</strong>
                                                </div>
                                                <div class="col-4 seatmap-legend-box">
                                                    <img class="legend-img" width="40px" src="../assets/img/seats/seat-unavailable.png">
                                                    <strong>Unavailable</strong>
                                                </div>
                                                <div class="col-4 seatmap-legend-box">
                                                    <img class="legend-img" width="40px" src="../assets/img/seats/seat-selected.png">
                                                    <strong>Selected</strong>
                                                </div>
                                                <div class="col-4 seatmap-legend-box">
                                                    <img class="legend-img" width="40px" src="../assets/img/seats/seat-extra-legroom.png">
                                                    <strong>Extra Legroom</strong>
                                                </div>
                                                <div class="col-4 seatmap-legend-box">
                                                    <img class="legend-img" width="40px" src="../assets/img/seats/seat-child-not-suitable.png">
                                                    <strong>Not suitable for child</strong>
                                                </div>
                                                <div class="col-4 seatmap-legend-box">
                                                    <img class="legend-img" width="40px" src="../assets/img/seats/seat-infant-not-allowed.png">
                                                    <strong>Not Allowed for infant</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="seatmap-table">
                                    <tbody>
                                    <tr>
                                        <th class="text-center px-2">
                                            <span class="font-weight-bold">A</span>
                                        </th>
                                        <th class="text-center px-2">
                                            <span class="font-weight-bold">B</span>
                                        </th>
                                        <th class="text-center px-2">
                                            <span class="font-weight-bold">C</span>
                                        </th>
                                        <th class="px-2">&nbsp;</th>
                                        <th class="text-center px-2">
                                            <span class="font-weight-bold">D</span>
                                        </th>
                                        <th class="text-center px-2">
                                            <span class="font-weight-bold">E</span>
                                        </th>
                                        <th class="text-center px-2">
                                            <span class="font-weight-bold">F</span>
                                        </th>
                                    </tr>

                                    <tr>
                                    <td id="U28107-1A" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="../assets/img/seats/seat-child-not-suitable.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-1B" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="../assets/img/seats/seat-child-not-suitable.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-1C" class="text-center px-2 seat seat-price" config="Aisle seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 42.11 ">
                                        <img width="50px" src="../assets/img/seats/seat-selected.png">
                                        <div class="price-2">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">01</span>
                                    </th>
                                    <td id="U28107-1D" class="text-center px-2 seat seat-price" config="Aisle seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 42.11 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-1E" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="../assets/img/seats/seat-infant-not-allowed.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-1F" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="../assets/img/seats/seat-infant-not-allowed.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-2A" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-2B" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-2C" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">02</span>
                                    </th>
                                    <td id="U28107-2D" class="text-center px-2 seat seat-price" config="Aisle seat, Up Front" price="27.90 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-unavailable.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-2E" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="../assets/img/seats/seat-unavailable.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-2F" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="../assets/img/seats/seat-unavailable.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-3A" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-3B" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-3C" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">03</span>
                                    </th>
                                    <td id="U28107-3D" class="text-center px-2 seat seat-price" config="Aisle seat, Up Front" price="27.90 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-3E" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-3F" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-4A" class="text-center px-2 seat seat-price" config="Window seat, Up Front" price="27.90 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-4B" class="text-center px-2 seat seat-price" config="No smoking seat, Up Front" price="27.90 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-4C" class="text-center px-2 seat seat-price" config="Aisle seat, Up Front" price="27.90 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">04</span>
                                    </th>
                                    <td id="U28107-4D" class="text-center px-2 seat seat-price" config="Aisle seat, Up Front" price="27.90 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-4E" class="text-center px-2 seat seat-price" config="No smoking seat, Up Front" price="27.90 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-4F" class="text-center px-2 seat seat-price" config="Window seat, Up Front" price="27.90 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-5A" class="text-center px-2 seat seat-price" config="Window seat, Up Front" price="27.90 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-5B" class="text-center px-2 seat seat-price" config="No smoking seat, Up Front" price="27.90 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-5C" class="text-center px-2 seat seat-price" config="Aisle seat, Up Front" price="27.90 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">05</span>
                                    </th>
                                    <td id="U28107-5D" class="text-center px-2 seat seat-price" config="Aisle seat, Up Front" price="27.90 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-5E" class="text-center px-2 seat seat-price" config="No smoking seat, Up Front" price="27.90 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-5F" class="text-center px-2 seat seat-price" config="Window seat, Up Front" price="27.90 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td id="U28107-6A" class="text-center px-2 seat seat-price" config="Window seat" price="14.20 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-6B" class="text-center px-2 seat seat-price" config="No smoking seat" price="14.20 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-6C" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        06</span>
                                    </th>
                                    <td id="U28107-6D" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-6E" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-6F" class="text-center px-2 seat seat-price" config="Window seat" price="14.20 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>

                                    <tr>
                                    <th class="px-2">
                                        <div>
                                        <span class="arrow-1 font-weight-bold">
                                            <img src="../assets/img/seats/left-arrow.png" alt="">
                                        </span>
                                        </div>
                                    </th>
                                    <th class="text-center px-2">
                                        <span class="exit font-weight-bold">Exit</span>
                                    </th>

                                    <th class="px-2">&nbsp;</th>
                                    <th class="px-2">&nbsp;</th>
                                    <th class="px-2">&nbsp;</th>

                                    <th class="text-center px-2">
                                        <div>
                                        <span class="exit font-weight-bold">Exit</span>
                                        </div>
                                    </th>
                                    <th class="px-2">
                                        <div>
                                        <span class="arrow-2 font-weight-bold">
                                            <img src="../assets/img/seats/right-arrow.png" alt="">
                                        </span>
                                        </div>
                                    </th>
                                    </tr>

                                    <tr>
                                    <td id="U28107-7A" class="text-center px-2 seat seat-price" config="Window seat" price="14.20 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-7B" class="text-center px-2 seat seat-price" config="No smoking seat" price="14.20 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-7C" class="text-center px-2 seat seat-price" config="Aisle seat" price="14.20 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">07</span>
                                    </th>
                                    <td id="U28107-7D" class="text-center px-2 seat seat-price" config="Aisle seat" price="14.20 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-7E" class="text-center px-2 seat seat-price" config="No smoking seat" price="14.20 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-7F" class="text-center px-2 seat seat-price" config="Window seat" price="14.20 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-8A" class="text-center px-2 seat seat-price" config="Window seat" price="14.20 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-8B" class="text-center px-2 seat seat-price" config="No smoking seat" price="14.20 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-8C" class="text-center px-2 seat seat-price" config="Aisle seat" price="14.20 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">08</span>
                                    </th>
                                    <td id="U28107-8D" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-8E" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-8F" class="text-center px-2 seat seat-price" config="Window seat" price="14.20 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-9A" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-9B" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-9C" class="text-center px-2 seat seat-price" config="Aisle seat" price="14.20 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">09</span>
                                    </th>
                                    <td id="U28107-9D" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-9E" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-9F" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-10A" class="text-center px-2 seat seat-price" config="Window seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-10B" class="text-center px-2 seat seat-price" config="No smoking seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-10C" class="text-center px-2 seat seat-price" config="Aisle seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">10</span>
                                    </th>
                                    <td id="U28107-10D" class="text-center px-2 seat seat-price" config="Aisle seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-10E" class="text-center px-2 seat seat-price" config="No smoking seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-10F" class="text-center px-2 seat seat-price" config="Window seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td id="U28107-11A" class="text-center px-2 seat seat-price" config="Window seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-11B" class="text-center px-2 seat seat-price" config="No smoking seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-11C" class="text-center px-2 seat seat-price" config="Aisle seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">11</span>
                                    </th>
                                    <td id="U28107-11D" class="text-center px-2 seat seat-price" config="Aisle seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-11E" class="text-center px-2 seat seat-price" config="No smoking seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-11F" class="text-center px-2 seat seat-price" config="Window seat, Exit row seat, Seat not suitable for child, Seat not allowed for infant, Extra legroom" price=" 31.45 ">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-12A" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-12B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-12C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">12</span>
                                    </th>
                                    <td id="U28107-12D" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-12E" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-12F" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>

                                    <tr>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">A</span>
                                    </th>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">B</span>
                                    </th>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">C</span>
                                    </th>
                                    <th class="px-2">&nbsp;</th>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">D</span>
                                    </th>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">E</span>
                                    </th>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">F</span>
                                    </th>
                                    </tr>

                                    <tr>
                                    <td id="U28107-13A" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-13B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-13C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">13</span>
                                    </th>
                                    <td id="U28107-13D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-13E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-13F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-14A" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-14B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-14C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">14</span>
                                    </th>
                                    <td id="U28107-14D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-14E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-14F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-15A" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-15B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-15C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">15</span>
                                    </th>
                                    <td id="U28107-15D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-15E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-15F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-16A" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-16B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-16C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">16</span>
                                    </th>
                                    <td id="U28107-16D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-16E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-16F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-17A" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-17B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-17C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">17</span>
                                    </th>
                                    <td id="U28107-17D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-17E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-17F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-18A" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-18B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-18C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">18</span>
                                    </th>
                                    <td id="U28107-18D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-18E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-18F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>

                                    <tr>
                                    <th class="px-2">
                                        <div>
                                        <span class="arrow-1 font-weight-bold">
                                            <img src="../assets/img/seats/left-arrow.png" alt="">
                                        </span>
                                        </div>
                                    </th>
                                    <th class="text-center px-2">
                                        <span class="exit font-weight-bold">Exit</span>
                                    </th>

                                    <th class="px-2">&nbsp;</th>
                                    <th class="px-2">&nbsp;</th>
                                    <th class="px-2">&nbsp;</th>

                                    <th class="text-center px-2">
                                        <div>
                                        <span class="exit font-weight-bold">Exit</span>
                                        </div>
                                    </th>
                                    <th class="px-2">
                                        <div>
                                        <span class="arrow-2 font-weight-bold">
                                            <img src="../assets/img/seats/right-arrow.png" alt="">
                                        </span>
                                        </div>
                                    </th>
                                    </tr>

                                    <tr>
                                    <td id="U28107-19A" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-19B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-19C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">19</span>
                                    </th>
                                    <td id="U28107-19D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-19E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-19F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/seat-extra-legroom.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-20A" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-20B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-20C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">20</span>
                                    </th>
                                    <td id="U28107-20D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-20E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-20F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-21A" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-21B" class="text-center px-2 unavailable seat-price" config="" price="">
                                        <img width="50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-21C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">21</span>
                                    </th>
                                    <td id="U28107-21D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-21E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-21F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-22A" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-22B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-22C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">22</span>
                                    </th>
                                    <td id="U28107-22D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-22E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-22F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td id="U28107-23A" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-23B" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-23C" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">23</span>
                                    </th>

                                    <td id="U28107-23D" class="text-center px-2 seat seat-price" config="Aisle seat" price="6.59">
                                        <img width="50" src="https://travelpack.com//imagedb/seating/seat1.png" alt="Seat Image">
                                        <div class="price">£120</div>
                                    </td>

                                    <td id="U28107-23E" class="text-center px-2 seat seat-price" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    <td id="U28107-23F" class="text-center px-2 seat seat-price" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat1.png">
                                        <div class="price">£120</div>
                                    </td>
                                    </tr>
                                    <tr class="pt-3">
                                    <td id="U28107-23A" class="text-center px-2 seat" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/crew.png" class=>
                                    </td>
                                    <td id="U28107-23B" class="text-center px-2 seat" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/crew.png">
                                    </td>
                                    <td id="U28107-23C" class="text-center px-2 seat" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/crew.png">
                                    </td>
                                    <th class="text-center px-2">
                                        <span class="font-weight-bold txt-black">6</span>
                                    </th>
                                    <td id="U28107-23D" class="text-center px-2 seat" config="Aisle seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/food.png">
                                    </td>
                                    <td id="U28107-23E" class="text-center px-2 seat" config="No smoking seat" price="6.59 ">
                                        <img width=" 50px" src="../assets/img/seats/food.png">
                                    </td>
                                    <td id="U28107-23F" class="text-center px-2 seat" config="Window seat" price="6.59 ">
                                        <img width=" 50px" src="https://travelpack.com//imagedb/seating/seat2.png">
                                    </td>
                                    </tr>
                                </tbody>
                                </table>
                                   
                                </div><!-- tab pane -->
                                <div class="tab-pane fade" id="tab-passenger02-pane" role="tabpanel" aria-labelledby="tab-best-pane" tabindex="0">
                                </div><!-- tab pane -->
                            </div><!-- tab content -->
                        </div><!-- flights main -->
                    </div><!-- flights wrap -->
                </div>
            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/footer.php';?>

    <div class="modal" id="seat-modal" tabindex=" -1" role="dialog" aria-labelledby="modal" aria-hidden=" true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title">Seat Information</h5>
          </div>
          <div id="seat-body" class="modal-body">
            <div class="row">
              <div class="col-md-3">Flight No :</div>
              <div class="col-md-9">
                <span id="seat-flight"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">Seat Number :</div>
              <div class="col-md-9">
                <span id="seat-number"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">Seat Price :</div>
              <div class="col-md-9">
                <strong>&pound;<span id="seat-price"></span> </strong>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">Facilities :</div>
              <div class="col-md-9">
                <span id="seat-config"></span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white select-seat">Select Seat</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script>
      var pax = "1";
    </script>
    
    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/flights-seatmap.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-search.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>

</body>

</html>