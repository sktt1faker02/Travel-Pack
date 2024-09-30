<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Provide Transfer Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-transfer.css">
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
                <?php include '../sections/sidebar/transfer.php';?>

                <div class="col-12 col-lg-8 tp-main">
                    <form action="<?= getBaseUrl() ?>/transfer/transfer-checkout-details.php" method="get"></form>
                        <div class="passengerbox outboundtransfer-details">
                            <h3 class="mb-3 tp-top-heading">
                                Outbound Transfer Details
                            </h3>
                            <div class="whiteboxbg">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="fontfam2 mb-3">
                                            Airport Pick Up Details
                                        </h5>
                                    </div>
                                    <div class="col-md-5 col-12">
                                        <label>Flight Number</label>
                                        <input type="text" id="otd-flightnumber" name="flightnumber" class="tp-input" placeholder="First Name">
                                    </div><!-- col -->
                                    <div class="col-md-7 col-12">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <label>Date</label>
                                                <input type="text" id="otd-date" name="date" class="tp-input tpinputdate" placeholder="DD/MM/YYYY">                                             
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="time">Time:</label>
                                                <input type="time" id="otd-time" name="time" class="tp-input" min="00:00" max="23:59" required>

                                            </div>
                                        </div>
                                    </div><!-- col -->
                                        <div class="col-md-5 col-12 mt-3">
                                            <label>Arriving Terminal</label>
                                            <input type="text" id="otd-arriving-terminal" name="arriving-terminal" class="tp-input" placeholder="Type Here...">
                                        </div><!-- col -->
                                        <div class="col-md-7 col-12 mt-3">
                                            <label>Departing From Airport</label>
                                            <input type="text" id="otd-departing-terminal" name="departing-terminal" class="tp-input" placeholder="Type Here...">
                                        </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- passengerbox main -->
                        </div><!-- passengerbox -->
                        <div class="passengerbox">
                            <div class="whiteboxbg">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="fontfam2 mb-3">
                                            Hotel Destination Details
                                        </h5>
                                    </div>
                                    <div class="col-md-5 col-12">
                                        <label>Name</label>
                                        <input type="text" id="fname" name="Name" class="tp-input" placeholder="Mr">
                                    </div><!-- col -->
                                    <div class="col-md-7 col-12">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <label for="country-code">Country Code</label>
                                                <div class="select">
                                                    <select name="country-code" required> 
                                                        <option value="US">United States (+1)</option>
                                                        <option value="CA">Canada (+1)</option>
                                                        <option value="GB">United Kingdom (+44)</option>
                                                    </select>
                                                    <div class="select_arrow"></div>
                                                </div>                                    
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="phone-number">Phone Number</label>
                                                <input type="text" id="phone" name="phone" class="tp-input" placeholder="1234567890" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')" title="Please enter only numeric digits">
                                            </div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-12">
                                        <label>Address</label>
                                        <input type="text" id="address1" name="address1" class="tp-input" placeholder="Type Here...">
                                        <input type="text" id="address1" name="address2" class="tp-input mt-2" placeholder="Type Here...">
                                        <input type="text" id="address1" name="address3" class="tp-input mt-2" placeholder="Type Here...">
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- passengerbox main -->
                        </div><!-- passengerbox -->
                        <div class="passengerbox mt-4">
                            <h3 class="mb-3 tp-top-heading mt-4">
                                Return Transfer Details
                            </h3>
                            <div class="whiteboxbg">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="fontfam2 mb-3">
                                            Hotel Pick Up Details
                                        </h5>
                                    </div>
                                    <div class="col-md-5 col-12">
                                        <label>Name</label>
                                        <input type="text" id="fname" name="Name" class="tp-input" placeholder="Mr">
                                    </div><!-- col -->
                                    <div class="col-md-7 col-12">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <label for="country-code">Country Code</label>
                                                <div class="select">
                                                    <select name="country-code" required> 
                                                        <option value="US">United States (+1)</option>
                                                        <option value="CA">Canada (+1)</option>
                                                        <option value="GB">United Kingdom (+44)</option>
                                                    </select>
                                                    <div class="select_arrow"></div>
                                                </div>                                    
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="phone-number">Phone Number</label>
                                                <input type="text" id="phone" name="phone" class="tp-input" placeholder="1234567890" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')" title="Please enter only numeric digits">
                                            </div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-12">
                                        <label>Address</label>
                                        <input type="text" id="address1" name="address1" class="tp-input" placeholder="Type Here...">
                                        <input type="text" id="address1" name="address2" class="tp-input mt-2" placeholder="Type Here...">
                                        <input type="text" id="address1" name="address3" class="tp-input mt-2" placeholder="Type Here...">
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- passengerbox main -->
                        </div><!-- passengerbox -->

                        <div class="passengerbox">
                            <div class="whiteboxbg pickup-details">
                                <div class="row align-items-center pb-3">
                                    <div class="col-7">
                                        <h5 class="fontfam2 mb-0">
                                            Airport Pick Up Details
                                        </h5>
                                    </div>
                                    <div class="col-5 d-flex justify-content-end">
                                        <div class="d-flex column-gap-2 align-items-center">
                                            <input type="checkbox" id="copyFromOutbound" name="copyFromOutbound">
                                            <label class="mb-0" for="copyFromOutbound">Copy from Outbound</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-5 col-12">
                                        <label>Flight Number</label>
                                        <input type="text" id="apd-flightnumber" name="flightnumber" class="tp-input" placeholder="Flight Number">
                                    </div><!-- col -->
                                    <div class="col-md-7 col-12">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <label>Date</label>
                                                <input type="text" id="apd-date" name="date" class="tp-input tpinputdate" placeholder="DD/MM/YYYY">                                             
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="time">Time:</label>
                                                <input type="time" id="apd-time" name="time" class="tp-input" min="00:00" max="23:59" required>
                                            </div>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-md-5 col-12 mt-3">
                                        <label>Arriving Terminal</label>
                                        <input type="text" id="apd-arriving-terminal" name="arriving-terminal" class="tp-input" placeholder="Arriving Terminal">
                                    </div><!-- col -->
                                    <div class="col-md-7 col-12 mt-3">
                                        <label>Departing From Airport</label>
                                        <input type="text" id="apd-departing-terminal" name="departing-terminal" class="tp-input" placeholder="Departing From Airport">
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- whiteboxbg -->
                        </div><!-- passengerbox -->
                        

                        <div class="">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-12 mt-4 d-flex justify-content-end">
                                    <input type="submit" class="btn btn-primary" value="Proceed to checkout" onclick="redirectToPage(event)">
                                </div>
                            </div><!-- row -->
                        </div><!-- proceed -->
                    </form>
                </div>
            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui-timepicker-addon.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>

    <script>
        function redirectToPage(event) {
            event.preventDefault();
            window.location.href = '<?= getBaseUrl() ?>/transfer/transfer-checkout-details.php';
        }

        jQuery(document).ready(function() {
            $(".tpinputdate").datepicker({
                dateFormat: "dd/mm/yy",
                minDate: 0
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var copyCheckbox = document.getElementById('copyFromOutbound');
            var otdFlightNumber = document.getElementById('otd-flightnumber');
            var otdDate = document.getElementById('otd-date');
            var otdTime = document.getElementById('otd-time');
            var otdArrivingTerminal = document.getElementById('otd-arriving-terminal');
            var otdDepartingTerminal = document.getElementById('otd-departing-terminal');

            var apdFlightNumber = document.getElementById('apd-flightnumber');
            var apdDate = document.getElementById('apd-date');
            var apdTime = document.getElementById('apd-time');
            var apdArrivingTerminal = document.getElementById('apd-arriving-terminal');
            var apdDepartingTerminal = document.getElementById('apd-departing-terminal');

            copyCheckbox.addEventListener('change', function() {
                if (copyCheckbox.checked) {
                    apdFlightNumber.value = otdFlightNumber.value;
                    apdDate.value = otdDate.value;
                    apdTime.value = otdTime.value;
                    apdArrivingTerminal.value = otdArrivingTerminal.value;
                    apdDepartingTerminal.value = otdDepartingTerminal.value;
                } else {
                    // Clear the values if the checkbox is unchecked
                    apdFlightNumber.value = '';
                    apdDate.value = '';
                    apdTime.value = '';
                    apdArrivingTerminal.value = '';
                    apdDepartingTerminal.value = '';
                }
            });
        });

    </script>

</body>
</html>