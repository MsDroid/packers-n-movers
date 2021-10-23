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
$id = $_POST['id'];

echo $sql = "UPDATE invoices set 
	sadd = '$sadd',
	sign = '$sign',
	contact = '$contact',
	email = '$email',
	slno = '$slno',
	cdate = '$cdate',
	messrs = '$messrs',
	myjsondata = '$myjsondata',
	mjson = '$mjson'
 	where id = '{$id}' ";

$query = mysqli_query($con, $sql);

if ($query) {
	return true;
}else{
	return false;
}


?>