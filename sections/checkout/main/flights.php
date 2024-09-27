
<div class="passengerbox">
    <h3 class="fw-normal fs20 fontfam2">
        Lead Passenger
    </h3>
    <h3 class="mb-3 tp-top-heading">
        P 01
    </h3>
    <div class="passengerbox-main">
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
        
        <div class="row">
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

        <div class="row">
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

        <div class="addtl-details-row">
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
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <!-- Flight Number -->
                <div class="col-12 col-lg-3 addtlcolfirst">
                    <label for="flight-number">Flight Number</label>
                    <input class="tp-input" id="flight-number" name="flight-number" placeholder="000000000" required>
                </div>
                
                <!-- Carrier -->
                <div class="col-12 col-lg-3">
                    <label for="carrier">Carrier</label>
                    <div class="select">
                        <select class="tp-input" id="carrier" name="carrier" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Carrier1">Carrier 1</option>
                            <option value="Carrier2">Carrier 2</option>
                            <option value="Carrier3">Carrier 3</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <!-- Country Code -->
                <div class="col-12 col-lg-3 countrycode">
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
                    <input class="tp-input" id="phone-number" name="phone-number" placeholder="0123456789" required>
                </div>

                <!-- Email Address -->
                <div class="col-12 col-lg-4">
                    <label for="email-address">Email Address</label>
                    <input class="tp-input" id="email-address" name="email-address" placeholder="example@email.com" required>
                </div>
            </div>
        </div>
    </div><!-- passengerbox main -->
</div><!-- passengerbox -->

<div class="passengerbox">
    <h3 class="fw-normal fs20 fontfam2">
        Additional Passengers
    </h3>
    <h3 class="mb-3 tp-top-heading">
        P 02
    </h3>
    <div class="passengerbox-main">
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
        
        <div class="row">
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

        <div class="row">
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

        <div class="addtl-details-row">
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
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <!-- Flight Number -->
                <div class="col-12 col-lg-3 addtlcolfirst">
                    <label for="flight-number">Flight Number</label>
                    <input class="tp-input" id="flight-number" name="flight-number" placeholder="000000000" required>
                </div>
                
                <!-- Carrier -->
                <div class="col-12 col-lg-3">
                    <label for="carrier">Carrier</label>
                    <div class="select">
                        <select class="tp-input" id="carrier" name="carrier" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Carrier1">Carrier 1</option>
                            <option value="Carrier2">Carrier 2</option>
                            <option value="Carrier3">Carrier 3</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <!-- Country Code -->
                <div class="col-12 col-lg-3 countrycode">
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
                    <input class="tp-input" id="phone-number" name="phone-number" placeholder="0123456789" required>
                </div>

                <!-- Email Address -->
                <div class="col-12 col-lg-4">
                    <label for="email-address">Email Address</label>
                    <input class="tp-input" id="email-address" name="email-address" placeholder="example@email.com" required>
                </div>
            </div>
        </div>
    </div><!-- passengerbox main -->
</div><!-- passengerbox -->

<div class="passengerbox">
    <h3 class="mb-3 tp-top-heading">
        P 03
    </h3>
    <div class="passengerbox-main">
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
        
        <div class="row">
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

        <div class="row">
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

        <div class="addtl-details-row">
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
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <!-- Flight Number -->
                <div class="col-12 col-lg-3 addtlcolfirst">
                    <label for="flight-number">Flight Number</label>
                    <input class="tp-input" id="flight-number" name="flight-number" placeholder="000000000" required>
                </div>
                
                <!-- Carrier -->
                <div class="col-12 col-lg-3">
                    <label for="carrier">Carrier</label>
                    <div class="select">
                        <select class="tp-input" id="carrier" name="carrier" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Carrier1">Carrier 1</option>
                            <option value="Carrier2">Carrier 2</option>
                            <option value="Carrier3">Carrier 3</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <!-- Country Code -->
                <div class="col-12 col-lg-3 countrycode">
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
                    <input class="tp-input" id="phone-number" name="phone-number" placeholder="0123456789" required>
                </div>

                <!-- Email Address -->
                <div class="col-12 col-lg-4">
                    <label for="email-address">Email Address</label>
                    <input class="tp-input" id="email-address" name="email-address" placeholder="example@email.com" required>
                </div>
            </div>
        </div>
    </div><!-- passengerbox main -->
</div><!-- passengerbox -->

<div class="passengerbox">
    <h3 class="mb-3 tp-top-heading">
        P 04
    </h3>
    <div class="passengerbox-main">
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
        
        <div class="row">
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

        <div class="row">
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

        <div class="addtl-details-row">
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
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <!-- Flight Number -->
                <div class="col-12 col-lg-3 addtlcolfirst">
                    <label for="flight-number">Flight Number</label>
                    <input class="tp-input" id="flight-number" name="flight-number" placeholder="000000000" required>
                </div>
                
                <!-- Carrier -->
                <div class="col-12 col-lg-3">
                    <label for="carrier">Carrier</label>
                    <div class="select">
                        <select class="tp-input" id="carrier" name="carrier" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Carrier1">Carrier 1</option>
                            <option value="Carrier2">Carrier 2</option>
                            <option value="Carrier3">Carrier 3</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <!-- Country Code -->
                <div class="col-12 col-lg-3 countrycode">
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
                    <input class="tp-input" id="phone-number" name="phone-number" placeholder="0123456789" required>
                </div>

                <!-- Email Address -->
                <div class="col-12 col-lg-4">
                    <label for="email-address">Email Address</label>
                    <input class="tp-input" id="email-address" name="email-address" placeholder="example@email.com" required>
                </div>
            </div>
        </div>
    </div><!-- passengerbox main -->
</div><!-- passengerbox -->

<div class="passengerbox">
    <h3 class="mb-3 tp-top-heading">
        P 05
    </h3>
    <div class="passengerbox-main">
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
        
        <div class="row">
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

        <div class="row">
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

        <div class="addtl-details-row">
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
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <!-- Flight Number -->
                <div class="col-12 col-lg-3 addtlcolfirst">
                    <label for="flight-number">Flight Number</label>
                    <input class="tp-input" id="flight-number" name="flight-number" placeholder="000000000" required>
                </div>
                
                <!-- Carrier -->
                <div class="col-12 col-lg-3">
                    <label for="carrier">Carrier</label>
                    <div class="select">
                        <select class="tp-input" id="carrier" name="carrier" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Carrier1">Carrier 1</option>
                            <option value="Carrier2">Carrier 2</option>
                            <option value="Carrier3">Carrier 3</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="addtl-details-row">
            <div class="row"> 
                <!-- Country Code -->
                <div class="col-12 col-lg-3 countrycode">
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
                    <input class="tp-input" id="phone-number" name="phone-number" placeholder="0123456789" required>
                </div>

                <!-- Email Address -->
                <div class="col-12 col-lg-4">
                    <label for="email-address">Email Address</label>
                    <input class="tp-input" id="email-address" name="email-address" placeholder="example@email.com" required>
                </div>
            </div>
        </div>
    </div><!-- passengerbox main -->
</div><!-- passengerbox -->