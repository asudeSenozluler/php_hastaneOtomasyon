<?php
$servername = "localhost";
$username = "asude";
$password = "7Ku5bg6_2";
$database = "asude_hastane";

try {
    $db = new PDO("mysql:host=" . $servername . "; dbname=" . $database . "; charest=utf8", $username, $password);
    //echo 'veritabanı bağlantısı gerçekleşti';
} catch (Exception $e) {
    var_dump($e);
}
?>