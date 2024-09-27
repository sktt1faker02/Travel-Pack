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
                    To book your holiday call us or simply share your details and we shall get in touch with you. Just call us on +44 208 585 4080 
                </p>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cta-modal">
                    Get In Touch
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cta-modal" tabindex="-1" aria-labelledby="cta-modal" aria-hidden="true">
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
                                <label for="phonenumber">
                                    Phone Number*
                                </label>
                                <input type="number" placeholder="0123456789" id="phonenumber" name="phonenumber" required>
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
                                <input type="text" id="traveldates" name="traveldates" placeholder="DD/MM/YYYY - DD/MM/YYYY" required="">
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