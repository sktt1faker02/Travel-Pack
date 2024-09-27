/* Experiences SLIDERS */
        $('.experiences-details-main-top-slider').slick({
            infinite: true,
            arrows: true,
            draggable:false,
            dots:false,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
            nextArrow: '<i class="fa-solid fa-chevron-right"></i>'
        });


function setEqualHeight3() {
    var rightHeight3 = document.querySelector('.experiences-main-top-right').offsetHeight;
    var slides = document.querySelectorAll('.experiences-details-main-top-slider .slick-slide > div');
    
    slides.forEach(function(slide) {
        slide.style.height = rightHeight3 + 'px';
    });
}

// Call the function on page load and window resize
setEqualHeight3();
window.addEventListener('resize', function() {
    setEqualHeight3();
});
        
        // ADD DISABLED IF ON FIRST PAGE
        document.addEventListener('DOMContentLoaded', function () {
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');
            const pageNumbers = document.querySelectorAll('.page-number');
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

        $(document).ready(function(){
            $(".datepicker").datepicker({
                dateFormat: "dd/mm/yy",
                minDate: 0,
                onSelect: function(dateText, inst) {
                    var dateObject = $(this).datepicker('getDate');
                    var formattedDate = $.datepicker.formatDate('yy-mm-dd', dateObject);
                    $(this).next('input[type="hidden"]').val(formattedDate);
                }
            });
        });