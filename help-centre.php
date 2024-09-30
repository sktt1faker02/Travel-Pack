<?php include './config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Centre - Travelpack</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">

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
    <div id="innerhero" class="inner-hc" style="background-image:url(<?= getBaseUrl() ?>/assets/img/inner/hero-help-centre.jpg)">
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
                <div class="col-12 col-lg-4 offset-lg-1 mt-5 mt-lg-0">
                    <img src="<?= getBaseUrl() ?>/assets/img/inner/help-centre1.jpg" alt="" class="br7">
                </div>

            </div><!-- row -->
        </div><!-- container -->
    </section><!-- section -->

    <section class="block" id="deals-travel-inspiration">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 text-lg-start">
                    <div class="mb-4 pb-1 deals-travel-inspiration-top nobr">
                        <h2 class="largesectiontitle">
                            Speak to a member <br>of the team today
                        </h2>

                        <p>
                            Give us a call or share your details, <br>and we'll reach out to you!
                        </p>
                    </div>

                    <a href="" class="btn btn-primary">
                        Contact Us
                    </a>
                </div><!-- col -->

                <div class="col-12 col-lg-6 offset-lg-1 dti-right position-relative mt-5 mt-lg-0">
                    <div class="dti-right-img-wrap">
                        <div class="dti-right-img dti-right-img1">
                            <div class="yph-price global-price-tag">
                                <a href="">
                                    From <strong>£40 p/n</strong> 
                                </a>
                            </div>
                            <img src="<?= getBaseUrl() ?>/assets/img/home/pc1.jpeg" alt="">
                        </div>
                        <div class="dti-right-img dti-right-img2">
                            <div class="yph-price global-price-tag">
                                <a href="">
                                    From <strong>£40 p/n</strong> 
                                </a>
                            </div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/help-centre2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div>
    </section>

    <section class="block innercta position-relative overflow-hidden bgcover" style="background-image:url(<?= getBaseUrl() ?>/assets/img/inner/help-centre4.jpg);">
        <div class="container topplaces-main position-relative z-5">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="topplacesbox">
                        <h2 class="largesectiontitle nobr">
                        Need help with passport, visa <br>
                        and health?
                        </h2>
                        <p>

                        </p>

                        <div>
                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="btn btn-primary">
                                Know More
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs-section block">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h4>Most Common Questions?</h4>
                </div><!-- col -->
                <div class="col-4 d-flex justify-content-end">
                    <a href="/faqs" class="fs15 fw-medium txt-black txt-primary-hover">
                        View All <i class="fa-solid fa-chevron-right fs-icon ms-1"></i>
                    </a>
                </div>
            </div><!-- row -->

            <div class="row">
                <div class="col-lg-10 col-12 offset-lg-1 mt-4 pt-2">
                    <div class="faqs-wrapper">
                        <div class="faqs-box">
                            <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                <div class="faqsbox-title">
                                    <h4>
                                        How many hours prior to departure should I check in?
                                    </h4>
                                </div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div><!-- faqs-box-top -->
                            <div class="faqs-box-bottom">
                                <div class="faqs-box-bottom-inner">
                                    <div class="row">
                                        <div class="col-12 col-lg-9">
                                            <p>
                                                Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- inner -->
                            </div><!-- faqs box bottom -->
                        </div><!-- faqs box -->
                        <div class="faqs-box">
                            <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                <div class="faqsbox-title">
                                    <h4>
                                        Can I make changes or cancel my flight?
                                    </h4>
                                </div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div><!-- faqs-box-top -->
                            <div class="faqs-box-bottom">
                                <div class="faqs-box-bottom-inner">
                                    <div class="row">
                                        <div class="col-12 col-lg-9">
                                            <p>
                                                Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- inner -->
                            </div><!-- faqs box bottom -->
                        </div><!-- faqs box -->
                        <div class="faqs-box">
                            <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                <div class="faqsbox-title">
                                    <h4>
                                        What are the new requirements for entry to the US under the Wavier scheme?
                                    </h4>
                                </div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div><!-- faqs-box-top -->
                            <div class="faqs-box-bottom">
                                <div class="faqs-box-bottom-inner">
                                    <div class="row">
                                        <div class="col-12 col-lg-9">
                                            <p>
                                                Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- inner -->
                            </div><!-- faqs box bottom -->
                        </div><!-- faqs box -->
                        <div class="faqs-box">
                            <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                <div class="faqsbox-title">
                                    <h4>
                                        What are your terms and conditions?
                                    </h4>
                                </div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div><!-- faqs-box-top -->
                            <div class="faqs-box-bottom">
                                <div class="faqs-box-bottom-inner">
                                    <div class="row">
                                        <div class="col-12 col-lg-9">
                                            <p>
                                                Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- inner -->
                            </div><!-- faqs box bottom -->
                        </div><!-- faqs box -->
                        <div class="faqs-box">
                            <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                <div class="faqsbox-title">
                                    <h4>
                                        Are there any specific conditions related to your charter flight?
                                    </h4>
                                </div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div><!-- faqs-box-top -->
                            <div class="faqs-box-bottom">
                                <div class="faqs-box-bottom-inner">
                                    <div class="row">
                                        <div class="col-12 col-lg-9">
                                            <p>
                                                Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- inner -->
                            </div><!-- faqs box bottom -->
                        </div><!-- faqs box -->
                        <div class="faqs-box">
                            <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                <div class="faqsbox-title">
                                    <h4>
                                        How can I pay for my holiday?
                                    </h4>
                                </div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div><!-- faqs-box-top -->
                            <div class="faqs-box-bottom">
                                <div class="faqs-box-bottom-inner">
                                    <div class="row">
                                        <div class="col-12 col-lg-9">
                                            <p>
                                                Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- inner -->
                            </div><!-- faqs box bottom -->
                        </div><!-- faqs box -->
                    </div><!-- faqs-wrapper -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="faqs-section-block mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h4>
                            Baggage Allowances
                        </h4>
                    </div><!-- col -->
                    <div class="col-12 col-lg-6 d-flex justify-content-end">
                        <a href="/faqs" class="fs15 fw-medium txt-black txt-primary-hover">
                            View All <i class="fa-solid fa-chevron-right fs-icon ms-1"></i>
                        </a>
                    </div>
                </div><!-- row -->                
            </div><!-- container -->

            <div class="baggage-allowance-slider rowslider tpslider-4 firstload mt-4">
                <div class="ba-box">
                    <div class="ba-box-top">
                        <div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/airwaylogo6.png" alt="">
                        </div>
                    </div><!-- ba box top -->
                    <div class="ba-box-bottom">
                        <div class="ba-bottom-airways">
                            British Airways (BA)
                        </div>
                        <div class="ba-bottom-options">
                            <ul>
                                <li>
                                    <a href="#baggage-allowances">
                                        Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#online-checkin">
                                        Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#frequent-flyer">
                                        Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ba-box">
                    <div class="ba-box-top">
                        <div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/airwaylogo6.png" alt="">
                        </div>
                    </div><!-- ba box top -->
                    <div class="ba-box-bottom">
                        <div class="ba-bottom-airways">
                            British Airways (BA)
                        </div>
                        <div class="ba-bottom-options">
                            <ul>
                                <li>
                                    <a href="#baggage-allowances">
                                        Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#online-checkin">
                                        Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#frequent-flyer">
                                        Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ba-box">
                    <div class="ba-box-top">
                        <div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/airwaylogo6.png" alt="">
                        </div>
                    </div><!-- ba box top -->
                    <div class="ba-box-bottom">
                        <div class="ba-bottom-airways">
                            British Airways (BA)
                        </div>
                        <div class="ba-bottom-options">
                            <ul>
                                <li>
                                    <a href="#baggage-allowances">
                                        Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#online-checkin">
                                        Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#frequent-flyer">
                                        Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ba-box">
                    <div class="ba-box-top">
                        <div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/airwaylogo6.png" alt="">
                        </div>
                    </div><!-- ba box top -->
                    <div class="ba-box-bottom">
                        <div class="ba-bottom-airways">
                            British Airways (BA)
                        </div>
                        <div class="ba-bottom-options">
                            <ul>
                                <li>
                                    <a href="#baggage-allowances">
                                        Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#online-checkin">
                                        Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#frequent-flyer">
                                        Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ba-box">
                    <div class="ba-box-top">
                        <div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/airwaylogo6.png" alt="">
                        </div>
                    </div><!-- ba box top -->
                    <div class="ba-box-bottom">
                        <div class="ba-bottom-airways">
                            British Airways (BA)
                        </div>
                        <div class="ba-bottom-options">
                            <ul>
                                <li>
                                    <a href="#baggage-allowances">
                                        Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#online-checkin">
                                        Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#frequent-flyer">
                                        Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ba-box">
                    <div class="ba-box-top">
                        <div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/airwaylogo6.png" alt="">
                        </div>
                    </div><!-- ba box top -->
                    <div class="ba-box-bottom">
                        <div class="ba-bottom-airways">
                            British Airways (BA)
                        </div>
                        <div class="ba-bottom-options">
                            <ul>
                                <li>
                                    <a href="#baggage-allowances">
                                        Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#online-checkin">
                                        Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#frequent-flyer">
                                        Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ba-box">
                    <div class="ba-box-top">
                        <div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/airwaylogo6.png" alt="">
                        </div>
                    </div><!-- ba box top -->
                    <div class="ba-box-bottom">
                        <div class="ba-bottom-airways">
                            British Airways (BA)
                        </div>
                        <div class="ba-bottom-options">
                            <ul>
                                <li>
                                    <a href="#baggage-allowances">
                                        Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#online-checkin">
                                        Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#frequent-flyer">
                                        Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ba-box">
                    <div class="ba-box-top">
                        <div>
                            <img src="<?= getBaseUrl() ?>/assets/img/inner/airwaylogo6.png" alt="">
                        </div>
                    </div><!-- ba box top -->
                    <div class="ba-box-bottom">
                        <div class="ba-bottom-airways">
                            British Airways (BA)
                        </div>
                        <div class="ba-bottom-options">
                            <ul>
                                <li>
                                    <a href="#baggage-allowances">
                                        Baggage Allowances <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#online-checkin">
                                        Online Check In <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#frequent-flyer">
                                        Frequent Flyer <i class="fa-solid fa-chevron-right ms-1 fs-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- faqs section -->

        <div class="faqs-section-block mt-5 pt-5">
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h4 class="pb-2">
                            Useful links
                        </h4>
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <div class="txt-gray">
                                    <p>
                                        The following links you may find useful in planning your next holiday. These links are external to our site and are therefore not covered under any of the protection that Travelpack has in place.
                                    </p>
                                </div>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- col -->

                    <div class="col-lg-6 col-12">
                        <div class="faqs-wrapper">
                            <div class="faqs-box">
                                <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                    <div class="faqsbox-title">
                                        <h4>
                                            Association of British Travel Agents
                                        </h4>
                                    </div>
                                <div>
                                <div>
                                <div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div><!-- faqs-box-top -->
                                <div class="faqs-box-bottom">
                                    <div class="faqs-box-bottom-inner">
                                        <div class="row">
                                            <div class="col-12 col-lg-9">
                                                <p>
                                                    Book with Confidence. We are a Member of ABTA which means you have the benefit of ABTA's assistance and Code of Conduct. All the packages and Flight-Plus holidays we sell are coveredby a scheme protecting your money if the supplier fails. Other services such as hotels or flights on their own may not be protected and you should ask us what protection is available.
                                                </p>
                                                <ul class="d-flex column-gap-4 pt-3">
                                                    <li>
                                                        <a href="#">
                                                            Check Our ABTA Membership <i class="fa-solid fa-chevron-right fs-icon ms-1"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            Financial Protection <i class="fa-solid fa-chevron-right fs-icon ms-1"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- inner -->
                                </div><!-- faqs box bottom -->
                            </div><!-- faqs box -->
                            <div class="faqs-box">
                                <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                    <div class="faqsbox-title">
                                        <h4>
                                            Civil Aviation Authority
                                        </h4>
                                    </div>
                                <div>
                                <div>
                                <div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div><!-- faqs-box-top -->
                                <div class="faqs-box-bottom">
                                    <div class="faqs-box-bottom-inner">
                                        <div class="row">
                                            <div class="col-12 col-lg-9">
                                                <p>
                                                    Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- inner -->
                                </div><!-- faqs box bottom -->
                            </div><!-- faqs box -->
                            <div class="faqs-box">
                                <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                    <div class="faqsbox-title">
                                        <h4>
                                            International Air Transport Assosiation (IATA)
                                        </h4>
                                    </div>
                                <div>
                                <div>
                                <div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div><!-- faqs-box-top -->
                                <div class="faqs-box-bottom">
                                    <div class="faqs-box-bottom-inner">
                                        <div class="row">
                                            <div class="col-12 col-lg-9">
                                                <p>
                                                    Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- inner -->
                                </div><!-- faqs box bottom -->
                            </div><!-- faqs box -->
                            <div class="faqs-box">
                                <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                    <div class="faqsbox-title">
                                        <h4>
                                            Foreign & Commonwealth Office
                                        </h4>
                                    </div>
                                <div>
                                <div>
                                <div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div><!-- faqs-box-top -->
                                <div class="faqs-box-bottom">
                                    <div class="faqs-box-bottom-inner">
                                        <div class="row">
                                            <div class="col-12 col-lg-9">
                                                <p>
                                                    Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- inner -->
                                </div><!-- faqs box bottom -->
                            </div><!-- faqs box -->
                            <div class="faqs-box">
                                <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                    <div class="faqsbox-title">
                                        <h4>
                                            UK Passport Service
                                        </h4>
                                    </div>
                                <div>
                                <div>
                                <div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div><!-- faqs-box-top -->
                                <div class="faqs-box-bottom">
                                    <div class="faqs-box-bottom-inner">
                                        <div class="row">
                                            <div class="col-12 col-lg-9">
                                                <p>
                                                    Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- inner -->
                                </div><!-- faqs box bottom -->
                            </div><!-- faqs box -->
                            <div class="faqs-box">
                                <div class="faqs-box-top d-flex align-items-center justify-content-between">
                                    <div class="faqsbox-title">
                                        <h4>
                                        UK Department of Health Travel Advise
                                        </h4>
                                    </div>
                                <div>
                                <div>
                                <div>
                                <div>
                                    <div class="faqs-toggle-btn">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div><!-- faqs-box-top -->
                                <div class="faqs-box-bottom">
                                    <div class="faqs-box-bottom-inner">
                                        <div class="row">
                                            <div class="col-12 col-lg-9">
                                                <p>
                                                    Many of the cheaper tickets are non refundable. This means that you will lose your money if you choose to cancel. Some tickets are changeable, but usually for a fee. The most restrictive tickets are non changeable also, to change these you would effectively cancel and rebook
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- inner -->
                                </div><!-- faqs box bottom -->
                            </div><!-- faqs box -->
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- div faqs section -->
    </section><!-- section -->

    <?php include './sections/global/testimonials.php'; ?>

    <section class="block rightsideslider" id="perfect-holiday">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-8 col-lg-6">
                    <h2 class="homesectiontitle">
                        Explore Our Great Services
                    </h2>
                </div><!-- col -->
                <div class="col-4 col-lg-6 d-flex justify-content-end">
                    <a href="#" class="fw-semibold view-all">View All <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
		    
        <div class="rowslider tpslider-2 perfectholidayslider firstload">
            <div class="yphbox innerrowslider">
                <img src="<?= getBaseUrl() ?>/assets/img/home/yph1.jpg" alt="">
                <div class="yph-details">
                    <div class="yph-title">
                        <h3>
                            Holiday Holidays
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div><!-- yphbox -->
            <div class="yphbox innerrowslider">
                <img src="<?= getBaseUrl() ?>/assets/img/inner/card2.jpg" alt="">
                <div class="yph-details">
                    <div class="yph-title">
                        <h3>
                            Flight Bookings
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div><!-- yphbox -->
            <div class="yphbox innerrowslider">
                <img src="<?= getBaseUrl() ?>/assets/img/inner/card3.jpg" alt="">
                <div class="yph-details">
                    <div class="yph-title">
                        <h3>
                            Car Hire
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div><!-- yphbox -->
            <div class="yphbox innerrowslider">
                <img src="<?= getBaseUrl() ?>/assets/img/inner/card2.jpg" alt="">
                <div class="yph-details">
                    <div class="yph-title">
                        <h3>
                            Flight Bookings
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div><!-- yphbox -->
            <div class="yphbox innerrowslider">
                <img src="<?= getBaseUrl() ?>/assets/img/home/yph1.jpg" alt="">
                <div class="yph-details">
                    <div class="yph-title">
                        <h3>
                            Holiday Holidays
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div><!-- yphbox -->
            <div class="yphbox innerrowslider">
                <img src="<?= getBaseUrl() ?>/assets/img/inner/card3.jpg" alt="">
                <div class="yph-details">
                    <div class="yph-title">
                        <h3>
                            Car Hire
                        </h3>
                    </div>

                    <a href="#" class="fw-semibold yph-more">Find Out More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div><!-- yphbox -->
        </div><!-- rowslider -->
    </section>    

    <?php include './sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/home.js"></script>

</body>

</html>