<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 13/04/2019
 * Time: 12:21 AM
 */
session_start();
if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}

if (isset($_SESSION['connect'])){
    require_once '../lib/cxBDD.php';
    $img=$_FILES["image"]["name"];
    $radom_img=time().$img;
    move_uploaded_file($_FILES["image"]["tmp_name"], "../img/upload_img/".$radom_img);
    $stm = $conn->prepare("INSERT INTO `post`(`title`, `highlight`, `contents`, `author_Id`, `category_Id`, `image`)
VALUES (?,?,?,?,?,?)");
    $t=array($_POST['title'],$_POST['highlight'],$_POST['contents'],$_POST['author'],$_POST['category'],$radom_img);
    $stm->execute($t);

    $stm = $conn->prepare("SELECT post.id FROM `post` ORDER BY post.id DESC LIMIT 1");
    $stm->execute();
    $lastPost = $stm->fetch(PDO::FETCH_ASSOC);
    header('Location: ../../onePost.php?id='.$lastPost['id']);
} else {
    header('Location: ../login.php');
}

?>