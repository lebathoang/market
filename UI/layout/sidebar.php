<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<style>
    .sidebar {
        width: 20%;
    }

    .sidebar .toolbar {
        border: 1px solid silver;
    }

    .sidebar .toolbar .title {
        background-color: green;
        color: white;
        font-weight: 600;
    }

    .sidebar .toolbar .title h4 {
        height: 25px;
        align-content: center;
        padding-left: 15px;
    }

    .sidebar .toolbar ul li {
        list-style: none;
        height: 30px;
        align-content: center;
    }

    .sidebar .toolbar ul li:hover {
        cursor: pointer;
        background-color: #fbfbfb;
    }

    .sidebar .toolbar ul li a {
        text-decoration: none;
        color: black;
        font-weight: 600;
        padding-left: 15px;
    }
</style>

<body>
    <div class="sidebar">
        <div class="toolbar">
            <div class="title">
                <h4>Hai San</h4>
            </div>
            <ul>
                <li>
                    <a href="../sea_food/crab.php">Cua, Ghẹ</a>
                </li>
                <li>
                    <a href="../sea_food/shirmp_sneil.php">Tôm, Ốc</a>
                </li>
                <li>
                    <a href="../sea_food/fish.php">Cá</a>
                </li>
                <li>
                    <a href="../sea_food/squid_octopus.php">Mực, Bạch Tuộc</a>
                </li>
                <li>
                    <a href="../sea_food/other_seafood.php">Các loại khác</a>
                </li>
            </ul>
        </div>
        <div class="toolbar">
            <div class="title">
                <h4>Nông Sản</h4>
            </div>
            <ul>
                <li>
                    <a href="../agricultural/vegetable.php">Các Loại Rau</a>
                </li>
                <li>
                    <a href="../agricultural/fruit.php">Hoa Quả</a>
                </li>
                <li>
                    <a href="../agricultural/flower.php">Các Loại Hoa</a>
                </li>
                <li>
                    <a href="../agricultural/tuber.php">Các Loại Củ</a>
                </li>
                <li>
                    <a href="../agricultural/other_agricultural.php">Nông Sản Khác</a>
                </li>
            </ul>
        </div>
        <div class="toolbar">
            <div class="title">
                <h4>Các Loại Thịt</h4>
            </div>
            <ul>
                <li>
                    <a href="../meat/pig.php">Thịt Heo</a>
                </li>
                <li>
                    <a href="../meat/beef.php">Thịt Bò</a>
                </li>
                <li>
                    <a href="../meat/chicken.php">Thịt Gà</a>
                </li>
                <li>
                    <a href="../meat/dry_food.php">Đồ Khô</a>
                </li>
                <li>
                    <a href="../meat/other_meat.php">Các Loại Khác</a>
                </li>
            </ul>
        </div>
        <div class="toolbar">
            <div class="title">
                <h4>Đồ Uống</h4>
            </div>
            <ul>
                <li>
                    <a href="../drink_water/milk.php">Sữa</a>
                </li>
                <li>
                    <a href="../drink_water/wine_beer.php">Rượu, Bia</a>
                </li>
                <li>
                    <a href="../drink_water/soft_drink.php">Nước Giải Khát</a>
                </li>
                <li>
                    <a href="../drink_water/yogurt.php">Sữa Chua</a>
                </li>
                <li>
                    <a href="../drink_water/other_drink_water.php">Đồ Uống Khác</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>