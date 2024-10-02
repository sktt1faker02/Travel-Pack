
    <div class="searchbar-main" id="searchbar-flights">
        <div class="searchbar-main-inner">
            <form name="flights-search" id="flights-search" method="post" action="">
                <div class="searchform-inner">
                    <div class="searchform-row">
                        <div class="searchbar-inputwrap flex5">
                            <input type="text" class="form-control return-required" autocomplete="airport" id="flt-departs-from-O" name="flt-departs-from-O" value="" placeholder="From" required="required">
                        </div>

                        <div class="searchbar-inputwrap input-witharrow flex5 mobile-last-col">
                            <input type="text" class="form-control return-required" autocomplete="airport" id="flt-arrives-to-O" name="flt-arrives-to-O" value="" placeholder="To" required="required">
                        </div>

                        <div class="searchbar-inputwrap flex5 flight-depart-main mobile-bordertop">
                            <input class="form-control return-required date pickup-date" datepicker="first" name="flt-departure-date-O" id="flt-departure-date-O" value="" placeholder="Depart" required="required">
                            <div class="select_arrow"></div>
                        </div>

                        <div class="searchbar-inputwrap flex5 flight-return-main mobile-last-col mobile-bordertop">
                            <input class="form-control date dropoff-date" name="flights-return" id="flights-return" value="" placeholder="Return">
                            <div class="select_arrow"></div>
                        </div>

                        <div class="searchbar-inputwrap mobile-bordertop flight-departure-time mobile-last-col flex5">
                            <select class="form-control" name="flt-departure-time-O" id="">
                                <option value="" disabled selected>Departure Time</option>
                                <option value="06:00">06:00</option>
                                <option value="12:00">12:00</option>
                                <option value="18:00">18:00</option>                                                    
                            </select>
                            <div class="select_arrow"></div>
                        </div><!-- searchbar inputwrap -->

                        <div class="searchbar-inputwrap flex100-mobile change-text-wrap searchbar-select mobile-bordertop flex8 infant-validation mobile-last-col">
                            <input class="form-control dropdownfilter-click input-change-text" placeholder="Passengers and Cabin Class" readonly>
                            <div class="select_arrow"></div>

                            <div class="dropdownfilter-main">
                                <div class="dropdown-filter">
                                    <div class="dd-filter-inner">
                                        <div class="dd-filter-wrap">
                                            <div class="dropdowncabin">
                                                <label>Cabin Class</label>
                                                <div class="searchbar-inputwrap">
                                                    <select class="form-control dropdown-filter-cabin-class" name="flt-cabin">
                                                        <option value="4" selected="">Economy</option>
                                                        <option value="3">Premium Economy</option>
                                                        <option value="2">Business</option>
                                                        <option value="1">First</option>
                                                    </select>
                                                    <div class="select_arrow"></div>
                                                </div><!-- searchbar inputwrap -->
                                            </div>
                                            <div class="dd-filter dd-filter-max-9 dropdown-filter-adults-count dropdown-filter-travellers-count">
                                                <div class="dd-filter-left">
                                                    <label>
                                                        Adults
                                                    </label>
                                                    <small>Aged 16+</small>
                                                </div>
                                                <div class="dd-filter-right">
                                                    <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                    <input type="text" value="01" readonly>
                                                    <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="dd-filter dd-filter-max-9 dropdown-filter-children-count dropdown-filter-travellers-count">
                                                <div class="dd-filter-left">
                                                    <label>
                                                        Children
                                                    </label>
                                                    <small>Aged 2 to 11</small>
                                                </div>
                                                <div class="dd-filter-right">
                                                    <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                    <input type="text" value="01" readonly>
                                                    <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                                </div> 
                                            </div>
                                            <div class="dd-filter dd-filter-max-9 dropdown-filter-youth-count dropdown-filter-travellers-count">
                                                <div class="dd-filter-left">
                                                    <label>
                                                        Youths
                                                    </label>
                                                    <small>Aged 12 to 15</small>
                                                </div>
                                                <div class="dd-filter-right">
                                                    <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                    <input type="text" value="01" readonly>
                                                    <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                                </div> 
                                            </div>
                                            <div class="dd-filter dd-filter-max-9 dropdown-filter-infants-count dropdown-filter-travellers-count">
                                                <div class="dd-filter-left">
                                                    <label>
                                                        Infants
                                                    </label>
                                                    <small>Aged 0 to 2</small>
                                                </div>
                                                <div class="dd-filter-right">
                                                    <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                    <input type="text" value="00" readonly>
                                                    <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div><!-- dd filter wrap -->
                                        <div class="dd-filtertext">
                                            <p>
                                                Your age at time of travel must be valid for the age category booked.
                                            </p>
                                            <p>
                                                Age limits and policies for travelling with children may vary so please check before booking.
                                            </p>
                                        </div><!-- fitertext -->
                                        <div class="dd-filterbtn">
                                            <button class="btn btn-primary">
                                                Apply
                                            </button>
                                        </div>
                                    </div><!-- dd filter inner -->
                                </div>
                            </div>
                        </div><!-- searchabr inputwrap -->

                        <div class="searchnow-btn searchbar-inputwrap flex5 justify-content-center flex100-mobile mobile-bordertop">
                            <a class="btn-typ2 searchnowbtn btn btn-primary" href="javascript:void(0);" title="Search Now">Search Now</a>
                        </div>
                    </div><!-- searchform-row -->

                    <div class="searchform-more-content search-more-content-rows smc-return hide-first searchform-more-content-flight">
                        <div class="searchform-wrap-main mt-3">
                            <div class="searchform-row smc-openjaw-row mt-3 searchform-row-top">
                                <div class="searchbar-inputwrap mobile-bordertop flight-departure-time mobile-last-col">
                                    <select class="form-control" name="flt-departure-time-I" id="">
                                        <option value="" disabled selected>Departure Time</option>
                                        <option value="06:00">06:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="18:00">18:00</option>                                                    
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop flight-departure-time mobile-last-col">
                                    <select class="form-control" name="flt-departure-time-I" id="">
                                        <option value="" disabled selected>Departure Time</option>
                                        <option value="06:00">06:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="18:00">18:00</option>                                                    
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap flights-faretype mobile-col-last mobile-bordertop">
                                    <select class="form-control" name="fare-type" >
                                        <option value="lowest-fare" disabled selected>Fares Type</option>
                                        <option value="lowest-fare">Lowest Fare</option>
                                        <option value="private-fares">Private Fares (Only)</option>
                                        <option value="flexible-fares">Flexible Fares</option>
                                        <option value="published">Published (Only)</option>
                                        <option value="tour-operator-deferred">Tour Operator Deferred</option>
                                        <option value="tour-operator-semi-deferred">Tour Operator Semi Deferred</option>
                                        <option value="vfr">VFR</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap">
                                    <select class="form-control" name="fare-bag-type">
                                        <option value="any" disabled selected>Baggage</option>
                                        <option value="any">Any</option>
                                        <option value="fares-with-bags">Fares with Bags</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform-row -->
                        </div><!-- searchforrn wrap -->
                    </div><!--  -->

                    <div class="searchform-more-content search-more-content-rows smc-oneway hide-first searchform-more-content-flight">
                        <div class="searchform-wrap-main mt-3">
                            <div class="searchform-row smc-openjaw-row mt-3 searchform-row-top">
                                <div class="searchbar-inputwrap mobile-bordertop flight-departure-time mobile-last-col">
                                    <select class="form-control" name="fare-type" >
                                        <option value="lowest-fare" disabled selected>Fares Type</option>
                                        <option value="lowest-fare">Lowest Fare</option>
                                        <option value="private-fares">Private Fares (Only)</option>
                                        <option value="flexible-fares">Flexible Fares</option>
                                        <option value="published">Published (Only)</option>
                                        <option value="tour-operator-deferred">Tour Operator Deferred</option>
                                        <option value="tour-operator-semi-deferred">Tour Operator Semi Deferred</option>
                                        <option value="vfr">VFR</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop flight-departure-time mobile-last-col">
                                    <select class="form-control" name="fare-bag-type">
                                        <option value="any" disabled selected>Baggage</option>
                                        <option value="any">Any</option>
                                        <option value="fares-with-bags">Fares with Bags</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap flights-faretype mobile-col-last mobile-bordertop">
                                    <select class="form-control" name="fare-bag-type">
                                        <option value="any" disabled selected>Stops</option>
                                        <option value="any">Any</option>
                                        <option value="direct-flights">Direct Flights</option>
                                        <option value="fares-with-bags">Up to one Stops</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap">
                                    <select class="form-control" name="flt-calendar">
                                        <option value="exact" selected>Exact Dates Only</option>
                                        <option value="1-day">+/- 1 day</option>
                                        <option value="2-days">+/- 2 days</option>
                                        <option value="3-days">+/- 3 days</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform-row -->
                        </div><!-- searchforrn wrap -->
                    </div><!--  -->

                    <div class="searchform-more-content search-more-content-rows search-more-content-rows2 smc-openjaw searchform-more-content-flight">
                        <div class="searchform-wrap-main mt-3">
                            <div class="searchform-row smc-openjaw-row mt-3 searchform-row-top">
                                <div class="searchbar-inputwrap">
                                    <input type="text" class="form-control openjaw-required" autocomplete="airport" id="flt-departs-from-I" name="flt-departs-from-I" value="" placeholder="Return From" required="required">
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <input type="text" class="form-control openjaw-required" autocomplete="airport" id="flt-arrives-to-I" name="flt-arrives-to-I" value="" placeholder="Return To" required="required">
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <input type="text" class="form-control openjaw-required" autocomplete="airport" id="flt-arrives-to-I" name="flt-arrives-to-I" value="" placeholder="Return" required="required">
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform-row -->
                            <div class="searchform-row searchform-row-bottom">
                                <div class="searchbar-inputwrap flights-faretype mobile-col-last mobile-bordertop">
                                    <select class="form-control" name="fare-type" >
                                        <option value="lowest-fare" disabled selected>Fares Type</option>
                                        <option value="lowest-fare">Lowest Fare</option>
                                        <option value="private-fares">Private Fares (Only)</option>
                                        <option value="flexible-fares">Flexible Fares</option>
                                        <option value="published">Published (Only)</option>
                                        <option value="tour-operator-deferred">Tour Operator Deferred</option>
                                        <option value="tour-operator-semi-deferred">Tour Operator Semi Deferred</option>
                                        <option value="vfr">VFR</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap">
                                    <select class="form-control" name="fare-bag-type">
                                        <option value="any" disabled selected>Baggage</option>
                                        <option value="any">Any</option>
                                        <option value="fares-with-bags">Fares with Bags</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <select class="form-control" name="stops">
                                        <option value="any" disabled selected>Stops</option>
                                        <option value="any">Any</option>
                                        <option value="direct-flights">Direct Flights</option>
                                        <option value="up-to-one-stop">Up to one stop</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop flex100-mobile">
                                    <select class="form-control" name="calendar-options" id="calendar-options">
                                        <option value="exact-dates-only" disabled selected>Flexibility</option>
                                        <option value="exact-dates-only">Exact Dates Only</option>
                                        <option value="plus-minus-1-day">+/- 1 day</option>
                                        <option value="plus-minus-2-days">+/- 2 days</option>
                                        <option value="plus-minus-3-days">+/- 3 days</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform-row -->
                        </div><!-- searchform-wrap-main -->
                    </div><!-- searchform content more -->

                    <div class="searchform-more-content smc-multicity searchform-more-content-flight">
                        <div class="searchform-wrap-main mt-3">
                            <div class="searchform-row searchform-row-top">
                                <div class="searchbar-inputwrap">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-departs-from-1" value="" placeholder="Depart From" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-arrives-to-1" value="" placeholder="Arrived To" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop">
                                    <input type="text" class="form-control date datetoday" multidate="3" name="flt-departure-date-1" value="" placeholder="When">
                                    <div class="select_arrow"></div>
                                </div>
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col">
                                    <select class="form-control" name="departure-time" id="">
                                        <option value="" disabled selected>Departure Time</option>
                                        <option value="06:00">06:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="18:00">18:00</option>                                                    
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col flex100-mobile">
                                    <select class="form-control" name="flt-cabin-1" id="cabin-1">
                                        <option value="" disabled selected>Cabin</option>
                                        <option value="4">Economy</option>
                                        <option value="3">Premium Economy</option>
                                        <option value="2">Business</option>
                                        <option value="1">First</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform row -->
                            <div class="searchform-row mobile-bordertop searchform-row-mid">
                                <div class="searchbar-inputwrap">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-departs-from-1" value="" placeholder="Depart From" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-arrives-to-1" value="" placeholder="Arrived To" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop">
                                    <input type="text" class="form-control date datetoday" multidate="3" name="flt-departure-date-1" value="" placeholder="When">
                                    <div class="select_arrow"></div>
                                </div>
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col">
                                    <select class="form-control" name="departure-time" id="">
                                        <option value="" disabled selected>Departure Time</option>
                                        <option value="06:00">06:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="18:00">18:00</option>                                                    
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col flex100-mobile">
                                    <select class="form-control" name="flt-cabin-1" >
                                        <option value="" disabled selected>Cabin</option>
                                        <option value="4">Economy</option>
                                        <option value="3">Premium Economy</option>
                                        <option value="2">Business</option>
                                        <option value="1">First</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform row -->
                            <div class="searchform-row mobile-bordertop searchform-row-mid">
                                <div class="searchbar-inputwrap">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-departs-from-1" value="" placeholder="Depart From" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-arrives-to-1" value="" placeholder="Arrived To" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop">
                                    <input type="text" class="form-control date datetoday" multidate="3" name="flt-departure-date-1" value="" placeholder="When">
                                    <div class="select_arrow"></div>
                                </div>
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col">
                                    <select class="form-control" name="departure-time" id="">
                                        <option value="" disabled selected>Departure Time</option>
                                        <option value="06:00">06:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="18:00">18:00</option>                                                    
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col flex100-mobile">
                                    <select class="form-control" name="flt-cabin-1" >
                                        <option value="" disabled selected>Cabin</option>
                                        <option value="4">Economy</option>
                                        <option value="3">Premium Economy</option>
                                        <option value="2">Business</option>
                                        <option value="1">First</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform row -->
                            <div class="searchform-row mobile-bordertop searchform-row-mid">
                                <div class="searchbar-inputwrap">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-departs-from-1" value="" placeholder="Depart From" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-arrives-to-1" value="" placeholder="Arrived To" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop">
                                    <input type="text" class="form-control date datetoday" multidate="3" name="flt-departure-date-1" value="" placeholder="When">
                                    <div class="select_arrow"></div>
                                </div>
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col">
                                    <select class="form-control" name="departure-time" id="">
                                        <option value="" disabled selected>Departure Time</option>
                                        <option value="06:00">06:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="18:00">18:00</option>                                                    
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col flex100-mobile">
                                    <select class="form-control" name="flt-cabin-1" >
                                        <option value="" disabled selected>Cabin</option>
                                        <option value="4">Economy</option>
                                        <option value="3">Premium Economy</option>
                                        <option value="2">Business</option>
                                        <option value="1">First</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform row -->
                            <div class="searchform-row mobile-bordertop searchform-row-mid">
                                <div class="searchbar-inputwrap">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-departs-from-1" value="" placeholder="Depart From" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-arrives-to-1" value="" placeholder="Arrived To" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop">
                                    <input type="text" class="form-control date datetoday" multidate="3" name="flt-departure-date-1" value="" placeholder="When">
                                    <div class="select_arrow"></div>
                                </div>
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col">
                                    <select class="form-control" name="departure-time" id="">
                                        <option value="" disabled selected>Departure Time</option>
                                        <option value="06:00">06:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="18:00">18:00</option>                                                    
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col flex100-mobile">
                                    <select class="form-control" name="flt-cabin-1" >
                                        <option value="" disabled selected>Cabin</option>
                                        <option value="4">Economy</option>
                                        <option value="3">Premium Economy</option>
                                        <option value="2">Business</option>
                                        <option value="1">First</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform row -->
                            <div class="searchform-row mobile-bordertop searchform-row-mid">
                                <div class="searchbar-inputwrap">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-departs-from-1" value="" placeholder="Depart From" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-arrives-to-1" value="" placeholder="Arrived To" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop">
                                    <input type="text" class="form-control date datetoday" multidate="3" name="flt-departure-date-1" value="" placeholder="When">
                                    <div class="select_arrow"></div>
                                </div>
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col">
                                    <select class="form-control" name="departure-time" id="">
                                        <option value="" disabled selected>Departure Time</option>
                                        <option value="06:00">06:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="18:00">18:00</option>                                                    
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col flex100-mobile">
                                    <select class="form-control" name="flt-cabin-1" >
                                        <option value="" disabled selected>Cabin</option>
                                        <option value="4">Economy</option>
                                        <option value="3">Premium Economy</option>
                                        <option value="2">Business</option>
                                        <option value="1">First</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform row -->
                            <div class="searchform-row mobile-bordertop searchform-row-mid">
                                <div class="searchbar-inputwrap">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-departs-from-1" value="" placeholder="Depart From" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <input type="text" class="form-control multistop-required" autocomplete="airport" name="flt-arrives-to-1" value="" placeholder="Arrived To" required="required">
                                </div><!-- searchvar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop">
                                    <input type="text" class="form-control date datetoday" multidate="3" name="flt-departure-date-1" value="" placeholder="When">
                                    <div class="select_arrow"></div>
                                </div>
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col">
                                    <select class="form-control" name="departure-time" id="">
                                        <option value="" disabled selected>Departure Time</option>
                                        <option value="06:00">06:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="18:00">18:00</option>                                                    
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col flex100-mobile">
                                    <select class="form-control" name="flt-cabin-1" >
                                        <option value="" disabled selected>Cabin</option>
                                        <option value="4">Economy</option>
                                        <option value="3">Premium Economy</option>
                                        <option value="2">Business</option>
                                        <option value="1">First</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform row -->

                            <div class="searchform-row searchform-row-bottom">
                                <div class="searchbar-inputwrap">
                                    <select class="form-control" name="departure-time" id="">
                                        <option value="" disabled selected>Depart Time</option>
                                        <option value="06:00">06:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="18:00">18:00</option>                                                    
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-last-col">
                                    <select class="form-control" name="fare-type" >
                                        <option value="lowest-fare" disabled selected>Fares Type</option>
                                        <option value="lowest-fare">Lowest Fare</option>
                                        <option value="private-fares">Private Fares (Only)</option>
                                        <option value="flexible-fares">Flexible Fares</option>
                                        <option value="published">Published (Only)</option>
                                        <option value="tour-operator-deferred">Tour Operator Deferred</option>
                                        <option value="tour-operator-semi-deferred">Tour Operator Semi Deferred</option>
                                        <option value="vfr">VFR</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop">
                                    <select class="form-control" name="fare-bag-type">
                                        <option value="any" disabled selected>Baggage</option>
                                        <option value="any">Any</option>
                                        <option value="fares-with-bags">Fares with Bags</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                                <div class="searchbar-inputwrap mobile-bordertop mobile-last-col">
                                    <select class="form-control" name="stops">
                                        <option value="any" disabled selected>Stops</option>
                                        <option value="any">Any</option>
                                        <option value="direct-flights">Direct Flights</option>
                                        <option value="up-to-one-stop">Up to one stop</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div><!-- searchbar inputwrap -->
                            </div><!-- searchform row -->
                        </div><!-- searchform-wrap-main -->
                    </div><!-- searchform row -->
                    
                    <div class="searchform-more-wrap row mt-2">
                        <div class="searchform-more hide-first d-flex col-12 mobile-order-2 col-md-2 col-lg-4 col-xl-3 align-items-center">
                            <span>
                                More Options
                            </span>    
                            <i class="fa-solid fa-chevron-down ms-2"></i>
                        </div><!-- searchform-more -->
                        <div class="searchbar-checkboxes col-12 col-md-10 ps-3 mobile-order-1">
                            <label for="radio-return">
                                <input type="radio" id="radio-return" name="flt-journey" value="R" checked>
                                <span class="custom-checkbox"><i class="fa-solid fa-check"></i></span>
                                Return
                            </label>
                            <label for="radio-oneway">
                                <input type="radio" id="radio-oneway" name="flt-journey" value="O">
                                <span class="custom-checkbox"><i class="fa-solid fa-check"></i></span>
                                One way
                            </label>
                            <label for="radio-openjaw">
                                <input type="radio" id="radio-openjaw" name="flt-journey" value="J" >
                                <span class="custom-checkbox"><i class="fa-solid fa-check"></i></span>
                                Open Jaw
                            </label>
                            <label for="radio-multi">
                                <input type="radio" id="radio-multi" name="flt-journey" value="M">
                                <span class="custom-checkbox"><i class="fa-solid fa-check"></i></span>
                                Multi-City
                            </label>
                        </div>
                    </div><!-- searchform-more wrap -->
                </div><!-- searchform-inner -->
            </form><!-- form -->
        </div>
    </div><!-- searchbar main -->