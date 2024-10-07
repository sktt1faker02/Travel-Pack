<?php include './config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baggage Allowances - Travelpack</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/daterangepicker.css">

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
    <div id="innerhero" class="inner-baggage-allowances" style="background-image:url(<?= getBaseUrl() ?>/assets/img/inner/hero-baggage-allowances.jpg)">
        <?php include './sections/global/header-nav.php'; ?>
    </div><!-- main hero -->

    <section class="faqs-section block">
        
        <div class="faqs-section-block">
            <div class="container">
                <div class="faqs-section-top">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-6">
                            <h4 class="fontfam2 fs20 mb-0">
                                Baggage Allowances
                            </h4>
                        </div><!-- col -->
                        <div class="col-6 col-md-6 d-flex justify-content-end">
                            <div class="search-box-ba">
                                <input type="text" placeholder="Search Airline" class="search-input">
                                <button type="submit" class="search-btn">
                                    <i class="fa-solid fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div><!-- row -->  
                </div><!-- faqs section top -->
            </div><!-- container -->

            <div class="baggage-allowances container mt-0 mt-md-1 pt-1">
                <div class="loadmore-boxes-wrap loadmoreboxes-ba">
                    <div class="d-flex loadmorebox row g-4">
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo1.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo3.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo5.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo2.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                    </div><!-- dflex loadmore box-->
                    <div class="d-flex loadmorebox g-4 row">
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo7.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo6.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo4.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo1.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                    </div><!-- dflex loadmore box-->
                    <div class="d-flex loadmorebox g-4 row">
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo2.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo6.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo5.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo7.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                    </div><!-- dflex loadmore box-->
                    <div class="d-flex loadmorebox g-4 row">
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo7.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo6.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo4.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                        <div class="col-12 col-lg-3">
                            <div class="ba-box">
                                <div class="ba-box-top">
                                    <div>
                                        <img src="../travelpack/assets/img/inner/airwaylogo1.png" alt="">
                                    </div>
                                </div><!-- ba box top -->
                                <div class="ba-box-bottom">
                                    <div class="ba-bottom-airways">
                                        British Airways (BA)
                                    </div>
                                    <div class="ba-bottom-options">
                                        <ul>
                                            <li>
                                                <a href="#baggage-allowances">
                                                    Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#online-checkin">
                                                    Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#frequent-flyer">
                                                    Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- ba-box -->
                        </div><!-- col -->
                    </div><!-- dflex loadmore box-->
                </div><!-- loadmore boxes wrap -->
            </div><!-- baggage allowances -->
        </div><!-- faqs section -->
    </section><!-- section -->


    <?php include './sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/home.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/loadmoreboxes.js"></script>

</body>

</html>