<?php
include("../../connect.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $image = $_POST["image"];

    // Tạo sản phẩm
    $item = [
        "id" => $id,
        "name" => $name,
        "price" => $price,
        "image" => $image,
    ];

    // Kiểm tra giỏ hàng đã tồn tại chưa
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    }

    // Nếu sản phẩm đã tồn tại trong giỏ -> tăng số lượng
    $found = false;
    foreach ($_SESSION["cart"] as &$cart_item) {
        if ($cart_item["id"] == $product_id) {
            $cart_item["quantity"]++;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $_SESSION["cart"][] = $item;
    }

    header("Location: ../cart/index.php");
    exit;
}
