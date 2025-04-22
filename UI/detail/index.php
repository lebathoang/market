<?php
include("../../connect.php");
session_start();

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID sản phẩm không hợp lệ.");
}

$id = (int)$_GET['id'];


$stmt = $db->prepare("SELECT * FROM sanpham WHERE MaSP = ?");
$stmt->execute([$id]);
$detail = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$detail) {
    die("Không tìm thấy sản phẩm.");
}

$arr = $db->query("SELECT * FROM sanpham WHERE MaSP < 5");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrap">
        <?php
        include("../layout/header.php");
        ?>
        <div class="main">
            <div class="container">
                <div class="first_content">
                    <div class="left-section">
                        <div class="product-img">
                            <img src="<?php echo $detail["Hinhanh"] ?>" alt="">
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="breadcrumbs"><a href="../home/index.php">Trang chủ</a> / Giỏ hàng</div>
                        <div class="product-title"><?php echo $detail["TenSP"] ?></div>
                        <div class="price"><?php echo number_format(($detail["Gia"] - ($detail["Gia"] * ($detail["Giamgia"] / 100))), 0) ?>.000đ<span class="old-price"><?php echo $detail["Gia"] ?>.000đ</span></div>
                        <div class="quantity">
                            <div class="quantity-control">
                                <button>-</button>
                                <input type="text" value="1">
                                <button>+</button>
                            </div>
                            <div class="wrap_buy">
                                <button type="submit" class="buy" name="buy"><i class="fa-solid fa-cart-plus"></i> Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="d-inline-flex gap-1">
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Mô tả</a>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Giới thiệu</button>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                <div class="product-details">
                                    <table class="product-table">
                                        <?php echo $detail["Mota"] ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                <div class="about-section">
                                    <h2>Giới thiệu</h2>
                                    <p>Evo Office Online là website thương mại điện tử thuộc Công ty Cổ phần Evo Themes. Chúng tôi có kinh nghiệm hơn 36 năm trong ngành nghiên cứu, sản xuất và phân phối bút viết, văn phòng phẩm, học cụ và dụng cụ mỹ thuật. Evo Office Online cung cấp các mặt hàng cho nhiều đối tượng khách hàng khác nhau, từ học sinh, sinh viên, giới văn phòng, từ sản phẩm cao cấp cho đến các loại bút viết phổ thông. Tất cả đều được tập đoàn Evo Themes nghiên cứu, sản xuất và phân phối.</p>
                                    <p>Evo Office Online ra đời với mong muốn mang sự tiện lợi cho khách hàng có nhu cầu sản phẩm văn phòng, học cụ, sản phẩm mỹ thuật có thể dễ dàng tiếp cận và chọn mua sản phẩm một cách nhanh chóng. Ngoài ra, Evo Office Online còn mong muốn thay đổi thói quen tiêu dùng chọn mua văn phòng phẩm truyền thống, đem đến cho khách hàng một hệ thống cung cấp các sản phẩm văn phòng, giáo dục trực tuyến một nơi uy tín và đáng tin cậy.</p>
                                    <p>Evo Office Online đặt mục tiêu trở thành sàn thương mại điện tử hàng đầu Việt Nam chuyên về sản phẩm văn phòng, học cụ, dụng cụ mỹ thuật và tất cả các sản phẩm liên quan đến giáo dục.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" style="width: 100%;">
                    <h2>Sản phẩm liên quan</h2>
                    <div class="products">
                        <?php
                        foreach ($arr as $value) {
                        ?>
                            <form action="" method="post" class="product">
                                <span class="discount"><?php echo $value["Giamgia"] ?>%</span>
                                <div class="wrap_img">
                                    <img src="<?php echo $value["Hinhanh"] ?>" name="image" alt="<?= $value['TenSP'] ?>">
                                </div>
                                <p name="name"><?php echo $value["TenSP"] ?></p>
                                <span class="price new" name="price"><?php echo number_format(($value["Gia"] - ($value["Gia"] * ($value["Giamgia"] / 100))), 0) ?>.000đ</span>
                                <span class="price_old"><?php echo $value["Gia"] ?>.000đ</span>
                                <div class="wrap_buy">
                                    <button class="buy" name="save" >Mua ngay</button>
                                    <button class="buy"><a href="../detail/index.php?id=<?= $value['MaSP'] ?>">Chi tiết</a></button>
                                </div>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            include("../layout/footer.php");
            ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>