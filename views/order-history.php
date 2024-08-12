<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Order History</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="<?= BASE_URL ?>">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">History</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <div class="my__account--section__inner">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="account__wrapper account__wrapper--style4 border-radius-10">
                            <div class="account__content">
                                <h2 class="account__content--title h3 mb-20">Orders History</h2>
                                <div class="account__table--area">
                                    <table class="account__table table table-bordered table-hover">
                                        <thead class="account__table--header table-success">
                                            <tr class="account__table--header__child">
                                                <th class="account__table--header__child--items">Order</th>
                                                <th class="account__table--header__child--items">Date</th>
                                                <th class="account__table--header__child--items">Payment Method</th>
                                                <th class="account__table--header__child--items">Payment Status</th>
                                                <th class="account__table--header__child--items">Delivery Status</th>
                                                <th class="account__table--header__child--items">Total</th>
                                                <th class="account__table--header__child--items">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="account__table--body mobile__none">
                                            <?php foreach ($orders as $order) : ?>
                                                <tr class="account__table--body__child">
                                                    <td class="account__table--body__child--items"><?php echo '#' . htmlspecialchars($order['o_id']); ?></td>
                                                    <td class="account__table--body__child--items"><?php echo date('F d, Y', strtotime($order['o_created_at'])); ?></td>
                                                    <td class="account__table--body__child--items"><?= getPaymentMethodBadge($order['o_payment_method']); ?></td>                                                    <td class="account__table--body__child--items">
                                                        <?= $order['o_status_payment'] == STATUS_PAYMENT_PAID ? '<span class="badge bg-success fs-5">Paid</span>' : '<span class="badge bg-danger fs-5">Unpaid</span>' ?>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <?= getOrderStatus($order['o_status_delivery']); ?>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <?= number_format($order['o_total_bill'], 2) . ' VNĐ'; ?>
                                                    </td>
                                                    <td class="account__table--body__child--items">
                                                        <?php if ($order['o_status_delivery'] == STATUS_DELIVERY_WFC) : ?>
                                                            <a class="badge bg-danger text-light fs-5" href="<?= BASE_URL ?>?act=order_cancel&order_id=<?= $order['o_id']; ?>">Cancel</a>
                                                        <?php else : ?>
                                                            <a class="badge bg-secondary text-light fs-5" href="#" onclick="return false;">Cancel</a>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="account__details">
                            <h4 class="account__details--title">Account details</h4>
                            <p class="account__details--desc"><?= $order['o_user_name'] ?><br> <?= $order['o_user_email'] ?> <br> <?= $order['o_user_phone'] ?> <br> <?= $order['o_user_address'] ?></p>
                            <a class="account__details--link" href="my-account-2.html">View Addresses (1)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->

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