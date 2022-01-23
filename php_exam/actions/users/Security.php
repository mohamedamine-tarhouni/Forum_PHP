<?php
session_start();
if(!isset($_SESSION['auth']) AND !$_SESSION['authAdmin']){
    header("Location: login.php");
}
?>