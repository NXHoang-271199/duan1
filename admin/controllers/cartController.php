<?php
function cartListAll()
{
    $title = 'Danh sách cart';
    $view = 'carts/index';
    $script = 'datatable';
    $script2 = 'carts/script';
    $style = 'datatable';

    $carts = listAllForCart();
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// function cartShowOne($id)
// {
//     $cart = showOneForCart($id);

//     if (empty($cart)) {
//         e404();
//     }
//     $title = 'Chi tiết cart ' . $cart['p_name'];
//     $view = 'carts/show';

//     // $sizes = getSizeForCart($id);
//     require_once PATH_VIEW_ADMIN . 'layouts/master.php';
// }

// function cartCreate()
// {
//     $title = 'Tạo mới cart';
//     $view = 'carts/create';
//     $script = 'datatable';
//     $script2 = 'carts/script';

//     $categories = listAll('categories');
//     $sizes = listAll('sizes');

//     if (!empty($_POST)) {
//         $data = [

//             'name' => $_POST["name"] ?? null,
//             'description' => $_POST["description"] ?? null,
//             'cate_id' => $_POST["category"] ?? null,
//             'price' => $_POST["price"] ?? null,
//             'discount' => $_POST["discount"] ?? null,
//             'image' => get_file_upload('image'),
//         ];



//         validateCartCreate($data);

//         $image = $data['image'];
//         if (is_array($image)) {
//             $data['image'] = upload_file($image, 'uploads/carts/');
//         }

//         try {
//             $GLOBALS['connect']->beginTransaction();

//             $cartID = insert_get_last_id('carts', $data);
//             // Xử lý cart - size
//             if(!empty($_POST['sizes'])){
//                 foreach($_POST['sizes'] as $sizeID){
//                     insert('cart_size',[
//                         'cart_id' => $cartID,
//                         'size_id' => $sizeID,
//                     ]);
//                 }
//             }

//             $GLOBALS['connect']->commit();
//         } catch (\Exception $e) {
//             $GLOBALS['connect']->rollback();
//             if (
//                 is_array($image)
//                 && !empty($data['image'])
//                 && file_exists(PATH_UPLOAD . $data['image'])
//             ) {
//                 unlink(PATH_UPLOAD . $data['image']);
//             }

//             debug($e);
//         }

//         $_SESSION['success'] = 'Thao tác thành công';

//         header('location: ' . BASE_URL_ADMIN . '?act=carts');
//         exit();
//     }
//     require_once PATH_VIEW_ADMIN . 'layouts/master.php';
// }

// Hàm validation cho Create
// function validateCartCreate($data)
// {
//     // name - bắt buộc, độ dài tối đa 50 ký tự, không được trùng

//     $errors = [];

//     if (empty($data['name'])) {
//         $errors[] = 'Trường name là bắt buộc';
//     } elseif (strlen($data['name']) > 50) {
//         $errors[] = 'Trường name có độ đài tối đa 50 ký tự ';
//     } else if (!checkUniqueName('carts', $data['name'])) {
//         $errors[] = 'name đã được sử dụng';
//     }

//     if (empty($data['image'])) {
//         $errors[] = 'Trường Image là bắt buộc';
//     }
//     // if (empty($_FILES['image']['name'])) {
//     //     $errors[] = 'Trường Image là bắt buộc';
//     // }

//     if (empty($data['price'])) {
//         $errors[] = 'Trường price là bắt buộc';
//     }

//     if (!empty($errors)) {
//         $_SESSION['errors'] = $errors;
//         $_SESSION['data'] = $data;
//         header('location: ' . BASE_URL_ADMIN . '?act=cart-create');
//         exit();
//     }
// }

// PRODUCT UPDATE FUNCTION

// function cartUpdate($id)
// {

//     $cart = showOneForCart($id);

//     if (empty($cart)) {
//         e404();
//     }

//     $title = 'Update cart: ' . $cart['p_name'];
//     $view = 'carts/update';
//     $script = 'datatable';
//     $script2 = 'carts/script';

//     $categories = listAll('categories');
//     $sizes = listAll('sizes');

//     $sizeForCart = getSizeForCart($id);
//     $sizeIDsForCart = array_column($sizeForCart, 's_id');

//     if (!empty($_POST)) {
//         $data = [
//             'name' => $_POST["name"] ?? $cart['p_name'],
//             'image' => get_file_upload('image') ?? $cart['p_image'],
//             'cate_id' => $_POST["category"] ?? $cart['p_cate_id'],
//             'price' => $_POST["price"] ?? $cart['p_price'],
//             'discount' => $_POST["discount"] ?? $cart['p_discount'],
//             'description' => $_POST["description"] ?? $cart['p_description'],
//             'updated_at' => date('Y-m-d H:i:s')
//         ];

//         validateCartUpdate($id, $data);
//         $image = $data['image'];
//         if (is_array($image)) {
//             $data['image'] = upload_file($image, 'uploads/carts/');
//         }

//         try {
//             $GLOBALS['connect']->beginTransaction();
            
//             update('carts', $id, $data);

//             deleteSizesByCartID($id);
//             // Xử lý cart - size
//             if(!empty($_POST['sizes'])){
//                 foreach($_POST['sizes'] as $sizeID){
//                     insert('cart_size',[
//                         'cart_id' => $id,
//                         'size_id' => $sizeID,
//                     ]);
//                 }
//             };

//             $GLOBALS['connect']->commit();
//         } catch (\Exception $e) {
//             $GLOBALS['connect']->rollback();
//             if (
//                 is_array($image)
//                 && !empty($data['image'])
//                 && file_exists(PATH_UPLOAD . $data['image'])
//             ) {
//                 unlink(PATH_UPLOAD . $data['image']);
//             }

//             debug($e);
//         }

//         // $image = $_FILES['image'] ?? null;
//         // if (!empty($image)) {
//         //     $data['image'] = upload_file($image, 'uploads/carts/');
//         // }

//         // update('carts', $id, $data);

//         if (
//             !empty($image) // Có upload file
//             && !empty($cart['image']) // Có giá trị
//             && !empty($data['image']) //upload file thành công
//             && file_exists(PATH_UPLOAD . $cart['image'])
//         ) // Phải còn file tồn tại trên hệ thống 
//         {
//             unlink(PATH_UPLOAD . $cart['image']);
//         }

//         $_SESSION['success'] = 'Thao tác thành công';


//         header('location: ' . BASE_URL_ADMIN . '?act=cart-update&id=' . $id);
//         exit();
//     }

//     require_once PATH_VIEW_ADMIN . 'layouts/master.php';
// }

// function validateCartUpdate($id, $data)
// {
//     // cartname - bắt buộc, độ dài tối đa 50 ký tự

//     $errors = [];

//     if (empty($data['name'])) {
//         $errors[] = 'Trường name là bắt buộc';
//     } elseif (strlen($data['name']) > 50) {
//         $errors[] = 'Trường name có độ đài tối đa 50 ký tự ';
//     } else if (!checkUniqueNameForUpdate('carts', $id, $data['name'])) {
//         $errors[] = 'name đã được sử dụng';
//     }
//     if (empty($data['image'])) {
//         $errors[] = 'Trường Image là bắt buộc';
//     }
//     if (empty($data['price'])) {
//         $errors[] = 'Trường price là bắt buộc';
//     }

//     // if (empty($_FILES['image']['name'])) {
//     //     $errors[] = 'Trường Image là bắt buộc';
//     // }

//     if (!empty($errors)) {
//         $_SESSION['errors'] = $errors;
//         header('location: ' . BASE_URL_ADMIN . '?act=cart-update&id=' . $id);
//         exit();
//     }
// }

// Hàm DELETE
function cartDelete($cartID, $productID, $sizeID)
{
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);
    if (empty($product)) {
        debug('Product not found for ID: ' . $productID);
        return;
    }

    // Kiểm tra giỏ hàng có tồn tại không
    $cart = showOne('carts', $cartID);
    if (empty($cart)) {
        debug('Cart not found for ID: ' . $cartID);
        return;
    }

    // Kiểm tra cart_item có tồn tại không
    $cartItem = getCartItem($cartID, $productID, $sizeID);
    if (empty($cartItem)) {
        debug('Cart item not found for cartID: ' . $cartID . ', productID: ' . $productID . ', sizeID: ' . $sizeID);
        return;
    }

    try {
        $GLOBALS['connect']->beginTransaction();

        // Xóa bản ghi trong bảng cart_items
        deleteCartItemByCartIDAndProductIDAndSizeID($cartID, $productID, $sizeID);

        $GLOBALS['connect']->commit();
    } catch (\Exception $e) {
        $GLOBALS['connect']->rollBack();
        debug($e);
    }

    $_SESSION['success'] = 'Product has been removed from the cart successfully';
    header('location: ' . BASE_URL_ADMIN . '?act=carts');
    exit();
}
