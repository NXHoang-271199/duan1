<?php
 function orderListAll()
 {
     $title = 'Danh sách orders';
     $view = 'orders/index';
     $script = 'datatable';
     $script2 = 'orders/script';
     $style = 'datatable';
 
     $orders = listAll('orders');
     require_once PATH_VIEW_ADMIN . 'layouts/master.php';
 }

 function orderUpdate($orderId)
{
    // Lấy thông tin đơn hàng theo ID
    $order = showOne("orders", $orderId);
    if (empty($order)) {
        e404(); // Hiển thị lỗi 404 nếu không tìm thấy đơn hàng
    }

    $title = 'Cập nhật đơn hàng: ' . $order['id'];
    $view = 'orders/update';
    $script = 'datatable';
    $script2 = 'orders/script';

    // Các trạng thái đơn hàng
    $statuses = [
        STATUS_DELIVERY_WFC => 'Chờ xác nhận',
        STATUS_DELIVERY_WFP => 'Chờ lấy hàng',
        STATUS_DELIVERY_WFD => 'Chờ giao hàng',
        STATUS_DELIVERY_ED => 'Đã giao',
        STATUS_DELIVERY_CED => 'Đã hủy'
    ];

    if (!empty($_POST)) {
        $newStatus = $_POST["status_delivery"] ?? $order['status_delivery'];

        // Kiểm tra nếu đang cố gắng thay đổi trạng thái thành "Đã hủy"
        if ($newStatus == STATUS_DELIVERY_CED) {
            // Ngăn không cho hủy đơn hàng nếu đơn hàng đã ở trạng thái cuối cùng
            if (in_array($order['status_delivery'], [
                STATUS_DELIVERY_WFP,
                STATUS_DELIVERY_WFD,
                STATUS_DELIVERY_ED
            ])) {
                $_SESSION['errors'][] = 'Không thể hủy đơn hàng đã đang được xử lý hoặc đã giao.';
                header('location: ' . BASE_URL_ADMIN . '?act=order-update&id=' . $orderId);
                exit();
            }
        }

        // Cập nhật trạng thái thanh toán thành "Đã thanh toán" nếu trạng thái đơn hàng là "Đã giao"
        if ($newStatus == STATUS_DELIVERY_ED) {
            $data = [
                'status_delivery' => $newStatus,
                'status_payment' => STATUS_PAYMENT_PAID, // Cập nhật trạng thái thanh toán thành "Đã thanh toán"
                'updated_at' => date('Y-m-d H:i:s')
            ];
        } else {
            $data = [
                'status_delivery' => $newStatus,
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }

        // Validate dữ liệu (Có thể bật lại phần này nếu bạn có hàm validate)
        // validateOrderUpdate($orderId, $data);

        try {
            $GLOBALS['connect']->beginTransaction(); // Bắt đầu giao dịch

            update('orders', $orderId, $data); // Cập nhật đơn hàng

            $GLOBALS['connect']->commit(); // Xác nhận giao dịch
        } catch (\Exception $e) {
            $GLOBALS['connect']->rollback(); // Hoàn tác giao dịch nếu có lỗi
            debug($e); // Hiển thị lỗi để debug
        }

        $_SESSION['success'] = 'Cập nhật đơn hàng thành công'; // Thông báo thành công

        header('location: ' . BASE_URL_ADMIN . '?act=order-update&id=' . $orderId);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php'; // Hiển thị giao diện cập nhật đơn hàng
}

 