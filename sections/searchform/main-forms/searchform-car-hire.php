<div class="searchbar-main" id="searchbar-car-hire">
    <div class="searchbar-main-inner">
        <form name="car-hire-search" id="car-hire-search" method="post" action="">
            <div class="searchform-inner">
                <div class="searchform-row">
                    <div class="searchbar-inputwrap flex7">
                        <input type="text" class="form-control autocomplete" autocomplete="car-location" id="car-pickup" name="car-pickup" value="" placeholder="Pickup" required="">
                        <input type="hidden" id="car-pickup-code" name="car-pickup-code" value="">
                    </div>

                    <div class="searchbar-inputwrap flex7 mobile-last-col">
                        <input class="form-control date car-hire-pickup-date" maxdate="+730D" name="car-hire-date-pickup" id="car-hire-date-pickup" value="" placeholder="Date">
                        <div class="select_arrow"></div>
                    </div>

                    <div class="searchbar-inputwrap input-witharrow flex7 mobile-bordertop">
                        <input type="text" class="form-control autocomplete" autocomplete="car-location" id="car-dropoff" name="car-dropoff" value="" placeholder="Drop Off" required="">
                        <input type="hidden" id="car-dropoff-code" name="car-dropoff-code" value="">
                    </div>

                    <div class="searchbar-inputwrap input-witharrow flex7 mobile-bordertop mobile-last-col">
                        <input class="form-control date car-hire-date-dropoff-pickup" name="car-hire-date-dropoff-pickup" id="car-hire-date-dropoff-pickup" value="" placeholder="Date">
                        <div class="select_arrow"></div>
                    </div>

                    <div class="searchbar-inputwrap searchbar-select flex8 mobile-bordertop">
                        <select class="form-control" name="car-passenger-count" id="car-passenger-count">
                            <option value="" disabled selected>Passengers</option>
                            <option value="1">1 Passenger</option>
                            <option value="2">2 Passengers</option>
                            <option value="3">3 Passengers</option>
                            <option value="4">4 Passengers</option>
                            <option value="5">5 Passengers</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>

                    <div class="searchbar-inputwrap searchbar-select flex8 mobile-bordertop mobile-last-col">
                        <select class="form-control" name="car-driver-age" id="car-driver-age">
                            <option value="" selected>Driver Age*</option>
                            <?php include './sections/searchform/driverage.php'; ?>
                        </select>
                        <div class="select_arrow"></div>
                    </div>

                    <div class="searchnow-btn searchbar-inputwrap mobile-bordertop flex100-mobile">
                        <input type="submit" class="btn-typ2 searchnowbtn btn btn-primary" value="Search Now" onclick="redirectToPage(event)">
                    </div>
                </div><!-- searchform-row -->
                <div class="searchform-more-content more-option-content smoc">
                    <div class="searchform-row mt-3">
                        <div class="searchbar-inputwrap">
                            <select class="form-control" name="car-pickup-time" id="car-hire-time-pickup">
                                <option value="" disabled selected>Pickup Time</option>
                                <?php include './sections/searchform/timeincrements-fifteen.php'; ?>
                            </select>
                            <div class="select_arrow"></div>
                        </div><!-- searchbar-inputwrap -->
                        <div class="searchbar-inputwrap mobile-last-col">
                            <select class="form-control" name=" car-dropoff-time" id="car-hire-time-dropoff">
                                <option value="" disabled selected>Dropoff Time</option>
                                <?php include './sections/searchform/timeincrements-fifteen.php'; ?>
                            </select>
                            <div class="select_arrow"></div>
                        </div><!-- searchbar-inputwrap -->
                        <div class="searchbar-inputwrap flex100-mobile mobile-bordertop">
                            <select class="form-control" name="car-hire-citizenship" id="car-hire-citizenship">
                                <option value="" disabled selected>Citizenship</option>
                                <?php include './sections/searchform/citizenships.php'; ?>
                            </select>
                            <div class="select_arrow"></div>
                        </div><!-- searchbar-inputwrap -->
                    </div><!-- searchform-row -->
                </div><!-- searchform content more -->
                <div class="searchform-more-wrap mt-3">
                    <div class="searchform-more d-flex align-items-center v-search-more sm-tab">
                        <span>
                            More Options
                        </span>
                        <i class="fa-solid fa-chevron-down ms-2"></i>
                    </div>
                </div><!-- searchform-more wrap -->
            </div><!-- searchform-inner -->
        </form><!-- form -->
    </div>
</div><!-- searchbar main -->