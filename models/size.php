<?php
function getSizeNameByID($sizeID) {
    // Lấy dữ liệu kích cỡ từ DB
    $size = showOne('sizes', $sizeID);
    return $size ? $size['name'] : null;
}

function getSizesByProductID($productID) {
    try {
        $sql = "
            SELECT s.id as s_id, s.name as s_name
            FROM sizes as s
            INNER JOIN product_size as ps ON s.id = ps.size_id
            WHERE ps.product_id = :product_id
        ";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':product_id', $productID);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
        return [];
    }
}

