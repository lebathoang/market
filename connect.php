<?php
try {
        // Kiểm tra có hỗ trợ PDO không
        if (!class_exists("PDO")) {
            throw new Exception("PDO not supported");
        }

        // Lấy biến môi trường từ Heroku (JAWSDB_URL)
        $dbUrl = getenv("JAWSDB_URL");

        if ($dbUrl) {
            // Nếu chạy trên Heroku → parse URL
            $url = parse_url($dbUrl);

            $server   = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $database = ltrim($url["path"], '/');
            $port     = $url["port"] ?? 3306; // Phòng khi thiếu port

            // Tạo DSN kết nối tới MySQL
            $dsn = "mysql:host={$server};port={$port};dbname={$database};charset=utf8mb4";

            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } else {
            // Nếu chạy local (XAMPP)
            $dsn = "mysql:host=127.0.0.1;dbname=database;charset=utf8mb4";
            $pdo = new PDO($dsn, "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }

    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
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