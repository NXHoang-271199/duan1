<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                CREATE DATA
            </h6>
        </div>
        <div class="card-body">

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

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['name'] : null; ?>" placeholder="Enter name" name="name">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="image" class="form-label">Image:</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="category" class="form-label">Category:</label>
                            <select name="category" id="category" class="form-control">
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" class="form-control" id="price" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['price'] : null; ?>" placeholder="Enter price" name="price">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="discount" class="form-label">Discount:</label>
                            <input type="text" class="form-control" id="discount" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['discount'] : null; ?>" placeholder="Enter discount" name="discount">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="sizes" class="form-label">Sizes:</label>
                            <select  id="sizes" class="form-control" name="sizes[]" multiple>
                                <?php foreach ($sizes as $size) : ?>
                                    <option value="<?= $size['id'] ?>"><?= $size['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3 mt-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea id="description" class="form-control" name="description"></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= BASE_URL_ADMIN ?>?act=products" class="btn btn-danger">Back to list</a>
            </form>
        </div>
    </div>
</div>

<?php if (isset($_SESSION['data'])) {
    unset($_SESSION['data']);
} ?>