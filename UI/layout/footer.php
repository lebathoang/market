<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./footer.css">
</head>

<style>
  .footer {
    background: #222;
    color: white;
    padding: 10px 0;
    text-align: center;
  }

  .footer a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
  }
  .footer .facebook:hover {
    color: blue;
  }
  .footer .twitter:hover {
    color: skyblue;
  }
  .footer .youtube:hover {
    color: red;
  }
  .footer .instagram:hover {
    color: orange;
  }

  .footer-content {
    background: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
  }

  .footer-section {
    flex: 1;
    padding: 10px;
  }

  .footer-section h3 {
    font-size: 16px;
    margin-bottom: 10px;
    font-weight: 600;
  }

  .footer-section ul {
    list-style: none;
    padding: 0;
  }

  .footer-section ul li {
    margin: 5px 0;
  }

  .footer-section ul li:hover {
    background-color: silver;
  }

  .footer-section ul li a {
    text-decoration: none;
    color: #333;
    padding-left: 5px;
  }

  .logo img {
    height: 50px;
    text-align: center;
  }

  .contact-info {
    margin-top: 10px;
  }

  .customer-support {
    text-align: center;
  }

  .customer-support img {
    height: 40px;
    display: block;
    margin: auto;
  }
</style>

<body>
  <div class="footer">
    <a class="facebook" href="#"><i class="fa-brands fa-facebook"></i> Facebook</a>
    <a class="twitter" href="#"><i class="fa-brands fa-twitter"></i> Twitter</a>
    <a class="youtube" href="#"><i class="fa-brands fa-youtube"></i> Youtube</a>
    <a class="instagram" href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
  </div>
  <div class="footer-content">
    <div class="footer-section">
      <h3>THÔNG TIN CÔNG TY</h3>
      <ul>
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Sản phẩm mới</a></li>
        <li><a href="#">Tin tức</a></li>
        <li><a href="#">Liên hệ</a></li>
        <li><a href="#">Khuyến mãi</a></li>
        <li><a href="#">Đặt hàng</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>CHÍNH SÁCH</h3>
      <ul>
        <li><a href="#">Khách hàng</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Sản phẩm mới</a></li>
        <li><a href="#">Tin tức</a></li>
        <li><a href="#">Liên hệ</a></li>
        <li><a href="#">Khuyến mãi</a></li>
        <li><a href="#">Đặt hàng</a></li>
      </ul>
    </div>
    <div class="footer-section logo">
      <img src="../../images/logo.png" alt="Evo Office">
      <div class="contact-info">
        <p><strong>Địa chỉ:</strong> Km 3 + 350 Đường Phan Trọng Tuệ ,Thanh Trì, TP.Hà Nội</p>
        <p><strong>Email:</strong> evooffice@gmail.com</p>
        <p><strong>Điện thoại:</strong> 1900 5678</p>
        <p><strong>Zalo:</strong> 1900 5678</p>
      </div>
    </div>
    <div class="footer-section customer-support">
      <img src="../../images/icon_1.svg" alt="Hỗ trợ khách hàng">
      <p><strong>Hỗ trợ khách hàng</strong></p>
      <p>Hỗ trợ 24/7</p>
      <img src="../../images/icon_2.svg" alt="Giao hàng miễn phí">
      <p><strong>Giao hàng miễn phí</strong></p>
      <p>Tất cả đơn hàng trên 200K</p>
    </div>
  </div>
</body>

</html>