<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelpack - Experiences Search Results</title>

    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>/assets/css/main-experiences.css">
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
    <div id="herohome" class="herowithform" style="background-image:url(<?= getBaseUrl() ?>/assets/img/experiences/hero-experiences-search.jpg)">
        <?php include '../sections/global/header-nav.php';?>
    </div><!-- main hero -->

    <section class="block search-wrap bggray searchresults-formwrap pt-0" id="experiences-search">
        <div class="container">
            <div id="special-offers-searchbar" class="searchbar">
                <div class="searchbar-top mb-2 mb-md-3 row align-items-center">
                    <div class="col-md-5">
                        <h2>
                            Where's next?
                        </h2>
                    </div>
                </div><!-- searchbartop -->
                <?php include '../sections/searchform/main-forms/searchform-car-hire.php';?>
            </div><!-- searchbar -->
        </div><!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2>
                        Showing 100 results for London, United Kingdom
                    </h2>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12 col-lg-3 tp-sidebar">
                    <div class="filters-box filters filters-reset d-flex flex-row align-items-center justify-content-between">
                        <div>
                            <h5 class="fontfam2 mb-0">
                                Filters
                            </h5>
                        </div>
                        <div>
                            <a href="#" class="btn btn-white">
                                Reset All
                            </a>
                        </div>
                    </div>
                    <div class="filters-box filters">
                        <div class="fb-bottom">
                            <div class="option-wrap mt-2">
                                <span>
                                    Arts & Culture
                                </span>
                                <div class="select">
                                    <select>
                                        <option>Any</option>
                                        <option>Any</option>
                                        <option>Any</option>
                                        <option>Any</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div>
                            </div><!-- option-wrap -->
                            <div class="option-wrap">
                                <span>
                                    Class & Workshops
                                </span>
                                <div class="select">
                                    <select>
                                        <option>Any</option>
                                        <option>Any</option>
                                        <option>Any</option>
                                        <option>Any</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div>
                            </div><!-- option-wrap -->
                            <div class="option-wrap">
                                <span>
                                    Seasonal & Special Occasions
                                </span>
                                <div class="select">
                                    <select>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div>
                            </div><!-- option-wrap -->
                            <div class="option-wrap">
                                <span>
                                    Tickets & Passes
                                </span>
                                <div class="select">
                                    <select>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div>
                            </div><!-- option-wrap -->
                            <div class="option-wrap">
                                <span>
                                    Tours, Sightseeing & Cruises
                                </span>
                                <div class="select">
                                    <select>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div>
                            </div><!-- option-wrap -->
                            <div class="option-wrap">
                                <span>
                                    Travel & Transportation Services
                                </span>
                                <div class="select">
                                    <select>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                        <option>Prices</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div>
                            </div><!-- option-wrap -->
                        </div><!-- fb-bottom -->
                    </div><!-- filters box -->

                    <div class="filters-box maximum-prices">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Likely to Sell Out
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                        </div>
                    </div><!-- filtersbox -->

                    <div class="filters-box maximum-prices">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                Outdoor Activities
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                        </div>
                    </div><!-- filtersbox -->

                    <div class="filters-box maximum-prices">
                        <div class="fb-top">
                            <div class="togglefilterbox">
                                <div class="slider-label">
                                    Unique Experiences
                                </div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="fb-bottom">
                        </div>
                    </div><!-- filtersbox -->
                    <div class="filters-box needbox">
                        <div class="fb-top fw-semibold">
                            <div>
                                Need Help?
                            </div>
                        </div><!-- fb-top   -->
                        <div class="fb-bottom txt-black">
                            <div class="flightpurchase-box">
                                If you need any help with your bookings simply <a href="#"><u>Contact Us</u></a> and we shall get in touch with you or Just call us on  <a href="#">+44 208 585 4080 </a>
                            </div><!-- flight purchase box -->
                        </div>
                    </div><!-- filters box -->
                    
                </div><!-- col -->

                <div class="col-12 col-lg-9 tp-main">
                    <div class="tp-main-heading mb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="mb-0 fontfam2">
                                    Results
                                </h5>
                            </div><!-- col -->
                            <div class="col-6 d-flex justify-content-end sortby">
                                <div class="select mb-0">
                                    <select>
                                        <option>Cheapest</option>
                                        <option>Cheapest</option>
                                        <option>Cheapest</option>
                                        <option>Cheapest</option>
                                    </select>
                                    <div class="select_arrow">
                                    </div>
                                </div><!-- select -->
                            </div>
                        </div><!-- special offers -->
                    </div>
                    
                    <form action="experiences-main.php" method="post">
                        <div class="loadmore-boxes-wrap">
                            <div class="whiteboxbg experiencebox loadmorebox">
                                <div class="row">
                                    <div class="col-12 col-lg-4 experiences-left">
                                        <div class="experiences-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencesbox.jpg" alt="">
                                        </div><!-- experiences image -->
                                    </div><!-- col -->
                                    <div class="col-12 col-lg-6 experiences-mid d-flex flex-column justify-content-lg-between">
                                        <div class="experiences-mid-top">
                                            <h2>
                                                Harry Potter Warner Bros, Studio Tour with Transport from London
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur. Eget tortor nisl sagittis lorem gravidametus pellentesque lacus pharetra. Pellentesque et sagittis amet tristique duis.Diam vulputate nisi scelerisque aliquet...<a href="#">Read More</a>
                                            </p>
                                        </div><!-- experiences mid top -->
                                        <div class="experiences-mid-bottom d-flex align-items-center justify-content-lg-between">
                                                
                                            <div class="free-cancellation">
                                                Free Cancellation
                                            </div>

                                            <div class="d-flex flex-column">
                                                <span class="txt-gray fs13">
                                                    from
                                                </span>
                                                <span class="listing-price">
                                                    £635.72
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- col -->

                                    <div class="col-lg-2 experiences-right d-flex align-items-end flex-column justify-content-between">
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                        
                                        <button class="btn btn-primary">
                                            Select
                                        </button>
                                    </div>
                                </div><!-- row -->
                            </div><!-- whitebox -->
                            <div class="whiteboxbg experiencebox loadmorebox">
                                <div class="row">
                                    <div class="col-12 col-lg-4 experiences-left">
                                        <div class="experiences-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencesbox.jpg" alt="">
                                        </div><!-- experiences image -->
                                    </div><!-- col -->
                                    <div class="col-12 col-lg-6 experiences-mid d-flex flex-column justify-content-lg-between">
                                        <div class="experiences-mid-top">
                                            <h2>
                                                Harry Potter Warner Bros, Studio Tour with Transport from London
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur. Eget tortor nisl sagittis lorem gravidametus pellentesque lacus pharetra. Pellentesque et sagittis amet tristique duis.Diam vulputate nisi scelerisque aliquet...<a href="#">Read More</a>
                                            </p>
                                        </div><!-- experiences mid top -->
                                        <div class="experiences-mid-bottom d-flex align-items-center justify-content-lg-between">
                                                
                                            <div class="free-cancellation">
                                                Free Cancellation
                                            </div>

                                            <div class="d-flex flex-column">
                                                <span class="txt-gray fs13">
                                                    from
                                                </span>
                                                <span class="listing-price">
                                                    £635.72
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- col -->

                                    <div class="col-lg-2 experiences-right d-flex align-items-end flex-column justify-content-between">
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                        
                                        <button class="btn btn-primary">
                                            Select
                                        </button>
                                    </div>
                                </div><!-- row -->
                            </div><!-- whitebox -->
                            <div class="whiteboxbg experiencebox loadmorebox">
                                <div class="row">
                                    <div class="col-12 col-lg-4 experiences-left">
                                        <div class="experiences-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencesbox.jpg" alt="">
                                        </div><!-- experiences image -->
                                    </div><!-- col -->
                                    <div class="col-12 col-lg-6 experiences-mid d-flex flex-column justify-content-lg-between">
                                        <div class="experiences-mid-top">
                                            <h2>
                                                Harry Potter Warner Bros, Studio Tour with Transport from London
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur. Eget tortor nisl sagittis lorem gravidametus pellentesque lacus pharetra. Pellentesque et sagittis amet tristique duis.Diam vulputate nisi scelerisque aliquet...<a href="#">Read More</a>
                                            </p>
                                        </div><!-- experiences mid top -->
                                        <div class="experiences-mid-bottom d-flex align-items-center justify-content-lg-between">
                                                
                                            <div class="free-cancellation">
                                                Free Cancellation
                                            </div>

                                            <div class="d-flex flex-column">
                                                <span class="txt-gray fs13">
                                                    from
                                                </span>
                                                <span class="listing-price">
                                                    £635.72
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- col -->

                                    <div class="col-lg-2 experiences-right d-flex align-items-end flex-column justify-content-between">
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                        
                                        <button class="btn btn-primary">
                                            Select
                                        </button>
                                    </div>
                                </div><!-- row -->
                            </div><!-- whitebox -->
                            <div class="whiteboxbg experiencebox loadmorebox">
                                <div class="row">
                                    <div class="col-12 col-lg-4 experiences-left">
                                        <div class="experiences-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencesbox.jpg" alt="">
                                        </div><!-- experiences image -->
                                    </div><!-- col -->
                                    <div class="col-12 col-lg-6 experiences-mid d-flex flex-column justify-content-lg-between">
                                        <div class="experiences-mid-top">
                                            <h2>
                                                Harry Potter Warner Bros, Studio Tour with Transport from London
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur. Eget tortor nisl sagittis lorem gravidametus pellentesque lacus pharetra. Pellentesque et sagittis amet tristique duis.Diam vulputate nisi scelerisque aliquet...<a href="#">Read More</a>
                                            </p>
                                        </div><!-- experiences mid top -->
                                        <div class="experiences-mid-bottom d-flex align-items-center justify-content-lg-between">
                                                
                                            <div class="free-cancellation">
                                                Free Cancellation
                                            </div>

                                            <div class="d-flex flex-column">
                                                <span class="txt-gray fs13">
                                                    from
                                                </span>
                                                <span class="listing-price">
                                                    £635.72
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- col -->

                                    <div class="col-lg-2 experiences-right d-flex align-items-end flex-column justify-content-between">
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                        
                                        <button class="btn btn-primary">
                                            Select
                                        </button>
                                    </div>
                                </div><!-- row -->
                            </div><!-- whitebox -->
                            <div class="whiteboxbg experiencebox loadmorebox">
                                <div class="row">
                                    <div class="col-12 col-lg-4 experiences-left">
                                        <div class="experiences-image">
                                            <img src="<?= getBaseUrl() ?>/assets/img/experiences/experiencesbox.jpg" alt="">
                                        </div><!-- experiences image -->
                                    </div><!-- col -->
                                    <div class="col-12 col-lg-6 experiences-mid d-flex flex-column justify-content-lg-between">
                                        <div class="experiences-mid-top">
                                            <h2>
                                                Harry Potter Warner Bros, Studio Tour with Transport from London
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur. Eget tortor nisl sagittis lorem gravidametus pellentesque lacus pharetra. Pellentesque et sagittis amet tristique duis.Diam vulputate nisi scelerisque aliquet...<a href="#">Read More</a>
                                            </p>
                                        </div><!-- experiences mid top -->
                                        <div class="experiences-mid-bottom d-flex align-items-center justify-content-lg-between">
                                                
                                            <div class="free-cancellation">
                                                Free Cancellation
                                            </div>

                                            <div class="d-flex flex-column">
                                                <span class="txt-gray fs13">
                                                    from
                                                </span>
                                                <span class="listing-price">
                                                    £635.72
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- col -->

                                    <div class="col-lg-2 experiences-right d-flex align-items-end flex-column justify-content-between">
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                        
                                        <button class="btn btn-primary">
                                            Select
                                        </button>
                                    </div>
                                </div><!-- row -->
                            </div><!-- whitebox -->
                        </div><!-- load moreboxes wrap -->
                    </form>
                    
                    <div class="loadmore-nav mx-auto mt-5">
                        <div class="loadmore-navdetails">
                            1-<span class="loadmore-number"></span>
                            of
                            <span class="loadmore-total">

                            </span>
                        </div>
                        <div class="loadmore-gauge">
                            <div class="loadmore-gauge-bar"></div>
                        </div>
                        <button class="btn btn-white loadmorebtn mt-3">
                            Load More
                        </button>
                    </div><!-- load more -->
                </div><!-- col -->                    
            </div><!-- row -->
        </div>
    </section>

    <section id="cta" class="block" style="background-image: url(<?= getBaseUrl() ?>/assets/img/home/ctabg.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="txt-white text-center">
                        Unsure where to go next?
                    </h2>
                </div><!-- col -->
                <div class="col-12 col-lg-6 offset-lg-3 text-center txt-white">
                    <p>
                        To book your holiday call us or simply share your details and we shall get in touch with youJust call us on +44 208 585 4080 
                    </p>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cta-modal">
                        Get In Touch
                    </button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="cta-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/action_page.php">
                        <div class="row align-items-center mb-4">
                            <div class="col-6 ctamodal-top-left">
                                All required areas*
                            </div>
                            <div class="col-6 d-flex justify-content-end ctamodal-top-right">
                                <button type="button" class="txt-blue btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">
                                    Share your details
                                    with us
                                </h2>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="fname">
                                        First Name*
                                    </label>
                                    <input placeholder="First Name" type="text" id="fname" name="fname" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="surname">
                                        Surname*
                                    </label>
                                    <input type="text" placeholder="Surname" id="surname" name="surname" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="phone">
                                        Phone Number*
                                    </label>
                                    <input type="number" placeholder="0123456789" id="phonenumber" name="phone" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="emailaddress">
                                        Email Address*
                                    </label>
                                    <input type="email" placeholder="example@email.com" id="emailaddress" name="surnemailaddressame" required>                                                
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="address">
                                        Address*
                                    </label>
                                    <input type="text" placeholder="Address" id="address" name="address" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="inputwrap">
                                    <label for="traveldates">
                                        Travel Dates*
                                    </label>
                                    <input placeholder="DD/MM/YYYY - DD/MM/YYYY" type="email" id="traveldates" name="traveldates" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputwrap">
                                    <label for="message">
                                        Text*
                                    </label>
                                    <textarea id="message" placeholder="Start typing here..." name="message" rows="2" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>   

    <?php include '../sections/global/footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/loadmoreboxes.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/sidebar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>

</body>

</html>