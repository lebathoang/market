<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="wrap">

        <?php
        include("../../UI/layout/header.php")
        ?>

        <div class="container">
            <div class="left-panel">
                <img src="../../images/quyen_loi_khach_hang.jpg" alt="Shopping Illustration" class="illustration">
                <h2>QUYỀN LỢI THÀNH VIÊN</h2>
                <ul>
                    <li><i class="fa-solid fa-check"></i> Mua sản phẩm một cách cực kỳ dễ dàng, nhanh chóng</li>
                    <li><i class="fa-solid fa-check"></i> Theo dõi chi tiết đơn hàng, địa chỉ thanh toán dễ dàng</li>
                    <li><i class="fa-solid fa-check"></i> Nhận nhiều chương trình ưu đãi hấp dẫn từ chúng tôi</li>
                </ul>
            </div>
            <div class="right-panel">
                <div class="form-container">
                    <div class="tabs">
                        <button><a href="../login/login.php">Đăng nhập</a></button>
                        <button class="active">Đăng ký</button>

                    </div>
                    <form>
                        <label for="first-name">Họ*</label>
                        <input type="text" id="first-name" placeholder="Nhập Họ" required>

                        <label for="last-name">Tên*</label>
                        <input type="text" id="last-name" placeholder="Nhập Tên" required>

                        <label for="phone">Số điện thoại*</label>
                        <input type="tel" id="phone" placeholder="Nhập Số điện thoại" required>

                        <label for="email">Email*</label>
                        <input type="email" id="email" placeholder="Nhập Địa chỉ Email" required>

                        <label for="password">Mật khẩu*</label>
                        <input type="password" id="password" placeholder="Nhập Mật khẩu" required>

                        <button type="submit" class="submit-btn">Tạo Tài Khoản</button>
                    </form>
                    <div class="social-login">
                        <p>hoặc đăng nhập qua</p>
                        <button class="facebook-btn">Facebook</button>
                        <button class="google-btn">Google</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("../../UI/layout/footer.php")
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>