<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 12:35 AM
 */

if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}

require_once 'lib/cxBDD.php'; //done//

$stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.contents, post.creationTimestamp,post.updateTimestamp, post.image, user.firstName, user.lastName,category.name FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
where post.trashed=1
ORDER BY post.creationTimestamp DESC");
$stm->execute();
$allTrashedPosts = $stm->fetchAll(PDO::FETCH_ASSOC);
?>