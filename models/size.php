<?php

function sizeListAll()
{
    $title = 'Danh sách sizes';
    $view = 'sizes/index';
    $script = 'datatable';
    $script2 = 'sizes/script';
    $style = 'datatable';

    $sizes = listAll('sizes');
    require_once PATH_VIEW . 'layouts/master.php';
}

