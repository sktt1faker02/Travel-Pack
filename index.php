<?php include './config.php'; ?>

<?php include './sections/global/home-header.php';?>
<body class="home">
    <div id="herohome">
        <div class="herowrapblur">
            <div class="heroslider">
                <div class="heroslide">
                    <img src="<?= getBaseUrl() ?>/assets/img/hero/hero-home.jpg" alt="">
                </div>
                <div class="heroslide">
                    <img src="<?= getBaseUrl() ?>/assets/img/hero/hero-home.jpg" alt="">
                </div>
                <div class="heroslide">
                    <img src="<?= getBaseUrl() ?>/assets/img/hero/hero-home.jpg" alt="">
                </div>
            </div>
        </div>
        
        <?php include './sections/global/home-header-nav.php';?>

        <div id="main-hero">
            <div class="container">
                <div class="heroslider-nav">
                    <div class="heroslider-nav-slide">
                        <h1 class="txt-white">
                            Effortless travel,<br/>
                            Joyful moments.
                        </h1>
                    
                        <p class="hero-text txt-white">
                            Hikkaduwa, Sri Lanka
                        </p>
                    </div>
                    <div class="heroslider-nav-slide">
                        <h1 class="txt-white">
                            Aliquam non erat,<br>
                            volutpat risus et
                        </h1>
                    
                        <p class="hero-text txt-white">
                            Kyoto, Japan
                        </p>
                    </div>
                    <div class="heroslider-nav-slide">
                        <h1 class="txt-white">
                            Quisque quis metus<br/>
                            fringilla mollis nec
                        </h1>
                    
                        <p class="hero-text txt-white">
                            Boracay, Philippines
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- main hero -->

        <div class="container">
            <div id="home-searchbar" class="searchbar">
                <div class="searchbar-top row align-items-center">
                    <div class="col-md-12 mb-3 mb-lg-0 col-lg-3">
                        <h2>
                            Where's next?
                        </h2>
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <div class="mobilesearchtab-wrap">
                            <ul id="searchtab" class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#search-flights-tab" type="button" role="tab" aria-controls="search-flights" aria-selected="true">
                                        Flights
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="search-hotels" data-bs-toggle="tab" data-bs-target="#search-hotels-tab" type="button" role="tab" aria-controls="search-hotels" aria-selected="false">
                                        Hotels
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="search-car-hire" data-bs-toggle="tab" data-bs-target="#search-car-hire-tab" type="button" role="tab" aria-controls="search-car-hire" aria-selected="false">
                                        Car Hire
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="search-packages" data-bs-toggle="tab" data-bs-target="#search-packages-tab" type="button" role="tab" aria-controls="search-packages" aria-selected="false">
                                        Cruises
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="search-experiences" data-bs-toggle="tab" data-bs-target="#search-experiences-tab" type="button" role="tab" aria-controls="search-experiences" aria-selected="false">
                                        Experiences
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div><!-- col -->

                    <div class="col-12 mt-0 mt-sm-4">
                        <div class="tab-content 2" id="home-searchbar-content">
                            <div class="tab-pane fade show active" id="search-flights-tab" role="tabpanel" aria-labelledby="flights-tab" tabindex="0">
                                <?php include './sections/searchform/main-forms/searchform-flights.php';?>
                            </div>
                            <div class="tab-pane fade" id="search-hotels-tab" role="tabpanel" aria-labelledby="hotels-tab" tabindex="0">
                                <?php include './sections/searchform/main-forms/searchform-hotels.php';?>
                            </div>
                            <div class="tab-pane fade" id="search-car-hire-tab" role="tabpanel" aria-labelledby="car-hire-tab" tabindex="0">
                                <?php include './sections/searchform/main-forms/searchform-car-hire.php';?>
                            </div>
                            <div class="tab-pane fade" id="search-packages-tab" role="tabpanel" aria-labelledby="packages-tab" tabindex="0">
                                <?php include './sections/searchform/main-forms/searchform-cruises.php';?>
                            </div>
                            <div class="tab-pane fade" id="search-experiences-tab" role="tabpanel" aria-labelledby="experiences-tab" tabindex="0">
                                <?php include './sections/searchform/main-forms/searchform-experiences.php';?>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- searchbartop -->
            </div><!-- searchbar -->
        </div><!-- container -->

        <div class="exciting-deals">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="exciting-deals-heading">
                            <div class="row align-items-center">
                                <div class="col-8 col-md-8">
                                    <h3 class="mb-0">
                                        Exciting Summer Deals
                                    </h3>
                                </div>
                                <div class="col-4 col-md-4 d-flex justify-content-end">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold view-all">View All <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div><!-- row -->
                        </div><!-- exciting deals -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
            <div class="esd-box-slider esd-box-slider-home rowslider tpslider-2 firstload mt-4">
                <div class="d-flex esd-box">
                    <div class="col-12 col-md-6 px-0 d-flex">
                        <div class="esd-left">
                            <div class="hurry-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                    Summer Special
                                </a>
                            </div>
                            <div class="esd-left-slider position-relative">
                                <div>
                                    <a href="">
                                        <img src="<?= getBaseUrl() ?>/assets/img/home/esd1.jpg" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src="<?= getBaseUrl() ?>/assets/img/home/esd2.jpg" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src="<?= getBaseUrl() ?>/assets/img/home/esd3.jpg" alt="">
                                    </a>
                                </div>
                            </div><!-- esd left slider -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-md-6 esd-right-main p-0">
                        <div class="esd-right esd-right-content">
                            <div class="esd-right-top">
                                <div class="esd-right-top-title">
                                    <div class="esd-right-top-title-top">
                                        <div class="esd-continent">
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Asia
                                            </a>
                                        </div>
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="esd-right-title-main">
                                        <h3>
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Kyoto, Japan
                                            </a>
                                        </h3>
                                    </div>
                                </div><!-- esd right top title top -->
                                <div class="esd-right-top-description">
                                    <p>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                    <ul>
                                        <li>10 Nights</li>
                                        <li>Half Board</li>
                                        <li>3 Attractions</li>
                                    </ul>
                                </div>
                            </div><!-- esd-right-top -->
                            <div class="esd-right-bottom d-flex align-items-center justify-content-between">
                                <div class="esd-right-bottom-read-more">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        Read More <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="esd-right-bottom-price">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        £699pp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- esd box -->
                <div class="d-flex esd-box">
                    <div class="col-12 col-md-6 px-0 d-flex">
                        <div class="esd-left">
                            <div class="hurry-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                    Summer Special
                                </a>
                            </div>
                            <div class="esd-left-slider position-relative">
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/esd2.jpg" alt="">
                                </a>
                                <a href="">
                                <img src="<?= getBaseUrl() ?>/assets/img/home/esd1.jpg" alt="">
                                </a>
                                <a href="">
                                <img src="<?= getBaseUrl() ?>/assets/img/home/esd3.jpg" alt="">
                                </a>
                            </div><!-- esd left slider -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-md-6 esd-right-main p-0">
                        <div class="esd-right esd-right-content">
                            <div class="esd-right-top">
                                <div class="esd-right-top-title">
                                    <div class="esd-right-top-title-top">
                                        <div class="esd-continent">
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Asia
                                            </a>
                                        </div>
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="esd-right-title-main">
                                        <h3>
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Rome, Italy <br>

                                                Rome, Italy
                                            </a>
                                        </h3>
                                    </div>
                                </div><!-- esd right top title top -->
                                <div class="esd-right-top-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <ul>
                                        <li>10 Nights</li>
                                        <li>Half Board</li>
                                        <li>3 Attractions</li>
                                    </ul>
                                </div>
                            </div><!-- esd-right-top -->
                            <div class="esd-right-bottom d-flex align-items-center justify-content-between">
                                <div class="esd-right-bottom-read-more">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        Read More <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="esd-right-bottom-price">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        £699pp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- esd box -->
                <div class="d-flex esd-box">
                    <div class="col-12 col-md-6 px-0 d-flex">
                        <div class="esd-left">
                            <div class="hurry-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                    Summer Special
                                </a>
                            </div>
                            <div class="esd-left-slider position-relative">
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/esd3.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/esd2.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/esd1.jpg" alt="">
                                </a>
                            </div><!-- esd left slider -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-md-6 esd-right-main p-0">
                        <div class="esd-right esd-right-content">
                            <div class="esd-right-top">
                                <div class="esd-right-top-title">
                                    <div class="esd-right-top-title-top">
                                        <div class="esd-continent">
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Asia
                                            </a>
                                        </div>
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="esd-right-title-main">
                                        <h3>
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                São Miguel, 
                                                Portugal
                                            </a>
                                        </h3>
                                    </div>
                                </div><!-- esd right top title top -->
                                <div class="esd-right-top-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <ul>
                                        <li>10 Nights</li>
                                        <li>Half Board</li>
                                        <li>3 Attractions</li>
                                    </ul>
                                </div>
                            </div><!-- esd-right-top -->
                            <div class="esd-right-bottom d-flex align-items-center justify-content-between">
                                <div class="esd-right-bottom-read-more">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        Read More <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="esd-right-bottom-price">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        £699pp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- esd box -->
                <div class="d-flex esd-box">
                    <div class="col-12 col-md-6 px-0 d-flex">
                        <div class="esd-left">
                            <div class="hurry-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                    Summer Special
                                </a>
                            </div>
                            <div class="esd-left-slider position-relative">
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/esd2.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/esd1.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/esd3.jpg" alt="">
                                </a>
                            </div><!-- esd left slider -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-md-6 esd-right-main p-0">
                        <div class="esd-right esd-right-content">
                            <div class="esd-right-top">
                                <div class="esd-right-top-title">
                                    <div class="esd-right-top-title-top">
                                        <div class="esd-continent">
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Asia
                                            </a>
                                        </div>
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="esd-right-title-main">
                                        <h3>
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Kyoto, Japan
                                            </a>
                                        </h3>
                                    </div>
                                </div><!-- esd right top title top -->
                                <div class="esd-right-top-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <ul>
                                        <li>10 Nights</li>
                                        <li>Half Board</li>
                                        <li>3 Attractions</li>
                                    </ul>
                                </div>
                            </div><!-- esd-right-top -->
                            <div class="esd-right-bottom d-flex align-items-center justify-content-between">
                                <div class="esd-right-bottom-read-more">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        Read More <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="esd-right-bottom-price">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        £699pp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- esd box -->
                <div class="d-flex esd-box">
                    <div class="col-12 col-md-6 px-0 d-flex">
                        <div class="esd-left">
                            <div class="hurry-price global-price-tag">
                                <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                    Summer Special
                                </a>
                            </div>
                            <div class="esd-left-slider position-relative">
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                                <a href="">
                                    <img src="<?= getBaseUrl() ?>/assets/img/home/dcd.jpg" alt="">
                                </a>
                            </div><!-- esd left slider -->
                        </div>
                    </div><!-- col -->
                    <div class="col-12 col-md-6 esd-right-main p-0">
                        <div class="esd-right esd-right-content">
                            <div class="esd-right-top">
                                <div class="esd-right-top-title">
                                    <div class="esd-right-top-title-top">
                                        <div class="esd-continent">
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Asia
                                            </a>
                                        </div>
                                        <div class="esd-rating">
                                            4.5 <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="esd-right-title-main">
                                        <h3>
                                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                                Kyoto, Japan
                                            </a>
                                        </h3>
                                    </div>
                                </div><!-- esd right top title top -->
                                <div class="esd-right-top-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <ul>
                                        <li>10 Nights</li>
                                        <li>Half Board</li>
                                        <li>3 Attractions</li>
                                    </ul>
                                </div>
                            </div><!-- esd-right-top -->
                            <div class="esd-right-bottom d-flex align-items-center justify-content-between">
                                <div class="esd-right-bottom-read-more">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        Read More <i class="fa-solid fa-chevron-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="esd-right-bottom-price">
                                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php">
                                        £699pp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- esd box -->
            </div><!-- slider -->
        </div><!-- exciting deals -->
    </div>
    
    <section id="hurry" class="block">
        <div class="container">
            <div class="row gx-5">
                <div class="col-12 col-lg-6">
                    <h2>
                        <strong>Hurry!</strong> Summer<br>
                        offers ends soon.
                    </h2>
                    <div id="countdown" class="countdown">
                        <div>
                            <span id="days">14</span>
                            <small>Days</small>
                        </div>
                        <div>
                            <span id="hours">07</span>
                            <small>Hours</small>
                        </div>
                        <div>
                            <span id="minutes">28</span>
                            <small>Minutes</small>
                        </div>
                        <div>
                            <span id="seconds">34</span>
                            <small>Seconds</small>
                        </div>
                    </div>
                    <a href="#" class="mt-4 mt-md-5 btn btn-primary">
                        Discover Deals
                    </a>
                </div>
                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <div class="hurryslider">
                        <div class="hurryslide position-relative">
                            <div class="hurry-price global-price-tag">
                                <a href="">
                                    From <strong>£758pp</strong>
                                </a>
                            </div>
                            <img src="<?= getBaseUrl() ?>/assets/img/home/hurry-japan.jpeg" alt="">
                            <div class="hurryslide-bottom txt-white d-flex align-items-center justify-content-between">
                                <h3 class="mb-0">
                                    Kyoto, Japan
                                </h3>
                                <p class="mb-0 fw-semibold">
                                    Bamboo Forrest
                                </p>
                            </div>
                        </div><!-- hurryslide -->
                        <div class="hurryslide position-relative">
                            <div class="hurry-price global-price-tag">
                                <a href="">
                                    From <strong>£758pp</strong>
                                </a>
                            </div>
                            <img src="<?= getBaseUrl() ?>/assets/img/home/hurry-japan.jpeg" alt="">
                            <div class="hurryslide-bottom txt-white d-flex align-items-center justify-content-between">
                                <h3 class="mb-0">
                                    Kyoto, Japan
                                </h3>
                                <p class="mb-0 fw-semibold">
                                    Bamboo Forrest
                                </p>
                            </div>
                        </div><!-- hurryslide -->
                        <div class="hurryslide position-relative">
                            <div class="hurry-price global-price-tag">
                                <a href="">
                                    From <strong>£758pp</strong>
                                </a>
                            </div>
                            <img src="<?= getBaseUrl() ?>/assets/img/home/hurry-japan.jpeg" alt="">
                            <div class="hurryslide-bottom txt-white d-flex align-items-center justify-content-between">
                                <h3 class="mb-0">
                                    Kyoto, Japan
                                </h3>
                                <p class="mb-0 fw-semibold">
                                    Bamboo Forrest
                                </p>
                            </div>
                        </div><!-- hurryslide -->
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <section id="top-places" class="block topplaces">
        <div class="topplaces-slider">
            <div class="tp-slide">
                <img src="<?= getBaseUrl() ?>/assets/img/home/tp1.jpg" alt="">
            </div>
            <div class="tp-slide">
                <img src="<?= getBaseUrl() ?>/assets/img/home/tp1.jpg" alt="">
            </div>
            <div class="tp-slide">
                <img src="<?= getBaseUrl() ?>/assets/img/home/tp1.jpg" alt="">
            </div>
            <div class="tp-slide">
                <img src="<?= getBaseUrl() ?>/assets/img/home/tp1.jpg" alt="">
            </div>
            <div class="tp-slide">
                <img src="<?= getBaseUrl() ?>/assets/img/home/tp1.jpg" alt="">
            </div>
        </div>

        <div class="container topplaces-main position-relative z-5">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="topplacesbox">
                        <h2 class="largesectiontitle">
                            Top places to explore in Europe this Summer
                        </h2>
                        <p>

                        </p>

                        <div>
                            <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="btn btn-primary">
                                Find Out More
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="topplaces-slider-nav position-absolute align-items-center z-5">
                <div class="topplacesnav-link">
                    Paris, France
                </div>
                <div class="topplacesnav-link">
                    Rome, Italy
                </div>
                <div class="topplacesnav-link">
                    London, England
                </div>
                <div class="topplacesnav-link">
                    Barcelona, Spain
                </div>
                <div class="topplacesnav-link">
                    Florence, Italy
                </div>
            </div>
        </div>
    </section>

    <section class="block rightsideslider" id="extraordinary-destinations">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-8 col-lg-6">
                    <h2 class="homesectiontitle">
                        Seek Extraordinary Destinations
                    </h2>
                </div><!-- col -->
                <div class="col-4 col-lg-6 d-flex justify-content-end">
                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold view-all">View All <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
        <div class="sed-slider rowslider tpslider-4 firstload">
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="#">
                            Asia
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed1.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Japan
                        </h3>
                    </div>

                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="#">
                            Asia
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed2.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            China
                        </h3>
                    </div>

                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="">
                            Canada
                        </a>                            
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed3.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Canada
                        </h3>
                    </div>

                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="">
                            Europe
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed4.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Greece
                        </h3>
                    </div>

                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="">
                            Europe
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed4.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            <a href="">
                                Greece
                            </a>
                        </h3>
                    </div>

                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="">
                            Europe
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed4.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Greece
                        </h3>
                    </div>

                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="#">
                            Asia
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed1.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Japan
                        </h3>
                    </div>

                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="#">
                            Asia
                        </a>
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed2.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            China
                        </h3>
                    </div>

                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="sedbox">
                <div class="sedtop">
                    <div class="yellowtagwrap">
                        <div class="yph-price global-price-tag">
                            <a href="">
                                From <strong>£600pp</strong>
                            </a>
                        </div>
                    </div>
                    <div class="esd-continent">
                        <a href="">
                            Canada
                        </a>                            
                    </div>
                </div>
                <img src="<?= getBaseUrl() ?>/assets/img/home/sed3.jpg" alt="">
                <div class="sed-details">
                    <div class="sed-title">
                        <h3 class="mb-5 pb-4">
                            Canada
                        </h3>
                    </div>

                    <a href="<?= getBaseUrl() ?>/flights/flights-search.php" class="fw-semibold yph-more">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div><!-- sed slider -->
    </section> 
    
    <?php include './sections/global/whychoosetravelpack.php';?>

    <?php include './sections/global/cta.php';?>

    <?php include './sections/global/testimonials.php';?>
    <?php include './sections/global/dealstravels.php';?>
    <?php include './sections/global/perfect-holiday.php';?>

    <?php include './sections//global/home-footer.php';?>

    <script src="<?= getBaseUrl() ?>/assets/js/jquery.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/slick.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/home.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/scripts.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/moment.min.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/searchbar-flights.js"></script>
    <script src="<?= getBaseUrl() ?>/assets/js/daterangepicker.js"></script>


</body>
</html>