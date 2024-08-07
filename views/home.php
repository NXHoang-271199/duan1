<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
<style>
    .size-options input[type="radio"] {
        display: none;
    }

    .size-options label {
        color: #000;
        cursor: pointer;
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-right: 10px;
        user-select: none;
    }

    .size-options input[type="radio"]:checked+label {
        background-color: #17a2b8;
        color: white;
    }
</style>
<main class="main__content_wrapper">
    <!-- Start slider section -->

    <!-- End slider section -->

    <!-- Start banner section -->

    <!-- End banner section -->

    <!-- Start product section -->
    <section class="product__section product__section--style3 section--padding pt-0">
        <div class="container">
            <div class="section__heading text-center mb-25">
                <!-- <span class="section__heading--subtitle">Recently added our store</span> -->
                <h2 class="section__heading--maintitle">Our Products</h2>
            </div>
            <ul class="product__tab--one product__tab--btn d-flex justify-content-center mb-35">
                <li class="product__tab--btn__list active" data-toggle="tab" data-target="#product_all">All</li>
                <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fresh">Fresh</li>
                <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fruits">Fruits </li>
                <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_nature">Nature</li>
                <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_recipies">Recipies </li>
                <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_vegetable">Vegetable </li>
            </ul>
            <div class="tab_content">
                <div id="product_all" class="tab_pane active show">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            <?php foreach ($products as $product) : ?>
                                <div class="col md-28">
                                    <div style="margin-top:20px;" class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="<?= BASE_URL ?>?act=product&id=<?= $product['p_id'] ?>">
                                                <img style="height:initial;" class="product__items--img product__primary--img" src="<?= BASE_URL . $product['p_image'] ?>" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <form method="POST" action="<?= BASE_URL . '?act=cart_add' ?>">
                                                <input type="hidden" name="productID" value="<?= $product['p_id'] ?>" />
                                                <input type="hidden" name="quantity" value="1" />

                                                <button class="btn btn-danger" type="submit">+ Add to cart</button>
                                                <h3 class="product__items--content__title h4"><a href="<?= BASE_URL ?>?act=product&id=<?= $product['p_id'] ?>"><?= $product['p_name'] ?></a></h3>
                                                <div class="product__items--price">
                                                    <span class="current__price">$<?= number_format($product['p_discount']) ?></span>
                                                    <span class="old__price">$<?= number_format($product['p_price']) ?></span>
                                                </div>
                                                <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                    <ul class="d-flex"></ul>
                                                    <span class="product__items--rating__count--number">Size: </span>
                                                    <div class="size-options">
                                                        <?php foreach ($product['sizes'] as $size) : ?>
                                                            <input id="sizes<?= $product['p_id'] ?>-<?= $size['s_id'] ?>" name="sizeID" type="radio" value="<?= $size['s_id'] ?>" required>
                                                            <label for="sizes<?= $product['p_id'] ?>-<?= $size['s_id'] ?>" class="badge text-bg-info"><?= $size['s_name'] ?></label>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <div id="product_fresh" class="tab_pane">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product7.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product8.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$38.00</span>
                                            <span class="old__price">$40.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$52.00</span>
                                            <span class="old__price">$62.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$58.00</span>
                                            <span class="old__price">$68.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$39.00</span>
                                            <span class="old__price">$59.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$39.00</span>
                                            <span class="old__price">$59.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$42.00</span>
                                            <span class="old__price">$48.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$42.00</span>
                                            <span class="old__price">$48.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product5.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product6.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$38.00</span>
                                            <span class="old__price">$44.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product_fruits" class="tab_pane">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product7.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product8.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$38.00</span>
                                            <span class="old__price">$40.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$52.00</span>
                                            <span class="old__price">$62.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$39.00</span>
                                            <span class="old__price">$59.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$42.00</span>
                                            <span class="old__price">$48.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$39.00</span>
                                            <span class="old__price">$59.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$42.00</span>
                                            <span class="old__price">$48.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product5.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product6.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$38.00</span>
                                            <span class="old__price">$44.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$58.00</span>
                                            <span class="old__price">$68.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product_nature" class="tab_pane">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$39.00</span>
                                            <span class="old__price">$59.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$42.00</span>
                                            <span class="old__price">$48.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$58.00</span>
                                            <span class="old__price">$68.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$42.00</span>
                                            <span class="old__price">$48.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product5.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product6.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$38.00</span>
                                            <span class="old__price">$44.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product7.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product8.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$38.00</span>
                                            <span class="old__price">$40.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$52.00</span>
                                            <span class="old__price">$62.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$39.00</span>
                                            <span class="old__price">$59.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product_recipies" class="tab_pane">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$52.00</span>
                                            <span class="old__price">$62.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$39.00</span>
                                            <span class="old__price">$59.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$42.00</span>
                                            <span class="old__price">$48.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$39.00</span>
                                            <span class="old__price">$59.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$42.00</span>
                                            <span class="old__price">$48.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product5.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product6.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$38.00</span>
                                            <span class="old__price">$44.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$58.00</span>
                                            <span class="old__price">$68.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product7.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product8.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$38.00</span>
                                            <span class="old__price">$40.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product_vegetable" class="tab_pane">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$39.00</span>
                                            <span class="old__price">$59.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$42.00</span>
                                            <span class="old__price">$48.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product5.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product6.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$38.00</span>
                                            <span class="old__price">$44.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product7.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product8.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$38.00</span>
                                            <span class="old__price">$40.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$52.00</span>
                                            <span class="old__price">$62.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$39.00</span>
                                            <span class="old__price">$59.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$42.00</span>
                                            <span class="old__price">$48.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale">Sale</span>
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">$58.00</span>
                                            <span class="old__price">$68.00</span>
                                        </div>
                                        <div class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="product__items--rating__list">
                                                    <span class="product__items--rating__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="product__items--rating__count--number">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product section -->

    <!-- Start banner section -->
    <section class="banner__section banner4__section section--padding pt-0">
        <div class="container">
            <div class="row mb--n30">
                <div class=" banner4__items--col col-lg-3 mb-30">
                    <div class="banner__items banner4__items position__relative">
                        <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img display-block" src="<?= BASE_URL ?>assets/client/assets/img/banner/4ps3.jpg" alt="banner-img">
                            <div class="banner4__items--content content__style1 text-center">
                                <h2 class="banner4__items--content__title text-white">56% off in all <br>
                                    products</h2>
                                <span class="banner4__items--content__btn text-white">Shop Now
                                    <svg class="banner4__items--content__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546" viewBox="0 0 10.383 7.546">
                                        <path data-name="Path 77287" d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z" transform="translate(0 -41.916)" fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="banner4__items--col col-lg-6 mb-30">
                    <div class="banner__items banner4__items position__relative mb-20">
                        <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img banner__img--max__height display-block" src="<?= BASE_URL ?>assets/client/assets/img/banner/4ps1.jpg" alt="banner-img">
                            <div class="banner4__items--content content__style2">
                                <h2 class="banner4__items--content__title style2 text-white">Organic Food <br>
                                    products</h2>
                                <span class="banner4__items--content__btn text-white">Shop Now
                                    <svg class="banner4__items--content__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546" viewBox="0 0 10.383 7.546">
                                        <path data-name="Path 77287" d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z" transform="translate(0 -41.916)" fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="banner__items banner4__items position__relative">
                        <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img banner__img--max__height display-block" src="<?= BASE_URL ?>assets/client/assets/img/banner/4ps2.png" alt="banner-img">
                            <div class="banner4__items--content content__style2">
                                <h2 class="banner4__items--content__title style2 text-white">Natural Fresh <br>
                                    Vegetable</h2>
                                <span class="banner4__items--content__btn text-white">Shop Now
                                    <svg class="banner4__items--content__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546" viewBox="0 0 10.383 7.546">
                                        <path data-name="Path 77287" d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z" transform="translate(0 -41.916)" fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="banner4__items--col col-lg-3 mb-30">
                    <div class="banner__items banner4__items position__relative">
                        <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img display-block" src="<?= BASE_URL ?>assets/client/assets/img/banner/4ps4.jpg" alt="banner-img">
                            <div class="banner4__items--content content__style1 text-center">
                                <h2 class="banner4__items--content__title text-white">Natural Fresh <br>
                                    Fruit</h2>
                                <span class="banner4__items--content__btn text-white">Shop Now
                                    <svg class="banner4__items--content__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546" viewBox="0 0 10.383 7.546">
                                        <path data-name="Path 77287" d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z" transform="translate(0 -41.916)" fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner section -->

    <!-- Start product section -->
    <!-- <section class="product__section product__section--style3 section--padding pt-0">
        <div class="container product3__section--container">
            <div class="section__heading text-center mb-40">
                <span class="section__heading--subtitle">Recently added our store</span>
                <h2 class="section__heading--maintitle">New Products</h2>
            </div>
            <div class="product__section--inner product3__section--inner__padding product__section--style3__inner product__swiper--activation swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product__items product__items2">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
                                    <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product7.png" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product8.png" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale">Sale</span>
                                </div>
                                <ul class="product__items--action">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="wishlist.html">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                            </svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="compare.html">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content product__items2--content text-center">
                                <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$38.00</span>
                                    <span class="old__price">$40.00</span>
                                </div>
                                <div class="product__items--rating d-flex justify-content-center align-items-center">
                                    <ul class="d-flex">
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <span class="product__items--rating__count--number">(24)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items product__items2">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
                                    <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale">Sale</span>
                                </div>
                                <ul class="product__items--action">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="wishlist.html">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                            </svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="compare.html">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content product__items2--content text-center">
                                <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$52.00</span>
                                    <span class="old__price">$62.00</span>
                                </div>
                                <div class="product__items--rating d-flex justify-content-center align-items-center">
                                    <ul class="d-flex">
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <span class="product__items--rating__count--number">(24)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items product__items2">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
                                    <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product1.png" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product2.png" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale">Sale</span>
                                </div>
                                <ul class="product__items--action">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="wishlist.html">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                            </svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="compare.html">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content product__items2--content text-center">
                                <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$39.00</span>
                                    <span class="old__price">$59.00</span>
                                </div>
                                <div class="product__items--rating d-flex justify-content-center align-items-center">
                                    <ul class="d-flex">
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <span class="product__items--rating__count--number">(24)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items product__items2">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
                                    <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product3.png" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product4.png" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale">Sale</span>
                                </div>
                                <ul class="product__items--action">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="wishlist.html">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                            </svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="compare.html">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content product__items2--content text-center">
                                <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$42.00</span>
                                    <span class="old__price">$48.00</span>
                                </div>
                                <div class="product__items--rating d-flex justify-content-center align-items-center">
                                    <ul class="d-flex">
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <span class="product__items--rating__count--number">(24)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items product__items2">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
                                    <img class="product__items--img product__primary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product5.png" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="<?= BASE_URL ?>assets/client/assets/img/product/product6.png" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale">Sale</span>
                                </div>
                                <ul class="product__items--action">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="wishlist.html">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                            </svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="compare.html">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                <path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content product__items2--content text-center">
                                <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$38.00</span>
                                    <span class="old__price">$44.00</span>
                                </div>
                                <div class="product__items--rating d-flex justify-content-center align-items-center">
                                    <ul class="d-flex">
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <span class="product__items--rating__count--number">(24)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section> -->
    <!-- End product section -->

    <!-- Start accordion section -->

    <!-- End accordion section -->

    <!-- Start instagram section -->

    <!-- End instagram section -->

    <!-- Start blog section -->
    <!-- <section class="blog__section section--padding pt-0">
        <div class="container blog__section--container">
            <div class="section__heading text-center mb-40">
                <span class="section__heading--subtitle">Our recent articles about Organic</span>
                <h2 class="section__heading--maintitle">Our Blog Posts</h2>
            </div>
            <div class="blog__section--inner blog__swiper--activation swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog__items">
                            <div class="blog__items--thumbnail">
                                <a class="blog__items--link" href="blog-details.html"><img class="blog__items--img" src="<?= BASE_URL ?>assets/client/assets/img/blog/blog1.png" alt="blog-img"></a>
                            </div>
                            <div class="blog__items--content">
                                <div class="blog__items--meta">
                                    <ul class="d-flex">
                                        <li class="blog__items--meta__list">
                                            <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                <path d="M74.705,129.154a6.088,6.088,0,0,0,1.085-5.056,6.167,6.167,0,0,0-2.539-3.839,6.608,6.608,0,0,0-4.958-1.207,6.475,6.475,0,0,0-4.356,2.53,6.056,6.056,0,0,0-1.174,5.154,14.881,14.881,0,0,1,.442,2.339,5.759,5.759,0,0,1-.494,2.849c-.065.136-.139.266-.213.4.029.012.043.022.055.02a6.859,6.859,0,0,0,3.154-1.268.223.223,0,0,1,.281-.043,6.72,6.72,0,0,0,4.658.7,6.475,6.475,0,0,0,4.058-2.585Zm2.717,4.572a2.756,2.756,0,0,1-.261-.425,4.205,4.205,0,0,1-.1-2.971,4.6,4.6,0,0,0-.139-3.087c-.113-.278-.267-.534-.427-.851-.031.134-.046.191-.057.25a6.593,6.593,0,0,1-.849,2.323,7.164,7.164,0,0,1-4.994,3.5c-.367.071-.741.095-1.119.142a.19.19,0,0,0,.036.055c.094.071.185.144.285.2a4.856,4.856,0,0,0,4.87.278.261.261,0,0,1,.23,0,4.912,4.912,0,0,0,1.725.752,2.973,2.973,0,0,0,.72.081C77.531,133.97,77.541,133.895,77.423,133.726Z" transform="translate(-62.5 -118.975)" fill="currentColor" />
                                            </svg>
                                            <span class="blog__items--meta__text">19 Comments</span>
                                        </li>
                                        <li class="blog__items--meta__list">
                                            <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                <path d="M75.809,63.836c0-.221,0-.429,0-.639a.915.915,0,0,0-.656-.869.959.959,0,0,0-1.057.321.97.97,0,0,0-.2.619v.559a.163.163,0,0,1-.164.161H72.716a.162.162,0,0,1-.164-.161c0-.192,0-.377,0-.564a.959.959,0,0,0-1.918-.06c-.005.206,0,.413,0,.62a.163.163,0,0,1-.164.161H69.428a.162.162,0,0,1-.164-.161,5.7,5.7,0,0,0-.009-.768.849.849,0,0,0-.627-.725.93.93,0,0,0-.942.185.952.952,0,0,0-.329.79c0,.175,0,.35,0,.533A.163.163,0,0,1,67.2,64H64.363a.162.162,0,0,0-.164.161V77.113a.163.163,0,0,0,.164.161H79.036a.162.162,0,0,0,.164-.161V64.158A.163.163,0,0,0,79.036,64H75.972A.161.161,0,0,1,75.809,63.836ZM68.7,76.636h-3.68a.162.162,0,0,1-.164-.161V73.913a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.561A.162.162,0,0,1,68.7,76.636Zm0-3.543H65.018a.162.162,0,0,1-.164-.161V70.224a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.708A.163.163,0,0,1,68.7,73.093Zm0-3.685H65.018a.162.162,0,0,1-.164-.161v-2.6a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.6A.162.162,0,0,1,68.7,69.408Zm4.9,7.23H69.71a.162.162,0,0,1-.164-.161V73.921a.163.163,0,0,1,.164-.161H73.6a.162.162,0,0,1,.164.161v2.557A.16.16,0,0,1,73.6,76.638Zm.172-3.632c0,.05-.077.089-.169.089h-3.9a.162.162,0,0,1-.164-.161v-2.71c0-.089.043-.163.093-.166l.093-.005c1.282,0,2.563,0,3.844,0,.155,0,.208.034.207.2-.007.89,0,1.783-.005,2.672A.747.747,0,0,1,73.776,73.006Zm.005-3.694c0,.05-.074.091-.164.091H69.707a.162.162,0,0,1-.164-.161V66.636c0-.089.043-.161.1-.161h.1c1.282,0,2.563,0,3.844,0,.155,0,.207.036.2.2-.007.852,0,1.7,0,2.552v.091Zm.823.756h3.772a.162.162,0,0,1,.164.161v2.706a.163.163,0,0,1-.164.161H74.6a.162.162,0,0,1-.164-.161V70.227A.162.162,0,0,1,74.6,70.068Zm3.773,6.568H74.6a.162.162,0,0,1-.164-.161V73.918a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.557A.158.158,0,0,1,78.377,76.636Zm0-7.233H74.6a.162.162,0,0,1-.164-.161V66.648a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.593A.159.159,0,0,1,78.377,69.4Z" transform="translate(-64.2 -62.274)" fill="currentColor" />
                                            </svg>
                                            <span class="blog__items--meta__text">10 Feb 2022</span>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog__items--title"><a href="blog-details.html">Aypi Non Habent Claritatemnon Insitam</a></h3>
                                <p class="blog__items--desc">It is a long established fact that a reader will be by the readable content of a page when looking at its layout. The point of using </p>
                                <a class="blog__items--readmore" href="blog-details.html">Read more <svg class="blog__items--readmore__icon" xmlns="http://www.w3.org/2000/svg" width="6.2" height="6.2" viewBox="0 0 6.2 6.2">
                                        <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__items">
                            <div class="blog__items--thumbnail">
                                <a class="blog__items--link" href="blog-details.html"><img class="blog__items--img" src="<?= BASE_URL ?>assets/client/assets/img/blog/blog2.png" alt="blog-img"></a>
                            </div>
                            <div class="blog__items--content">
                                <div class="blog__items--meta">
                                    <ul class="d-flex">
                                        <li class="blog__items--meta__list">
                                            <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                <path d="M74.705,129.154a6.088,6.088,0,0,0,1.085-5.056,6.167,6.167,0,0,0-2.539-3.839,6.608,6.608,0,0,0-4.958-1.207,6.475,6.475,0,0,0-4.356,2.53,6.056,6.056,0,0,0-1.174,5.154,14.881,14.881,0,0,1,.442,2.339,5.759,5.759,0,0,1-.494,2.849c-.065.136-.139.266-.213.4.029.012.043.022.055.02a6.859,6.859,0,0,0,3.154-1.268.223.223,0,0,1,.281-.043,6.72,6.72,0,0,0,4.658.7,6.475,6.475,0,0,0,4.058-2.585Zm2.717,4.572a2.756,2.756,0,0,1-.261-.425,4.205,4.205,0,0,1-.1-2.971,4.6,4.6,0,0,0-.139-3.087c-.113-.278-.267-.534-.427-.851-.031.134-.046.191-.057.25a6.593,6.593,0,0,1-.849,2.323,7.164,7.164,0,0,1-4.994,3.5c-.367.071-.741.095-1.119.142a.19.19,0,0,0,.036.055c.094.071.185.144.285.2a4.856,4.856,0,0,0,4.87.278.261.261,0,0,1,.23,0,4.912,4.912,0,0,0,1.725.752,2.973,2.973,0,0,0,.72.081C77.531,133.97,77.541,133.895,77.423,133.726Z" transform="translate(-62.5 -118.975)" fill="currentColor" />
                                            </svg>
                                            <span class="blog__items--meta__text">19 Comments</span>
                                        </li>
                                        <li class="blog__items--meta__list">
                                            <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                <path d="M75.809,63.836c0-.221,0-.429,0-.639a.915.915,0,0,0-.656-.869.959.959,0,0,0-1.057.321.97.97,0,0,0-.2.619v.559a.163.163,0,0,1-.164.161H72.716a.162.162,0,0,1-.164-.161c0-.192,0-.377,0-.564a.959.959,0,0,0-1.918-.06c-.005.206,0,.413,0,.62a.163.163,0,0,1-.164.161H69.428a.162.162,0,0,1-.164-.161,5.7,5.7,0,0,0-.009-.768.849.849,0,0,0-.627-.725.93.93,0,0,0-.942.185.952.952,0,0,0-.329.79c0,.175,0,.35,0,.533A.163.163,0,0,1,67.2,64H64.363a.162.162,0,0,0-.164.161V77.113a.163.163,0,0,0,.164.161H79.036a.162.162,0,0,0,.164-.161V64.158A.163.163,0,0,0,79.036,64H75.972A.161.161,0,0,1,75.809,63.836ZM68.7,76.636h-3.68a.162.162,0,0,1-.164-.161V73.913a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.561A.162.162,0,0,1,68.7,76.636Zm0-3.543H65.018a.162.162,0,0,1-.164-.161V70.224a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.708A.163.163,0,0,1,68.7,73.093Zm0-3.685H65.018a.162.162,0,0,1-.164-.161v-2.6a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.6A.162.162,0,0,1,68.7,69.408Zm4.9,7.23H69.71a.162.162,0,0,1-.164-.161V73.921a.163.163,0,0,1,.164-.161H73.6a.162.162,0,0,1,.164.161v2.557A.16.16,0,0,1,73.6,76.638Zm.172-3.632c0,.05-.077.089-.169.089h-3.9a.162.162,0,0,1-.164-.161v-2.71c0-.089.043-.163.093-.166l.093-.005c1.282,0,2.563,0,3.844,0,.155,0,.208.034.207.2-.007.89,0,1.783-.005,2.672A.747.747,0,0,1,73.776,73.006Zm.005-3.694c0,.05-.074.091-.164.091H69.707a.162.162,0,0,1-.164-.161V66.636c0-.089.043-.161.1-.161h.1c1.282,0,2.563,0,3.844,0,.155,0,.207.036.2.2-.007.852,0,1.7,0,2.552v.091Zm.823.756h3.772a.162.162,0,0,1,.164.161v2.706a.163.163,0,0,1-.164.161H74.6a.162.162,0,0,1-.164-.161V70.227A.162.162,0,0,1,74.6,70.068Zm3.773,6.568H74.6a.162.162,0,0,1-.164-.161V73.918a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.557A.158.158,0,0,1,78.377,76.636Zm0-7.233H74.6a.162.162,0,0,1-.164-.161V66.648a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.593A.159.159,0,0,1,78.377,69.4Z" transform="translate(-64.2 -62.274)" fill="currentColor" />
                                            </svg>
                                            <span class="blog__items--meta__text">10 Feb 2022</span>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog__items--title"><a href="blog-details.html">Lorem ipsum dolor sit amet are consecte.</a></h3>
                                <p class="blog__items--desc">It is a long established fact that a reader will be by the readable content of a page when looking at its layout. The point of using </p>
                                <a class="blog__items--readmore" href="blog-details.html">Read more <svg class="blog__items--readmore__icon" xmlns="http://www.w3.org/2000/svg" width="6.2" height="6.2" viewBox="0 0 6.2 6.2">
                                        <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__items">
                            <div class="blog__items--thumbnail">
                                <a class="blog__items--link" href="blog-details.html"><img class="blog__items--img" src="<?= BASE_URL ?>assets/client/assets/img/blog/blog3.png" alt="blog-img"></a>
                            </div>
                            <div class="blog__items--content">
                                <div class="blog__items--meta">
                                    <ul class="d-flex">
                                        <li class="blog__items--meta__list">
                                            <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                <path d="M74.705,129.154a6.088,6.088,0,0,0,1.085-5.056,6.167,6.167,0,0,0-2.539-3.839,6.608,6.608,0,0,0-4.958-1.207,6.475,6.475,0,0,0-4.356,2.53,6.056,6.056,0,0,0-1.174,5.154,14.881,14.881,0,0,1,.442,2.339,5.759,5.759,0,0,1-.494,2.849c-.065.136-.139.266-.213.4.029.012.043.022.055.02a6.859,6.859,0,0,0,3.154-1.268.223.223,0,0,1,.281-.043,6.72,6.72,0,0,0,4.658.7,6.475,6.475,0,0,0,4.058-2.585Zm2.717,4.572a2.756,2.756,0,0,1-.261-.425,4.205,4.205,0,0,1-.1-2.971,4.6,4.6,0,0,0-.139-3.087c-.113-.278-.267-.534-.427-.851-.031.134-.046.191-.057.25a6.593,6.593,0,0,1-.849,2.323,7.164,7.164,0,0,1-4.994,3.5c-.367.071-.741.095-1.119.142a.19.19,0,0,0,.036.055c.094.071.185.144.285.2a4.856,4.856,0,0,0,4.87.278.261.261,0,0,1,.23,0,4.912,4.912,0,0,0,1.725.752,2.973,2.973,0,0,0,.72.081C77.531,133.97,77.541,133.895,77.423,133.726Z" transform="translate(-62.5 -118.975)" fill="currentColor" />
                                            </svg>
                                            <span class="blog__items--meta__text">19 Comments</span>
                                        </li>
                                        <li class="blog__items--meta__list">
                                            <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                <path d="M75.809,63.836c0-.221,0-.429,0-.639a.915.915,0,0,0-.656-.869.959.959,0,0,0-1.057.321.97.97,0,0,0-.2.619v.559a.163.163,0,0,1-.164.161H72.716a.162.162,0,0,1-.164-.161c0-.192,0-.377,0-.564a.959.959,0,0,0-1.918-.06c-.005.206,0,.413,0,.62a.163.163,0,0,1-.164.161H69.428a.162.162,0,0,1-.164-.161,5.7,5.7,0,0,0-.009-.768.849.849,0,0,0-.627-.725.93.93,0,0,0-.942.185.952.952,0,0,0-.329.79c0,.175,0,.35,0,.533A.163.163,0,0,1,67.2,64H64.363a.162.162,0,0,0-.164.161V77.113a.163.163,0,0,0,.164.161H79.036a.162.162,0,0,0,.164-.161V64.158A.163.163,0,0,0,79.036,64H75.972A.161.161,0,0,1,75.809,63.836ZM68.7,76.636h-3.68a.162.162,0,0,1-.164-.161V73.913a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.561A.162.162,0,0,1,68.7,76.636Zm0-3.543H65.018a.162.162,0,0,1-.164-.161V70.224a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.708A.163.163,0,0,1,68.7,73.093Zm0-3.685H65.018a.162.162,0,0,1-.164-.161v-2.6a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.6A.162.162,0,0,1,68.7,69.408Zm4.9,7.23H69.71a.162.162,0,0,1-.164-.161V73.921a.163.163,0,0,1,.164-.161H73.6a.162.162,0,0,1,.164.161v2.557A.16.16,0,0,1,73.6,76.638Zm.172-3.632c0,.05-.077.089-.169.089h-3.9a.162.162,0,0,1-.164-.161v-2.71c0-.089.043-.163.093-.166l.093-.005c1.282,0,2.563,0,3.844,0,.155,0,.208.034.207.2-.007.89,0,1.783-.005,2.672A.747.747,0,0,1,73.776,73.006Zm.005-3.694c0,.05-.074.091-.164.091H69.707a.162.162,0,0,1-.164-.161V66.636c0-.089.043-.161.1-.161h.1c1.282,0,2.563,0,3.844,0,.155,0,.207.036.2.2-.007.852,0,1.7,0,2.552v.091Zm.823.756h3.772a.162.162,0,0,1,.164.161v2.706a.163.163,0,0,1-.164.161H74.6a.162.162,0,0,1-.164-.161V70.227A.162.162,0,0,1,74.6,70.068Zm3.773,6.568H74.6a.162.162,0,0,1-.164-.161V73.918a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.557A.158.158,0,0,1,78.377,76.636Zm0-7.233H74.6a.162.162,0,0,1-.164-.161V66.648a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.593A.159.159,0,0,1,78.377,69.4Z" transform="translate(-64.2 -62.274)" fill="currentColor" />
                                            </svg>
                                            <span class="blog__items--meta__text">10 Feb 2022</span>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog__items--title"><a href="blog-details.html">Ratione nobis the are delectus in impedit?</a></h3>
                                <p class="blog__items--desc">It is a long established fact that a reader will be by the readable content of a page when looking at its layout. The point of using </p>
                                <a class="blog__items--readmore" href="blog-details.html">Read more <svg class="blog__items--readmore__icon" xmlns="http://www.w3.org/2000/svg" width="6.2" height="6.2" viewBox="0 0 6.2 6.2">
                                        <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__items">
                            <div class="blog__items--thumbnail">
                                <a class="blog__items--link" href="blog-details.html"><img class="blog__items--img" src="<?= BASE_URL ?>assets/client/assets/img/blog/blog1.png" alt="blog-img"></a>
                            </div>
                            <div class="blog__items--content">
                                <div class="blog__items--meta">
                                    <ul class="d-flex">
                                        <li class="blog__items--meta__list">
                                            <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                <path d="M74.705,129.154a6.088,6.088,0,0,0,1.085-5.056,6.167,6.167,0,0,0-2.539-3.839,6.608,6.608,0,0,0-4.958-1.207,6.475,6.475,0,0,0-4.356,2.53,6.056,6.056,0,0,0-1.174,5.154,14.881,14.881,0,0,1,.442,2.339,5.759,5.759,0,0,1-.494,2.849c-.065.136-.139.266-.213.4.029.012.043.022.055.02a6.859,6.859,0,0,0,3.154-1.268.223.223,0,0,1,.281-.043,6.72,6.72,0,0,0,4.658.7,6.475,6.475,0,0,0,4.058-2.585Zm2.717,4.572a2.756,2.756,0,0,1-.261-.425,4.205,4.205,0,0,1-.1-2.971,4.6,4.6,0,0,0-.139-3.087c-.113-.278-.267-.534-.427-.851-.031.134-.046.191-.057.25a6.593,6.593,0,0,1-.849,2.323,7.164,7.164,0,0,1-4.994,3.5c-.367.071-.741.095-1.119.142a.19.19,0,0,0,.036.055c.094.071.185.144.285.2a4.856,4.856,0,0,0,4.87.278.261.261,0,0,1,.23,0,4.912,4.912,0,0,0,1.725.752,2.973,2.973,0,0,0,.72.081C77.531,133.97,77.541,133.895,77.423,133.726Z" transform="translate(-62.5 -118.975)" fill="currentColor" />
                                            </svg>
                                            <span class="blog__items--meta__text">19 Comments</span>
                                        </li>
                                        <li class="blog__items--meta__list">
                                            <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                <path d="M75.809,63.836c0-.221,0-.429,0-.639a.915.915,0,0,0-.656-.869.959.959,0,0,0-1.057.321.97.97,0,0,0-.2.619v.559a.163.163,0,0,1-.164.161H72.716a.162.162,0,0,1-.164-.161c0-.192,0-.377,0-.564a.959.959,0,0,0-1.918-.06c-.005.206,0,.413,0,.62a.163.163,0,0,1-.164.161H69.428a.162.162,0,0,1-.164-.161,5.7,5.7,0,0,0-.009-.768.849.849,0,0,0-.627-.725.93.93,0,0,0-.942.185.952.952,0,0,0-.329.79c0,.175,0,.35,0,.533A.163.163,0,0,1,67.2,64H64.363a.162.162,0,0,0-.164.161V77.113a.163.163,0,0,0,.164.161H79.036a.162.162,0,0,0,.164-.161V64.158A.163.163,0,0,0,79.036,64H75.972A.161.161,0,0,1,75.809,63.836ZM68.7,76.636h-3.68a.162.162,0,0,1-.164-.161V73.913a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.561A.162.162,0,0,1,68.7,76.636Zm0-3.543H65.018a.162.162,0,0,1-.164-.161V70.224a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.708A.163.163,0,0,1,68.7,73.093Zm0-3.685H65.018a.162.162,0,0,1-.164-.161v-2.6a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.6A.162.162,0,0,1,68.7,69.408Zm4.9,7.23H69.71a.162.162,0,0,1-.164-.161V73.921a.163.163,0,0,1,.164-.161H73.6a.162.162,0,0,1,.164.161v2.557A.16.16,0,0,1,73.6,76.638Zm.172-3.632c0,.05-.077.089-.169.089h-3.9a.162.162,0,0,1-.164-.161v-2.71c0-.089.043-.163.093-.166l.093-.005c1.282,0,2.563,0,3.844,0,.155,0,.208.034.207.2-.007.89,0,1.783-.005,2.672A.747.747,0,0,1,73.776,73.006Zm.005-3.694c0,.05-.074.091-.164.091H69.707a.162.162,0,0,1-.164-.161V66.636c0-.089.043-.161.1-.161h.1c1.282,0,2.563,0,3.844,0,.155,0,.207.036.2.2-.007.852,0,1.7,0,2.552v.091Zm.823.756h3.772a.162.162,0,0,1,.164.161v2.706a.163.163,0,0,1-.164.161H74.6a.162.162,0,0,1-.164-.161V70.227A.162.162,0,0,1,74.6,70.068Zm3.773,6.568H74.6a.162.162,0,0,1-.164-.161V73.918a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.557A.158.158,0,0,1,78.377,76.636Zm0-7.233H74.6a.162.162,0,0,1-.164-.161V66.648a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.593A.159.159,0,0,1,78.377,69.4Z" transform="translate(-64.2 -62.274)" fill="currentColor" />
                                            </svg>
                                            <span class="blog__items--meta__text">10 Feb 2022</span>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog__items--title"><a href="blog-details.html">Aypi Non Habent Claritatemnon Insitam</a></h3>
                                <p class="blog__items--desc">It is a long established fact that a reader will be by the readable content of a page when looking at its layout. The point of using </p>
                                <a class="blog__items--readmore" href="blog-details.html">Read more <svg class="blog__items--readmore__icon" xmlns="http://www.w3.org/2000/svg" width="6.2" height="6.2" viewBox="0 0 6.2 6.2">
                                        <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section> -->
    <!-- End blog section -->

    <!-- Start brand logo section -->
    <div class="brand__logo--section section--padding pt-0">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="brand__logo--section__inner d-flex justify-content-between align-items-center">
                        <div class="brand__logo--items">
                            <img class="brand__logo--items__thumbnail--img display-block" src="<?= BASE_URL ?>assets/client/assets/img/logo/brand-logo1.png" alt="brand logo">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--items__thumbnail--img display-block" src="<?= BASE_URL ?>assets/client/assets/img/logo/brand-logo2.png" alt="brand logo">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--items__thumbnail--img display-block" src="<?= BASE_URL ?>assets/client/assets/img/logo/brand-logo3.png" alt="brand logo">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--items__thumbnail--img display-block" src="<?= BASE_URL ?>assets/client/assets/img/logo/brand-logo4.png" alt="brand logo">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--items__thumbnail--img display-block" src="<?= BASE_URL ?>assets/client/assets/img/logo/brand-logo5.png" alt="brand logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End brand logo section -->

    <!-- Start shipping section -->
    <section class="shipping__section2 shipping__style3">
        <div class="container">
            <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="<?= BASE_URL ?>assets/client/assets/img/other/shipping1.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Shipping</h2>
                        <p class="shipping__items2--content__desc">From handpicked sellers</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="<?= BASE_URL ?>assets/client/assets/img/other/shipping2.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Payment</h2>
                        <p class="shipping__items2--content__desc">Visa, Paypal, Master</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="<?= BASE_URL ?>assets/client/assets/img/other/shipping3.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Return</h2>
                        <p class="shipping__items2--content__desc">30 day guarantee</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img class="display-block" src="<?= BASE_URL ?>assets/client/assets/img/other/shipping4.png" alt="shipping img">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">Support</h2>
                        <p class="shipping__items2--content__desc">Support every time</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shipping section -->
</main>