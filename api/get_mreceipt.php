<?php
include '../config.php';


if (isset($_POST['id']) && $_POST['id'] != '') {
  $id = $_POST['id'];

  $esql="SELECT * from receipts where id = '{$id}'";
  $equery=mysqli_query($con, $esql);
  $erow=mysqli_fetch_assoc($equery);
  
  print_r(json_encode($erow));
}
?>