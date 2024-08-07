<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Order Status</h6>
        </div>
        <div class="card-body">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <form action="" method="POST">
                <div class="mb-3 mt-3">
                    <label for="status_delivery" class="form-label">Delivery Status:</label>
                    <select name="status_delivery" id="status_delivery" class="form-control">
                        <?php foreach ($statuses as $statusId => $statusName) : ?>
                            <option value="<?= $statusId ?>" <?= ($order['status_delivery'] == $statusId) ? 'selected' : null ?>>
                                <?= $statusName ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= BASE_URL_ADMIN ?>?act=orders" class="btn btn-danger">Back to list</a>
            </form>
        </div>
    </div>
</div>
