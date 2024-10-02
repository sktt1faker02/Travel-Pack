<?php include './config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations - Travelpack</title>

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
    <div id="innerhero" style="background-image:url(<?= getBaseUrl() ?>/assets/img/inner/hero-destinations.jpg)">
        <?php include './sections/global/header-nav.php'; ?>
    </div><!-- main hero -->

    <section class="destinations-section block">
        <div class="container">

            <div class="destinations-wrap">
                <h3 class="mb-4">
                    Explore the globe with our curated selection of top travel destinations.
                </h3>
                <div class="">
                    <div class="loadmore-boxes-wrap loadmoreboxes-destinations">
                        <div class="d-flex loadmorebox row g-4">
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination1.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Africa</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination2.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Bhutan</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination3.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Canada</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination4.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Caribbean</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                        </div>

                        <div class="d-flex loadmorebox row g-4">
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination5.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Cruise</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination6.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Europe</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination7.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Far East</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination8.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">India</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                        </div>

                        <div class="d-flex loadmorebox row g-4">
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination9.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Africa</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination10.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Bhutan</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination11.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Canada</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination12.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Caribbean</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                        </div><!-- row -->
                        
                        <div class="d-flex loadmorebox row g-4">
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination13.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Cruise</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination14.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Europe</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination15.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">Far East</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                            
                            <div class="col-12 col-lg-3">
                                <div class="sedbox" style="width: 100%; display: inline-block;">
                                    <div class="sedtop">
                                        <div class="yph-price global-price-tag">
                                            <a href="" tabindex="0">From <strong>£600pp</strong></a>
                                        </div>
                                    </div>
                                    <img src="<?= getBaseUrl() ?>/assets/img/inner/destination16.jpg" alt="">
                                    <div class="sed-details" style="height: 159px;">
                                        <div class="sed-title">
                                            <h3 class="mb-5 pb-4">India</h3>
                                        </div>
                                        <a href="#" class="fw-semibold yph-more" tabindex="0">Read More <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>                        
                            </div><!-- col -->
                        </div>
                    </div><!-- loadmore boxes -->
                </div><!-- loadmoreboxes-destination -->

                <div class="loadmore-nav mx-auto mt-5">
                    <div class="loadmore-navdetails">
                        1-<span class="loadmore-number"></span>
                        of
                        <span class="loadmore-total">

                        </span>
                    </div>
                    <div class="loadmore-gauge">
                        <div class="loadmore-gauge-bar"></div>
                    </div>
                    <button class="btn btn-white loadmorebtn mt-3">
                        Load More
                    </button>
                </div><!-- load more -->
                
            </div><!-- destinationswrap -->

        </div><!-- container -->
    </section>

    <?php include './sections/global/cta.php'; ?>

    <?php include './sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/loadmoreboxes.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/home.js"></script>

</body>

</html>