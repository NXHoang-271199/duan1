<?php
function commenttListAll()
{
    $title = 'Danh sách Comments';
    $view = 'comments/index';
    $script = 'datatable';
    $script2 = 'comments/script';
    $style = 'datatable';

    $comments = listAllForComment();
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
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
