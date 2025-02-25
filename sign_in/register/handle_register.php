<?php
    require("../../connect.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $sql = "INSERT INTO account(`fullname`, `username`,`email`, `password`, `address`) VALUES (:fullname, :username, :email, :password, :address)";
            $db = getDatabaseConnection();
            $statement = $db->prepare($sql);
 
            $statement->bindParam(':fullname', $fullname);
            $statement->bindParam(':username', $username);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':password', $password);
            $statement->bindParam(':address', $address);

            if (isset($_POST["register"])) {
                $fullname = $_POST["fullname"];
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $address = $_POST["address"]; 
            }
            $statement->execute();
            header("Location:../../admin/account/management.php");
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
?>