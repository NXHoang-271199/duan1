<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Product Details</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Product Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start product details section -->
    <section class="product__details--section section--padding">
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-md-2">
                <div class="col">
                    <div class="product__details--media">
                        <div class="product__media--preview  swiper">
                            <div class="swiper-wrapper">
                                <div class=""><!-- <div class="swiper-slide"> -->
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href=""><img class="product__media--preview__items--img" src="<?= BASE_URL . $product['p_image'] ?>" alt="product-media-img"></a>
                                        <!-- <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="<?= BASE_URL ?>assets/client/assets/img/product/big-product1.jpg" data-gallery="product-media-preview">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                    <span class="visually-hidden">product view</span> 
                                                </a>
                                            </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product__details--info">
                        <form method="POST" action="<?= BASE_URL . '?act=cart_add' ?>">
                            <h2 class="product__details--info__title mb-15"><?= $product['p_name'] ?></h2>
                            <div class="product__details--info__price mb-15">
                                <span class="current__price"><?= $product['p_discount'] ?></span>
                                <span class="old__price"><?= $product['p_price'] ?></span>
                            </div>
                            <p class="product__details--info__desc mb-20"><?= $product['p_description'] ?></p>
                            <div class="product__variant--list mb-20">
                                <fieldset class="variant__input--fieldset">
                                    <legend class="product__variant--title mb-8">Size :</legend>
                                    <ul class="variant__size d-flex">
                                        <?php foreach ($sizes as $size) : ?>
                                            <li class="variant__size--list">
                                                <input id="sizes<?= $size['s_id'] ?>" name="sizeID" type="radio" value="<?= $size['s_id'] ?>" checked>
                                                <label class="variant__size--value red" for="sizes<?= $size['s_id'] ?>"><?= $size['s_name'] ?></label>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </fieldset>
                            </div>
                            <div class="product__variant--list quantity d-flex align-items-center mb-20">
                                <div class="quantity__box">
                                    <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">
                                        -
                                    </button>
                                    <label>
                                        <input type="number" name="quantity" class="quantity__number quickview__value--number" value="1" data-counter />
                                    </label>
                                    <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">
                                        +
                                    </button>
                                </div>
                                <input type="hidden" name="productID" value="<?= $product['p_id'] ?>" />
                                <button class="btn quickview__cart--btn" type="submit">Add To Cart</button>
                            </div>
                            <div class="product__variant--list mb-15">
                                <a class="variant__wishlist--icon mb-15" href="wishlist.html" title="Add to wishlist">
                                    <svg class="quickview__variant--wishlist__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                    </svg>
                                    Add to Wishlist
                                </a>
                                <button class="variant__buy--now__btn btn" type="submit">Buy it now</button>
                            </div>
                            <div class="product__variant--list mb-15">
                                        <div class="product__details--info__meta">
                                            <p class="product__details--info__meta--list"><strong>Type:</strong>  <span><?= $product['c_name'] ?></span> </p>
                                        </div>
                                    </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details section -->

    <!-- Start product details tab section -->
    <section class="product__details--tab__section section--padding">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <ul class="product__tab--one product__details--tab d-flex mb-30">
                        <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">Description</li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#reviews">Product Reviews</li>
                    </ul>
                    <div class="product__details--tab__inner border-radius-10">
                        <div class="tab_content">
                            <div id="description" class="tab_pane active show">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__step mb-30">
                                        <h2 class="product__tab--content__title h4 mb-10">Nam provident sequi</h2>
                                        <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro? Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis necessitatibus nam ab?</p>
                                    </div>
                                    <div class="product__tab--content__step">
                                        <!-- <h2 class="product__tab--content__title h4 mb-10">More Details</h2>
                                            <ul>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, dolorum?
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Magnam enim modi, illo harum suscipit tempore aut dolore?
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Numquam eaque mollitia fugiat laborum dolor tempora;
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Sit amet consectetur adipisicing elit.  Quo delectus repellat facere maiores.
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Repellendus itaque sit quia consequuntur, unde veritatis. dolorum?
                                                </li>
                                            </ul> -->
                                    </div>
                                </div>
                            </div>
                            <div id="reviews" class="tab_pane">
                                <div class="product__reviews">
                                    <div class="product__reviews--header">
                                        <h2 class="product__reviews--header__title h3 mb-20">Customer Reviews</h2>
                                        <?php if (isset($_SESSION['success'])) : ?>
                                            <div class="alert alert-success">
                                                <?= $_SESSION['success'] ?>
                                            </div>
                                            <?php unset($_SESSION['success']); ?>
                                        <?php endif; ?>
                                        <ul class="d-flex">
                                            <li class="reviews__ratting--list">
                                                <span class="reviews__ratting--icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="reviews__ratting--list">
                                                <span class="reviews__ratting--icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="reviews__ratting--list">
                                                <span class="reviews__ratting--icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="reviews__ratting--list">
                                                <span class="reviews__ratting--icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="reviews__ratting--list">
                                                <span class="reviews__ratting--icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="reviews__summary--caption">Based on 2 reviews</span>
                                    </div>
                                    <a class="actions__newreviews--btn btn" href="#writereview">Write A Review</a>
                                </div>
                                <div class="reviews__comment--area">
                                    <?php if (!empty($comments)) : ?>
                                        <?php foreach ($comments as $comment) : ?>
                                            <div class="reviews__comment--list d-flex">
                                                <div class="reviews__comment--thumb">
                                                    <img src="<?= BASE_URL ?>assets/client/assets/img/other/comment-thumb1.png" alt="comment-thumb">
                                                </div>
                                                <div class="reviews__comment--content">
                                                    <div class="reviews__comment--top d-flex justify-content-between">
                                                        <div class="reviews__comment--top__left">
                                                            <h3 class="reviews__comment--content__title h4"><?= htmlspecialchars($comment['u_name']) ?></h3>
                                                            <!-- <ul class="reviews__ratting d-flex">
                                                                <li class="reviews__ratting--list">
                                                                    <span class="reviews__ratting--icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </li>
                                                                <li class="reviews__ratting--list">
                                                                    <span class="reviews__ratting--icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </li>
                                                                <li class="reviews__ratting--list">
                                                                    <span class="reviews__ratting--icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </li>
                                                                <li class="reviews__ratting--list">
                                                                    <span class="reviews__ratting--icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </li>
                                                                <li class="reviews__ratting--list">
                                                                    <span class="reviews__ratting--icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2" />
                                                                        </svg>
                                                                    </span>
                                                                </li>
                                                            </ul> -->
                                                        </div>
                                                        <span class="reviews__comment--content__date"><?= htmlspecialchars($comment['created_at']) ?></span>
                                                    </div>
                                                    <p class="reviews__comment--content__desc"><?= htmlspecialchars($comment['content']) ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p>Không có comment nào cho sản phẩm này.</p>
                                    <?php endif; ?>
                                </div>
                                <div id="writereview" class="reviews__comment--reply__area">
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
                                    <form action="<?= BASE_URL ?>?act=comment_add" method="POST">
                                        <input type="hidden" name="product_id" value="<?= $product['p_id'] ?>">
                                        <h3 class="reviews__comment--reply__title mb-15">Add a review</h3>
                                        <div class="reviews__ratting d-flex align-items-center mb-20">
                                            <ul class="d-flex">
                                                <!-- Ratting icons -->
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-10">
                                                <textarea class="reviews__comment--reply__textarea" name="content" placeholder="Your Comments...."></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-15">
                                                <label>
                                                    <input class="reviews__comment--reply__input" placeholder="Your Name...." type="text" value="<?= $_SESSION['user']['name'] ?? null ?>" disabled>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-15">
                                                <label>
                                                    <input class="reviews__comment--reply__input" placeholder="Your Email...." type="email" value="<?= $_SESSION['user']['email'] ?? null ?>" disabled>
                                                </label>
                                            </div>
                                        </div>
                                        <button class="btn text-white" data-hover="Submit" type="submit">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="information" class="tab_pane">
                            <div class="product__tab--conten">
                                <div class="product__tab--content__step mb-30">
                                    <h2 class="product__tab--content__title h4 mb-10">Nam provident sequi</h2>
                                    <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro? Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis necessitatibus nam ab?</p>
                                </div>
                            </div>
                        </div>
                        <div id="custom" class="tab_pane">
                            <div class="product__tab--content">
                                <div class="product__tab--content__step mb-30">
                                    <h2 class="product__tab--content__title h4 mb-10">Nam provident sequi</h2>
                                    <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro? Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis necessitatibus nam ab?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End product details tab section -->
</main>
<script>
    var quantityEl = document.querySelector(".quantity__number");
    var incBtn = document.querySelector(".increase");
    var decBtn = document.querySelector(".decrease");

    incBtn.addEventListener("click", function(e) {
        e.preventDefault();
        let value = parseInt(quantityEl.value);
        value++;
        quantityEl.value = value;
    });

    decBtn.addEventListener("click", function(e) {
        e.preventDefault();
        let value = parseInt(quantityEl.value);
        if (value > 1) {
            value--;
        }
        quantityEl.value = value;
    });
</script>