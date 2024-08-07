<?php

function orderCheckout()
{

    require_once PATH_VIEW . 'order.php';
}

function orderHistory()
{
    $view = 'order-history';

    $userId = $_SESSION['user']['id'];
    $orders = orderListAll($userId);

    require_once PATH_VIEW . 'layouts/master.php';
}

function orderCancel()
{
    $orderId = $_GET['order_id'];
    // Gọi hàm để hủy đơn hàng từ model
    cancelOrder($orderId);
    header('Location: ' . BASE_URL . '?act=order_history');
}
// function orderPurchase()
// {
//     if (!empty($_POST) && !empty($_SESSION['cart'])) {
//         try {
//             // Xử lý lưu vào bảng orders và order_items
//             $data = $_POST;
//             $data['user_id'] = $_SESSION['user']['id'];
//             $data['total_bill'] = calculator_total_order(false);
//             $data['status_delivery'] = STATUS_DELIVERY_WFC;
//             $data['status_payment'] = STATUS_PAYMENT_UNPAID;

//             $orderID = insert_get_last_id('orders', $data);

//             foreach ($_SESSION['cart'] as $productID => $item) {
//                 $orderItem = [
//                     'order_id'      => $orderID,
//                     'product_id'    => $productID,
//                     'quantity'      => $item['quantity'],
//                     'price'         => $item['discount'] ?: $item['price'],
//                 ];

//                 insert('order_items', $orderItem);
//             }
//             //Xử lý hậu
//             deleteCartItemByCartID($_SESSION['cartID']);
//             deleteAcc('carts', $_SESSION['cartID']);

//             unset($_SESSION['cart']);
//             unset($_SESSION['cartID']);

//         } catch (\Exception $e) {
//             debug($e);
//         }
//         header('Location: ' . BASE_URL . '?act=order_success');
//         exit();
//     }

//     header('Location: ' . BASE_URL);
// }

// function orderPurchase() {
//     if (!empty($_POST) && !empty($_SESSION['cart'])) {
//         try {
//             // Xử lý lưu vào bảng orders và order_items
//             $data = $_POST;
//             $data['user_id'] = $_SESSION['user']['id'];
//             $data['total_bill'] = calculator_total_order(false);
//             $data['status_delivery'] = STATUS_DELIVERY_WFC;
//             $data['status_payment'] = STATUS_PAYMENT_UNPAID;

//             $orderID = insert_get_last_id('orders', $data);

//             foreach ($_SESSION['cart'] as $productID => $items) {
//                 foreach ($items as $sizeID => $item) {
//                     $quantity = isset($item['quantity']) ? $item['quantity'] : 0;
//                     $price = isset($item['discount']) ? $item['discount'] : (isset($item['price']) ? $item['price'] : 0);

//                     $orderItem = [
//                         'order_id'      => $orderID,
//                         'product_id'    => $productID,
//                         'size_id'       => $sizeID,
//                         'quantity'      => $quantity,
//                         'price'         => $price,
//                     ];

//                     insert('order_items', $orderItem);
//                 }
//             }

//             // Xử lý hậu
//             deleteCartItemByCartID($_SESSION['cartID']);
//             deleteAcc('carts', $_SESSION['cartID']);

//             unset($_SESSION['cart']);
//             unset($_SESSION['cartID']);

//         } catch (\Exception $e) {
//             debug($e);
//         }
//         header('Location: ' . BASE_URL . '?act=order_success');
//         exit();
//     }

//     header('Location: ' . BASE_URL);
// }

function orderPurchase()
{
    if (!empty($_POST) && !empty($_SESSION['cart'])) {
        try {
            // Xử lý lưu vào bảng orders và order_items
            $data = $_POST;
            $data['user_id'] = $_SESSION['user']['id'];
            $data['total_bill'] = calculator_total_order(false);
            $data['status_delivery'] = STATUS_DELIVERY_WFC;

            // Kiểm tra phương thức thanh toán
            if ($_POST['payment_method'] === 'cash') {
                $data['status_payment'] = STATUS_PAYMENT_UNPAID;
            } else {
                $data['status_payment'] = STATUS_PAYMENT_PAID;
            }

            $orderID = insert_get_last_id('orders', $data);

            foreach ($_SESSION['cart'] as $productID => $items) {
                foreach ($items as $sizeID => $item) {
                    $quantity = $item['quantity'] ?? 0;
                    $price = $item['discount'] ?? ($item['price'] ?? 0);

                    $orderItem = [
                        'order_id' => $orderID,
                        'product_id' => $productID,
                        'size_id' => $sizeID,
                        'quantity' => $quantity,
                        'price' => $price,
                    ];

                    insert('order_items', $orderItem);
                }
            }



            // Chuyển hướng sang trang thanh toán MoMo nếu phương thức thanh toán là MoMo
            if ($_POST['payment_method'] === 'momo') {
                $momoPaymentUrl = generateMomoPaymentUrl($orderID, $data['total_bill']);
                header('Location: ' . $momoPaymentUrl);
                exit();
            }


            // Xử lý hậu
            deleteCartItemByCartID($_SESSION['cartID']);
            deleteAcc('carts', $_SESSION['cartID']);

            unset($_SESSION['cart']);
            unset($_SESSION['cartID']);
        } catch (\Exception $e) {
            debug($e);
        }
        header('Location: ' . BASE_URL . '?act=order_success');
        exit();
    }

    header('Location: ' . BASE_URL);
}


function generateMomoPaymentUrl($orderID, $totalBill)
{
    $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

    $partnerCode = 'MOMOBKUN20180529';
    $accessKey = 'klm05TvNBzhg7h7j';
    $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
    $orderInfo = "Thanh toán qua MoMo";
    $amount = $totalBill;
    $orderId = time() . '-' . uniqid(); // Sử dụng thời gian hiện tại và một giá trị ngẫu nhiên để tạo orderId duy nhất
    $redirectUrl = BASE_URL . '?act=order_success';
    $ipnUrl = BASE_URL . '?act=order_success';
    $extraData = "";

    $requestId = time() . "";
    $requestType = "payWithATM";

    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);

    $data = array(
        'partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature
    );

    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);

    if (isset($jsonResult['payUrl'])) {
        return $jsonResult['payUrl'];
    } else {
        throw new Exception("Error: Unable to get payment URL. " . json_encode($jsonResult));
    }
}




function momoPayment()
{
    require_once PATH_VIEW . 'momo-payment.php';
}

function orderSuccess()
{
    require_once PATH_VIEW . 'order-success.php';
}
