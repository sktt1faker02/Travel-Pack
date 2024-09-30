<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Experiences Purchase Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-experiences.css">
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
                <div class="col-12 mb-4 tp-page-title">
                    <h1>
                        Your Purchase Details
                    </h1>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                <?php include '../sections/sidebar/experiences.php';?>

                <div class="col-12 col-lg-8 tp-main">
                    <h3 class="mb-3 tp-top-heading">
                        Experience 01
                    </h3>
                    <div class="whiteboxbg experiencebox">
                        <div class="row">
                            <div class="col-12 col-lg-4 experiences-left">
                                <div class="experiences-image">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencesbox.jpg" alt="">
                                </div><!-- experiences image -->
                            </div><!-- col -->
                            <div class="col-12 col-lg-6 experiences-mid d-flex flex-column justify-content-lg-between">
                                <div class="experiences-mid-top">
                                    <h2>
                                        Harry Potter Warner Bros, Studio Tour with Transport from London
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur. Eget tortor nisl sagittis lorem gravidametus pellentesque lacus pharetra. Pellentesque et sagittis amet tristique duis.Diam vulputate nisi scelerisque aliquet...<a href="#">Read More</a>
                                    </p>
                                </div><!-- experiences mid top -->
                                <div class="experiences-mid-bottom d-flex align-items-center justify-content-lg-between">
                                        
                                    <div class="free-cancellation">
                                        Free Cancellation
                                    </div>

                                    <div class="d-flex flex-column">
                                        <span class="txt-gray fs13">
                                            2 Adults
                                        </span>
                                        <span class="listing-price">
                                            £129.72
                                        </span>
                                    </div>
                                </div>
                            </div><!-- col -->

                            <div class="col-lg-2 experiences-right d-flex align-items-end flex-column justify-content-between">
                                <div class="esd-rating">
                                    5 <i class="fa-solid fa-star"></i>
                                </div>
                                
                                <button class="btn btn-white">
                                    Change Details
                                </button>
                            </div>
                        </div><!-- row -->
                    </div><!-- whitebox -->


                    <?php include '../sections/cta/cta-experiences.php';?>

                    <div class="proceed">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-7">
                                <h3 class="mb-0">
                                    Your event is a few clicks away!
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
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>

    <script>
        function redirectToPage(event) {
            event.preventDefault(); // Prevent the default form submission
            window.location.href = '<?= getBaseUrl() ?>/experiences/experiences-checkout-details.php'; // Redirect to the target page
        }
    </script>

</body>
</html>