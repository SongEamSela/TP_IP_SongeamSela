<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once '../assignment1/index.php';
} else {
    require_once 'login.php';
}
?>