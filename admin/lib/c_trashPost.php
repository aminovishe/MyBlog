<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 12:06 AM
 */

require_once 'cxBDD.php'; //done//

$stm = $conn->prepare("UPDATE `post` SET `trashed`=? WHERE post.id=?");
$t=array(1,$_GET['id']);
$stm->execute($t);

header('Location: ../showPostsAdmin.php'); //done//
?>