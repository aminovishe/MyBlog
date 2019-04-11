<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 12:43 PM
 */

require_once 'cxBDD.php';

$stm = $conn->prepare("SELECT * FROM post WHERE post.category_Id=1 ORDER BY post.creationTimestamp DESC LIMIT 1");
$stm->execute();
$oneLabelPostBusiness =$stm->fetch(PDO::FETCH_ASSOC);

$stm = $conn->prepare("SELECT * FROM post WHERE post.category_Id=2 ORDER BY post.creationTimestamp DESC LIMIT 1");
$stm->execute();
$oneLabelPostMusic =$stm->fetch(PDO::FETCH_ASSOC);

$stm = $conn->prepare("SELECT * FROM post WHERE post.category_Id=3 ORDER BY post.creationTimestamp DESC LIMIT 1");
$stm->execute();
$oneLabelPostNature =$stm->fetch(PDO::FETCH_ASSOC);

$stm = $conn->prepare("SELECT * FROM post WHERE post.category_Id=4 ORDER BY post.creationTimestamp DESC LIMIT 1");
$stm->execute();
$oneLabelPostSport =$stm->fetch(PDO::FETCH_ASSOC);

$stm = $conn->prepare("SELECT * FROM post WHERE post.category_Id=5 ORDER BY post.creationTimestamp DESC LIMIT 1");
$stm->execute();
$oneLabelPostTechnology =$stm->fetch(PDO::FETCH_ASSOC);

?>