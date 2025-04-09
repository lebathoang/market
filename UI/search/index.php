<?php
include("../../connect.php");

// Xu ly tim kiem khi nguoi dung gui form
if (isset($_POST['keyword'])) {
    $keyword = $_POST['keyword'];

    // Su dung cau lenh SQL voi prepared statement
    $stmt = $db->prepare("SELECT * FROM products WHERE name LIKE :keyword");

    // Lien ket tham se voi prepared statement
    $stmt->bindValue(':keyword', "%" . $keyword . "%", PDO::PARAM_STR);

    // Thuc thi cau lenh
    $stmt->execute();

    // Lay ket qua
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

}

$db = null;

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evo Office</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="wrap">
        <?php
        include("../layout/header.php");
        ?>
        <!-- Content -->
        <main>
            <div class="content">
                <div class="content_products">
                    <section class="products">
                        <?php
                        foreach ($result as $value) {
                        ?>
                            <div class="product">
                                <span class="discount">31%</span>
                                <img src="../../images/maytinh.jpg" alt="Máy tính Flexoffice CAL-015">
                                <p><?php echo $value["name"]?></p>
                                <span class="price new"><?php echo $value["price"]?>.000đ</span>
                                <span class="price old"><?php echo $value["price"]?>.000đ</span>
                                <button class="buy">Mua ngay</button>
                            </div>
                        <?php
                        }
                        ?>
                    </section>
                </div>
                <div>
                    <h2>TƯ VẤN SẢN PHẨM</h2>
                    <div class="main-content">
                        <div class="featured">
                            <img src="../../images/chi-thoi-gian-co-the-cat-loi.jpg" alt="Review sách">
                            <div class="description">
                                <h3>Review Chỉ Thời Gian Có Thể Cất Lời - Jeffrey Archer</h3>
                                <p>Nếu như bạn đã từng đọc, từng biết đến cuốn tiểu thuyết “Hai số phận” của Jeffrey Archer thì không thể bỏ lỡ một siêu tác phẩm của tác giả này là “Biên niên Clifton”. Cuốn sách tập 1 “Chỉ thời gian...</p>
                            </div>
                        </div>
                        <div class="sidebar">
                            <ul>
                                <li>
                                    <img src="../../images/review-nguoi-la-tren-tau-2.jpg" alt="">
                                    <div class="decrip">
                                        <a href="#">Review sách Người Lạ Trên Tàu - Patricia Highsmith</a>
                                        <p class="articles">"Khi trở nên kích động, thì chỉ cần một chuyện nhỏ nhặt nhất thôi cũng có thể đẩy còn người ta xuống vực thẳm". Đây là...</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../images/tieu-thuyet-trinh-tham-nguoi-bien-mat.jpg" alt="">
                                    <div class="decrip">
                                        <a href="#">Người Biến Mất - Tác phẩm trinh thám nổi tiếng của Jeffery Deaver</a>
                                        <p class="articles">Người Biến Mất - Ảo thuật làm nên những điều không tưởng, đỉnh cao của Plot Twist là đây. Tiểu thuyết trinh thám nổi ....</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../images/baomi-161811031819-thanh-cong.jpg" alt="">
                                    <div class="decrip">
                                        <a href="#">“Trò Đùa Của Sự Ngẫu Nhiên” - Thành Đạt Hay Giàu Có Đều Phải Nhờ Vào May Mắn</a>
                                        <p class="articles">Bạn nghĩ những người thành đạt và giàu có nhờ vào tài trí thiên bẩm, bộ não sắc sảo hay sự nỗ lực chăm chỉ? Không, những ...</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../images/chang-ai-chet-duoi-trong-mo-hoi-ma-chi-chet-chim-trong-luoi-bieng.jpg" alt="">
                                    <div class="decrip">
                                        <a href="#">Những sự thật thú vị về một người bình thường có thể sống thọ hơn người thông minh</a>
                                        <p class="articles">Giới thiệu về cuốn sách "Chẳng Ai Chết Đuối Trong Mồ Hôi Mà Chỉ Chết Chìm Trong Lười Biếng". Chẳng Ai Chết Đuối Trong... </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../images/covid_19.jpg" alt="">
                                    <div class="decrip">
                                        <a href="#">Tin tức về chuyển nhượng 1/4: MU mua Cunha, Arsenal ký Gyokeres</a>
                                        <p class="articles">MU liên hệ ký Matheus Cunha, Arsenal đàm phán Viktor Gyokeres, Napoli để đề nghị mua Alejandro Garnacho...</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="brands">
                        <img src="../../images/marvy.jpg" alt="Marvy">
                        <img src="../../images/thienlong.jpg" alt="Thiên Long">
                        <img src="../../images/artline.jpg" alt="Artline">
                        <img src="../../images/campus.jpg" alt="Campus">
                        <img src="../../images/stabilo.jpg" alt="Stabilo">
                        <img src="../../images/plus.jpg" alt="Plus">
                        <img src="../../images/kinary.jpg" alt="Kinary">
                        <img src="../../images/sdi.jpg" alt="SDI">
                    </div>
                </div>
        </main>
        <div>
            <?php
            include("../layout/footer.php");
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>