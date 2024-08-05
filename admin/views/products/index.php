<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?>
        <a href="<?= BASE_URL_ADMIN ?>?act=product-create" class="btn btn-primary">Create</a>
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
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>DISCOUNT</th>
                            <th>IMAGE</th>
                            <th>DESCRIPTION</th>
                            <th>CATEGORY</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>DISCOUNT</th>
                            <th>IMAGE</th>
                            <th>DESCRIPTION</th>
                            <th>CATEGORY</th>
                            <th>ACTION</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        foreach ($products as $product) : ?>
                            <tr>
                                <td><?= $product['p_id'] ?></td>
                                <td><?= $product['p_name'] ?></td>
                                <td><?= $product['p_price'] ?></td>
                                <td><?= $product['p_discount'] ?></td>
                                <td><img src="<?= BASE_URL . $product['p_image'] ?>" alt="" width="100px"></td>
                                <td><?= $product['p_description'] ?></td>
                                <td><?= $product['c_name'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-detail&id=<?= $product['p_id'] ?>" class="btn btn-info">Show</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-update&id=<?= $product['p_id'] ?>" class="btn btn-warning">Update</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-delete&id=<?= $product['p_id'] ?>" onclick="return confirm('Are you sure you want to delete this')" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>