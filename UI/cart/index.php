<?php
$number = 1;
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
        <!-- <div class="container">
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
                        <p>📞 1900 6750</p>
                        <p>💬 Chúng tôi trên Facebook</p>
                        <p>Giờ mở cửa (08:00 - 18:00 tối)</p>
                        <p><a href="#">Liên hệ</a></p>
                    </div>

                    <div class="box">
                        <h4>Mua sắm cùng EVO OFFICE</h4>
                        <ul>
                            <li>✅ Sản phẩm đẹp, thân thiện với môi trường</li>
                            <li>✅ Không lo về giá</li>
                            <li>✅ Miễn phí vận chuyển cho đơn hàng từ 1.500.000 VNĐ</li>
                        </ul>
                        <p>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/512px-MasterCard_Logo.svg.png" alt="Mastercard">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/Cash_payment_icon.png" alt="Tiền mặt">
                        </p>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="breadcrumbs"><a href="../home/index.php">Trang chủ</a> / Giỏ hàng</div>
            <div class="cart-container">
                <div class="cart-left">
                    <h3>Giỏ hàng (1 sản phẩm)</h3>
                    <div class="cart-item">
                        <img src="../../images/maytinh.jpg" alt="Máy tính">
                        <div class="cart-info">
                            <h4>Máy tính khoa học Flexioffice FLEXIO Fx590VN - Tím</h4>
                            <span>Thương hiệu: Thiên Long</span>
                            <a href="#">Xóa</a>
                        </div>
                        <div class="cart-price">382.000₫</div>
                        <div class="quantity-control">
                            <button>-</button>
                            <input type="text" value="1">
                            <button>+</button>
                        </div>
                    </div>
                    <div class="cart-summary">
                        <p>Tạm tính: <strong>382.000₫</strong></p>
                        <p>Thành tiền: <strong>382.000₫</strong></p>
                        <button class="btn-checkout">THANH TOÁN NGAY</button>
                    </div>
                </div>
                <div class="cart-right">
                    <div class="box">
                        <h4>Dịch vụ khách hàng</h4>
                        <p>Bạn cần sự hỗ trợ từ chúng tôi? Hãy liên hệ ngay</p>
                        <p>📞 1900 6750</p>
                        <p>💬 Chúng tôi trên Facebook</p>
                        <p>Giờ mở cửa (08:00 - 18:00 tối)</p>
                        <p><a href="#">Liên hệ</a></p>
                    </div>
                    <div class="box">
                        <h4>Mua sắm cùng EVO OFFICE</h4>
                        <ul>
                            <li class="li"><i class="fa-solid fa-check"></i> Sản phẩm đẹp, thân thiện với môi trường</li>
                            <li class="li"><i class="fa-solid fa-check"></i> Không lo về giá</li>
                            <li class="li"><i class="fa-solid fa-check"></i> Miễn phí vận chuyển cho đơn hàng từ 1.500.000 VNĐ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("../layout/footer.php")
        ?>
    </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>