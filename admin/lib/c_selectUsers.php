<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 13/04/2019
 * Time: 9:54 PM
 */

if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}

require_once 'lib/cxBDD.php'; //done//

$stm = $conn->prepare("SELECT * FROM `user`");
$stm->execute();
$Users = $stm->fetchAll(PDO::FETCH_ASSOC);
?>