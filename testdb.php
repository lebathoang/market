<?php
try {
    $dsn = "mysql:host=hngomrlb3vfq3jcr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=nhhp2szpexy3a3im;port=3306;charset=utf8";
    $username = "cjsufgx45hbkxysk";
    $password = "c6vwqftfim4rg9h2";

    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✅ Connected to JawsDB successfully!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}