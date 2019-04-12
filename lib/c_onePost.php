<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 11:04 PM
 */

require_once 'cxBDD.php';
$idPost = $_GET['id'];

$stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.contents,post.creationTimestamp, post.image, user.firstName, user.lastName, category.name, post.category_Id FROM post
INNER JOIN user ON post.author_Id=user.id
INNER JOIN category ON post.category_Id = category.id
WHERE post.id = $idPost");
$stm->execute();
$tabOnePost = $stm->fetch(PDO::FETCH_ASSOC);

$tabRelatedPosts = randomPosts($tabOnePost['category_Id'], 2);

$stm = $conn->prepare("SELECT post.id FROM post order by post.id asc");
$stm->execute();
$tabNextPreviousPost = $stm->fetchAll(PDO::FETCH_ASSOC);

$idPreviousPost;
$idNextPost;

switch ($idPost) {
    case $tabNextPreviousPost[0]['id'] :
        $idPreviousPost = -1;
        $idNextPost = $tabNextPreviousPost[1]['id'];
        break;
    case $tabNextPreviousPost[count($tabNextPreviousPost) - 1]['id'] :
        $idPreviousPost = $tabNextPreviousPost[count($tabNextPreviousPost) - 2]['id'];
        $idNextPost = -1;
        break;
    default:
        for ($i = 1; $i < count($tabNextPreviousPost) - 1; $i++) {
            if ($tabNextPreviousPost[$i-1]['id'] < $idPost && $tabNextPreviousPost[$i + 1]['id'] > $idPost) {
                $idPreviousPost = $tabNextPreviousPost[$i-1]['id'];
                $idNextPost = $tabNextPreviousPost[$i + 1]['id'];
            }
        }
}

?>