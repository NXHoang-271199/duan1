<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?>
        <a href="<?= BASE_URL_ADMIN ?>?act=comment-create" class="btn btn-primary">Create</a>
    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables Example
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
                            <th>CONTENT</th>
                            <th>PRODUCT NAME</th>
                            <th>USER NAME</th>
                            <th>CREATE_DATE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>CONTENT</th>
                            <th>PRODUCT NAME</th>
                            <th>USER NAME</th>
                            <th>CREATE_DATE</th>
                            <th>ACTION</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($comments as $comment) : ?>

                            <tr>
                                <td><?= $comment['cmt_id'] ?></td>
                                <td><?= $comment['cmt_content'] ?></td>
                                <td><?= $comment['p_name'] ?></td>
                                <td><?= $comment['u_name'] ?></td>
                                <td><?= $comment['p_created_at'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=comment-detail&id=<?= $comment['cmt_id'] ?>" class="btn btn-info">Show</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=comment-update&id=<?= $comment['cmt_id'] ?>" class="btn btn-warning">Update</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=comment-delete&id=<?= $comment['cmt_id'] ?>" onclick="return confirm('Are you sure you want to delete this')" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>