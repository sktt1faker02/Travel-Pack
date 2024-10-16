<?php include './config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack Checkout Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
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

            <div class="row">
                <div class="col-12 mb-4 tp-page-title">
                    <h1>
                        Additional Details
                    </h1>
                </div><!-- col -->
            </div><!-- row -->

            <div class="goback fw-medium mb-3">
                <button onclick="goBack()">
                    <i class="fa-solid fa-chevron-left fs-icon me-2"></i> Go Back
                </button>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 tp-sidebar tp-checkout-sidebar">
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
                        <div class="checkout-flights">
                            <h3>
                                Flights
                            </h3>
                            <?php include './sections/checkout/main/flights.php';?>
                        </div>
                        <div class="checkout-hotels">
                            <h3>
                                Hotels
                            </h3>
                            <?php include './sections/checkout/main/hotels.php';?>
                        </div>
                        <div class="checkout-car-hire">
                            <h3>
                                Car Hire
                            </h3>
                            <?php include './sections/checkout/main/car-hire.php';?>
                        </div>
                        <div class="checkout-experiences">
                            <h3>
                                Experiences
                            </h3>
                            <?php include './sections/checkout/main/experiences.php';?>
                        </div>
                        <div class="checkout-transfers mt-4">
                            <h3>
                                Transfers
                            </h3>
                            <?php include './sections/checkout/main/transfers.php';?>
                        </div>
                        <div class="checkout-cruises mt-4">
                            <h3>
                                Cruises
                            </h3>
                            <?php include './sections/checkout/main/cruises.php';?>
                        </div>
                        <div class="checkout-rails mt-4">
                            <h3>
                                Rail
                            </h3>
                            <?php include './sections/checkout/main/rail.php';?>
                        </div>

                        <div class="proceed1">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-7">
                                </div>
                                <div class="col-12 col-lg-5 d-flex justify-content-end">
                                    <input type="submit" class="btn btn-primary" value="Save and Proceed" onclick="redirectToPage(event)">
                                </div>
                            </div><!-- row -->
                        </div><!-- proceed -->
                    </form>
                </div>
            </div><!-- row -->
        </div>
    </section>

    <?php include './sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>

    <script>
        function redirectToPage(event) {
            event.preventDefault(); // Prevent the default form submission
            window.location.href = '<?= getBaseUrl() ?>/experiences/experiences-checkout-payment.php'; // Redirect to the target page
        }
    </script>

</body>
</html>