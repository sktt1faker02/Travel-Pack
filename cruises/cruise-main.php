<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Cruise Main</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
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

    <section class="block search-wrap bggray" id="cruise-main">
        <div class="container">
            <div class="row cruise-single-top">
                <div class="col-12 col-md-6 cruise-single-top-left">
                    <h2>
                        Panama Canal and Eastern Caribbean
                    </h2>
                </div><!-- col -->
                <div class="col-md-3 cruise-single-top-mid d-flex justify-content-between flex-row">
                    <div class="cruise-duration">
                        <h5 class="fontfam2">
                            Duration
                        </h5>
                        <span>
                            7Nights
                        </span>
                    </div>
                    <div class="cruise-language">
                        <h5 class="fontfam2">
                            Sailing on
                        </h5>
                        <span>
                            Britannia, B414Q
                        </span>
                    </div>
                </div><!-- col -->
                <div class="col-12 col-md-3 d-flex justify-content-end">
                    <?php include '../sections/global/star-rating.php';?>
                </div>
            </div><!-- row -->
        </div><!-- container -->

        <div class="container">
            <div class="goback fw-medium my-3">
                <button onclick="goBack()">
                    <i class="fa-solid fa-chevron-left fs-icon me-2"></i> Back to Results
                </button>
            </div>
            <form action="cruise-select-cabin.php" method="post">
                <div class="cruise-details-main-top my-4">
                    <div class="row g-0">
                        <div class="col-12 col-lg-6">
                            <div class="cruise-tag">
                                Free Cancellation
                            </div>
                            <div class="cruise-details-main-top-slider v-slide-wrap">
                                <div class="cruise-slide v-slide">
                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/mainlisting-slide.jpg" alt="">
                                </div>
                                <div class="cruise-slide v-slide">
                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/mainlisting-slide.jpg" alt="">
                                </div>
                                <div class="cruise-slide v-slide">
                                    <img src="<?= getBaseUrl() ?>/assets/img/hotels/mainlisting-slide.jpg" alt="">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-12 col-lg-6 d-flex flex-column">
                            <div class="cruise-main-top-right p-4">
                                <div class="cruisebox-main-top">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <h3>
                                                <span class="text-black fontfam2 fw-semibold">Cabins from</span>
                                                <div class="cruise-main-price">
                                                    £809.50 pp
                                                </div>
                                            </h3>
                                        </div><!-- col -->
                                        <div class="col-12 col-lg-6 d-flex justify-content-between">
                                            <div class="cruisetopbox">
                                                <h6 class="fontfam2 text-black">
                                                    Departs
                                                </h6>
                                                <span>
                                                    Southampton, UK <br>
                                                    15 Jun 2014
                                                </span>
                                            </div>
                                            <div class="cruisetopbox">
                                                <h6 class="fontfam2 text-black">
                                                    Arrives
                                                </h6>
                                                <span>
                                                    Southampton, UK <br>
                                                    29 Jun 2014
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                </div><!-- cruisebox -->

                                <div class="cruisebox-main-bottom">
                                    <div class="cruisebox-itinerary">
                                        <div class="cruisebox-itinerary-inner">
                                            <h5 class="mb-4">
                                                Itinerary
                                            </h5>

                                            <div class="cruisebox-itinerary-main-wrap">
                                                <div class="cbim-line-wrap"></div>
                                                <div class="cbim-innerwrap">
                                                    <div class="cbim-inner">
                                                        <div class="cbim-inner-left">
                                                            <strong>
                                                                Day 01
                                                            </strong>
                                                            <div>
                                                                14 Jun 2024
                                                            </div>
                                                            <div>
                                                                Southampton, UK
                                                            </div>
                                                        </div><!-- cbim-inner-left -->
                                                        <div class="cbim-inner-right">
                                                            Depart: Early Morning
                                                        </div>
                                                    </div><!-- cbim inner -->
                                                    <div class="cbim-inner">
                                                        <div class="cbim-inner-left">
                                                            <strong>
                                                                Day 02
                                                            </strong>
                                                            <div>
                                                                14 Jun 2024
                                                            </div>
                                                            <div>
                                                                Southampton, UK
                                                            </div>
                                                        </div><!-- cbim-inner-left -->
                                                        <div class="cbim-inner-right">
                                                            Depart: Early Morning
                                                        </div>
                                                    </div><!-- cbim inner -->
                                                    <div class="cbim-inner">
                                                        <div class="cbim-inner-left">
                                                            <strong>
                                                                Day 03
                                                            </strong>
                                                            <div>
                                                                14 Jun 2024
                                                            </div>
                                                            <div>
                                                                Southampton, UK
                                                            </div>
                                                        </div><!-- cbim-inner-left -->
                                                        <div class="cbim-inner-righ d-flex flex-column">
                                                            <span>Arrive: Early Morning</span>
                                                            <span>Depart: Evening</span>
                                                        </div>
                                                    </div><!-- cbim inner -->
                                                    <div class="cbim-inner">
                                                        <div class="cbim-inner-left">
                                                            <strong>
                                                                Day 04
                                                            </strong>
                                                            <div>
                                                                14 Jun 2024
                                                            </div>
                                                            <div>
                                                                Southampton, UK
                                                            </div>
                                                        </div><!-- cbim-inner-left -->
                                                        <div class="cbim-inner-right">
                                                            Depart: Early Morning
                                                        </div>
                                                    </div><!-- cbim inner -->
                                                </div>
                                            </div><!-- cruisebox itinerary main -->
                                        </div><!-- itinerary inner -->
                                    </div><!-- cruisebox itinerary -->

                                    <a href="#" class="cruise-table-link">
                                        Show Terms & Condirions
                                    </a>
                                </div>
                            </div><!-- cruise-rooms-main-top-right -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- cruise details-main-top -->
                <div class="cruise-details-main-bottom mt-4 pt-4">
                    <h3 class="mb-4">
                        What’s included on your cruise
                    </h3>

                    <div class="row">
                        <div class="col-12 col-lg-6 d-flex flex1">
                            <div class="cruise-details-image-wrap">
                                <img src="<?= getBaseUrl() ?>/assets/img/cruise/cruise2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h3>
                                Lorem ipsum dolor sit amet consectetur. Ac fusce in ipsum fermentum tristique volutpat molestie proin. Adipiscing proin est a hendrerit nulla.
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur. Odio suscipit aliquam ipsum diam sodales. Euismod semper lectus nullam integer magna ut eleifend scelerisque proin. Curabitur in odio commodo amet molestie velit tincidunt. In cursus viverra non amet odio.
                            </p>
                            <ul class="liststyle">
                                <li>Phasellus pretium augue et interdum consectetur.</li>
                                <li>Duis accumsan justo ac maximus imperdiet.</li>
                                <li>Pellentesque consequat erat ut dolor convallis pharetra.</li>
                                <li>Vestibulum eu nisl non lectus dapibus vehicula et id nibh.</li>
                                <li>Nullam eget libero nec nibh convallis pharetra eget eget dolor.</li>
                                <li>Etiam convallis massa at neque sagittis vestibulum.</li>
                                <li>Quisque quis lectus finibus, tincidunt enim eget, bibendum felis.</li>
                                <li>Integer et elit id mi maximus pulvinar sed ut erat.</li>
                                <li>Cras iaculis lacus eu elit congue finibus.</li>
                            </ul>

                            <div class="transferbtnwrap d-flex flex-row gap-3 mt-4 pt-3">
                                <button class="btn btn-primary">
                                    Select
                                </button>
                                <button class="btn btn-white">
                                    Choose Other
                                </button>
                            </div>
                        </div>
                    </div><!-- row -->
                </div>
            </form>
        </div><!-- container -->
    </section>


    <section id="cta" class="block" style="background-image: url(<?= getBaseUrl() ?>/assets/img/home/ctabg.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt-white text-center">
                        Unsure where to go next?
                    </h2>
                </div><!-- col -->
                <div class="col-12 col-lg-6 offset-lg-3 text-center txt-white">
                    <p>
                        To book your holiday call us or simply share your details and we shall get in touch with youJust call us on +44 208 585 4080 
                    </p>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cta-modal">
                        Get In Touch
                    </button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="cta-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/action_page.php">
                        <div class="row align-items-center mb-4">
                            <div class="col-6 ctamodal-top-left">
                                All required areas*
                            </div>
                            <div class="col-6 d-flex justify-content-end ctamodal-top-right">
                                <button type="button" class="txt-blue btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">
                                    Share your details
                                    with us
                                </h2>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="fname">
                                        First Name*
                                    </label>
                                    <input placeholder="First Name" type="text" id="fname" name="fname" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="surname">
                                        Surname*
                                    </label>
                                    <input type="text" placeholder="Surname" id="surname" name="surname" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="phone">
                                        Phone Number*
                                    </label>
                                    <input type="number" placeholder="0123456789" id="phonenumber" name="phone" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="emailaddress">
                                        Email Address*
                                    </label>
                                    <input type="email" placeholder="example@email.com" id="emailaddress" name="surnemailaddressame" required>                                                
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="address">
                                        Address*
                                    </label>
                                    <input type="text" placeholder="Address" id="address" name="address" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="traveldates">
                                        Travel Dates*
                                    </label>
                                    <input placeholder="DD/MM/YYYY - DD/MM/YYYY" type="email" id="traveldates" name="traveldates" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputwrap">
                                    <label for="message">
                                        Text*
                                    </label>
                                    <textarea id="message" placeholder="Start typing here..." name="message" rows="2" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-cruises.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/galleryPopup.js"></script>


</body>
</html>