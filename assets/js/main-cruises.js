/* Experiences SLIDERS */
$('.cruise-details-main-top-slider').slick({
    infinite: true,
    arrows: true,
    draggable: false,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
    nextArrow: '<i class="fa-solid fa-chevron-right"></i>'
});

function setEqualHeight3() {
    var rightHeight3Element = document.querySelector('.cruise-main-top-right');
    
    // Check if the element exists before proceeding
    if (!rightHeight3Element) {
        return;  // Exit the function if the element is not present
    }
    
    var rightHeight3 = rightHeight3Element.offsetHeight;
    var slides = document.querySelectorAll('.cruise-details-main-top-slider .slick-slide > div');

    slides.forEach(function(slide) {
        slide.style.height = rightHeight3 + 'px';
    });
}

// Call the function on page load and window resize
setEqualHeight3();
window.addEventListener('resize', function() {
    setEqualHeight3();
});


function toggleTable() {
    const table = document.getElementById("cruisetable");
    const icon = document.getElementById("chevronIcon");
    table.classList.toggle("show-table");
    icon.classList.toggle("rotateIcon");
}

document.addEventListener('DOMContentLoaded', function() {
    // Get the last timeline step and the timeline line
    const lastTimelineStep = document.querySelector('.timeline-step:last-child');
    const timelineLine = document.querySelector('.timeline-line');

    // If either element is not present, stop execution
    if (!lastTimelineStep || !timelineLine) {
        return;  // Exit the function early if elements are missing
    }

    // Get the width of the last timeline step
    const lastStepWidth = lastTimelineStep.offsetWidth;

    // Get computed style to access the margin-right of the last timeline step
    const computedStyle = getComputedStyle(lastTimelineStep);
    const marginRight = parseFloat(computedStyle.marginRight);

    // Total width of the last step including margin-right
    const totalWidth = lastStepWidth + marginRight;

    // Get the width of the timeline line
    const timelineLineWidth = timelineLine.offsetWidth;

    // Subtract the total width of the last step and add 15px
    const adjustedWidth = timelineLineWidth - totalWidth + 15;

    // Set the adjusted width back to the timeline line
    timelineLine.style.width = adjustedWidth + 'px';
});


//CRUISE MORE READ MORE INFORMATION
document.addEventListener('DOMContentLoaded', function() {
    // Get the element with class .cruisedetailsmore
    const detailsMore = document.querySelector('.cruisedetailsmore');
    // Get the element where you want to toggle the .showcontent class
    const cruiseMain = document.querySelector('.cruise-main');

    // Check if both elements exist
    if (detailsMore && cruiseMain) {
        // Add click event listener
        detailsMore.addEventListener('click', function() {
            // Toggle the .showcontent class on the .cruise-main element
            cruiseMain.classList.toggle('showcontent');
        });
    }
});



