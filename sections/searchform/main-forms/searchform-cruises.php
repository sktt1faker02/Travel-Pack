
<div class="searchbar-main" id="searchbar-cruises">
    <div class="searchbar-main-inner">
        <form name="experiences-search" id="cruises-search" method="post" action="">
            <div class="searchform-inner">
                <div class="searchform-row">
                    <div class="searchbar-inputwrap flex100-mobile mobile-last-col">
                        <input type="text" class="form-control" autocomplete="cruise" name="cru-request" id="cruises-where" placeholder="Cruise, Destination...">
                    </div>
                    <div class="searchbar-inputwrap flex7 flex100-mobile mobile-last-col mobile-bordertop">
                        <input type="text" class="form-control date cruises-date-picker" name="cru-from-date" id="cruises-when" placeholder="Departure">
                        <div class="select_arrow"></div>
                    </div>

                    <div class="searchbar-inputwrap change-text-wrap searchbar-select flex7 flex100-mobile mobile-last-col mobile-bordertop">
                        <input class="form-control dropdownfilter-click input-change-text" placeholder="Guests and Rooms" readonly>
                        <div class="select_arrow"></div>
                        <div class="dropdownfilter-main dropdown-filter-cruises">
                            <div class="dropdown-filter dd-filter-max-99 dropdown-filter-cabin-count">
                                <div class="dd-filter-inner">
                                    <div class="dd-filter-wrap">
                                        <div class="dd-filter">
                                            <div class="dd-filter-left">
                                                <label>
                                                    Cabins
                                                </label>
                                            </div>
                                            <div class="dd-filter-right">
                                                <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                <input type="text" value="01" readonly>
                                                <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                            </div>
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
                                                <input type="text" value="02" readonly>
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

                    <div class="searchnow-btn searchbar-inputwrap flex6 flex100-mobile mobile-bordertop">
                        <a class="btn-typ2 searchnowbtn btn btn-primary" href="javascript:void(0);" title="Search Now">Search Now</a>
                    </div>
                </div><!-- searchform-row -->
            </div><!-- searchform-inner -->
        </form><!-- form -->
    </div>
</div><!-- searchbar main -->