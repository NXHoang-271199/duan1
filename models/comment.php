<?php

function listCommentByProduct($productId)
{
    try {
        $sql = "
        SELECT 
            cmt.id,
            cmt.user_id, 
            cmt.product_id, 
            cmt.content, 
            cmt.created_at, 
            u.name as u_name 
        FROM comments as cmt
        INNER JOIN users as u
        ON 
            cmt.user_id = u.id
        WHERE 
            cmt.product_id = :product_id";

        $stmt = $GLOBALS['connect']->prepare($sql);

        $stmt->bindParam(":product_id", $productId);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

