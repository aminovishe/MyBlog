<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 12:46 AM
 */
session_start();
if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}

require_once 'cxBDD.php'; //done//

$stm = $conn->prepare("DELETE FROM `post` WHERE post.id=?");
$t=array($_GET['id']);
$stm->execute($t);

header('Location: ../restoreDeletePost.php');
?>