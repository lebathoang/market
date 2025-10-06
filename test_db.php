<?php
// Hiển thị toàn bộ lỗi PHP (Heroku tắt sẵn nên phải bật lại)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 👉 Nếu connect.php ở thư mục khác, sửa đường dẫn cho đúng
require_once __DIR__ . '/connect.php';

try {
    $db = getDatabaseConnection();
    echo "✅ Connected successfully!";
} catch (PDOException $e) {
    echo "❌ Database error: " . $e->getMessage();
} catch (Throwable $t) {
    echo "❌ General error: " . $t->getMessage();
}
?>