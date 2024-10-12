<div class="checkoutbox">
    <h3 class="fs20 fontfam2 mb-3">
        Lead Driver
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
                </div><!-- row -->
            </div>                                
        </div><!-- row -->
    </div><!-- checkoutbox main -->
</div><!-- checkoutbox -->