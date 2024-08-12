<?php

if (!function_exists("listAllForOrder")) {
    function listAllForOrder()
    {
        try {
            $sql = "
            SELECT 
                o.id as o_id,
                o.user_id as o_user_id,
                o.status_delivery as o_status_delivery,
                o.status_payment as o_status_payment,
                o.order_date as o_order_date,
                oi.id as oi_id,
                oi.product_id as oi_product_id,
                oi.size_id as oi_size_id,
                oi.quantity as oi_quantity,
                p.price as p_price,
                p.discount as p_discount,
                p.name as p_name,
                p.image as p_image,
                s.name as s_name
            FROM
                orders AS o
            INNER JOIN 
                order_items AS oi ON o.id = oi.order_id
            INNER JOIN 
                products AS p ON oi.product_id = p.id
            INNER JOIN 
                sizes AS s ON oi.size_id = s.id
            ";
            $stmt = $GLOBALS['connect']->prepare($sql);
        
            $stmt->execute();
        
            return $stmt->fetchAll();
            
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

function getOrderStatus($status) {
    switch ($status) {
        case STATUS_DELIVERY_WFC:
            return '<span class="badge badge-secondary ">Waiting for Confirmation</span>';
        case STATUS_DELIVERY_WFP:
            return '<span class="badge badge-primary ">Waiting for Pickup</span>';
        case STATUS_DELIVERY_WFD:
            return '<span class="badge badge-warning">Waiting for Delivery</span>';
        case STATUS_DELIVERY_ED:
            return '<span class="badge badge-success">Delivered</span>';
        case STATUS_DELIVERY_CED:
            return '<span class="badge badge-light">Canceled</span>';
        default:
            return 'Unknown';
    }
};

// function getPaymentMethodBadge($paymentMethod) {
//     switch ($paymentMethod) {
//         case 'cash':
//             return '<span class="badge badge-primary ">Cash</span>';
//         case 'momo':
//             return '<span class="badge badge-danger">MoMo</span>';
//         default:
//             return '<span class="badge bg-light text-dark">Unknown</span>';
//     }
// }