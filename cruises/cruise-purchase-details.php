<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Cruise Purchase Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-cruise.css">
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
                    </h2>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                <?php include '../sections/sidebar/cruise.php';?>

                <div class="col-12 col-lg-8 tp-main">
                    <div class="cruise-summary-wrapp">
                        <h3 class="mb-3 tp-top-heading">
                            Your Cruise
                        </h3>      
                        <div class="whiteboxbg cruise-box loadmorebox">
                            <div class="row">
                                <div class="col-lg-4 col-12 d-flex">
                                    <div class="cruise-image">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                    <div class="row" style="flex:1;">
                                        <div class="col-lg-9 car-hire-title">
                                            <div class="car-hire-boxtitle-main">
                                                <h2>
                                                    Spain, Portugal and Canary Islands (Valiant Lady)
                                                </h2>
                                            </div>
                                        </div><!-- col -->
                                        <div class="col-lg-3 col-12 d-flex justify-content-end">
                                            <div class="esd-rating">
                                                5 <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div><!-- col -->
                                    </div><!-- row -->
                                    <div class="row cruise-features mt-3">
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-12 col-lg-4 cruise-features-left">
                                                    <h6>
                                                        Departs
                                                    </h6>
                                                    <span>
                                                        Southampton, UK <br>
                                                        15 Jun 2014
                                                    </span>
                                                </div>
                                                <div class="col-12 col-lg-4 cruise-features-mid">
                                                    <h6>
                                                        Arrives
                                                    </h6>
                                                    <span>
                                                        Southampton, UK <br>
                                                        29 Jun 2014
                                                    </span>
                                                </div>
                                                <div class="col-12 col-lg-4 cruise-features-right">
                                                    <h6>
                                                        Sailing Ventura
                                                    </h6>
                                                    <span>
                                                        14 Nights
                                                    </span>
                                                </div>
                                            </div><!-- row -->
                                        </div><!-- col -->
                                    </div><!-- row -->

                                    <div class="row mt-4 align-items-center">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                                                    <div class="cruisebox-price">
                                                        <h3>
                                                            <span>Inside cabin from</span>
                                                            £949.50
                                                        </h3>
                                                    </div><!-- cruisebox -->
                                                </div><!-- col -->
                                                <div class="col-lg-6 d-flex justify-content-end">
                                                    <button class="btn btn-white">
                                                        Change Cruise
                                                    </button>
                                                </div><!-- col lg -->
                                            </div><!-- row -->                                            
                                        </div><!-- col -->                                        
                                    </div>

                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- whiteboxbg -->
                    </div>

                    <div class="cabins-wrap">
                        <h3 class="mb-3 tp-top-heading mt-4">
                            Selected Cabins
                        </h3>
                        <div class="cruise-main whiteboxbg">
                            <div class="row">
                                <div class="col-12 col-lg-4 d-flex flex1">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3>
                                                Inside Cabins
                                            </h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                            </p>
                                        </div>
                                        <div class="col-lg-3 col-12 d-flex justify-content-end">
                                            <div class="esd-rating">
                                                5 <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div><!-- col -->
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="fdm-content-wrap">
                                                <strong>
                                                    Benefits
                                                </strong>
                                                <ul class="liststyle">
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    </ul>
                                            </div><!-- fdm content wrap -->
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruiseprice-wrap">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12 col-lg-7 offset-lg-5">
                                                        <div class="cruiseprice-box">
                                                            <div class="d-flex fpb-top">
                                                                <div class="cruiseprice">
                                                                    <span>
                                                                        Inside(Single)
                                                                    </span>
                                                                    <div class="cruiseprice-main">
                                                                        £1900
                                                                    </div>
                                                                </div>
                                                                <div class="cruiseprice-option">
                                                                    <button class="btn btn-white">
                                                                        Choose Other
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex fpb-bottom">
                                                                <div class="flightpax">
                                                                    2x Adults
                                                                </div>
                                                                <div class="flightlinks">
                                                                    Appox 100 sq. ft. 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- cruise main -->
                        <div class="cruise-main whiteboxbg">
                            <div class="row">
                                <div class="col-12 col-lg-4 d-flex flex1">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3>
                                                Inside Cabins
                                            </h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                            </p>
                                        </div>
                                        <div class="col-lg-3 col-12 d-flex justify-content-end">
                                            <div class="esd-rating">
                                                5 <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div><!-- col -->
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="fdm-content-wrap">
                                                <strong>
                                                    Benefits
                                                </strong>
                                                <ul class="liststyle">
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                                    </ul>
                                            </div><!-- fdm content wrap -->
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruiseprice-wrap">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12 col-lg-7 offset-lg-5">
                                                        <div class="cruiseprice-box">
                                                            <div class="d-flex fpb-top">
                                                                <div class="cruiseprice">
                                                                    <span>
                                                                        Inside(Single)
                                                                    </span>
                                                                    <div class="cruiseprice-main">
                                                                        £1900
                                                                    </div>
                                                                </div>
                                                                <div class="cruiseprice-option">
                                                                    <button class="btn btn-white">
                                                                        Choose Other
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex fpb-bottom">
                                                                <div class="flightpax">
                                                                    2x Adults
                                                                </div>
                                                                <div class="flightlinks">
                                                                    Appox 100 sq. ft. 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- cruise main -->

                    </div>


                    <?php include '../sections/cta/cta-experiences.php';?>

                    
                    <div class="proceed">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-7">
                                <h3 class="mb-0">
                                    Your journey is a few clicks away!
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
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    
    <script>
        function redirectToPage(event) {
            event.preventDefault(); // Prevent the default form submission
            window.location.href = '<?= getBaseUrl() ?>/cruises/cruise-checkout-details.php'; // Redirect to the target page
        }

        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.cruise-rmore-btn');
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    button.classList.toggle('change');
                    const cruiseDetailsMore = button.closest('.cruisedetailsmore');
                    const contentWrap = cruiseDetailsMore.querySelector('.fdm-content-wrap');
                    if (contentWrap) {
                        contentWrap.classList.toggle('show');
                    }
                });
            });
        });
    </script>
</body>
</html>