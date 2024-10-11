<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Cruises</title>


    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
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

<div id="herohome" class="dark-hero-slider">

    <div class="herowrapblur">
        <div class="heroslider">
            <div class="heroslide">
                <img src="<?= getBaseUrl() ?>/assets/img/hero/hero-cruises.jpg" alt="">
            </div>
            <div class="heroslide">
                <img src="<?= getBaseUrl() ?>/assets/img/hero/hero-cruises.jpg" alt="">
            </div>
            <div class="heroslide">
                <img src="<?= getBaseUrl() ?>/assets/img/hero/hero-cruises.jpg" alt="">
            </div>
        </div>
    </div>

    <?php include '../sections/global/header-nav.php'; ?>

    <div id="main-hero">
        <div class="container">
            <div class="heroslider-nav">
                <div class="heroslider-nav-slide">
                    <h2 class="text-navy">
                        Explore The <br>
                        Open Seas
                    </h2>

                    <p class="hero-text txt-navy">
                        Oslo, Norway
                    </p>
                </div>
                <div class="heroslider-nav-slide">
                    <h2 class="text-navy">
                        Aliquam non erat,<br>
                        volutpat risus et
                    </h2>

                    <p class="hero-text txt-navy">
                        Kyoto, Japan
                    </p>
                </div>
                <div class="heroslider-nav-slide">
                    <h2 class="text-navy">
                        Quisque quis metus<br />
                        fringilla mollis nec
                    </h2>

                    <p class="hero-text txt-navy">
                        Boracay, Philippines
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="cruise-searchbar" class="searchbar">
            <div class="searchbar-top mb-md-3 mb-2 row align-items-center">
                <div class="col-md-5">
                    <h2>
                        Where's next?
                    </h2>
                </div>
            </div><!-- searchbartop -->


            <div class="searchbar-main" id="searchbar-cruises">
                <div class="searchbar-main-inner">
                    <form name="experiences-search" id="cruises-search" method="post" action="">
                        <div class="searchform-inner">
                            <div class="searchform-row">
                                <div class="searchbar-inputwrap flex100-mobile mobile-last-col">
                                    <input type="text" class="form-control" autocomplete="cruise" name="cru-request" id="cruises-where" placeholder="Cruise, Destination...">
                                </div>
                                <div class="searchbar-inputwrap flex7 flex100-mobile mobile-last-col mobile-bordertop">
                                    <input type="text" class="form-control date cruises-date-picker" name="cru-from-date" id="cruises-when" placeholder="Departure">
                                    <div class="select_arrow"></div>
                                </div>

                                <div class="searchbar-inputwrap change-text-wrap searchbar-select flex7 flex100-mobile mobile-last-col mobile-bordertop">
                                    <input class="form-control dropdownfilter-click input-change-text" placeholder="Guests and Rooms" readonly>
                                    <div class="select_arrow"></div>
                                    <div class="dropdownfilter-main dropdown-filter-cruises">
                                        <div class="dropdown-filter dd-filter-max-99 dropdown-filter-cabin-count">
                                            <div class="dd-filter-inner">
                                                <div class="dd-filter-wrap">
                                                    <div class="dd-filter">
                                                        <div class="dd-filter-left">
                                                            <label>
                                                                Cabins
                                                            </label>
                                                        </div>
                                                        <div class="dd-filter-right">
                                                            <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                            <input type="text" value="01" readonly>
                                                            <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="dd-filter dd-filter-max-9 dropdown-filter-adults-count dropdown-filter-travellers-count">
                                                        <div class="dd-filter-left">
                                                            <label>
                                                                Adults
                                                            </label>
                                                            <small>Aged 16+</small>
                                                        </div>
                                                        <div class="dd-filter-right">
                                                            <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                            <input type="text" value="02" readonly>
                                                            <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="dd-filter dd-filter-max-9 dropdown-filter-children-count dropdown-filter-travellers-count">
                                                        <div class="dd-filter-left">
                                                            <label>
                                                                Children
                                                            </label>
                                                            <small>Aged 2 to 11</small>
                                                        </div>
                                                        <div class="dd-filter-right">
                                                            <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                            <input type="text" value="00" readonly>
                                                            <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div><!-- dd filter wrap -->
                                                <div class="dd-filtertext">
                                                    <p>
                                                        Your age at time of travel must be valid for the age category booked.
                                                    </p>
                                                    <p>
                                                        Age limits and policies for travelling with children may vary so please check before booking.
                                                    </p>
                                                </div><!-- fitertext -->
                                                <div class="dd-filterbtn">
                                                    <button class="btn btn-primary">
                                                        Apply
                                                    </button>
                                                </div>
                                            </div><!-- dd filter inner -->
                                        </div>
                                    </div>
                                </div><!-- searchabr inputwrap -->

                                <div class="searchnow-btn searchbar-inputwrap flex6 flex100-mobile mobile-bordertop">
                                    <a class="btn-typ2 searchnowbtn btn btn-primary" href="javascript:void(0);" title="Search Now">Search Now</a>
                                </div>
                            </div><!-- searchform-row -->
                        </div><!-- searchform-inner -->
                    </form><!-- form -->
                </div>
            </div><!-- searchbar main -->
        </div><!-- searchbar -->
    </div><!-- container -->

    <div class="exciting-deals">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="exciting-deals-heading opacity-7">
                        <div class="row align-items-center">
                            <div class="col-8 col-md-8">
                                <h3 class="mb-0">
                                    Seek Extraordinary Destinations
                                </h3>
                            </div>
                            <div class="col-4 col-md-4 d-flex justify-content-end">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search" class="fw-semibold view-all">View All <i class="fa-solid fa-chevron-right"></i></a>
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
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/cruise-slide1.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    Carribbean
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div><!-- sexboxslide -->
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/europe.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    Europe
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/translantic.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="mb-5 pb-4">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    Transatlantic
                                </a>
                            </h3>
                        </div>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/cruise-slide4.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    North America
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/cruise-slide1.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    Carribbean
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div><!-- sexboxslide -->
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/europe.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    Europe
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/translantic.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="mb-5 pb-4">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    Transatlantic
                                </a>
                            </h3>
                        </div>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/cruise-slide4.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    North America
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/cruise-slide1.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    Carribbean
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div><!-- sexboxslide -->
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/europe.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    Europe
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/translantic.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="mb-5 pb-4">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    Transatlantic
                                </a>
                            </h3>
                        </div>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="sedboxslide">
                <div class="sedbox">
                    <div class="sedtop">
                        <div class="yellowtagwrap">
                            <div class="yph-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    From <strong>£22pp</strong>
                                </a>
                            </div>
                        </div>
                        <div class="esd-continent">
                            <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                Europe
                            </a>
                        </div>
                    </div>
                    <img src="<?= getBaseUrl() ?>/assets/img/cruise/cruise-slide4.jpg" alt="">
                    <div class="sed-details">
                        <div class="sed-title">
                            <h3 class="">
                                <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php">
                                    North America
                                </a>
                            </h3>
                        </div>
                        <p class="txt-blue pb-5">
                        </p>

                        <a href="<?= getBaseUrl() ?>/cruises/cruises-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

        </div><!-- sed slider wrap -->
    </div><!-- exciting deals -->
</div><!-- hero home -->


<?php include '../sections/global/dealstravels.php'; ?>
<?php include '../sections/global/cta.php'; ?>

<?php include '../sections/global/footer.php'; ?>

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