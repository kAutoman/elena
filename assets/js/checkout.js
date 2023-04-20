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
    option.addEventListener('click', function() {
        if (!this.classList.contains('custom_select__item_active')) {
            const parentContainer = this.closest('.custom_select');
            parentContainer.querySelector('.custom_select__item_active').classList.remove('custom_select__item_active');
            parentContainer.classList.remove('custom_select_open');
            this.classList.add('custom_select__item_active');
            parentContainer.querySelector('.custom_select__current').textContent = this.textContent;
            let val = this.getAttribute('data-val');
            $($(this).parent().children()[0]).val(val);
            // setAstrology.setParamForm(parentContainer.getAttribute('data-name'),this.getAttribute('data-val'));
        }
    })
}
function gotoSecondStep() {
    let data = $('.checkout__content').serializeArray();
    // if($('input')){
    //     alert("User name can't empty!");
    //     return;
    // }
    let validationResult = true;
    let emptyFields = '';
    $('input').map(index => {
        if(!data[index].value){
            emptyFields += data[index].name + ', ';
            validationResult = false;
        }
    })
    if (validationResult === false){
        alert(emptyFields+" can't empty");
        return;
    }

    if(!data){
        alert('Form is Empty!');
    }
    
    localStorage.setItem('form_data',JSON.stringify(data));
    location.href="/checkout2"
}
function gotoThirdStep() {
    let data = $('.checkout__content').serializeArray();
    const form1Data = localStorage.getItem('form_data');
    let decoded = JSON.parse(form1Data);
    let favThings = {
        name: 'aspects',
        value: JSON.stringify(data)
    }
    decoded.push(favThings);
    if(!data){
        alert('Form is Empty!');
    }
    $.ajax({
        url: "/checkout2/action.php",
        data: decoded,
        method: 'POST',
        success: function(new_id) {
            let question_data = {
                question_id: new_id,
            }
            decoded.push(question_data);
            localStorage.setItem('form_data',JSON.stringify(decoded));
            location.href="/checkout3";
        },
        error: function(err) {
            console.error(err);
        }
    });
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
let confirmPayment = null;
const stripeTokenHandler = (token) => {
    // Insert the token ID into the form so it gets submitted to the server
    const form = document.getElementById('payment-form');
    const hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
}

$(document).ready(function() {
    //if current page is payment page
    if(location.pathname.indexOf('checkout4') > -1){
        var stripeInstance = Stripe('pk_test_51MoOFsKuZdcMdc5tVOKGtbxSHJFL513rXlAokWIPWKzFTG3yzD0iM8FjqOoimXql0ej8Y5JaH15xQEhqrtPhwb8400vEPAc5DC');
        console.log(stripeInstance);
        var elements = stripeInstance.elements({
            mode: 'payment',
            currency: 'usd',
            amount: 1099,
        });
        // Custom styling can be passed to options when creating an Element.
        const style = {
            base: {
                fontWeight: '300',
                fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                fontSize: '25px',
                fontSmoothing: 'antialiased',
            },
        };

        // Create an instance of the card Element.
        const card = elements.create('card', {style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Create a token or display an error when the form is submitted.

        confirmPayment = async () => {
            const {token, error} = await stripeInstance.createToken(card);

            if (error) {
                // Inform the customer that there was an error.
                const errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                // Send the token to your server.
                console.log(token);
                // Send the token to your server.
                stripeTokenHandler(token);
            }
        }

    }
})