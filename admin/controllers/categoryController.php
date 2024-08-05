<?php

function categoryListAll()
{
    $title = 'Danh sách categories';
    $view = 'categories/index';
    $script = 'datatable';
    $script2 = 'categories/script';
    $style = 'datatable';

    $categories = listAll('categories');
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function categoryShowOne($id)
{
    $category = showOne('categories', $id);

    if (empty($category)) {
        e404();
    }
    $title = 'Chi tiết category ' . $category['name'];
    $view = 'categories/show';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function categoryCreate()
{
    $title = 'Tạo mới category';
    $view = 'categories/create';

    if (!empty($_POST)) {
        $data = [

            "name" => $_POST["name"] ?? null,
        ];

        $errors = validateCategoryCreate($data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('location: ' . BASE_URL_ADMIN . '?act=category-create');
            exit();
        }
        insert('categories', $data);

        $_SESSION['success'] = 'Thao tác thành công';

        header('location: ' . BASE_URL_ADMIN . '?act=categories');
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateCategoryCreate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự, không được trùng

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } elseif (strlen($data['name']) > 50) {
        $errors[] = 'Trường name có độ đài tối đa 50 ký tự ';
    } else if (!checkUniquename('categories', $data['name'])) {
        $errors[] = 'name đã được sử dụng';
    }


    return $errors;
}
// categoryUpdate function
function categoryUpdate($id)
{

    $category = showOne('categories', $id);

    if (empty($category)) {
        e404();
    }

    $title = 'Update category:' . $category['name'];
    $view = 'categories/update';

    if (!empty($_POST)) {
        $data = [
            "name" => $_POST["name"] ?? $category['name'],

        ];

        $errors = validateCategoryUpdate($id, $data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
        } else {
            update('categories', $id, $data);
            $_SESSION['success'] = 'Thao tác thành công';
        }


        header('location: ' . BASE_URL_ADMIN . '?act=category-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateCategoryUpdate($id, $data)
{
    // categoryname - bắt buộc, độ dài tối đa 50 ký tự

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } elseif (strlen($data['name']) > 50) {
        $errors[] = 'Trường name có độ đài tối đa 50 ký tự ';
    } else if (!checkUniquenameForUpdate('categories', $id, $data['name'])) {
        $errors[] = 'name đã được sử dụng';
    }
    return $errors;
}

function categoryDelete($id)
{
    deleteAcc('categories', $id);

    $_SESSION['success'] = 'Thao tác thành công';
    header('location: ' . BASE_URL_ADMIN . '?act=categories');
    exit();
}
