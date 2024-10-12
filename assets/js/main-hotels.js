/* HOTELS SLIDERS */
$(document).ready(function() {
    // $('.hotels-summary-listing-slider').slick({
    //     infinite: true,
    //     arrows: true,
    //     draggable: false,
    //     dots: false,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
    //     nextArrow: '<i class="fa-solid fa-chevron-right"></i>'
    // });

    // $('.hotelrooms-image-slider').slick({
    //     infinite: true,
    //     arrows: true,
    //     draggable: false,
    //     dots: false,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
    //     nextArrow: '<i class="fa-solid fa-chevron-right"></i>'
    // });

    // $('.hotel-rooms-main-top-slider').slick({
    //     infinite: true,
    //     arrows: true,
    //     draggable: false,
    //     dots: false,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
    //     nextArrow: '<i class="fa-solid fa-chevron-right"></i>'
    // });

    // Function to set equal height
    function setEqualHeight2() {
        var rightHeight = $('.hotel-rooms-main-top-right').outerHeight();
        $('.hotel-rooms-main-top-slider .slick-slide > div').css('height', rightHeight);

        // After height is set, display the slider
        $('.hotel-rooms-main-top-slider').css('display', 'block');
    }

    // Hide the slider initially
    $('.hotel-rooms-main-top-slider').css('display', 'none');

    // Call the function on page load and window resize
    setEqualHeight2();
    $(window).resize(function() {
        setEqualHeight2();
    });
});

// CHANGE TEXT HOTEL ROOMS PRICE BUTTON
document.addEventListener('DOMContentLoaded', function() {
    // Get all buttons inside .hotelrooms-price elements
    document.querySelectorAll('.hotelrooms-price button').forEach(function(button) {
        button.addEventListener('click', function() {
            // Toggle the selected class on the parent .hotelrooms-price div
            const priceContainer = button.closest('.hotelrooms-price');
            priceContainer.classList.toggle('selected');

            // Toggle the selected class on the button
            button.classList.toggle('btn-selected');

            // Toggle the button text
            if (priceContainer.classList.contains('selected')) {
                button.textContent = 'Selected';
            } else {
                button.textContent = 'Select';
            }
        });
    });
});



// ADD DISABLED IF ON FIRST PAGE
document.addEventListener('DOMContentLoaded', function () {
    // Get the previous, next buttons and page numbers
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const pageNumbers = document.querySelectorAll('.page-number');

    // Check if required elements are present before executing the script
    if (!prevButton || !nextButton || pageNumbers.length === 0) {
        return; // Exit the function if elements are missing
    }

    let currentPage = 1;

    function updatePagination() {
        pageNumbers.forEach(page => {
            if (parseInt(page.textContent) === currentPage) {
                page.classList.add('active');
            } else {
                page.classList.remove('active');
            }
        });

        if (currentPage === 1) {
            prevButton.classList.add('disabled');
        } else {
            prevButton.classList.remove('disabled');
        }
    }

    prevButton.addEventListener('click', (e) => {
        e.preventDefault();
        if (currentPage > 1) {
            currentPage--;
            updatePagination();
        }
    });

    nextButton.addEventListener('click', (e) => {
        e.preventDefault();
        if (currentPage < pageNumbers.length) {
            currentPage++;
            updatePagination();
        }
    });

    pageNumbers.forEach(page => {
        page.addEventListener('click', (e) => {
            e.preventDefault();
            currentPage = parseInt(page.textContent);
            updatePagination();
        });
    });

    // Initial update
    updatePagination();
});



// ! modal gallery
document.addEventListener("DOMContentLoaded", function() {
    // Select the modal element
    const galleryModalElement = document.getElementById('galleryHotel');

    // Check if the modal element exists
    if (galleryModalElement) {
        // Create a new Bootstrap modal instance with keyboard control disabled
        var myModal = new bootstrap.Modal(galleryModalElement, {
            keyboard: false
        });

        const galleryToggle = document.querySelectorAll('[img-gallery]');
        
        // Check if any elements with the 'img-gallery' attribute exist
        if (galleryToggle.length > 0) {
            galleryToggle.forEach(el => {
                el.addEventListener('click', async (e) => {
                    const galleryPath = el.getAttribute('img-gallery');

                    // Fetch images from the JSON file
                    const response = await fetch(`${galleryPath}/gallery.json`);
                    const images = await response.json();

                    let currentIndex = 0;

                    const modalContent = document.querySelector('#galleryHotel .modal-body');
                    const counter = document.querySelector('#galleryHotel .counter');
                    modalContent.innerHTML = '';

                    const updateModalContent = () => {
                        const img = document.createElement('img');
                        img.src = `${galleryPath}/${images[currentIndex]}`;
                        img.alt = `Image ${currentIndex + 1}`;
                        modalContent.innerHTML = '';
                        modalContent.appendChild(img);
                        counter.textContent = `${currentIndex + 1}/${images.length}`;
                    };

                    updateModalContent();

                    const leftIcon = document.querySelector('#galleryHotel .fa-chevron-left');
                    const rightIcon = document.querySelector('#galleryHotel .fa-chevron-right');

                    // Check if navigation icons exist before adding event listeners
                    if (leftIcon) {
                        leftIcon.addEventListener('click', () => {
                            currentIndex = (currentIndex - 1 + images.length) % images.length;
                            updateModalContent();
                        });
                    }

                    if (rightIcon) {
                        rightIcon.addEventListener('click', () => {
                            currentIndex = (currentIndex + 1) % images.length;
                            updateModalContent();
                        });
                    }

                    // Show the modal
                    myModal.show();
                });
            });
        }
    }
});
