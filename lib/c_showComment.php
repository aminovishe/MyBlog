<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 4:17 PM
 */

require_once 'lib/cxBDD.php';

$stm = $conn->prepare("SELECT * FROM `comment` WHERE `post_Id`=? order by `creationTimestamp` desc");
$stm->execute([$_GET['id']]);
$stm->setFetchMode(PDO::FETCH_ASSOC);
$showAllComments = $stm->fetchAll();

?>