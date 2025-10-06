<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/connect.php';

$db = getDatabaseConnection();

$cart = $db->query("select COUNT(*) AS total from giohang");
$row = $cart->fetch(PDO::FETCH_ASSOC);

$products = $db->query("select * from giohang");
$array_cart = $db->query("select * from giohang");

$sum = 0;
foreach ($products as $value) {
    $sum += sprintf("%.3f", (($value["Gia"] - ($value["Gia"] * ($value["Giamgia"] / 100))) * $value["quantity"]));
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="wrap">
        <?php
        include("../layout/header.php")
        ?>

        <?php if (empty($array_cart)): ?>
            <div class="container">
                <div class="breadcrumbs"><a href="../home/index.php">Trang chủ</a> / Giỏ hàng</div>
                <div class="cart-container">
                    <div class="cart-lefts">
                        <img src="../../images/shopping-cart-empty.svg" alt="Giỏ hàng trống">
                        <p>Giỏ hàng (0 sản phẩm)</p>
                        <a href="../home/index.php" class="btn">TIẾP TỤC MUA HÀNG</a>
                    </div>
                    <div class="cart-right">
                        <div class="box">
                            <h4>Dịch vụ khách hàng</h4>
                            <p>Bạn cần sự hỗ trợ từ chúng tôi? Hãy liên hệ ngay</p>
                            <p><i class="fa-solid fa-phone"></i> 1900 6750</p>
                            <p><i class="fa-solid fa-message"></i> Chúng tôi trên Facebook</p>
                            <p>Giờ mở cửa (08:00 - 18:00 tối)</p>
                            <p><a href="#">Liên hệ</a></p>
                        </div>
                        <div class="box">
                            <h4>Mua sắm cùng EVO OFFICE</h4>
                            <ul>
                                <li style="list-style: none"><i class="fa-solid fa-check"></i> Sản phẩm đẹp, thân thiện với môi trường</li>
                                <li style="list-style: none"><i class="fa-solid fa-check"></i> Không lo về giá</li>
                                <li style="list-style: none"><i class="fa-solid fa-check"></i> Miễn phí vận chuyển cho đơn hàng từ 1.500.000 VNĐ</li>
                            </ul>
                            <p>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/512px-MasterCard_Logo.svg.png" alt="Mastercard">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/Cash_payment_icon.png" alt="Tiền mặt">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="container" style="width: 100%;">
                <div class="breadcrumbs"><a href="../home/index.php">Trang chủ</a> / Giỏ hàng</div>
                <div class="cart-container">
                    <div class="cart-left">
                        <h3>Giỏ hàng (<?php echo $row['total'] ?> sản phẩm)</h3>
                        <div class="wrap_cart_item">
                            <?php foreach ($array_cart as $value) { ?>
                                <form class="cart-item" method="post">
                                    <img src="<?php echo $value["Hinhanh"] ?>" alt="<?php echo $value["TenSP"] ?>">
                                    <div class="cart-info">
                                        <h4><?php echo $value["TenSP"] ?></h4>
                                        <span>Xuất Xứ: <?php echo $value["Xuatxu"] ?></span>
                                        <button class="delete" onclick="deleteCartItem(<?= $value['MaSP'] ?>)">Xóa</button>
                                    </div>
                                    <div class="cart-price"><?php echo number_format(($value["Gia"] - ($value["Gia"] * ($value["Giamgia"] / 100))), 0, '.', '.') * $value["quantity"] ?>đ</div>
                                    <div class="quantity-control">
                                        <button class="btn" onclick="updateQuantity(<?= $value['MaSP'] ?>, 'decrease')">–</button>
                                        <span id="qty-<?= $value['MaSP'] ?>"><?= $value['quantity'] ?></span>
                                        <button class="btn" onclick="updateQuantity(<?= $value['MaSP'] ?>, 'increase')">+</button>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                        <div class="cart-summary">
                            <p><strong><?php echo "Thành tiền: " . number_format($sum, 0, '.', '.') ?>đ</strong></p>
                            <button class="btn-checkout">Thanh Toán Ngay</button>
                            <button class="btn-checkout"><a class="btn-checkout" href="../home/index.php">Tiếp Tục Mua</a></button>
                        </div>
                    </div>
                    <div class="cart-right">
                        <div class="box">
                            <h4>Dịch vụ khách hàng</h4>
                            <p>Bạn cần sự hỗ trợ từ chúng tôi? Hãy liên hệ ngay</p>
                            <p><i class="fa-solid fa-phone"></i> 1900 6750</p>
                            <p><i class="fa-solid fa-message"></i> Chúng tôi trên Facebook</p>
                            <p>Giờ mở cửa (08:00 - 18:00 tối)</p>
                            <p><a href="#">Liên hệ</a></p>
                        </div>
                        <div class="box">
                            <h4>Mua sắm cùng EVO OFFICE</h4>
                            <ul>
                                <li style="list-style: none"><i class="fa-solid fa-check"></i> Sản phẩm đẹp, thân thiện với môi trường</li>
                                <li style="list-style: none"><i class="fa-solid fa-check"></i> Không lo về giá</li>
                                <li style="list-style: none"><i class="fa-solid fa-check"></i> Miễn phí vận chuyển cho đơn hàng từ 1.500.000 VNĐ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php
        include("../layout/footer.php")
        ?>
    </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>

<script>
    function deleteCartItem(cartId) {
        if (confirm("Bạn muốn xóa sản phẩm này khỏi giỏ hàng?")) {
            fetch('delete_cart_item.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'MaSP=' + cartId
                })
                .then(res => res.text())
                .then(data => {
                    if (data === 'success') {
                        document.getElementById('cart-' + cartId).remove();
                        alert("Đã xóa khỏi giỏ hàng!");
                    } else {
                        alert("Lỗi xóa: " + data);
                    }
                });
        }
    }

    function updateQuantity(cartId, action) {
        fetch('update_quantity.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'MaSP=' + cartId + '&action=' + action
            })
            .then(res => res.json())
            .then(data => {
                if (data.status === 'removed') {
                    document.getElementById('item-' + cartId).remove();
                } else if (data.status === 'updated') {
                    document.getElementById('qty-' + cartId).innerText = data.quantity;
                } else {
                    alert('Lỗi cập nhật!');
                }
            });
    }
</script>
