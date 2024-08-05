        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25"><?= $title ?></h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Account Page</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->
        
        <!-- Start login section  -->
        <div class="login__section section--padding mb-80">
            <div class="container">
            <?php if (isset($_SESSION['errors'])) : ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($_SESSION['errors'] as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>
                <form action="" method="POST">
                    <div class="login__section--inner">
                        <div class="row row-cols-md-10 row-cols-1">
                            <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">Create an Account</h2>
                                        <p class="account__login--header__desc">Register here if you are a new customer</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <label for="name">
                                            <input class="account__login--input" placeholder="Username" type="text" id="name" name="name" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['name'] : null; ?>">
                                        </label>
                                        <label for="email">
                                            <input class="account__login--input" placeholder="Email Address" type="email" id="email" name="email" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['email'] : null; ?>">
                                        </label>
                                        <label for="password">
                                            <input class="account__login--input" placeholder="Password" type="password" id="password" name="password" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['password'] : null; ?>">
                                        </label>
                                        <!-- <label>
                                            <input class="account__login--input" placeholder="Confirm Password" type="password" name="password-confirm">
                                        </label> -->
                                        <button class="account__login--btn btn mb-10" type="submit">Submit & Register</button>
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check2">
                                                I have read and agree to the terms & conditions</label>
                                        </div>
                                        <p class="account__login--signup__text">Already Have an Account? <button  type="submit"><a href="<?= BASE_URL ?>?act=login">Sign in now</a></button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>     
        </div>
        <!-- End login section  -->

<?php if (isset($_SESSION['data'])) {
    unset($_SESSION['data']);
} ?>