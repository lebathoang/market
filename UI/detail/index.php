<?php
include("../../connect.php");
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
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
                            <img src="../../images/daodocgiay.jpg" alt="Dao rọc giấy">
                        </div>
                        <div class="thumbnail-list">
                            <img src="../../images/daodocgiay.jpg" alt="Màu vàng">
                            <img src="../../images/daodocgiaydo.jpg" alt="Màu đỏ">
                            <img src="../../images/daodocgiayxanh.jpg" alt="Màu xanh">
                            <img src="../../images/daodocgiay3.jpg" alt="Màu bạc">
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="breadcrumbs"><a href="../home/index.php">Trang chủ</a> / Giỏ hàng</div>
                        <div class="product-title">Dao rọc giấy Thiên Long - Flexoffice FO-KN02</div>
                        <div class="price">10.000đ <span class="old-price">17.000đ</span></div>
                        <div class="quantity">
                            <div class="quantity-control">
                                <button>-</button>
                                <input type="text" value="1">
                                <button>+</button>
                            </div>
                            <div class="wrap_buy">
                                <button type="submit" class="buy" name="buy">Mua ngay</button>
                                <button class="buy"><a href="../detail/index.php">Chi tiết</a></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- 2 -->
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
                                        <tr>
                                            <td>Thương hiệu</td>
                                            <td>FlexOffice</td>
                                        </tr>
                                        <tr>
                                            <td>Kích thước</td>
                                            <td>dài 159mm x rộng 18mm x dày 0.4mm</td>
                                        </tr>
                                        <tr>
                                            <td>Chất liệu</td>
                                            <td>Thân bọc nhựa, Lưỡi bằng thép không rỉ</td>
                                        </tr>
                                        <tr>
                                            <td>Quy cách</td>
                                            <td>1 cây dao/hộp nhỏ; 12 hộp nhỏ/inner; 480 cây/thùng</td>
                                        </tr>
                                        <tr>
                                            <td>Màu sắc</td>
                                            <td>Xanh, vàng, đỏ</td>
                                        </tr>
                                        <tr>
                                            <td>Bảo quản</td>
                                            <td>Nơi khô ráo, tránh lửa</td>
                                        </tr>
                                    </table>

                                    <div class="highlight-title">Tính năng nổi bật:</div>
                                    <ul class="highlight-list">
                                        <li>Sản phẩm được thiết kế thon gọn, có ngấn và răng trên cán dao, tạo cảm giác vừa thoải mái vừa chắc chắn và thuận tiện khi sử dụng.</li>
                                        <li>Chuỗi dao có rãnh để bẻ các đoạn lưỡi dao khi cần thiết.</li>
                                        <li>Khóa dao giữ lưỡi dao cố định, an toàn khi sử dụng.</li>
                                    </ul>
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
                    <!-- 3 -->
                <div class="container">
                    <h2>Sản phẩm liên quan</h2>
                    <div class="products">
                        <div class="product">
                            <span class="discount">31%</span>
                            <img src="../../images/maytinh.jpg" alt="Máy tính">
                            <p>Máy tính Flexoffice</p>
                            <p class="price">382.000đ <span class="old-price">550.000đ</span></p>
                            <div class="wrap_buy">
                                <button type="submit" class="buy" name="buy">Mua ngay</button>
                                <button class="buy"><a href="../detail/index.php">Chi tiết</a></button>
                            </div>
                        </div>
                        <div class="product">
                            <span class="discount">40%</span>
                            <img src="../../images/daodocgiay2.jpg" alt="Dao rọc giấy">
                            <p>Dao rọc giấy Flexoffice</p>
                            <p class="price">12.000đ <span class="old-price">20.000đ</span></p>
                            <div class="wrap_buy">
                                <button type="submit" class="buy" name="buy">Mua ngay</button>
                                <button class="buy"><a href="../detail/index.php">Chi tiết</a></button>
                            </div>
                        </div>
                        <div class="product">
                            <span class="discount">33%</span>
                            <img src="../../images/kimbam1.jpg" alt="Bấm kim">
                            <p>Bấm kim số 10</p>
                            <p class="price">30.000đ <span class="old-price">45.000đ</span></p>
                            <div class="wrap_buy">
                                <button type="submit" class="buy" name="buy">Mua ngay</button>
                                <button class="buy"><a href="../detail/index.php">Chi tiết</a></button>
                            </div>
                        </div>
                        <div class="product">
                            <span class="discount">24%</span>
                            <img src="../../images/kimbam2.jpg" alt="Bấm kim đại">
                            <p>Bấm kim đại Flexoffice</p>
                            <p class="price">380.000đ <span class="old-price">500.000đ</span></p>
                            <div class="wrap_buy">
                                <button type="submit" class="buy" name="buy">Mua ngay</button>
                                <button class="buy"><a href="../detail/index.php">Chi tiết</a></button>
                            </div>
                        </div>
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