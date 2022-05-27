#!/usr/local/bin/php –q
<?php


$servername = "mysql:3306";
$username = "onetdl_user";
$password = "onetdl_psw";
$dbname = "onetdl_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "true";
} catch(PDOException $e) {
    echo "false";
}
?>
