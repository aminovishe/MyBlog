<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 4:16 PM
 */
require_once 'cxBDD.php';

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=1");
$stm->execute();
$numberPostsBusiness =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=2");
$stm->execute();
$numberPostsMusic =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=3");
$stm->execute();
$numberPostsNature =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=4");
$stm->execute();
$numberPostsSport =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=5");
$stm->execute();
$numberPostsTechnology =count($stm->fetchAll(PDO::FETCH_ASSOC));

?>