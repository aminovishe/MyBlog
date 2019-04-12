<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 3:05 PM
 * $idLabel = -1 : all labes
 */

function randomPosts($idLabel, $nbrPosts)
{
    require 'cxBDD.php';
    if ($idLabel == -1) {
        $stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.creationTimestamp, post.image, user.firstName, user.lastName FROM post
INNER JOIN user ON post.author_Id=user.id ORDER BY RAND() LIMIT $nbrPosts");
        $stm->execute();
        $TabRandPosts = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $TabRandPosts;
    } else {
        $stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.creationTimestamp, post.image, user.firstName, user.lastName FROM post
INNER JOIN user ON post.author_Id=user.id where post.category_Id = $idLabel ORDER BY RAND() LIMIT $nbrPosts");
        $stm->execute();
        $TabRandPosts = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $TabRandPosts;
    }

}

?>