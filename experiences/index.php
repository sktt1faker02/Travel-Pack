<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Experiences</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-experiences.css">
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
<body class="experiences-main">
    <div id="herohome">
        <div class="herowrapblur">
            <div class="heroslider">
                <div class="heroslide">
                    <img src="<?= getBaseUrl() ?>/assets/img/hero/hero-experience.jpg" alt="">
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
                        <h2 class="txt-white noshadow">
                        Unforgettable <br>
                        Experiences Await
                        </h2>
                    
                        <p class="hero-text txt-white">
                            Serbia
                        </p>
                    </div>
                    <div class="heroslider-nav-slide">
                        <h2 class="txt-white noshadow">
                            Aliquam non erat,<br>
                            volutpat risus et
                        </h2>
                    
                        <p class="hero-text txt-white">
                            Kyoto, Japan
                        </p>
                    </div>
                    <div class="heroslider-nav-slide">
                        <h2 class="txt-white noshadow">
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
            <div id="experiences-searchbar" class="searchbar">
                <div class="searchbar-top mb-md-3 mb-2 row align-items-center">
                    <div class="col-md-6">
                        <h2>
                            Where's next?
                        </h2>
                    </div>
                </div><!-- searchbartop -->

                <?php include '../sections/searchform/main-forms/searchform-experiences.php';?>
            </div><!-- searchbar -->
        </div><!-- container -->

        <div class="exciting-deals-top position-relative z-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="exciting-deals-heading">
                            <div class="row align-items-center">
                                <div class="col-8 col-md-8">
                                    <h3 class="mb-0">
                                        Seek your unforgettable experience near you
                                    </h3>
                                </div>
                                <div class="col-4 col-md-4 d-flex justify-content-end">
                                    <a href="#" class="fw-semibold view-all">View All <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div><!-- row -->
                        </div><!-- exciting deals -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="esd-box-slider esd-box-slider-home rowslider tpslider-2 firstload mt-4">
                <div class="d-flex esd-box">
                    <div class="col-12 col-md-6 px-0 d-flex">
                        <div class="esd-left">
                            <div class="hurry-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                    Summer Special
                                </a>
                            </div>
                            <div class="esd-left-slider position-relative">
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox1.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox1.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox1.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox1.jpg" alt="">
                                </a>
                            </div><!-- esd left slider -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-md-6 esd-right-main p-0">
                        <div class="esd-right esd-right-content">
                            <div class="esd-right-top">
                                <div class="esd-right-top-title">
                                    <div class="esd-right-top-title-top">
                                        <div class="esd-continent">
                                            <a href="#">
                                                Europe
                                            </a>
                                        </div>
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="esd-right-title-main">
                                        <h3>
                                            <a href="#">
                                                Experience art & culture in London
                                                Experience art & culture in London
                                                Experience art & culture in London
                                            </a>
                                        </h3>
                                    </div>
                                </div><!-- esd right top title top -->
                                <div class="esd-right-top-description">
                                    <p>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris egestas auctor nunc. Maecenas quis magna diam. Pellentesque pretium pretium enim, eget posuere sapien. Aenean sagittis turpis mi, sit amet vulputate eros vestibulum in. Vivamus et diam ultricies ligula pellentesque rutrum. Pellentesque ipsum est, faucibus et ipsum nec, pellentesque ultricies ante. Nulla facilisi. Proin luctus nisi at accumsan posuere.
                                    </p>
                                </div>
                            </div><!-- esd-right-top -->
                            <div class="esd-right-bottom d-flex align-items-center justify-content-between">
                                <div class="esd-right-bottom-read-more">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        View All <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="esd-right-bottom-price">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        £699pp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- esd box -->
                <div class="d-flex esd-box">
                    <div class="col-12 col-md-6 px-0 d-flex">
                        <div class="esd-left">
                            <div class="hurry-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                    Summer Special
                                </a>
                            </div>
                            <div class="esd-left-slider position-relative">
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox1.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox1.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox1.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox1.jpg" alt="">
                                </a>
                            </div><!-- esd left slider -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-md-6 esd-right-main p-0">
                        <div class="esd-right esd-right-content">
                            <div class="esd-right-top">
                                <div class="esd-right-top-title">
                                    <div class="esd-right-top-title-top">
                                        <div class="esd-continent">
                                            <a href="#">
                                                Europe
                                            </a>
                                        </div>
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="esd-right-title-main">
                                        <h3>
                                            <a href="#">
                                                Experience art & culture in London
                                                Experience art & culture in London
                                                Experience art & culture in London
                                            </a>
                                        </h3>
                                    </div>
                                </div><!-- esd right top title top -->
                                <div class="esd-right-top-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <ul>
                                        <li>10 Nights</li>
                                        <li>Half Board</li>
                                        <li>3 Attractions</li>
                                    </ul>
                                </div>
                            </div><!-- esd-right-top -->
                            <div class="esd-right-bottom d-flex align-items-center justify-content-between">
                                <div class="esd-right-bottom-read-more">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        Read More <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="esd-right-bottom-price">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        £699pp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- esd box -->
                <div class="d-flex esd-box">
                    <div class="col-12 col-md-6 px-0 d-flex">
                        <div class="esd-left">
                            <div class="hurry-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                    Summer Special
                                </a>
                            </div>
                            <div class="esd-left-slider position-relative">
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox2.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox2.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox2.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/slidebox2.jpg" alt="">
                                </a>
                            </div><!-- esd left slider -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-md-6 esd-right-main p-0">
                        <div class="esd-right esd-right-content">
                            <div class="esd-right-top">
                                <div class="esd-right-top-title">
                                    <div class="esd-right-top-title-top">
                                        <div class="esd-continent">
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Asia
                                            </a>
                                        </div>
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="esd-right-title-main">
                                        <h3>
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Kyoto, Japan
                                            </a>
                                        </h3>
                                    </div>
                                </div><!-- esd right top title top -->
                                <div class="esd-right-top-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <ul>
                                        <li>10 Nights</li>
                                        <li>Half Board</li>
                                        <li>3 Attractions</li>
                                    </ul>
                                </div>
                            </div><!-- esd-right-top -->
                            <div class="esd-right-bottom d-flex align-items-center justify-content-between">
                                <div class="esd-right-bottom-read-more">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        Read More <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="esd-right-bottom-price">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        £699pp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- esd box -->
                <div class="d-flex esd-box">
                    <div class="col-12 col-md-6 px-0 d-flex">
                        <div class="esd-left">
                            <div class="hurry-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                    Summer Special
                                </a>
                            </div>
                            <div class="esd-left-slider position-relative">
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                            </div><!-- esd left slider -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-md-6 esd-right-main p-0">
                        <div class="esd-right esd-right-content">
                            <div class="esd-right-top">
                                <div class="esd-right-top-title">
                                    <div class="esd-right-top-title-top">
                                        <div class="esd-continent">
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Asia
                                            </a>
                                        </div>
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="esd-right-title-main">
                                        <h3>
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Kyoto, Japan
                                            </a>
                                        </h3>
                                    </div>
                                </div><!-- esd right top title top -->
                                <div class="esd-right-top-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <ul>
                                        <li>10 Nights</li>
                                        <li>Half Board</li>
                                        <li>3 Attractions</li>
                                    </ul>
                                </div>
                            </div><!-- esd-right-top -->
                            <div class="esd-right-bottom d-flex align-items-center justify-content-between">
                                <div class="esd-right-bottom-read-more">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        Read More <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="esd-right-bottom-price">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        £699pp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- esd box -->
                <div class="d-flex esd-box">
                    <div class="col-12 col-md-6 px-0 d-flex">
                        <div class="esd-left">
                            <div class="hurry-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                    Summer Special
                                </a>
                            </div>
                            <div class="esd-left-slider position-relative">
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                            </div><!-- esd left slider -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-md-6 esd-right-main p-0">
                        <div class="esd-right esd-right-content">
                            <div class="esd-right-top">
                                <div class="esd-right-top-title">
                                    <div class="esd-right-top-title-top">
                                        <div class="esd-continent">
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Asia
                                            </a>
                                        </div>
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="esd-right-title-main">
                                        <h3>
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Kyoto, Japan
                                            </a>
                                        </h3>
                                    </div>
                                </div><!-- esd right top title top -->
                                <div class="esd-right-top-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <ul>
                                        <li>10 Nights</li>
                                        <li>Half Board</li>
                                        <li>3 Attractions</li>
                                    </ul>
                                </div>
                            </div><!-- esd-right-top -->
                            <div class="esd-right-bottom d-flex align-items-center justify-content-between">
                                <div class="esd-right-bottom-read-more">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        Read More <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="esd-right-bottom-price">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        £699pp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- esd box -->
            </div><!-- slider -->
        </div><!-- exciting deals -->
    </div><!-- herohome -->

    <div class="exciting-deals">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="exciting-deals-heading1">
                        <div class="row align-items-center">
                            <div class="col-8 col-md-8">
                                <h3 class="mb-0">
                                    More experiences near you
                                </h3>
                            </div>
                            <div class="col-4 col-md-4 d-flex justify-content-end">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div><!-- row -->
                    </div><!-- exciting deals -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="sed-slider rowslider tpslider-4 firstload mt-4">
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencescard1.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                    Manchester
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div><!-- sexboxslide -->
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencescard2.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                    Europe
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>   
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencescard3.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="mb-5 pb-4">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                    Bath
                                </a>
                            </h3>
                        </div>

                        <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>   
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencescard4.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                    Oxford
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                North America
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencescard5.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php">
                                    Europe
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/experiences/experiences-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>     
            </div>       
        </div><!-- sed slider wrap -->
    </div><!-- exciting deals -->

    <?php include '../sections/global/dealstravels.php';?>

    <?php include '../sections/global/cta.php';?>

    <?php include '../sections//global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/home.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar.js"></script>
    

</body>
</html>