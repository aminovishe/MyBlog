<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 15/04/2019
 * Time: 4:09 PM
 */

require_once 'cxBDD.php';

if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['reason']) && isset($_POST['terms']) && $_POST['first_name']!="" && $_POST['last_name']!="" && $_POST['email']!="" && $_POST['reason']!="" && $_POST['terms']=="on"){
    $stm = $conn->prepare("INSERT INTO `demand`(`demand_first_name`, `demand_last_name`, `demand_email`, `demand_reason`)
VALUES (?,?,?,?)");
    $t = array($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['reason']);
    $stm->execute($t);

    header('Location: ../index.php?demand=success');
} else {
    header('Location: ../contact.php?error=');
}

?>