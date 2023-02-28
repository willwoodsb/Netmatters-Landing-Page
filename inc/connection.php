<?php

$password = "j3J8mbYeeF2FkqR";
$username = "wwoodsba_wwoodsballard";
$database = "wwoodsba_netmatters";
$servername = "127.0.0.1";


try {
    $db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
} catch (Exception $e) {
    echo "error connecting to database";
    echo $e->getMessage();
    exit;
}