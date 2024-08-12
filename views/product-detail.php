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
                        <div class="product__media--preview swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href=""><img class="product__media--preview__items--img" src="<?= BASE_URL . $product['p_image'] ?>" alt="product-media-img"></a>
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
                                        <span class="reviews__summary--caption">Based on 2 reviews</span>
                                    </div>
                                    <a class="actions__newreviews--btn btn" href="#writereview">Write A Review</a>
                                </div>
                                <div class="reviews__comment--area">
                                    <?php if (!empty($comments)) : ?>
                                        <?php foreach ($comments as $comment) : ?>
                                            <div class="reviews__comment--list d-flex">
                                                <div class="reviews__comment--list__thumb me-3">
                                                    <img src="<?= BASE_URL . $comment['u_image'] ?>" alt="comment-author">
                                                </div>
                                                <div class="reviews__comment--list__content">
                                                    <div class="reviews__comment--list__meta d-flex justify-content-between">
                                                        <h3 class="reviews__comment--list__title h4"><?= $comment['u_name'] ?></h3>
                                                        <span class="reviews__comment--list__date"><?= $comment['comment_date'] ?></span>
                                                    </div>
                                                    <p class="reviews__comment--list__text"><?= $comment['comment_content'] ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p>No reviews yet.</p>
                                    <?php endif; ?>
                                </div>
                                <div id="writereview" class="reviews__write--form">
                                    <h2 class="reviews__write--title h4 mb-20">Write A Review</h2>
                                    <form action="<?= BASE_URL . '?act=add_comment' ?>" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Your Name</label>
                                                    <input type="text" id="name" name="name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Your Email</label>
                                                    <input type="email" id="email" name="email" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Your Review</label>
                                            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Review</button>
                                    </form>
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
    document.addEventListener('DOMContentLoaded', function () {
    const increaseButtons = document.querySelectorAll('.increase');
    const decreaseButtons = document.querySelectorAll('.decrease');
    const quantityInputs = document.querySelectorAll('.quantity__number');

    increaseButtons.forEach(button => {
        button.addEventListener('click', function () {
            const input = this.parentElement.querySelector('.quantity__number');
            let value = parseInt(input.value);
            if (!isNaN(value)) {
                input.value = value + 1;
            }
        });
    });

    decreaseButtons.forEach(button => {
        button.addEventListener('click', function () {
            const input = this.parentElement.querySelector('.quantity__number');
            let value = parseInt(input.value);
            if (!isNaN(value) && value > 1) {
                input.value = value - 1;
            }
        });
    });
});

</script>