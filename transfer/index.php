<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Transfer</title>


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
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
    
</head>
    <div id="herohome">
        <div class="herowrapblur">
            <div class="heroslider">
                <div class="heroslide">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/hero-transfer.jpg" alt="">
                </div>
                <div class="heroslide">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/hero-transfer.jpg" alt="">
                </div>
                <div class="heroslide">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/hero-transfer.jpg" alt="">
                </div>
            </div>
        </div>
        
        <?php include '../sections/global/header-nav.php';?>

        <div id="main-hero">
            <div class="container">
                <div class="heroslider-nav">
                    <div class="heroslider-nav-slide">
                        <h2 class="txt-white">
                            Seamless Transfers, <br>
                            Happy Travels
                        </h2>
                    
                        <p class="hero-text txt-white">
                            London, England
                        </p>
                    </div>
                    <div class="heroslider-nav-slide">
                        <h2 class="txt-white">
                            Aliquam non erat,<br>
                            volutpat risus et
                        </h2>
                    
                        <p class="hero-text txt-white">
                            Kyoto, Japan
                        </p>
                    </div>
                    <div class="heroslider-nav-slide">
                        <h2 class="txt-white">  
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
            <div id="home-searchbar" class="searchbar v-globel-search">
                <div class="searchbar-top mb-md-3 mb-2 row align-items-center">
                    <div class="col-md-5">
                        <h2>
                            Where's next?
                        </h2>
                    </div>
                </div><!-- searchbartop -->

                <?php include '../sections/searchform/main-forms/searchform-transfer.php';?>
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
                                    Transfers from Popular Airports
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

            <div class="sed-slider rowslider mt-4 tpslider-4 firstload">
                <div class="sedboxslide">
                    <div class="sedbox">
                        <img src="<?= getBaseUrl() ?>/assets/img/transfers/transferbox1.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/transfer/transfer-search">
                                        London <br>
                                        Heathrow <br>
                                        Airport
                                    </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-2">
                            </p>

                            <a href="<?= getBaseUrl() ?>/transfer/transfer-search" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->   
                <div class="sedboxslide">
                    <div class="sedbox">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/transferbox2.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/transfer/transfer-search">
                                        Manchester <br>
                                        Airport
                                    </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-2">
                            </p>

                            <a href="<?= getBaseUrl() ?>/transfer/transfer-search" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->   
                <div class="sedboxslide">
                    <div class="sedbox">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/transferbox3.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/transfer/transfer-search">
                                        London <br>
                                        Gatwick <br>
                                        Airport 
                                    </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-2">
                            </p>

                            <a href="<?= getBaseUrl() ?>/transfer/transfer-search" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->
                <div class="sedboxslide">
                    <div class="sedbox">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/transferbox4.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class=""> 
                                    <a href="<?= getBaseUrl() ?>/transfer/transfer-search">
                                        London <br>
                                        Stansted <br>
                                        Airport
                                    </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-2">
                            </p>

                            <a href="<?= getBaseUrl() ?>/transfer/transfer-search" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->   
                <div class="sedboxslide">
                    <div class="sedbox">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/transferbox2.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/transfer/transfer-search">
                                        Private Premium Car
                                    </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-2">
                            </p>
                            <a href="<?= getBaseUrl() ?>/transfer/transfer-search" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->   
                <div class="sedboxslide">
                    <div class="sedbox">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/transferbox1.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/transfer/transfer-search">
                                        Private Premium Car
                                    </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-2">
                            </p>

                            <a href="<?= getBaseUrl() ?>/transfer/transfer-search" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->   
                <div class="sedboxslide">
                    <div class="sedbox">
                        <img src="<?= getBaseUrl() ?>/assets/img/transfers/transferbox1.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/transfer/transfer-search">
                                        London <br>
                                        Heathrow <br>
                                        Airport
                                    </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-2">
                            </p>

                            <a href="<?= getBaseUrl() ?>/transfer/transfer-search" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->   
                <div class="sedboxslide">
                    <div class="sedbox">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/transferbox2.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/transfer/transfer-search">
                                        Manchester <br>
                                        Airport
                                    </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-2">
                            </p>

                            <a href="<?= getBaseUrl() ?>/transfer/transfer-search" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->   
                <div class="sedboxslide">
                    <div class="sedbox">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/transferbox3.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class="">
                                    <a href="<?= getBaseUrl() ?>/transfer/transfer-search">
                                        London <br>
                                        Gatwick <br>
                                        Airport 
                                    </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-2">
                            </p>

                            <a href="<?= getBaseUrl() ?>/transfer/transfer-search" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->
                <div class="sedboxslide">
                    <div class="sedbox">
                    <img src="<?= getBaseUrl() ?>/assets/img/transfers/transferbox4.jpg" alt="">
                        <div class="sed-details">
                            <div class="sed-title">
                                <h3 class=""> 
                                    <a href="<?= getBaseUrl() ?>/transfer/transfer-search">
                                        London <br>
                                        Stansted <br>
                                        Airport
                                    </a>
                                </h3>
                            </div>
                            <p class="txt-blue pb-2">
                            </p>

                            <a href="<?= getBaseUrl() ?>/transfer/transfer-search" class="fw-semibold yph-more">Book Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- sexboxslide -->   
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
    <script src="<?= getBaseUrl() ?>/assets/js/searchoptions.js"></script>

</body>
</html>