<?php
require_once dirname(__DIR__, 2) . '/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['MaDM'])) {
    $cart_id = (int)$_POST['MaDM'];

    $stmt = $db->prepare("DELETE FROM danhmuc WHERE MaDM = ?");
    if ($stmt->execute([$cart_id])) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'invalid';
}

?>