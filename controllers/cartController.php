<?php
function cartAdd($productID, $quantity, $sizeID) {
    // Kiểm tra xem có sản phẩm với ID không
    $product = showOne('products', $productID);
    if (empty($product)) {
        debug('404 Not Found');
        return; // Thoát hàm nếu sản phẩm không tồn tại
    }
    // debug($sizeID);
    // Kiểm tra xem có kích cỡ với sizeID không
    $size = showOne('sizes', $sizeID);
    if (empty($size)) {
        debug('Size not found');
        return; // Thoát hàm nếu kích cỡ không tồn tại
    }

    // Kiểm tra xem có cartID cho người dùng chưa
    $cartID = getCartID($_SESSION['user']['id']);
    $_SESSION['cartID'] = $cartID;

    // Kiểm tra xem sản phẩm với kích cỡ này đã tồn tại trong giỏ hàng chưa
    if (!isset($_SESSION['cart'][$productID])) {
        $_SESSION['cart'][$productID] = [];
    }

    if (!isset($_SESSION['cart'][$productID][$sizeID])) {
        $_SESSION['cart'][$productID][$sizeID] = $product;
        $_SESSION['cart'][$productID][$sizeID]['quantity'] = $quantity;
        $_SESSION['cart'][$productID][$sizeID]['size_id'] = $size['id'];
        $_SESSION['cart'][$productID][$sizeID]['size_name'] = $size['name']; // Đảm bảo đây là tên kích cỡ

        // Thêm sản phẩm vào cơ sở dữ liệu
        insert('cart_items', [
            'cart_id' => $cartID,
            'product_id' => $productID,
            'quantity' => $quantity,
            'size_id' => $sizeID,
        ]);
    } else {
        // Cập nhật số lượng sản phẩm nếu đã tồn tại
        $qtyTMP = $_SESSION['cart'][$productID][$sizeID]['quantity'] += $quantity;
        updateQuantityByCartIDAndProductIDAndSizeID($cartID, $productID, $qtyTMP, $sizeID);
    }
    
    // Chuyển hướng qua trang giỏ hàng
    header('Location:' . BASE_URL . '?act=cart_list');
}




function cartList(){
    $view = 'cart-list';
    require_once PATH_VIEW . 'layouts/master.php';
}

function cartInc($productID, $sizeID) {
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);
    if (empty($product)) {
        debug('404 Not Found');
        return;
    }

    // Tăng số lượng lên 1
    if (isset($_SESSION['cart'][$productID][$sizeID])) {
        $_SESSION['cart'][$productID][$sizeID]['quantity'] += 1;
        $qtyTMP = $_SESSION['cart'][$productID][$sizeID]['quantity'];

        // Cập nhật số lượng trong cơ sở dữ liệu
        updateQuantityByCartIDAndProductIDAndSizeID($_SESSION['cartID'], $productID, $sizeID, $qtyTMP);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart_list');
}


function cartDec($productID, $sizeID) {
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);
    if (empty($product)) {
        debug('404 Not Found');
        return;
    }

    // Giảm số lượng xuống 1
    if (isset($_SESSION['cart'][$productID][$sizeID]) && $_SESSION['cart'][$productID][$sizeID]['quantity'] > 1) {
        $_SESSION['cart'][$productID][$sizeID]['quantity'] -= 1;
        $qtyTMP = $_SESSION['cart'][$productID][$sizeID]['quantity'];

        // Cập nhật số lượng trong cơ sở dữ liệu
        updateQuantityByCartIDAndProductIDAndSizeID($_SESSION['cartID'], $productID, $sizeID, $qtyTMP);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart_list');
}

function cartDel($productID, $sizeID){
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);
    if(empty($product)){
        debug('404 Not Found');
        return;
    }

    // Xóa bản ghi bên trong session và cart_items
    if(isset($_SESSION['cart'][$productID][$sizeID])){
        unset($_SESSION['cart'][$productID][$sizeID]);

        deleteCartItemByCartIDAndProductIDAndSizeID($_SESSION['cartID'], $productID, $sizeID);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart_list');
}



