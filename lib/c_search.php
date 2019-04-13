<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 11/04/2019
 * Time: 8:47 PM
 */

require_once 'cxBDD.php';
if (isset($_GET['search'])) {
    $search = "%".$_GET['search']."%";
    $search2 = str_replace(" ","%",$search);
    $stm = $conn->prepare("SELECT post.id, post.title, post.highlight, post.contents, post.creationTimestamp, post.image, user.firstName, user.lastName,category.name FROM post
INNER JOIN category ON post.category_Id=category.id
INNER JOIN user ON post.author_Id=user.id
where post.title like ? OR post.contents like ? OR post.image like ?
ORDER BY post.creationTimestamp DESC");
    $t=array($search2,$search2,$search2);
    $stm->execute($t);
    $tabSearch = $stm->fetchAll(PDO::FETCH_ASSOC);
} else {
    header('index.php');
}

?>