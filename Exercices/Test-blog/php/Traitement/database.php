<?php

$file_json = file_get_contents("../../json/config.json");
$decode = json_decode($file_json, true);
$pdo = null;

try {
    $pdo = new PDO("mysql:host=".$decode['host_name']."; dbname=".$decode['database'], $decode['user_name'], $decode['password']);
} catch (\PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
}
?>