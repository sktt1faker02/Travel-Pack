<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Transfer Purchase Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-transfer.css">
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
                <div class="col-12 mb-4">
                    <h2>
                        Your Purchase Details
                    </h2>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                
                <?php include '../sections/sidebar/transfer.php';?>

                <div class="col-12 col-lg-8 tp-main">
                    <h3 class="mb-3 tp-top-heading">
                        Your Vehicle
                    </h3>
                    <div class="whiteboxbg carhire-box loadmorebox">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="transfers-image">
                                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/bus.jpg" alt="">
                                </div>
                            </div><!-- col -->
                            <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                <div class="row" style="flex:1;">
                                    <div class="col-lg-6 car-hire-title">
                                        <div class="car-hire-boxtitle-main">
                                            <h3>
                                                Shared Premium Shuttle
                                            </h3>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-lg-6 transfers-features col-12 d-flex flex-column">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 transfers-features-left">
                                                <h6>
                                                    Passengers
                                                </h6>
                                                <span>
                                                    Max 3 Passengers
                                                </span>
                                            </div>
                                            <div class="col-12 col-lg-4 transfers-features-mid">
                                                <h6>
                                                    Suitcases
                                                </h6>
                                                <span>
                                                    3 x Suitcases
                                                </span>
                                            </div>
                                            <div class="col-12 col-lg-4 transfers-features-right">
                                                <h6>
                                                    Duration
                                                </h6>
                                                <span>
                                                    90 Mins
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-5 d-flex justify-content-between align-items-center">
                                                <div class="transfersbox-price">
                                                    <h3>
                                                        <span>£67.70 pp</span>
                                                        £135.50
                                                    </h3>
                                                </div><!-- carehirebox -->
                                            </div><!-- col -->
                                            <div class="col-lg-7 d-flex justify-content-end">
                                                <button class="btn btn-white">
                                                    Change Vehicle
                                                </button>
                                            </div><!-- col lg -->
                                        </div><!-- row -->
                                    </div><!-- col -->
                                </div><!-- row -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- whiteboxbg -->                    

                    <div class="tp-table mt-3 transferstable">
                        <h3 class="mb-3 tp-top-heading">
                            Transfer Tables
                        </h3>
                        <div class="responsive-table">
                            <div class="tp-table-main">
                                <table class="table-passenger-names">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Flight Details</th>
                                            <th>Date & Time</th>
                                            <th>Accommodation Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Outbound</td>
                                            <td>
                                                <div>
                                                    <strong>Flight Number</strong><br>
                                                    <span>
                                                        0000
                                                    </span>
                                                </div>
                                                <div class="mt-2">
                                                    <strong>Arriving Terminal</strong><br>
                                                    <span>
                                                        Lorem Ipsum
                                                    </span>
                                                </div>
                                                <div class="mt-2">
                                                    <strong>Departing from Airport</strong><br>
                                                    <span>
                                                        Lorem Ipsum
                                                    </span>
                                                </div>
                                            </td>
                                            <td>03 JUN 2024 at 12:00</td>
                                            <td>
                                                <div>
                                                    <strong>Name</strong><br>
                                                    <span>
                                                        Lorem Ipsum
                                                    </span>
                                                </div>
                                                <div class="mt-2">
                                                    <strong>Phone Number</strong><br>
                                                    <span>
                                                        +44 123456789
                                                    </span>
                                                </div>
                                                <div class="mt-2">
                                                    <strong>Address</strong><br>
                                                    <span>
                                                        Lorem Ipusm,<br>
                                                        Lorem ipsum dolor sit,<br>
                                                        AB 00000
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Return</td>
                                            <td>
                                                <div>
                                                    <strong>Flight Number</strong><br>
                                                    <span>
                                                        0000
                                                    </span>
                                                </div>
                                                <div class="mt-2">
                                                    <strong>Arriving Terminal</strong><br>
                                                    <span>
                                                        Lorem Ipsum
                                                    </span>
                                                </div>
                                                <div class="mt-2">
                                                    <strong>Departing from Airport</strong><br>
                                                    <span>
                                                        Lorem Ipsum
                                                    </span>
                                                </div>
                                            </td>
                                            <td>03 JUN 2024 at 12:00</td>
                                            <td>
                                                <div>
                                                    <strong>Name</strong><br>
                                                    <span>
                                                        Lorem Ipsum
                                                    </span>
                                                </div>
                                                <div class="mt-2">
                                                    <strong>Phone Number</strong><br>
                                                    <span>
                                                        +44 123456789
                                                    </span>
                                                </div>
                                                <div class="mt-2">
                                                    <strong>Address</strong><br>
                                                    <span>
                                                        Lorem Ipusm,<br>
                                                        Lorem ipsum dolor sit,<br>
                                                        AB 00000
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                </table>
                            </div><!-- tp table main -->
                        </div><!-- responsive table -->

                        <div class="d-flex justify-content-end mt-3">
                            <a href="#" class="btn btn-white">
                                Change Details
                            </a>
                        </div>
                    </div><!-- tp table -->

                    <div class="mt-4 tp-main-cta">
                        <div class="tp-main-cta-wrap" style="background-image:url(<?= getBaseUrl() ?>/assets/img/car-hire/car-hire-cta.jpg)">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="ctawhitebox">
                                        <h2 class="largesectiontitle">
                                            Want to experience the local magic?
                                        </h2>
                                        <p>
                                            Book an experience through our endless options of experiences.
                                        </p>
                
                                        <a href="./experiences" class="btn btn-primary">View Experiences</a>
                                    </div><!-- cta whitebox -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- tp main cta wrap -->
                    </div><!-- tp-main cta -->

                    <div class="proceed">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-7">
                                <h3 class="mb-0">
                                    Your journey is a few clicks away!
                                </h3>
                            </div>
                            <div class="col-12 col-lg-5 d-flex justify-content-end">
                                <input type="submit" class="btn btn-primary" value="Proceed to Checkout">
                            </div>
                        </div><!-- row -->
                    </div><!-- proceed -->
                </div><!-- tp-main -->
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/hotels.js"></script>

</body>
</html>