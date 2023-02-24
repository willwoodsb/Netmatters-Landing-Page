<?php

$servername = "localhost";
$database = "netmatters";

try {
    $db = new PDO("mysql:host=$servername;dbname=$database", 'root', '');
} catch (Exception $e) {
    echo "error connecting to database";
    echo $e->getMessage();
    exit;
}
