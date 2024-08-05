<?php 

function authenShowFormLogin() {
    if ($_POST) {
        authenLogin();
    }

    require_once PATH_VIEW . 'authen/login.php';
}

function authenLogin()
{
    $user = getUserByEmailAndPassword($_POST['email'], $_POST['password']);

    if (empty($user)) {
        $_SESSION['error'] = 'Email or password false';

        header('location: ' . BASE_URL . '?act=login');
        exit();
    }
    $_SESSION['user'] = $user;

    if ($user['role'] == 1) {
        // Admin có thể truy cập cả trang admin và trang người dùng
        header('location: ' . BASE_URL_ADMIN);
    } else {
        // Người dùng thường chỉ có thể truy cập trang người dùng
        header('location: ' . BASE_URL);
    }
    exit();
}


// function authenLogin() {
//     $user = getUserClientByEmailAndPassword($_POST['email'], $_POST['password']);
    
//     if (empty($user)) {
//         $_SESSION['error'] = 'Email hoặc password chưa đúng!';

//         header('Location: ' . BASE_URL . '?act=login');
//         exit();
//     }

//     $_SESSION['user'] = $user;

//     header('Location: ' . BASE_URL);
//     exit();
// }



function authenLogout() {
    if (!empty($_SESSION['user'])) {
        session_destroy();
    }

    header('Location: ' . BASE_URL . '?act=login');
    exit();
}