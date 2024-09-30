
// GO BACK PAGE
function goBack() {
    window.history.back();
}

// THE POP UP
document.addEventListener('DOMContentLoaded', function() {
    // Get the elements
    const popup = document.querySelector('.thepopup');
    const bottomPopupButton = document.querySelector('.bottompopup');
    const closePopupButton = document.querySelector('.thepopup-close');
    
    // Ensure the popup element exists before trying to manipulate it
    if (popup) {
        // Initially hide the popup
        popup.style.display = 'none';

        // Toggle the popup visibility when .bottompopup is clicked
        if (bottomPopupButton) {
            bottomPopupButton.addEventListener('click', function() {
                if (popup.style.display === 'none' || popup.style.display === '') {
                    popup.style.display = 'block'; // Show popup
                } else {
                    popup.style.display = 'none';  // Hide popup
                }
            });
        }

        // Hide the popup when .thepopup-close is clicked
        if (closePopupButton) {
            closePopupButton.addEventListener('click', function() {
                popup.style.display = 'none';
            });
        }
    }
});

// FAQS DROPDOWN TOGGLE
document.addEventListener("DOMContentLoaded", function() {
    const faqTops = document.querySelectorAll('.faqs-box-top');
  
    faqTops.forEach(function(faqTop) {
      faqTop.addEventListener('click', function() {
        this.closest('.faqs-box').classList.toggle('showfaqs');
      });
    });
  });

// CTA TRAVEL DATES
$(document).ready(function() {
    // Check if the #traveldates element exists
    if ($('#traveldates').length) {
        // Get today's date
        var today = moment();
        // Calculate the end date as 7 days from today
        var endDate = moment().add(7, 'days');
        // Set the maximum date as 1 year from today
        var maxDate = moment().add(1, 'year');

        $('#traveldates').daterangepicker({
            locale: {
                format: 'DD/MM/YYYY', // Set the date format to match your placeholder
                monthNames: [
                    "January", "February", "March", "April", "May", "June", 
                    "July", "August", "September", "October", "November", "December"
                ], // Full month names
                daysOfWeek: ["S", "M", "T", "W", "T", "F", "S"] // Show only the first letter of each weekday
            },
            opens: 'left', // Position where the calendar opens (left, right, center, etc.)
            startDate: today, // Set today's date as the start date
            endDate: endDate, // Default to 7 days after start date
            minDate: today, // Minimum selectable date is today
            maxDate: maxDate // Max date is 1 year from today
        });

        // Use setTimeout to wait for the daterangepicker to be initialized
        setTimeout(function() {
            $('.daterangepicker').attr('id', 'cta-datepicker'); // Assign custom ID
        }, 500); // Adjust the timeout delay if necessary
    }
});


/* FORM NO RELOAD ON CLICK */
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.noreload');
    
    // Check if the form exists on the page before proceeding
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from reloading the page
            
            const formData = new FormData(form);

            fetch('your-processing-url.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json()) // Assuming server returns JSON
            .then(data => {
                // Handle the response here
                document.getElementById('response').innerHTML = 'Form submitted successfully!';
            })
            .catch(error => {
                // Handle error here
                document.getElementById('response').innerHTML = 'Error submitting form!';
                console.error('Error:', error);
            });
        });
    }
});


// HERO FADE IN
document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".heroslider .heroslide");
    slides.forEach((slide, index) => {
        const delay = index === 0 ? 1500 : 3000 * index;
        setTimeout(() => {
            slide.classList.add('fade-in');
        }, delay);
    });
});

// HOME SCRIPT
function toggleHamburger(x) {
    x.classList.toggle("change");
    document.getElementById("bottommenu").classList.toggle("show");

    var header = document.querySelector('.headerrowtop');
    header.classList.toggle('noborderradius-onclick');

    // Check if #bottommenu2 has the 'show' class and remove it if present
    var bottomMenu2 = document.getElementById("bottommenu2");
    if (bottomMenu2.classList.contains("show")) {
        bottomMenu2.classList.remove("show");
    }

    // Remove the 'open' class from all elements with the 'underlinestate' class
    var underlineStateElements = document.querySelectorAll('.underlinestate');
    underlineStateElements.forEach(function(element) {
        if (element.classList.contains("open")) {
            element.classList.remove("open");
        }
    });

    // Remove the 'show' class from .translatesubmenu
    var translatesubmenu = document.querySelector('.translatesubmenu');
    if (translatesubmenu && translatesubmenu.classList.contains("show")) {
        translatesubmenu.classList.remove("show");
    }

    // Remove the 'show' class from .underlinestate2
    var underlinestate2 = document.querySelector('.underlinestate2');
    if (underlinestate2 && underlinestate2.classList.contains("show")) {
        underlinestate2.classList.remove("show");
    }
}

// HELP CENTRE DROPDOWN
document.addEventListener('DOMContentLoaded', function() {
    // Select the elements
    const underlinestate1 = document.querySelector('.underlinestate1');
    const bottommenu2 = document.querySelector('#bottommenu2');
    const bottommenu = document.querySelector('#bottommenu'); // Select #bottommenu element
    const hamburger = document.querySelector('.hamburger'); // Select the hamburger element

    // Add click event listener to .underlinestate1
    underlinestate1.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default behavior if it's a link or button

        // Add the .open class to .underlinestate1
        underlinestate1.classList.add('open');

        // Add the .show class to #bottommenu2
        bottommenu2.classList.add('show');

        // Remove the .show class from #bottommenu
        bottommenu.classList.remove('show');

        // Remove the .change class from .hamburger
        hamburger.classList.remove('change');
    });
});




// CC EXPIRY DATE
function formatExpiryDate() {
    var input = document.getElementById('expiry-date');
    var value = input.value.replace(/\D/g, ''); // Remove all non-digit characters

    if (value.length >= 2) {
        value = value.substring(0, 2) + '/' + value.substring(2, 4);
    }

    input.value = value;

    if (value.length === 5) {
        validateExpiryDate(value);
    }
}

function validateExpiryDate(value) {
    var parts = value.split('/');
    if (parts.length === 2) {
        var month = parseInt(parts[0], 10);
        var year = parseInt(parts[1], 10);

        var currentYear = new Date().getFullYear() % 100; // Get the last two digits of the current year
        var maxYear = currentYear + 20;

        if (isNaN(month) || month < 1 || month > 12) {
            alert('Invalid month. Please enter a value between 01 and 12.');
            document.getElementById('expiry-date').value = ''; // Clear invalid input
            return;
        }

        if (isNaN(year) || year < currentYear || year > maxYear) {
            alert('Invalid year. Please enter a year between ' + String(currentYear).padStart(2, '0') + ' and ' + String(maxYear).padStart(2, '0') + '.');
            document.getElementById('expiry-date').value = ''; // Clear invalid input
            return;
        }
    }
}

// on click dropdown filter scroll
document.addEventListener('DOMContentLoaded', function() {
    const dropdownFilterLinks = document.querySelectorAll('.dropdownfilter-click');
    
    dropdownFilterLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior

            // Check if the screen width is below 1200px
            if (window.innerWidth < 1500) {
                const elementPosition = this.getBoundingClientRect().top + window.scrollY - 20;

                // Scroll to the element's position minus 50px
                window.scrollTo({
                    top: elementPosition,
                    behavior: 'smooth' // Smooth scrolling
                });
            }
        });
    });
});

// CVV VALIDATE
function validateCVV() {
    var input = document.getElementById('cvv');
    var value = input.value;

    // Remove all non-digit characters
    value = value.replace(/\D/g, '');
    input.value = value;

    // Validate CVV length (usually 3 or 4 digits)
    if (value.length > 4) {
        alert('Invalid CVV. Please enter a valid CVV.');
        input.value = ''; // Clear invalid input
    }
}

// CARD NUMBER 
function formatCardNumber() {
    var input = document.getElementById('card-number');
    var value = input.value.replace(/\D/g, ''); // Remove all non-digit characters

    // Group digits into sets of four
    var formattedValue = '';
    for (var i = 0; i < value.length; i++) {
        if (i > 0 && i % 4 === 0) {
            formattedValue += ' ';
        }
        formattedValue += value[i];
    }

    input.value = formattedValue;
}

function validateCardNumber() {
    var input = document.getElementById('card-number');
    var value = input.value.replace(/\s/g, ''); // Remove spaces for validation

    // Validate length (typically 16 digits for most card types)
    if (value.length !== 16) {
        alert('Invalid card number. Please enter a valid 16-digit card number.');
        input.value = ''; // Clear invalid input
        return;
    }

    // You can add more validation logic here (e.g., Luhn algorithm) if needed
}

// Hurry COUNTER 
var countDownDate = new Date("November 1, 2024 23:59:59").getTime();

var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    var daysElement = document.getElementById("days");
    var hoursElement = document.getElementById("hours");
    var minutesElement = document.getElementById("minutes");
    var secondsElement = document.getElementById("seconds");
    var countdownElement = document.getElementById("countdown");

    if (daysElement && hoursElement && minutesElement && secondsElement && countdownElement) {
        daysElement.innerHTML = days;
        hoursElement.innerHTML = ("0" + hours).slice(-2);
        minutesElement.innerHTML = ("0" + minutes).slice(-2);
        secondsElement.innerHTML = ("0" + seconds).slice(-2);

        if (distance < 0) {
            clearInterval(x);
            countdownElement.innerHTML = "EXPIRED";
        }
    } else {
        clearInterval(x);
    }
}, 1000);


/* HEADER TRANSLATE LANGUAGE */
document.addEventListener('DOMContentLoaded', function() {
    // Select all the language options within the translatesubmenu
    const languageLinks = document.querySelectorAll('.translatesubmenu li a');
    // Select the element that displays the current language
    const headerLanguage = document.querySelector('.header-language');
    // Select the elements for underlinestate2 and underlinestate1
    const underlinestate2 = document.querySelector('.underlinestate2');
    const underlinestate1 = document.querySelector('.underlinestate1');
    // Select the underlinestate2-link and translatesubmenu elements
    const underlinestate2Link = document.querySelector('.underlinestate2-link');
    const translatesubmenu = document.querySelector('.translatesubmenu');
    // Select the #bottommenu, #bottommenu2, and .hamburger elements
    const bottommenu = document.getElementById('bottommenu');
    const bottommenu2 = document.getElementById('bottommenu2');
    const hamburger = document.querySelector('.hamburger');

    // Add click event listener to each language link
    languageLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            const selectedLanguage = this.textContent; // Get the text of the clicked link
            headerLanguage.textContent = selectedLanguage; // Update the .header-language text
            
            // Remove the .open class from .underlinestate2
            underlinestate2.classList.remove('open');

            // Remove the .show class from .translatesubmenu
            translatesubmenu.classList.remove('show');
        });
    });

    // Add click event listener to the underlinestate2-link to toggle the translatesubmenu
    underlinestate2Link.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior

        // Toggle the .show class on .translatesubmenu
        translatesubmenu.classList.toggle('show');

        // Toggle the .open class on .underlinestate2
        underlinestate2.classList.toggle('open');

        // Hide other menus and reset other elements
        bottommenu.classList.remove('show');
        bottommenu2.classList.remove('show');
        hamburger.classList.remove('change');
        underlinestate1.classList.remove('open');
    });

    // Add event listener to the document to detect clicks outside of .underlinestate2 and .translatesubmenu
    document.addEventListener('click', function(event) {
        // Check if the clicked target is not within .underlinestate2 or .translatesubmenu
        if (!underlinestate2.contains(event.target) && !translatesubmenu.contains(event.target)) {
            // Remove the .open class from .underlinestate2
            underlinestate2.classList.remove('open');
            // Remove the .show class from .translatesubmenu
            translatesubmenu.classList.remove('show');
        }
    });
});


// CHECKOUT DETAILS REMOVE SHOWFILTERBOXES

document.addEventListener("DOMContentLoaded", function() {
    const hiddenFilterboxes = document.querySelector('.tp-checkout-details-sidebar .hidden-filterboxes');
    
    if (hiddenFilterboxes) {
        hiddenFilterboxes.classList.remove('showfilterboxes');
    }
});





