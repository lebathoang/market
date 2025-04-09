<?php

try {
    if (class_exists("PDO")) {
        $db = new PDO("mysql:host=localhost; dbname=database", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
} catch (Exception $e) {
    echo "Error " . $e->getMessage();
    die();
}

$account = $conn->query("select * from account");
$products = $conn->query("select * from products");



function getDatabaseConnection()
{
    try {
        if (class_exists("PDO")) {
            $db = new PDO("mysql:host=localhost; dbname=database", "root", "");
            return $db;
        }
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        die();
    }
}

// function getAccount()
// {
//     $conn = getDatabaseConnection();

//     $account = $conn->query("select * from account");

//     if ($account->rowCount() > 0) {
//         return $account;
//     } else {
//         echo "Không có dữ liệu";
//     }
// }

function getProducts()
{

    $conn = getDatabaseConnection();

    $products = $conn->query("select * from products");

    if ($products->rowCount() > 0) {
        return $products;
    } else {
        echo "Không có dữ liệu";
    }
}
