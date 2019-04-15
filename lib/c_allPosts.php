<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 8:47 PM
 */

require_once 'cxBDD.php';
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


function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);

    $interval = date_diff($datetime1, $datetime2);

    return $interval->format($differenceFormat);

}
?>