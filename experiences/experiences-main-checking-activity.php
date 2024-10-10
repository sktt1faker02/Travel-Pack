<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Experience Checking Activity</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-experiences.css">
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

    <section class="block search-wrap bggray" id="experiences-main">
        <div class="container">
            <div class="row hotel-single-top">
                <div class="col-12 col-md-5 experiences-single-top-left">
                    <h2>
                        Harry Potter Warner Bros, Studio Tour 
                        with Transport from London
                    </h2>
                </div><!-- col -->
                <div class="col-md-3 experiences-single-top-mid d-flex justify-content-around flex-row offset-lg-1">
                    <div class="experiences-duration">
                        <h5 class="text-black fontfam2 fw-600">
                            Duration
                        </h5>
                        <span>
                            7hrs
                        </span>
                    </div>
                    <div class="experiences-language">
                        <h5 class="text-black fontfam2 fw-600">
                            Language
                        </h5>
                        <span>
                            English
                        </span>
                    </div>
                </div><!-- col -->
                <div class="col-12 col-md-3 d-flex justify-content-end align-items-lg-start">
                    <div class="esd-rating">
                        5 <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div><!-- row -->
        </div>

        <div class="container">
            <div class="goback fw-medium my-3">
                <button onclick="goBack()">
                    <i class="fa-solid fa-chevron-left fs-icon me-2"></i> Back To Results
                </button>
            </div>
            <div class="experiences-details-main-top my-4">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="free-cancellation">
                            Free Cancellation
                        </div>
                        <div class="experiences-details-main-top-slider v-slide-wrap">
                            <div class="experiences-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/mainlisting-slide.jpg" alt="">
                            </div>
                            <div class="experiences-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/mainlisting-slide.jpg" alt="">
                            </div>
                            <div class="experiences-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/mainlisting-slide.jpg" alt="">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-lg-6 d-flex">
                        <div class="experiences-main-top-right p-4 fs15">
                            <div class="txt-gray">
                                <p>
                                    Delve into the magical world of Harry Potter at the Warner Bros. Studio Tour London,with round-trip luxury coach transport included. Follow in the footsteps of Hogwartsstudents as you walk around original sets like Diagon Alleyand Platform 9 , complete with the Hogwarts Express steam engine. 
                                </p>
                                <p>
                                    Get up close to costumes and props, and discover the wizardry required to createthe mind-blowing special effects and animatronics. Discover how filmmakers created pandemonium when the Weasley twins disrupted the quiet exams. Both Fred and George will be suspended from the ceiling with bags filled with their latest product, Weasleys Wildfire Whiz-bangs - ready to fill the Great Hall with a burst of colour.More of their products will be on display outside their shop Weasleys Wizarding Wheezes on Diagon Alley.
                                </p>
                            </div>
                            
                            <div class="mt-4 pt-33 txt-black">
                                <p>
                                    MAGICAL MISCHIEF: 20 Jan 2024 to 16 Apr 2024<br>
                                    Product Code: 2452POTTER
                                </p>
                            </div>

                            <div class="bottom-emtr">
                                <h4 class="fontfam2 txt-black fs18">
                                    Select Preferred Language
                                </h4>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="tp-input-wrap">
                                            <label for="language-select">Language</label>
                                            <div class="select">
                                                <select name="language" id="language-select" required>
                                                    <option value="en" selected>English (Default)</option>
                                                    <option value="es">Spanish</option>
                                                    <option value="fr">French</option>
                                                    <option value="de">German</option>
                                                    <option value="it">Italian</option>
                                                </select>
                                                <div class="select_arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- hotel-rooms-main-top-right -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- hotel-rooms-main-top -->


            <div class="experiences-overview mt-5">
                <div class="experiences-overview-title">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-12">
                            <h3 class="fontfam2 fw-semibold">
                                Options
                            </h3>
                        </div><!-- col -->
                        <div class="col-12 col-md-4 d-flex justify-content-end">
                            <button class="btn btn-white">
                                Select Different Date
                            </button>
                        </div>
                    </div><!-- row -->
                </div><!-- experiences-overview-title -->

                <form action="experiences-basket.php" method="post">
                    <div class="experiences-options-content mt-4 pt-2">
                        <div class="eoc-box experience-available">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-7 eoc-box-left">
                                    <div class="d-flex flex-column">
                                        <h4>
                                            Afternoon Show
                                        </h4>
                                        <span class="txt-gray">
                                            Timings - 13: 45
                                        </span>
                                        <p class="txt-gray">
                                            Lorem ipsum dolor sit amet consectetur. Ac sed proin egestas ornare adipiscing. Lorem ipsum dolor sit amet consectetur... 
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#eocbox-modal">Read more</a>
                                        </p>
                                    </div><!-- div -->
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex flex-row gap-4 align-items-center justify-content-between eoc-box-right">
                                        <div class="d-flex flex-column text-center">
                                            <span class="txt-black fs14 fw-normal">
                                                2 Adults x £159.00
                                            </span>
                                            <span class="options-price">
                                                £318.00
                                            </span>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary">
                                                Select
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- eoc box -->
                        <div class="eoc-box experience-available">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-7 eoc-box-left">
                                    <div class="d-flex flex-column">
                                        <h4>
                                            Afternoon Show
                                        </h4>
                                        <span class="txt-gray">
                                            Timings - 13: 45
                                        </span>
                                        <p class="txt-gray">
                                            Lorem ipsum dolor sit amet consectetur. Ac sed proin egestas ornare adipiscing. Lorem ipsum dolor sit amet consectetur... <a href="#">Read more</a>
                                        </p>
                                    </div><!-- div -->
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex flex-row gap-4 align-items-center justify-content-between eoc-box-right">
                                        <div class="d-flex flex-column text-center">
                                            <span class="txt-black fs14 fw-normal">
                                                2 Adults x £159.00
                                            </span>
                                            <span class="options-price">
                                                £318.00
                                            </span>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary">
                                                Select
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- eoc box -->
                        <div class="eoc-box experience-available">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-7 eoc-box-left">
                                    <div class="d-flex flex-column">
                                        <h4>
                                            Afternoon Show
                                        </h4>
                                        <span class="txt-black fs14 fw-normal">
                                            Timings - 13: 45
                                        </span>
                                        <p class="txt-gray">
                                            Lorem ipsum dolor sit amet consectetur. Ac sed proin egestas ornare adipiscing. Lorem ipsum dolor sit amet consectetur... <a href="#">Read more</a>
                                        </p>
                                    </div><!-- div -->
                                </div>
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex flex-row gap-4 align-items-center justify-content-between eoc-box-right">
                                        <div class="d-flex flex-column text-center">
                                            <span class="txt-black fs14 fw-normal">
                                                2 Adults x £159.00
                                            </span>
                                            <span class="options-price">
                                                £318.00
                                            </span>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary">
                                                Select
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- eoc box -->
                        <div class="eoc-box experience-unavailable">
                            <div class="d-flex flex-column">
                                <h4>
                                    Evening Show
                                </h4>
                                <span class="txt-gray">
                                    Timings - 14:15
                                </span>
                            </div><!-- div -->
                            <div class="d-flex flex-row gap-5 align-items-center txt-gray text-end">
                                <div class="unavailable-div">
                                    <div class="fs13">
                                        Sold Out
                                    </div>
                                    <div class="unavailable-main-text">
                                        Unavailable
                                    </div>
                                </div>
                            </div>
                        </div><!-- eoc box -->
                        <div class="eoc-box experience-unavailable">
                            <div class="d-flex flex-column">
                                <h4>
                                    Evening Show
                                </h4>
                                <span class="txt-gray">
                                    Timings - 14:15
                                </span>
                            </div><!-- div -->
                            <div class="d-flex flex-row gap-5 align-items-center txt-gray text-end">
                                <div class="unavailable-div">
                                    <div class="fs13">
                                        Sold Out
                                    </div>
                                    <div class="unavailable-main-text">
                                        Unavailable
                                    </div>
                                </div>
                            </div>
                        </div><!-- eoc box -->
                        <div class="eoc-box experience-unavailable">
                            <div class="d-flex flex-column">
                                <h4>
                                    Evening Show
                                </h4>
                                <span class="txt-gray">
                                    Timings - 14:15
                                </span>
                            </div><!-- div -->
                            <div class="d-flex flex-row gap-5 align-items-center txt-gray text-end">
                                <div class="unavailable-div">
                                    <div class="fs13">
                                        Sold Out
                                    </div>
                                    <div class="unavailable-main-text">
                                        Unavailable
                                    </div>
                                </div>
                            </div>
                        </div><!-- eoc box -->
                    </div><!-- experiences-options-content -->
                </form>
            </div><!-- experiences-overview -->
        </div><!-- container -->
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/experiences.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/galleryPopup.js"></script>

    <div class="modal fade eocbox-modal" id="eocbox-modal" tabindex="-1" aria-labelledby="eocbox-modal" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="txt-blue btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h4 class="txt-blue fontfam2 mb-1">
                    Afternoon Show
                </h4>
                <span class="txt-gray fw-semibold mb-3">
                    Timings - 13: 45
                </span>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis massa eget dapibus commodo. In at aliquet diam. Aenean nec tortor vel sapien tempor ullamcorper. Nullam tincidunt pellentesque ornare. Aliquam imperdiet dapibus vehicula. Mauris sed felis dui.</p>
                <p>
                    Sed sollicitudin et lacus id aliquam. Mauris lacus nunc, rutrum feugiat dolor ut, commodo sollicitudin ligula. Aenean lobortis ultricies nunc, eget dapibus sem. In vitae lacinia urna. 
                </p>
                <p>
                    Sed sollicitudin et lacus id aliquam. Mauris lacus nunc, rutrum feugiat dolor ut, commodo sollicitudin ligula. Aenean lobortis ultricies nunc, eget dapibus sem. In vitae lacinia urna. 
                </p>
                
                <div class="d-flex justify-content-end flex-row gap-4 eoc-box-right align-items-center mt-3">
                    <div class="d-flex flex-column text-center align-items-center justify-content-between">
                        <span class="txt-black fs14 fw-normal">
                            2 Adults x £159.00
                        </span>
                        <span class="options-price">
                            £318.00
                        </span>
                    </div>
                    <div>
                        <button class="btn btn-primary">
                            Select
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- modal -->
</body>
</html>