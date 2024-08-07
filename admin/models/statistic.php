<?php

function getOrderStatistics() {
    try {
        $sql = "
        SELECT 
            c.name as c_name,
            p.name as p_name,
            COUNT(o.id) as number_of_orders,
            SUM(oi.quantity) as total_sold
        FROM
            categories c
            JOIN products p ON c.id = p.cate_id
            JOIN order_items oi ON p.id = oi.product_id
            JOIN orders o ON oi.order_id = o.id
        GROUP BY
            c.name, p.name
        ORDER BY
            c.name, p.name
        ";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
        return [];
    }
}
