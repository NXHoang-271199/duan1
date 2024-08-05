<?php
function commentListAllUserByProductID($productId)
{
    $title = 'Danh sách Comments';
    $view = 'comments/index';
    $script = 'datatable';
    $script2 = 'comments/script';
    $style = 'datatable';

    $comments = listCommentByProduct($_GET['productID']);
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function commentAdd() {
    if (!empty($_POST)) {
        $data = [
            "user_id" => $_SESSION['user']['id'],
            "product_id" => $_POST["product_id"],
            "content" => $_POST['content'],
        ];

        $errors = validateComment($data);

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('location: ' . BASE_URL . '?act=product&id=' . $_POST['product_id']);
            exit();
        }

        insert('comments', $data);
        $_SESSION['success'] = 'Comment added successfully';
        header('location: ' . BASE_URL . '?act=product&id=' . $_POST['product_id']);
        exit();
    }
}

function commentShowOne($id)
{
    $comment = showOneForComment($id);

    if (empty($comment)) {
        e404();
    }
    $title = 'Chi tiết comment của ' . $comment['u_name'];
    $view = 'comments/show';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}



function commentDelete($id)
{
    deleteAcc('comments', $id);

    $_SESSION['success'] = 'Thao tác thành công';
    header('location: ' . BASE_URL_ADMIN . '?act=users');
    exit();
}

function validateComment($data)
{
    $errors = [];

    // if (empty($data['content'])) {
    //     $errors[] = 'Comment content is required';
    // } elseif (strlen($data['content']) > 10) {
    //     $errors[] = 'Comment content must be less than 500 characters';
    // }

    return $errors;
}