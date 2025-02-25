<?php
session_start();

require("../../connect.php");

if (isset($_POST['login'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];
    $db = getDatabaseConnection();
    $sql = $db->query("select * from account where username = 'bathoang'");

    foreach ($sql as $value) {
        if ($name == $value["username"] && $password == $value["password"]) {
            header("Location:../../admin/account/management.php");
        } else {
            echo "Ban chua co tai khoan";
            header("Location:../../UI/home/run.php");
        }
    }
    
}

?>