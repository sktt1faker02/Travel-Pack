
<div class="searchbar-main" id="searchbar-transfer">
    <div class="searchbar-main-inner">
        <form name="transfer-search" id="transfer-search">
            <div class="searchform-inner">
                <div class="searchform-row">
                    <div class="searchbar-inputwrap flex7">
                        <input type="text" class="form-control autocomplete" autocomplete="transfer" value="" id="trf-pickup-location" name="trf-pickup-location" placeholder="From">  
                        <input type="hidden" id="trf-pickup-location-dir" name="trf-pickup-location-dir" value="">
                        <input type="hidden" id="trf-pickup-location-type" name="trf-pickup-location-type" value="">
                        <input type="hidden" id="trf-pickup-location-code" name="trf-pickup-location-code" value="">
                    </div>

                    <div class="searchbar-inputwrap input-witharrow flex7 mobile-last-col">
                        <select class="form-control" id="trf-dropoff-location-request" name="trf-dropoff-location-request">
                            <option value="" selected="">To</option>
                        </select>
                    </div>

                    <div class="searchbar-inputwrap flex7 mobile-bordertop">
                        <input type="text" class="form-control date pickup-date" datepicker="first" id="trf-pickup-date" name="trf-pickup-date" value="" placeholder="When">
                        <div class="select_arrow"></div>
                    </div>

                    <div class="searchbar-inputwrap searchbar-select transfer-time-wrap flex7 mobile-bordertop mobile-last-col">
                        <select class="form-control" name="transfer-time" id="transfer-time">
                            <option value="" disabled selected>Time</option>
                            <?php include './sections/searchform/timeincrements-fifteen.php';?>
                        </select>
                        <div class="select_arrow"></div>
                    </div>

                    <div class="searchbar-inputwrap change-text-wrap searchbar-select flex7 infant-validation mobile-last-col mobile-bordertop flex100-mobile">
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
                                        <button type="submit" class="btn btn-primary">
                                            Apply
                                        </button>
                                    </div>
                                </div><!-- dd filter inner -->
                            </div>
                        </div>
                    </div><!-- searchabr inputwrap -->

                    <div class="searchnow-btn searchbar-inputwrap flex7 justify-content-center  mobile-bordertop flex100-mobile">
                        <a class="btn-typ2 searchnowbtn btn btn-primary" href="javascript:void(0);" title="Search Now">Search Now</a>
                    </div>
                </div><!-- searchform-row -->

                <div class="searchform-more-content return-wrapper">
                    <div class="searchform-row mt-3">
                        <div class="searchbar-inputwrap">
                            <input class="form-control date dropoff-date" name="transfer-date-return" id="transfer-date-return" value="" placeholder="When">
                            <div class="select_arrow"></div>
                        </div>
                        <div class="searchbar-inputwrap mobile-last-col">
                            <select class="form-control" name="transfer-return-time" id="transfer-return-time">
                                <option value="" disabled>Time</option>
                                <?php include './sections/searchform/timeincrements-fifteen.php';?>
                            </select>
                            <div class="select_arrow"></div>
                        </div><!-- searchbar-inputwrap -->
                        <div class="searchbar-inputwrap flex100-mobile mobile-bordertop">
                            <select class="form-control" name="transfer-vehicles" id="transfer-vehicles">
                                <option value="" disabled>Vehicles</option>
                                <option value="1" selected>1 Vehicle</option>
                                <option value="2">2 Vehicles</option>
                                <option value="3">3 Vehicles</option>
                                <option value="4">4 Vehicles</option>
                                <option value="5">5 Vehicles</option>
                            </select>                                  
                            <div class="select_arrow"></div>      
                        </div><!-- searchbar-inputwrap -->
                    </div><!-- searchform-row -->
                </div><!-- searchform content more -->
                
                <div class="searchform-more-wrap row mt-2">
                    <div class="searchform-more searchform-more-transfer d-flex col-12 col-md-3 align-items-center v-search-more">
                        <span>
                            More Options
                        </span>    
                        <i class="fa-solid fa-chevron-down ms-2"></i>
                    </div><!-- searchform-more -->
                    <div class="searchbar-checkboxes col-12 col-md-5">
                        <label for="trf-return">
                            <input checked id="trf-return" type="radio" name="trf-journey" value="return" class="trf-journey form-check-input">
                            <span class="custom-checkbox"><i class="fa-solid fa-check"></i></span>
                            Return
                        </label>
                        <label for="trf-oneway">
                            <input id="trf-oneway" type="radio" name="trf-journey" value="oneway" class="trf-journey form-check-input">
                            <span class="custom-checkbox"><i class="fa-solid fa-check"></i></span>
                            One Way
                        </label>
                    </div>
                </div><!-- searchform-more wrap -->
            </div><!-- searchform-inner -->
        </form><!-- form -->
    </div>
</div><!-- searchbar main -->