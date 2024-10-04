<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Special Transfer Details</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-special-offers.css">
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
        <?php include '../sections/global/header-nav.php'; ?>
    </div><!-- main hero -->

    <section class="block search-wrap bggray">
        <div class="container">
            <h2 class="mb-4">
                Special Offer - Europe Explorer
            </h2>
            <div class="goback fw-medium mb-3">
                <button onclick="goBack()">
                    <i class="fa-solid fa-chevron-left fs-icon me-2"></i> Back to Results
                </button>
            </div>
            <div class="row g-4">
                <div class="col-12 col-lg-4 tp-sidebar">
                    <div class="filters-box totalpurchase">
                        <div>
                            Prices from
                        </div>

                        <div class="summary-price">
                            £1460.00
                        </div>
                    </div><!-- filters box -->
                    <div class="filters-box totalpurchase">
                        <div>
                            Offer Code
                        </div>

                        <div class="summary-price">
                            XXXXXX
                        </div>
                    </div><!-- filters box -->

                    <div class="filters-box-special-offers">
                        <div class="fbox-spo-image">
                            <img src="<?= getBaseUrl() ?>/assets/img/special-offers/specialoffersideimage.jpg" alt="">
                        </div>
                        <div class="fbox-spo-content">
                            <h5 class="fontfam2">
                                Turn your wish list into a packing list with us
                            </h5>
                            <p class="text-black fs15">
                                More than 100 exciting special offers on Flights, Hotels, Packages and many more. Get in touch with our team to book a dream holiday now!
                            </p>
                            <div class="d-flex justify-content-end mt-3">
                                <a href="#" class="btn btn-primary">
                                    Enquire Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="filters-box needbox">
                        <div class="fb-top fw-semibold">
                            <div>
                                Need Help?
                            </div>
                        </div><!-- fb-top   -->
                        <div class="fb-bottom txt-black">
                            <div class="flightpurchase-box">
                                If you need any help with your bookings simply <a href="#"><u>Contact Us</u></a> and we shall get in touch with you or Just call us on <a href="#">+44 208 585 4080 </a>
                            </div><!-- flight purchase box -->
                        </div>
                    </div><!-- filters box -->
                </div><!-- col -->

                <div class="col-12 col-lg-8 tp-main">
                    <div class="slidertop-spo-wrap position-relative">
                        <div class="slidertop-spo v-slide-wrap">
                            <div class="slidertop-spo-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/special-offers/bghero-specialoffers.jpg" alt="">
                            </div>
                            <div class="slidertop-spo-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/special-offers/bghero-specialoffers.jpg" alt="">
                            </div>
                            <div class="slidertop-spo-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/special-offers/bghero-specialoffers.jpg" alt="">
                            </div>
                            <div class="slidertop-spo-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/special-offers/bghero-specialoffers.jpg" alt="">
                            </div>
                            <div class="slidertop-spo-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/special-offers/bghero-specialoffers.jpg" alt="">
                            </div>
                            <div class="slidertop-spo-slide v-slide">
                                <img src="<?= getBaseUrl() ?>/assets/img/special-offers/bghero-specialoffers.jpg" alt="">
                            </div>
                        </div>
                        <div class="p-flex">
                            <div id="slider-nav">
                                <span id="current">01</span>/<span id="total">08</span>
                            </div>
                            <button class="v-all">View All</button>
                        </div>
                    </div>

                    <div class="overview-special-offers mt-4">
                        <div class="overview-top">
                            <h4>
                                Overview
                            </h4>
                        </div>
                        <div class="overview-content">
                            <div class="row txt-gray">
                                <div class="col-12 col-md-6">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur. Dictumst in ac a placerat malesuada et quisque. Rhoncus praesent vitae sed venenatis felis integer sapien. A volutpat amet ipsum nibh. Pellentesque malesuada fringilla a auctor ipsum tortor venenatis mauris. Et ipsum nec vitae ac adipiscing. Bibendum molestie nunc suspendisse odio. Sed sed suscipit imperdiet venenatis tortor condimentum ultrices amet. Et consectetur tortor aliquam facilisi turpis malesuada aliquam. Pharetra libero senectus id non. Rhoncus in cursus consequat dignissim proin.
                                    </p>
                                </div><!-- col -->
                                <div class="col-12 col-md-6">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur. Dictumst in ac a placerat malesuada et quisque. Rhoncus praesent vitae sed venenatis felis integer sapien. A volutpat amet ipsum nibh. Pellentesque malesuada fringilla a auctor ipsum tortor venenatis mauris. Et ipsum nec vitae ac adipiscing. Bibendum molestie nunc suspendisse odio. Sed sed suscipit imperdiet venenatis tortor condimentum ultrices amet. Et consectetur tortor aliquam facilisi turpis malesuada aliquam. Pharetra libero senectus id non. Rhoncus in cursus consequat dignissim proin.
                                    </p>
                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- overview content -->
                    </div>

                    <div class="spo-travel-details mt-4">
                        <div class="spotd-top">
                            <h4>
                                Travel Details
                            </h4>
                        </div><!-- spotd-top -->
                        <div class="spotd-bottom d-flex">
                            <div class="spotd-bottom-col">
                                <p class="txt-black">
                                    Prices start from
                                </p>
                                <p class="txt-gray">
                                    £2,550.67
                                </p>
                            </div><!-- c\ol -->
                            <div class="spotd-bottom-col">
                                <p class="txt-black">
                                    Travel Between
                                </p>
                                <p class="txt-gray">
                                    12 Nov 2024 to <br>
                                    12 Nov 2024
                                </p>
                            </div><!-- c\ol -->
                            <div class="spotd-bottom-col">
                                <p class="txt-black">
                                    Duration
                                </p>
                                <p class="txt-gray">
                                    18 Nights
                                </p>
                            </div><!-- c\ol -->
                            <div class="spotd-bottom-col">
                                <p class="txt-black">
                                    Book by
                                </p>
                                <p class="txt-gray">
                                    30 Jun 2024
                                </p>
                            </div><!-- c\ol -->
                        </div><!-- row -->
                    </div><!-- spo-travel-details -->

                    <div class="spobox-feature whiteboxbg mt-4">
                        <div class="row">
                            <div class="col-12 col-lg-6 d-flex">
                                <div class="spobox-feature-image-wrap">
                                    <i class="fa-regular fa-image"></i>
                                </div><!-- spobox-feature-image-wrap -->
                            </div><!-- col -->
                            <div class="col-12 col-lg-6 spobox-feature-right">
                                <div class="row">
                                    <div class="col-10">
                                        <h2 class="fs25">
                                            Experience the Rich History
                                            and Culture of London
                                        </h2>
                                    </div><!-- col -->
                                    <div class="col-2 d-flex justify-content-end">
                                        <div class="esd-rating">
                                            5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="fontfam2 mt-2 mb-3">
                                    Tour of Tower of London
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur. Nulla curabitur quis etiam proin quam sed commodo id. Proin rutrum phasellus lectus orci metus.
                                </p>
                                <p>
                                    Ut morbi gravida vel non mattis quis pulvinar arcu netLorem ipsum dolor sit amet consectetur. Nulla curabitur quis etiam proin quam sed commodo id. Proin rutrum phasellus lectus orci metuss.
                                </p>

                                <div class="yellowbgpill mt-5">
                                    Included in the Offer
                                </div>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div>

                    <div class="spobox-itinerary whiteboxbg mt-4">
                        <div class="spobox-itinerary-top">
                            <h3 class="fs25">
                                Itinerary
                            </h3>
                        </div>

                        <div class="spobox-itinerary-days">
                            <div class="spo-itinerary-days-top">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <h3 class="mb-0">
                                            Day 01
                                        </h3>
                                    </div>
                                    <div class="col-3 d-flex justify-content-end">
                                        <div class="spo-itinerary-days-btn">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spo-itinerary-days-content">
                                <div class="row pt-4">
                                    <div class="spo-itinerary-days-image col-12 col-md-6 d-flex">
                                        <div class="spobox-feature-image-wrap">
                                            <i class="fa-regular fa-image"></i>
                                        </div>
                                    </div><!-- spo itinerary days image -->
                                    <div class="spo-itinerary-days-content-right col-12 col-md-6 txt-gray">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur. Non mi suspendisse suscipit consectetur nisl pharetra. Quis vulputate nunc tristique tempor cursus. Ultrices eu amet quam tellus. Et ultricies aliquet ullamcorper eu. Quam ac viverra nibh nulla aliquam neque sem enim. Adipiscing ultrices in et justo quis eu maecenas tellus a.
                                        </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- spo itinerary days content -->
                        </div><!-- spobox-itinerary-days -->

                        <div class="spobox-itinerary-days show">
                            <div class="spo-itinerary-days-top">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <h3 class="mb-0">
                                            Day 02
                                        </h3>
                                    </div>
                                    <div class="col-3 d-flex justify-content-end">
                                        <div class="spo-itinerary-days-btn">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spo-itinerary-days-content">
                                <div class="row pt-4">
                                    <div class="spo-itinerary-days-image col-12 col-md-6 d-flex">
                                        <div class="spobox-feature-image-wrap">
                                            <i class="fa-regular fa-image"></i>
                                        </div>
                                    </div><!-- spo itinerary days image -->
                                    <div class="spo-itinerary-days-content-right col-12 col-md-6 txt-gray">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur. Non mi suspendisse suscipit consectetur nisl pharetra. Quis vulputate nunc tristique tempor cursus. Ultrices eu amet quam tellus. Et ultricies aliquet ullamcorper eu. Quam ac viverra nibh nulla aliquam neque sem enim. Adipiscing ultrices in et justo quis eu maecenas tellus a.
                                        </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- spo itinerary days content -->
                        </div><!-- spobox-itinerary-days -->
                    </div><!-- spo -->

                    <div class="spo-checkbox whiteboxbg mt-4">
                        <h3 class="fontfam2">Perks that are included in the offer</h3>

                        <ul class="perk-list">
                            <li>
                                <i class="fas fa-check-square"></i>
                                <div>
                                    <p class="title">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>Id nisi adipiscing egestas tempus. Quam eget lacus ut sit. Mauris integer pharetra fringilla nisi nunc. Fusce nunc blandit et mi. Sit sed elit id sit. Sagittis phasellus platea morbi augue varius. Sed pretium at morbi in adipiscing.</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                <div>
                                    <p class="title">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>Ornare accumsan tristique duis ac cras justo enim ut elementum. Egestas consequat sapien nunc enim morbi euismod nam viverra hendrerit. Elit mattis tortor sit mattis facilisis.</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                <div>
                                    <p class="title">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p>Ac volutpat amet ac tristique id congue. Tempor euismod non elit bibendum dui. Sed sed tellus amet vestibulum id fringilla vitae.</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-square"></i>
                                <div>
                                    <p class="title">Lorem ipsum dolor sit amet</p>
                                    <p>Consectetur eu pretium tempor ut consectetur purus justo donec fermentum. Odio cum proin adipiscing a suspendisse. Porttitor netus massa congue sed at sapien.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="spoimagebottom mt-4">
                        <div class="spobox-feature-image-wrap">
                            <i class="fa-regular fa-image"></i>
                        </div>
                    </div>

                    <div class="proceed">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-7">
                                <h3 class="mb-0">
                                    This is your dream vacation!
                                </h3>
                            </div>
                            <div class="col-12 col-lg-5 d-flex justify-content-end">
                                <input type="submit" class="btn btn-primary" value="Enquire now" onclick="">
                            </div>
                        </div><!-- row -->
                    </div><!-- proceed -->
                </div><!-- col tp main -->
            </div><!-- row -->
        </div>
    </section>

    <?php include '../sections/global/footer.php'; ?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui-timepicker-addon.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/main-special-offers.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/galleryPopup.js"></script>

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