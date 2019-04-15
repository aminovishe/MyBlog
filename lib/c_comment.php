<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 1:21 AM
 */

require_once 'cxBDD.php';

if (isset($_POST['idPost'])) {
    if ($_POST['nickName'] == "") {
        $nickName = "Anonyme";
    } else {
        $nickName = $_POST['nickName'];
    }
    if (isset($_POST['iconVisitor'])) {
        $iconVisitor = $_POST['iconVisitor'];
    } else {
        $iconVisitor = "pics/anonyme.png";
    }
    if (isset($_POST['like'])) {
        $like = $_POST['like'];
    } else {
        $like = "pics/noLike.png";
    }
    $stm = $conn->prepare("INSERT INTO `comment`(`nickName`, `image_visitor`, `like_post`, `contents`, `post_Id`) VALUES (?,?,?,?,?)");
    $t = array($nickName, $iconVisitor, $like, $_POST['commentContent'], $_POST['idPost']);
    $stm->execute($t);
}

$stm = $conn->prepare("SELECT * FROM `comment` WHERE `post_Id`=?");
$stm->execute([$_POST['idPost']]);
$stm->setFetchMode(PDO::FETCH_ASSOC);
$allComments = $stm->fetchAll();

echo(json_encode($allComments));
?>