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
</head>

<body>
    <div class="wrap">
        <div class="banner">
            <img src="https://img.pikbest.com/templates/20240706/fruit-fruit-banner-for-supermarket-store-green-background_10654794.jpg!w700wp"
                alt="">
        </div>
        <?php
            include("../layout/header.php");
        ?>
        <div class="main">
            <?php
            include("../layout/sidebar.php");
            ?>
            <form class="form_content" action="" method="post">
                <div class="content">
                    <?php
                    foreach (getVegetables() as $value) {
                        ?>
                        <div class="box">
                            <div class="wrap_image">
                                <img src="../../images/<?php echo $value["image"] ?>" alt="">
                            </div>
                            <div class="title">
                                <a href="#"><?php echo $value["name"] ?></a>
                            </div>
                            <div class="wrap_price">
                                <span><?php echo $value["price"] ?>.000</span>
                            </div>
                            <div class="wrap_button">
                                <button type="submit" name="buy">Buy</button>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </form>
        </div>
        <?php
            include("../layout/footer.php");
        ?>
    </div>
</body>

</html>