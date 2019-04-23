<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 16/04/2019
 * Time: 3:34 PM
 */

session_start();
if (isset($_SESSION['connect'])){
    header('Location: ../admin.php');
}
require_once 'cxBDD.php'; //done//

if (!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['password']) || empty($_POST['password'])){
    header('Location: ../login.php?empty=');
} else {
    $stm = $conn->prepare("SELECT * FROM user WHERE email=? and password=?");
    $password=sha1($_POST['password']);
    $t=array(strtoupper($_POST['email']),$password);
    $stm->execute($t);
    $newSession = $stm->fetch(PDO::FETCH_ASSOC);

    if ($newSession){
        $_SESSION['connect']=$password;
        $_SESSION['id']=$newSession['id'];
        $_SESSION['admin']=$newSession['admin'];
        $_SESSION['firstName']=$newSession['firstName'];
        $_SESSION['lastName']=$newSession['lastName'];
        $_SESSION['image']=$newSession['image'];
        header('Location: ../admin.php');
    } else {
        header('Location: ../login.php?error=');
    }
}








?>