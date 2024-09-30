// LOAD MORE BOXES
document.addEventListener('DOMContentLoaded', function() {
    const loadmoreBoxesWrap = document.querySelector('.loadmore-boxes-wrap');
    const loadmoreBoxes = Array.from(loadmoreBoxesWrap.querySelectorAll('.loadmorebox'));
    const loadmoreNumber = document.querySelector('.loadmore-number');
    const loadmoreTotal = document.querySelector('.loadmore-total');
    const loadmoreButton = document.querySelector('.loadmorebtn');
    const loadmoreGaugeBar = document.querySelector('.loadmore-gauge-bar');

    if (!loadmoreBoxesWrap || !loadmoreBoxes || !loadmoreNumber || !loadmoreTotal || !loadmoreButton || !loadmoreGaugeBar) {
        console.error("One or more required elements are missing.");
        return;
    }

    const totalBoxes = loadmoreBoxes.length;
    const boxesPerPage = 3;
    let currentPage = 1;

    // Check if .loadmore-boxes-wrap is inside .specialoffer-main or .baggage-allowances
    const isSpecialOffer = loadmoreBoxesWrap.closest('.specialoffer-main') !== null;
    const isBaggageAllowances = loadmoreBoxesWrap.closest('.baggage-allowances') !== null;
    const displayStyle = isSpecialOffer ? 'flex' : 'block';

    // Wrap every 3 boxes into a new parent div with class "box-group"
    for (let i = 0; i < totalBoxes; i += boxesPerPage) {
        const group = document.createElement('div');
        group.classList.add('box-group'); // Add 'box-group' by default

        // Only add 'g-3' and 'row' if the loadmore-boxes-wrap is NOT inside .baggage-allowances
        if (!isBaggageAllowances) {
            group.classList.add('g-3', 'row');
        }

        group.style.display = 'none'; // Set initially hidden
        loadmoreBoxes.slice(i, i + boxesPerPage).forEach(box => group.appendChild(box));
        loadmoreBoxesWrap.appendChild(group);
    }

    const boxGroups = Array.from(loadmoreBoxesWrap.querySelectorAll('.box-group'));

    function updateLoadMore() {
        const maxGroups = currentPage;
        boxGroups.forEach((group, index) => {
            if (index < maxGroups) {
                group.style.display = displayStyle; // Set flex or block depending on parent
                setTimeout(() => {
                    group.style.opacity = '1';
                    group.style.visibility = 'visible';
                }, 50 * (index % boxesPerPage));  // Stagger the fade-in effect
            }
        });

        const visibleBoxes = Math.min(currentPage * boxesPerPage, totalBoxes);
        loadmoreNumber.textContent = visibleBoxes;
        loadmoreTotal.textContent = totalBoxes;
        loadmoreGaugeBar.style.width = (visibleBoxes / totalBoxes) * 100 + '%';

        if (visibleBoxes >= totalBoxes) {
            loadmoreButton.style.display = 'none';
        }
    }

    loadmoreButton.addEventListener('click', function() {
        currentPage++;
        updateLoadMore();
    });

    // Initialize
    updateLoadMore();
});
