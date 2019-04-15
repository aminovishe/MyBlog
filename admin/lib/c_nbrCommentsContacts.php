<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 10:03 PM
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

$stm = $conn->prepare("SELECT COUNT(comment.id) as nbrComments FROM comment");
$stm->execute();
$numberComments = $stm->fetch(PDO::FETCH_ASSOC);

$stm = $conn->prepare("SELECT COUNT(contact_id) as nbrContact FROM contact");
$stm->execute();
$numberContact = $stm->fetch(PDO::FETCH_ASSOC);
?>