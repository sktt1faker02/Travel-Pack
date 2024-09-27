$(document).ready(function() {
    $('.fpd-box-top').on('click', function() {
        // Toggle the 'show' class on the parent '.fpd-box-addtl'
        $(this).closest('.fpd-box').toggleClass('show');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.flights-rmore-btn');
    buttons.forEach(function(button) {
      button.addEventListener('click', function() {
        button.classList.toggle('change');
        const flightDetailsMore = button.closest('.flightdetailsmore');
        const contentWrap = flightDetailsMore.querySelector('.fdm-content-wrap');
        if (contentWrap) {
          contentWrap.classList.toggle('show');
        }
      });
    });
  });