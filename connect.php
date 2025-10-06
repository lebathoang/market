<?php
    try {
        if (!class_exists("PDO")) {
            throw new Exception("PDO not supported");
        }

        $dbUrl = getenv("JAWSDB_URL");

        if ($dbUrl && $dbUrl !== "") {
            $url = parse_url($dbUrl);

            $server   = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $database = ltrim($url["path"], '/');
            $port     = $url["port"] ?? 3306;

            // DÙNG host + port rõ ràng
            $dsn = "mysql:host={$server};port={$port};dbname={$database};charset=utf8mb4";

            $pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);

            return $pdo;
        } else {
            // Khi chạy local
            $dsn = "mysql:host=127.0.0.1;dbname=database;charset=utf8mb4";
            $pdo = new PDO($dsn, "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }

    } catch (PDOException $e) {
        die("Error SQLSTATE[" . $e->getCode() . "]: " . $e->getMessage());
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