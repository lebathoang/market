
<?php
session_start();

require("../connect.php");

if (!isset($_GET["id"])) {
    $_SESSION["err"] = "Ban chua chon du lieu sua";
    header("Localhost: management.php");
}   

$id = intval($_GET["id"]);

try {
    $sql = "select * from account where id = $id";
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
    <h2>Update Account</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="fullname" value="<?php echo $row["fullname"] ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $row["username"] ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $row["email"] ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $row["password"] ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $row["address"] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update" name="update"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
    if (isset($_POST["update"])) {
        try {
            $sql = "UPDATE `account` SET `fullname` = :fullname, `username` = :username, `email` = :email, `password` = :password, `address` = :address WHERE `id` = $id";
            $db = getDatabaseConnection();
            $statement = $db->prepare($sql); 

            $statement -> bindParam(":fullname", $fullname);
            $statement -> bindParam(":username", $username);
            $statement -> bindParam(":email", $email);
            $statement -> bindParam(":password", $password);
            $statement -> bindParam(":address", $address);

            if (isset($_POST["update"])) {
                $fullname = $_POST["fullname"];
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $address = $_POST["address"];
            }
            $statement->execute();
            header("Location: management.php");
        } catch (Exception $e) {
            echo "Error " .$e->getMessage();
        }
    }
?>