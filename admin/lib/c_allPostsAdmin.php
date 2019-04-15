<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 12:18 AM
 */

require_once 'lib/cxBDD.php'; //done//
if (isset($_GET['idLabel'])) {
    $idLabel = $_GET['idLabel'];
    $stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.contents, post.creationTimestamp, post.updateTimestamp, post.image, user.firstName, user.lastName,category.name FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
where post.category_Id=$idLabel and post.trashed=0
ORDER BY post.creationTimestamp DESC");
    $stm->execute();
    $allPosts = $stm->fetchAll(PDO::FETCH_ASSOC);
} else {
    $stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.contents, post.creationTimestamp,post.updateTimestamp, post.image, user.firstName, user.lastName,category.name FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
where post.trashed=0
ORDER BY post.creationTimestamp DESC");
    $stm->execute();
    $allPosts = $stm->fetchAll(PDO::FETCH_ASSOC);
}
?>