<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Hotels Purchase Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-hotels.css">
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
                    </h1>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                <?php include '../sections/sidebar/hotels.php';?> 

                <div class="col-12 col-lg-8 tp-main">
                    <h3 class="fontfam2 fs20">
                        Details
                    </h3>
                    <h3 class="fontfam2 fw-normal pt-1 fs20 d-block">
                        Lead Guests
                    </h3>
                    <div class="tp-table mt-3">
                        <div class="responsive-table">
                            <div class="tp-table-main">
                                <table class="table-flightseat" style="width: 100%;">
                                    <thead>
                                        <tr style="background-color: #ddd; font-weight: bold;">
                                            <th style="padding: 10px;">Individual Details</th>
                                            <th style="padding: 10px;">Travel Information</th>
                                            <th style="padding: 10px;">Contact Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                <strong>Name:</strong> Mr Forename Surname<br>
                                                <strong>Age:</strong> 18<br>
                                                <strong>Date of Birth:</strong> DD/MM/YYYY<br>
                                                <strong>Gender:</strong> Prefer Not to Say<br>
                                                <strong>Weight (kg):</strong> 80<br>
                                                <strong>Height (cm):</strong> 170<br>
                                                <strong>Language:</strong> English<br>
                                                <strong>Flight Number:</strong> 0000
                                            </td>
                                            <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                <strong>Passport Number:</strong> 0000000000<br>
                                                <strong>Passport Expiry:</strong> MM/YYYY<br>
                                                <strong>Nationality:</strong> British<br>
                                                <strong>Flight Number:</strong> 0000<br>
                                                <strong>Carrier:</strong> Airline
                                            </td>
                                            <td style="padding: 10px; border-bottom: 1px solid #ccc; vertical-align: top;">
                                                <strong>Address:</strong> 19 Bellefields Road<br>
                                                <strong>Country:</strong> United Kingdom<br>
                                                <strong>City*:</strong> London<br>
                                                <strong>County/Province:</strong> London<br>
                                                <strong>Postal Code:</strong> SW9 9UH
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- tp table main -->
                            <div class="d-flex justify-content-end mt-4">
                                <button class="btn btn-white">
                                    Change Seats
                                </button>
                            </div>
                        </div><!-- responsive table -->
                    </div>

                    <div class="summarybox-main mt-5">
                        <div class="summarybox">
                            <h3 class="mb-3 tp-top-heading">
                                Room 1 (Standard Room)
                            </h3>
                            <div class="whiteboxbg hotelssummarybox">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="hotels-summary-listing-slider">
                                            <div class="hotels-summary-listing-slide">
                                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                            </div>
                                            <div class="hotels-summary-listing-slide">
                                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                            </div>
                                            <div class="hotels-summary-listing-slide">
                                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                            </div>
                                        </div><!-- slider -->
                                    </div><!-- col -->

                                    <div class="col-12 col-md-8 d-flex flex-column justify-content-between">
                                        <div class="hotelsummary-right-top">
                                            <h2 class="hotelssummarytitle">
                                                YHA London Earl’s Court - Hostel
                                            </h2>
                                            <div class="hotelssummary-details fw-medium txt-black d-flex row">
                                                <div class="d-flex flex-column col-12 col-lg-6 gap-1">
                                                    <span>Standard Room</span>
                                                    <span>2x Adults</span>
                                                    <span class="txt-gray">Child 01 Age - 8</span>
                                                    <span class="txt-gray">Child 01 Age - 8</span>
                                                    <span>Breakfast</span>
                                                    <span>Room Only</span>
                                                </div>

                                                <div class="d-flex flex-column col-12 gap-2 col-lg-6">
                                                    <div class="d-flex flex-column">
                                                        <label>Check In</label>
                                                        <span class="txt-gray">Sat 08 June 2024</span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <label>Check Out</label>
                                                        <span class="txt-gray">Sat 16 June 2024</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <span>Special Requests/Arrangements</span>
                                                    <textarea disabled name="" id="" class="tp-textarea" placeholder="Lorem ipsum dolor sit amet consectetur. Luctus amet aliquam massa sed. Tincidunt tellus nunc sit suscipit. Sed urna cursus sed amet ultricies. Netus eget nec aliquet cursus."></textarea>
                                                </div>
                                            </div><!-- row -->
                                        </div><!-- hotel summary details right top -->

                                        <div class="hotelssummary-right-bottom mt-4 txt-gray d-flex justify-content-between blacklink align-items-center">
                                            <span>
                                                This hotel is booked to these <a href="#">Terms & Conditions</a>
                                            </span>
                                            <span>
                                                <button class="btn btn-white">
                                                    Change Details
                                                </button>
                                            </span>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                        </div><!-- summarybox -->
                        <div class="summarybox">
                            <h3 class="mb-3 tp-top-heading mt-4">
                                Room 2 (Standard Room)
                            </h3>
                            <div class="whiteboxbg hotelssummarybox">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="hotels-summary-listing-slider">
                                            <div class="hotels-summary-listing-slide">
                                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                            </div>
                                            <div class="hotels-summary-listing-slide">
                                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                            </div>
                                            <div class="hotels-summary-listing-slide">
                                                <img src="<?= getBaseUrl() ?>/assets/img/hotels/hotels-summary.jpg" alt="">
                                            </div>
                                        </div><!-- slider -->
                                    </div><!-- col -->

                                    <div class="col-12 col-md-8 d-flex flex-column justify-content-between">
                                        <div class="hotelsummary-right-top">
                                            <h2 class="hotelssummarytitle">
                                                YHA London Earl’s Court - Hostel
                                            </h2>
                                            <div class="hotelssummary-details fw-medium txt-black d-flex row">
                                                <div class="d-flex flex-column col-12 col-lg-6 gap-1">
                                                    <span>Standard Room</span>
                                                    <span>2x Adults</span>
                                                    <span class="txt-gray">Child 01 Age - 8</span>
                                                    <span class="txt-gray">Child 01 Age - 8</span>
                                                    <span>Breakfast</span>
                                                    <span>Room Only</span>
                                                </div>

                                                <div class="d-flex flex-column col-12 gap-2 col-lg-6">
                                                    <div class="d-flex flex-column">
                                                        <label>Check In</label>
                                                        <span class="txt-gray">Sat 08 June 2024</span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <label>Check Out</label>
                                                        <span class="txt-gray">Sat 16 June 2024</span>
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-3">
                                                    <span>Special Requests/Arrangements</span>
                                                    <textarea disabled name="" id="" class="tp-textarea" placeholder="Lorem ipsum dolor sit amet consectetur. Luctus amet aliquam massa sed. Tincidunt tellus nunc sit suscipit. Sed urna cursus sed amet ultricies. Netus eget nec aliquet cursus."></textarea>
                                                </div>
                                            </div>
                                        </div><!-- hotel summary details right top -->

                                        <div class="hotelssummary-right-bottom mt-4 txt-gray d-flex justify-content-between blacklink align-items-center">
                                            <span>
                                                This hotel is booked to these <a href="#">Terms & Conditions</a>
                                            </span>
                                            <span>
                                                <button class="btn btn-white">
                                                    Change Details
                                                </button>
                                            </span>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                        </div><!-- summarybox -->
                    </div><!-- summarybox-main -->
                    
                    <div class="mt-4 tp-main-cta">
                        <div class="tp-main-cta-wrap" style="background-image:url(<?= getBaseUrl() ?>/assets/img/hotels/ctabg.jpg)">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="ctawhitebox">
                                        <h2 class="largesectiontitle">
                                            Need a transfer?
                                        </h2>
                                        <p>
                                            Book a seamless transfer now so you can rest once you have arrived
                                        </p>
                
                                        <a href="<?= getBaseUrl() ?>/hotels" class="btn btn-primary">View Transfers</a>
                                    </div><!-- cta whitebox -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- tp main cta wrap -->
                    </div><!-- tp-main cta -->

                    <div class="proceed">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-7">
                                <h3 class="mb-0">
                                    Your trip is a few clicks away!
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
    <script src="<?= getBaseUrl() ?>/assets/js/main-hotels.js"></script>

        <script>
            function redirectToPage(event) {
                event.preventDefault(); // Prevent the default form submission
                window.location.href = '<?= getBaseUrl() ?>/hotels/hotels-checkout-details.php'; // Redirect to the target page
            }
        </script>

</body>
</html>