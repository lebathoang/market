<?php
try {
    $dsn = "mysql:host=hngomrlb3vfq3jcr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;port=3306;dbname=nhhp2szpexy3a3im;charset=utf8;protocol=TCP";
    $username = "cjsufgx45hbkxysk";
    $password = "c6vwqftfim4rg9h2";

    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✅ Connected successfully to JawsDB!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}