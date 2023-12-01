
const dropdownBoxInf = document.querySelectorAll(".dropdown-box-information");

dropdownBoxInf.forEach( (e) => {
    e.addEventListener('click', () => {
        let dropDownUnder = e.querySelectorAll(".dropdown-box-under");
        // Se dropDownUnder ha degli elementi al suo interno
        // allora procedi con l'effetto
        let isHide = dropDownUnder[0].getAttribute('data-show') ;
        let hasHideClass = dropDownUnder[0].classList.contains("hide");
        if ( isHide && hasHideClass ) {
            dropDownUnder[0].classList.remove("hide");
            dropDownUnder[0].setAttribute('data-show', true);
        } else if ( ! ( isHide && hasHideClass ) ) {
            dropDownUnder[0].classList.add("hide");
            dropDownUnder[0].setAttribute('data-show', false);
        }
    });
});