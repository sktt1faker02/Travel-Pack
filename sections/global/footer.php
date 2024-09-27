<footer id="footer" class="txt-white">
    <div class="container">
        <div class="row footertop align-items-center">
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h4>
                            Customer Support
                        </h4>
                        <ul>
                            <li><a href="#">Help Centre</a></li>
                            <li><a href="#">General T’s and C’s</a></li>
                            <li><a href="#">Cookies, Privacy and Security</a></li>
                            <li><a href="#">Modern Slavery Statement</a></li>
                            <li><a href="#">Feedback</a></li>
                        </ul>
                    </div><!-- col -->
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <h4>
                            Book Now
                        </h4>
                        <ul class="col2list">
                            <li><a href="<?= getBaseUrl() ?>/flights/index.php">Flights</a></li>
                            <li><a href="<?= getBaseUrl() ?>/experiences/index.php">Experiences</a></li>
                            <li><a href="<?= getBaseUrl() ?>/hotels/index.php">Hotels</a></li>
                            <li><a href="<?= getBaseUrl() ?>/rail/index.php">Rail</a></li>
                            <li><a href="<?= getBaseUrl() ?>/car-hire/index.php">Car Hire</a></li>
                            <li><a href="<?= getBaseUrl() ?>/transfer/index.php">Transfer</a></li>
                            <li><a href="<?= getBaseUrl() ?>/cruises/index.php">Cruises</a></li>
                            <li><a href="<?= getBaseUrl() ?>/special-offers/index.php">Special Offers</a></li>
                        </ul>
                    </div><!-- col -->
                </div>

                <div class="row mt-4 mb-5">
                    <div class="col-12 col-sm-6">
                        <h4>
                            Find Us On
                        </h4>
                        <div class="d-flex flex-wrap footersocials">
                            <a href="http://www.youtube.com/TravelpackTV" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a href="http://www.facebook.com/TravelpackUK" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="http://www.twitter.com/travelpack" target="_blank">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                        <h4>
                            Protected By
                        </h4>
                        <img src="<?= getBaseUrl() ?>/assets/img/footer/protectedby.png" alt="" class="protectedby">
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 ps-auto ps-lg-5 footertop-right">
                <p>To book your holiday call us or simply email and <br />we shall get in touch with you.</p>

                <p>Just call us on <a href="tel:+442085854080">+44 208 585 4080</a> <br />or contact <a href="mailto:customer.support@travelpack.co.uk">customer.support@travelpack.co.uk</a></p>
            </div>
        </div><!-- row -->
        <div class="row footerbottom">
            <div class="col-12 col-lg-2">
                <a href="index.html">
                    <img src="<?= getBaseUrl() ?>/assets/img/footer/footerlogo.png" alt="" class="mb-4 mb-lg-0">
                </a>
            </div>
            <div class="col-12 col-lg-10 footerbottom-right ps-lg-5">
                <div class="ps-lg-4">
                    <p>For the latest travel advice from the Foreign & Commonwealth Office including security and local laws, plus passport and visa information, go to: <a href="https://www.gov.uk/foreign-travel-advice" target="_blank">https://www.gov.uk/foreign-travel-advice</a></p>

                    <p>Many of the flights and flight-inclusive holidays on this website are financially protected by the ATOL scheme. But ATOL protection does not apply to all holiday and travel services listed on this website. Please ask us to confirm what protection may apply to your booking. If you do not receive an ATOL Certificate then the booking will not be ATOL protected. If you do receive an ATOL Certificate but all the parts of your trip are not listed on it, those parts will not be ATOL protected. Please see our booking conditions for information, or for more information about financial protection and the ATOL Certificate go to: <a href="www.atol.org.uk/ATOLCertificate" target="_blank">www.atol.org.uk/ATOLCertificate</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>



<div class="phonepopup">
    <div class="thepopup">
        <div class="thepopup-close">
            ✕
        </div>
        <h5>
            Plan your next getaway with us!
        </h5>
        <p>
            To book your holiday call us or simply share your details and we shall get in touch with you. <a href="#">Just call us on +44 208 585 4080</a>
        </p>
        <form action="#" method="post" id="popupform">
            <div class="popupfields">
                <label for="first-name">First Name *</label>
                <input type="text" id="first-name" name="first-name" placeholder="Jane" required>
            </div>

            <div class="popupfields">
                <label for="last-name">Last Name *</label>
                <input type="text" id="last-name" name="last-name" placeholder="Smith" required>
            </div>

            <div class="popupfields">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" placeholder="example@email.com" required>
            </div>

            <div class="popupbottom d-flex mt-2">
                <button type="submit" class="fs12 btn btn-primary">Submit</button>

                <div class="info-text">To know more about us and booking system <a href="#">Click Here</a></div>
            </div>
        </form>
    </div>
    <button class="bottompopup">
        <i class="fa-solid fa-phone"></i>
    </button>
</div><!-- phonepopup -->