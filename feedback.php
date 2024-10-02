<?php include './config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Travelpack</title>

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
    <div id="innerhero" style="background-image:url(<?= getBaseUrl() ?>/assets/img/inner/hero-contactus.jpg)">
        <?php include './sections/global/header-nav.php'; ?>
    </div><!-- main hero -->

    <section class="feedback-section block">
        <div class="container">
            <div class="feedback-office-section mt-5">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h3>
                            Feedback
                        </h3>

                        <div class="text-black">
                            <p>
                                To help us improve we are always keen to hear your feedback. Please feel free to put anything you feel can be improved. You do not need to leave your contact details, but it would help us to resolve issues if we can contact you.
                            </p>

                            <p>
                                If your feedback is related to a current booking, please email <a href="mailto:customer.support@travelpack.com">customer.support@travelpack.com</a>
                            </p>
                        </div>
                    </div><!-- col -->

                    <div class="col-12 col-lg-6 offset-lg-1">
                        <h3>
                            Get in Touch
                        </h3>
                        <div class="get-in-touch-contact">
                            <form>
                                <div class="row">
                                    <!-- First Name -->
                                    <div class="col-md-5 col-12">
                                        <label for="first-name">First Name*</label>
                                        <input type="text" id="first-name" name="first-name" class="tp-input" placeholder="First Name" required>
                                    </div><!-- col -->

                                    <!-- Last Name -->
                                    <div class="col-md-5 col-12">
                                        <label for="last-name">Last Name*</label>
                                        <input type="text" id="last-name" name="last-name" class="tp-input" placeholder="Last Name" required>
                                    </div><!-- col -->
                                </div>

                                <div class="row mt-3">
                                    <!-- Country Code -->
                                    <div class="col-md-5 col-12">
                                        <label for="country-code">Country Code</label>
                                        <div class="select">
                                            <select name="country-code" id="country-code">
                                                <option value="uk">United Kingdom (+44)</option>
                                                <option value="uk">United Kingdom (+44)</option>
                                                <option value="uk">United Kingdom (+44)</option>
                                                <!-- Add other country codes here -->
                                            </select>
                                            <div class="select_arrow"></div>                                            
                                        </div>
                                    </div><!-- col -->

                                    <!-- Phone Number -->
                                    <div class="col-md-5 col-12">
                                        <label for="phone-number">Phone Number</label>
                                        <input type="tel" id="phone-number" name="phone-number" class="tp-input" placeholder="0123456789">
                                    </div><!-- col -->
                                </div><!-- row -->

                                <div class="row">
                                    <!-- Email Address -->
                                    <div class="col-md-7 col-12">
                                        <label for="email">Email Address*</label>
                                        <input type="email" id="email" name="email" class="tp-input" placeholder="example@email.com" required>
                                    </div><!-- col -->
                                </div><!-- row -->


                                <div class="row mt-3">
                                    <!-- Useful Information -->
                                    <div class="col-12 col-lg-12">
                                        <label for="useful-info">Useful Information*</label>
                                        <textarea class="tp-input" id="useful-info" name="useful-info" placeholder="Start typing here" required></textarea>
                                    </div><!-- col -->

                                    <!-- Checkbox for Special Offers -->
                                    <div class="col-12">
                                        <div class="mt-3 mb-3 d-flex column-gap-2 align-items-center fs14">
                                            <div class="feedback-custom-checkbox">
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
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="submit-button btn btn-primary">Submit</button>
                                    </div><!-- col -->
                                </div>

                                </div><!-- row -->
                            </form>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- feedback pffoce seciton -->
        </div><!-- container -->
    </section>

    <?php include './sections/global/cta.php'; ?>

    <?php include './sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>

</body>

</html>