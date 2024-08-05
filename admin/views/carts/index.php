<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?>
        <a href="<?= BASE_URL_ADMIN ?>?act=cart-create" class="btn btn-primary">Create</a>
    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Product list
            </h6>
        </div>
        <div class="card-body">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>CART_ID</th>
                            <th>PRODUCT_ID</th>
                            <th>USER_ID</th>
                            <th>SIZE</th>
                            <th>PRICE</th>
                            <th>TOTAL PRICE</th>
                            <th>IMAGE</th>
                            <th>QUANTITY</th>
                            <th>CATEGORY</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>USER_ID</th>
                            <th>PRODUCT_ID</th>
                            <th>SIZE</th>
                            <th>PRICE</th>
                            <th>TOTAL PRICE</th>
                            <th>IMAGE</th>
                            <th>QUANTITY</th>
                            <th>CATEGORY</th>
                            <th>ACTION</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        foreach ($carts as $cart) : ?>
                            <tr>
                                <td><?= $cart['ci_id'] ?></td>
                                <td><?= $cart['ci_product_id'] ?></td>
                                <td><?= $cart['c_user_id'] ?></td>
                                <td><?= $cart['s_name'] ?></td>
                                <td><?= number_format($cart['p_discount'] ?: $cart['p_price']) ?></td>
                                <td><?php $total = ($cart['p_discount'] ?: $cart['p_price']) * $cart['ci_quantity'];
                                    echo number_format($total); ?></td>
                                <td><img src="<?= BASE_URL . $cart['p_image'] ?>" alt="" width="100px"></td>
                                <td><?= $cart['ci_quantity'] ?></td>
                                <td><?= $cart['p_name'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=cart-detail&id=<?= $cart['ci_id'] ?>" class="btn btn-info">Show</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=cart-update&id=<?= $cart['ci_id'] ?>" class="btn btn-warning">Update</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=cart-delete&cart_id=<?= $cart['ci_cart_id'] ?>&product_id=<?= $cart['ci_product_id'] ?>&size_id=<?= $cart['ci_size_id'] ?>" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>