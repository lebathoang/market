<?php
    require __DIR__ . '/../../connect.php';
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evo Office</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    }

    .wrap {
    width: 1220px;
    margin: auto;
    }

    .main_sidebar_banner {
    display: flex;
    justify-content: space-between;
    }

    /* Sidebar */
    .main_sidebar_banner .sidebar {
    width: 17%;
    background: #ffffff;
    margin: 10px;
    }

    .main_sidebar_banner .sidebar .menu {
    list-style: none;
    padding: 0;
    margin: 0;
    }

    .main_sidebar_banner .sidebar .menu li {
    padding: 7px 10px;
    border-bottom: 1px solid #ddd;
    cursor: pointer;
    }

    .main_sidebar_banner .sidebar .menu li a {
    text-decoration: none;
    color: #333;
    font-size: 13px;
    }

    /* Banner */

    .main_sidebar_banner .banner {
    width: 75%;
    }

    .main_sidebar_banner .banner img {
    width: 100%;
    height: 363px;
    }

    /* Customer Service */
    .customer-service {
    background: #ffffff;
    margin: 20px;
    width: 18%;
    }

    .customer-service ul {
    list-style: none;
    padding: 0;
    margin: 0;
    }

    .customer-service ul li {
    display: flex;
    align-items: center;
    justify-content: space-between;
    }

    .customer-service ul li img {
    width: 50px;
    height: 50px;
    }

    .customer-service ul li p {
    padding-left: 5px;
    }

    .customer-service p {
    margin-top: 10px;
    font-weight: 600;
    font-size: 14px;
    }

    .customer-service p .phoned {
    margin-right: 5px;
    color: red;
    }

    /* content */
    .content {
    margin: 20px;
    }

    .content .banner img {
    width: 100%;
    display: block;
    }

    .content .content_products {
    height: 520px;
    padding: 15px;
    overflow-y: overlay;
    }

    .content .content_products .products {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 15px;
    }

    .content .content_products .products .product {
    width: 24%;
    margin-bottom: 20px;
    background: white;
    text-align: center;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    height: 350px;
    margin-left: 11px;
    }

    .content .content_products .products .product .wrap_img {
    height: 168px;
    }

    .content .content_products .products .product .wrap_img img {
    width: 200px;
    height: 160px;
    padding-top: 15px;
    }

    .content .content_products .products .product p {
    height: 48px;
    }

    .content .content_products .products .product .wrap_buy {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    }

    .content .content_products .products .product .wrap_buy .buy {
    width: 40%;
    border: none;
    border-radius: 15px;
    background-color: rgb(0, 158, 0);
    height: 30px;
    margin-top: 8px;
    color: white;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    padding-top: 2px;
    }

    .content .content_products .products .product .wrap_buy .buy a {
    color: white;
    text-decoration: none;
    }

    .content .content_products .products .product .buy:hover {
    background-color: green;
    }

    .content .content_products .discount {
    position: absolute;
    top: 10px;
    left: 10px;
    background: red;
    color: white;
    padding: 5px;
    font-size: 12px;
    }

    .content .content_products .price {
    display: block;
    font-size: 16px;
    color: red;
    font-weight: bold;
    }

    .content .content_products .price.old {
    text-decoration: line-through;
    color: #999;
    font-size: 14px;
    }

    /*  */


    h2 {
    color: #333;
    }

    .main-content {
    display: flex;
    justify-content: space-between;
    }

    .main-content .featured {
    width: 50%;
    }

    .main-content .featured img {
    width: 100%;
    padding: 10px 0;
    }

    .main-content .featured .description {
    padding: 10px;
    }

    .main-content .sidebar {
    width: 48%;
    background: #fff;
    }

    .main-content .sidebar ul {
    list-style: none;
    padding: 0;
    }

    .main-content .sidebar ul li {
    display: flex;
    align-items: center;
    padding: 10px 0;
    }

    .main-content .sidebar ul li img {
    width: 25%;
    padding-right: 10px;
    }

    .main-content .sidebar ul li .decrip a {
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    color: #333;
    }

    .main-content .sidebar ul li .decrip a:hover {
    color: blue;
    }

    .main-content .sidebar ul li .decrip .articles {
    color: #777;
    font-size: 13px;
    margin-top: 20px;
    }

    .brands {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 20px;
    }

    .brands img {
    margin: 10px;
    height: 40px;
    }
</style>

<body>
  <div class="wrap">
    <?php
        include __DIR__ . '../../layout/header.php';
    ?>
    <?php $basePath = '/PHP/code_market'; ?>
    <!-- Content -->
    <main>
      <div class="main_sidebar_banner">
        <section class="sidebar">
          <ul class="menu">
            <li><a href="#">Sản phẩm mới</a></li>
            <li><a href="#">Văn phòng phẩm</a></li>
            <li><a href="#">Sản phẩm cao cấp - Quà...</a></li>
            <li><a href="#">Dụng cụ học tập</a></li>
            <li><a href="#">Máy in - Nhãn in</a></li>
            <li><a href="#">Vật phẩm quảng cáo</a></li>
            <li><a href="#">Bút bi</a></li>
            <li><a href="#">Bút máy</a></li>
            <li><a href="#">Xem thêm ...</a></li>
          </ul>
        </section>
        <section class="banner">
          <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel" data-bs-interval="20000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= $basePath ?>/images/sale_7.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= $basePath ?>/images/flash_sale.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= $basePath ?>/images/j.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= $basePath ?>/images/sale6.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        <section class="customer-service">
          <ul>
            <li>
              <img src="<?= $basePath ?>/images/thanh_toan_khi_nhan.jpg" alt="">
              <p>Thanh toán khi nhận hàng</p>
            </li>
            <li>
              <img src="<?= $basePath ?>/images/24h.png" alt="">
              <p>Giao hàng 24H - HN</p>
            </li>
            <li>
              <img src="<?= $basePath ?>/images/doi_tra_mien_phi.png" alt="">
              <p>14 ngày đổi trả miễn phí</p>
            </li>
            <li>
              <img src="<?= $basePath ?>/images/hang_chinh_hang.png" alt="">
              <p>Sản phẩm chính hãng</p>
            </li>
          </ul>
          <p><i class="fa-solid fa-phone phoned"></i>Dịch vụ CSKH Hotline: <strong>1900 6789</strong></p>
        </section>
      </div>
      <div class="content">
        <div class="banner">
          <img src="<?= $basePath ?>/images/banner_products_1.jpg" alt="Chẳng Cần Đến Tạp Hóa, Lên Ngay Evo Office">
        </div>
        <div class="content_products">
          <section class="products">
            <?php
                        foreach (getProducts() as $value) {
                        ?>
            <form action="./add_to_cart.php" method="POST" class="product">
              <span class="discount"><?php echo $value["Giamgia"] ?>%</span>
              <div class="wrap_img">
                <img src="<?php echo $value["Hinhanh"] ?>" name="image" alt="<?= $value['TenSP'] ?>">
              </div>
              <p name="name"><?php echo $value["TenSP"] ?></p>
              <span class="price new"
                name="price"><?php echo number_format(($value["Gia"] - ($value["Gia"] * ($value["Giamgia"] / 100))), 0, '.', '.') ?>đ</span>
              <span class="price old"><?php echo number_format($value["Gia"]) ?>đ</span>
              <div class="wrap_buy">
                <input type="hidden" name="MaSP" value="<?= $value['MaSP'] ?>">
                <button class="buy" type="submit">Mua ngay</button>
                <button class="buy"><a href="../detail/index.php?id=<?= $value['MaSP'] ?>">Chi tiết</a></button>
              </div>
            </form>
            <?php
                        }
                        ?>
          </section>
        </div>
        <div>
          <h2 style="margin-top: 25px;">TƯ VẤN SẢN PHẨM</h2>
          <div class="main-content">
            <div class="featured">
              <img src="<?= $basePath ?>/images/chi-thoi-gian-co-the-cat-loi.jpg" alt="Review sách">
              <div class="description">
                <h3>Review Chỉ Thời Gian Có Thể Cất Lời - Jeffrey Archer</h3>
                <p>Nếu như bạn đã từng đọc, từng biết đến cuốn tiểu thuyết “Hai số phận” của Jeffrey Archer thì không
                  thể bỏ lỡ một siêu tác phẩm của tác giả này là “Biên niên Clifton”. Cuốn sách tập 1 “Chỉ thời gian...
                </p>
              </div>
            </div>
            <div class="sidebar">
              <ul>
                <li>
                  <img src="<?= $basePath ?>/images/review-nguoi-la-tren-tau-2.jpg" alt="">
                  <div class="decrip">
                    <a href="#">Review sách Người Lạ Trên Tàu - Patricia Highsmith</a>
                    <p class="articles">"Khi trở nên kích động, thì chỉ cần một chuyện nhỏ nhặt nhất thôi cũng có thể
                      đẩy còn người ta xuống vực thẳm". Đây là...</p>
                  </div>
                </li>
                <li>
                  <img src="<?= $basePath ?>/images/tieu-thuyet-trinh-tham-nguoi-bien-mat.jpg" alt="">
                  <div class="decrip">
                    <a href="#">Người Biến Mất - Tác phẩm trinh thám nổi tiếng của Jeffery Deaver</a>
                    <p class="articles">Người Biến Mất - Ảo thuật làm nên những điều không tưởng, đỉnh cao của Plot
                      Twist là đây. Tiểu thuyết trinh thám nổi ....</p>
                  </div>
                </li>
                <li>
                  <img src="<?= $basePath ?>/images/baomi-161811031819-thanh-cong.jpg" alt="">
                  <div class="decrip">
                    <a href="#">“Trò Đùa Của Sự Ngẫu Nhiên” - Thành Đạt Hay Giàu Có Đều Phải Nhờ Vào May Mắn</a>
                    <p class="articles">Bạn nghĩ những người thành đạt và giàu có nhờ vào tài trí thiên bẩm, bộ não sắc
                      sảo hay sự nỗ lực chăm chỉ? Không, những ...</p>
                  </div>
                </li>
                <li>
                  <img src="<?= $basePath ?>/images/chang-ai-chet-duoi-trong-mo-hoi-ma-chi-chet-chim-trong-luoi-bieng.jpg" alt="">
                  <div class="decrip">
                    <a href="#">Những sự thật thú vị về một người bình thường có thể sống thọ hơn người thông minh</a>
                    <p class="articles">Giới thiệu về cuốn sách "Chẳng Ai Chết Đuối Trong Mồ Hôi Mà Chỉ Chết Chìm Trong
                      Lười Biếng". Chẳng Ai Chết Đuối Trong... </p>
                  </div>
                </li>
                <li>
                  <img src="<?= $basePath ?>/images/covid_19.jpg" alt="">
                  <div class="decrip">
                    <a href="#">Tin tức về chuyển nhượng 1/4: MU mua Cunha, Arsenal ký Gyokeres</a>
                    <p class="articles">MU liên hệ ký Matheus Cunha, Arsenal đàm phán Viktor Gyokeres, Napoli để đề nghị
                      mua Alejandro Garnacho...</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="brands">
            <img src="<?= $basePath ?>/images/marvy.jpg" alt="Marvy">
            <img src="<?= $basePath ?>/images/thienlong.jpg" alt="Thiên Long">
            <img src="<?= $basePath ?>/images/artline.jpg" alt="Artline">
            <img src="<?= $basePath ?>/images/campus.jpg" alt="Campus">
            <img src="<?= $basePath ?>/images/stabilo.jpg" alt="Stabilo">
            <img src="<?= $basePath ?>/images/plus.jpg" alt="Plus">
            <img src="<?= $basePath ?>/images/kinary.jpg" alt="Kinary">
            <img src="<?= $basePath ?>/images/sdi.jpg" alt="SDI">
          </div>
        </div>
    </main>
    <div>
      <?php
            include __DIR__ . '../../layout/footer.php';
            ?>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>