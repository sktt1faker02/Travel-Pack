// ! TOGGLE HIDE show
document.querySelectorAll('.togglefilterbox').forEach(function(toggleButton) {
    toggleButton.addEventListener('click', function() {
        let fbBottom = this.closest('.filters-box').querySelector('.fb-bottom');
        
        fbBottom.classList.toggle('hide');
        
        this.querySelector('i').classList.toggle('rotate');
    });
});


// ! 2 SLIDER RANGE
const isTwoSlideClassExist = document.querySelectorAll('.two-slide');
if(isTwoSlideClassExist.length > 0){

    // ? departure
    const updateDepartureLabel = (timeInput) => {
        const hours = Math.floor(timeInput.value / 60);
        const minutes = timeInput.value % 60;
        return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}`;
    };

    // ? duration
    const updateDurationLabel = (duration) => {
        return `${duration.value} Days`;
    };

    let sliderOne = document.getElementById("slider-1");
    let sliderTwo = document.getElementById("slider-2");
    let displayValOne = document.getElementById("val1");
    let displayValTwo = document.getElementById("val2");
    let minGap = 0;
    let sliderTrack = document.querySelector(".slider-track");
    let sliderMaxValue = 1439; // Maximum value for time, representing 23:59 in minutes

    sliderOne.max = sliderMaxValue;
    sliderTwo.max = sliderMaxValue;

    // Set default values
    sliderOne.value = 0;        // 00:00 in minutes
    sliderTwo.value = 1439;     // 23:59 in minutes

    function firstSlide(){
        // Ensure sliderOne can't go beyond 00:00
        if(parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap){
            sliderOne.value = parseInt(sliderTwo.value) - minGap;
        }

        // Update display based on slide type
        const slideType = sliderOne.getAttribute('slide-type');
        displayValOne.textContent = slideType == 'departure' ? updateDepartureLabel(sliderOne) : updateDurationLabel(sliderOne);
        
        fillColor();
        updateValuePositions();
    }

    function secondSlide(){
        // Ensure sliderTwo can't go below 23:59
        if(parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap){
            sliderTwo.value = parseInt(sliderOne.value) + minGap;
        }

        // Update display based on slide type
        const slideType = sliderTwo.getAttribute('slide-type');
        displayValTwo.textContent = slideType == 'departure' ? updateDepartureLabel(sliderTwo) : updateDurationLabel(sliderTwo);

        fillColor();
        updateValuePositions();
    }

    function fillColor(){
        percent1 = (sliderOne.value / sliderMaxValue) * 100;
        percent2 = (sliderTwo.value / sliderMaxValue) * 100;
        sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , rgb(123, 52, 164) ${percent1}% , rgb(123, 52, 164) ${percent2}%, #dadae5 ${percent2}%)`;
    }

    function updateValuePositions() {
        const sliderOnePos = (sliderOne.value / sliderMaxValue) * 100;
        const sliderTwoPos = (sliderTwo.value / sliderMaxValue) * 100;

        displayValOne.style.left = sliderOnePos < 10 ? `calc(${sliderOnePos}% - -5px)` : `calc(${sliderOnePos}% - 15px)`;
        displayValTwo.style.left = sliderTwoPos > 90 ? `calc(${sliderTwoPos}% - 40px)` : `calc(${sliderTwoPos}% - 15px)`;
    }

    // ! load first and second func slide
    window.onload = function(){
        firstSlide();
        secondSlide();
    }

}
// ! 2 SLIDER RANGE

// const updateDepartureLabel = (timeInput) => {
    //     const totalMinutes = timeInput.value;
    //     let hours = Math.floor(totalMinutes / 60);
    //     const minutes = totalMinutes % 60;
        
    //     hours = hours % 12 || 12;
    //     return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}`;
    // };