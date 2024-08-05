<?php

function sizeListAll()
{
    $title = 'Danh sách sizes';
    $view = 'sizes/index';
    $script = 'datatable';
    $script2 = 'sizes/script';
    $style = 'datatable';

    $sizes = listAll('sizes');
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function sizeShowOne($id)
{
    $size = showOne('sizes', $id);

    if (empty($size)) {
        e404();
    }
    $title = 'Chi tiết size ' . $size['name'];
    $view = 'sizes/show';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function sizeCreate()
{
    $title = 'Tạo mới size';
    $view = 'sizes/create';

    if (!empty($_POST)) {
        $data = [

            "name" => $_POST["name"] ?? null,
        ];

        $errors = validatesizeCreate($data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('location: ' . BASE_URL_ADMIN . '?act=size-create');
            exit();
        }
        insert('sizes', $data);

        $_SESSION['success'] = 'Thao tác thành công';

        header('location: ' . BASE_URL_ADMIN . '?act=sizes');
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validatesizeCreate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự, không được trùng

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } elseif (strlen($data['name']) > 50) {
        $errors[] = 'Trường name có độ đài tối đa 50 ký tự ';
    } else if (!checkUniquename('sizes', $data['name'])) {
        $errors[] = 'name đã được sử dụng';
    }


    return $errors;
}
// sizeUpdate function
function sizeUpdate($id)
{

    $size = showOne('sizes', $id);

    if (empty($size)) {
        e404();
    }

    $title = 'Update size:' . $size['name'];
    $view = 'sizes/update';

    if (!empty($_POST)) {
        $data = [
            "name" => $_POST["name"] ?? $size['name'],

        ];

        $errors = validatesizeUpdate($id, $data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
        } else {
            update('sizes', $id, $data);
            $_SESSION['success'] = 'Thao tác thành công';
        }


        header('location: ' . BASE_URL_ADMIN . '?act=size-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validatesizeUpdate($id, $data)
{
    // sizename - bắt buộc, độ dài tối đa 50 ký tự

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } elseif (strlen($data['name']) > 50) {
        $errors[] = 'Trường name có độ đài tối đa 50 ký tự ';
    } else if (!checkUniquenameForUpdate('sizes', $id, $data['name'])) {
        $errors[] = 'name đã được sử dụng';
    }
    return $errors;
}

function sizeDelete($id)
{
    deleteAcc('sizes', $id);

    $_SESSION['success'] = 'Thao tác thành công';
    header('location: ' . BASE_URL_ADMIN . '?act=sizes');
    exit();
}
