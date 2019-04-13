<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 13/04/2019
 * Time: 12:21 AM
 */

require_once '../../lib/cxBDD.php';

$stm = $conn->prepare("INSERT INTO `post`(`title`, `highlight`, `contents`, `author_Id`, `category_Id`, `image`)
VALUES (?,?,?,?,?,?)");
$t=array($_POST['title'],$_POST['highlight'],$_POST['contents'],$_POST['author'],$_POST['category'],$_POST['image']);
$stm->execute($t);

header('Location: ../admin.php');
?>