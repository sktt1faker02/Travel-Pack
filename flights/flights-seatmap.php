<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Flights Seat Map</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <div id="nohero-inner">
        <?php include '../sections/global/header-nav.php';?>
    </div><!-- main hero -->
    <section class="block search-wrap bggray" id="hotels-search">
        <div class="container">
            <div class="row">
                <div class="col-10 mb-4 tp-page-title">
                    <h1>
                    Select Seat for Passenger for Flight 03 LGW[London Gatwick Airport]
                    to [ADA] Adu Dhabi Airport
                    </h1>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">

                <?php include '../sections/sidebar/flights.php';?>

                <div class="col-12 col-lg-8 tp-main">
                    <ul class="nav nav-tabs tp-tabs" id="tabs-flight" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab-flight01" data-bs-toggle="tab" data-bs-target="#tab-flight01-pane" type="button" role="tab" aria-controls="tab-flight01-pane" aria-selected="true">Flight 01</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-flight02" data-bs-toggle="tab" data-bs-target="#tab-flight02-pane" type="button" role="tab" aria-controls="tab-flight02-pane" aria-selected="false">Flight 02</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-flight03" data-bs-toggle="tab" data-bs-target="#tab-flight03-pane" type="button" role="tab" aria-controls="tab-flight03-pane" aria-selected="false">Flight 03</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-flight04" data-bs-toggle="tab" data-bs-target="#tab-flight04-pane" type="button" role="tab" aria-controls="tab-flight04-pane" aria-selected="false">Flight 04</button>
                        </li>
                        <!-- You can add more flight tabs as needed -->
                    </ul>
                    <ul class="nav nav-tabs tp-tabs mb-4" id="tabs-passengers" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab-passenger01" data-bs-toggle="tab" data-bs-target="#tab-passenger01-pane" type="button" role="tab" aria-controls="tab-passenger01-pane" aria-selected="true">P01</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger02" data-bs-toggle="tab" data-bs-target="#tab-passenger02-pane" type="button" role="tab" aria-controls="tab-passenger02-pane" aria-selected="false">P02</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger03" data-bs-toggle="tab" data-bs-target="#tab-passenger03-pane" type="button" role="tab" aria-controls="tab-passenger03-pane" aria-selected="false">P03</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger04" data-bs-toggle="tab" data-bs-target="#tab-passenger04-pane" type="button" role="tab" aria-controls="tab-passenger04-pane" aria-selected="false">P04</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger05" data-bs-toggle="tab" data-bs-target="#tab-passenger05-pane" type="button" role="tab" aria-controls="tab-passenger05-pane" aria-selected="false">P05</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger06" data-bs-toggle="tab" data-bs-target="#tab-passenger06-pane" type="button" role="tab" aria-controls="tab-passenger06-pane" aria-selected="false">P06</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger07" data-bs-toggle="tab" data-bs-target="#tab-passenger07-pane" type="button" role="tab" aria-controls="tab-passenger07-pane" aria-selected="false">P07</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger08" data-bs-toggle="tab" data-bs-target="#tab-passenger08-pane" type="button" role="tab" aria-controls="tab-passenger08-pane" aria-selected="false">P08</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-passenger09" data-bs-toggle="tab" data-bs-target="#tab-passenger09-pane" type="button" role="tab" aria-controls="tab-passenger09-pane" aria-selected="false">P09</button>
                        </li>
                    </ul>

                    <div class="flights-wrap">
                        <div class="flights-main">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab-passenger01-pane" role="tabpanel" aria-labelledby="tab-best-pane" tabindex="0">
                                        <div class="">
                                            <div class="flightsseatmap-top">
                                                <img src="<?= getBaseUrl() ?>/assets/img/flights/seatcolors.png" class="mt-3 mb-4 pb-2" alt="">
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <img src="<?= getBaseUrl() ?>/assets/img/flights/seatmap.png" class="my-5" alt="">
                                            </div>
                                        </div><!-- flights box -->
                                    </div><!-- flights wrap -->
                                </div><!-- tab pane -->
                                <div class="tab-pane fade" id="tab-passenger02-pane" role="tabpanel" aria-labelledby="tab-best-pane" tabindex="0">
                                </div><!-- tab pane -->
                            </div><!-- tab content -->
                        </div><!-- flights main -->
                    </div><!-- flights wrap -->
                </div>
            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-search.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>

</body>

</html>