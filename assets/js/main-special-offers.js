document.addEventListener('DOMContentLoaded', function() {
    const itineraryTops = document.querySelectorAll('.spo-itinerary-days-top');

    itineraryTops.forEach(top => {
        top.addEventListener('click', function() {
            const parent = this.closest('.spobox-itinerary-days'); // Get the closest parent with class .spobox-itinerary-days
            const content = parent.querySelector('.spo-itinerary-days-content'); // Get the content

            // Toggle the .show class on the parent
            if (parent.classList.contains('show')) {
                parent.classList.remove('show');
                content.style.maxHeight = null; // Collapse the content
            } else {
                parent.classList.add('show');
                content.style.maxHeight = content.scrollHeight + 'px'; // Expand to fit the content height
            }
        });
    });
});



$(document).ready(function(){
    var $slider = $('.slidertop-spo');
  
    $slider.slick({
        infinite: true,
        arrows: true,
        fade: true,
        dots:false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
        nextArrow: '<i class="fa-solid fa-chevron-right"></i>'
    });
  
    // Initial Total Slides
    updateSliderCounter($slider.slick('getSlick'));
  
    // After change event
    $slider.on('afterChange', function(event, slick, currentSlide){
      updateSliderCounter(slick, currentSlide + 1);
    });
  
    function updateSliderCounter(slick, currentSlide = 1) {
      $('#current').text(pad(currentSlide));
      $('#total').text(pad(slick.slideCount));
    }
  
    function pad(n) {
      return n < 10 ? '0' + n : n;
    }

    $('.sliderpopup').slick({
        infinite: true,
        arrows: false,
        fade: false,
        dots:false,
        centerMode:true,
        centerPadding: '230px',
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
    });
});