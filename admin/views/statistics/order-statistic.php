<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?>
        <!-- <a href="<?= BASE_URL_ADMIN ?>?act=product-create" class="btn btn-primary">Create</a> -->
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
                            <th>CATEGORY</th>
                            <th>PRODUCT</th>
                            <th>ORDER QUANTITY</th>
                            <th>SOLD</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>CATEGORY</th>
                            <th>PRODUCT</th>
                            <th>ORDER QUANTITY</th>
                            <th>SOLD</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        $stt = 1;
                        foreach ($statistics as $stat)
                        : ?>
                            <tr>
                                <td><?= $stt++ ?></td>
                                <td><?= $stat['c_name'] ?></td>
                                <td><?= $stat['p_name'] ?></td>
                                <td><?= $stat['number_of_orders'] ?></td>
                                <td><?= $stat['total_sold'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>