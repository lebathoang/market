<?php
session_start();

require("../../connect.php");


if (isset($_POST['login'])) {
    $name = $_POST['tendangnhap'];
    $password = $_POST['matkhau'];

    try {
        $sql = "INSERT INTO temp(`tendangnhap`, `matkhau`) VALUES (:tendangnhap, :matkhau)";
        $db = getDatabaseConnection();
        $statement = $db->prepare($sql);

        $statement->bindParam(':tendangnhap', $tendangnhap);
        $statement->bindParam(':matkhau', $matkhau);

        if (isset($_POST["register"])) {
            $tendangnhap = $_POST["tendangnhap"];
            $matkhau = $_POST["matkhau"];
        }
        $statement->execute();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    };


    // $sql = $db->query("select * from admin");

    // foreach ($sql as $value) {
    //     if (strcmp($name, $value["Ho"] . $value["Ten"]) && strcmp($password, $value["Matkhau"])) {
    //         header("Location: ../../admin/Admin/admin.php");
    //     } else {
    //         header("Location: ../../UI/home/index.php");
    //     }
    // }

    if ($name == "lebathoang" && $password == "11771177" || $name == "letrianh" && $password == "12345678" || $name == "phamthanhhien" && $password == "98765432") {
        header("Location: ../../admin/Admin/admin.php");
    } else {
        header("Location: ../../UI/home/index.php");
    }
}
