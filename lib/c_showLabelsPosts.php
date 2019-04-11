<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 2:15 PM
 */

require_once 'cxBDD.php';

$stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.creationTimestamp, post.image, user.firstName, user.lastName FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
WHERE post.category_Id=1
ORDER BY post.creationTimestamp DESC
LIMIT 5");
$stm->execute();
$showLabelsPostsBusiness = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.creationTimestamp, post.image, user.firstName, user.lastName FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
WHERE post.category_Id=2
ORDER BY post.creationTimestamp DESC
LIMIT 3");
$stm->execute();
$showLabelsPostsMusic = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.creationTimestamp, post.image, user.firstName, user.lastName FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
WHERE post.category_Id=3
ORDER BY post.creationTimestamp DESC
LIMIT 3");
$stm->execute();
$showLabelsPostsNature = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.creationTimestamp, post.image, user.firstName, user.lastName FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
WHERE post.category_Id=4
ORDER BY post.creationTimestamp DESC
LIMIT 3");
$stm->execute();
$showLabelsPostsSport = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.creationTimestamp, post.image, user.firstName, user.lastName FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
WHERE post.category_Id=5
ORDER BY post.creationTimestamp DESC
LIMIT 4");
$stm->execute();
$showLabelsPostsTechnology = $stm->fetchAll(PDO::FETCH_ASSOC);

?>