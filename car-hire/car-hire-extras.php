<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Car Hire Checkout Summary</title>

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
                        Prebookable Extras
                    </h1>
                    <div class="goback fw-medium mt-4 mb-3">
                        <button onclick="goBack()">
                            <i class="fa-solid fa-chevron-left fs-icon me-2"></i> Back to Results
                        </button>
                    </div>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                <?php include '../sections/sidebar/car-hire.php';?>

                <div class="col-12 col-lg-8 tp-main">
                    <form action="car-hire-purchase-details.php" method="post">   
                        <div class="tp-table">
                            <h3 class="mb-3 tp-top-heading">
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
                        </div><!-- tp table -->

                        <p class="txt-gray fs13 mt-3">
                            *Costs are Approximate, your customer will be charged in local currency
                        </p>
                        
                        <div class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-primary" value="Confirm Extras">
                        </div><!-- proceed -->
                    </form>
                </div><!-- tp-main -->
            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>

</body>
</html>