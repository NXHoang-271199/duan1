<?php
function productListAll()
{
    $title = 'Danh sách product';
    $view = 'products/index';
    $script = 'datatable';
    $script2 = 'products/script';
    $style = 'datatable';

    $products = listAllForProduct();
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function productShowOne($id)
{
    $product = showOneForProduct($id);

    if (empty($product)) {
        e404();
    }
    $title = 'Chi tiết product ' . $product['p_name'];
    $view = 'products/show';

    $sizes = getSizeForProduct($id);
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function productCreate()
{
    $title = 'Tạo mới product';
    $view = 'products/create';
    $script = 'datatable';
    $script2 = 'products/script';

    $categories = listAll('categories');
    $sizes = listAll('sizes');

    if (!empty($_POST)) {
        $data = [

            'name' => $_POST["name"] ?? null,
            'description' => $_POST["description"] ?? null,
            'cate_id' => $_POST["category"] ?? null,
            'price' => $_POST["price"] ?? null,
            'discount' => $_POST["discount"] ?? null,
            'image' => get_file_upload('image'),
        ];



        validateProductCreate($data);

        $image = $data['image'];
        if (is_array($image)) {
            $data['image'] = upload_file($image, 'uploads/products/');
        }

        try {
            $GLOBALS['connect']->beginTransaction();

            $productID = insert_get_last_id('products', $data);
            // Xử lý product - size
            if(!empty($_POST['sizes'])){
                foreach($_POST['sizes'] as $sizeID){
                    insert('product_size',[
                        'product_id' => $productID,
                        'size_id' => $sizeID,
                    ]);
                }
            }

            $GLOBALS['connect']->commit();
        } catch (\Exception $e) {
            $GLOBALS['connect']->rollback();
            if (
                is_array($image)
                && !empty($data['image'])
                && file_exists(PATH_UPLOAD . $data['image'])
            ) {
                unlink(PATH_UPLOAD . $data['image']);
            }

            debug($e);
        }

        $_SESSION['success'] = 'Thao tác thành công';

        header('location: ' . BASE_URL_ADMIN . '?act=products');
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// Hàm validation cho Create
function validateProductCreate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự, không được trùng

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } elseif (strlen($data['name']) > 50) {
        $errors[] = 'Trường name có độ đài tối đa 50 ký tự ';
    } else if (!checkUniqueName('products', $data['name'])) {
        $errors[] = 'name đã được sử dụng';
    }

    if (empty($data['image'])) {
        $errors[] = 'Trường Image là bắt buộc';
    }
    // if (empty($_FILES['image']['name'])) {
    //     $errors[] = 'Trường Image là bắt buộc';
    // }

    if (empty($data['price'])) {
        $errors[] = 'Trường price là bắt buộc';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;
        header('location: ' . BASE_URL_ADMIN . '?act=product-create');
        exit();
    }
}

// PRODUCT UPDATE FUNCTION

function productUpdate($id)
{

    $product = showOneForProduct($id);

    if (empty($product)) {
        e404();
    }

    $title = 'Update product: ' . $product['p_name'];
    $view = 'products/update';
    $script = 'datatable';
    $script2 = 'products/script';

    $categories = listAll('categories');
    $sizes = listAll('sizes');

    $sizeForProduct = getSizeForProduct($id);
    $sizeIDsForProduct = array_column($sizeForProduct, 's_id');

    if (!empty($_POST)) {
        $data = [
            'name' => $_POST["name"] ?? $product['p_name'],
            'image' => get_file_upload('image') ?? $product['p_image'],
            'cate_id' => $_POST["category"] ?? $product['p_cate_id'],
            'price' => $_POST["price"] ?? $product['p_price'],
            'discount' => $_POST["discount"] ?? $product['p_discount'],
            'description' => $_POST["description"] ?? $product['p_description'],
            'updated_at' => date('Y-m-d H:i:s')
        ];

        validateProductUpdate($id, $data);
        $image = $data['image'];
        if (is_array($image)) {
            $data['image'] = upload_file($image, 'uploads/products/');
        }

        try {
            $GLOBALS['connect']->beginTransaction();
            
            update('products', $id, $data);

            deleteSizesByProductID($id);
            // Xử lý product - size
            if(!empty($_POST['sizes'])){
                foreach($_POST['sizes'] as $sizeID){
                    insert('product_size',[
                        'product_id' => $id,
                        'size_id' => $sizeID,
                    ]);
                }
            };

            $GLOBALS['connect']->commit();
        } catch (\Exception $e) {
            $GLOBALS['connect']->rollback();
            if (
                is_array($image)
                && !empty($data['image'])
                && file_exists(PATH_UPLOAD . $data['image'])
            ) {
                unlink(PATH_UPLOAD . $data['image']);
            }

            debug($e);
        }

        // $image = $_FILES['image'] ?? null;
        // if (!empty($image)) {
        //     $data['image'] = upload_file($image, 'uploads/products/');
        // }

        // update('products', $id, $data);

        if (
            !empty($image) // Có upload file
            && !empty($product['image']) // Có giá trị
            && !empty($data['image']) //upload file thành công
            && file_exists(PATH_UPLOAD . $product['image'])
        ) // Phải còn file tồn tại trên hệ thống 
        {
            unlink(PATH_UPLOAD . $product['image']);
        }

        $_SESSION['success'] = 'Thao tác thành công';


        header('location: ' . BASE_URL_ADMIN . '?act=product-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateProductUpdate($id, $data)
{
    // productname - bắt buộc, độ dài tối đa 50 ký tự

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } elseif (strlen($data['name']) > 50) {
        $errors[] = 'Trường name có độ đài tối đa 50 ký tự ';
    } else if (!checkUniqueNameForUpdate('products', $id, $data['name'])) {
        $errors[] = 'name đã được sử dụng';
    }
    if (empty($data['image'])) {
        $errors[] = 'Trường Image là bắt buộc';
    }
    if (empty($data['price'])) {
        $errors[] = 'Trường price là bắt buộc';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('location: ' . BASE_URL_ADMIN . '?act=product-update&id=' . $id);
        exit();
    }
}

// Hàm DELETE
function productDelete($id)
{
    $product = showOne('products', $id);

    if (empty($product)) {
        e404();
    }

    try {
        $GLOBALS['connect']->beginTransaction();

        deleteSizesByProductID($id);

        deleteAcc('products', $id);

        $GLOBALS['connect']->commit();
    } catch (\Exception $e) {
        $GLOBALS['connect']->rollBack();

        debug($e);
    }

    if (
        !empty($product['image']) // Có giá trị
        && file_exists(PATH_UPLOAD . $product['image'])
    ) // Phải còn file tồn tại trên hệ thống 
    {
        unlink(PATH_UPLOAD . $product['image']);
    }

    // if (
    //     !empty($product['image-cover'])
    //     && file_exists(PATH_UPLOAD . $product['image-cover'])
    // ) {
    //     unlink(PATH_UPLOAD . $product['image-cover']);
    // }
    $_SESSION['success'] = 'Thao tác thành công';
    header('location: ' . BASE_URL_ADMIN . '?act=products');
    exit();
}
