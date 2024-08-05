<?php
function getSizeNameByID($sizeID) {
    // Lấy dữ liệu kích cỡ từ DB
    $size = showOne('sizes', $sizeID);
    return $size ? $size['name'] : null;
}
