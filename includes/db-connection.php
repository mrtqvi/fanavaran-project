<?php

require_once __DIR__ . "/config.php";

global $conn;

try {   
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    $conn = new PDO("mysql:dbhost=". DB_HOST. ";dbname=". DB_NAME, DB_USER , DB_PASS, $options);
}

catch(PDOException $pDOException) {
    echo "Connection database failed" . PHP_EOL . $pDOException->getMessage();
}