<?php

// test momo:
// 9704 0000 0000 0018
// NGUYEN VAN A
// 03/07
// OTP

function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
};

function getOrderItems($orderId) {
    try {
        $sql = "
            SELECT 
                oi.product_id as oi_product_id,
                oi.size_id as oi_size_id,
                oi.quantity as oi_quantity,
                oi.price as oi_price,
                p.name as p_name,
                p.image as p_image,
                s.name as s_name
            FROM order_items oi
            JOIN products p ON oi.product_id = p.id
            JOIN sizes s ON oi.size_id = s.id
            WHERE oi.order_id = :order_id
        ";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $stmt->bindParam(':order_id', $orderId);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
        return [];
    }
}


function orderListAll($userId) {
    try {
        $sql = "
        SELECT 
            o.id as o_id,
            o.created_at as o_created_at,
            o.total_bill as o_total_bill,
            o.payment_method as o_payment_method,
            o.status_delivery as o_status_delivery,
            o.status_payment as o_status_payment,
            o.user_name as o_user_name,
            o.user_email as o_user_email,
            o.user_phone as o_user_phone,
            o.user_address as o_user_address
        FROM orders o
        WHERE o.user_id = :user_id
        ORDER BY o.created_at DESC
        ";
        $stmt = $GLOBALS['connect']->prepare($sql);

        $stmt->bindParam(':user_id', $userId);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
        // return [];
    }
}

function getPaymentMethodBadge($paymentMethod) {
    switch ($paymentMethod) {
        case 'cash':
            return '<span class="badge bg-primary text-light">Cash</span>';
        case 'momo':
            return '<span class="badge bg-danger text-light">MoMo</span>';
        default:
            return '<span class="badge bg-light text-dark">Unknown</span>';
    }
}


function getOrderStatus($status) {
    switch ($status) {
        case STATUS_DELIVERY_WFC:
            return '<span class="badge bg-secondary text-light fs-5">Waiting for Confirmation</span>';
        case STATUS_DELIVERY_WFP:
            return '<span class="badge bg-primary text-light fs-5">Waiting for Pickup</span>';
        case STATUS_DELIVERY_WFD:
            return '<span class="badge bg-warning text-light fs-5">Waiting for Delivery</span>';
        case STATUS_DELIVERY_ED:
            return '<span class="badge bg-success text-light fs-5">Delivered</span>';
        case STATUS_DELIVERY_CED:
            return '<span class="badge bg-light text-dark fs-5">Canceled</span>';
        default:
            return 'Unknown';
    }
};

function cancelOrder($orderId) {
    try {
        $sql = "UPDATE orders SET status_delivery = :status_delivery WHERE id = :order_id AND status_delivery = :status_wfc";
        $stmt = $GLOBALS['connect']->prepare($sql);
        $statusDelivery = STATUS_DELIVERY_CED;
        $statusWFC = STATUS_DELIVERY_WFC;
        $stmt->bindParam(':status_delivery', $statusDelivery);
        $stmt->bindParam(':order_id', $orderId);
        $stmt->bindParam(':status_wfc', $statusWFC);
        $stmt->execute();
    } catch (Exception $e) {
            debug($e);
    }
}