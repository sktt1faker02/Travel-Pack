<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Cruise Select Cabin Location</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/daterangepicker.css">
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
        <?php include '../sections/global/header-nav.php'; ?>
    </div><!-- main hero -->

    <section class="block search-wrap bggray" id="hotels-search">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 tp-page-title">
                    <h1>
                        Select Cabin Location
                    </h1>
                </div><!-- col -->
            </div><!-- row -->

            <div class="goback fw-medium mb-3">
                <button onclick="goBack()">
                    <i class="fa-solid fa-chevron-left fs-icon me-2"></i> Go Back
                </button>
            </div>

            <div class="row">

                <div class="col-12 col-lg-4 tp-sidebar tp-sidebar-cruise">
                    <?php include '../sections/sidebar/cruise.php'; ?>
                </div>

                <div class="col-12 col-lg-8 tp-main">
                    <h3 class="mb-3 tp-top-heading">
                        Choose the Deck
                    </h3>
                    <form action="cruise-select-cabin-location.php" method="post">
                        <div class="cruise-main whiteboxbg">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontentshow">
                                            <h3 class="mb-1">
                                                Inside Cabins
                                            </h3>
                                            <div class="cruise-readmorecontentshow fs13 txt-gray">
                                                <p class="fw-bold">
                                                Code: SS

                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="cruise-readmorecontentshow fs13 txt-gray">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- cruise-main -->

                        <div class="cruise-main whiteboxbg">
                            <h3 class="mb-3 tp-top-heading">
                                Select Deck
                            </h3>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="select text-black">
                                        <select name="deck-selector" required> 
                                            <option value="deck01">Deck 01</option>
                                            <option value="deck02">Deck 02</option>
                                            <option value="deck03">Deck 03</option>
                                            <option value="deck04">Deck 04</option>
                                        </select>
                                        <div class="select_arrow"></div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->

                            <div class="cruise-select-deck">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <div class="cabinfeaturedimage">
                                            <img src="" alt="">
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-12 col-lg-8 d-flex flex-column gap-3">
                                        <div class="cabin-guaranteed csd-box">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-9">
                                                    Guaranteed Cabin
                                                </div>
                                                <div class="col-12 col-lg-3 d-flex justify-content-end">
                                                    <button class="btn btn-primary">
                                                        Select
                                                    </button>
                                                </div><!-- col -->
                                            </div>
                                        </div><!-- csd box -->
                                        <div class="csd-box">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-9">
                                                    <div class="csd-items-wrap d-flex column-gap-4">
                                                        <div class="csd-items">
                                                            <strong>
                                                                Cabin Number
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                034A
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Deck
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Deck 8
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Position
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Lorem
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Bedding
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                LoreIpsumm
                                                            </strong>
                                                        </div>
                                                    </div><!-- csd-items-wrap -->
                                                </div><!-- col -->
                                                <div class="col-12 col-lg-3 d-flex justify-content-end">
                                                    <button class="btn btn-primary">
                                                        Select
                                                    </button>
                                                </div><!-- col -->
                                            </div>
                                        </div><!-- csd box -->
                                        <div class="csd-box">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-9">
                                                    <div class="csd-items-wrap d-flex column-gap-4">
                                                        <div class="csd-items">
                                                            <strong>
                                                                Cabin Number
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                034A
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Deck
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Deck 8
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Position
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Lorem
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Bedding
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                LoreIpsumm
                                                            </strong>
                                                        </div>
                                                    </div><!-- csd-items-wrap -->
                                                </div><!-- col -->
                                                <div class="col-12 col-lg-3 d-flex justify-content-end">
                                                    <button class="btn btn-primary">
                                                        Select
                                                    </button>
                                                </div><!-- col -->
                                            </div>
                                        </div><!-- csd box -->
                                        <div class="csd-box">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-9">
                                                    <div class="csd-items-wrap d-flex column-gap-4">
                                                        <div class="csd-items">
                                                            <strong>
                                                                Cabin Number
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                034A
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Deck
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Deck 8
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Position
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Lorem
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Bedding
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                LoreIpsumm
                                                            </strong>
                                                        </div>
                                                    </div><!-- csd-items-wrap -->
                                                </div><!-- col -->
                                                <div class="col-12 col-lg-3 d-flex justify-content-end">
                                                    <button class="btn btn-primary">
                                                        Select
                                                    </button>
                                                </div><!-- col -->
                                            </div>
                                        </div><!-- csd box -->
                                        <div class="csd-box">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-9">
                                                    <div class="csd-items-wrap d-flex column-gap-4">
                                                        <div class="csd-items">
                                                            <strong>
                                                                Cabin Number
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                034A
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Deck
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Deck 8
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Position
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Lorem
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Bedding
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                LoreIpsumm
                                                            </strong>
                                                        </div>
                                                    </div><!-- csd-items-wrap -->
                                                </div><!-- col -->
                                                <div class="col-12 col-lg-3 d-flex justify-content-end">
                                                    <button class="btn btn-primary">
                                                        Select
                                                    </button>
                                                </div><!-- col -->
                                            </div>
                                        </div><!-- csd box -->
                                        <div class="csd-box">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-9">
                                                    <div class="csd-items-wrap d-flex column-gap-4">
                                                        <div class="csd-items">
                                                            <strong>
                                                                Cabin Number
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                034A
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Deck
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Deck 8
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Position
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Lorem
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Bedding
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                LoreIpsumm
                                                            </strong>
                                                        </div>
                                                    </div><!-- csd-items-wrap -->
                                                </div><!-- col -->
                                                <div class="col-12 col-lg-3 d-flex justify-content-end">
                                                    <button class="btn btn-primary">
                                                        Select
                                                    </button>
                                                </div><!-- col -->
                                            </div>
                                        </div><!-- csd box -->
                                        <div class="csd-box">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-9">
                                                    <div class="csd-items-wrap d-flex column-gap-4">
                                                        <div class="csd-items">
                                                            <strong>
                                                                Cabin Number
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                034A
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Deck
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Deck 8
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Position
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                Lorem
                                                            </strong>
                                                        </div>
                                                        <div class="csd-items">
                                                            <strong>
                                                                Bedding
                                                            </strong>
                                                            <br>
                                                            <strong class="txt-gray">
                                                                LoreIpsumm
                                                            </strong>
                                                        </div>
                                                    </div><!-- csd-items-wrap -->
                                                </div><!-- col -->
                                                <div class="col-12 col-lg-3 d-flex justify-content-end">
                                                    <button class="btn btn-primary">
                                                        Select
                                                    </button>
                                                </div><!-- col -->
                                            </div>
                                        </div><!-- csd box -->
                                    </div>
                                </div><!-- row -->
                            </div><!-- select deck -->

                        </div>
                    </form>
                </div><!-- tp-main -->
            </div><!-- row -->
        </div>
    </section>
    <?php include '../sections/global/cta.php'; ?>
    <?php include '../sections/global/footer.php'; ?>


    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>

</body>

</html>