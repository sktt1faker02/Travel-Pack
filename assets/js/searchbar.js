jQuery(document).ready(function($){
    // Function to dynamically set the width of the month dropdown
    function adjustMonthWidth(inst) {
        const monthSelect = inst.dpDiv.find('.ui-datepicker-month');
        
        // Get the currently selected month's text
        const selectedMonthText = monthSelect.find('option:selected').text();

        // Create a temporary span element to calculate the width of the month text
        const tempSpan = $('<span>').text(selectedMonthText).css({
            "font-size": monthSelect.css("font-size"),
            "font-family": monthSelect.css("font-family"),
            "visibility": "hidden",
            "white-space": "nowrap"
        }).appendTo('body');
        
        // Calculate the width of the text and set the width of the select element
        const textWidth = tempSpan.width();
        monthSelect.css('width', textWidth + 10 + 'px'); // Add a little padding (10px)
        
        // Remove the temporary span after the width is calculated
        tempSpan.remove();
    }

    // Replace short month names with full month names and adjust width
    function replaceShortMonthNames(inst) {
        setTimeout(function() {
            inst.dpDiv.find('.ui-datepicker-month option').each(function() {
                var monthIndex = $(this).val(); // Get month index
                $(this).text($.datepicker._defaults.monthNames[monthIndex]); // Set full month name
            });
            adjustMonthWidth(inst); // Adjust width after setting full names
        }, 0);
    }

    // Datepicker initialization for general datepicker with 1 year max
    $(".datepicker").datepicker({
        dateFormat: "dd/mm/yy",
        changeMonth: true,
        changeYear: true,
        monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ], // Full month names
        dayNamesMin: [ "S", "M", "T", "W", "T", "F", "S" ], // First letters of the day names
        maxDate: "+1y", // Max date is 1 year from today
        showMonthAfterYear: false,
        beforeShow: function(input, inst) {
            replaceShortMonthNames(inst);
        },
        onChangeMonthYear: function(year, month, inst) {
            replaceShortMonthNames(inst);
        }
    });

    // Datepicker for today's date with minDate as 0 and max 1 year
    $(".datetoday").datepicker({
        dateFormat: 'dd/mm/yy',
        minDate: 0, 
        changeMonth: true,
        changeYear: true,
        monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ], // Full month names
        dayNamesMin: [ "S", "M", "T", "W", "T", "F", "S" ], // First letters of the day names
        maxDate: "+1y", // Max date is 1 year from today
        showMonthAfterYear: false,
        beforeShow: function(input, inst) {
            replaceShortMonthNames(inst);
        },
        onChangeMonthYear: function(year, month, inst) {
            replaceShortMonthNames(inst);
        }
    });

    // Datepicker for transfer date with min 7 days and max 1 year range
    $(".trf-date").datepicker({
        dateFormat: 'dd/mm/yy',
        minDate: 7,
        maxDate: "+1y", // Max date is 1 year from today
        changeMonth: true,
        changeYear: true,
        monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ], // Full month names
        dayNamesMin: [ "S", "M", "T", "W", "T", "F", "S" ], // First letters of the day names
        showMonthAfterYear: false,
        beforeShow: function(input, inst) {
            replaceShortMonthNames(inst);
        },
        onChangeMonthYear: function(year, month, inst) {
            replaceShortMonthNames(inst);
        }
    });

    // Pickup date with 7 days default, max 1 year, and update drop-off based on it
    const defaultPickupDate = new Date();
    defaultPickupDate.setDate(defaultPickupDate.getDate() + 7);

    $(".pickup-date").datepicker({
        dateFormat: 'dd/mm/yy',
        minDate: 7,
        maxDate: "+1y", // Max date is 1 year from today
        changeMonth: true,
        changeYear: true,
        defaultDate: defaultPickupDate,
        monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ], // Full month names
        dayNamesMin: [ "S", "M", "T", "W", "T", "F", "S" ], // First letters of the day names
        onSelect: function(selectedDate) {
            const selectedDateObject = $.datepicker.parseDate("dd/mm/yy", selectedDate);

            // Automatically set the drop-off date to be at least 7 days after pickup
            const dropOffDate = new Date(selectedDateObject);
            dropOffDate.setDate(dropOffDate.getDate() + 7);

            // Update min date for drop-off (7 days after selected pickup date)
            $(".dropoff-date").datepicker("option", "minDate", dropOffDate);

            // If the current drop-off date is before the new drop-off minimum, update it
            const currentDropOffDate = $(".dropoff-date").datepicker("getDate");
            if (currentDropOffDate < dropOffDate) {
                $(".dropoff-date").datepicker("setDate", dropOffDate);
            }

            // Ensure drop-off max date is 1 year after the pickup date
            const maxDate = new Date(selectedDateObject);
            maxDate.setDate(maxDate.getDate() + 365);
            $(".dropoff-date").datepicker("option", "maxDate", maxDate);
        },
        beforeShow: function(input, inst) {
            replaceShortMonthNames(inst);
        },
        onChangeMonthYear: function(year, month, inst) {
            replaceShortMonthNames(inst);
        }
    }).datepicker("setDate", defaultPickupDate);

    // Drop-off date with dynamic min and max dates, max 1 year
    $(".dropoff-date").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        minDate: defaultPickupDate, // Ensure this defaults to 7 days after pickup
        maxDate: "+1y", // Max date is 1 year from today
        monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ], // Full month names
        dayNamesMin: [ "S", "M", "T", "W", "T", "F", "S" ], // First letters of the day names
        beforeShow: function(input, inst) {
            replaceShortMonthNames(inst);
        },
        onChangeMonthYear: function(year, month, inst) {
            replaceShortMonthNames(inst);
        }
    });

    // Set default drop-off date to 7 days after today's date on page load
    const defaultDropoffMinDate = new Date();
    defaultDropoffMinDate.setDate(defaultDropoffMinDate.getDate() + 7);
    $(".dropoff-date").datepicker("setDate", defaultDropoffMinDate);

    const initialDate = $('.pickup-date').val();
    const appendDate = $('.dropoff-date');
    const [day, month, year] = initialDate.split('/').map(Number);
    const dateObj = new Date(year, month - 1, day);
    dateObj.setDate(dateObj.getDate() + 7);
    const newDate = `${String(dateObj.getDate()).padStart(2, '0')}/${String(dateObj.getMonth() + 1).padStart(2, '0')}/${dateObj.getFullYear()}`;
    appendDate.val(newDate);
});



// DROPDOWN FILTER ON CLICK ------------------- ||
document.addEventListener('DOMContentLoaded', function() {
    // Handle the Apply button click to remove .show on .dropdown-filter
    document.querySelectorAll('.dd-filterbtn button').forEach(button => {
        button.addEventListener('click', function() {
            const dropdownFilter = this.closest('.dropdown-filter');
            if (dropdownFilter) {
                dropdownFilter.classList.remove('show');
            }
        });
    });

    // Handle dropdown filter click to toggle .show
    document.querySelectorAll('.dropdownfilter-click').forEach((filterClick, index) => {
        const filterMain = document.querySelectorAll('.dropdown-filter')[index];

        if (filterClick && filterMain) {
            // Toggle the dropdown on click
            filterClick.addEventListener('click', function(event) {
                filterMain.classList.toggle('show');
                event.stopPropagation(); // Prevent the click from propagating to the document
            });
        }
    });

    // Close the dropdown when clicking outside of it
    document.addEventListener('click', function(event) {
        document.querySelectorAll('.dropdown-filter').forEach((dropdownFilter, index) => {
            const dropdownFilterMain = document.querySelectorAll('.dropdownfilter-main')[index];

            if (dropdownFilterMain && dropdownFilter) {
                // Check if the click is outside the dropdown filter main area
                if (!dropdownFilterMain.contains(event.target)) {
                    dropdownFilter.classList.remove('show');
                }
            }
        });
    });
});


// START HOTELS INCRemenT DECREMENT //
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('#searchbar-hotel .dd-filter-room-count').forEach(counter => {
        const decrementBtn = counter.querySelector('.decrement');
        const incrementBtn = counter.querySelector('.increment');
        const input = counter.querySelector('input');
        const roomContainer = document.querySelector('#searchbar-hotel .dd-filter-wrap'); // Container holding the rooms
        const maxRooms = 4; // Adjust this limit as needed

        const updateRoomVisibility = (count) => {
            const rooms = roomContainer.querySelectorAll('.dd-filter-rooms');
            rooms.forEach((room, index) => {
                const adultInput = room.querySelector('.dd-filter-adult-hotel input');
                if (index < count) {
                    // Ensure newly added visible room has at least 1 adult
                    if (parseInt(adultInput.value, 10) === 0) {
                        adultInput.value = '01';
                    }
                    room.style.display = 'block';
                } else {
                    // Set adults to 0 for hidden rooms
                    adultInput.value = '00';
                    room.style.display = 'none';
                }
            });
        };

        const updateButtonStates = (value) => {
            decrementBtn.classList.toggle('dd-filter-disable', value <= 1);
            incrementBtn.classList.toggle('dd-filter-disable', value >= maxRooms);
        };

        decrementBtn.addEventListener('click', () => {
            let value = parseInt(input.value, 10);
            if (value > 1) {
                value--;
                input.value = value.toString().padStart(2, '0');
                updateRoomVisibility(value);
            }
            updateButtonStates(value);
        });

        incrementBtn.addEventListener('click', () => {
            let value = parseInt(input.value, 10);
            if (value < maxRooms) {
                value++;
                input.value = value.toString().padStart(2, '0');
                updateRoomVisibility(value);
            }
            updateButtonStates(value);
        });

        // Initial state check and visibility setup
        const initialRoomCount = parseInt(input.value, 10);
        updateButtonStates(initialRoomCount);
        updateRoomVisibility(initialRoomCount);
    });

    // Handle adult count increment/decrement logic
    document.querySelectorAll('#searchbar-hotel .dd-filter-adult-hotel').forEach(adultContainer => {
        const decrementBtn = adultContainer.querySelector('.decrement');
        const incrementBtn = adultContainer.querySelector('.increment');
        const input = adultContainer.querySelector('input');

        // Determine the max adult limit based on the .dd-filter-max-* class
        let maxAdults = 10;
        const maxAdultsClass = [...adultContainer.classList].find(cls => cls.startsWith('dd-filter-max-'));
        if (maxAdultsClass) {
            const match = maxAdultsClass.match(/dd-filter-max-(\d+)/);
            if (match) {
                maxAdults = parseInt(match[1], 10);
            }
        }

        const updateButtonStates = (value) => {
            decrementBtn.classList.toggle('dd-filter-disable', value <= 1);
            incrementBtn.classList.toggle('dd-filter-disable', value >= maxAdults);
        };

        decrementBtn.addEventListener('click', () => {
            let value = parseInt(input.value, 10);
            if (value > 1) {
                value--;
                input.value = value.toString().padStart(2, '0');
            }
            updateButtonStates(value);
        });

        incrementBtn.addEventListener('click', () => {
            let value = parseInt(input.value, 10);
            if (value < maxAdults) {
                value++;
                input.value = value.toString().padStart(2, '0');
            }
            updateButtonStates(value);
        });

        // Initial state check
        const initialAdultCount = parseInt(input.value, 10);
        updateButtonStates(initialAdultCount);
    });

    // Handle child count increment/decrement logic
    document.querySelectorAll('#searchbar-hotel .dd-filter-rooms').forEach(room => {
        const childCountContainer = room.querySelector('.dd-hotelroom-child-count');
        const decrementButton = childCountContainer.querySelector('.decrement');
        const incrementButton = childCountContainer.querySelector('.increment');
        const inputField = childCountContainer.querySelector('.childrencount');

        // Determine the max children limit based on the .dd-filter-max-* class
        let maxChildren = 6;
        const maxChildrenClass = [...childCountContainer.classList].find(cls => cls.startsWith('dd-filter-max-'));
        if (maxChildrenClass) {
            const match = maxChildrenClass.match(/dd-filter-max-(\d+)/);
            if (match) {
                maxChildren = parseInt(match[1], 10);
            }
        }

        const updateChildrenVisibility = (childrenCount) => {
            const childAgeSelectors = room.querySelectorAll('.dd-filter-child-age');
            childAgeSelectors.forEach((selector, index) => {
                selector.style.display = index < childrenCount ? 'block' : 'none';
            });
        };

        const updateButtonStates = (value) => {
            decrementButton.classList.toggle('dd-filter-disable', value <= 0);
            incrementButton.classList.toggle('dd-filter-disable', value >= maxChildren);
        };

        decrementButton.addEventListener('click', () => {
            let currentValue = parseInt(inputField.value, 10);
            if (currentValue > 0) {
                currentValue--;
                inputField.value = currentValue.toString().padStart(2, '0');
                updateChildrenVisibility(currentValue);
                updateButtonStates(currentValue);
            }
        });

        incrementButton.addEventListener('click', () => {
            let currentValue = parseInt(inputField.value, 10);
            if (currentValue < maxChildren) {
                currentValue++;
                inputField.value = currentValue.toString().padStart(2, '0');
                updateChildrenVisibility(currentValue);
                updateButtonStates(currentValue);
            }
        });

        // Initialize the correct visibility of child age selectors on page load
        const initialChildCount = parseInt(inputField.value, 10);
        updateButtonStates(initialChildCount);
        updateChildrenVisibility(initialChildCount);
    });
});


// CHANGE TEXT HOTEL DROPDOWN TEXT
document.addEventListener('DOMContentLoaded', function() {
    const updatePlaceholderText = () => {
        const travellersInputs = document.querySelectorAll('#searchbar-hotel .hotel-travellers input');
        const roomsInput = document.querySelector('#searchbar-hotel .dd-filter-room-count input');
        const placeholderElement = document.querySelector('.hotel-text-change');

        // Calculate total travellers
        let totalTravellers = 0;
        travellersInputs.forEach(input => {
            totalTravellers += parseInt(input.value, 10);
        });

        if (roomsInput && placeholderElement) {
            const roomsCount = parseInt(roomsInput.value, 10);

            const travellersText = totalTravellers === 1 ? '1 traveller' : `${totalTravellers} travellers`;
            const roomsText = roomsCount === 1 ? '1 room' : `${roomsCount} rooms`;

            placeholderElement.placeholder = `${travellersText}, ${roomsText}`;
        }
    };

    // Initial update on page load
    updatePlaceholderText();

    // Add event listeners to update on increment/decrement click
    document.querySelectorAll('#searchbar-hotel .decrement, #searchbar-hotel .increment').forEach(button => {
        button.addEventListener('click', updatePlaceholderText);
    });
});


// Validation for Children to have adult companions
document.addEventListener('DOMContentLoaded', function() {
    const validateAdults = () => {
        const childCountInput = document.querySelector('#searchbar-hotel .dd-hotelroom-child-count input');
        const adultCountInput = document.querySelector('#searchbar-hotel .hotel-travellers input');
        const travellersContainer = document.querySelector('#searchbar-hotel .hotel-travellers');

        if (childCountInput && adultCountInput && travellersContainer) {
            const childCount = parseInt(childCountInput.value, 10);
            const adultCount = parseInt(adultCountInput.value, 10);

            // Remove existing tooltip if present
            let existingTooltip = document.querySelector('.tooltip-validation');
            if (existingTooltip) {
                existingTooltip.remove();
            }

            // Check validation
            if (childCount > 0 && adultCount < 1) {
                // Add a tooltip at the top of the travellers container
                const tooltip = document.createElement('div');
                tooltip.className = 'tooltip-validation';
                tooltip.textContent = 'At least 1 adult is required when adding children.';
                tooltip.style.color = 'red';
                tooltip.style.position = 'absolute';
                tooltip.style.top = '-20px'; // Position it above the container
                tooltip.style.left = '0';
                travellersContainer.insertBefore(tooltip, travellersContainer.firstChild);
            }
        }
    };

    // Initial validation on page load
    validateAdults();

    // Add event listeners to validate on increment/decrement click
    document.querySelectorAll('#searchbar-hotel .decrement, #searchbar-hotel .increment').forEach(button => {
        button.addEventListener('click', validateAdults);
    });
});

// END HOTEL INCREMENT DECREMENT

document.addEventListener('DOMContentLoaded', function() {
    // INFANT VALIDATION
    const updateInfantValidation = () => {
        const adultInput = document.querySelector('.infant-validation .dropdown-filter-adults-count input');
        const infantInput = document.querySelector('.infant-validation .dropdown-filter-infants-count input');
        const infantIncrementBtn = document.querySelector('.infant-validation .dropdown-filter-infants-count .increment');
        const infantDecrementBtn = document.querySelector('.infant-validation .dropdown-filter-infants-count .decrement');

        // Proceed only if all elements exist
        if (adultInput && infantInput && infantIncrementBtn && infantDecrementBtn) {
            let adultCount = parseInt(adultInput.value, 10);
            let infantCount = parseInt(infantInput.value, 10);

            // Ensure infants do not exceed adults
            if (infantCount > adultCount) {
                infantInput.value = adultCount.toString().padStart(2, '0');
                infantCount = adultCount;
            }

            // Update button states
            infantIncrementBtn.classList.toggle('dd-filter-disable', infantCount >= adultCount);
            infantDecrementBtn.classList.toggle('dd-filter-disable', infantCount <= 0);
        }
    };

    // INCREMENT DECREMENT WHICH IS NOT HOTEL SEARCHBAR
    const incrementDecrementElements = document.querySelectorAll('[class*="dd-filter-max-"]');

    if (incrementDecrementElements.length > 0) {
        incrementDecrementElements.forEach(element => {
            // Ensure the element is not under .searchbar-main#searchbar-hotel
            if (!element.closest('.searchbar-main#searchbar-hotel')) {
                let maxLimit = 99; // Default max limit
                const maxLimitClass = [...element.classList].find(cls => cls.startsWith('dd-filter-max-'));
                if (maxLimitClass) {
                    const match = maxLimitClass.match(/dd-filter-max-(\d+)/);
                    if (match) {
                        maxLimit = parseInt(match[1], 10);
                    }
                }

                const decrementBtn = element.querySelector('.decrement');
                const incrementBtn = element.querySelector('.increment');
                const input = element.querySelector('input');

                if (decrementBtn && incrementBtn && input) {
                    const updateButtonStates = (value) => {
                        decrementBtn.classList.toggle('dd-filter-disable', value <= 0);
                        incrementBtn.classList.toggle('dd-filter-disable', value >= maxLimit);
                    };

                    decrementBtn.addEventListener('click', () => {
                        let value = parseInt(input.value, 10);
                        if (value > 0) {
                            value--;
                            input.value = value.toString().padStart(2, '0');
                        }
                        updateButtonStates(value);

                        // Run infant validation after the value has been updated
                        if (element.closest('.infant-validation')) {
                            updateInfantValidation();
                        }
                    });

                    incrementBtn.addEventListener('click', () => {
                        let value = parseInt(input.value, 10);
                        if (value < maxLimit) {
                            value++;
                            input.value = value.toString().padStart(2, '0');
                        }
                        updateButtonStates(value);

                        // Run infant validation after the value has been updated
                        if (element.closest('.infant-validation')) {
                            updateInfantValidation();
                        }
                    });

                    // Initial state check
                    const initialValue = parseInt(input.value, 10);
                    updateButtonStates(initialValue);
                }
            }
        });
    }

    // Initial validation (only if the elements for infant validation are available)
    if (document.querySelector('.infant-validation')) {
        updateInfantValidation();
    }
});

// SEARCH MORE / MORE OPTION ON CLICK SHOW
// document.addEventListener('DOMContentLoaded', function() {
//     // Get the .searchform-more element
//     var searchFormMore = document.querySelector('.searchform-more');
    
//     // Add click event listener
//     searchFormMore.addEventListener('click', function() {
//         // Get the .searchform-more-content element
//         var searchFormMoreContent = document.querySelector('.searchform-more-content');
        
//         // Get the <i> element inside .searchform-more
//         var searchFormMoreIcon = searchFormMore.querySelector('i');
        
//         // Toggle the 'show' class on the .searchform-more-content element
//         searchFormMoreContent.classList.toggle('show');
        
//         // Toggle the 'rotate' class on the <i> element
//         searchFormMoreIcon.classList.toggle('rotate');
//     });
// });


// CRUISES + RAIL + TRANSFER + FLIGHTS DROPDOWN CHANGE TEXT
document.addEventListener('DOMContentLoaded', function() {
    const changeTextWraps = document.querySelectorAll('.change-text-wrap');

    changeTextWraps.forEach(wrapper => {
        const inputField = wrapper.querySelector('.input-change-text');
        const cabinClassDropdown = document.querySelector('.dropdown-filter-cabin-class');

        if (!inputField) return;

        // Function to calculate total travelers and cabins
        const updatePlaceholder = () => {
            let totalTravelers = 0;
            let totalCabins = 0;
            const travelerInputs = wrapper.querySelectorAll('.dropdown-filter-travellers-count input[type="text"]');
            const cabinInput = wrapper.querySelector('.dropdown-filter-cabin-count input[type="text"]');

            travelerInputs.forEach(input => {
                totalTravelers += parseInt(input.value, 10);
            });

            // Determine the label based on the class of inputField
            const travelerLabel = inputField.classList.contains('input-change-text-passengers') ? 'Passenger' : 'Traveller';
            const travelerText = totalTravelers === 1 ? travelerLabel : travelerLabel + 's';

            if (cabinInput) {
                totalCabins = parseInt(cabinInput.value, 10);
                const cabinText = totalCabins === 1 ? 'Cabin' : 'Cabins';
                inputField.placeholder = `${totalTravelers} ${travelerText}, ${totalCabins} ${cabinText}`;
            } else {
                inputField.placeholder = `${totalTravelers} ${travelerText}`;
            }

            // Add additional text from the dropdown if it exists
            if (cabinClassDropdown) {
                const selectedOption = cabinClassDropdown.options[cabinClassDropdown.selectedIndex];
                const selectedText = selectedOption.textContent.trim();
                inputField.placeholder += ` - ${selectedText}`;
            }
        };

        // Initial update on page load
        updatePlaceholder();

        // Update placeholder when any of the inputs change
        const inputs = wrapper.querySelectorAll('.dd-filter input[type="text"]');
        inputs.forEach(input => {
            input.addEventListener('change', updatePlaceholder);
        });

        // Also update when increment/decrement buttons are clicked
        const buttons = wrapper.querySelectorAll('.dd-filter .increment, .dd-filter .decrement');
        buttons.forEach(button => {
            button.addEventListener('click', updatePlaceholder);
        });

        // Update placeholder when the dropdown selection changes
        if (cabinClassDropdown) {
            cabinClassDropdown.addEventListener('change', updatePlaceholder);
        }
    });
});

// TRANSFER CHECBOX
document.addEventListener('DOMContentLoaded', function() {
    // Get the radio buttons
    const oneWayRadio = document.getElementById('rail-oneway');
    const returnRadio = document.getElementById('rail-return');
    
    // Get the elements to show/hide or toggle class
    const searchformMoreRail = document.querySelector('.searchform-more-rail');
    const searchformMoreContent = document.querySelector('.searchform-more-content');

    // Check if the radio buttons are present, if not, skip further logic
    if (!oneWayRadio || !returnRadio) {
        // Skip logic if radio buttons are not found
        return;
    }

    // Function to toggle the visibility and classes
    function toggleSearchformMoreRail() {
        if (oneWayRadio.checked) {
            if (searchformMoreRail) {
                searchformMoreRail.classList.add('d-none'); // Hide the .searchform-more-rail using d-none class
            }
            if (searchformMoreContent) {
                searchformMoreContent.classList.remove('show'); // Remove .show class from .searchform-more-content
            }
        } else if (returnRadio.checked) {
            if (searchformMoreRail) {
                searchformMoreRail.classList.remove('d-none'); // Show the .searchform-more-rail by removing d-none class
            }
        }
    }

    // Add event listeners to the radio buttons
    oneWayRadio.addEventListener('change', toggleSearchformMoreRail);
    returnRadio.addEventListener('change', toggleSearchformMoreRail);

    // Initial check on page load to set the correct state
    toggleSearchformMoreRail();
});

// TRAINS RAILS SEARCHFORM MORE
document.addEventListener('DOMContentLoaded', function() {
    // Get the radio buttons
    const oneWayRadio = document.getElementById('rail-oneway');
    const returnRadio = document.getElementById('rail-return');
    
    // Get the elements to show/hide or toggle class
    const searchformMoreRail = document.querySelector('.searchform-more-rail');
    const searchformMoreContent = document.querySelector('.searchform-more-content');

    // Check if the radio buttons are present, if not, skip further logic
    if (!oneWayRadio || !returnRadio) {
        // Skip logic if radio buttons are not found
        return;
    }

    // Function to toggle the visibility and classes
    function toggleSearchformMoreRail() {
        if (oneWayRadio.checked) {
            if (searchformMoreRail) {
                searchformMoreRail.classList.add('d-none'); // Hide the .searchform-more-rail using d-none class
            }
            if (searchformMoreContent) {
                searchformMoreContent.classList.remove('show'); // Remove .show class from .searchform-more-content
            }
        } else if (returnRadio.checked) {
            if (searchformMoreRail) {
                searchformMoreRail.classList.remove('d-none'); // Show the .searchform-more-rail by removing d-none class
            }
            // Optionally, you can add the .show class back to .searchform-more-content if needed
        }
    }

    // Add event listeners to the radio buttons
    oneWayRadio.addEventListener('change', toggleSearchformMoreRail);
    returnRadio.addEventListener('change', toggleSearchformMoreRail);

    // Initial check on page load to set the correct state
    toggleSearchformMoreRail();
});







