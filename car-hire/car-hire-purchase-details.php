<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Car Hire Purchase Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-car-hire.css">
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
                <?php include '../sections/sidebar/car-hire.php';?>

                <div class="col-12 col-lg-8 tp-main">
                    <div class="sumbasket-box">
                        <h3 class="fontfam2 fs20">
                            Details
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
                                        Change Details
                                    </button>
                                </div>
                            </div><!-- responsive table -->
                        </div>
                    </div><!-- sumbasketbox -->

                    <div class="sumbasket-box">
                        <div class="tp-table">
                            <h3 class="mb-3 tp-top-heading">
                                Itinerary
                            </h3>
                            <div class="responsive-table">
                                <div class="tp-table-main">
                                    <table class="table-pickup-dropoff">
                                        <thead>
                                            <tr>
                                                <th>Pickup</th>
                                                <th>DropOff</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>Address</strong><br>
                                                    Novotel London Stansted Hotel,<br>
                                                    Round Coppice Road, Stansted London
                                                </td>
                                                <td>
                                                    <strong>Address</strong><br>
                                                    Novotel London Stansted Hotel,<br>
                                                    Round Coppice Road, Stansted London
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Location</strong><br>
                                                    Airport
                                                </td>
                                                <td>
                                                    <strong>Location</strong><br>
                                                    Airport
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Date</strong><br>
                                                    13 Jun 2024 at 12:00
                                                </td>
                                                <td>
                                                    <strong>Date</strong><br>
                                                    14 Jun 2024 at 12:00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- tp table main -->
                            </div><!-- responsive table -->
                        </div><!-- tp table -->     
                    </div><!-- sumbasketbox -->
                    

                    <div class="sumbasket-box">
                        <h3 class="mb-3 tp-top-heading mt-4">
                            Your car
                        </h3>
                        <div class="whiteboxbg carhire-box">
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="car-hire-image">
                                        <img src="<?= getBaseUrl() ?>/assets/img/car-hire/car-thumb.jpg" alt="">
                                    </div>
                                </div><!-- col -->
                                <div class="col-lg-8 col-12 d-flex align-item-between flex-column">
                                    <div class="row">
                                        <div class="col-lg-3 car-hire-title">
                                            <div class="car-hire-boxtitle-main">
                                                <h3>
                                                    Toyota Aygo
                                                </h3>
                                                <span>
                                                    or similar
                                                </span>
                                            </div>

                                            <div class="fuelpolicy">
                                                <h6>
                                                    Fuel Policy (unspecified)
                                                </h6>
                                                <span>
                                                    Pick up and return full
                                                </span>
                                            </div>
                                        </div><!-- col -->
                                        <div class="col-lg-6 car-hire-features col-12 d-flex flex-row column-gap-4">
                                            <div class="car-hire-features-inner">
                                                <h6 class="txt-black fontfam2">
                                                    Rate Includes
                                                </h6>
                                                <ul>
                                                    <li>Breakdown Assistance</li>
                                                    <li>Airport Fee</li>
                                                    <li>Road Tax</li>
                                                    <li>Environmental Fee</li>
                                                    <li>Tax</li>
                                                    <li>One Way Fee</li>
                                                    <li>Unlimited Mileage</li>
                                                </ul>
                                            </div>
                                            <div class="car-hire-features-inner">
                                                <h6 class="txt-black fontfam2">
                                                    Car Features
                                                </h6>
                                                <ul>
                                                    <li>Mini (MCMR)</li>
                                                    <li>4 Passengers</li>
                                                    <li>2 Bags</li>
                                                    <li>3 Doors</li>
                                                    <li>Manual Transmission</li>
                                                    <li>Air Conditioned</li>
                                                </ul>
                                            </div>
                                        </div><!-- col -->
                                        <div class="col-lg-3 col-12 carhirelogo">
                                            <img src="<?= getBaseUrl() ?>/assets/img/car-hire/green-motors.png" alt="">
                                        </div>
                                    </div><!-- row -->

                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-8 d-flex justify-content-between align-items-center">
                                            <div class="carhire-termslink">
                                                <a href="#">
                                                    Show Terms & Conditions
                                                </a>
                                            </div><!-- carhire termslink -->
                                            <div class="carhirebox-price">
                                                <h3>
                                                    £117.72
                                                </h3>
                                            </div><!-- carehirebox -->
                                        </div><!-- col -->
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <button class="btn btn-white">
                                                Change Details
                                            </button>
                                        </div><!-- col lg -->
                                    </div><!-- row -->
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- whiteboxbg -->     
                    </div><!-- sumbasketbox -->
                    
                    <div class="sumbasket-box">
                        <div class="tp-table">
                            <h3 class="mb-3 tp-top-heading mt-4">
                                Extra Paid Locally
                            </h3>
                            <div class="responsive-table">
                                <div class="tp-table-main">
                                    <table class="table-extra-paid-locally">
                                        <thead>
                                            <tr>
                                                <th>Count</th>
                                                <th>Title</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select>
                                                        <option>00</option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </td>
                                                <td>Additional Driver</td>
                                                <td>£13.88*</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select>
                                                        <option>00</option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </td>
                                                <td>GPS</td>
                                                <td>£14.87*</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select>
                                                        <option>00</option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </td>
                                                <td>Child Toddler Seat</td>
                                                <td>£12.89*</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select>
                                                        <option>00</option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </td>
                                                <td>Booster Seat</td>
                                                <td>£12.89*</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select>
                                                        <option>00</option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </td>
                                                <td>Infant Child Seat</td>
                                                <td>£12.89*</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- tp table main -->
                            </div><!-- responsive table -->

                            <div class="d-flex align-items-centr justify-content-between mt-4">
                                <p class="txt-gray fs13 mt-3">
                                    *Costs are Approximate, your customer will be charged in local currency
                                </p>
                                
                                <div class="d-flex justify-content-end">
                                    <input type="submit" class="btn btn-white" value="Change Details">
                                </div><!-- proceed -->
                            </div>
                        </div><!-- tp table -->
                    </div><!-- sumbasketbox -->


                    <?php include '../sections/cta/cta-experiences.php';?>

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
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>

    <script>
        function redirectToPage(event) {
            event.preventDefault(); // Prevent the default form submission
            window.location.href = '<?= getBaseUrl() ?>/car-hire/car-hire-checkout-details.php'; // Redirect to the target page
        }
    </script>
</body>
</html>