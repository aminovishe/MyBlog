<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 16/04/2019
 * Time: 11:03 PM
 */

if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}
require_once 'lib/cxBDD.php'; //done//

$stm = $conn->prepare("SELECT * FROM `user` where id=?");
$stm->execute([$_SESSION['id']]);
$profileUser = $stm->fetch(PDO::FETCH_ASSOC);

if ($profileUser['birthDate']==NULL || $profileUser['image']=='anonyme.png'){
    $incomplete="<br><span>Your profile is <b style='color: red;'>incomplete</b>. Please complete your profile details.</span>";
}
if ($profileUser['changePassword']==0){
    $changePassword="<br><b style='color: darkgreen;'>For more security, please change default password.</b>";
}
?>