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
                            <div class="checkout__list__item">
                                <p class="checkout__list__item__top"> Select Guide</p>
                                <p class="checkout__list__item__bottom"><span>3</span></p>
                            </div>
                            <div class="checkout__list__item">
                                <p class="checkout__list__item__top">Sumbit Request</p>
                                <p class="checkout__list__item__bottom"><span>4</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="step2">
                <div class="container">
                    <div class="checkout__wrapper">
                        <form class="checkout__content">
                            <p class="checkout__top">
                                <span>Step 2: </span>
                                In order to move forward with your request and ensure that the navigator can assist you effectively, please answer the following question.
                            </p>
                            <div class="checkout__form">
                                <p class="step2__desc">
                                    What are the most important aspects of your life that you need help with? Your answer will be completey confidential.
                                </p>
                                <div class="step2__group">
                                    <div class="checkbox">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="love" value="">
                                            <span>Love</span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="luck" value="">
                                            <span>Luck</span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="work" value="">
                                            <span>Work</span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="family" value="">
                                            <span>Family</span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="vitality" value="">
                                            <span>Vitality</span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="social" value="">
                                            <span>Social Life</span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="spiritually" value="">
                                            <span>Spiritually</span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="self" value="">
                                            <span>Self Development</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__bottom">
                                <button type="button" class="checkout__btn" onclick="gotoThirdStep()">Continue</button>
                            </div>
                        </form>
                        <div class="checkout__img">
                            <picture  class="checkout__img__item">
                                <source media="(max-width: 767px)" srcset="../assets/img/checkout/step2_mb.png">
                                <source media="(min-width: 768px)" srcset="../assets/img/checkout/step2.png">
                                <img alt="" src="../assets/img/checkout/step2.png">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="../assets/js/checkout.js"></script>
    </body>
</html>