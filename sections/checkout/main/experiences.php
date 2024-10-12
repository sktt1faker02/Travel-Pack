<h3 class="mb-3 tp-top-heading fw-medium">
    Lead Participant
</h3>
<h3 class="mb-3 tp-top-heading">
    Adult 01
</h3>
<div class="checkoutbox-main">
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
    
    <div class="row mt-2">
        <div class="col-md-2 col-12">
            <label>Age*</label>
            <div class="select">
                <select name="passenger1-age" required> 
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
                <select name="passenger1-gender" required> 
                    <option value="" disabled selected>Prefer Not to Say</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
                <div class="select_arrow"></div>
            </div>
        </div><!-- col -->
    </div><!-- row -->
    <div class="row mt-2">
        <div class="col-md-2 col-12">
            <label for="weight">Weight (kg)</label>
            <div class="select">
                <select id="weight" name="weight" required>
                    <option value="" disabled selected>00</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                </select>
                <div class="select_arrow"></div>
            </div>
        </div><!-- col -->
        <div class="col-md-2 col-12">
            <label for="height">Height (cm)</label>
            <div class="select">
                <select id="height" name="height" required>
                    <option value="" disabled selected>00</option>
                    <option value="150">150</option>
                    <option value="160">160</option>
                    <option value="170">170</option>
                </select>
                <div class="select_arrow"></div>
            </div>
        </div><!-- col -->
        <div class="col-md-3 col-12">
            <label for="language">Language</label>
            <div class="select">
                <select id="language" name="language" required>
                    <option value="" disabled selected>English</option>
                    <option value="english">English</option>
                    <option value="spanish">Spanish</option>
                    <option value="french">French</option>
                </select>
                <div class="select_arrow"></div>
            </div>
        </div><!-- col -->
    </div><!-- row -->

    <div class="addtl-details-row mt-3">
        <div class="row"> 
            <div class="col-12 col-lg-3 addtlcolfirst">
                <label for="passport-number">Passport Number</label>
                <input class="tp-input" id="passport-number" name="passport-number" placeholder="0000000000" required>
            </div>

            <div class="col-12 col-lg-3">
                <label for="passport-expiry">Passport Expiry</label>
                <input class="tp-input" id="passport-expiry" name="passport-expiry" placeholder="MM/YYYY" required>
            </div>

            <div class="col-12 col-lg-3">
                <label for="nationality">Nationality</label>
                <div class="select">
                    <select class="tp-input" id="nationality" name="nationality" required>
                        <option value="British">British</option>
                        <option value="American">American</option>
                        <option value="Canadian">Canadian</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div>
        </div><!-- row -->
    </div><!-- addtl -->
    <div class="addtl-details-row mt-3">
        <div class="row">
            <div class="col-12 col-lg-10">
                <label for="address">Address*</label>
                <input class="tp-input" id="address" name="address" placeholder="Start typing here..." required="">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 col-lg-10">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <label for="city">City*</label>
                        <div class="select">
                            <select class="tp-input" id="city" name="city" required="">
                                <option value="" disabled="" selected="">Select</option>
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
                            <select class="tp-input" id="country" name="country" required="">
                                <option value="" disabled="" selected="">Select</option>
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
                                <option value="" disabled="" selected="">Select</option>
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
    </div><!-- addtl row -->


    <div class="addtl-details-row mt-3">
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
</div><!-- passenngerbox main -->

<h3 class="mb-3 tp-top-heading fw-medium mt-4">
    Additional Participants
</h3>

<div class="experiences-checkout-box mt-3">
    <h3 class="mb-3 tp-top-heading">
        Adult 02
    </h3>

    <div class="checkoutbox-main">
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
        
        <div class="row mt-2">
            <div class="col-md-2 col-12">
                <label>Age*</label>
                <div class="select">
                    <select name="passenger1-age" required> 
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
                    <select name="passenger1-gender" required> 
                        <option value="" disabled selected>Prefer Not to Say</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row mt-2">
            <div class="col-md-2 col-12">
                <label for="weight">Weight (kg)</label>
                <div class="select">
                    <select id="weight" name="weight" required>
                        <option value="" disabled selected>00</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="70">70</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
            <div class="col-md-2 col-12">
                <label for="height">Height (cm)</label>
                <div class="select">
                    <select id="height" name="height" required>
                        <option value="" disabled selected>00</option>
                        <option value="150">150</option>
                        <option value="160">160</option>
                        <option value="170">170</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
            <div class="col-md-3 col-12">
                <label for="language">Language</label>
                <div class="select">
                    <select id="language" name="language" required>
                        <option value="" disabled selected>English</option>
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                        <option value="french">French</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
        </div><!-- row -->

        <div class="addtl-details-row mt-3">
            <div class="row"> 
                <div class="col-12 col-lg-3 addtlcolfirst">
                    <label for="passport-number">Passport Number</label>
                    <input class="tp-input" id="passport-number" name="passport-number" placeholder="0000000000" required>
                </div>

                <div class="col-12 col-lg-3">
                    <label for="passport-expiry">Passport Expiry</label>
                    <input class="tp-input" id="passport-expiry" name="passport-expiry" placeholder="MM/YYYY" required>
                </div>

                <div class="col-12 col-lg-3">
                    <label for="nationality">Nationality</label>
                    <div class="select">
                        <select class="tp-input" id="nationality" name="nationality" required>
                            <option value="British">British</option>
                            <option value="American">American</option>
                            <option value="Canadian">Canadian</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- addtl -->
        <div class="addtl-details-row mt-3">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <label for="address">Address*</label>
                    <input class="tp-input" id="address" name="address" placeholder="Start typing here..." required="">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <label for="city">City*</label>
                            <div class="select">
                                <select class="tp-input" id="city" name="city" required="">
                                    <option value="" disabled="" selected="">Select</option>
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
                                <select class="tp-input" id="country" name="country" required="">
                                    <option value="" disabled="" selected="">Select</option>
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
                                    <option value="" disabled="" selected="">Select</option>
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
        </div><!-- addtl row -->


        <div class="addtl-details-row mt-3">
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
    </div><!-- passenngerbox main -->
</div>

<div class="experiences-checkout-box mt-3">
    <h3 class="mb-3 tp-top-heading">
        Youth 01
    </h3>

    <div class="checkoutbox-main">
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
        
        <div class="row mt-2">
            <div class="col-md-2 col-12">
                <label>Age*</label>
                <div class="select">
                    <select name="passenger1-age" required> 
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
                    <select name="passenger1-gender" required> 
                        <option value="" disabled selected>Prefer Not to Say</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row mt-2">
            <div class="col-md-2 col-12">
                <label for="weight">Weight (kg)</label>
                <div class="select">
                    <select id="weight" name="weight" required>
                        <option value="" disabled selected>00</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="70">70</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
            <div class="col-md-2 col-12">
                <label for="height">Height (cm)</label>
                <div class="select">
                    <select id="height" name="height" required>
                        <option value="" disabled selected>00</option>
                        <option value="150">150</option>
                        <option value="160">160</option>
                        <option value="170">170</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
            <div class="col-md-3 col-12">
                <label for="language">Language</label>
                <div class="select">
                    <select id="language" name="language" required>
                        <option value="" disabled selected>English</option>
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                        <option value="french">French</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
        </div><!-- row -->

        <div class="addtl-details-row mt-3">
            <div class="row"> 
                <div class="col-12 col-lg-3 addtlcolfirst">
                    <label for="passport-number">Passport Number</label>
                    <input class="tp-input" id="passport-number" name="passport-number" placeholder="0000000000" required>
                </div>

                <div class="col-12 col-lg-3">
                    <label for="passport-expiry">Passport Expiry</label>
                    <input class="tp-input" id="passport-expiry" name="passport-expiry" placeholder="MM/YYYY" required>
                </div>

                <div class="col-12 col-lg-3">
                    <label for="nationality">Nationality</label>
                    <div class="select">
                        <select class="tp-input" id="nationality" name="nationality" required>
                            <option value="British">British</option>
                            <option value="American">American</option>
                            <option value="Canadian">Canadian</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- addtl -->
        <div class="addtl-details-row mt-3">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <label for="address">Address*</label>
                    <input class="tp-input" id="address" name="address" placeholder="Start typing here..." required="">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <label for="city">City*</label>
                            <div class="select">
                                <select class="tp-input" id="city" name="city" required="">
                                    <option value="" disabled="" selected="">Select</option>
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
                                <select class="tp-input" id="country" name="country" required="">
                                    <option value="" disabled="" selected="">Select</option>
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
                                    <option value="" disabled="" selected="">Select</option>
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
        </div><!-- addtl row -->


        <div class="addtl-details-row mt-3">
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
    </div><!-- passenngerbox main -->
</div>

<div class="experiences-checkout-box mt-3">
    <h3 class="mb-3 tp-top-heading">
        Child 01
    </h3>

    <div class="checkoutbox-main">
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
        
        <div class="row mt-2">
            <div class="col-md-2 col-12">
                <label>Age*</label>
                <div class="select">
                    <select name="passenger1-age" required> 
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
                    <select name="passenger1-gender" required> 
                        <option value="" disabled selected>Prefer Not to Say</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row mt-2">
            <div class="col-md-2 col-12">
                <label for="weight">Weight (kg)</label>
                <div class="select">
                    <select id="weight" name="weight" required>
                        <option value="" disabled selected>00</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="70">70</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
            <div class="col-md-2 col-12">
                <label for="height">Height (cm)</label>
                <div class="select">
                    <select id="height" name="height" required>
                        <option value="" disabled selected>00</option>
                        <option value="150">150</option>
                        <option value="160">160</option>
                        <option value="170">170</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
            <div class="col-md-3 col-12">
                <label for="language">Language</label>
                <div class="select">
                    <select id="language" name="language" required>
                        <option value="" disabled selected>English</option>
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                        <option value="french">French</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
        </div><!-- row -->

        <div class="addtl-details-row mt-3">
            <div class="row"> 
                <div class="col-12 col-lg-3 addtlcolfirst">
                    <label for="passport-number">Passport Number</label>
                    <input class="tp-input" id="passport-number" name="passport-number" placeholder="0000000000" required>
                </div>

                <div class="col-12 col-lg-3">
                    <label for="passport-expiry">Passport Expiry</label>
                    <input class="tp-input" id="passport-expiry" name="passport-expiry" placeholder="MM/YYYY" required>
                </div>

                <div class="col-12 col-lg-3">
                    <label for="nationality">Nationality</label>
                    <div class="select">
                        <select class="tp-input" id="nationality" name="nationality" required>
                            <option value="British">British</option>
                            <option value="American">American</option>
                            <option value="Canadian">Canadian</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- addtl -->
        <div class="addtl-details-row mt-3">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <label for="address">Address*</label>
                    <input class="tp-input" id="address" name="address" placeholder="Start typing here..." required="">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <label for="city">City*</label>
                            <div class="select">
                                <select class="tp-input" id="city" name="city" required="">
                                    <option value="" disabled="" selected="">Select</option>
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
                                <select class="tp-input" id="country" name="country" required="">
                                    <option value="" disabled="" selected="">Select</option>
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
                                    <option value="" disabled="" selected="">Select</option>
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
        </div><!-- addtl row -->


        <div class="addtl-details-row mt-3">
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
    </div><!-- passenngerbox main -->
</div>

<div class="experiences-checkout-box mt-3">
    <h3 class="mb-3 tp-top-heading">
        Infant 01
    </h3>

    <div class="checkoutbox-main">
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
        
        <div class="row mt-2">
            <div class="col-md-2 col-12">
                <label>Age*</label>
                <div class="select">
                    <select name="passenger1-age" required> 
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
                    <select name="passenger1-gender" required> 
                        <option value="" disabled selected>Prefer Not to Say</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
        </div><!-- row -->
        
        <div class="row mt-2">
            <div class="col-md-2 col-12">
                <label for="weight">Weight (kg)</label>
                <div class="select">
                    <select id="weight" name="weight" required>
                        <option value="" disabled selected>00</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="70">70</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
            <div class="col-md-2 col-12">
                <label for="height">Height (cm)</label>
                <div class="select">
                    <select id="height" name="height" required>
                        <option value="" disabled selected>00</option>
                        <option value="150">150</option>
                        <option value="160">160</option>
                        <option value="170">170</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
            <div class="col-md-3 col-12">
                <label for="language">Language</label>
                <div class="select">
                    <select id="language" name="language" required>
                        <option value="" disabled selected>English</option>
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                        <option value="french">French</option>
                    </select>
                    <div class="select_arrow"></div>
                </div>
            </div><!-- col -->
        </div><!-- row -->

        <div class="addtl-details-row mt-3">
            <div class="row"> 
                <div class="col-12 col-lg-3 addtlcolfirst">
                    <label for="passport-number">Passport Number</label>
                    <input class="tp-input" id="passport-number" name="passport-number" placeholder="0000000000" required>
                </div>

                <div class="col-12 col-lg-3">
                    <label for="passport-expiry">Passport Expiry</label>
                    <input class="tp-input" id="passport-expiry" name="passport-expiry" placeholder="MM/YYYY" required>
                </div>

                <div class="col-12 col-lg-3">
                    <label for="nationality">Nationality</label>
                    <div class="select">
                        <select class="tp-input" id="nationality" name="nationality" required>
                            <option value="British">British</option>
                            <option value="American">American</option>
                            <option value="Canadian">Canadian</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- addtl -->
        <div class="addtl-details-row mt-3">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <label for="address">Address*</label>
                    <input class="tp-input" id="address" name="address" placeholder="Start typing here..." required="">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <label for="city">City*</label>
                            <div class="select">
                                <select class="tp-input" id="city" name="city" required="">
                                    <option value="" disabled="" selected="">Select</option>
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
                                <select class="tp-input" id="country" name="country" required="">
                                    <option value="" disabled="" selected="">Select</option>
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
                                    <option value="" disabled="" selected="">Select</option>
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
        </div><!-- addtl row -->


        <div class="addtl-details-row mt-3">
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
    </div><!-- passenngerbox main -->
</div>