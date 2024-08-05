<?php

function userListAll()
{
    $title = 'Danh sách users';
    $view = 'users/index';
    $script = 'datatable';
    $script2 = 'users/script';
    $style = 'datatable';

    $users = listAll('users');
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function userShowOne($id)
{
    $user = showOne('users', $id);

    if (empty($user)) {
        e404();
    }
    $title = 'Chi tiết user ' . $user['name'];
    $view = 'users/show';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function userCreate()
{
    $title = 'Tạo mới user';
    $view = 'users/create';

    if (!empty($_POST)) {
        $data = [
            "password" => $_POST["password"] ?? null,
            "name" => $_POST["name"] ?? null,
            "email" => $_POST['email'] ?? null,
            "role" => $_POST['role'] ?? null,
        ];

        $errors = validateUserCreate($data);

        insert('users', $data);

        $_SESSION['success'] = 'Thao tác thành công';

        header('location: ' . BASE_URL_ADMIN . '?act=users');
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateUserCreate($data)
{
    // username - bắt buộc, độ dài tối đa 50 ký tự
    // email - bắt buộc, phải là email, không được trùng
    // password - bắt buộc, đồ dài nhỏ nhất là 8, lớn nhất là 20
    // name - bắt buộc
    // role bắt buộc phải là 0 or 1

    $errors = [];

    // if (empty($data['username'])) {
    //     $errors[] = 'Trường username là bắt buộc';
    // } elseif (strlen($data['username']) > 50) {
    //     $errors[] = 'Trường username có độ đài tối đa 50 ký tự ';
    // }

    if (empty($data['email'])) {
        $errors[] = 'Trường email là bắt buộc';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Trường email không dúng định dạng';
    } else if (!checkUniqueEmail('users', $data['email'])) {
        $errors[] = 'Email đã được sử dụng';
    }

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } elseif (strlen($data['name']) > 200) {
        $errors[] = 'Trường name có độ đài tối đa 200 ký tự ';
    }

    if (empty($data['password'])) {
        $errors[] = 'Trường password là bắt buộc';
    } elseif (strlen($data['password']) < 8 || strlen($data['password']) > 20) {
        $errors[] = 'Trường password có độ dài tối thiểu là 8 và tối đa là 20';
    }

    if ($data['role'] === null) {
        $errors[] = 'Trường role là bắt buộc';
    } elseif (!in_array($data['role'], [0, 1])) {
        $errors[] = 'Trường role phải là 0 hoạc 1';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;
        header('location: ' . BASE_URL_ADMIN . '?act=user-create');
        exit();
    }
}
// userUpdate function
function userUpdate($id)
{

    $user = showOne('users', $id);

    if (empty($user)) {
        e404();
    }

    $title = 'Update User:' . $user['name'];
    $view = 'users/update';

    if (!empty($_POST)) {
        $data = [
            "password" => $_POST["password"] ?? $user['password'],
            "name" => $_POST["name"] ?? $user['name'],
            "email" => $_POST['email'] ?? $user['email'],
            // 'image' => get_file_upload('image') ?? $user['image'],
            "role" => $_POST['role'] ?? $user['role'],
        ];

        $errors = validateUserUpdate($id, $data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
        } else {
            update('users', $id, $data);
            $_SESSION['success'] = 'Thao tác thành công';
        }


        header('location: ' . BASE_URL_ADMIN . '?act=user-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateUserUpdate($id, $data)
{
    // username - bắt buộc, độ dài tối đa 50 ký tự
    // email - bắt buộc, phải là email, không được trùng
    // password - bắt buộc, đồ dài nhỏ nhất là 8, lớn nhất là 20
    // name - bắt buộc
    // role bắt buộc phải là 0 or 1

    $errors = [];

    // if (empty($data['username'])) {
    //     $errors[] = 'Trường username là bắt buộc';
    // } elseif (strlen($data['username']) > 50) {
    //     $errors[] = 'Trường username có độ đài tối đa 50 ký tự ';
    // }

    if (empty($data['email'])) {
        $errors[] = 'Trường email là bắt buộc';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Trường email không dúng định dạng';
    } else if (!checkUniqueEmailForUpdate('users', $id, $data['email'])) {
        $errors[] = 'Email đã được sử dụng';
    }

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } elseif (strlen($data['name']) > 200) {
        $errors[] = 'Trường name có độ đài tối đa 200 ký tự ';
    }

    if (empty($data['password'])) {
        $errors[] = 'Trường password là bắt buộc';
    } elseif (strlen($data['password']) < 8 || strlen($data['password']) > 20) {
        $errors[] = 'Trường password có độ dài tối thiểu là 8 và tối đa là 20';
    }

    if ($data['role'] === null) {
        $errors[] = 'Trường role là bắt buộc';
    } elseif (!in_array($data['role'], [0, 1])) {
        $errors[] = 'Trường role phải là 0 hoạc 1';
    }

    return $errors;
}

function userDelete($id)
{
    deleteAcc('users', $id);

    $_SESSION['success'] = 'Thao tác thành công';
    header('location: ' . BASE_URL_ADMIN . '?act=users');
    exit();
}
