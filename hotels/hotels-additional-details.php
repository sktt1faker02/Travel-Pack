<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Hotel Additional Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    
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
    <div id="nohero-inner" class="toggle-filterboxes">
        <?php include '../sections/global/header-nav.php';?>
    </div><!-- main hero -->

    <section class="block search-wrap bggray" id="flights-additional-details">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 tp-page-title">
                    <h1>
                        Additional Details
                    </h1>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                <?php include '../sections/sidebar/hotels.php';?>
                <div class="col-12 col-lg-8">
                    <form action="" method="get">
                        <div class="passengerbox">
                            <h3 class="fw-semibold mb-3 fs20 fontfam2">
                                Lead Guest
                            </h3>
                            <div class="passengerbox-main">

                                <div class="row">
                                    <div class="col-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <label>Title*</label>
                                                <div class="select">
                                                    <select name="passenger1-title" required> 
                                                        <option>Mr</option>
                                                        <option>Mrs</option>
                                                    </select>
                                                    <div class="select_arrow"></div>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-md-5 col-12">
                                                <label>First Name*</label>
                                                <input type="text" id="fname" name="passenger1-fname" class="tp-input" placeholder="First Name">
                                            </div><!-- col -->
                                            <div class="col-md-5 col-12">
                                                <label>Last Name*</label>
                                                <input type="text" id="lname" name="passenger1-lname" class="tp-input" placeholder="Last Name">
                                            </div><!-- col -->
                                        </div><!-- row -->
                                    </div><!-- col -->
                                </div><!-- row -->
                            
                                <div class="row">
                                    <div class="col-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <label>Age*</label>
                                                <div class="select">
                                                    <select name="passenger1-age" required> 
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <!-- Add more age options -->
                                                        <option value="40">40</option>
                                                    </select>
                                                    <div class="select_arrow"></div>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-md-4 col-12">
                                                <label>Date of Birth</label>
                                                <input class="tp-input datetoday" datepicker="first" name="flight-additional-dob1" id="flight-additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                            </div><!-- col -->
                                            <div class="col-md-4 col-12">
                                                <label>Gender*</label>
                                                <div class="select">
                                                    <select name="passenger1-gender" required> 
                                                        <option value="" disabled selected>Prefer Not to Say</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>
                                                    </select>
                                                    <div class="select_arrow"></div>
                                                </div>
                                            </div><!-- col -->
                                        </div><!-- row -->
                                    </div>                                
                                </div><!-- row -->

                                <div class="row">
                                    <div class="col-md-2 col-12">
                                        <label for="weight">Weight (kg)</label>
                                        <div class="select">
                                            <select id="weight" name="weight" required>
                                                <option value="" disabled selected>00</option>
                                                <option value="50">50</option>
                                                <option value="60">60</option>
                                                <option value="70">70</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-md-2 col-12">
                                        <label for="height">Height (cm)</label>
                                        <div class="select">
                                            <select id="height" name="height" required>
                                                <option value="" disabled selected>00</option>
                                                <option value="150">150</option>
                                                <option value="160">160</option>
                                                <option value="170">170</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-md-3 col-12">
                                        <label for="language">Language</label>
                                        <div class="select">
                                            <select id="language" name="language" required>
                                                <option value="" disabled selected>English</option>
                                                <option value="english">English</option>
                                                <option value="spanish">Spanish</option>
                                                <option value="french">French</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- row -->

                                <div class="addtl-details-row">
                                    <div class="row"> 
                                        <div class="col-12 col-lg-3 addtlcolfirst">
                                            <label for="passport-number">Passport Number</label>
                                            <input class="tp-input" id="passport-number" name="passport-number" placeholder="0000000000" required>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <label for="passport-expiry">Passport Expiry</label>
                                            <input class="tp-input" id="passport-expiry" name="passport-expiry" placeholder="MM/YYYY" required>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <label for="nationality">Nationality</label>
                                            <div class="select">
                                                <select class="tp-input" id="nationality" name="nationality" required>
                                                    <option value="British">British</option>
                                                    <option value="American">American</option>
                                                    <option value="Canadian">Canadian</option>
                                                </select>
                                                <div class="select_arrow"></div>
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                </div>

                                <div class="addtl-details-row">
                                    <div class="row"> 
                                        <!-- Flight Number -->
                                        <div class="col-12 col-lg-3 addtlcolfirst">
                                            <label for="flight-number">Flight Number</label>
                                            <input class="tp-input" id="flight-number" name="flight-number" placeholder="000000000" required>
                                        </div>
                                        
                                        <!-- Carrier -->
                                        <div class="col-12 col-lg-3">
                                            <label for="carrier">Carrier</label>
                                            <div class="select">
                                                <select class="tp-input" id="carrier" name="carrier" required>
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="Carrier1">Carrier 1</option>
                                                    <option value="Carrier2">Carrier 2</option>
                                                    <option value="Carrier3">Carrier 3</option>
                                                </select>
                                                <div class="select_arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="addtl-details-row">
                                    <div class="row"> 
                                        <!-- Country Code -->
                                        <div class="col-12 col-lg-3 countrycode">
                                            <label for="country-code">Country Code</label>
                                            <div class="select">
                                                <select class="tp-input" id="country-code" name="country-code" required>
                                                    <option value="" disabled selected>United Kingdom(+44)</option>
                                                    <option value="US">United States (+1)</option>
                                                    <option value="CA">Canada (+1)</option>
                                                    <option value="FR">France (+33)</option>
                                                    <!-- Add more country options -->
                                                </select>
                                                <div class="select_arrow"></div>
                                            </div>
                                        </div>
                                        
                                        <!-- Phone Number -->
                                        <div class="col-12 col-lg-4">
                                            <label for="phone-number">Phone Number</label>
                                            <input class="tp-input" id="phone-number" name="phone-number" placeholder="0123456789" required>
                                        </div>

                                        <!-- Email Address -->
                                        <div class="col-12 col-lg-4">
                                            <label for="email-address">Email Address</label>
                                            <input class="tp-input" id="email-address" name="email-address" placeholder="example@email.com" required>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- passengerbox main -->
                        </div><!-- passengerbox -->

                        <div class="passengerbox">
                            <h3 class="fw-semibold mb-3 fs20 fontfam2">
                                Room 1 (Standard Room)
                            </h3>

                            <div class="passengerbox-main">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                                <h3 class="fontfam2 fs20 mb-3">
                                                Adult 01
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                                <h3 class="fontfam2 fs20 mb-3">
                                                Adult 02
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                                <h3 class="fontfam2 fs20 mb-3">
                                                Adult 03
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                </div><!-- row -->

                                <div class="row mt-3">
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                            <h3 class="fontfam2 fs20 mb-3">
                                                Child 01
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                            <label>Age of Child</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                            <h3 class="fontfam2 fs20 mb-3">
                                                Child 02
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                            <label>Age of Child</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                            <h3 class="fontfam2 fs20 mb-3">
                                                Child 03
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                            <label>Age of Child</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->

                                    <div class="col-12 mt-3">
                                        <label for="">
                                            Please state if you need any special requests/arrangements
                                        </label>
                                        <textarea name="" id="" class="tp-textarea" placeholder="Start typing here..."></textarea>
                                    </div>
                                </div><!-- row -->
                            </div><!-- passengerbox main -->

                        </div>

                        <div class="passengerbox">
                            <h3 class="fw-semibold mb-3 fs20 fontfam2">
                                Room 2 (Standard Room)
                            </h3>

                            <div class="passengerbox-main">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                                <h3 class="fontfam2 fs20 mb-3">
                                                Adult 01
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                                <h3 class="fontfam2 fs20 mb-3">
                                                Adult 02
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                                <h3 class="fontfam2 fs20 mb-3">
                                                Adult 03
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                </div><!-- row -->

                                <div class="row mt-3">
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                            <h3 class="fontfam2 fs20 mb-3">
                                                Child 01
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                            <label>Age of Child</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                            <h3 class="fontfam2 fs20 mb-3">
                                                Child 02
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                            <label>Age of Child</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                            <h3 class="fontfam2 fs20 mb-3">
                                                Child 03
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                            <label>Age of Child</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->

                                    <div class="col-12 mt-3">
                                        <label for="">
                                            Please state if you need any special requests/arrangements
                                        </label>
                                        <textarea name="" id="" class="tp-textarea" placeholder="Start typing here..."></textarea>
                                    </div>
                                </div><!-- row -->
                            </div><!-- passengerbox main -->

                        </div>

                        <div class="passengerbox">
                            <h3 class="fw-semibold mb-3 fs20 fontfam2">
                                Room 3 (Standard Room)
                            </h3>

                            <div class="passengerbox-main">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                                <h3 class="fontfam2 fs20 mb-3">
                                                Adult 01
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                                <h3 class="fontfam2 fs20 mb-3">
                                                Adult 02
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                                <h3 class="fontfam2 fs20 mb-3">
                                                Adult 03
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                </div><!-- row -->

                                <div class="row mt-3">
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                            <h3 class="fontfam2 fs20 mb-3">
                                                Child 01
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                            <label>Age of Child</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                            <h3 class="fontfam2 fs20 mb-3">
                                                Child 02
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                            <label>Age of Child</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->
                                    <div class="col-12 col-md-4">
                                        <div class="hotel-pbox hotel-pbox-border">
                                            <h3 class="fontfam2 fs20 mb-3">
                                                Child 03
                                            </h3>
                                            <label>Date of Birth</label>
                                            <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                            <label>Age of Child</label>
                                            <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                                        </div><!-- hotel pbox -->
                                    </div><!-- col -->

                                    <div class="col-12 mt-3">
                                        <label for="">
                                            Please state if you need any special requests/arrangements
                                        </label>
                                        <textarea name="" id="" class="tp-textarea" placeholder="Start typing here..."></textarea>
                                    </div>
                                </div><!-- row -->
                            </div><!-- passengerbox main -->

                        </div>

                        <div class="d-flex justify-content-end mt-4 pt-2">
                            <input class="btn btn-primary" type="submit" value="Save and Proceed">
                        </div>
                    </form>
                </div><!-- col -->

            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-search.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar-flights.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar.js"></script>

</body>
</html>