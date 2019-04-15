<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 13/04/2019
 * Time: 12:13 PM
 */

require_once 'lib/cxBDD.php'; //done//

$idPost = $_GET['id'];

$stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.contents,post.creationTimestamp,post.updateTimestamp, post.image,post.author_Id, user.firstName, user.lastName, category.name, post.category_Id, post.trashed FROM post
INNER JOIN user ON post.author_Id=user.id
INNER JOIN category ON post.category_Id = category.id
WHERE post.id = $idPost");
$stm->execute();
$tabOnePost = $stm->fetch(PDO::FETCH_ASSOC);
?>