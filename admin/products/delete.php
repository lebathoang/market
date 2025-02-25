
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h2>Delete Account</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="product_name" value="<?php echo $row["name"] ?>"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="text" name="image_product" value="<?php echo $row["image"] ?>"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $row["price"] ?>"></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="text" name="quantity" value="<?php echo $row["quantity"] ?>"></td>
            </tr>
            <tr>
                <td>Decription</td>
                <td><input type="text" name="decription" value="<?php echo $row["decription"] ?>"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" name="type" value="<?php echo $row["type"] ?>"></td>
            </tr>
            <tr>
                <td>Classify</td>
                <td><input type="text" name="classify" value="<?php echo $row["classify"]?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Delete" name="delete"></td>
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
    if (isset($_POST["delete"])) {
        try {
            $sql = "DELETE FROM products WHERE `id` = $id";
            $db = getDatabaseConnection();
            $statement = $db->prepare($sql);
    
            $statement->execute();
            header("Location: management.php");
        } catch (Exception $e) {
            echo "Error " . $e->getMessage();
        }
    }
?>