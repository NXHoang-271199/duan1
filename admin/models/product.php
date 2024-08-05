<?php

if (!function_exists('listAllForProduct')) {
    function listAllForProduct()
    {
        try {
            $sql = "
                SELECT 
                p.id          as p_id,
                p.cate_id     as p_cate_id,
                p.name        as p_name,
                p.price       as p_price,
                p.discount    as p_discount,
                p.image       as p_image,
                p.description as p_description,
                c.name    as c_name
                FROM products as p
                INNER JOIN categories as c ON c.id = p.cate_id
                ORDER BY p_id DESC;
            ";
            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('showOneForProduct')) {
    function showOneForProduct($id)
    {
        try {
            $sql = "
            SELECT 
            p.id          as p_id,
            p.cate_id     as p_cate_id,
            p.name        as p_name,
            p.price       as p_price,
            p.discount    as p_discount,
            p.image       as p_image,
            p.description as p_description,
            c.name    as c_name
            FROM products as p
            INNER JOIN categories as c ON c.id = p.cate_id
            WHERE 
                p.id = :id
            LIMIT 1
        ";
            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if(!function_exists('getSizeForProduct')){
    function getSizeForProduct($productID){
        try{
            $sql = "
            SELECT 
                s.id   as s_id,
                s.name as s_name
            FROM sizes as s INNER JOIN product_size as ps ON s.id = ps.size_id
            WHERE ps.product_id = :product_id
            ";
            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":product_id", $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        }catch (\Exception $e) {
            debug($e);
        }
    }
}

if(!function_exists('deleteSizesByProductID')){
    function deleteSizesByProductID($productID){
        try{
            $sql = "DELETE FROM product_size WHERE product_id = :product_id;";

            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->bindParam(":product_id", $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        }catch(\Exception $e){
            debug($e);
        }
    }
}