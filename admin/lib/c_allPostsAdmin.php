<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 12:18 AM
 */

if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}
require_once 'lib/cxBDD.php'; //done//
    if ($_SESSION['admin']==1){
        $stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.contents, post.creationTimestamp, post.updateTimestamp, post.image, user.firstName, user.lastName,category.name FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
where post.trashed=0
ORDER BY post.creationTimestamp asc ");
    } else {
        $authorId = $_SESSION['id'];
        $stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.contents, post.creationTimestamp, post.updateTimestamp, post.image, user.firstName, user.lastName,category.name FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
where post.trashed=0 and post.author_Id=$authorId
ORDER BY post.creationTimestamp asc ");
    }

    $stm->execute();
    $allPosts = $stm->fetchAll(PDO::FETCH_ASSOC);
?>