<?php
/**
 * Created by PhpStorm.
 * User: aminh
 * Date: 16/04/2019
 * Time: 4:47 PM
 */

session_start();
if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}
session_destroy();

header('Location: ../login.php');

?>