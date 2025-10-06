<?php

    try {
    if (class_exists("PDO")) {
        if (getenv("JAWSDB_URL")) {
            // 🔹 Nếu chạy trên Heroku (JawsDB)
            $url = parse_url(getenv("JAWSDB_URL"));
            $server   = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $database = ltrim($url["path"], '/');

            // ⚡ Bắt buộc dùng protocol=TCP để tránh lỗi 2002
            $dsn = "mysql:host={$server};port=3306;dbname={$database};charset=utf8;protocol=TCP";
            $db = new PDO($dsn, $username, $password);
        } else {
            // 🔹 Nếu chạy local (XAMPP)
            $dsn = "mysql:host=127.0.0.1;dbname=database;charset=utf8;protocol=TCP";
            $db = new PDO($dsn, "root", "");
        }

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    die();
}

$khachhang = $db->query("select * from khachhang");
$sanpham = $db->query("select * from sanpham");

function getDatabaseConnection()
{
    try {
        if (class_exists("PDO")) {
            $db = new PDO("mysql:host=localhost; dbname=database", "root", "");
            return $db;
        }
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        die();
    }
}

function getAccount()
{
    $conn = getDatabaseConnection();

    $account = $conn->query("select * from taikhoan");

    if ($account->rowCount() > 0) {
        return $account;
    } else {
        echo "Không có dữ liệu";
    }
}

function getProducts()
{

    $conn = getDatabaseConnection();

    $products = $conn->query("select * from sanpham ORDER BY MaSP DESC");

    if ($products->rowCount() > 0) {
        return $products;
    } else {
        echo "Không có dữ liệu";
    }
}
?>