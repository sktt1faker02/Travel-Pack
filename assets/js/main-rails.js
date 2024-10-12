
// Select all the .flights-main elements
const flightsMainElements = document.querySelectorAll('.rails-main');

// Add click event listener to each .flights-rmore-btn within .flights-main
flightsMainElements.forEach(flightMain => {
    const moreBtn = flightMain.querySelector('.rails-rmore-btn');
    const contentWrap = flightMain.querySelector('.fdm-content-wrap');
    const icon = flightMain.querySelector('.rails-readmore-info i.fs-icon'); // Select the icon

    moreBtn.addEventListener('click', () => {
        // Toggle the .show class on the .fdm-content-wrap element
        contentWrap.classList.toggle('show');
        
        // Toggle the .rotate class on the icon
        if (icon) {
            icon.classList.toggle('rotate');
        }

        // Toggle the .change class on the .flights-rmore-btn
        moreBtn.classList.toggle('change');
    });
});