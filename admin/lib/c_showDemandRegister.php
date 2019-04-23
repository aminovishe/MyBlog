<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 15/04/2019
 * Time: 9:03 PM
 */

if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}
require_once 'lib/cxBDD.php'; //done//

$stm = $conn->prepare("SELECT * FROM `demand` ORDER BY `demand_creationTimestamp` DESC");
$stm->execute();
$allDemandRegister = $stm->fetchAll(PDO::FETCH_ASSOC);

?>