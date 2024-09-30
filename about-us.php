<?php include './config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Travelpack</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="./assets/css/daterangepicker.css">

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
    <div id="innerhero" class="inner-about" style="background-image:url(<?= getBaseUrl() ?>/assets/img/inner/about1.jpg)">
        <?php include './sections/global/header-nav.php'; ?>
    </div><!-- main hero -->


    <section class="block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                    <h3 class="fs32 mb-4">
                        Travelpack have been offering travel advice and making bookings since November 1981. 
                    </h3>
                    <p class="fs23 fw-medium txt-black mb-4 pb-2">
                        We are now one of the UK's largest independent travel companies specialising in tours, holidays and flights to destinations around the world including India, Indian Ocean, USA, the Far East, Middle East, Africa, Canada, Florida and the Caribbean.
                    </p>
                    <a href="#" class="btn btn-primary">
                        About Us
                    </a>
                </div><!-- col -->
                <div class="col-12 col-lg-4 offset-lg-1">
                </div>

            </div><!-- row -->
        </div><!-- container -->
    </section><!-- section -->

    <section class="block our-expertise bggray" id="deals-travel-inspiration">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 text-lg-start">
                    <div class="mb-4 pb-1 deals-travel-inspiration-top nobr">
                        <h4 class="">
                            Our Expertise
                        </h4>

                        <p>
                            As an independent travel company, not affiliated to any other travel company or airline, we can ensure you always get the best deal.
                        </p>
                        <p>
                            We search over <strong>90 airlines and 1,000s of hotels</strong> to allow you to take advantage of the many great value deals that airlines and hotels offer.
                        </p>
                    </div>

                    <a href="" class="btn btn-primary">
                        Contact Us
                    </a>
                </div><!-- col -->

                <div class="col-12 col-lg-6 dti-right position-relative mt-5 mt-lg-0">
                    <div class="dti-right-img-wrap">
                        <div class="dti-right-img dti-right-img1">
                            <div class="yph-price global-price-tag">
                                <a href="">
                                    From <strong>£40 p/n</strong> 
                                </a>
                            </div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/about2.jpg" alt="">

                            <a href="" class="btn btn-primary">
                                Search Flights
                            </a>
                        </div>
                        <div class="dti-right-img dti-right-img2">
                            <div class="yph-price global-price-tag">
                                <a href="">
                                    From <strong>£40 p/n</strong> 
                                </a>
                            </div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/about3.jpg" alt="">

                            <a href="" class="btn btn-primary">
                                Search Flights
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div>
    </section>
    
    <section class="block" id="our-achievements">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h3>
                        Our Achievements
                    </h3>

                    <p class="txt-gray mt-4 fs18">
                        With over 28 years experience, we have specialist destination knowledge enabling us to offer our customers a wide range of independent tours, holidays and tailor-made itineraries.
                    </p>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row g-4 align-items-top pt-4">
                <div class="col-12 col-md-6 d-flex">
                    <div class="our-achievements-box txt-black">
                        <p class="pb-2">
                            We have also won a string of awards such as:
                        </p>
                        <ul class="oa-checklist">
                            <li>
                                Selling Longhaul - Best tour operator to the Indian Subcontinent 2006 & 2008
                            </li>
                            <li>
                                Favourite tour operator to Canada 2007 from the Canadian Tourist Commission
                            </li>
                            <li>
                                Best tour operator to Sri Lanka 2004
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
                <div class="col-12 col-md-6">
                    <div class="our-achievements-box txt-black">
                        <p class="pb-2">
                            We are Members of ABTA and hold an <br>
                            IATA and ATOL Licence
                        </p>
                        <ul class="oa-checklist">
                            <li>
                                As a Member of ABTA you have the benefit of ABTA's assistance and Code of Conduct
                            </li>
                            <li>
                                Many of the travel arrangements that we sell are protected in case of the financial failure of the travel company
                            </li>
                            <li>
                                Please ask us about the protection that applies to your booking
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
            </div>
        </div>
    </section>

    <?php include './sections/global/whychoosetravelpack.php'; ?>
    <?php include './sections/global/cta.php'; ?>
    <?php include './sections/global/testimonials.php'; ?>

    <?php include './sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/home.js"></script>

</body>

</html>