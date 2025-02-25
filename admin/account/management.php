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
    <label for="">Bang Tai Khoan</label>
    <table border="1" cellspacing="1">
        <tr>
            <td class="title">stt</td>
            <td class="title">fullname</td>
            <td class="title">username</td>
            <td class="title">email</td>
            <td class="title">password</td>
            <td class="title">address</td>
            <td class="title">update</td>
            <td class="title">delete</td>
        </tr>
        <?php
        foreach (getAccount() as $value) {
            ?>
            <tr>
                <td><?php echo $value["id"] ?></td>
                <td><?php echo $value["fullname"] ?></td>
                <td><?php echo $value["username"] ?></td>
                <td><?php echo $value["email"] ?></td>
                <td><?php echo $value["password"] ?></td>
                <td><?php echo $value["address"] ?></td>
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
        <a class="button" href="./add.php">Add</a>
    </button>
    <button type="button">
        <a class="button" href="../../UI/home/run.php">Run</a>
    </button>
    <button>
        <a class="button" href="../products/management.php">Products</a>
    </button>
</body>

</html>