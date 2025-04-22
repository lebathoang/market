<?php
    require("../../connect.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $sql = "INSERT INTO khachhang(`Ho`, `Ten`, `Sdt`,`Email`, `Matkhau`) VALUES (:Ho, :Ten, :Sdt, :Email, :Matkhau)";
            $db = getDatabaseConnection();
            $statement = $db->prepare($sql);
 
            $statement->bindParam(':Ho', $Ho);
            $statement->bindParam(':Ten', $Ten);
            $statement->bindParam(':Sdt', $Sdt);
            $statement->bindParam(':Email', $Email);
            $statement->bindParam(':Matkhau', $Matkhau);

            if (isset($_POST["register"])) {
                $Ho = $_POST["Ho"];
                $Ten = $_POST["Ten"];
                $Sdt = $_POST["Sdt"]; 
                $Email = $_POST["Email"];
                $Matkhau = $_POST["Matkhau"];
            }
            $statement->execute();
            header("Location:../login/login.php");
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
?>