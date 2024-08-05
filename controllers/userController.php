<?php

function userRegister()
{
    $title = 'Tạo mới user';
    $view = 'users/register';

    if (!empty($_POST)) {
        $data = [
            "password" => $_POST["password"] ?? null,
            "name" => $_POST["name"] ?? null,
            "email" => $_POST['email'] ?? null,
            "role" => 0,
        ];

        $errors = validateUserCreate($data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('location: ' . BASE_URL . '?act=user-register');
            exit();
        }
        insert('users', $data);

        $_SESSION['success'] = 'Thao tác thành công';

        header('location: ' . BASE_URL . '?act=login');
        exit();
    }
    require_once PATH_VIEW . 'layouts/master.php';
}

function validateUserCreate($data)
{
    // email - bắt buộc, phải là email, không được trùng
    // password - bắt buộc, đồ dài nhỏ nhất là 8, lớn nhất là 20
    // name - bắt buộc

    $errors = [];

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

    // if (empty($data['password-confirm'])) {
    //     $errors[] = 'Trường password-confirm là bắt buộc';
    // } elseif ($data['password-confirm'] != $data['password']) {
    //     $errors[] = 'Trường password-confirm phải giống với trường password';
    // }
    return $errors;
}