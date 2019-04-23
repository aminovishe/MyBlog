<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 9:18 PM
 */
session_start();
if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}

require_once 'cxBDD.php'; //done//

$stm = $conn->prepare("DELETE FROM `comment` WHERE comment.id=?");
$t=array($_GET['id']);
$stm->execute($t);

header('Location: ../showComments.php'); //done//
?>