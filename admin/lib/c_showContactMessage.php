<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 15/04/2019
 * Time: 2:32 PM
 */

require_once 'lib/cxBDD.php'; //done//

$stm = $conn->prepare("SELECT * FROM `contact` ORDER BY `contact_creationTimestamp` DESC");
$stm->execute();
$allContactMessage = $stm->fetchAll(PDO::FETCH_ASSOC);

?>