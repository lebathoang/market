<?php
require_once("../../connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['MaSP'])) {
    $cart_id = (int)$_POST['MaSP'];

    $stmt = $db->prepare("DELETE FROM sanpham WHERE MaSP = ?");
    if ($stmt->execute([$cart_id])) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'invalid';
}

?>