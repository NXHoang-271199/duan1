<?php
function productDetail($id)
{
    $view = 'product-detail';
    $product = showProductByID($id);
    $sizes = getSizeForProduct($id);
    $comments = listCommentByProduct($id);
    require_once PATH_VIEW . 'layouts/master.php';
}

function productListByCategoryID($categoryID, $page = 1, $perPage = 2)
{
    $view = 'product-by-category';
    $category = showOne('categories', $categoryID);
    $products = getProductByCategoryID($categoryID, $perPage, $page);
    $totalProduct = countAllProductByCategoryID($categoryID)['total'];
    $totalPage = ceil($totalProduct / $perPage);
    $sizes = listAll('sizes');
    
    require_once PATH_VIEW . 'layouts/master.php';
}
