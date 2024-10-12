<?php include './config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport, Visas and Health - Travelpack</title>

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
    <div id="innerhero" class="inner-pvh" style="background-image:url(<?= getBaseUrl() ?>/assets/img/inner/pvh1.jpg)">
        <?php include './sections/global/header-nav.php'; ?>
    </div><!-- main hero -->
    
    <section class="block" id="our-achievements">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h3>
                        Passports, Visas and Health
                    </h3>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row g-4 align-items-top pt-4">
                <div class="col-12 col-lg-6 d-flex">
                    <div class="our-achievements-box txt-black">
                        <ul class="oa-checklist">
                            <li>
                                All travellers (including children and infants) will require a valid passport to travel.
                            </li>
                            <li>
                                Different countries have their own entry requirements, from how much validity your passport requires, to whether or not you require a visa. It is important that you make sure you are aware of the entry requirements for both the country you are visiting and any you may transit through.
                            </li>
                            <li>
                                If your passport is endorsed in any way, you should always check with the relevant embassy.
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
                <div class="col-12 col-lg-6 d-flex pt- pt-lg-0">
                    <div class="our-achievements-box txt-black">
                        <ul class="oa-checklist">
                        <li>
                            Please note, getting or renewing passports can take a number of weeks, so please leave plenty of time prior to travel. It is recommended that you have at least six months validity remaining on your passport on your return date, in fact, this is now mandatory in a number of countries.
                        </li>
                        <li>
                            It is your responsibility to ensure you have all necessary travel documents prior to travel. We cannot accept any liability if you are refused boarding or entry into a country due to incorrect documentation.
                        </li>
                        </ul>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->


        <div class="container">
            <div class="row g-4 align-items-stretch d-flex mt-5">
                <div class="col-12 col-lg-6 d-flex flex-column">
                    <h3 class="mb-4">Foreign and Commonwealth Office</h3>
                    <div class="our-achievements-box txt-black flex-grow-1 pt-4">
                        <ul class="oa-checklist">
                            <li>
                                For UK citizens, we strongly advise travellers to visit the Foreign & Commonwealth Office website to find information on the safety of the destination they have chosen.
                            </li>
                            <li>
                                Their website maintains travel advice for destinations throughout the world. In addition it offers guidance about passports, visas, local health issues, and vaccinations.
                                <br>
                                <a href="#" class="mt-2">
                                    Check Foreign Travel Advice <i class="fa-solid fa-chevron-right fs-icon ms-1"></i>
                                </a>
                            </li>
                            <li>
                                If your passport is issued in another country, please refer to local advice.
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
                
                <div class="col-12 col-lg-6 pt-4 pt-lg-0 d-flex flex-column">
                    <h3 class="mb-4">Electronic Travel Authorisations and Visa</h3>
                    <div class="our-achievements-box txt-black flex-grow-1 pt-4">
                        <ul class="oa-checklist">
                            <li>
                                The USA has recently re-classified Cuba and as such, clients who have travelled to Cuba since 12 January 2021 will no longer be able to visit the USA under the ESTA Visa Waiver Program until further notice.
                            </li>
                            <li>
                                Some ESTAs, ETAs, and e-Visas can be applied for directly with the relevant government websites:
                                <ul class="visa-list">
                                    <li><a href="#">USA ESTA <i class="fa-solid fa-chevron-right fs-icon"></i></a></li>
                                    <li><a href="#">Canadian ETA <i class="fa-solid fa-chevron-right fs-icon"></i></a></li>
                                    <li><a href="#">Australian ETA <i class="fa-solid fa-chevron-right fs-icon"></i></a></li>
                                    <li><a href="#">Sri Lankan ETA <i class="fa-solid fa-chevron-right fs-icon"></i></a></li>
                                    <li><a href="#">India e-tourist Visa <i class="fa-solid fa-chevron-right fs-icon"></i></a></li>
                                    <li><a href="#">Turkey e-visa <i class="fa-solid fa-chevron-right fs-icon"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="container">
            <div class="row g-4 align-items-stretch d-flex mt-5">
                <!-- First Column: UK Department of Health Travel Advice -->
                <div class="col-12 col-lg-6 d-flex flex-column">
                    <h3 class="mb-4">UK Department of Health Travel Advice</h3>
                    <div class="our-achievements-box txt-black flex-grow-1 pt-4">
                        <ul class="oa-checklist">
                            <li>
                                For more information on avoiding health risks, planning for healthy travelling and obtaining emergency medical treatment, visit the NHS website.
                                <br>
                                <a href="#" class="mt-2">
                                    Check Travel Health <i class="fa-solid fa-chevron-right fs-icon ms-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
                
                <!-- Second Column: ABTA -->
                <div class="col-12 col-lg-6 pt-4 mt-lg-0 d-flex flex-column">
                    <h3 class="mb-4">ABTA</h3>
                    <div class="our-achievements-box txt-black flex-grow-1 pt-4">
                        <ul class="oa-checklist">
                            <li>
                                The Association of British Travel Agents (ABTA) maintains advice here:
                                <br>
                                <a href="#" class="mt-2">
                                    ABTA <i class="fa-solid fa-chevron-right fs-icon ms-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

    </section>

    <?php include './sections/global/cta.php'; ?>

    <?php include './sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/home.js"></script>

</body>

</html>