<!doctype html>
<html lang="en">


<!-- Mirrored from risingtheme.com/html/demo-grocee/grocee/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2024 07:30:38 GMT -->

<head>
    <meta charset="utf-8">
    <title>Grocee - Checkout</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= BASE_URL ?>assets/client/assets/img/favicon.ico">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/assets/css/plugins/glightbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/assets/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/assets/css/style.css">

</head>

<body>

    <!-- Start preloader -->
    <!-- <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>	

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div> -->
    <!-- End preloader -->

    <!-- Start checkout page area -->
    <div class="checkout__page--area">
        <div class="container">
            <form action="<?= BASE_URL . '?act=order_purchase' ?>" method="POST">
                <div class="checkout__page--inner d-flex">
                    <div class="main checkout__mian">
                        <header class="main__header checkout__mian--header mb-30">
                            <h1 class="main__logo--title"><a class="logo logo__left mb-20" href="<?= BASE_URL ?>">Vocalo Pizza</a></h1>
                        </header>
                        <main class="main__content_wrapper section--padding pt-0">
                            <form action="<?= BASE_URL . '?act=order_purchase' ?>" method="POST">
                                <div class="checkout__content--step section__contact--information">
                                    <div class="section__header checkout__section--header d-flex align-items-center justify-content-between mb-25">
                                        <h2 class="section__header--title h3">Contact information</h2>
                                        <p class="layout__flex--item">
                                            Already have an account?
                                            <a class="layout__flex--item__link" href="login.html">Log in</a>
                                        </p>
                                    </div>
                                    <div class="customer__information">
                                        <div class="checkout__email--phone mb-12">
                                            <label>
                                                <input class="checkout__input--field border-radius-5" required placeholder="Email" type="email" id="user_email" name="user_email" value="<?= $_SESSION['user']['email'] ?>">
                                            </label>
                                        </div>
                                        <div class="checkout__checkbox">
                                            <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label" for="check1">
                                                Email me with news and offers</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__content--step section__shipping--address">
                                    <div class="section__header mb-25">
                                        <h2 class="section__header--title h3">Shipping address</h2>
                                    </div>
                                    <div class="section__shipping--address__content">
                                        <div class="row">
                                            <!-- <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list ">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="First name (optional)" type="text">
                                                    </label>
                                                </div>
                                            </div> -->
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" required placeholder="User name" type="text" id="user_name" name="user_name" value="<?= $_SESSION['user']['name'] ?>">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" required placeholder="Address" type="text" id="user_address" name="user_address">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" required placeholder="Mobile phone number" type="tel" id="user_phone" name="user_phone">
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list checkout__input--select select">
                                                    <label class="checkout__select--label" for="country">Country/region</label>
                                                    <select class="checkout__input--select__field border-radius-5" id="country">
                                                        <option value="1">India</option>
                                                        <option value="2">United States</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-12">
                                                <div class="checkout__input--list">
                                                    <label>
                                                        <input class="checkout__input--field border-radius-5" placeholder="Postal code" type="text">
                                                    </label>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="checkout__checkbox">
                                            <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label" for="check2">
                                                Save this information for next time</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__content--step__footer d-flex align-items-center">
                                    <button type="submit" name="payment_method" value="cash" class="btn">Pay with Cash</button>
                                    <p></p>
                                    <button type="submit" name="payment_method" value="momo" class="btn">Pay with MoMo</button>
                                    <a class="previous__link--content" href="<?= BASE_URL ?>" onclick="return !confirm('Thanh toán nốt đã rồi đi :(((')">Return to homepage</a>
                                </div>
                            </form>
                        </main>
                        <footer class="main__footer main__footer--wrapper">
                            <p class="copyright__content">Copyright © 2022 <a class="copyright__content--link text__primary" href="index.html">Grocee</a> . All Rights Reserved.Design By Grocee</p>
                        </footer>
                    </div>
                    <aside class="checkout__sidebar sidebar">
                        <div class="cart__table checkout__product--table">
                            <table class="cart__table--inner">
                                <tbody class="cart__table--body">
                                    <?php
                                    if (!empty($_SESSION['cart'])) :
                                        foreach ($_SESSION['cart'] as $productID => $sizes) :
                                            foreach ($sizes as $sizeID => $item) : ?>
                                                <tr class="cart__table--body__items">
                                                    <td class="cart__table--body__list">
                                                        <div class="product__image two  d-flex align-items-center">
                                                            <div class="product__thumbnail border-radius-5">
                                                                <a href="product-details.html"><img class="border-radius-5" src="<?= BASE_URL . $item['image'] ?>" alt="cart-product"></a>
                                                                <span class="product__thumbnail--quantity"><?= $item['quantity'] ?></span>
                                                            </div>
                                                            <div class="product__description">
                                                                <h3 class="product__description--name h4"><a href="product-details.html"><?= $item['name'] ?></a></h3>
                                                                <span class="product__description--variant">Size: <?= $item['size_name'] ?></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="cart__table--body__list">
                                                        <span class="cart__price">$<?php
                                                                                    $total = ($item['discount'] ?: $item['price']) * $item['quantity'];
                                                                                    echo number_format($total);
                                                                                    ?></span>
                                                    </td>
                                                </tr>
                                    <?php
                                            endforeach;
                                        endforeach;
                                    endif;
                                    ?>
                                </tbody>

                            </table>

                        </div>
                        <div class="checkout__discount--code">
                            <form class="d-flex" action="#">
                                <label>
                                    <input class="checkout__discount--code__input--field border-radius-5" placeholder="Gift card or discount code" type="text">
                                </label>
                                <button class="checkout__discount--code__btn btn border-radius-5" type="submit">Apply</button>
                            </form>
                        </div>
                        <div class="checkout__total">
                            <table class="checkout__total--table">
                                <tbody class="checkout__total--body">

                                    <tr class="checkout__total--items">
                                        <td class="checkout__total--title text-left">Subtotal </td>
                                        <td class="checkout__total--amount text-right">$860.00</td>
                                    </tr>
                                    <tr class="checkout__total--items">
                                        <td class="checkout__total--title text-left">Shipping</td>
                                        <td class="checkout__total--calculated__text text-right">Calculated at next step</td>
                                    </tr>
                                </tbody>
                                <tfoot class="checkout__total--footer">
                                    <tr class="checkout__total--footer__items">
                                        <td class="checkout__total--footer__title checkout__total--footer__list text-left">Total </td>
                                        <td class="checkout__total--footer__amount checkout__total--footer__list text-right">$<?= calculator_total_order() ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </aside>
                </div>
            </form>
        </div>
    </div>
    <!-- End checkout page area -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="<?= BASE_URL ?>assets/client/assets/js/vendor/popper.js" defer="defer"></script>
    <script src="<?= BASE_URL ?>assets/client/assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="<?= BASE_URL ?>assets/client/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?= BASE_URL ?>assets/client/assets/js/plugins/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Customscript js -->
    <script src="<?= BASE_URL ?>assets/client/assets/js/script.js"></script>
</body>

<!-- Mirrored from risingtheme.com/html/demo-grocee/grocee/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2024 07:30:38 GMT -->

</html>