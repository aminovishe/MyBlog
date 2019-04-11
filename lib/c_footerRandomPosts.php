<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 3:05 PM
 */

require_once 'cxBDD.php';

$stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.creationTimestamp, post.image, user.firstName, user.lastName FROM post
INNER JOIN user ON post.author_Id=user.id
ORDER BY RAND()
LIMIT 3");
$stm->execute();
$TabRandPosts = $stm->fetchAll(PDO::FETCH_ASSOC);

?>