<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['MaSP'])) {
    $masp = (int)$_POST['MaSP'];

    // Lấy thông tin sản phẩm từ bảng sanpham
    $stmt = $db->prepare("SELECT * FROM sanpham WHERE MaSP = ?");
    $stmt->execute([$masp]);
    $sp = $stmt->fetch();

    if ($sp) {
        // Thêm vào bảng giohang
        $stmt = $db->prepare("
            INSERT INTO giohang (MaSP, TenSP, Hinhanh, Gia, Soluong, LoaiSP, Danhmuc, Giamgia, Xuatxu, quantity)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 1)
        ");
        $stmt->execute([
            $sp['MaSP'],
            $sp['TenSP'],
            $sp['Hinhanh'],
            $sp['Gia'],
            $sp['Soluong'],
            $sp['LoaiSP'],
            $sp['Danhmuc'],
            $sp['Giamgia'],
            $sp['Xuatxu'],
        ]);

        echo "<script>window.location.href='../cart/index.php';</script>";
    } else {
        echo "Không tìm thấy sản phẩm.";
    }
} else {
    echo "Dữ liệu không hợp lệ.";
}
?>