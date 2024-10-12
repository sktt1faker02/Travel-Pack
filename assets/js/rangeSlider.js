// ! 2 SLIDER RANGE
const isTwoSlideClassExist = document.querySelectorAll('.two-slide');
if (isTwoSlideClassExist.length > 0) {

    // ? departure
    const updateDepartureLabel = (timeInput) => {
        const hours = Math.floor(timeInput.value / 60);
        const minutes = timeInput.value % 60;
        return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}`;
    };

    // ? duration
    const updateDurationLabel = (duration) => {
        const days = Math.round(((duration.value - 0) / (1439)) * (30 - 1) + 1);
        return `${days} Days`;
    };

    let sliderOne = document.getElementById("slider-1");
    let sliderTwo = document.getElementById("slider-2");
    let displayValOne = document.getElementById("val1");
    let displayValTwo = document.getElementById("val2");
    let minGap = 60;
    let sliderTrack = document.querySelector(".slider-track");
    let sliderMaxValue = 1439;
    const slideType = sliderOne.getAttribute('slide-type');

    sliderOne.max = sliderMaxValue;
    sliderTwo.max = sliderMaxValue;

    sliderOne.value = 0;
    sliderTwo.value = 1439;

    const roundToHour = (value) => {
        return Math.round(value / 60) * 60;
    };

    function firstSlide() {
        if(slideType == 'departure'){
            if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                sliderOne.value = roundToHour(parseInt(sliderTwo.value) - minGap);
            } else {
                sliderOne.value = roundToHour(sliderOne.value);
            }
        }
        
        displayValOne.textContent = slideType == 'departure' ? updateDepartureLabel(sliderOne) : updateDurationLabel(sliderOne);

        fillColor();
        updateValuePositions();
    }

    function secondSlide() {
        if(slideType == 'departure'){
            if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                sliderTwo.value = roundToHour(parseInt(sliderOne.value) + minGap);
            } else {
                sliderTwo.value = roundToHour(sliderTwo.value);
            }
        }
        
        displayValTwo.textContent = slideType == 'departure' ? updateDepartureLabel(sliderTwo) : updateDurationLabel(sliderTwo);

        fillColor();
        updateValuePositions();
    }

    function fillColor() {
        let percent1 = (sliderOne.value / sliderMaxValue) * 100;
        let percent2 = (sliderTwo.value / sliderMaxValue) * 100;
        sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , rgb(123, 52, 164) ${percent1}% , rgb(123, 52, 164) ${percent2}%, #dadae5 ${percent2}%)`;
    }

    function updateValuePositions() {
        const sliderOnePos = (sliderOne.value / sliderMaxValue) * 100;
        const sliderTwoPos = (sliderTwo.value / sliderMaxValue) * 100;

        if(slideType == 'departure'){
            displayValOne.style.left = sliderOnePos < 10 ? `calc(${sliderOnePos}% - -5px)` : `calc(${sliderOnePos}% - 15px)`;
            displayValTwo.style.left = sliderTwoPos > 90 ? `calc(${sliderTwoPos}% - 40px)` : `calc(${sliderTwoPos}% - 15px)`;
        }else{
            displayValOne.style.left = `calc(${sliderOnePos}% - 0px)`;
            displayValTwo.style.left = `calc(${sliderTwoPos}% - 45px)`;
        }
        
    }

    sliderOne.addEventListener('input', firstSlide);
    sliderTwo.addEventListener('input', secondSlide);

    // ! load first and second func slide
    window.onload = function() {
        firstSlide();
        secondSlide();
    };

}


// ! SINGLE
