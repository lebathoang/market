<?php
require_once dirname(__DIR__, 2) . '/connect.php';

// Xu ly tim kiem khi nguoi dung gui form
if (isset($_POST['keyword'])) {
    $keyword = $_POST['keyword'];

    // Su dung cau lenh SQL voi prepared statement
    $stmt = $db->prepare("SELECT * FROM sanpham WHERE TenSP LIKE :keyword");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="wrap">
        <?php
        include __DIR__ . '../../layout/header.php';
        ?>
        <!-- Content -->
        <main>
            <div class="content">
                <div class="content_products">
                    <section class="products">
                        <?php
                        foreach ($result as $value) {
                        ?>
                            <form action="./add_to_cart.php" method="post" class="product">
                                <span class="discount"><?php echo $value["Giamgia"] ?>%</span>
                                <div class="wrap_img">
                                    <img src="<?php echo $value["Hinhanh"] ?>" name="image" alt="<?= $value['TenSP'] ?>">
                                </div>
                                <input type="hidden" name="name" value="<?= $value['TenSP'] ?>" />
                                <p name="name"><?php echo $value["TenSP"] ?></p>
                                <span class="price new" name="price"><?php echo number_format(($value["Gia"] - ($value["Gia"] * ($value["Giamgia"] / 100))), 0, '.', '.') ?>đ</span>
                                <span class="price old"><?php echo number_format($value["Gia"]), '.'?>đ</span>
                                <div class="wrap_buy">
                                    <input type="hidden" class="buy" name="id" value="<?= $value['MaSP'] ?>" />
                                    <a style="text-decoration: none;padding-top: 3px;" class="buy" name="save" href="../cart/index.php?id=<?php echo $value['MaSP'] ?>">Mua ngay</a>
                                    <button class="buy"><a href="../detail/index.php?id=<?= $value['MaSP'] ?>">Chi tiết</a></button>
                                </div>
                            </form>
                        <?php
                        }
                        ?>
                    </section>
                </div>
        </main>
        <div>
            <?php
            include __DIR__ . '../../layout/footer.php';
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>