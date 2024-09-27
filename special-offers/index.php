<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Special Offers</title>


    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-special-offers.css">
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
</head>

<body class="special-offers-main">
    <div id="herohome" class="dark-hero-slider">
        <div class="herowrapblur">
            <div class="heroslider">
                <div class="heroslide">
                    <img src="<?= getBaseUrl() ?>/assets/img/special-offers/hero-special-offers.jpg" alt="">
                </div>
                <div class="heroslide">
                    <img src="" alt="">
                </div>
                <div class="heroslide">
                    <img src="" alt="">
                </div>
            </div>
        </div>

        <?php include '../sections/global/header-nav.php';?>

        <div id="main-hero">
            <div class="container">
                <div class="heroslider-nav">
                    <div class="heroslider-nav-slide">
                        <h2 class="txt-white">
                            Uncover magic <br>
                            with our deals
                        </h2>
                    
                        <p class="hero-text txt-white noshadow">
                            Bodhum, Turkey
                        </p>
                    </div>
                    <div class="heroslider-nav-slide">
                        <h2 class="txt-blue">
                            Aliquam non erat,<br>
                            volutpat risus et
                        </h2>
                    
                        <p class="hero-text txt-white">
                            Kyoto, Japan
                        </p>
                    </div>
                    <div class="heroslider-nav-slide">
                        <h2 class="txt-blue">
                            Quisque quis metus<br/>
                            fringilla mollis nec
                        </h2>
                    
                        <p class="hero-text txt-white">
                            Boracay, Philippines
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="special-offers-searchbar" class="searchbar">
                <div class="searchbar-top mb-2 mb-md-3 row align-items-center">
                    <div class="col-md-5">
                        <h2 class="mb-3">
                            Where's next?
                        </h2>
                    </div>
                </div><!-- searchbartop -->
                
                <?php include '../sections/searchform/main-forms/searchform-special-offers.php';?>
            </div><!-- searchbar -->
        </div><!-- container -->

        <section class="" id="perfect-holiday">
            <div class="container">
                <div class="row mb-3 mb-lg-4 align-items-center">
                    <div class="col-12 col-lg-12 hero-perfect-holiday">
                        <h2 class="homesectiontitle">
                            Your Perfect Holiday
                        </h2>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="rowslider tpslider-2  perfectholidayslider firstload">
                <div class="yphbox innerrowslider">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            Save <strong>15%</strong> On Hotel Bookings 
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/home/yph1.jpg" alt="">
                    <div class="yph-details">
                        <div class="yph-title">
                            <h3>
                                Kids Holidays
                            </h3>
                        </div>

                        <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="yphbox innerrowslider">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            Save <strong>15%</strong> On Hotel Bookings 
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/home/yph2.jpg" alt="">
                    <div class="yph-details">
                        <div class="yph-title">
                            <h3>
                                Couple Holidays
                            </h3>
                        </div>

                        <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="yphbox innerrowslider">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            Save <strong>15%</strong> On Hotel Bookings 
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/home/yph2.jpg" alt="">
                    <div class="yph-details">
                        <div class="yph-title">
                            <h3>
                                Couple Holidays
                            </h3>
                        </div>

                        <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="yphbox innerrowslider">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            Save <strong>15%</strong> On Hotel Bookings 
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/home/yph2.jpg" alt="">
                    <div class="yph-details">
                        <div class="yph-title">
                            <h3>
                                Couple Holidays
                            </h3>
                        </div>

                        <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="yphbox innerrowslider">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            Save <strong>15%</strong> On Hotel Bookings 
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/home/yph2.jpg" alt="">
                    <div class="yph-details">
                        <div class="yph-title">
                            <h3>
                                Couple Holidays
                            </h3>
                        </div>

                        <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="yphbox innerrowslider">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            Save <strong>15%</strong> On Hotel Bookings 
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/home/yph2.jpg" alt="">
                    <div class="yph-details">
                        <div class="yph-title">
                            <h3>
                                Couple Holidays
                            </h3>
                        </div>

                        <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div><!-- slider -->
        </section>
    </div><!-- hero home -->

    <section class="block rightsideslider" id="extraordinary-destinations">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-12 col-lg-6">
                    <h2 class="homesectiontitle">
                        Seek Extraordinary Destinations
                    </h2>
                </div><!-- col -->
                <div class="col-12 col-lg-6 d-flex justify-content-end">
                    <a href="#" class="fw-semibold view-all">View All <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
        <div class="sed-slider rowslider tpslider-4 firstload mt-4">
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="#">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="#">
                            Asia
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed1.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Japan
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="#">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="#">
                            Asia
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed2.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            China
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="#">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="#">
                            Canada
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed3.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Canada
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="#">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="#">
                            Europe
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed4.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Greece
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="#">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="#">
                            Europe
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed4.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Greece
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="#">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="#">
                            Europe
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed4.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Greece
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div><!-- sed slider -->
    </section> 

    <?php include '../sections/global/dealstravels.php';?>

    <?php include '../sections/global/cta.php';?>

    <?php include '../sections//global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/home.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar.js"></script>

</body>
</html>