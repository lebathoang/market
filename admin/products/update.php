<?php
session_start();

require("../../connect.php");

if (!isset($_GET["id"])) {
    $_SESSION["err"] = "Ban chua chon du lieu sua";
    header("Localhost: management.php");
}

$id = intval($_GET["id"]);

try {
    $sql = "select * from products where id = $id";
    $db = getDatabaseConnection();
    $statement = $db->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $row = $statement->fetch();
} catch (Exception $e) {
    echo "Error " . $e->getMessage();
}
// ALTER TABLE taikhoan MODIFY COLUMN id INT AUTO_INCREMENT;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h2>Update Products</h2>
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
                <td><input type="submit" value="Update" name="update"></td>
                <td>
                    <button type="button">
                        <a href="./management.php" style="text-decoration: none;">Back</a>
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
if (isset($_POST["update"])) {
    try {
        $sql = "UPDATE `products` SET `name` = :name, `image` = :image, `price` = :price, `quantity` = :quantity, `decription` = :decription, `type` = :type, `classify` = :classify WHERE `id` = $id";
        $db = getDatabaseConnection();
        $statement = $db->prepare($sql);

        $statement->bindParam(":name", $name);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":quantity", $quantity);
        $statement->bindParam(":decription", $decription);
        $statement->bindParam(":type", $type);
        $statement->bindParam(':classify', $classify);

        if (isset($_POST["update"])) {
            $name = $_POST["product_name"];
            $image = $_FILES["image_product"]["name"];
            $price = $_POST["price"];
            $quantity = $_POST["quantity"];
            $decription = $_POST["decription"];
            $type = $_POST["type"];
            $classify = $_POST["classify"];
        }
        $statement->execute();
        header("Location: management.php");
        move_uploaded_file($_FILES["image_product"]["tmp_name"], "../../images/".$_FILES["image_product"]["name"]);
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
    }
}
?>