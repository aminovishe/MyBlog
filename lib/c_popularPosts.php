<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 15/04/2019
 * Time: 12:12 AM
 */

require_once 'lib/cxBDD.php';

$stm = $conn->prepare("SELECT post.id, post.title, post.creationTimestamp, post.image, COUNT(comment.id) as nbrComments FROM comment
INNER JOIN post ON post.id=comment.post_Id
where post.trashed=0
GROUP BY comment.post_Id
ORDER BY COUNT(comment.id) DESC
LIMIT 3");
$stm->execute();
$popularPosts = $stm->fetchAll(PDO::FETCH_ASSOC);

?>