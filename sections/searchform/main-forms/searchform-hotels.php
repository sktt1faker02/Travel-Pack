
<div class="searchbar-main" id="searchbar-hotel">
    <div class="searchbar-main-inner">
        <form class="frm-typ2" name="frmHotelSearch" id="frmHotelSearch" method="post" action="">
            <div class="searchform-inner">
                <div class="searchform-row">
                    <div class="searchbar-inputwrap mobile-order-1" style="flex: 2 !important;">
                        <input type="text" class="form-control autocomplete" autocomplete="location" id="hot-location" name="hot-location" value="" placeholder="Location" required="">
                        <div class="invalid-feedback">Please enter a valid location</div>
                        <input type="hidden" id="hot-location-code" name="hot-location-code" value="">
                    </div>
                    <div class="searchbar-inputwrap input-witharrow hotels-checkin-wrap mobile-bordertop">
                        <input class="form-control date pickup-date" name="hot-checkin" id="hotels-checkin" value="" placeholder="Check-in">
                        <div class="select_arrow"></div>
                    </div>
                    <div class="searchbar-inputwrap input-witharrow hotels-checkout-wrap mobile-bordertop mobile-last-col">
                        <input id="hotels-checkout" class="form-control date dropoff-date" name="hot-checkout" placeholder="Check-out" size="10" value="" readonly="readonly">
                        <div class="select_arrow"></div>
                    </div>
                    <div class="searchbar-inputwrap searchbar-select hotels-rating-wrap mobile-order-2 mobile-last-col">
                        <select class="form-control" name="hot-rating">
                            <option value="" selected disabled="">Ratings</option>
                            <option value="1">1 Star+</option>
                            <option value="2">2 Star+</option>
                            <option value="3">3 Star+</option>
                            <option value="4">4 Star+</option>
                            <option value="5">5 Star</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                    <div class="searchbar-inputwrap searchbar-select flex100-mobile mobile-bordertop mobile-last-col" style="flex: 2 !important;">
                        <input class="form-control dropdownfilter-click hotel-text-change" placeholder="Travellers and Rooms" readonly>
                        <div class="select_arrow"></div>
                        <div class="dropdownfilter-main dropdown-filter-hotels">
                            <div class="dropdown-filter">
                                <div class="dd-filter-inner">
                                    <div class="dd-filter-wrap">
                                        <div class="dd-filter dd-filter-border dd-filter-room-count dd-filter-max-4">
                                            <div class="dd-filter-left">
                                                <label>
                                                    Rooms
                                                </label>
                                            </div>
                                            <div class="dd-filter-right">
                                                <button type="button" class="decrement"><i class="fa-solid fa-minus"></i></button>
                                                <input type="text" value="01" readonly>
                                                <button type="button" class="increment"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div><!-- dd-filter -->

                                        <?php include './sections/searchform/hotel-rooms-1.php';?>
                                        <?php include './sections/searchform/hotel-rooms-2.php';?>
                                        <?php include './sections/searchform/hotel-rooms-3.php';?>
                                        <?php include './sections/searchform/hotel-rooms-4.php';?>

                                    </div><!-- dd filter wrap -->
                                    <div class="dd-filtertext">
                                        <p>
                                            Your age at time of travel must be valid for the age category booked.
                                        </p>
                                        <p>
                                            Age limits and policies for travelling with children may vary so please check before booking.
                                        </p>
                                    </div><!-- fitertext -->
                                </div><!-- dd filter inner -->
                                <div class="dd-filterbtn">
                                    <button class="btn btn-primary">
                                        Apply
                                    </button>
                                </div>
                            </div><!-- dropdown-filter -->
                        </div>
                    </div>
                    <div class="searchnow-btn searchbar-inputwrap flex100-mobile mobile-bordertop">
                        <a class="frmFlightSearch btn-typ2 searchnowbtn submitForm btn btn-primary" href="javascript:void(0);" title="Search Now">Search Now</a>
                    </div>
                </div>
            </div>
        </form><!-- form -->
    </div>
</div>