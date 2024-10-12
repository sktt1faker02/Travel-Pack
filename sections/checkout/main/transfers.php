<div class="checkoutbox">
    <h3 class="fs20 fw-normal fontfam2 my-3">
        Lead Passenger
    </h3>
    <h3 class="fs20 fontfam2 mb-3">
        P 01
    </h3>
    <div class="checkoutbox-main">
        <div class="row">
            <div class="col-12 col-lg-10">
                <div class="row">
                    <div class="col-md-2 col-12">
                        <label>Title*</label>
                        <div class="select">
                            <select name="passenger1-title" required> 
                                <option>Mr</option>
                                <option>Mrs</option>
                            </select>
                            <div class="select_arrow"></div>
                        </div>
                    </div><!-- col -->
                    <div class="col-md-5 col-12">
                        <label>First Name*</label>
                        <input type="text" id="fname" name="passenger1-fname" class="tp-input" placeholder="First Name">
                    </div><!-- col -->
                    <div class="col-md-5 col-12">
                        <label>Last Name*</label>
                        <input type="text" id="lname" name="passenger1-lname" class="tp-input" placeholder="Last Name">
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-md-2 col-12">
                <label>Age*</label>
                <div class="select">
                    <select name="passenger1-age" required=""> 
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <!-- Add more age options -->
                        <option value="40">40</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
            <div class="col-md-4 col-12">
                <label>Date of Birth</label>
                <input class="tp-input datetoday" datepicker="first" name="flight-additional-dob1" id="flight-additional-dob1" placeholder="DD/MM/YYYY" required="required">
            </div><!-- col -->
            <div class="col-md-4 col-12">
                <label>Gender*</label>
                <div class="select">
                    <select name="passenger1-gender" required=""> 
                        <option value="" disabled="" selected="">Prefer Not to Say</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <!-- Country Code -->
                        <div class="col-12 col-lg-4 countrycode">
                            <label for="country-code">Country Code</label>
                            <div class="select">
                                <select class="tp-input" id="country-code" name="country-code" required="">
                                    <option value="" disabled="" selected="">United Kingdom(+44)</option>
                                    <option value="US">United States (+1)</option>
                                    <option value="CA">Canada (+1)</option>
                                    <option value="FR">France (+33)</option>
                                    <!-- Add more country options -->
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                        </div>
                        
                        <!-- Phone Number -->
                        <div class="col-12 col-lg-4">
                            <label for="phone-number">Phone Number</label>
                            <input class="tp-input" id="phone-number" name="phone-number" placeholder="0123456789">
                        </div>

                        <!-- Email Address -->
                        <div class="col-12 col-lg-4">
                            <label for="email-address">Email Address</label>
                            <input class="tp-input" id="email-address" name="email-address" placeholder="example@email.com" required="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="addtl-details-row">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <label for="address">Address*</label>
                    <input class="tp-input" id="address" name="address" placeholder="Start typing here..." required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <label for="city">City*</label>
                            <div class="select">
                                <select class="tp-input" id="city" name="city" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="london">London</option>
                                    <option value="manchester">Manchester</option>
                                    <option value="birmingham">Birmingham</option>
                                    <!-- Add more city options -->
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="col-12 col-lg-3">
                            <label for="country">Country*</label>
                            <div class="select">
                                <select class="tp-input" id="country" name="country" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="us">United States</option>
                                    <option value="ca">Canada</option>
                                    <!-- Add more country options -->
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                        </div>

                        <!-- County/Province -->
                        <div class="col-12 col-lg-3">
                            <label for="county">County/Province</label>
                            <div class="select">
                                <select class="tp-input" id="county" name="county">
                                    <option value="" disabled selected>Select</option>
                                    <option value="greater-london">Greater London</option>
                                    <option value="west-midlands">West Midlands</option>
                                    <option value="lancashire">Lancashire</option>
                                    <!-- Add more county options -->
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                        </div>
                        <!-- Postal Code -->
                        <div class="col-12 col-lg-3">
                            <label for="postal-code">Postal Code</label>
                            <input class="tp-input" id="postal-code" name="postal-code" placeholder="Type Here">
                        </div>
                    </div>
                </div><!-- col -->

            </div><!-- row -->
        </div><!-- addtl-details-row -->

        <div class="addtl-details-row">
            <div class="row"> 
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <!-- Country Code -->
                        <div class="col-12 col-lg-4 countrycode">
                            <label for="country-code">Country Code</label>
                            <div class="select">
                                <select class="tp-input" id="country-code" name="country-code" required>
                                    <option value="" disabled selected>United Kingdom(+44)</option>
                                    <option value="US">United States (+1)</option>
                                    <option value="CA">Canada (+1)</option>
                                    <option value="FR">France (+33)</option>
                                    <!-- Add more country options -->
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                        </div>
                        
                        <!-- Phone Number -->
                        <div class="col-12 col-lg-4">
                            <label for="phone-number">Phone Number</label>
                            <input class="tp-input" id="phone-number" name="phone-number" placeholder="0123456789">
                        </div>

                        <!-- Email Address -->
                        <div class="col-12 col-lg-4">
                            <label for="email-address">Email Address</label>
                            <input class="tp-input" id="email-address" name="email-address" placeholder="example@email.com" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- checkoutbox main -->

    <h3 class="fs20 fw-normal fontfam2 my-3">
        Additional Passengers
    </h3>
    <h3 class="fs20 fontfam2 mb-3">
        P 02
    </h3>

    <div class="checkoutbox-main">
        <div class="row">
            <div class="col-12 col-lg-10">
                <div class="row">
                    <div class="col-md-2 col-12">
                        <label>Title*</label>
                        <div class="select">
                            <select name="passenger1-title" required> 
                                <option>Mr</option>
                                <option>Mrs</option>
                            </select>
                            <div class="select_arrow"></div>
                        </div>
                    </div><!-- col -->
                    <div class="col-md-5 col-12">
                        <label>First Name*</label>
                        <input type="text" id="fname" name="passenger1-fname" class="tp-input" placeholder="First Name">
                    </div><!-- col -->
                    <div class="col-md-5 col-12">
                        <label>Last Name*</label>
                        <input type="text" id="lname" name="passenger1-lname" class="tp-input" placeholder="Last Name">
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-md-2 col-12">
                <label>Age*</label>
                <div class="select">
                    <select name="passenger1-age" required=""> 
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <!-- Add more age options -->
                        <option value="40">40</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
            <div class="col-md-4 col-12">
                <label>Date of Birth</label>
                <input class="tp-input datetoday" datepicker="first" name="flight-additional-dob1" id="flight-additional-dob1" placeholder="DD/MM/YYYY" required="required">
            </div><!-- col -->
            <div class="col-md-4 col-12">
                <label>Gender*</label>
                <div class="select">
                    <select name="passenger1-gender" required=""> 
                        <option value="" disabled="" selected="">Prefer Not to Say</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <!-- Country Code -->
                        <div class="col-12 col-lg-4 countrycode">
                            <label for="country-code">Country Code</label>
                            <div class="select">
                                <select class="tp-input" id="country-code" name="country-code" required="">
                                    <option value="" disabled="" selected="">United Kingdom(+44)</option>
                                    <option value="US">United States (+1)</option>
                                    <option value="CA">Canada (+1)</option>
                                    <option value="FR">France (+33)</option>
                                    <!-- Add more country options -->
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                        </div>
                        
                        <!-- Phone Number -->
                        <div class="col-12 col-lg-4">
                            <label for="phone-number">Phone Number</label>
                            <input class="tp-input" id="phone-number" name="phone-number" placeholder="0123456789">
                        </div>

                        <!-- Email Address -->
                        <div class="col-12 col-lg-4">
                            <label for="email-address">Email Address</label>
                            <input class="tp-input" id="email-address" name="email-address" placeholder="example@email.com" required="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="addtl-details-row">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <label for="address">Address*</label>
                    <input class="tp-input" id="address" name="address" placeholder="Start typing here..." required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <label for="city">City*</label>
                            <div class="select">
                                <select class="tp-input" id="city" name="city" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="london">London</option>
                                    <option value="manchester">Manchester</option>
                                    <option value="birmingham">Birmingham</option>
                                    <!-- Add more city options -->
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="col-12 col-lg-3">
                            <label for="country">Country*</label>
                            <div class="select">
                                <select class="tp-input" id="country" name="country" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="uk">United Kingdom</option>
                                    <option value="us">United States</option>
                                    <option value="ca">Canada</option>
                                    <!-- Add more country options -->
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                        </div>

                        <!-- County/Province -->
                        <div class="col-12 col-lg-3">
                            <label for="county">County/Province</label>
                            <div class="select">
                                <select class="tp-input" id="county" name="county">
                                    <option value="" disabled selected>Select</option>
                                    <option value="greater-london">Greater London</option>
                                    <option value="west-midlands">West Midlands</option>
                                    <option value="lancashire">Lancashire</option>
                                    <!-- Add more county options -->
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                        </div>
                        <!-- Postal Code -->
                        <div class="col-12 col-lg-3">
                            <label for="postal-code">Postal Code</label>
                            <input class="tp-input" id="postal-code" name="postal-code" placeholder="Type Here">
                        </div>
                    </div>
                </div><!-- col -->

            </div><!-- row -->
        </div><!-- addtl-details-row -->

        <div class="addtl-details-row">
            <div class="row"> 
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <!-- Country Code -->
                        <div class="col-12 col-lg-4 countrycode">
                            <label for="country-code">Country Code</label>
                            <div class="select">
                                <select class="tp-input" id="country-code" name="country-code" required>
                                    <option value="" disabled selected>United Kingdom(+44)</option>
                                    <option value="US">United States (+1)</option>
                                    <option value="CA">Canada (+1)</option>
                                    <option value="FR">France (+33)</option>
                                    <!-- Add more country options -->
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                        </div>
                        
                        <!-- Phone Number -->
                        <div class="col-12 col-lg-4">
                            <label for="phone-number">Phone Number</label>
                            <input class="tp-input" id="phone-number" name="phone-number" placeholder="0123456789">
                        </div>

                        <!-- Email Address -->
                        <div class="col-12 col-lg-4">
                            <label for="email-address">Email Address</label>
                            <input class="tp-input" id="email-address" name="email-address" placeholder="example@email.com" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- checkoutbox main -->
</div><!-- checkoutbox -->