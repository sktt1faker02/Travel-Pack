
    <div class="searchbar-main" id="searchbar-rail">
        <div class="searchbar-main-inner">
            <form name="rail-search" id="rail-search" method="post" action="">
                <div class="searchform-inner">
                    <div class="searchform-row">
                        <div class="searchbar-inputwrap flex7">
                            <input type="text" class="form-control" name="rail-from" id="rail-from" placeholder="From">
                        </div>

                        <div class="searchbar-inputwrap input-witharrow flex7 mobile-last-col">
                            <input type="text" class="form-control" name="rail-to" id="rail-to" value="" placeholder="To">
                        </div>

                        <div class="searchbar-inputwrap flex7 mobile-bordertop">
                            <input class="form-control date pickup-date" name="rail-depart" id="rail-depart" value="" placeholder="Depart">
                            <div class="select_arrow"></div>
                        </div>

                        <div class="searchbar-inputwrap searchbar-select flex7 mobile-bordertop mobile-last-col">
                            <select class="form-control" name="rail-time-depart" id="rail-time-depart">
                                <option value="" selected>Depart Time</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                            </select>
                            <div class="select_arrow"></div>
                        </div>

                        <div class="searchbar-inputwrap change-text-wrap searchbar-select flex7 infant-validation mobile-bordertop">
                            <input class="form-control dropdownfilter-click input-change-text input-change-text-passengers" placeholder="Passengers" readonly>
                            <div class="select_arrow"></div>

                            <div class="dropdownfilter-main">
                                <div class="dropdown-filter">
                                    <div class="dd-filter-inner">
                                        <div class="dd-filter-wrap">
                                            <div class="dd-filter dd-filter-max-99 dropdown-filter-adults-count dropdown-filter-travellers-count">
                                                <div class="dd-filter-left">
                                                    <label>
                                                        Adults
                                                    </label>
                                                    <small>Aged 16+</small>
                                                </div>
                                                <div class="dd-filter-right">
                                                    <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                    <input type="text" value="02" readonly>
                                                    <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="dd-filter dd-filter-max-99 dropdown-filter-children-count dropdown-filter-travellers-count">
                                                <div class="dd-filter-left">
                                                    <label>
                                                        Children
                                                    </label>
                                                    <small>Aged 2 to 11</small>
                                                </div>
                                                <div class="dd-filter-right">
                                                    <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                    <input type="text" value="00" readonly>
                                                    <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                                </div> 
                                            </div>
                                            <div class="dd-filter dd-filter-max-99 dropdown-filter-infants-count dropdown-filter-travellers-count">
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
                                </div><!-- dropdown filter -->
                            </div><!-- dropdown filter main -->
                        </div><!-- searchbar input wrap -->

                        <div class="searchbar-inputwrap searchbar-select flex7 mobile-bordertop mobile-last-col">
                            <select class="form-control" name="rail-suppliers" id="rail-suppliers">
                                <option value="" selected>Supplier</option>
                                <option value="1">Supplier 1</option>
                                <option value="2">Supplier 2</option>
                                <option value="3">Supplier 3</option>
                                <option value="4">Supplier 4</option>
                            </select>
                            <div class="select_arrow"></div>
                        </div>

                        <div class="searchnow-btn searchbar-inputwrap flex7 justify-content-center flex100-mobile mobile-bordertop">
                            <a class="btn-typ2 searchnowbtn btn btn-primary" href="javascript:void(0);" title="Search Now">Search Now</a>
                        </div>
                    </div><!-- searchform-row -->

                    <div class="searchform-more-content">
                        <div class="searchform-row mt-3">
                            <div class="searchbar-inputwrap">
                                <input class="form-control date dropoff-date" name="rail-date-return" id="rail-date-return" value="" placeholder="Return">
                                <div class="select_arrow"></div>
                            </div>
                            <div class="searchbar-inputwrap mobile-last-col">
                                <select class="form-control" name="rail-return-time" id="rail-return-time">
                                    <option value="" selected>Return Time</option>
                                    <option value="00:00">00:00</option>
                                    <option value="01:00">01:00</option>
                                    <option value="02:00">02:00</option>
                                    <option value="03:00">03:00</option>
                                    <option value="04:00">04:00</option>
                                    <option value="05:00">05:00</option>
                                    <option value="06:00">06:00</option>
                                    <option value="07:00">07:00</option>
                                    <option value="08:00">08:00</option>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                </select>
                                <div class="select_arrow"></div>
                            </div><!-- searchbar-inputwrap -->
                            <div class="searchbar-inputwrap flex100-mobile mobile-bordertop">
                                <select class="form-control" name="rail-supplier-bottom" id="rail-supplier-bottom">
                                    <option value="" selected>Supplier</option>
                                    <option value="1">Supplier 1</option>
                                    <option value="2">Supplier 2</option>
                                    <option value="3">Supplier 3</option>
                                    <option value="4">Supplier 4</option>
                                </select>                                  
                                <div class="select_arrow"></div>      
                            </div><!-- searchbar-inputwrap -->
                        </div><!-- searchform-row -->
                    </div><!-- searchform content more -->
                    
                    <div class="searchform-more-wrap row mt-2">
                        <div class="searchform-more searchform-more-rail d-flex col-12 col-md-2 align-items-center">
                            <span>
                                More Option 
                            </span>    
                            <i class="fa-solid fa-chevron-down ms-2"></i>
                        </div><!-- searchform-more -->
                        <div class="searchbar-checkboxes col-12 col-md-5">
                            <label for="rail-return">
                                <input type="radio" id="rail-return" name="tripType" value="return" checked>
                                <span class="custom-checkbox"><i class="fa-solid fa-check"></i></span>
                                Return
                            </label>
                            <label for="rail-oneway">
                                <input type="radio" id="rail-oneway" name="tripType" value="oneway">
                                <span class="custom-checkbox"><i class="fa-solid fa-check"></i></span>
                                One Way
                            </label>
                        </div>
                    </div><!-- searchform-more wrap -->
                </div><!-- searchform-inner -->
            </form><!-- form -->
        </div>
    </div><!-- searchbar main -->