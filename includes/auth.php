<?php
session_start();
if(!isset($_SESSION['uid']) || trim($_SESSION['uid']=='')){
    header('location:login.php');
    exit();
}
?>