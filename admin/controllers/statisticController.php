<?php
function orderStatistics() {
    try {
        $statistics = getOrderStatistics();
        
        $title = 'Danh sách Đơn hàng';
        $view = "statistics/order-statistic";
        $script = 'datatable';
        $script2 = 'statistics/script';
        $style = 'datatable';
        require_once PATH_VIEW_ADMIN . 'layouts/master.php';
    } catch (\Exception $e) {
        debug($e);
    }
}

?>