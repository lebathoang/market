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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    .content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid silver;
        margin-bottom: 20px;
    }

    .col-8 h4 {
        font-size: 24px;
        font-weight: 600;
        padding-bottom: 10px;
    }

    .col-8 .decription p {
        font-size: 12px;
        font-weight: 600;
        color: #2e2e2e;
    }

    .col-8 .price {
        color: silver;
        font-size: 16px;
    }

    .main {
        flex-wrap: wrap;
    }

    .main .products {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-bottom: 10px;
    }

    .main .products .wrap_img {
        height: 125px;
    }

    .main .products .wrap_img img {
        width: 80px;
        height: 90px;
    }

    .main .products .box {
        text-align: center;
        border: 1px solid silver;
        width: 23.5%;
        border-radius: 10px;
        margin: 5px;
        padding-bottom: 10px;
    }

    .main .products .box .wrap_title {
        margin-bottom: 25px;
    }

    .main .products .box .wrap_title a {
        font-size: 18px;
        text-decoration: none;
        margin-bottom: 25px;
    }

    .wrap_button {
        margin-top: 5px;
    }

    .wrap_button button {
        width: 100px;
        height: 25px;
        border: none;
        background-color: #00ab00;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
    }

    .wrap_button button a {
        text-decoration: none;
        color: white;
    }

    .wrap_button button:hover {
        background-color: green;
    }

    .main .title {
        text-decoration: underline;
        padding-bottom: 5px;
    }
</style>

<body>
    <div class="wrap">
        <div class="banner">
            <img src="https://img.pikbest.com/templates/20240706/fruit-fruit-banner-for-supermarket-store-green-background_10654794.jpg!w700wp"
                alt="">
        </div>
        <?php
        include("../layout/header.php");
        ?>
        <div class="back">
            <a href="../home/run.php">
                <i class="fa-solid fa-home"></i>
                <i class="fa-solid fa-chevron-left"></i>
                <span>Detail</span>
            </a>
        </div>
        <div class="main">
            <div class="content">
                <div class="col-4">
                    <img src="https://benhvienk.vn/data/media/1601/images/16100958642348_tao-do-my-red-delicious-size-36-44.jpg"
                        alt="">
                </div>
                <div class="col-8">
                    <h4>Táo Bắc Mỹ</h4>
                    <div class="decription">
                        <p>Táo Bắc Mỹ là một loại trái cây ôn đới và được nhập khẩu từ vùng ôn đới bắc mỹ.
                            Nó là một loại hoa quả có nhiều vitamin và chất dinh dưỡng cho cơ thể con người.
                            Tăng cường hoạt động của hệ tiêu hóa, tăng cường sức khỏe tim mạch, kiểm soát cân nặng.
                            Tăng cường sức khỏe và thị lực của mắt và duy trì sức khỏe của bộ não.
                        </p>
                    </div>
                    <div class="price">999.000 VND</div>
                    <div class="wrap_button">
                        <button type="submit" name="buy">
                            <a href="#">Buy</a>
                        </button>
                    </div>
                </div>
            </div>
            <h4 class="title">Sản Phẩm Tương Tự</h4>
            <div class="products">
                <?php
                foreach (getAgriculturalProduces() as $value) {
                    ?>
                    <div class="box">
                        <div class="wrap_img">
                            <img src="../../images/<?php echo $value["image"] ?>" alt="">
                        </div>
                        <div class="wrap_title">
                            <a href="#"><?php echo $value["name"] ?></a>
                        </div>
                        <div class="s_price">
                            <?php echo $value["price"] ?>.000 VND
                        </div>
                        <div class="wrap_button">
                            <button type="submit" name="buy">
                                <a href="#">Buy</a>
                            </button>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
        include("../layout/footer.php");
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>