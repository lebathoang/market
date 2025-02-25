<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<style>
    .footer {
        background-color: green;
    }

    .footer marquee {
        color: white;
        font-size: 18x;
        font-weight: 600;
    }

    .footer .wrap_up {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .footer .wrap_up .footer_logo {
        margin-top: 20px;
    }

    .footer .wrap_up .footer_logo img {
        width: 25%;
    }

    .footer .wrap_up .footer_logo h3 {
        color: white;
    }

    .footer_info {
        color: white;
    }

    .footer_info h3 {
        padding: 20px 0px;
    }

    .footer_info .row {
        display: flex;
        align-items: center;
        padding: 10px 0px;
    }

    .footer_info .row p {
        padding-left: 5px;
    }
</style>

<body>
    <div class="footer">
        <div class="wrap_up">
            <div class="footer_logo">
                <img src="https://png.pngtree.com/template/20210323/ourmid/pngtree-fresh-fruit-logo-design-template-image_503637.jpg"
                    alt="">
                <h3>Let Him Cook</h3>
            </div>
            <div class="footer_info">
                <h3>Thông Tin Liên Hệ</h3>
                <div class="row">
                    <h4>Email: </h4>
                    <p>abc123@gmail.com</p>
                </div>
                <div class="row">
                    <h4>Địa Chỉ: </h4>
                    <p>Số nhà 123, Đường abc, Hà Đông, Hà Nội</p>
                </div>
            </div>
        </div>
        <marquee behavior="" direction="">Sản phẩm được sản xuất tại các nhà máy hiện đại chất lượng cao tại Việt Nam và nhập khẩu từ các nước lớn
            trên toàn thế giới</marquee>
    </div>
</body>

</html>