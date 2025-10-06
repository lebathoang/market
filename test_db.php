<?php
require_once __DIR__ . '/../connect.php'; // sửa đường dẫn nếu khác

try {
    $db = getDatabaseConnection();
    echo "✅ Connected successfully!";
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>