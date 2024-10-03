<?php include './config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack Summary Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
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
        <?php include './sections/global/header-nav.php';?>
    </div><!-- main hero -->

    <section class="block search-wrap bggray" id="main-checkout-details">
        <div class="container">

            <div class="pagenavi-checkout navicheckout-flights mb-3">
                <div class="pagenavi-line"></div>
                <div class="pagenavi-line-active"></div>
                <div class="row pagenavi-main">
                    <div class="col-4 navibox current d-flex align-items-start">
                        <div class="navibox-inner">
                            <div class="navicircle"></div>
                            Details
                        </div>
                    </div>
                    <div class="col-4 navibox current d-flex align-items-center">
                        <div class="navibox-inner">
                            <div class="navicircle"></div>
                            Summary
                        </div>
                    </div>
                    <div class="col-4 navibox d-flex align-items-end txt-black">
                        <div class="navibox-inner">
                            <div class="navicircle"></div>
                            Payment
                        </div>
                    </div>
                </div>
            </div>

            <div class="goback fw-medium mb-3">
                <button onclick="goBack()">
                    <i class="fa-solid fa-chevron-left fs-icon me-2"></i> Go Back
                </button>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 tp-sidebar tp-checkout-sidebar tp-checkout-details-sidebar">
                    <h3 class="mb-3 tp-top-heading">
                        Summary
                    </h3>
                    <div class="filters-box totalpurchase">
                        <div>
                            Total Purchase
                        </div>

                        <div class="summary-price">
                            £999.72
                        </div>
                    </div><!-- filters box -->

                    
                    <?php include './sections/checkout/sidebar/flights.php';?>
                    <?php include './sections/checkout/sidebar/hotels.php';?>
                    <?php include './sections/checkout/sidebar/car-hire.php';?>
                    <?php include './sections/checkout/sidebar/experiences.php';?>
                    <?php include './sections/checkout/sidebar/transfer.php';?>
                    <?php include './sections/checkout/sidebar/cruises.php';?>
                    <?php include './sections/checkout/sidebar/rail.php';?>

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
                    </div><!-- filters box -->
                
                </div><!-- tp sidebar -->

                <div class="col-12 col-lg-8 tp-main">
                    <form action="" method="get">
                        <h3 class="summary-top-title">
                            Review Your Booking Below
                        </h3>

                        <?php include './sections/checkout/checkout-summary/flights.php';?>
                        <?php include './sections/checkout/checkout-summary/hotels.php';?>
                        <?php include './sections/checkout/checkout-summary/car-hire.php';?>
                        <?php include './sections/checkout/checkout-summary/experiences.php';?>
                        <?php include './sections/checkout/checkout-summary/transfer.php';?>
                        <?php include './sections/checkout/checkout-summary/cruises.php';?>

                        <div class="proceed mt-5">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-7">
                                    <h3 class="mb-0">
                                        Almost there, a few more clicks
                                    </h3>
                                </div>
                                <div class="col-12 col-lg-5 d-flex justify-content-end">
                                    <input type="submit" class="btn btn-primary" value="Review Booking" onclick="">
                                </div>
                            </div><!-- row -->
                        </div><!-- proceed -->
                    </form>
                </div><!-- col -->
            </div><!-- row -->


        </div>
    </section>

    <?php include './sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>

</body>
</html>