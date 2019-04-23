<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 16/04/2019
 * Time: 10:19 PM
 */

if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}
require_once 'lib/cxBDD.php'; //done//

$stm = $conn->prepare("SELECT * FROM `user`");
$stm->execute();
$allUsers = $stm->fetchAll(PDO::FETCH_ASSOC);

?>