<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 11:38 AM
 */

$host = "localhost";
$username = "root";
$password = "";
$db="amiblog";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $conn->exec('SET NAMES UTF8');
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}