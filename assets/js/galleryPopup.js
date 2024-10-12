// ! modal gallery
const modalHTML = `
    <div class="modal fade" id="galleryHotel" data-bs-keyboard="false" tabindex="-1" aria-labelledby="galleryHotelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer border-0">
                    <div class="counter">1/2</div>
                    <div class="navigation">
                        <i class="fa-solid fa-chevron-left"></i>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>`;
    
    document.body.insertAdjacentHTML('beforeend', modalHTML);

var myModal = new bootstrap.Modal(document.getElementById('galleryHotel'), {
    keyboard: false
});

const sliders = document.querySelectorAll('.v-slide-wrap');
const mContent = document.querySelector('#galleryHotel .modal-body');
const mCounter = document.querySelector('#galleryHotel .counter');
const mPrev = document.querySelector('#galleryHotel .fa-chevron-left');
const mNext = document.querySelector('#galleryHotel .fa-chevron-right');
const mViewAll = document.querySelector('.v-view-all');
const vAll = document.querySelector('.v-all');
const cVAll = document.querySelector('.carousel-modal-view-all');

let currentIndex = 0;
let images = [];

const updateSlideState = () => {
    const img = document.createElement('img');
    img.src = images[currentIndex].src;
    img.alt = `Image ${currentIndex + 1}`;
    mContent.innerHTML = '';
    mContent.appendChild(img);
    
    img.classList.remove('show');
    void img.offsetWidth;
    img.classList.add('show');

    mCounter.textContent = `${currentIndex + 1}/${images.length}`;
};

if(mViewAll){
    mViewAll.addEventListener('click', (e) => {
        e.stopPropagation();
    
        if (sliders.length > 0) {
            const firstSlider = sliders[0];
            const vSlides = firstSlider.querySelectorAll('.v-slide');
    
            images = Array.from(vSlides).map(slide => slide.querySelector('img'));
            currentIndex = 0;
    
            updateSlideState();
            myModal.show();
        }
    });
}

if(vAll){
    vAll.addEventListener('click', (e) => {
        e.stopPropagation();
    
        if (sliders.length > 0) {
            const firstSlider = sliders[0];
            const vSlides = firstSlider.querySelectorAll('.v-slide');
    
            images = Array.from(vSlides).map(slide => slide.querySelector('img'));
            currentIndex = 0;
    
            updateSlideState();
            myModal.show();
        }
    });
}

if(cVAll){
    cVAll.addEventListener('click', (e) => {
        e.stopPropagation();
    
        if (sliders.length > 0) {
            const firstSlider = sliders[0];
            const vSlides = firstSlider.querySelectorAll('.v-slide');
    
            images = Array.from(vSlides).map(slide => slide.querySelector('img'));
            currentIndex = 0;
    
            updateSlideState();
            myModal.show();
        }
    });
}


sliders.forEach(slider => {
    const vSlides = slider.querySelectorAll('.v-slide');

    vSlides.forEach((el, index) => {
        el.addEventListener('click', async (e) => {
            images = Array.from(vSlides).map(slide => slide.querySelector('img'));
            currentIndex = index;

            updateSlideState();
            myModal.show();
        });
    });
});

mPrev.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateSlideState();
});

mNext.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length;
    updateSlideState();
});


$('.v-slide-wrap').each(function() {
    const $slideHotel = $(this);
    const $carouselCounter = $slideHotel.closest('.parent-slide').find('.carousel-modal-counter');

    $slideHotel.slick({
        infinite: true,
        arrows: true,
        draggable: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
        nextArrow: '<i class="fa-solid fa-chevron-right"></i>'
    });

    if ($carouselCounter.length) {
        const totalSlides = $slideHotel.slick('getSlick').slideCount;

        const updateCounter = (cSlide, tSlides) => {
            $carouselCounter.text(`${String(cSlide + 1).padStart(2, '0')}/${String(tSlides).padStart(2, '0')}`);
        }

        $slideHotel.on('afterChange', function(event, slick, currentSlide) {
            updateCounter(currentSlide, totalSlides);
        });
    }
});

const countersSlide = document.querySelectorAll('.parent-slide');

countersSlide.forEach(el =>{
    let slideCarousels = el.querySelector('.v-slide-wrap');
    let slideCarouselCounter = slideCarousels.closest('.parent-slide').querySelector('.carousel-modal-counter');
    let slidesCarouselCounts = slideCarousels.querySelectorAll('.slick-slide:not(.slick-cloned)').length;
    slideCarouselCounter.innerHTML = '01/'+ (slidesCarouselCounts > 9 ? slidesCarouselCounts : '0' + slidesCarouselCounts);
});