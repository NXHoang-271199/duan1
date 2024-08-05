<?php

function homeIndex()
{
    $view = 'home';
    $products = listAllHomeProduct();
    // foreach ($products as &$product) {
    //     $product['sizes'] = getSizeForProduct($product['p_id']);
    // }
    require_once PATH_VIEW . 'layouts/master.php';
}

// Luồng MVC 1: vào index
//     -> Được điều hướng đến hàm xử lý logic trong controller tương ứng
//         -> Hàm sẽ trả về view luôn vì không có tương tác với model

// Luồng MVC 2: vào index
        // -> Được điều hướng đến hàm xử lý logic trong controller tương ứng
        //     -> Hàm sẽ tương tác với hàm xử lý dữ liệu trong model
        //         -> Dữ liệu sẽ được trả về view