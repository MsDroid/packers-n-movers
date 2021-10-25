<?php
include '../config.php';
session_start();

if(!isset($_SESSION['IS_LOGIN'])){
  header("location:login.php");
  
}

if (isset($_POST['media_no']) && $_POST['media_no'] != '') {
  $media_no = $_POST['media_no'];
  $esql="SELECT * from multi_media where m_m_no = '{$media_no}'";
  $equery=mysqli_query($con, $esql);
  $erow=mysqli_fetch_all($equery, MYSQLI_ASSOC);
  
  print_r(json_encode($erow));
}
?>