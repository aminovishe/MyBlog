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

$stm = $conn->prepare("UPDATE `post` SET `trashed`=? WHERE post.id=?");
$t=array(0,$_GET['id']);
$stm->execute($t);

header('Location: ../restoreDeletePost.php');
?>