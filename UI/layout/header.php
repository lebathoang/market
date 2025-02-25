<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<style>
    .header {
        background-image: url(https://d3design.vn/uploads/Summer%20drink%20menu%20promotion%20banner%20template7.jpg);
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .logo {
        width: 10%;
    }

    .logo img {
        width: 50%;
        margin-top: 5px;
    }

    .header .search {
        border: 1px solid silver;
        height: 30px;
        display: flex;
        align-items: center;
        border-radius: 15px;
        width: 350px;
    }

    .header .search input {
        border: none;
        outline: none;
        padding-left: 10px;
        font-weight: 600;
        border-radius: 15px;
        width: 325px;
        height: 28px;
        background-color: transparent;
    }

    .header .search i {
        width: 33px;
        height: 30px;
        text-align: center;
        align-content: center;
        border-radius: 15px;
        color: silver;
    }

    .header .search i:hover {
        cursor: pointer;
        background-color: #8ccbef;
    }

    .account {
        display: flex;
    }

    .account .cart {
        padding-left: 15px;
    }

    .account i {
        font-size: 25px;
        color: white;
    }

    .account i:hover {
        cursor: pointer;
    }
</style>

<body>
    <div class="header">
        <div class="logo">
            <a href="../home/run.php">
                <img src="https://img.pikbest.com/png-images/elegant-and-creative-fruit-logo-cartoon-ananas-design-juice-drink-and-food-graphic-design_5640020.png!w700wp"
                    alt="">
            </a>
        </div>
        <div>

        </div>
        <form action="../../admin/search/management.php" method="post">
            <div class="search">
                <input type="text" name="value_search" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </form>
        <div class="account">
            <div>
                <a href="../../sign_in/login/login.php">
                    <i class="fa-regular fa-circle-user"></i>
                </a>
            </div>
            <i class="fa-solid fa-cart-shopping cart"></i>
        </div>
    </div>
</body>

</html>