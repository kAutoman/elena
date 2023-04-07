const custom_select = Array.from(document.querySelectorAll('.custom_select__current'));

custom_select.forEach((el) => {
    el.addEventListener('click', () => {
        if (el.closest('.custom_select').classList.contains('custom_select_open')) {
            el.closest('.custom_select').classList.remove('custom_select_open');
        } else {
            el.closest('.custom_select').classList.add('custom_select_open');
        }
    })
});
for (const option of document.querySelectorAll(".custom_select__item")) {
    console.log(option);
    option.addEventListener('click', function() {
        if (!this.classList.contains('custom_select__item_active')) {
            const parentContainer = this.closest('.custom_select');
            parentContainer.querySelector('.custom_select__item_active').classList.remove('custom_select__item_active');
            parentContainer.classList.remove('custom_select_open');
            this.classList.add('custom_select__item_active');
            parentContainer.querySelector('.custom_select__current').textContent = this.textContent;
            console.log(this.getAttribute('data-name'))
            // setAstrology.setParamForm(parentContainer.getAttribute('data-name'),this.getAttribute('data-val'));
        }
    })
}
window.addEventListener('click', function(e) {
   for (const select of document.querySelectorAll('.custom_select')) {
        if (!select.contains(e.target)) {
            select.classList.remove('custom_select_open');
        }
    }
});
document.addEventListener("DOMContentLoaded", function(){
    const currentStep = Array.from(document.querySelectorAll('.checkout__list__item_active')).pop();
    document.querySelector('.steps__wrapper').scrollLeft = currentStep.offsetLeft - currentStep.offsetWidth;
});

const gotoSecondStep = () => {
    let data = $('.checkout__content').serialize();
    console.log(data);
}