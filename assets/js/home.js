
// GET HEIGHT TOP PLACES TOPPLACES SLIDER
function adjustSlideHeight() {
    var topPlaces = document.querySelector('#top-places');
    if (topPlaces) { // Check if #top-places exists
        var topPlacesHeight = topPlaces.offsetHeight;

        var tpSlides = document.querySelectorAll('.topplaces-slider .tp-slide');
        if (tpSlides.length) { // Check if there are any slides
            tpSlides.forEach(function(slide) {
                slide.style.height = topPlacesHeight + 'px';
            });
        }
    }
}

// Add a slight delay to ensure elements are fully loaded before adjusting height
window.addEventListener('load', function() {
    adjustSlideHeight();
});

window.addEventListener('resize', adjustSlideHeight);

/* MATCH HEIGHT FOR SED-DETAILS */
function matchSedDetailsHeights() {
    // Get all elements with the class 'sed-details'
    var elements = document.querySelectorAll('.sed-details');

    // Determine the maximum height for .sed-details
    var maxHeight = 0;
    elements.forEach(function(element) {
        // Reset height to auto to get the natural height
        element.style.height = 'auto';
        var elementHeight = element.offsetHeight;
        if (elementHeight > maxHeight) {
            maxHeight = elementHeight;
        }
    });

    // Set all .sed-details elements to the maximum height
    elements.forEach(function(element) {
        element.style.height = maxHeight + 'px';
    });
}

/* MATCH HEIGHT FOR SLIDES */
function matchSlideHeights() {
    // Check if the window width is 767 pixels or less
    if (window.innerWidth <= 767) {
        const slides = document.querySelectorAll('.esd-box-slider .slick-slide .esd-right');
        let slideMaxHeight = 0;

        // Calculate the maximum height for slides
        slides.forEach(slide => {
            slide.style.height = 'auto'; // Reset height to auto for calculation
            const slideHeight = slide.offsetHeight; // Get the height of the current slide
            if (slideHeight > slideMaxHeight) {
                slideMaxHeight = slideHeight; // Update slideMaxHeight if current height is greater
            }
        });

        // Set all slides to the maximum height if needed
        slides.forEach(slide => {
            if (slide.offsetHeight !== slideMaxHeight) {
                slide.style.height = slideMaxHeight + 'px'; // Set the height of each slide to slideMaxHeight
            }
        });
    } else {
        // Reset heights for slides if not in mobile view
        const slides = document.querySelectorAll('.esd-box-slider .slick-slide .esd-right');
        slides.forEach(slide => {
            slide.style.height = 'auto'; // Reset height to auto
        });
    }
}

// Debounce function to limit the rate at which a function can fire
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Use ResizeObserver to watch for changes in the .container
const container = document.querySelector('.container');
if (container) {
    const resizeObserver = new ResizeObserver(() => {
        matchSlideHeights(); // Call matchSlideHeights when the container is resized
    });
    resizeObserver.observe(container); // Start observing the container
}

// Initial call to set heights
window.onload = matchSlideHeights;

// Call the debounced function on window resize to maintain equal heights
window.onresize = debounce(matchSlideHeights, 100);


// Combined function to match heights for both sed-details and slides
function matchHeights() {
    matchSedDetailsHeights();
    matchSlideHeights();
}

// Call the combined function to match heights on window load
window.onload = matchHeights;

// Call the debounced function on window resize to maintain equal heights
window.onresize = debounce(matchHeights, 100); // Adjust the wait time as needed

// Call matchHeights on DOMContentLoaded to set initial heights
document.addEventListener("DOMContentLoaded", matchHeights);



$(window).on('load', function() {
    initSlickSliderss();
    $('.esd-left-slider img').addClass('showbox'); 
});

function initSlickSliderss(){
    $('.esd-left-slider').slick({
        infinite: true,
        arrows: true,
        dots: false,
        draggable: false,
        touchMove: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
        nextArrow: '<i class="fa-solid fa-chevron-right"></i>'
    });
    /* TOP PLACES SLIDER */
    $('.topplaces-slider').slick({
        infinite: true,
        arrows: false,
        fade: true,
        dots:false,
        asNavFor: '.topplaces-slider-nav',
        slidesToShow: 1,
        slidesToScroll: 1
    });
    $('.topplaces-slider-nav').slick({
        infinite: true,
        arrows: true,
        fade: true,
        dots:false,
        asNavFor: '.topplaces-slider',
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
        nextArrow: '<i class="fa-solid fa-chevron-right"></i>'
    });
}

function initSlickSliders(){
    /** 2 Slides Visible **/
    $('.tpslider-2').slick({
        infinite: false,
        arrows: false,
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
        nextArrow: '<i class="fa-solid fa-chevron-arrow"></i>',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    }
                }
            ]
    });		
    
    $('.tpslider-2').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.tpslider-2').removeClass('firstload');
    });	
    
    /** 3 Slides Visible **/
    $('.tpslider-3').slick({
        infinite: false,
        arrows: false,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
        nextArrow: '<i class="fa-solid fa-chevron-arrow"></i>'
    });
    
    $('.tpslider-3').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.tpslider-3').removeClass('firstload');
    });		
    
    /** 4 Slides Visible **/
    $('.tpslider-4').slick({
        infinite: false,
        arrows: false,
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
        nextArrow: '<i class="fa-solid fa-chevron-arrow"></i>',
        responsive: [
            {
                breakpoint: 1180,
                settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                centerPadding: '10px'
                }
            },
            {
                breakpoint: 991,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                centerPadding: '30px'
                }
            },
            {
                breakpoint: 580,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '30px'
                }
            }
        ]
    });
    
    $('.tpslider-4').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.tpslider-4').removeClass('firstload');
    });				
}


/* EXCITING DEALS SLIDERS */

jQuery(document).ready(function($){     
    // HURRY SLIDER
    $('.hurryslider').slick({
        infinite: true,
        arrows: false,
        fade: true,
        dots:true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    /*$('.testislider').slick({
        infinite: true,
        arrows: false,
        fade: false,
        dots:false,
        centerMode:true,
        centerPadding: '100px',
        slidesToShow: 4,
        slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                    centerPadding: '30px',
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                    centerPadding: '50px',
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    centerPadding: '30px'
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerPadding: '30px'
                    }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '30px'
                }
                }
            ]
    }); */


    /* HERO SLIDER */
    $('.heroslider').slick({
        infinite: true,
        arrows: false,
        fade: true,
        dots:false,
        asNavFor: '.heroslider-nav',
        slidesToShow: 1,
        slidesToScroll: 1
    });
    $('.heroslider-nav').slick({
        infinite: true,
        arrows: false,
        fade: true,
        dots:true,
        adaptiveHeight: true,
        asNavFor: '.heroslider',
        slidesToShow: 1,
        slidesToScroll: 1
    });

});

jQuery(document).ready(function($){   
    initSlickSliders();
});

window.onload = function() {
    function setHeroSlideHeight() {
        var homeHero = document.getElementById("herohome"); // Corrected ID
        if (homeHero) {
            var homeHeroHeight = homeHero.offsetHeight; // Get the height of #herohome
            var heroSlides = document.getElementsByClassName("heroslide");
            for (var i = 0; i < heroSlides.length; i++) {
                heroSlides[i].style.height = homeHeroHeight + "px"; // Set height for each slide
            }
        } else {
            console.warn("#herohome not found.");
        }
    }

    // Debounce function to limit the rate at which a function can fire
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Adjust height on window resize with debouncing
    window.addEventListener("resize", debounce(setHeroSlideHeight, 100));

    // Ensure the height is set right after the complete page load
    setHeroSlideHeight();

    // Adjust height when #home-searchbar changes size
    var homeSearchbar = document.getElementById("home-searchbar");
    if (homeSearchbar) {
        var resizeObserver = new ResizeObserver(function() {
            setHeroSlideHeight(); // Call on resize
        });
        // Start observing #home-searchbar for size changes
        resizeObserver.observe(homeSearchbar);
    }

    // Fade-in effect for the hero slider after the page fully loads
    setTimeout(function() {
        var heroslider = document.querySelector('.heroslider');
        if (heroslider) {
            heroslider.classList.add('fade-in');
        }
    }, 1000); // Consider using a more dynamic approach to set this time
};


