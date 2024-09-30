// Function to handle journey type changes and corresponding UI updates
var radioOneway = document.getElementById('radio-oneway');
var radioReturn = document.getElementById('radio-return');
var radioOpenjaw = document.getElementById('radio-openjaw');
var radioMulti = document.getElementById('radio-multi');
var searchformMore = document.querySelector('.searchform-more');
var searchformMoreIcon = searchformMore.querySelector('i');
var smcOpenjaw = document.querySelector('.smc-openjaw');
var flightReturnMain = document.querySelector('.flight-return-main');
var flightDepartMain = document.querySelector('.flight-depart-main');
var smcOpenjawRow = document.querySelector('.smc-openjaw-row');
var smcMulticity = document.querySelector('.smc-multicity');
var smcReturn = document.querySelector('.smc-return'); // Reference for smc-return
var flightDepartureTime = document.querySelector('.flight-departure-time'); // Reference to .flight-departure-time
function checkJourneyType() {
    // Handle .flight-return-main visibility based on the radio buttons
    if (radioOneway.checked) {
        flightReturnMain.style.display = 'none'; // Hide .flight-return-main if oneway is checked
        smcReturn.classList.remove('show'); // Remove .show from .smc-return if oneway is checked
    } else {
        flightReturnMain.style.display = ''; // Show .flight-return-main for other options
    }
    // Hide .flight-departure-time when Open Jaw, Multi-City, or Return is selected
    if (radioOpenjaw.checked || radioMulti.checked || radioReturn.checked) {
        flightDepartureTime.style.display = 'none'; // Hide .flight-departure-time
    } else {
        flightDepartureTime.style.display = ''; // Show .flight-departure-time if not Open Jaw, Multi-City, or Return
    }
    // Toggle .show class based on the checked radio button
    if (radioOneway.checked) {
        searchformMore.classList.remove('show');
        searchformMoreIcon.classList.remove('rotate');
        flightDepartMain.classList.remove('flex100-mobile', 'mobile-last-col');
        smcReturn.classList.remove('show'); // Remove .show from .smc-return if oneway is checked
    } else if (radioReturn.checked) {
        smcReturn.classList.add('show'); // Add .show to .smc-return when return is checked
        searchformMoreIcon.classList.add('rotate'); // Add .rotate to the icon when return is checked
        searchformMore.classList.add('show'); // Show the search form more
        flightDepartMain.classList.remove('flex100-mobile', 'mobile-last-col');
    } else {
        searchformMore.classList.add('show');
    }
    if (radioOpenjaw.checked) {
        smcOpenjaw.classList.add('show');
        smcOpenjawRow.appendChild(flightReturnMain);
        searchformMoreIcon.classList.add('rotate');
        flightDepartMain.classList.add('flex100-mobile', 'mobile-last-col'); // Add classes when openjaw is checked
        // Remove .show from .smc-return if Open Jaw is selected
        smcReturn.classList.remove('show');
        // Move .flights-faretype inside .smc-openjaw-row on mobile (max-width: 991px)
        if (window.innerWidth <= 991 && flightsFaretype) {
            smcOpenjawRow.appendChild(flightsFaretype);
        }
    } else {
        smcOpenjaw.classList.remove('show');
        flightDepartMain.parentNode.insertBefore(flightReturnMain, flightDepartMain.nextSibling);
    }
    if (radioMulti.checked) {
        smcMulticity.classList.add('show');
        smcOpenjaw.classList.remove('show');
        flightReturnMain.style.display = 'none'; // Hide .flight-return-main
        searchformMoreIcon.classList.add('rotate');
        flightDepartMain.classList.add('flex100-mobile', 'mobile-last-col'); // Add classes when multi is checked
        smcReturn.classList.remove('show'); // Remove .show from .smc-return if multicity is checked
    } else {
        smcMulticity.classList.remove('show');
        if (!radioOneway.checked) {
            flightReturnMain.style.display = ''; // Show .flight-return-main by resetting the display property
        }
    }
    // Remove .hide-first from .smc-return and .searchform-more if certain conditions are met
    if (radioMulti.checked || radioOpenjaw.checked || radioOneway.checked) {
        smcReturn.classList.remove('hide-first');
        searchformMore.classList.remove('hide-first');
    }
}
searchformMore.addEventListener('click', function() {
    const searchFormContents = document.querySelectorAll('.searchform-more-content');
    const radioButtons = document.querySelector('input[name="flt-journey"]:checked');
    console.log(radioButtons.value);
    switch (radioButtons.value) {
        case 'R':
            if(smcReturn.classList.contains('hide-first')){
                smcReturn.classList.remove('hide-first');
            }else{
                smcReturn.classList.toggle('show');
            }
            break;
        case 'O':
            searchFormContents.forEach(el =>{
                el.classList.remove('show');
            });
            break;
        case 'J':
            smcOpenjaw.classList.toggle('show');
            break;
        case 'M':
            smcMulticity.classList.toggle('show');
            break;
    }
});
// Call checkJourneyType initially to set up event listeners and initial states
checkJourneyType();
// Add event listeners to radio buttons
var radioButtons = document.querySelectorAll('.searchbar-checkboxes input[name="flt-journey"]');
radioButtons.forEach(function(radio) {
    radio.addEventListener('change', checkJourneyType);
});


    
    $(document).ready(function() {
        // Initialize datepickers with default options
        $("#flt-departure-date-1, #flt-departure-date-2, #flt-departure-date-3, #flt-departure-date-4, #flt-departure-date-5, #flt-departure-date-6").datepicker({
            dateFormat: 'mm/dd/yy',
        });
    
        // Set up date constraints for the inputs
        $("#flt-departure-date-1").on("change", function() {
            var selectedDate = $(this).datepicker("getDate");
            if (selectedDate) {
                selectedDate.setDate(selectedDate.getDate() + 1); // Add one day
                $("#flt-departure-date-2").datepicker("option", "minDate", selectedDate);
            }
        });
    
        $("#flt-departure-date-2").on("change", function() {
            var selectedDate = $(this).datepicker("getDate");
            if (selectedDate) {
                selectedDate.setDate(selectedDate.getDate() + 1); // Add one day
                $("#flt-departure-date-3").datepicker("option", "minDate", selectedDate);
            }
        });
    
        $("#flt-departure-date-3").on("change", function() {
            var selectedDate = $(this).datepicker("getDate");
            if (selectedDate) {
                selectedDate.setDate(selectedDate.getDate() + 1); // Add one day
                $("#flt-departure-date-4").datepicker("option", "minDate", selectedDate);
            }
        });
    
        $("#flt-departure-date-4").on("change", function() {
            var selectedDate = $(this).datepicker("getDate");
            if (selectedDate) {
                selectedDate.setDate(selectedDate.getDate() + 1); // Add one day
                $("#flt-departure-date-5").datepicker("option", "minDate", selectedDate);
            }
        });
    
        $("#flt-departure-date-5").on("change", function() {
            var selectedDate = $(this).datepicker("getDate");
            if (selectedDate) {
                selectedDate.setDate(selectedDate.getDate() + 1); // Add one day
                $("#flt-departure-date-6").datepicker("option", "minDate", selectedDate);
            }
        });
    });

    