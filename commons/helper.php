<?php
// Khai báo các hàm dùng Global
if (!function_exists('require_file')) {
    function require_file($pathFolder)
    {
        $files = scandir($pathFolder);

        $files = array_diff($files, ['.', '..']);

        foreach ($files as $file) {
            require_once $pathFolder . $file;
        }
    }
}

if (!function_exists('debug')) {
    function debug($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
    }
}

if (!function_exists('e404')) {
    function e404()
    {
        echo "404 - Not found";
        die;
    }
}

if (!function_exists('upload_file')) {
    function upload_file($file, $pathFolderUpload)
    {
        $imagePath = $pathFolderUpload . time() . '-' . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], PATH_UPLOAD . $imagePath)) {
            return $imagePath;
        }
        return null;
    }
}

if (!function_exists('get_file_upload')) {
    function get_file_upload($field, $default = null)
    {
        if (isset($_FILES[$field]) && $_FILES[$field]['size'] > 0) {
            return $_FILES[$field];
        }
        return $default ?? null;
    }
}

if (!function_exists('middleware_auth_check')) {
    function middleware_auth_check($act)
    {
        if ($act == 'login') {
            if (!empty($_SESSION['user'])) {
                header('Location:' . BASE_URL_ADMIN);
                exit();
            }
        } elseif (empty($_SESSION['user'])) {
            header('Location:' . BASE_URL_ADMIN . '?act=login');
            exit();
        }
    }
}

if(!function_exists('middleware_auth_check_User')){
    function middleware_auth_check_User($act, $arrRouterNeedAuth){
        if($act == 'login') {
            if (!empty($_SESSION['user'])) {
                header('Location:' . BASE_URL);
                exit();
            }
        }
        elseif (empty($_SESSION['user']) && in_array($act, $arrRouterNeedAuth)) {
            header('Location: ' . BASE_URL . '?act=login');
            exit();
        }
    }
}

// if(!function_exists('calculator_total_order')){
//     function calculator_total_order($flag = true){
//         if(isset($_SESSION['cart'])) {
//             $total = 0;
//             foreach($_SESSION['cart'] as $item){
//                 $price = $item['discount'] ?: $item['price'];

//                 $total += $price * $item['quantity'];
//             }
//             return $flag ? number_format($total) : $total;
//         }
//         return 0;
//     }
// }

if (!function_exists('calculator_total_order')) {
    function calculator_total_order($flag = true) {
        if (isset($_SESSION['cart'])) {
            $total = 0;
            foreach ($_SESSION['cart'] as $productID => $sizes) {
                foreach ($sizes as $sizeID => $item) {
                    $price = isset($item['discount']) && $item['discount'] != 0 ? $item['discount'] : (isset($item['price']) ? $item['price'] : 0);
                    $quantity = isset($item['quantity']) ? $item['quantity'] : 0;
                    
                    $total += $price * $quantity;
                }
            }
            return $flag ? number_format($total,2) . ' VNĐ' : $total;
        }
        return 0;
    }
}


// if (!function_exists('settings')) {
//     function settings()
//     {
//         $settings = listAll('settings');

//         $key = array_column($settings, 'key');
//         $value = array_column($settings, 'value');

//         return $array_combine($key, $value);
//         // ['logo' ==> value,...]
//     }
// }


// function handlePostRequest() {
//     if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['act'])) {
//         switch ($_GET['act']) {
//             case 'cart_add':
//                 cartAdd($_POST['productID'], $_POST['quantity']);
//                 break;
//             case 'comment_add':
//                 commentAdd();
//                 break;
//             // Thêm các case khác nếu cần
//         }
//     }
// }

function handlePostRequest() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'cart_add':
                cartAdd($_POST['productID'], $_POST['quantity'], $_POST['sizeID']);
                break;
            case 'comment_add':
                commentAdd();
                break;
            // Thêm các case khác nếu cần
        }
    }
}

