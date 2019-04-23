<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 8:47 PM
 */

require_once 'cxBDD.php';

$page = $_GET['page'];
if (isset($_GET['idLabel'])) {
    $idLabel = $_GET['idLabel'];

    $stm = $conn->prepare("SELECT COUNT(post.id) as nbrPost FROM post where post.category_Id=$idLabel and post.trashed=0");
    $stm->execute();
    $nbrAllPosts = $stm->fetch(PDO::FETCH_ASSOC);

    $stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.contents, post.creationTimestamp, post.updateTimestamp, post.image, user.firstName, user.lastName,category.name FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
where post.category_Id=$idLabel and post.trashed=0
ORDER BY post.id asc 
LIMIT $page,5 ");
    $stm->execute();
    $allPosts = $stm->fetchAll(PDO::FETCH_ASSOC);
} else {
    $stm = $conn->prepare("SELECT COUNT(post.id) as nbrPost FROM post where post.trashed=0");
    $stm->execute();
    $nbrAllPosts = $stm->fetch(PDO::FETCH_ASSOC);

    $stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.contents, post.creationTimestamp,post.updateTimestamp, post.image, user.firstName, user.lastName,category.name FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
where post.trashed=0
ORDER BY post.id desc 
LIMIT $page,5 ");
    $stm->execute();
    $allPosts = $stm->fetchAll(PDO::FETCH_ASSOC);
}


?>