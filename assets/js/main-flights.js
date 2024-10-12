$(document).ready(function() {
    $('.fpd-box-top').on('click', function() {
        // Toggle the 'show' class on the parent '.fpd-box-addtl'
        $(this).closest('.fpd-box').toggleClass('show');
    });
});

// Select all the .flights-main elements
const flightsMainElements = document.querySelectorAll('.flights-main');

// Add click event listener to each .flights-rmore-btn within .flights-main
flightsMainElements.forEach(flightMain => {
    const moreBtn = flightMain.querySelector('.flights-rmore-btn');
    const contentWrap = flightMain.querySelector('.fdm-content-wrap');

    moreBtn.addEventListener('click', () => {
        // Toggle the .show class on the .fdm-content-wrap element
        contentWrap.classList.toggle('show');
    });
});