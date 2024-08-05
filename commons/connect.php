<?php
$hostname = DB_HOST;
$dbname = DB_NAME;
$username = DB_USERNAME;
$password = DB_PASSWORD;

try {
    $connect = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Cài đặt chế độ trả dữ liệu
    $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // echo "connected";
} catch (PDOException $e) {
    // $e->getMessage();
    debug("Connection error: " . $e->getMessage());
}
