<?php
session_start();

// require các file trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect.php';
require_once './commons/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// Điều hướng
$act = $_GET['act'] ?? '/';

$arrRouterNeedAuth = [
    'cart_add',
    'cart_list',
    'cart_inc',
    'cart_dec',
    'cart_del',
    'order_checkout',
    'order_purchase',
    'order_success',
    'comment_add',
];

middleware_auth_check_User($act, $arrRouterNeedAuth);

// Xử lý yêu cầu POST
handlePostRequest();

// Xử lý yêu cầu GET với match
match ($act) {
    '/' => homeIndex(),
    'quickview' => quickView($_GET['id']),
    'product' => productDetail($_GET['id']),
    'category' => productListByCategoryID($_GET['id'], $_GET['page'] ?? 1, $_GET['perPage'] ?? 2),

    'comments' => listCommentByProduct($_GET['productID']),
    'comment_add' => commentAdd(),

    'cart_add' => cartAdd($_GET['productID'], $_GET['quantity'],$_GET['sizeID']),
    'cart_list' => cartList(),
    'cart_inc' => cartInc($_GET['productID'], $_GET['sizeID']),
    'cart_dec' => cartDec($_GET['productID'], $_GET['sizeID']),
    'cart_del' => cartDel($_GET['productID'], $_GET['sizeID']),

    'order_checkout' => orderCheckout(),
    'order_purchase' => orderPurchase(),
    // 'order_payment' => orderPayment(),
    'momo_payment'=> momoPayment(),
    'order_success' => orderSuccess(),

    'user-register' => userRegister(),
    'login' => authenShowFormLogin(),
    'logout' => authenLogout(),
};
