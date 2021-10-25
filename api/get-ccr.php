<?php
include '../config.php';
session_start();

if(!isset($_SESSION['IS_LOGIN'])){
  header("location:login.php");
}

if (isset($_POST['id']) && $_POST['id'] != '') {
  $id = $_POST['id'];
  $esql="SELECT * from carconditions where id = '{$id}'";
  $equery=mysqli_query($con, $esql);
  $erow=mysqli_fetch_assoc($equery);
  
  print_r(json_encode($erow));
}
?>