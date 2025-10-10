<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
                        <button class="active">Đăng nhập</button>
                        <button><a href="../register/register.php">Đăng ký</a></button>

                    </div>
                    <form method="post" action="./handle_login.php">
                        <label for="email">Tên đăng nhập*</label>
                        <input type="text" name="tendangnhap" placeholder="Tên đăng nhập">

                        <label for="password" style="margin-top: 9px">Mật khẩu*</label>
                        <input type="password" name="matkhau" placeholder="Mật khẩu">

                        <a href="../register/register.php" class="forgot-password">Quên mật khẩu?</a>

                        <button type="submit" class="login-btn" name="login">ĐĂNG NHẬP</button>
                    </form>
                    <p class="security-note">Evo Office cam kết bảo mật và sẽ không bao giờ chia sẻ thông tin của bạn.</p>
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