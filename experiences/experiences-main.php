<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Experiences</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div id="nohero-inner">
        <?php include '../sections/global/header-nav.php'; ?>
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
        </div><!-- container -->

        <div class="container">
            <div class="goback fw-medium my-3">
                <button onclick="goBack()">
                    <i class="fa-solid fa-chevron-left fs-icon me-2"></i> Back To Results
                </button>
            </div>
            <div class="experiences-details-main-top my-4">
                <div class="row g-0">
                    <div class="col-12 col-lg-6 parent-slide">
                        <div class="free-cancellation">
                            Free Cancellation
                        </div>
                        <div class="carousel-modal-bottom-wrap">
                            <div class="carousel-modal-counter">
                                01/03
                            </div>
                            <div class="carousel-modal-view-all">
                                View All <i class="fa-solid fa-chevron-right fs-icon fs13 ms-2 txt-blue"></i>
                            </div>
                        </div><!-- wrap -->
                        <div class="experiences-details-main-top-slider carousel-modal-main v-slide-wrap">
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
                        <button class="v-view-all">View All <i class="fa-solid fa-chevron-right"></i></button>
                    </div><!-- col -->
                    <div class="col-12 col-lg-6 d-flex">
                        <div class="experiences-main-top-right p-4">
                            <h3>
                                <span class="text-black fontfam2 fw-semibold">from</span>
                                <div class="experiences-main-price">
                                    £129.00
                                </div>
                            </h3>

                            <h5 class="text-black mt-4 mb-3 fontfam2">
                                Select Date & Details
                            </h5>

                            <form action="experiences-main-checking-activity.php" method="post">
                                <div class="d-flex gap-3 experiences-mainform flex-wrap">
                                    <div class="tp-input-wrap inputtextarrow">
                                        <label for="experiences-from-date-visible">Date*</label>
                                        <input type="text" id="experiences-from-date-visible" name="experiences-from-date-visible" class="tp-input datepicker" placeholder="DD/MM/YYYY" readonly="readonly">
                                        <input type="hidden" id="experiences-from-date" name="experiences-from-date">
                                        <div class="select_arrow"></div>
                                    </div><!-- tp input wrap -->

                                    <div class="tp-input-wrap">
                                        <label for="traveller-select">Traveller</label>
                                        <div class="select">
                                            <select name="traveller" id="traveller-select" required>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div>
                                    <div class="tp-input-wrap">
                                        <label for="adult">Adult (16 to 99)</label>
                                        <div class="select">
                                            <select name="cardtype" required="">
                                                <option>00</option>
                                                <option>00</option>
                                                <option>00</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- tp input wrap -->
                                    <div class="tp-input-wrap">
                                        <label for="adult">Youth (5 to 15)</label>
                                        <div class="select">
                                            <select name="cardtype" required="">
                                                <option>00</option>
                                                <option>00</option>
                                                <option>00</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- tp input wrap -->
                                    <div class="tp-input-wrap">
                                        <label for="adult">Infant (0 to 2)</label>
                                        <div class="select">
                                            <select name="cardtype" required="">
                                                <option>00</option>
                                                <option>00</option>
                                                <option>00</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- tp input wrap -->
                                    <div class="tp-input-wrap">
                                        <label for="adult">Child (3 to 4)</label>
                                        <div class="select">
                                            <select name="cardtype" required="">
                                                <option>00</option>
                                                <option>00</option>
                                                <option>00</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- tp input wrap -->
                                </div><!-- dflex -->

                                <div class="d-flex justify-content-end mt-5">
                                    <input type="submit" value="Check Availability" class="btn btn-primary">
                                </div>
                            </form>
                        </div><!-- hotel-rooms-main-top-right -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- hotel-rooms-main-top -->

            <div class="experiences-overview mt-5">
                <div class="experiences-overview-title">
                    <h3 class="fontfam2 fw-semibold">
                        Overview
                    </h3>
                </div><!-- experiences-overview-title -->

                <div class="experiences-overview-content">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>
                                Lorem ipsum dolor sit amet consectetur. Eget dui tempor sollicitudin pellentesque odio nibh tempus viverra. Nisi ac eget in duis tortor convallis sed. Id lectus euismod pellentesque vitae quis convallis luctus id mattis.
                            </p>
                        </div>
                        <div class="col-12 col-md-6">
                            <p>
                                Dictumst euismod ipsum id mattis cursus diam metus. Tortor non ipsum tincidunt in egestas. Tincidunt elementum risus sed ipsum nam urna. Hac lorem massa nulla interdum. Nec aliquet scelerisque pulvinar sit elit. Justo lectus dictum diam in quis commodo. Sit est posuere est neque ac massa pharetra cras.
                            </p>
                            <p class="fw-bold mb-0 font-xs mt-4">MAGICAL MISCHIEF: 20 Jan 2024 to 16 Apr 2024 </p>
                            <p class="font-xs">Product Code: 2452POTTER</p>
                        </div>
                    </div>
                </div>
            </div><!-- experiences-overview -->

            <div class="experiences-main-info-boxes mt-4">
                <div class="row g-4">
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="emi-boxes whatsincluded">
                            <h3 class="fontfam2 fw-semibold mb-3">
                                What's Included
                            </h3>

                            <div class="experiences-inclusions">
                                <p class="txt-black fw-semibold">
                                    Inclusions
                                </p>
                                <ul class="tick-blue">
                                    <li>
                                        Entry ticket to Harry Potter Warner Bros Tour London
                                    </li>
                                    <li>
                                        Entry ticket to Harry Potter Warner Bros Tour London
                                    </li>
                                    <li>
                                        Entry ticket to Harry Potter Warner Bros Tour London
                                    </li>
                                </ul>
                            </div><!-- inclusions -->
                            <div class="experiences-exclusions">
                                <p class="txt-black fw-semibold">
                                    Exclusions
                                </p>
                                <ul class="tick-blue">
                                    <li>
                                        Food and drinks
                                    </li>
                                    <li>
                                        Digital guide available in 10 different languages at additional cost
                                    </li>
                                    <li>
                                        Gratuities
                                    </li>
                                </ul>

                            </div><!-- experiences -->
                        </div><!-- emiboxes -->
                    </div><!-- col -->
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="emi-boxes meeting-and-pickup">
                            <h3 class="fontfam2 fw-semibold mb-3">
                                Meeting and Pickup
                            </h3>

                            <div class="experiences-meeting-point mb-3 txt-black">
                                <p class="txt-black fw-semibold">
                                    Meeting Point
                                </p>

                                <div class="d-flex flex-column">
                                    <span>
                                        Victoria Coach Station
                                    </span>
                                    <span>
                                        Victoria Coach Station, 164 Buckingham Palace Rd, London SW1W 9TP, UK
                                    </span>
                                </div>
                            </div><!-- inclusions -->
                            <div class="experiences-exclusionst txt-black">
                                <p class="txt-black fw-semibold">
                                    Ending point
                                </p>
                                <div class="d-flex flex-column">
                                    <span>
                                        Victoria Station
                                    </span>
                                    <span>
                                        Victoria St, London SW1E 5ND, UK
                                    </span>
                                </div>
                            </div><!-- experiences -->
                        </div><!-- emiboxes -->
                    </div><!-- col -->
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="emi-boxes meeting-and-pickup">
                            <h3 class="fontfam2 fw-semibold mb-3">
                                Meeting and Pickup
                            </h3>
                            <div class="txt-black">
                                <p class="txt-black fw-semibold">
                                    Duration: 7hrs
                                </p>

                                <p>
                                    Lorem ipsum dolor sit amet consectetur.Ut nibh eu in fusce risus vel et non leo. Sed odio consectetur in ultricies scelerisque. Et feugiat adipiscing eget scelerisque id ultrices malesuada ornare. Neque vel sit felis sollicitudin sed ultricies facilisi aliquam gravida. Vestibulum convallis id integer malesuada vivamus. Eu at ipsum sed sed facilisi. Vitae tellus tellus sit eget quis egestas. Id mattis suspendisse hendrerit blandit. Vel luctusleo pretium etiam nunc adipiscing.
                                </p>

                                <p>
                                    4hrs - Admission Ticket Included
                                </p>
                            </div>
                        </div><!-- emiboxes -->
                    </div><!-- col -->
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="emi-boxes meeting-and-pickup reglist">
                            <h3 class="fontfam2 fw-semibold mb-3">
                                Additional Information
                            </h3>
                            <div class="txt-black">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                    <li>Eu gravida platea a imperdiet amet. </li>
                                    <li>Orci at adipiscing lacus dolor blandit nunc volutpat consectetur elementum. </li>
                                    <li>Lobortis et ultrices dui tincidunt pretium sapien semper rutrum in. </li>
                                    <li>Gravida vestibulum aliquet mattis augue viverra consectetur augue tristique. </li>
                                    <li>Ultricies velit mauris volutpat in mollis ac nec. Blandit massa velit eget integer vitae id.</li>
                                    <li>Posuere nunc posuere feugiat dui pellentesque id mollis. Amet diam eget viverra ac. </li>
                                    <li>Nisl non nulla malesuada dui ipsum quam tristique.</li>
                                </ul>
                            </div>
                        </div><!-- emiboxes -->
                    </div><!-- col -->
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="emi-boxes meeting-and-pickup reglist">
                            <h3 class="fontfam2 fw-semibold mb-3">
                                Cancellation Policy
                            </h3>
                            <div class="txt-black">
                                <ul>
                                    <li>Gravida vestibulum aliquet mattis augue viverra consectetur augue tristique. </li>
                                    <li>Ultricies velit mauris volutpat in mollis ac nec. Blandit massa velit eget integer vitae id.</li>
                                    <li>Posuere nunc posuere feugiat dui pellentesque id mollis. Amet diam eget viverra ac. </li>
                                    <li>Nisl non nulla malesuada dui ipsum quam tristique.</li>
                                </ul>
                            </div>
                        </div><!-- emiboxes -->
                    </div><!-- col -->

                </div><!-- row -->
            </div><!-- info boxes -->

            <div class="experiences-reviews">
                <div class="experiences-overview-title my-4 py-3">
                    <h3 class="fontfam2 fw-semibold">
                        Reviews
                    </h3>
                </div><!-- experiences-overview-title -->

                <div class="experiences-reviews-inner row g-4">
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="testibox">
                            <div class="esd-rating">
                                5 <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="testimain">
                                <h3>
                                    Good Tour
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="testi-author txt-gray">
                                Greg_H, 09Jun 2024 (Viator)
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="testibox">
                            <div class="esd-rating">
                                5 <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="testimain">
                                <h3>
                                    Good Tour
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="testi-author txt-gray">
                                Greg_H, 09Jun 2024 (Viator)
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="testibox">
                            <div class="esd-rating">
                                5 <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="testimain">
                                <h3>
                                    Good Tour
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="testi-author txt-gray">
                                Greg_H, 09Jun 2024 (Viator)
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="testibox">
                            <div class="esd-rating">
                                5 <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="testimain">
                                <h3>
                                    Good Tour
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="testi-author txt-gray">
                                Greg_H, 09Jun 2024 (Viator)
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="testibox">
                            <div class="esd-rating">
                                5 <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="testimain">
                                <h3>
                                    Good Tour
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="testi-author txt-gray">
                                Greg_H, 09Jun 2024 (Viator)
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="testibox">
                            <div class="esd-rating">
                                5 <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="testimain">
                                <h3>
                                    Good Tour
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="testi-author txt-gray">
                                Greg_H, 09Jun 2024 (Viator)
                            </div>
                        </div>
                    </div><!-- col -->

                </div>


                <div class="proceed">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-7">
                            <h3 class="mb-0">
                                An unforgettable experience awaits you!
                            </h3>
                        </div>
                        <div class="col-12 col-lg-5 d-flex justify-content-end">
                            <input type="submit" class="btn btn-primary" value="Check Availability" onclick="location.href = '<?= getBaseUrl() ?>/experiences/experiences-main-checking-activity.php'">
                        </div>
                    </div><!-- row -->
                </div><!-- proceed -->
            </div>
        </div><!-- container -->
    </section>

    <?php include '../sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/experiences.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/galleryPopup.js"></script>


</body>

</html>