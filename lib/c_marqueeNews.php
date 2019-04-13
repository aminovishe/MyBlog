<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 11:37 AM
 */

require_once 'cxBDD.php';

$stm = $conn->prepare("SELECT * FROM post ORDER BY post.creationTimestamp DESC LIMIT 8");
$stm->execute();
$marqueeNews =$stm->fetchAll(PDO::FETCH_ASSOC);
?>