<?php

$file_json = file_get_contents("../../json/config.json");
$decode = json_decode($file_json, true);
// $host_name = $decode['host_name'];
// $database = $decode['database'];
// $user_name = $decode['user_name'];
// $password = $decode['password'];
$pdo = null;

try {
    $pdo = new PDO("mysql:host=".$decode['host_name']."; dbname=".$decode['database'], $decode['user_name'], $decode['password']);
} catch (\PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
}
?>