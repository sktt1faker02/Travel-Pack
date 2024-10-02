<?php include './config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Travelpack</title>

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
    <div id="innerhero" style="background-image:url(<?= getBaseUrl() ?>/assets/img/inner/hero-contactus.jpg)">
        <?php include './sections/global/header-nav.php'; ?>
    </div><!-- main hero -->

    <section class="faqs-section block">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-5">
                    <h4 class="mb-3">Frequently Asked Questions</h4>
                    <p class="text-black">
                        Our consultants are available to provide support and answer any questions you may have. Don’t hesitate to reach out to the team that knows travel best.
                    </p>
                </div><!-- col -->
                <div class="col-12 col-lg-3 offset-lg-1 d-flex flex-column">
                    <div class="contactus-top-box flex-grow-1">
                        <div class="ctb-top">
                            <h5>
                                Flights Team
                            </h5>
                        </div><!-- ctb top -->
                        <div class="ctb-bottom txt-gray fs14">
                            <p>
                                <strong>
                                    Monday - Sunday
                                </strong><br>
                                08.30 am - 11.00 pm
                            </p>
                            <p>
                                <strong>
                                    0208 585 4080
                                </strong>
                            </p>
                        </div>
                    </div><!-- contactustopbox -->
                </div>
                <div class="col-12 col-lg-3">
                    <div class="contactus-top-box">
                        <div class="ctb-top">
                            <h5>
                                Holiday Team
                            </h5>
                        </div><!-- ctb top -->
                        <div class="ctb-bottom txt-gray fs14">
                            <p>
                                <strong>
                                    Monday - Friday
                                </strong><br>
                                08.30 am - 09.00 pm
                            </p>
                            <p>
                                <strong>
                                    Saturday
                                </strong><br>
                                08.30 am - 08.00 pm
                            </p>
                            <p>
                                <strong>
                                    Sunday
                                </strong><br>
                                10.00 am - 04.00 pm
                            </p>
                            <p>
                                <strong>
                                    0208 585 4020
                                </strong>
                            </p>
                        </div><!-- ctb bottom -->
                    </div><!-- contactustopbox -->
                </div><!-- col -->
            </div><!-- row -->

            <div class="contact-office-section mt-5">
                <div class="row">
                    <div class="col-12">
                        <h3>
                            Get in touch
                        </h3>
                    </div><!-- col -->
                </div><!-- row -->
                <div class="get-in-touch-contact">
                    <form>
                        <div class="row">
                            <!-- Form Type -->
                            <div class="col-12 col-lg-2">
                                <label for="form-type">Form Type</label>
                                <div class="select">
                                    <select name="form-type" id="form-type" class="inbound-checked-baggage">
                                        <option value="general-enquiry">General Enquiry</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div>
                            </div><!-- col -->

                            <!-- Title -->
                            <div class="col-12 col-lg-1">
                                <label for="title">Title*</label>
                                <div class="select">
                                    <select name="title" id="title" required>
                                        <option value="mr">Mr</option>
                                        <option value="mrs">Mrs</option>
                                        <option value="ms">Ms</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div>
                            </div><!-- col -->

                            <!-- First Name -->
                            <div class="col-md-2 col-12">
                                <label for="first-name">First Name*</label>
                                <input type="text" id="first-name" name="first-name" class="tp-input" placeholder="First Name" required>
                            </div><!-- col -->

                            <!-- Last Name -->
                            <div class="col-md-2 col-12">
                                <label for="last-name">Last Name*</label>
                                <input type="text" id="last-name" name="last-name" class="tp-input" placeholder="Last Name" required>
                            </div><!-- col -->

                            <!-- Address -->
                            <div class="col-md-5 col-12">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" class="tp-input" placeholder="Address">
                            </div><!-- col -->

                            <!-- Email Address -->
                            <div class="col-md-3 col-12">
                                <label for="email">Email Address*</label>
                                <input type="email" id="email" name="email" class="tp-input" placeholder="example@email.com" required>
                            </div><!-- col -->

                            <!-- Country Code -->
                            <div class="col-md-2 col-12">
                                <label for="country-code">Country Code</label>
                                <div class="select">
                                    <select name="country-code" id="country-code">
                                        <option value="uk">United Kingdom (+44)</option>
                                        <!-- Add other country codes here -->
                                    </select>
                                    <div class="select_arrow"></div>
                                </div>
                            </div><!-- col -->

                            <!-- Phone Number -->
                            <div class="col-md-2 col-12">
                                <label for="phone-number">Phone Number</label>
                                <input type="tel" id="phone-number" name="phone-number" class="tp-input" placeholder="0123456789">
                            </div><!-- col -->

                            <!-- Travel Date -->
                            <div class="col-md-5 col-12">
                                <label for="travel-date">Travel Date</label>
                                <div class="select">
                                    <select name="travel-date" id="travel-date">
                                        <option value="">DD/MM/YYYY</option>
                                        <!-- Optionally, add more date options here -->
                                    </select>
                                    <div class="select_arrow"></div>
                                </div>
                            </div><!-- col -->

                            <!-- Useful Information -->
                            <div class="col-12 col-lg-8">
                                <label for="useful-info">Useful Information*</label>
                                <textarea class="tp-input" id="useful-info" name="useful-info" placeholder="Start typing here" required></textarea>
                            </div><!-- col -->

                            <!-- Checkbox for Special Offers -->
                            <div class="col-12">
                                <div class="mt-3 mb-3 d-flex column-gap-2 align-items-center">

                                    <div class="feedback-custom-checkbox fs14">
                                        <input type="checkbox" id="special-offers" name="special-offers">
                                        <label for="special-offers">If you do not wish to receive special offers by email, please untick this box</label>
                                    </div>
                                </div>
                            </div><!-- col -->

                            <!-- reCAPTCHA -->
                            <div class="col-12">
                                <div class="g-recaptcha" data-sitekey="your-site-key"></div>
                            </div><!-- col -->

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="submit-button btn btn-primary">Submit</button>
                            </div><!-- col -->
                        </div><!-- row -->
                    </form>
                </div>
            </div><!-- contact office section -->

            <div class="contact-office-section">
                <div class="row mt-5 mb-4">
                    <div class="col-12">
                        <h3>
                            Contact Specific Office
                        </h3>
                    </div>
                </div><!-- row -->

                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-3 d-lg-flex">
                        <div class="contact-office-box">
                            <div class="cob-top">
                                <img src="<?= getBaseUrl() ?>/assets/img/inner/contact1.jpg" alt="">
                            </div><!-- cob top -->
                            <div class="cob-bottom">
                                <h5>
                                    Worldwide Flights 
                                </h5>
                                <div class="txt-gray fs14">
                                    <p>
                                        <strong>
                                            Telephone No.
                                        </strong><br>
                                        <a href="tel:02085854040">0208 585 4040</a>
                                    </p>
                                    <p>
                                        <strong>
                                            Email Address
                                        </strong><br>
                                        <div class="d-flex flex-column">
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                        </div>
                                    </p>
                                </div>
                            </div><!-- cob bottom -->
                        </div><!-- contact office box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 d-lg-flex">
                        <div class="contact-office-box">
                            <div class="cob-top">
                                <img src="<?= getBaseUrl() ?>/assets/img/inner/contact2.jpg" alt="">
                            </div><!-- cob top -->
                            <div class="cob-bottom">
                                <h5>
                                    India, Indian Ocean & Far East Holidays
                                </h5>
                                <div class="txt-gray fs14">
                                    <p>
                                        <strong>
                                            Telephone No.
                                        </strong><br>
                                        <a href="tel:02085854040">0208 585 4040</a>
                                    </p>
                                    <p>
                                        <strong>
                                            Email Address
                                        </strong><br>
                                        <div class="d-flex flex-column">
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                        </div>
                                    </p>
                                </div>
                            </div><!-- cob bottom -->
                        </div><!-- contact office box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 d-lg-flex">
                        <div class="contact-office-box">
                            <div class="cob-top">
                                <img src="<?= getBaseUrl() ?>/assets/img/inner/contact3.jpg" alt="">
                            </div><!-- cob top -->
                            <div class="cob-bottom">
                                <h5>
                                    USA & Canada Holidays
                                </h5>
                                <div class="txt-gray fs14">
                                    <p>
                                        <strong>
                                            Telephone No.
                                        </strong><br>
                                        <a href="tel:02085854040">0208 585 4040</a>
                                    </p>
                                    <p>
                                        <strong>
                                            Email Address
                                        </strong><br>
                                        <div class="d-flex flex-column">
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                        </div>
                                    </p>
                                </div>
                            </div><!-- cob bottom -->
                        </div><!-- contact office box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 d-lg-flex">
                        <div class="contact-office-box">
                            <div class="cob-top">
                                <img src="<?= getBaseUrl() ?>/assets/img/inner/contact4.jpg" alt="">
                            </div><!-- cob top -->
                            <div class="cob-bottom">
                                <h5>
                                    African Holidays
                                </h5>
                                <div class="txt-gray fs14">
                                    <p>
                                        <strong>
                                            Telephone No.
                                        </strong><br>
                                        <a href="tel:02085854040">0208 585 4040</a>
                                    </p>
                                    <p>
                                        <strong>
                                            Email Address
                                        </strong><br>
                                        <div class="d-flex flex-column">
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                        </div>
                                    </p>
                                </div>
                            </div><!-- cob bottom -->
                        </div><!-- contact office box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 d-lg-flex">
                        <div class="contact-office-box">
                            <div class="cob-top">
                                <img src="<?= getBaseUrl() ?>/assets/img/inner/contact5.jpg" alt="">
                            </div><!-- cob top -->
                            <div class="cob-bottom">
                                <h5>
                                    Holidays to All other destinations
                                </h5>
                                <div class="txt-gray fs14">
                                    <p>
                                        <strong>
                                            Telephone No.
                                        </strong><br>
                                        <a href="tel:02085854040">0208 585 4040</a>
                                    </p>
                                    <p>
                                        <strong>
                                            Email Address
                                        </strong><br>
                                        <div class="d-flex flex-column">
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                        </div>
                                    </p>
                                </div>
                            </div><!-- cob bottom -->
                        </div><!-- contact office box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 d-lg-flex">
                        <div class="contact-office-box">
                            <div class="cob-top">
                                <img src="<?= getBaseUrl() ?>/assets/img/inner/contact4.jpg" alt="">
                            </div><!-- cob top -->
                            <div class="cob-bottom">
                                <h5>
                                    Cruise
                                </h5>
                                <div class="txt-gray fs14">
                                    <p>
                                        <strong>
                                            Telephone No.
                                        </strong><br>
                                        <a href="tel:02085854040">0208 585 4040</a>
                                    </p>
                                    <p>
                                        <strong>
                                            Email Address
                                        </strong><br>
                                        <div class="d-flex flex-column">
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                        </div>
                                    </p>
                                </div>
                            </div><!-- cob bottom -->
                        </div><!-- contact office box -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- contact office section -->
            
            <div class="contact-office-section">
                <div class="row mt-5 mb-4">
                    <div class="col-12">
                        <h3>
                            Support Office
                        </h3>
                    </div>
                </div><!-- row -->

                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-3 d-lg-flex">
                        <div class="contact-office-box">
                            <div class="cob-top">
                                <img src="<?= getBaseUrl() ?>/assets/img/inner/contact7.jpg" alt="">
                            </div><!-- cob top -->
                            <div class="cob-bottom">
                                <h5>
                                    Online Support
                                </h5>
                                <div class="txt-gray fs14">
                                    <p>
                                        <strong>
                                            Telephone No.
                                        </strong><br>
                                        <a href="tel:02085854040">0208 585 4040</a>
                                    </p>
                                    <p>
                                        <strong>
                                            Email Address
                                        </strong><br>
                                        <div class="d-flex flex-column">
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                        </div>
                                    </p>
                                </div>
                            </div><!-- cob bottom -->
                        </div><!-- contact office box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 d-lg-flex">
                        <div class="contact-office-box">
                            <div class="cob-top">
                                <img src="<?= getBaseUrl() ?>/assets/img/inner/contact8.jpg" alt="">
                            </div><!-- cob top -->
                            <div class="cob-bottom">
                                <h5>
                                    Administration & Ticketing 
                                </h5>
                                <div class="txt-gray fs14">
                                    <p>
                                        <strong>
                                            Telephone No.
                                        </strong><br>
                                        <a href="tel:02085854040">0208 585 4040</a>
                                    </p>
                                    <p>
                                        <strong>
                                            Email Address
                                        </strong><br>
                                        <div class="d-flex flex-column">
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                        </div>
                                    </p>
                                </div>
                            </div><!-- cob bottom -->
                        </div><!-- contact office box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 d-lg-flex">
                        <div class="contact-office-box">
                            <div class="cob-top">
                                <img src="<?= getBaseUrl() ?>/assets/img/inner/contact9.jpg" alt="">
                            </div><!-- cob top -->
                            <div class="cob-bottom">
                                <h5>
                                    Aministration
                                </h5>
                                <div class="txt-gray fs14">
                                    <p>
                                        <strong>
                                            Telephone No.
                                        </strong><br>
                                        <a href="tel:02085854040">0208 585 4040</a>
                                    </p>
                                    <p>
                                        <strong>
                                            Email Address
                                        </strong><br>
                                        <div class="d-flex flex-column">
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                        </div>
                                    </p>
                                </div>
                            </div><!-- cob bottom -->
                        </div><!-- contact office box -->
                    </div><!-- col -->
                    <div class="col-12 col-md-6 col-lg-3 d-lg-flex">
                        <div class="contact-office-box">
                            <div class="cob-top">
                                <img src="<?= getBaseUrl() ?>/assets/img/inner/contact10.jpg" alt="">
                            </div><!-- cob top -->
                            <div class="cob-bottom">
                                <h5>
                                Accounts Payments & Account Receivable & Cruise Holidays
                                </h5>
                                <div class="txt-gray fs14">
                                    <p>
                                        <strong>
                                            Telephone No.
                                        </strong><br>
                                        <a href="tel:02085854040">0208 585 4040</a>
                                    </p>
                                    <p>
                                        <strong>
                                            Email Address
                                        </strong><br>
                                        <div class="d-flex flex-column">
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                            <a href="mailto:flights@travelpack.com">flights@travelpack.com</a>
                                        </div>
                                    </p>
                                </div>
                            </div><!-- cob bottom -->
                        </div><!-- contact office box -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- contact office section -->
        </div><!-- container -->
    </section>

    <?php include './sections/global/cta.php'; ?>

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