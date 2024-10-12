
<div class="checkoutbox">
    <h3 class="fw-semibold mb-3 fs20 fontfam2">
        Lead Guest
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
            <div class="col-12 col-lg-10">
                <div class="row mt-2">
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
            </div>                                
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
    </div><!-- checkoutbox main -->
</div><!-- checkoutbox -->

<div class="checkoutbox">
    <h3 class="fw-semibold mb-3 fs20 fontfam2">
        Room 1 (Standard Room)
    </h3>

    <div class="checkoutbox-main">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                        <h3 class="fontfam2 fs20 mb-3">
                        Adult 01
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                        <h3 class="fontfam2 fs20 mb-3">
                        Adult 02
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                        <h3 class="fontfam2 fs20 mb-3">
                        Adult 03
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
        </div><!-- row -->

        <div class="row mt-3">
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                    <h3 class="fontfam2 fs20 mb-3">
                        Child 01
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                    <label>Age of Child</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                    <h3 class="fontfam2 fs20 mb-3">
                        Child 02
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                    <label>Age of Child</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                    <h3 class="fontfam2 fs20 mb-3">
                        Child 03
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                    <label>Age of Child</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->

            <div class="col-12 mt-3">
                <label for="">
                    Please state if you need any special requests/arrangements
                </label>
                <textarea name="" id="" class="tp-textarea" placeholder="Start typing here..."></textarea>
            </div>
        </div><!-- row -->
    </div><!-- checkoutbox main -->

</div>

<div class="checkoutbox">
    <h3 class="fw-semibold mb-3 fs20 fontfam2">
        Room 2 (Standard Room)
    </h3>

    <div class="checkoutbox-main">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                        <h3 class="fontfam2 fs20 mb-3">
                        Adult 01
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                        <h3 class="fontfam2 fs20 mb-3">
                        Adult 02
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                        <h3 class="fontfam2 fs20 mb-3">
                        Adult 03
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
        </div><!-- row -->

        <div class="row mt-3">
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                    <h3 class="fontfam2 fs20 mb-3">
                        Child 01
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                    <label>Age of Child</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                    <h3 class="fontfam2 fs20 mb-3">
                        Child 02
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                    <label>Age of Child</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                    <h3 class="fontfam2 fs20 mb-3">
                        Child 03
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                    <label>Age of Child</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->

            <div class="col-12 mt-3">
                <label for="">
                    Please state if you need any special requests/arrangements
                </label>
                <textarea name="" id="" class="tp-textarea" placeholder="Start typing here..."></textarea>
            </div>
        </div><!-- row -->
    </div><!-- checkoutbox main -->

</div>

<div class="checkoutbox">
    <h3 class="fw-semibold mb-3 fs20 fontfam2">
        Room 3 (Standard Room)
    </h3>

    <div class="checkoutbox-main">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                        <h3 class="fontfam2 fs20 mb-3">
                        Adult 01
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                        <h3 class="fontfam2 fs20 mb-3">
                        Adult 02
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                        <h3 class="fontfam2 fs20 mb-3">
                        Adult 03
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
        </div><!-- row -->

        <div class="row mt-3">
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                    <h3 class="fontfam2 fs20 mb-3">
                        Child 01
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                    <label>Age of Child</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                    <h3 class="fontfam2 fs20 mb-3">
                        Child 02
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                    <label>Age of Child</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->
            <div class="col-12 col-md-4">
                <div class="hotel-pbox hotel-pbox-border">
                    <h3 class="fontfam2 fs20 mb-3">
                        Child 03
                    </h3>
                    <label>Date of Birth</label>
                    <input class="tp-input datepicker mb-3" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                    <label>Age of Child</label>
                    <input class="tp-input datepicker" datepicker="first" name="flight-additional-dob1" id="additional-dob1" placeholder="DD/MM/YYYY" required="required">
                </div><!-- hotel pbox -->
            </div><!-- col -->

            <div class="col-12 mt-3">
                <label for="">
                    Please state if you need any special requests/arrangements
                </label>
                <textarea name="" id="" class="tp-textarea" placeholder="Start typing here..."></textarea>
            </div>
        </div><!-- row -->
    </div><!-- checkoutbox main -->

</div>