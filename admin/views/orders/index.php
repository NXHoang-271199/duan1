<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?>
        <a href="<?= BASE_URL_ADMIN ?>?act=order-create" class="btn btn-primary">Create</a>
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
                            <th>ID</th>
                            <th>USERNAME</th>
                            <th>DATE_CREATED</th>
                            <th>TOTAL</th>
                            <th>PAYMENT_METHOD</th>
                            <th>PAYMENT_STATUS</th>
                            <th>DELIVERY_STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>USERNAME</th>
                            <th>DATE_CREATED</th>
                            <th>TOTAL</th>
                            <th>PAYMENT_METHOD</th>
                            <th>PAYMENT_STATUS</th>
                            <th>DELIVERY_STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        foreach ($orders as $order) : ?>
                            <tr>
                                <td><?= $order['id'] ?></td>
                                <td><?= $order['user_name'] ?></td>
                                <td><?= $order['created_at'] ?></td>
                                <td><?= $order['total_bill'] ?></td>
                                <td><?= getPaymentMethodBadge($order['payment_method']); ?></td>
                                <td><?= $order['status_payment'] == STATUS_PAYMENT_PAID ? '<span class="badge badge-success">Paid</span>' : '<span class="badge badge-danger fs-5">Unpaid</span>' ?></td>
                                <td><?= getOrderStatus($order['status_delivery']);  ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['id'] ?>" class="btn btn-info">Show</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-update&id=<?= $order['id'] ?>" class="btn btn-warning">Update</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-delete&id=<?= $order['id'] ?>" onclick="return confirm('Are you sure you want to delete this')" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>