<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Car Hire</title>

    <?php include './links.php';?>
</head>

    <div id="herohome">

        <div class="herowrapblur">
            <div class="heroslider">
                <div class="heroslide">
                    <img src="<?= getBaseUrl() ?>/assets/img/car-hire/hero-car-hire.jpg" alt="">
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
                            Drive in Style, <br>
                            Go Anywhere
                        </h2>
                    
                        <p class="hero-text txt-white">
                            Banff, Canada
                        </p>
                    </div>
                    <div class="heroslider-nav-slide">
                        <h2 class="txt-white">
                            Aliquam non erat,<br>
                            volutpat risus et
                        </h1>
                    
                        <p class="hero-text txt-white">
                            Kyoto, Japan
                        </p>
                    </div>
                    <div class="heroslider-nav-slide">
                        <h2 class="txt-white">
                            Quisque quis metus<br/>
                            fringilla mollis nec
                        </h1>
                    
                        <p class="hero-text txt-white">
                            Boracay, Philippines
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="home-searchbar" class="searchbar">
                <div class="searchbar-top mb-md-3 mb-2 row align-items-center">
                    <div class="col-md-6">
                        <h2>
                            Where's next?
                        </h2>
                    </div>
                </div><!-- searchbartop -->
                
                <?php include '../sections/searchform/main-forms/searchform-car-hire.php';?>
            </div><!-- searchbar -->
        </div><!-- container -->

        <div class="exciting-deals">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="exciting-deals-heading">
                            <div class="row align-items-center">
                                <div class="col-8 col-md-8">
                                    <h3 class="mb-0">
                                        Car Hire in Popular Destinations                                        </a>
                                    </h3>
                                </div>
                                <div class="col-4 col-md-4 d-flex justify-content-end">
                                    <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php" class="fw-semibold view-all">View All <i class="fa-solid fa-chevron-right"></i></a>
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
                                    <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                        From <strong>£22pp</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="esd-continent">
                                <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                    Europe
                                </a>
                            </div>
                        </div>
                        <img src="<?= getBaseUrl() ?>/assets/img/car-hire/carhirebox1.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                    Manchester                                        </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-5">
                            </p>

                            <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->
                <div class="sedboxslide">
                    <div class="sedbox">
                        <div class="sedtop">
                            <div class="yellowtagwrap">
                                <div class="yph-price global-price-tag">
                                    <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                        From <strong>£22pp</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="esd-continent">
                                <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                    Europe
                                </a>
                            </div>
                        </div>
                        <img src="<?= getBaseUrl() ?>/assets/img/car-hire/carhirebox2.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                    Europe                                        </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-5">
                            </p>

                            <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>   
                </div>
                <div class="sedboxslide">
                    <div class="sedbox">
                        <div class="sedtop">
                            <div class="yellowtagwrap">
                                <div class="yph-price global-price-tag">
                                    <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                        From <strong>£22pp</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="esd-continent">
                                <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                    Europe
                                </a>
                            </div>
                        </div>
                        <img src="<?= getBaseUrl() ?>/assets/img/car-hire/carhirebox3.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="mb-5 pb-4">
                                    Bath                                        </a>
                                </h3>
                            </div>

                            <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>   
                </div>
                <div class="sedboxslide">
                    <div class="sedbox">
                        <div class="sedtop">
                            <div class="yellowtagwrap">
                                <div class="yph-price global-price-tag">
                                    <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                        From <strong>£22pp</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="esd-continent">
                                <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                    Europe
                                </a>
                            </div>
                        </div>
                        <img src="<?= getBaseUrl() ?>/assets/img/car-hire/carhirebox4.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                    Oxford                                        </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-5">
                            </p>

                            <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sedboxslide">
                    <div class="sedbox">
                        <div class="sedtop">
                            <div class="yellowtagwrap">
                                <div class="yph-price global-price-tag">
                                    <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                        From <strong>£22pp</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="esd-continent">
                                <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                    North America
                                </a>
                            </div>
                        </div>
                        <img src="<?= getBaseUrl() ?>/assets/img/car-hire/carhirebox5.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php">
                                    Europe                                        </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-5">
                            </p>

                            <a href="<?= getBaseUrl() ?>/car-hire/car-hire-search.php" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>     
                </div>       
            </div><!-- sed slider wrap -->
        </div><!-- exciting deals -->
    </div>
    
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

    <script>
        function redirectToPage(event) {
            window.location.href = '<?= getBaseUrl() ?>/car-hire/car-hire-search.php';
        }
    </script>

</body>
</html>