
<header id="main-header">
            <div class="container">
                <div class="mainheader-inner">
                    <div class="row align-items-center headerrowtop noborderradius-onclick">
                        <div class="col-4 col-lg-3 header-left">
                            <a href="<?= getBaseUrl() ?>/index.php">
                                <img src="<?= getBaseUrl() ?>/assets/img/header/logo.png" alt="" class="logo">
                            </a>
                        </div>
                        <div class="col-8 col-lg-9 d-flex justify-content-end">
                            <div class="headerlinks">
                                <ul>
                                    <li class="d-none d-lg-block">
                                        <a href="">
                                            My Booking
                                        </a>
                                    </li>
                                    <li class="d-none d-lg-block">
                                        <a href="">
                                            Travel Agents
                                        </a>                                    
                                    </li>
                                    <li class="underlinestate underlinestate1 d-none d-lg-block">
                                        <a href="#">
                                            <div class="i-icon">i</div> Help Centre
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="d-flex align-items-center">
                                            <img src="<?= getBaseUrl() ?>/assets/img/icons/icon-basket.png" alt="" class="me-2 icon-basket"> 0
                                        </a>
                                    </li>
                                    <li class="underlinestate underlinestate2 position-relative">
                                        <a class="d-flex align-items-center underlinestate2-link">
                                    <img src="<?= getBaseUrl() ?>/assets/img/icons/icon-globe.png" alt="" class="me-2 icon-globe"> <span class="header-language">UK</span> <i class="ms-2 fa-solid fa-chevron-down"></i>
                                        </a>

                                        <div class="translatesubmenu">
                                            <ul>
                                                <li><a href="#">ES</a></li>
                                                <li><a href="#">FR</a></li>
                                                <li><a href="#">DE</a></li>
                                                <li><a href="#">TS</a></li>
                                                <li><a href="#">CN</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hamburger" id="hamburger" onclick="toggleHamburger(this)">
                                            <div class="bar1"></div>
                                            <div class="bar2"></div>
                                            <div class="bar3"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- mainheader-inner -->

                <div id="bottommenu" class="bottommenu">
                    <div class="test p-0">
                        <ul class="headerbottomlinks headerlinks">
                            <li class="d-block d-lg-none">
                                <a href="#">
                                    My Booking
                                </a>
                            </li>
                            <li class="d-block d-lg-none">
                                <a data-bs-toggle="collapse" href="#mobile-help-centre" role="button" aria-expanded="false" aria-controls="#mobile-help-centre">
                                    <div class="i-icon">i</div> Help Centre
                                </a>
                                <div class="collapse mobilemenu-collapse multi-collapse" id="mobile-help-centre">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Useful Links</a></li>
                                        <li><a href="#">Baggage Allowances</a></li>
                                        <li><a href="#">Passport, Visa and Health</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="<?= getBaseUrl() ?>/flights/index.php">Flights</a></li>
                            <li><a href="<?= getBaseUrl() ?>/hotels/index.php">Hotels</a></li>
                            <li><a href="<?= getBaseUrl() ?>/car-hire/index.php">Car Hire</a></li>
                            <li><a href="<?= getBaseUrl() ?>/cruises/index.php">Cruises</a></li>
                            <li><a href="<?= getBaseUrl() ?>/experiences/index.php">Experiences</a></li>
                            <li><a href="<?= getBaseUrl() ?>/rail/index.php">Rail</a></li>
                            <li><a href="<?= getBaseUrl() ?>/transfer/index.php">Transfer</a></li>
                            <li><a href="<?= getBaseUrl() ?>/special-offers/index.php">Special Offers</a></li>
                        </ul>
                    </div>
                </div>
                <div id="bottommenu2" class="bottommenu">
                    <div class="test row p-0">
                        <ul class="headerbottomlinks">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Useful Links</a></li>
                            <li><a href="#">Baggage Allowances</a></li>
                            <li><a href="#">Passport, Visa and Health</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>