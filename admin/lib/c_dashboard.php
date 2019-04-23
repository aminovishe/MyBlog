<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 14/04/2019
 * Time: 12:16 AM
 */

if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}

require_once 'lib/cxBDD.php';

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=1");
$stm->execute();
$numberPostsBusiness =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=2");
$stm->execute();
$numberPostsMusic =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=3");
$stm->execute();
$numberPostsNature =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=4");
$stm->execute();
$numberPostsSport =count($stm->fetchAll(PDO::FETCH_ASSOC));

$stm = $conn->prepare("SELECT post.id FROM post WHERE post.category_Id=5");
$stm->execute();
$numberPostsTechnology =count($stm->fetchAll(PDO::FETCH_ASSOC));

?>