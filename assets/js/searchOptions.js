'use strict';


const globalParentElement = document.querySelector('.v-globel-search');
if(globalParentElement){
    const radioInputsRail = globalParentElement.querySelectorAll('input[type=radio]');
    // ? elements wrappers
    const returnWrapper = document.querySelector('.return-wrapper');

    // ? current Checked input
    const currentCheckInput = globalParentElement.querySelector('input:checked');

    // ? more option toggle
    const globalMoreOption = globalParentElement.querySelectorAll('.v-search-more');

    radioInputsRail.forEach(radio => {
        radio.addEventListener('change', ()=>{

            switch (radio.value) {
                case 'return':
                    returnWrapper.classList.add('show');
                    globalMoreOption.classList.remove('d-none');
                    break;
                case 'oneway':
                    returnWrapper.classList.remove('show');
                    globalMoreOption.classList.add('d-none');
                    break;
            }
        });
    });


    // ? more option events
    globalMoreOption.forEach(el =>{
        el.addEventListener('click', ()=>{

            // ? icon rotate target
            const iconRotate = globalMoreOption.querySelector('i');
    
            if(currentCheckInput){
                switch (currentCheckInput.value) {
                    case 'return':
                        returnWrapper.classList.toggle('show');
                        iconRotate.classList.toggle('rotate');
                        break;
                }
            }else{
                document.querySelector('.more-option-content').classList.toggle('show');
            }
    
            
        }); 
    });
}


