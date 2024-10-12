<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Cruise Select Cabin</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/daterangepicker.css">
    
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
                        Select Cabin 
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
                    <?php include '../sections/sidebar/cruise.php';?>
                </div>
                
                <div class="col-12 col-lg-8 tp-main cruise-main-wrap">
                    <h3 class="mb-3 tp-top-heading">
                        Choose the Cabin 
                    </h3>   
                    <div class="loadmore-boxes-wrap loadmoreboxes-select-cabin">
                        <div class="cruise-main whiteboxbg loadmorebox">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3 class="mb-1">
                                                Brilliant Suite
                                            </h3>
                                            <p class="fw-semibold txt-gray">
                                                Code: SB
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="cruise-readmorecontent fs13 txt-gray">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruisdetail-bottom">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">

                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="cruiseprice-box">
                                                    <div class="d-flex fpb-top align-items-center">
                                                        <div class="cruiseprice">
                                                            <div class="cruiseprice-main pt-1">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex cpb-bottom">
                                                        <div class="cpb-pax">
                                                            2x Adults
                                                        </div>
                                                    </div>
                                                </div><!-- cruiseprice box -->
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                        <div class="cruise-main whiteboxbg showcontent loadmorebox">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3 class="mb-1">
                                                Seriously Suite
                                            </h3>
                                            <p class="fw-semibold txt-gray">
                                                Code: SS
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="cruise-readmorecontent fs13 txt-gray">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruisdetail-bottom">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">

                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="cruiseprice-box">
                                                    <div class="d-flex fpb-top align-items-center">
                                                        <div class="cruiseprice">
                                                            <div class="cruiseprice-main pt-1">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex cpb-bottom">
                                                        <div class="cpb-pax">
                                                            2x Adults
                                                        </div>
                                                    </div>
                                                </div><!-- cruiseprice box -->
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                        <div class="cruise-main whiteboxbg loadmorebox">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3 class="mb-1">
                                                Cheeky Corner Suite Pretty Big Terrace
                                            </h3>
                                            <p class="fw-semibold txt-gray">
                                                Code: CCSPBT
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="cruise-readmorecontent fs13 txt-gray">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruisdetail-bottom">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">

                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="cruiseprice-box">
                                                    <div class="d-flex fpb-top align-items-center">
                                                        <div class="cruiseprice">
                                                            <div class="cruiseprice-main pt-1">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex cpb-bottom">
                                                        <div class="cpb-pax">
                                                            2x Adults
                                                        </div>
                                                    </div>
                                                </div><!-- cruiseprice box -->
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                        <div class="cruise-main whiteboxbg loadmorebox">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3 class="mb-1">
                                                Cheeky Corner Suite Even Bigger Terrace
                                            </h3>
                                            <p class="fw-semibold txt-gray">
                                                Code: CCSEBT
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="cruise-readmorecontent fs13 txt-gray">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruisdetail-bottom">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">

                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="cruiseprice-box">
                                                    <div class="d-flex fpb-top align-items-center">
                                                        <div class="cruiseprice">
                                                            <div class="cruiseprice-main pt-1">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex cpb-bottom">
                                                        <div class="cpb-pax">
                                                            2x Adults
                                                        </div>
                                                    </div>
                                                </div><!-- cruiseprice box -->
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                        <div class="cruise-main whiteboxbg loadmorebox">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3 class="mb-1">
                                                Lorem Ipsum Dolor Set
                                            </h3>
                                            <p class="fw-semibold txt-gray">
                                                Code: CCSEBT
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="cruise-readmorecontent fs13 txt-gray">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruisdetail-bottom">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">

                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="cruiseprice-box">
                                                    <div class="d-flex fpb-top align-items-center">
                                                        <div class="cruiseprice">
                                                            <div class="cruiseprice-main pt-1">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex cpb-bottom">
                                                        <div class="cpb-pax">
                                                            2x Adults
                                                        </div>
                                                    </div>
                                                </div><!-- cruiseprice box -->
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                        <div class="cruise-main whiteboxbg loadmorebox">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3 class="mb-1">
                                                Lorem Ipsum Dolor Set
                                            </h3>
                                            <p class="fw-semibold txt-gray">
                                                Code: CCSEBT
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="cruise-readmorecontent fs13 txt-gray">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruisdetail-bottom">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">

                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="cruiseprice-box">
                                                    <div class="d-flex fpb-top align-items-center">
                                                        <div class="cruiseprice">
                                                            <div class="cruiseprice-main pt-1">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex cpb-bottom">
                                                        <div class="cpb-pax">
                                                            2x Adults
                                                        </div>
                                                    </div>
                                                </div><!-- cruiseprice box -->
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                        <div class="cruise-main whiteboxbg loadmorebox">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3 class="mb-1">
                                                Lorem Ipsum Dolor Set
                                            </h3>
                                            <p class="fw-semibold txt-gray">
                                                Code: CCSEBT
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="cruise-readmorecontent fs13 txt-gray">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruisdetail-bottom">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">

                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="cruiseprice-box">
                                                    <div class="d-flex fpb-top align-items-center">
                                                        <div class="cruiseprice">
                                                            <div class="cruiseprice-main pt-1">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex cpb-bottom">
                                                        <div class="cpb-pax">
                                                            2x Adults
                                                        </div>
                                                    </div>
                                                </div><!-- cruiseprice box -->
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                        <div class="cruise-main whiteboxbg loadmorebox">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3 class="mb-1">
                                                Lorem Ipsum Dolor Set
                                            </h3>
                                            <p class="fw-semibold txt-gray">
                                                Code: CCSEBT
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="cruise-readmorecontent fs13 txt-gray">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruisdetail-bottom">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">

                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="cruiseprice-box">
                                                    <div class="d-flex fpb-top align-items-center">
                                                        <div class="cruiseprice">
                                                            <div class="cruiseprice-main pt-1">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex cpb-bottom">
                                                        <div class="cpb-pax">
                                                            2x Adults
                                                        </div>
                                                    </div>
                                                </div><!-- cruiseprice box -->
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                        <div class="cruise-main whiteboxbg loadmorebox">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="cabinfeaturedimage">
                                        <img src="" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-12 col-lg-8 cruisebox-right">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 cruisecontent">
                                            <h3 class="mb-1">
                                                Lorem Ipsum Dolor Set
                                            </h3>
                                            <p class="fw-semibold txt-gray">
                                                Code: CCSEBT
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="cruise-readmorecontent fs13 txt-gray">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur. Ut vitae ac aliquam molestie pellentesque vel elementum augue nec. Justo aenean amet quam bibendum risus montes scelerisque ipsum. Adipiscing pretium integer ultrices eu elementum elit ultricies ullamcorper nunc. At mattis risus congue nunc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cruisedetailsmore txt-black">
                                        <div class="d-flex flex-column">
                                            <div class="col-lg-12 cruise-readmore-info mb-3">
                                                <span class="cruise-rmore-btn fw-semibold">
                                                    Read More Information <i class="fs-icon fa-solid fa-chevron-down ms-2"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- cruise detailsmore -->

                                    <div class="cruisdetail-bottom">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">

                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="cruiseprice-box">
                                                    <div class="d-flex fpb-top align-items-center">
                                                        <div class="cruiseprice">
                                                            <div class="cruiseprice-main pt-1">
                                                                £708.47
                                                            </div>
                                                        </div>
                                                        <div class="flightprice-option">
                                                            <button class="btn btn-primary">
                                                                Select
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex cpb-bottom">
                                                        <div class="cpb-pax">
                                                            2x Adults
                                                        </div>
                                                    </div>
                                                </div><!-- cruiseprice box -->
                                            </div><!-- col -->
                                        </div>
                                    </div>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div>
                    </div><!-- load more boxes wrap -->

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
                </div><!-- tp-main -->
            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/cta.php';?>
    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-cruises.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/loadmoreboxes.js"></script>
    
</body>
</html>