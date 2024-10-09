document.addEventListener('DOMContentLoaded', function() {
    const priceRange1 = document.getElementById('priceRange1');
    const sliderValue1 = document.getElementById('sliderValue1');

    if (priceRange1 && sliderValue1) {
        priceRange1.oninput = function() {
            sliderValue1.textContent = `£${this.value}`;
        }
    }

    const priceRange2 = document.getElementById('priceRange2');
    const sliderValue2 = document.getElementById('sliderValue2');

    if (priceRange2 && sliderValue2) {
        priceRange2.oninput = function() {
            const hours = Math.floor(this.value / 60);
            const minutes = this.value % 60;
            sliderValue2.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}h`;
        }
    }

    const priceRange3 = document.getElementById('priceRange3');
    const sliderValue3 = document.getElementById('sliderValue3');

    if (priceRange3 && sliderValue3) {
        priceRange3.oninput = function() {
            const hours = Math.floor(this.value / 60);
            const minutes = this.value % 60;
            sliderValue3.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}h`;
        }
    }
});

/* TOGGLE HIDDEN FILTER BOXES MAIN */
document.addEventListener('DOMContentLoaded', function() {
    // Select all elements with the class .hidden-filterboxes
    const filterBoxes = document.querySelectorAll('.hidden-filterboxes');
    
    if (filterBoxes.length > 0) { // Only proceed if there are matching elements
        filterBoxes.forEach(function(box) {
            const topElement = box.querySelector('.hiddenfilterboxes-top'); // Get the top part
            const icon = topElement.querySelector('i'); // Get the icon element
            
            if (topElement) {
                topElement.addEventListener('click', function() {
                    // Toggle the .showfilterboxes class on the parent .hidden-filterboxes
                    box.classList.toggle('showfilterboxes');
                    console.log('Toggled showfilterboxes class on:', box); // Debugging

                    // Toggle the rotation of the icon
                    if (icon) {
                        icon.classList.toggle('rotate');
                        console.log('Toggled rotate class on icon:', icon); // Debugging
                    }
                });
            }
        });
    }
});



/* TOGGLE FB_BOTTOM */
document.addEventListener('DOMContentLoaded', function() {
    // Select all toggle filter boxes
    const toggleFilterBoxes = document.querySelectorAll('.togglefilterbox');

    toggleFilterBoxes.forEach(toggleFilterBox => {
        toggleFilterBox.addEventListener('click', function() {
            // Find the closest parent filter box
            const filtersBox = toggleFilterBox.closest('.filters-box');
            // Select the fb-bottom element within this filter box
            const fbBottom = filtersBox.querySelector('.fb-bottom');

            if (fbBottom) { // Check if fb-bottom element is present
                fbBottom.classList.toggle('hide'); // Toggle the hide class
            }

            // Toggle the rotate class on the toggle filter box
            toggleFilterBox.classList.toggle('rotate'); // Toggle the rotate class
        });
    });
});

document.querySelectorAll('.togglefilterbox-main').forEach(function(toggleButton) {
    toggleButton.addEventListener('click', function() {
        let content = this.nextElementSibling; // Select the next sibling, which is .togglefilterbox-content
        content.classList.toggle('minimize'); // Toggle the .minimize class
        this.querySelector('i').classList.toggle('rotate'); // Optionally toggle rotation for the icon
    });
});

/* TOGGLE SHOW ALL */
document.addEventListener('DOMContentLoaded', function() {
    const fbBottomContainers = document.querySelectorAll('.fb-bottom');
    
    fbBottomContainers.forEach(function(container) {
        const checkboxList = container.querySelector('.checkbox-list');
        const listItems = checkboxList ? checkboxList.querySelectorAll('li') : [];

        if (listItems.length > 4) {
            const hiddenContainer = document.createElement('div');
            hiddenContainer.classList.add('hidden-items');

            for (let i = 4; i < listItems.length; i++) {
                hiddenContainer.appendChild(listItems[i]);
            }

            checkboxList.appendChild(hiddenContainer);

            const showAllButton = document.createElement('div');
            showAllButton.classList.add('show-all');
            showAllButton.setAttribute('data-expanded', 'false');
            showAllButton.innerHTML = 'Show All <i class="fa-solid fa-chevron-down"></i>';
            container.appendChild(showAllButton);

            showAllButton.addEventListener('click', function() {
                const expanded = this.getAttribute('data-expanded') === 'true';

                if (expanded) {
                    hiddenContainer.classList.remove('expanded');
                    this.setAttribute('data-expanded', 'false');
                    this.querySelector('i').classList.remove('rotate');
                    this.innerHTML = 'Show All <i class="fa-solid fa-chevron-down"></i>';
                } else {
                    hiddenContainer.classList.add('expanded');
                    this.setAttribute('data-expanded', 'true');
                    this.querySelector('i').classList.add('rotate');
                    this.innerHTML = 'Show Less <i class="fa-solid fa-chevron-up"></i>';
                }
            });
        }
    });
});


// RANGE SIDEBAR SCRIPTS
document.addEventListener('DOMContentLoaded', function() {
    // Duration Slider
    const durationRange = document.getElementById('durationRange');
    const durationValue = document.getElementById('durationValue');

    // Get the width of the left and right labels
    const leftLabel = document.querySelector('.value-display span:first-child');
    const rightLabel = document.querySelector('.value-display span:last-child');

    if (durationRange && durationValue && leftLabel && rightLabel) {
        durationRange.oninput = function() {
            durationValue.textContent = `${this.value} Nights`;
            updateSliderPosition(durationRange, durationValue, leftLabel, rightLabel);
            updateSliderBackground(durationRange);
        }
    }

    function updateSliderPosition(slider, output, leftLabel, rightLabel) {
        const sliderWidth = slider.offsetWidth;
        const thumbWidth = 15; // Adjust for the slider thumb size
        const min = slider.min;
        const max = slider.max;
        const val = slider.value;
        const percentage = (val - min) / (max - min);
    
        const leftLabelWidth = leftLabel.offsetWidth;
        const rightLabelWidth = rightLabel.offsetWidth;
    
        // Calculate the new position for the output text and center it under the knob
        let newOffset = percentage * (sliderWidth - thumbWidth) - (output.offsetWidth / 2) + thumbWidth / 2;
    
        // Adjust maxOffset to include thumb size and right padding
        const maxOffset = sliderWidth - rightLabelWidth - thumbWidth; // Right boundary adjustment
        const minOffset = thumbWidth; // Left boundary adjustment
    
        if (newOffset < minOffset) newOffset = minOffset; // Prevent overflow on the left
        if (newOffset > maxOffset) newOffset = maxOffset; // Prevent overflow on the right
    
        // Set the output's position in px
        output.style.left = `${newOffset}px`;
    }

    function updateSliderBackground(slider) {
        const min = slider.min;
        const max = slider.max;
        const val = slider.value;

        // Calculate the percentage
        const percentage = ((val - min) / (max - min)) * 100;

        // Update the background gradient
        slider.style.background = `linear-gradient(to right, #7b34a4 ${percentage}%, #ccc ${percentage}%)`;
    }

    // Initialize position and background on load
    updateSliderPosition(durationRange, durationValue, leftLabel, rightLabel);
    updateSliderBackground(durationRange);
}); 

document.addEventListener('DOMContentLoaded', function() {
    // Common initialization for sliders
    const sliders = [
        {
            range: document.getElementById('ratingRange'),
            value: document.getElementById('ratingValue'),
            belowValue: document.getElementById('ratingValueBelow'),
            leftLabel: document.querySelector('#ratingContainer .value-display span:first-child'),
            rightLabel: document.querySelector('#ratingContainer .value-display span:last-child'),
            unit: '' // No unit for rating
        },
        {
            range: document.getElementById('priceRange'),
            value: document.getElementById('priceValue'),
            belowValue: document.getElementById('priceValueBelow'),
            leftLabel: document.querySelector('#priceContainer .value-display span:first-child'),
            rightLabel: document.querySelector('#priceContainer .value-display span:last-child'),
            unit: '£' // Prefix for price
        }
    ];

    sliders.forEach(function(sliderObj) {
        const { range, value, belowValue, leftLabel, rightLabel, unit } = sliderObj;
        if (range && value && belowValue && leftLabel && rightLabel) {
            range.oninput = function() {
                value.textContent = `${unit}${this.value}${unit === '£' ? '' : unit}`;
                belowValue.textContent = `${unit}${this.value}${unit === '£' ? '' : unit}`;
                updateSliderPosition(range, belowValue, leftLabel, rightLabel);
                updateSliderBackground(range);
            };
            // Initialize position and background on load
            updateSliderPosition(range, belowValue, leftLabel, rightLabel);
            updateSliderBackground(range);
        }
    });

    // Reusable function to update slider background
    function updateSliderBackground(slider) {
        const min = slider.min;
        const max = slider.max;
        const val = slider.value;
        const percentage = ((val - min) / (max - min)) * 100;
        slider.style.background = `linear-gradient(to right, #7b34a4 ${percentage}%, #ccc ${percentage}%)`;
    }

    // Reusable function to update slider position and prevent label overlap
    function updateSliderPosition(slider, output, leftLabel, rightLabel) {
        const sliderWidth = slider.offsetWidth;
        const thumbWidth = 15;
        const min = slider.min;
        const max = slider.max;
        const val = slider.value;
        const percentage = (val - min) / (max - min);

        const leftLabelWidth = leftLabel.offsetWidth;
        const rightLabelWidth = rightLabel.offsetWidth;

        // Calculate the new position for the output text and center it under the knob
        let newOffset = percentage * (sliderWidth - thumbWidth) - (output.offsetWidth / 2) + thumbWidth / 2;

        const maxOffset = sliderWidth - rightLabelWidth - output.offsetWidth - 10;

        if (newOffset < leftLabelWidth) newOffset = leftLabelWidth;
        if (newOffset > maxOffset) newOffset = maxOffset;

        output.style.left = `${newOffset}px`;
    }
});

// PRICE RANGE
document.addEventListener('DOMContentLoaded', function() {
    // Price Range Slider
    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');

    if (priceRange && priceValue) {
        priceRange.oninput = function() {
            priceValue.textContent = `£${this.value}`;
        };
    }

    // Departure and Return Time Sliders (unique function)
    function setupTimeSliders(departureId, returnId, departureValueId, returnValueId) {
        const departureTime = document.getElementById(departureId);
        const returnTime = document.getElementById(returnId);
        const departureTimeValue = document.getElementById(departureValueId);
        const returnTimeValue = document.getElementById(returnValueId);

        if (departureTime && returnTime && departureTimeValue && returnTimeValue) {
            const updateTimeLabel = (timeInput, timeLabel) => {
                const hours = Math.floor(timeInput.value / 60);
                const minutes = timeInput.value % 60;
                timeLabel.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}`;
            };

            departureTime.oninput = function() {
                updateTimeLabel(departureTime, departureTimeValue);
            };

            returnTime.oninput = function() {
                updateTimeLabel(returnTime, returnTimeValue);
            };

            // Initialize the values
            updateTimeLabel(departureTime, departureTimeValue);
            updateTimeLabel(returnTime, returnTimeValue);
        }
    }

    // Call the setupTimeSliders function with unique IDs
    setupTimeSliders('departureTime', 'returnTime', 'departureTimeValue', 'returnTimeValue');
});


// FLIGHTS DEPARTURE AND RETURN TIME



  




// RAIL SIDEBAR SLIDE
document.addEventListener('DOMContentLoaded', function() {
    // Slider setup for Price Range, Departure Time, and Return Time
    const sliders = [
        {
            range: document.getElementById('ratingRange'),
            value: document.getElementById('ratingValueBelow'),
            leftLabel: document.querySelector('#priceContainer .value-display span:first-child'),
            rightLabel: document.querySelector('#priceContainer .value-display span:last-child'),
            unit: '', // Prefix for price
            isTime: false
        },
        {
            range: document.getElementById('priceRange'),
            value: document.getElementById('priceValueBelow'),
            leftLabel: document.querySelector('#priceContainer .value-display span:first-child'),
            rightLabel: document.querySelector('#priceContainer .value-display span:last-child'),
            unit: '£', // Prefix for price
            isTime: false
        },
        {
            range: document.getElementById('departureTime'),
            value: document.getElementById('departureTimeValueBelow'),
            leftLabel: document.querySelector('#departureContainer .value-display span:first-child'),
            rightLabel: document.querySelector('#departureContainer .value-display span:last-child'),
            unit: '', // No unit for time
            isTime: true
        },
        {
            range: document.getElementById('returnTime'),
            value: document.getElementById('returnTimeValueBelow'),
            leftLabel: document.querySelector('#returnContainer .value-display span:first-child'),
            rightLabel: document.querySelector('#returnContainer .value-display span:last-child'),
            unit: '', // No unit for time
            isTime: true
        }
    ];

    sliders.forEach(function(sliderObj) {
        const { range, value, leftLabel, rightLabel, unit, isTime } = sliderObj;
        if (range && value && leftLabel && rightLabel) {
            range.oninput = function() {
                if (isTime) {
                    const hours = Math.floor(this.value / 60);
                    const minutes = this.value % 60;
                    value.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}`;
                } else {
                    value.textContent = `${unit}${this.value}`;
                }
                updateSliderPosition(range, value, leftLabel, rightLabel);
                updateSliderBackground(range);
            };
            // Initialize position and background on load
            updateSliderPosition(range, value, leftLabel, rightLabel);
            updateSliderBackground(range);
        }
    });

    // Reusable function to update slider background
    function updateSliderBackground(slider) {
        const min = slider.min;
        const max = slider.max;
        const val = slider.value;
        const percentage = ((val - min) / (max - min)) * 100;
        slider.style.background = `linear-gradient(to right, #7b34a4 ${percentage}%, #ccc ${percentage}%)`;
    }

    // Reusable function to update slider position and prevent label overlap
    function updateSliderPosition(slider, output, leftLabel, rightLabel) {
        const sliderWidth = slider.offsetWidth;
        const thumbWidth = 15;
        const min = slider.min;
        const max = slider.max;
        const val = slider.value;
        const percentage = (val - min) / (max - min);

        const leftLabelWidth = leftLabel.offsetWidth;
        const rightLabelWidth = rightLabel.offsetWidth;

        // Calculate the new position for the output text and center it under the knob
        let newOffset = percentage * (sliderWidth - thumbWidth) - (output.offsetWidth / 2) + thumbWidth / 2;

        const maxOffset = sliderWidth - rightLabelWidth - output.offsetWidth - 10;
        if (newOffset < leftLabelWidth) newOffset = leftLabelWidth;
        if (newOffset > maxOffset) newOffset = maxOffset;

        output.style.left = `${newOffset}px`;
    }
});
