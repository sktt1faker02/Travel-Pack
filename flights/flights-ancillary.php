<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Flights Ancillary</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-flights.css">
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

    <section class="block search-wrap bggray" id="flights-ancillary">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 tp-page-title">
                    <h1>
                        Ancillary Options
                    </h1>
                    <div class="goback fw-medium mt-4 mb-3">
                        <button onclick="goBack()">
                            <i class="fa-solid fa-chevron-left fs-icon me-2"></i> Back to Results
                        </button>
                    </div>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                <?php include '../sections/sidebar/flights.php';?>

                <div class="col-12 col-lg-8">
                    <form action="" method="get"></form>
                        <div class="passengerbox">
                            <h3 class="fw-normal fs20 fontfam2">
                                Lead Passenger
                            </h3>
                            <h3 class="mb-3 tp-top-heading">
                                Passenger 1
                            </h3>
                            <div class="passengerbox-main">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="fontfam2 mb-3 fs20">
                                            Baggage Details
                                        </h3>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label>Outbound Checked Baggage</label>
                                        <div class="select">
                                            <select class="outbound-checked-baggage">
                                                <option>00</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-md-6 col-12">
                                        <label>Inbound Checked Baggage</label>
                                        <div class="select">
                                            <select class="inbound-checked-baggage">
                                                <option>00</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-md-6 col-12">
                                        <label>Outbound Hand Baggage</label>
                                        <div class="select">
                                            <select class="outbound-hand-baggage">
                                                <option>00</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-md-6 col-12">
                                        <label>Inbound hand Baggage</label>
                                        <div class="select">
                                            <select class="inbound-hand-baggage">
                                                <option>00</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- row -->

                                <div class="passengerbox-bottom">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="fontfam2 fs20">
                                                Extras
                                            </h3>
                                            <table style="width: 100%; border-collapse: separate; border-spacing: 0; border: 1px solid #ccc; border-radius: 6px;" class="table-flight-ancillary">
                                                <thead>
                                                    <tr style="background-color: #e6e6e6; font-weight: bold; text-align: left; border-bottom: 1px solid #ccc;">
                                                        <th style="padding: 10px; border-right: 1px solid #ccc; border-top-left-radius: 6px;"></th>
                                                        <th style="padding: 10px; border-right: 1px solid #ccc;">Title</th>
                                                        <th style="padding: 10px; border-top-right-radius: 6px;">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
                                                            <label class="custom-checkbox-ancillary">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </td>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">Speedy Boarding</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc;">£14.87*</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
                                                            <label class="custom-checkbox-ancillary">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </td>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">Lorem Ipsum</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc;">£00.00*</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
                                                            <label class="custom-checkbox-ancillary">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </td>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc;">Lorem Ipsum</td>
                                                        <td style="padding: 10px; border-bottom-right-radius: 6px;">£100.00*</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- passengerbox bottom -->
                            </div><!-- passengerbox main -->
                        </div><!-- passengerbox -->
                        <div class="passengerbox mt-4 pt-2">
                            <h3 class="fw-normal fs20 fontfam2">
                                Additional Passengers
                            </h3>
                            <h3 class="mb-3 tp-top-heading mt-3">
                                Passenger 2
                            </h3>
                            <div class="passengerbox-main">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label>Outbound Checked Baggage</label>
                                        <div class="select">
                                            <select class="outbound-checked-baggage">
                                                <option>00</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-md-6 col-12">
                                        <label>Inbound Checked Baggage</label>
                                        <div class="select">
                                            <select class="inbound-checked-baggage">
                                                <option>00</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-md-6 col-12">
                                        <label>Outbound Hand Baggage</label>
                                        <div class="select">
                                            <select class="outbound-hand-baggage">
                                                <option>00</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-md-6 col-12">
                                        <label>Inbound hand Baggage</label>
                                        <div class="select">
                                            <select class="inbound-hand-baggage">
                                                <option>00</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- row -->
                                <div class="passengerbox-bottom">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="fontfam2 fs20">
                                                Extras
                                            </h3>
                                            <table style="width: 100%; border-collapse: separate; border-spacing: 0; border: 1px solid #ccc; border-radius: 6px;" class="table-flight-ancillary">
                                                <thead>
                                                    <tr style="background-color: #e6e6e6; font-weight: bold; text-align: left; border-bottom: 1px solid #ccc;">
                                                        <th style="padding: 10px; border-right: 1px solid #ccc; border-top-left-radius: 6px;"></th>
                                                        <th style="padding: 10px; border-right: 1px solid #ccc;">Title</th>
                                                        <th style="padding: 10px; border-top-right-radius: 6px;">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
                                                            <label class="custom-checkbox-ancillary">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </td>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">Speedy Boarding</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc;">£14.87*</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
                                                            <label class="custom-checkbox-ancillary">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </td>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">Lorem Ipsum</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ccc;">£00.00*</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc;">
                                                            <label class="custom-checkbox-ancillary">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </td>
                                                        <td style="padding: 10px; border-right: 1px solid #ccc;">Lorem Ipsum</td>
                                                        <td style="padding: 10px; border-bottom-right-radius: 6px;">£100.00*</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- passengerbox bottom -->
                            </div><!-- passengerbox main -->
                        </div><!-- passengerbox -->

                        <div class="d-flex justify-content-end mt-4 pt-2">
                            <input class="btn btn-primary" type="submit" value="Save and Proceed">
                        </div>
                </div>
            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-flights.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>

</body>
</html>