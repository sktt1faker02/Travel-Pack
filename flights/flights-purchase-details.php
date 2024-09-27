<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Flights Purchase Details</title>

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

    <section class="block search-wrap bggray" id="flights-purchase-details">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2>
                        Your Purchase Details
                    </h2>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                <?php include '../sections/sidebar/flights.php';?>

                <div class="col-12 col-lg-8 tp-main">
                    <div class="fpd-details">
                        <h3 class="mb-3 tp-top-heading">
                            Details
                        </h3>
                        <h3 class="fw-medium tp-top-heading">
                            Lead Passenger
                        </h3>
                        
                        <div class="fpd-box show lead-passenger">
                            <div class="fpd-box-top mt-3">
                                <span>
                                    Passenger 01
                                </span> <i class="fa-solid fa-chevron-down fs13 ms-2"></i>
                            </div>
                            <div class="fpd-box-bottom">
                                <div class="tp-table mt-3">
                                    <div class="responsive-table">
                                        <div class="tp-table-main">
                                            <table class="table-flightseat" style="width: 100%;">
                                                <thead>
                                                    <tr style="background-color: #ddd; font-weight: bold;">
                                                        <th style="padding: 10px;">Individual Details</th>
                                                        <th style="padding: 10px;">Travel Information</th>
                                                        <th style="padding: 10px;">Contact Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Name:</strong> Mr Forename Surname<br>
                                                            <strong>Age:</strong> 18<br>
                                                            <strong>Date of Birth:</strong> DD/MM/YYYY<br>
                                                            <strong>Gender:</strong> Prefer Not to Say<br>
                                                            <strong>Weight (kg):</strong> 80<br>
                                                            <strong>Height (cm):</strong> 170<br>
                                                            <strong>Language:</strong> English<br>
                                                            <strong>Flight Number:</strong> 0000
                                                        </td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Passport Number:</strong> 0000000000<br>
                                                            <strong>Passport Expiry:</strong> MM/YYYY<br>
                                                            <strong>Nationality:</strong> British<br>
                                                            <strong>Flight Number:</strong> 0000<br>
                                                            <strong>Carrier:</strong> Airline
                                                        </td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Address:</strong> 19 Bellefields Road<br>
                                                            <strong>Country:</strong> United Kingdom<br>
                                                            <strong>City*:</strong> London<br>
                                                            <strong>County/Province:</strong> London<br>
                                                            <strong>Postal Code:</strong> SW9 9UH
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- tp table main -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button class="btn btn-white">
                                                Change Seats
                                            </button>
                                        </div>
                                    </div><!-- responsive table -->
                                </div><!-- tp-table -->
                            </div><!-- fpd box bottom -->
                        </div><!-- fpd-box -->

                        <h3 class="fw-medium tp-top-heading mt-5">
                            Additional Passengers
                        </h3>

                        <div class="fpd-box fpd-box-addtl">
                            <div class="fpd-box-top mt-3">
                                <span>
                                    Passenger 02
                                </span> <i class="fa-solid fa-chevron-down fs13 ms-2"></i>
                            </div>
                            <div class="fpd-box-bottom">
                                <div class="tp-table mt-3">
                                    <div class="responsive-table">
                                        <div class="tp-table-main">
                                            <table class="table-flightseat" style="width: 100%;">
                                                <thead>
                                                    <tr style="background-color: #ddd; font-weight: bold;">
                                                        <th style="padding: 10px;">Individual Details</th>
                                                        <th style="padding: 10px;">Travel Information</th>
                                                        <th style="padding: 10px;">Contact Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Name:</strong> Mr Forename Surname<br>
                                                            <strong>Age:</strong> 18<br>
                                                            <strong>Date of Birth:</strong> DD/MM/YYYY<br>
                                                            <strong>Gender:</strong> Prefer Not to Say<br>
                                                            <strong>Weight (kg):</strong> 80<br>
                                                            <strong>Height (cm):</strong> 170<br>
                                                            <strong>Language:</strong> English<br>
                                                            <strong>Flight Number:</strong> 0000
                                                        </td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Passport Number:</strong> 0000000000<br>
                                                            <strong>Passport Expiry:</strong> MM/YYYY<br>
                                                            <strong>Nationality:</strong> British<br>
                                                            <strong>Flight Number:</strong> 0000<br>
                                                            <strong>Carrier:</strong> Airline
                                                        </td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Address:</strong> 19 Bellefields Road<br>
                                                            <strong>Country:</strong> United Kingdom<br>
                                                            <strong>City*:</strong> London<br>
                                                            <strong>County/Province:</strong> London<br>
                                                            <strong>Postal Code:</strong> SW9 9UH
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- tp table main -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button class="btn btn-white">
                                                Change Seats
                                            </button>
                                        </div>
                                    </div><!-- responsive table -->
                                </div><!-- tp-table -->
                            </div><!-- fpd box bottom -->
                        </div><!-- fpd-box -->
                        <div class="fpd-box fpd-box-addtl">
                            <div class="fpd-box-top mt-3">
                                <span>
                                    Passenger 03
                                </span> <i class="fa-solid fa-chevron-down fs13 ms-2"></i>
                            </div>
                            <div class="fpd-box-bottom">
                                <div class="tp-table mt-3">
                                    <div class="responsive-table">
                                        <div class="tp-table-main">
                                            <table class="table-flightseat" style="width: 100%;">
                                                <thead>
                                                    <tr style="background-color: #ddd; font-weight: bold;">
                                                        <th style="padding: 10px;">Individual Details</th>
                                                        <th style="padding: 10px;">Travel Information</th>
                                                        <th style="padding: 10px;">Contact Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Name:</strong> Mr Forename Surname<br>
                                                            <strong>Age:</strong> 18<br>
                                                            <strong>Date of Birth:</strong> DD/MM/YYYY<br>
                                                            <strong>Gender:</strong> Prefer Not to Say<br>
                                                            <strong>Weight (kg):</strong> 80<br>
                                                            <strong>Height (cm):</strong> 170<br>
                                                            <strong>Language:</strong> English<br>
                                                            <strong>Flight Number:</strong> 0000
                                                        </td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Passport Number:</strong> 0000000000<br>
                                                            <strong>Passport Expiry:</strong> MM/YYYY<br>
                                                            <strong>Nationality:</strong> British<br>
                                                            <strong>Flight Number:</strong> 0000<br>
                                                            <strong>Carrier:</strong> Airline
                                                        </td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Address:</strong> 19 Bellefields Road<br>
                                                            <strong>Country:</strong> United Kingdom<br>
                                                            <strong>City*:</strong> London<br>
                                                            <strong>County/Province:</strong> London<br>
                                                            <strong>Postal Code:</strong> SW9 9UH
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- tp table main -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button class="btn btn-white">
                                                Change Seats
                                            </button>
                                        </div>
                                    </div><!-- responsive table -->
                                </div><!-- tp-table -->
                            </div><!-- fpd box bottom -->
                        </div><!-- fpd-box -->
                        <div class="fpd-box fpd-box-addtl">
                            <div class="fpd-box-top mt-3">
                                <span>
                                    Passenger 04
                                </span> <i class="fa-solid fa-chevron-down fs13 ms-2"></i>
                            </div>
                            <div class="fpd-box-bottom">
                                <div class="tp-table mt-3">
                                    <div class="responsive-table">
                                        <div class="tp-table-main">
                                            <table class="table-flightseat" style="width: 100%;">
                                                <thead>
                                                    <tr style="background-color: #ddd; font-weight: bold;">
                                                        <th style="padding: 10px;">Individual Details</th>
                                                        <th style="padding: 10px;">Travel Information</th>
                                                        <th style="padding: 10px;">Contact Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Name:</strong> Mr Forename Surname<br>
                                                            <strong>Age:</strong> 18<br>
                                                            <strong>Date of Birth:</strong> DD/MM/YYYY<br>
                                                            <strong>Gender:</strong> Prefer Not to Say<br>
                                                            <strong>Weight (kg):</strong> 80<br>
                                                            <strong>Height (cm):</strong> 170<br>
                                                            <strong>Language:</strong> English<br>
                                                            <strong>Flight Number:</strong> 0000
                                                        </td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Passport Number:</strong> 0000000000<br>
                                                            <strong>Passport Expiry:</strong> MM/YYYY<br>
                                                            <strong>Nationality:</strong> British<br>
                                                            <strong>Flight Number:</strong> 0000<br>
                                                            <strong>Carrier:</strong> Airline
                                                        </td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Address:</strong> 19 Bellefields Road<br>
                                                            <strong>Country:</strong> United Kingdom<br>
                                                            <strong>City*:</strong> London<br>
                                                            <strong>County/Province:</strong> London<br>
                                                            <strong>Postal Code:</strong> SW9 9UH
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- tp table main -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button class="btn btn-white">
                                                Change Seats
                                            </button>
                                        </div>
                                    </div><!-- responsive table -->
                                </div><!-- tp-table -->
                            </div><!-- fpd box bottom -->
                        </div><!-- fpd-box -->
                        <div class="fpd-box fpd-box-addtl">
                            <div class="fpd-box-top mt-3">
                                <span>
                                    Passenger 05
                                </span> <i class="fa-solid fa-chevron-down fs13 ms-2"></i>
                            </div>
                            <div class="fpd-box-bottom">
                                <div class="tp-table mt-3">
                                    <div class="responsive-table">
                                        <div class="tp-table-main">
                                            <table class="table-flightseat" style="width: 100%;">
                                                <thead>
                                                    <tr style="background-color: #ddd; font-weight: bold;">
                                                        <th style="padding: 10px;">Individual Details</th>
                                                        <th style="padding: 10px;">Travel Information</th>
                                                        <th style="padding: 10px;">Contact Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Name:</strong> Mr Forename Surname<br>
                                                            <strong>Age:</strong> 18<br>
                                                            <strong>Date of Birth:</strong> DD/MM/YYYY<br>
                                                            <strong>Gender:</strong> Prefer Not to Say<br>
                                                            <strong>Weight (kg):</strong> 80<br>
                                                            <strong>Height (cm):</strong> 170<br>
                                                            <strong>Language:</strong> English<br>
                                                            <strong>Flight Number:</strong> 0000
                                                        </td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Passport Number:</strong> 0000000000<br>
                                                            <strong>Passport Expiry:</strong> MM/YYYY<br>
                                                            <strong>Nationality:</strong> British<br>
                                                            <strong>Flight Number:</strong> 0000<br>
                                                            <strong>Carrier:</strong> Airline
                                                        </td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                            <strong>Address:</strong> 19 Bellefields Road<br>
                                                            <strong>Country:</strong> United Kingdom<br>
                                                            <strong>City*:</strong> London<br>
                                                            <strong>County/Province:</strong> London<br>
                                                            <strong>Postal Code:</strong> SW9 9UH
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- tp table main -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button class="btn btn-white">
                                                Change Seats
                                            </button>
                                        </div>
                                    </div><!-- responsive table -->
                                </div><!-- tp-table -->
                            </div><!-- fpd box bottom -->
                        </div><!-- fpd-box -->
                    </div><!-- fpd details -->

                    <div class="fpd-flight mt-4">
                        <h3 class="mb-3 tp-top-heading">
                            Flight
                        </h3>
                        <div class="flights-main">
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
                                            <div class="col-12 col-lg-6 d-flex justify-content-end align-items-center">
                                                <button class="btn btn-white">
                                                    Change Flight
                                                </button>
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flights-main mt-3">
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
                                            <div class="col-12 col-lg-6 d-flex justify-content-end align-items-center">
                                                <button class="btn btn-white">
                                                    Change Flight
                                                </button>
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- fpd-flight -->

                    <div class="fpd-seats mt-4">
                        <h3 class="mb-3 tp-top-heading">
                            Seat
                        </h3>
                        
                        <div class="fpd-box show fpd-box-addtl">
                            <div class="fpd-box-top mt-3">
                                <span>
                                    Passenger 01
                                </span> <i class="fa-solid fa-chevron-down fs13 ms-2"></i>
                            </div>
                            <div class="fpd-box-bottom">
                                <div class="tp-table mt-3">
                                    <div class="responsive-table">
                                        <div class="tp-table-main">
                                            <table class="table-flightseat" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 35%;">Journey</th>
                                                        <th>Flight</th>
                                                        <th>Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Outbound Journey -->
                                                    <tr>
                                                        <td>Outbound (LGW - XNB)</td>
                                                        <td>Flight 01 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 02 (LGW - XNB)</td>
                                                        <td>25C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 03 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 04 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>

                                                    <!-- Return Journey -->
                                                    <tr>
                                                        <td>Return (XNB - LGW)</td>
                                                        <td>Flight 01 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 02 (XNB - LGW)</td>
                                                        <td>25C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 03 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 04 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                </tbody>
                                            </table>



                                        </div><!-- tp table main -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button class="btn btn-white">
                                                Change Seats
                                            </button>
                                        </div>
                                    </div><!-- responsive table -->
                                </div><!-- tp-table -->
                            </div><!-- fpd box bottom -->
                        </div><!-- fpd-box -->
                        <div class="fpd-box fpd-box-addtl">
                            <div class="fpd-box-top mt-3">
                                <span>
                                    Passenger 02
                                </span> <i class="fa-solid fa-chevron-down fs13 ms-2"></i>
                            </div>
                            <div class="fpd-box-bottom">
                                <div class="tp-table mt-3">
                                    <div class="responsive-table">
                                        <div class="tp-table-main">
                                            <table class="table-flightseat" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 35%;">Journey</th>
                                                        <th>Flight</th>
                                                        <th>Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Outbound Journey -->
                                                    <tr>
                                                        <td>Outbound (LGW - XNB)</td>
                                                        <td>Flight 01 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 02 (LGW - XNB)</td>
                                                        <td>25C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 03 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 04 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>

                                                    <!-- Return Journey -->
                                                    <tr>
                                                        <td>Return (XNB - LGW)</td>
                                                        <td>Flight 01 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 02 (XNB - LGW)</td>
                                                        <td>25C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 03 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 04 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                </tbody>
                                            </table>



                                        </div><!-- tp table main -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button class="btn btn-white">
                                                Change Seats
                                            </button>
                                        </div>
                                    </div><!-- responsive table -->
                                </div><!-- tp-table -->
                            </div><!-- fpd box bottom -->
                        </div><!-- fpd-box -->
                        <div class="fpd-box fpd-box-addtl">
                            <div class="fpd-box-top mt-3">
                                <span>
                                    Passenger 03
                                </span> <i class="fa-solid fa-chevron-down fs13 ms-2"></i>
                            </div>
                            <div class="fpd-box-bottom">
                                <div class="tp-table mt-3">
                                    <div class="responsive-table">
                                        <div class="tp-table-main">
                                            <table class="table-flightseat" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 35%;">Journey</th>
                                                        <th>Flight</th>
                                                        <th>Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Outbound Journey -->
                                                    <tr>
                                                        <td>Outbound (LGW - XNB)</td>
                                                        <td>Flight 01 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 02 (LGW - XNB)</td>
                                                        <td>25C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 03 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 04 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>

                                                    <!-- Return Journey -->
                                                    <tr>
                                                        <td>Return (XNB - LGW)</td>
                                                        <td>Flight 01 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 02 (XNB - LGW)</td>
                                                        <td>25C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 03 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 04 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                </tbody>
                                            </table>



                                        </div><!-- tp table main -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button class="btn btn-white">
                                                Change Seats
                                            </button>
                                        </div>
                                    </div><!-- responsive table -->
                                </div><!-- tp-table -->
                            </div><!-- fpd box bottom -->
                        </div><!-- fpd-box -->
                        <div class="fpd-box fpd-box-addtl">
                            <div class="fpd-box-top mt-3">
                                <span>
                                    Passenger 04
                                </span> <i class="fa-solid fa-chevron-down fs13 ms-2"></i>
                            </div>
                            <div class="fpd-box-bottom">
                                <div class="tp-table mt-3">
                                    <div class="responsive-table">
                                        <div class="tp-table-main">
                                            <table class="table-flightseat" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 35%;">Journey</th>
                                                        <th>Flight</th>
                                                        <th>Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Outbound Journey -->
                                                    <tr>
                                                        <td>Outbound (LGW - XNB)</td>
                                                        <td>Flight 01 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 02 (LGW - XNB)</td>
                                                        <td>25C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 03 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 04 (LGW - XNB)</td>
                                                        <td>24C</td>
                                                    </tr>

                                                    <!-- Return Journey -->
                                                    <tr>
                                                        <td>Return (XNB - LGW)</td>
                                                        <td>Flight 01 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 02 (XNB - LGW)</td>
                                                        <td>25C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 03 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Flight 04 (XNB - LGW)</td>
                                                        <td>24C</td>
                                                    </tr>
                                                </tbody>
                                            </table>



                                        </div><!-- tp table main -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button class="btn btn-white">
                                                Change Seats
                                            </button>
                                        </div>
                                    </div><!-- responsive table -->
                                </div><!-- tp-table -->
                            </div><!-- fpd box bottom -->
                        </div><!-- fpd-box -->
                    </div><!-- fpd-seats -->

                    <?php include '../sections/cta/cta-hotels.php';?>

                    <div class="proceed">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-7">
                                <h3 class="mb-0">
                                    Your trip is a few clicks away!
                                </h3>
                            </div>
                            <div class="col-12 col-lg-5 d-flex justify-content-end">
                                <input type="submit" class="btn btn-primary" value="Proceed to checkout" onclick="redirectToPage(event)">
                            </div>
                        </div><!-- row -->
                    </div><!-- proceed -->
                </div><!-- tp-main -->
            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-flights.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>

    <script>
        function redirectToPage(event) {
            event.preventDefault(); // Prevent the default form submission
            window.location.href = '<?= getBaseUrl() ?>/flights/flights-checkout-details.php'; // Redirect to the target page
        }
    </script>

</body>
</html>