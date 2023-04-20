
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Astrology</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&family=STIX+Two+Text:wght@500;600&family=Domine:wght@400;500;700&family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="../assets/css/checkout.css">
    </head>
    <body>
        <?php
        $amount = 0;
        switch ($_GET['tariff']){
            case 3:
                $amount = 39;
                break;
            case 6:
                $amount = 69;
                break;
            case 12:
                $amount = 97;
                break;
        }
        echo '<script>var amount = '. $amount .'</script>';
        ?>
        <main class="checkout">
            <section class="steps">
                <div class="container">
                    <div class="checkout__logo">
                        <a class="checkout__logo__link">
                            <img src="../assets/img/checkout/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="steps__wrapper">
                        <div class="checkout__list">
                            <div class="checkout__list__item checkout__list__item_active">
                                <p class="checkout__list__item__top">Confirm Details</p>
                                <p class="checkout__list__item__bottom"><span>1</span></p>
                            </div>
                            <div class="checkout__list__item checkout__list__item_active">
                                <p class="checkout__list__item__top">Questionnaire</p>
                                <p class="checkout__list__item__bottom"><span>2</span></p>
                            </div>
                            <div class="checkout__list__item checkout__list__item_active">
                                <p class="checkout__list__item__top"> Select Guide</p>
                                <p class="checkout__list__item__bottom"><span>3</span></p>
                            </div>
                            <div class="checkout__list__item checkout__list__item_active">
                                <p class="checkout__list__item__top">Sumbit Request</p>
                                <p class="checkout__list__item__bottom"><span>4</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="step4">
                <div class="container">
                    <div class="checkout__wrapper">
                        <div class="checkout__img">
                            <picture  class="checkout__img__item">
                                <img alt="" src="../assets/img/checkout/elena.png">
                            </picture>
                        </div>
                        <div class="step4__desc">
                            <h1>Your Request is almost complete!</h1>
                            <p class="step4__desc1">
                                Fill in your details below to immediately begin creating a Personalized Transit Period Navigator tailored specifically for you.
                            </p>
                        </div>
                    </div>
                    <form action="/checkout4/charge.php" class="step4__form" method="post" id="payment-form">
                        <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                        <input type="hidden" name="tariff" value="<?php echo $_GET['tariff']; ?>">
                        <div class="step4__form__left">
                            <div class="step4__form__top">
                                Billing details
                            </div>
                            <div class="checkout__form">
                                <div class="step4__form__group">
                                    <div class="checkout__form__item">
                                        <p class="checkout__form__item__title">First Fame:</p>
                                        <input type="text" name="f_name" required placeholder="" class="form__item__input__val">
                                    </div>
                                    <div class="checkout__form__item">
                                        <p class="checkout__form__item__title">Last Name:</p>
                                        <input type="text" placeholder="" required name="l_name" class="form__item__input__val">
                                    </div>
                                </div>
                                <div class="checkout__form__item">
                                    <p class="checkout__form__item__title">Email Address:</p>
                                    <input type="email" placeholder="" required name="email" class="form__item__input__val">
                                </div>
                                <div class="step4__form__group">
                                    <div class="checkout__form__item">
                                        <p class="checkout__form__item__title">Street Address:</p>
                                        <input type="text" placeholder="" name="street" class="form__item__input__val">
                                    </div>
                                    <div class="checkout__form__item">
                                        <p class="checkout__form__item__title">Apartment, suite, init, etc.
                                            (optional)</p>
                                        <input type="text" placeholder="" name="apartment" class="form__item__input__val">
                                    </div>
                                </div>
                                <div class="step4__form__group">
                                    <div class="checkout__form__item">
                                        <p class="checkout__form__item__title">Town / City:</p>
                                        <input type="text" placeholder="" name="town" class="form__item__input__val">
                                    </div>
                                    <div class="checkout__form__item">
                                        <p class="checkout__form__item__title">Province:</p>
                                        <input type="text" placeholder="" name="province" class="form__item__input__val">
                                    </div>
                                </div>
                                <div class="checkout__form__item">
                                    <p class="checkout__form__item__title">Postal Code:</p>
                                    <input type="text" placeholder="" name="postal_code" class="form__item__input__val">
                                </div>
                                <div class="checkout__form__item">
                                    <p class="checkout__form__item__title">Country / Region:</p>
                                    <input type="text" placeholder="" name="country" class="form__item__input__val">
                                    <input type="hidden" placeholder="" name="question_id" id="question_id">
                                </div>
                                <div class="step4__form__switch">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                    <div class="step4__form__switch__info">
                                        <h2 class="step4__form__switch__title"> Get a Full Personality Profile to understand yourself better.<br>
                                        A Special one-time offer, only <span>$19</span> !</h2>
                                        <p class="step4__form__switch__desc">This numerology reading delves into over forty aspects of your chart, including your unique traits, why you are drawn to certain things, what makes you special, and how others see you. With this reading, you’ll understand your strengths and weaknesses. You will know yourself better, start living with confidence, and always do the best things for yourself.</p>
                                    </div>
                                </div>
                                <div class="step4__form__info">
                                    <div class="step4__form__info__desc">
                                        <p>* 30 days money back guarantee included</p>
                                        <p>* 5 free bonuses included</p>
                                    </div>
                                    <p>If for any reason you are not satisfied, simply send an email to my team within 30 days of your order, and they will process a refund without any further questions and you can keep the reading with all of the bonuses as a token of appreciation for taking the brave step to improve your life.</p>
                                </div>
                            </div>
                        </div>
                        <div class="step4__form__right">
                            <div class="step4__form__top">
                                Your order
                            </div>
                            <div class="checkout__form">
                                <div class="step4__form2__group">
                                    <div>
                                        <p>Product</p>
                                        <p>Subtotal</p>
                                    </div>
                                </div>
                                <div class="step4__form2__group">
                                    <div>
                                        <p>Personalized Transit Period Navigator 
                                            (12&nbsp;Months)</p>
                                        <p>$ <?php echo number_format((float)$amount, 2, '.', ''); ?></p>
                                    </div>
                                </div>
                                <div class="step4__form2__group">
                                    <div>
                                        <p>Subtotal</p>
                                        <p>$ <?php echo number_format((float)$amount, 2, '.', ''); ?></p>
                                    </div>
                                    <div>
                                        <p>Tax</p>
                                        <p>$0.00</p>
                                    </div>
                                </div>
                                <div class="step4__form__right__desc">
                                    <p>* 30 days money back guarantee included</p>
                                    <p>* 5 free bonuses included</p>
                                </div>

                                    <div class="form-row">
                                        <label for="card-element">
                                            Credit or debit card
                                        </label>
                                        <div id="card-element" style="margin-top: 20px">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>

                                        <!-- Used to display Element errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>

                                    <div class="checkout__bottom">
                                        <button type="button" onclick="confirmPayment()" class="checkout__btn">Continue</button>
                                    </div>

                            </div>
                        </div>
                    </form>
                    <div class="step4__bottom">
                        DISCLAIMER: The information we provide is for entertainment purposes only and should not be used as a substitute for professional advice or services. We cannot guarantee the accuracy of the information provided, and it may contain mistakes. We will not be held responsible for any interpretation or application of this information. If you have any serious health concerns, mental health issues, or other serious problems, it is strongly recommended that you seek the advice of a qualified professional. By using our services, reading our pages, and submitting an order, you agree to abide by our full Terms of Service.
                    </div>
                </div>
            </section>
        </main>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="../assets/js/checkout.js"></script>
        <script>
            $(document).ready(function(){
                const form1Data = localStorage.getItem('form_data');
                let decoded = JSON.parse(form1Data);
                let question_id;
                decoded.map(data => {
                    if(data.question_id){
                        question_id = data.question_id;
                    }
                })
                $('#question_id').val(question_id);
            })
        </script>
    </body>
</html>