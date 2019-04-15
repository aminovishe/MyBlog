<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 13/04/2019
 * Time: 1:37 PM
 */

require_once 'cxBDD.php'; //done//
if (isset($_POST['changeImage']) && $_POST['changeImage']=="Yes"){
    $img=$_FILES["image"]["name"];
    $radom_img=time().$img;
    move_uploaded_file($_FILES["image"]["tmp_name"], "../img/upload_img/".$radom_img);
    $stm = $conn->prepare("UPDATE `post` SET `title`=?,`highlight`=?,`contents`=?,`updateTimestamp`=?,`author_Id`=?,`category_Id`=?,`image`=? WHERE post.id=?");
    $date=date('Y-m-d h:i:s', strtotime(date('m/d/Y h:i:s', time())));
    $t=array($_POST['title'],$_POST['highlight'],$_POST['contents'],$date,$_POST['author'],$_POST['category'],$radom_img,$_POST["id"]);
    $stm->execute($t);
} else {
    $stm = $conn->prepare("UPDATE `post` SET `title`=?,`highlight`=?,`contents`=?,`updateTimestamp`=?,`author_Id`=?,`category_Id`=? WHERE post.id=?");
    $date=date('Y-m-d h:i:s', strtotime(date('m/d/Y h:i:s', time())));
    $t=array($_POST['title'],$_POST['highlight'],$_POST['contents'],$date,$_POST['author'],$_POST['category'],$_POST["id"]);
    $stm->execute($t);
}

header('Location: ../../onePost.php?id='.$_POST["id"]);
?>