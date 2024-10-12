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
            
            <div class="row mt-2">
                <div class="col-12 col-lg-10">
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

    <div class="checkoutbox">

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
            
            <div class="row mt-2">
                <div class="col-12 col-lg-10">
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
    </div>

    <div class="checkoutbox">
        <h3 class="fontfam2 fs20">
            Dining Options
        </h3>

        <div class="checkoutbox-main">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <label>Dining Time</label>
                    <input type="text" id="fname" name="passenger1-fname" class="tp-input" placeholder="Type...">
                </div><!-- col -->
                <div class="col-12 col-lg-6">
                    <label>Table Size</label>
                    <input type="text" id="fname" name="passenger1-fname" class="tp-input" placeholder="000000">
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- checkoutbox main -->
    </div><!-- checkoutbox -->

    <div class="checkoutbox">
        <h3 class="fontfam2 fs20">
            Bedding Options
        </h3>

        <div class="checkoutbox-main">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <label>Bedding Layout</label>
                    <input type="text" id="fname" name="passenger1-fname" class="tp-input" placeholder="Type...">
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- checkoutbox main -->
    </div><!-- checkoutbox -->

    <div class="checkoutbox tp-table">
        <h3 class="fs20 fontfam2 mb-">
            Occasions
        </h3>
        <p>
            Are you celebrating a special occasion while onboard?
        </p>
        <div class="responsive-table mt-3">
            <div class="tp-table-main">
                <table class="table-checkout-occasions">
                    <thead>
                        <tr>
                            <th>Passenger</th>
                            <th>Occasion</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Passenger 01</td>
                            <td>
                                <select name="occasion1" required>
                                    <option value="" disabled selected>Select Occasion</option>
                                    <option value="Birthday">Birthday</option>
                                    <option value="Anniversary">Anniversary</option>
                                    <option value="Special Event">Special Event</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="checkout-datepicker" placeholder="dd/mm/yyyy" />
                            </td>
                        </tr>
                        <tr>
                            <td>Passenger 02</td>
                            <td>
                                <select name="occasion2" required>
                                    <option value="" disabled selected>Select Occasion</option>
                                    <option value="Birthday">Birthday</option>
                                    <option value="Anniversary">Anniversary</option>
                                    <option value="Special Event">Special Event</option>
                                </select>
                            </td>
                            <!-- Use type="date" for date input -->
                            <td>
                                <input type="text" class="checkout-datepicker" placeholder="dd/mm/yyyy" />
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- checkoutbox -->

    <div class="checkoutbox tp-table">
        <h3 class="fs20 fontfam2 mb">Medical Requirements</h3>
        <p>Do you have any medical requirements?</p>
        <div class="responsive-table mt-3">
            <div class="tp-table-main">
                <table class="table-checkout-requirements">
                    <thead>
                        <tr>
                            <th>Passenger</th>
                            <th>Requirement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Passenger 01</td>
                            <td>
                                <select name="medical-requirement1" required>
                                    <option value="" disabled selected>Select Requirement</option>
                                    <option value="Wheelchair">Wheelchair</option>
                                    <option value="Hearing Aid">Hearing Aid</option>
                                    <option value="Medical Assistance">Medical Assistance</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Passenger 02</td>
                            <td>
                                <select name="medical-requirement2" required>
                                    <option value="" disabled selected>Select Requirement</option>
                                    <option value="Wheelchair">Wheelchair</option>
                                    <option value="Hearing Aid">Hearing Aid</option>
                                    <option value="Medical Assistance">Medical Assistance</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="checkoutbox tp-table mt-5">
        <h3 class="fs20 fontfam2 mb">Dietary Requirements</h3>
        <p>Do you have any dietary requirements?</p>
        <div class="responsive-table mt-3">
            <div class="tp-table-main">
                <table class="table-checkout-requirements">
                    <thead>
                        <tr>
                            <th>Passenger</th>
                            <th>Requirement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Passenger 01</td>
                            <td>
                                <select name="dietary-requirement1" required>
                                    <option value="" disabled selected>Select Requirement</option>
                                    <option value="Vegetarian">Vegetarian</option>
                                    <option value="Vegan">Vegan</option>
                                    <option value="Gluten-Free">Gluten-Free</option>
                                    <option value="No Restrictions">No Restrictions</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Passenger 02</td>
                            <td>
                                <select name="dietary-requirement2" required>
                                    <option value="" disabled selected>Select Requirement</option>
                                    <option value="Vegetarian">Vegetarian</option>
                                    <option value="Vegan">Vegan</option>
                                    <option value="Gluten-Free">Gluten-Free</option>
                                    <option value="No Restrictions">No Restrictions</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
