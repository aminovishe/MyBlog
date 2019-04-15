<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 4:16 PM
 */
require_once 'cxBDD.php';

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=1 and post.trashed=0");
$stm->execute();
$numberPostsBusiness =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=2 and post.trashed=0");
$stm->execute();
$numberPostsMusic =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=3 and post.trashed=0");
$stm->execute();
$numberPostsNature =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=4 and post.trashed=0");
$stm->execute();
$numberPostsSport =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=5 and post.trashed=0");
$stm->execute();
$numberPostsTechnology =count($stm->fetchAll(PDO::FETCH_ASSOC));

?>