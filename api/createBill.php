<?php 
include '../config.php';

$officeAddress = $_POST['officeAddress'];
$name = $_POST['name'];
$consign_no = $_POST['consign_no'];
$fromadd = $_POST['fromadd'];
$toadd = $_POST['toadd'];
$inspt = $_POST['inspt'];
$data = $_POST['data'];

$sql = "insert into bills (oaddress,name,consign_no,fromadd,toadd,inspt,data) values ('{$officeAddress}','{$name}','{$consign_no}','{$fromadd}','{$toadd}','{$inspt}','{$data}')";
$query = mysqli_query($con, $sql);

if ($query) {
	return true;
}else{
	return false;
}


?>