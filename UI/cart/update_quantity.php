<?php
require '../../connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['MaSP'], $_POST['action'])) {
    $cart_id = (int)$_POST['MaSP'];
    $action = $_POST['action'];

    // Lấy số lượng hiện tại
    $stmt = $db->prepare("SELECT quantity FROM giohang WHERE MaSP = ?");
    $stmt->execute([$cart_id]);
    $item = $stmt->fetch();

    if (!$item) {
        echo json_encode(['status' => 'not_found']);
        exit;
    }

    $quantity = (int)$item['quantity'];

    if ($action === 'increase') {
        $quantity++;
        $stmt = $db->prepare("UPDATE giohang SET quantity = ? WHERE MaSP = ?");
        $stmt->execute([$quantity, $cart_id]);
        echo json_encode(['status' => 'updated', 'quantity' => $quantity]);
    } else if ($action === 'decrease') {
        $quantity--;
        if ($quantity <= 0) {
            // Xóa nếu số lượng <= 0
            $db->prepare("DELETE FROM giohang WHERE MaSP = ?")->execute([$cart_id]);
            echo json_encode(['status' => 'removed']);
        } else {
            $stmt = $db->prepare("UPDATE giohang SET quantity = ? WHERE MaSP = ?");
            $stmt->execute([$quantity, $cart_id]);
            echo json_encode(['status' => 'updated', 'quantity' => $quantity]);
        }
    } else {
        echo json_encode(['status' => 'invalid_action']);
    }
} else {
    echo json_encode(['status' => 'invalid_request']);
}
?>