<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    img {
        width: 65px;
        padding: 5px 5px
    }

    table {
        text-align: center;
    }

    .title {
        padding: 5px 5px;
    }

    button {
        width: 100px;
        height: 35px;
        outline: none;
        border: none;
        background: green;
        border-radius: 20px;
    }

    .button {
        text-decoration: none;
        color: white;
        font-size: 18px;
    }
    a {
        text-decoration: none;
        color: black;
    }
</style>

<body>
    <?php
        include("../../connect.php");
    ?>
    <label for="">Bang San Pham</label>
    <table border="1" cellspacing="1">
        <tr>
            <td class="title">stt</td>
            <td class="title">name</td>
            <td class="title">image</td>
            <td class="title">price</td>
            <td class="title">quantity</td>
            <td class="title">decription</td>
            <td class="title">type</td>
            <td class="title">classify</td>
            <td class="title">update</td>
            <td class="title">delete</td>
        </tr>
        <?php
        foreach (getProducts() as $value) {
            ?>
            <tr>
                <td><?php echo $value[0] ?></td>
                <td><?php echo $value[1] ?></td>
                <td>
                    <img src="../../images/<?php echo $value["image"] ?>" alt="">
                </td>
                <td><?php echo $value[3] ?></td>
                <td><?php echo $value[4] ?></td>
                <td><?php echo $value[5] ?></td>
                <td><?php echo $value[6] ?></td>
                <td><?php echo $value[7] ?></td>
                <td>
                    <a href="./update.php?id=<?php echo $value['id'] ?>">Update</a>
                </td>
                <td>
                    <a href="./delete.php?id=<?php echo $value['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php
        }
        ;
        ?>
    </table>
    <br>
    <button type="button">
        <a class="button" href="./add_products.php">Add</a>
    </button>
    <button type="button">
        <a class="button" href="../../UI/home/run.php">Run</a>
    </button>
    <button type="button">
        <a class="button" href="../account/management.php">Account</a>
    </button>
</body>

</html>


