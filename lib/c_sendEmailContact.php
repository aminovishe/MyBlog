<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 15/04/2019
 * Time: 12:25 PM
 */

require_once 'cxBDD.php';

if(isset($_POST['contact_full_name']) && isset($_POST['contact_email']) && isset($_POST['contact_subject']) && isset($_POST['contact_message']) && $_POST['contact_full_name']!="" && $_POST['contact_email']!="" && $_POST['contact_subject']!="" && $_POST['contact_message']!=""){
    $stm = $conn->prepare("INSERT INTO `contact`(`contact_full_name`, `contact_email`, `contact_subject`, `contact_message`)
VALUES (?,?,?,?)");
    $t = array($_POST['contact_full_name'], $_POST['contact_email'], $_POST['contact_subject'], $_POST['contact_message']);
    $stm->execute($t);

    header('Location: ../index.php');
} else {
    header('Location: ../contact.php?error=');
}

?>