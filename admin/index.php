<?php

session_start();

// require các file trong commons
require_once '../commons/env.php';
require_once '../commons/helper.php';
require_once '../commons/connect.php';
require_once '../commons/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

// Kiểm tra quyền truy cập
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 1) {
    $_SESSION['error'] = 'You do not have permission to access this page.';
    header('location: ' . BASE_URL . '?act=login');
    exit();
}

// Điều hướng
$act = $_GET['act'] ?? '/';



// Kiểm tra xem đăng nhập chưa
middleware_auth_check($act);

match ($act) {
    '/' => dashboard(),

    //Authen
    'login' => authenShowFormLogin(),
    'logout' => authenLogout(),


    // CRUD User
    'users' => userListAll(),
    'user-detail' => userShowOne($_GET['id']),
    'user-create' => userCreate(),
    'user-update' => userUpdate($_GET['id']),
    'user-delete' => userDelete($_GET['id']),

    // CRUD Category
    'categories' => categoryListAll(),
    'category-detail' => categoryShowOne($_GET['id']),
    'category-create' => categoryCreate(),
    'category-update' => categoryUpdate($_GET['id']),
    'category-delete' => categoryDelete($_GET['id']),

    // CRUD Category
    'sizes' => sizeListAll(),
    'size-detail' => sizeShowOne($_GET['id']),
    'size-create' => sizeCreate(),
    'size-update' => sizeUpdate($_GET['id']),
    'size-delete' => sizeDelete($_GET['id']),

    // CRUD Product
    'products' => productListAll(),
    'product-detail' => productShowOne($_GET['id']),
    'product-create' => productCreate(),
    'product-update' => productUpdate($_GET['id']),
    'product-delete' => productDelete($_GET['id']),

    // CRUD Comment
    'comments' => commenttListAll(),
    'comment-detail' => commentShowOne($_GET['id']),
    // 'comment-create' => commentCreate(),
    // 'comment-update' => commentUpdate($_GET['id']),
    'comment-delete' => commentDelete($_GET['productID'], $_GET['quantity'],$_GET['sizeID']),

    // CRUD Cart
    'carts' => cartListAll(),
    'cart-delete' => cartDelete($_GET['cart_id'], $_GET['product_id'], $_GET['size_id']),

    'orders' => orderListAll(),
    // 'order-detail' => orderShowOne($_GET['id']),
    'order-update' => orderUpdate($_GET['id']),


    'statistics' => orderStatistics(),
};

require_once '../commons/disconnect.php';
