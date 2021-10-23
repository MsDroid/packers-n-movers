<?php 
include '../config.php';

$sadd = $_POST['sadd'];
$sign = $_POST['sign'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$slno = $_POST['slno'];
$cdate = $_POST['cdate'];
$messrs = $_POST['messrs'];
$myjsondata = $_POST['myjsondata'];
$mjson = $_POST['mjson'];

$sql = "insert into invoices (sadd,email,contact,sign,slno,cdate,messrs,myjsondata,mjson) values ('{$sadd}','{$email}','{$contact}','{$sign}','{$slno}','{$cdate}','{$messrs}','{$myjsondata}','{$mjson}')";
$query = mysqli_query($con, $sql);

if ($query) {
	return true;
}else{
	return false;
}


?>