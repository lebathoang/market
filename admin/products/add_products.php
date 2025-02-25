<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Add Product</h2>
    <form action="" method="post" enctype="multipart/form-data">  
        <table>
            <tr>
                <td>Enter product name</td>
                <td><input type="text" name="product_name"></td>
            </tr>
            <tr>
                <td>Enter image</td>
                <td><input type="file" name="image_product"></td>
            </tr>
            <tr>
                <td>Enter price</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td>Enter quantity</td>
                <td><input type="text" name="quantity"></td>
            </tr>
            <tr>
                <td>Enter decription</td>
                <td><input type="text" name="decription"></td>
            </tr>
            <tr>
                <td>Enter type</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr>
                <td>Enter classify</td>
                <td><input type="text" name="classify"></td>
            </tr>
            <tr>
                <td><input type="submit" value="add" name="save"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php

require("../../connect.php");

if (isset($_POST['save'])) {
    try {
        $sql = "INSERT INTO products(`name`, `image`,`price`, `quantity`, `decription`, `type`, `classify`) VALUES (:name, :image, :price, :quantity, :decription, :type, :classify)";
        $db = getDatabaseConnection();
        $statement = $db->prepare($sql);

        $statement->bindParam(':name', $name);
        $statement->bindParam(':image', $image);
        $statement->bindParam(':price', $price);
        $statement->bindParam(':quantity', $quantity);
        $statement->bindParam(':decription', $decription);
        $statement->bindParam(':type', $type);
        $statement->bindParam(':classify', $classify);

        if (isset($_POST["save"])) {
            $name = $_POST["product_name"];
            $image = $_FILES["image_product"]["name"];
            $price = $_POST["price"];
            $quantity = $_POST["quantity"];
            $decription = $_POST["decription"];
            $type = $_POST["type"];
            $classify = $_POST["classify"];
        }
        $statement->execute();
        header("Location:management.php");
        move_uploaded_file($_FILES["image_product"]["tmp_name"], "../../images/".$_FILES["image_product"]["name"]);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>