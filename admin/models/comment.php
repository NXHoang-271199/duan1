<?php
if (!function_exists('listAllForComment')) {
    function listAllForComment()
    {
        try {
            $sql = "SELECT 
            cmt.id      as cmt_id, 
            cmt.content as cmt_content, 
            p.name      as p_name,
            p.created_at as p_created_at,
            u.name      as u_name
            FROM comments as cmt 
            INNER JOIN products as p ON p.id = cmt.product_id INNER JOIN users as u ON u.id = cmt.user_id ";
            $stmt = $GLOBALS['connect']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

function showOneForComment($id)
{
    try {
        $sql = "SELECT 
        cmt.id      as cmt_id, 
        cmt.content as cmt_content, 
        p.name      as p_name,
        u.name  as u_name
        FROM comments as cmt 
        INNER JOIN products as p ON p.id = cmt.product_id INNER JOIN users as u ON u.id = cmt.user_id 
        WHERE
            cmt.id = :id 
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
