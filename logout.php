<?php 
session_start();
unset($_SESSION['IS_LOGIN']);
unset($_SESSION['uid']);
header("location:login.php");
?>