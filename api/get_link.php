<?php
include '../config.php';
session_start();

if(!isset($_SESSION['IS_LOGIN'])){
  header("location:login.php");
  
}

if (isset($_POST['contact']) && $_POST['contact'] != '') {
  $contact = $_POST['contact'];
  $esql="SELECT * from link where contact = '{$contact}'";
  echo $equery=mysqli_query($con, $esql);
  $erow=mysqli_fetch_assoc($equery);
  
  print_r(json_encode($erow));
}
?>