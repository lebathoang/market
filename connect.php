<?php
    function getDatabaseConnection() {
        try {
            if (class_exists("PDO")) {
                $db = new PDO("mysql:host=localhost; dbname=database", "root", "");
                return $db;
            }
        } catch (Exception $e) {
            echo "Error " .$e->getMessage();
            die();
        }
    }

    function getAccount() {
        $conn = getDatabaseConnection();

        $account = $conn->query("select * from account");

        if ($account->rowCount() > 0) {
            return $account;
        } else {
            echo "Không có dữ liệu";
        }
    
    }
    
    function getProducts() {

        $conn = getDatabaseConnection();

        $products = $conn->query("select * from products");

        if ($products->rowCount() > 0) {
            return $products;
        } else {
            echo "Không có dữ liệu";
        }
    
    }

    function getSeaFoods() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where type = 'sea_food'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }

    }

    function getAgriculturalProduces() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where type = 'agricultural'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

    function getBeverageProducts() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where type = 'drink_water'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }

    }

    function getMeatProducts() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where type = 'meat'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

// sea food

    function getCrab() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'crab'");

        if($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }
    
    function getShrimpSneil() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'shirmp_sneil'");

        if($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

    function getFish() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'fish'");

        if($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

    function getSquidOctopus() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'squid_octopus'");

        if($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

    function getOtherSeaFood() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'other_sea_food'");

        if($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

// Agricultural

    function getFruit() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'fruit'");

        if($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

    function getFlower() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'flower'");

        if($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

    function getOtherAgricultural() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'other_agricultural'");

        if($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

    function getTubers() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'tuber'");

        if($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

    function getVegetables() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'vegetable'");

        if($type_products->rowCount() > 0) {
            return $type_products;
        }else {
            echo "Khong co du lieu";
        }
    }

// Drink_Water

    function getMilk() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'milk'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        } else {
            echo "Khong co du lieu";
        }
    }

    function getWineBeer() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'wine_beer'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        } else {
            echo "Khong co du lieu";
        }
    }

    function getSoftDrink() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'softdrink'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        } else {
            echo "Khong co du lieu";
        }
    }

    function getYogurt() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'yogurt'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        } else {
            echo "Khong co du lieu";
        }
    }


    function getOtherDrinkWater() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'other_drink_water'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        } else {
            echo "Khong co du lieu";
        }
    }

// meat

    function getPig() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'pig'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        } else {
            echo "Khong co du lieu";
        }
        
    }

    function getBeef() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'beef'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        } else {
            echo "Khong co du lieu";
        }
        
    }

    function getChicken() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'chicken'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        } else {
            echo "Khong co du lieu";
        }
        
    }

    function getDryFood() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'dry_food'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        } else {
            echo "Khong co du lieu";
        }
        
    }

    function getOtherMeat() {
        $conn = getDatabaseConnection();

        $type_products = $conn->query("select * from products where classify = 'other_meat'");

        if ($type_products->rowCount() > 0) {
            return $type_products;
        } else {
            echo "Khong co du lieu";
        }
        
    }


?>