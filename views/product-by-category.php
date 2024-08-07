<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25"><?= $category['name'] ?></h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">Shop List</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->

<!-- Start shop section -->
<section class="shop__section section--padding">
    <div class="container-fluid">
        <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">
            <button class="widget__filter--btn d-flex d-lg-none align-items-center" data-offcanvas>
                <svg class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80" />
                    <circle cx="336" cy="128" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                    <circle cx="176" cy="256" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                    <circle cx="336" cy="384" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                </svg>
                <span class="widget__filter--btn__text">Filter</span>
            </button>
            <div class="product__view--mode d-flex align-items-center">
                <div class="product__view--mode__list product__short--by align-items-center d-lg-flex d-none ">
                    <label class="product__view--label">Prev Page :</label>
                    <div class="select shop__header--select">
                        <select class="product__view--select">
                            <option selected value="1">65</option>
                            <option value="2">40</option>
                            <option value="3">42</option>
                            <option value="4">57 </option>
                            <option value="5">60 </option>
                        </select>
                    </div>
                </div>
                <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                    <label class="product__view--label">Sort By :</label>
                    <div class="select shop__header--select">
                        <select class="product__view--select">
                            <option selected value="1">Sort by latest</option>
                            <option value="2">Sort by popularity</option>
                            <option value="3">Sort by newness</option>
                            <option value="4">Sort by rating </option>
                        </select>
                    </div>

                </div>
                <div class="product__view--mode__list">
                    <div class="product__tab--one product__grid--column__buttons d-flex justify-content-center">
                        <button class="product__grid--column__buttons--icons active" aria-label="grid btn" data-toggle="tab" data-target="#product_grid">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                <g transform="translate(-1360 -479)">
                                    <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4" transform="translate(1360 479)" fill="currentColor" />
                                    <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4" transform="translate(1360 484)" fill="currentColor" />
                                    <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4" transform="translate(1365 479)" fill="currentColor" />
                                    <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4" transform="translate(1365 484)" fill="currentColor" />
                                </g>
                            </svg>
                        </button>
                        <button class="product__grid--column__buttons--icons" aria-label="list btn" data-toggle="tab" data-target="#product_list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                    <g transform="translate(12 -2)">
                                        <g id="Group_1326" data-name="Group 1326">
                                            <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor" />
                                            <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor" />
                                        </g>
                                        <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                            <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor" />
                                            <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor" />
                                        </g>
                                        <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                            <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3" height="2" transform="translate(1364 487)" fill="currentColor" />
                                            <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9" height="2" transform="translate(1368 487)" fill="currentColor" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="product__view--mode__list product__view--search d-xl-block d-none ">
                    <form class="product__view--search__form" action="#">
                        <label>
                            <input class="product__view--search__input border-0" placeholder="Search by" type="text">
                        </label>
                        <button class="product__view--search__btn" aria-label="search btn" type="submit">
                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <p class="product__showing--count">Showing 1–9 of 21 results</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="shop__sidebar--widget widget__area d-none d-lg-block">
                    <div class="single__widget widget__bg">
                        <h2 class="widget__title h3">Categories</h2>
                        <ul class="widget__categories--menu">

                            <li class="widget__categories--menu__list">
                                <label class="widget__categories--menu__label d-flex align-items-center">
                                    <img class="widget__categories--menu__img" src="<?= BASE_URL ?>assets/client/assets/img/product/categories11.png" alt="categories-img">
                                    <span class="widget__categories--menu__text">Category List</span>
                                    <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                                        <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                    </svg>
                                </label>
                                <ul class="widget__categories--sub__menu">
                                    <li class="widget__categories--sub__menu--list">
                                        <?php foreach ($categoriesForMenu as $item) : ?>
                                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="<?= BASE_URL ?>?act=category&id=<?= $item['id'] ?>">
                                                <img class="widget__categories--sub__menu--img" src="<?= BASE_URL ?>assets/client/assets/img/product/categories12.png" alt="categories-img">
                                                <span class="widget__categories--sub__menu--text"><?= $item['name'] ?></span>
                                            </a>
                                        <?php endforeach; ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="shop__product--wrapper">
                    <div class="tab_content">
                        <div id="product_list" class="tab_pane active show">
                            <div class="product__section--inner product__section--style3__inner">
                                <div class="row row-cols-1 mb--n30">
                                    <?php foreach ($products as $product) : ?>
                                        <div class="col mb-30">
                                            <form method="POST" action="<?= BASE_URL . '?act=cart_add' ?>">
                                                <input type="hidden" name="productID" value="<?= $product['p_id'] ?>" />
                                                <input type="hidden" name="quantity" value="1" />
                                                <div class="product__items product__list--items d-flex">
                                                    <div class="product__items--thumbnail product__list--items__thumbnail">
                                                        <a class="product__items--link" href="<?= BASE_URL ?>?act=product&id=<?= $product['p_id'] ?>">
                                                            <img class="product__items--img product__primary--img" src="<?= $product['p_image'] ?>" alt="product-img">
                                                            <!-- <img class="product__items--img product__secondary--img" src="assets/img/product/product8.png" alt="product-img"> -->
                                                        </a>
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale"><?= $product['c_name'] ?></span>
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
                                                    <div class="product__list--items__content">
                                                        <h3 class="product__list--items__content--title h4 mb-10"><a href="<?= BASE_URL ?>?act=product&id=<?= $product['p_id'] ?>"><?= $product['p_name'] ?></a></h3>
                                                        <div class="product__items--price mb-10">
                                                            <span class="current__price">$<?= $product['p_discount'] ?></span>
                                                            <span class="old__price">$<?= $product['p_price'] ?></span>
                                                        </div>
                                                        <div class="product__items--rating mb-3 d-flex align-items-center">
                                                            <span class="me-2">Size: </span>
                                                            <div class="btn-group" role="group" aria-label="Size options">
                                                                <?php foreach (array_reverse($sizes) as $size) : ?>
                                                                    <input type="radio" class="btn-check" name="sizeID" id="sizes<?= $size['id'] ?>" value="<?= $size['id'] ?>" required>
                                                                    <label class="btn btn-outline-primary" for="sizes<?= $size['id'] ?>"><?= $size['name'] ?></label>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                        <p class="product__list--items__content--desc mb-20"><?= $product['p_description'] ?></p>
                                                        <button type="submit" class="btn add__to--cart__btn2">+ Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination__area bg__gray--color">
                        <nav class="pagination justify-content-center">
                            <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                <li class="pagination__list">
                                    <a href="shop.html" class="pagination__item--arrow  link ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292" />
                                        </svg>
                                        <span class="visually-hidden">page left arrow</span>
                                    </a>
                                <li>
                                <li class="pagination__list">
                                    <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
                                        <a href="<?= BASE_URL ?>?act=category&id=<?= $category['id'] ?>&page=<?= $i ?>" class="<?= ($i == ($_GET['page'] ?? 1)) ? 'pagination__item--current' : null ?> pagination__item "><?= $i ?></a>
                                    <?php endfor; ?>
                                </li>
                                <li class="pagination__list">
                                    <a href="shop.html" class="pagination__item--arrow  link ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                                        </svg>
                                        <span class="visually-hidden">page right arrow</span>
                                    </a>
                                <li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End shop section -->