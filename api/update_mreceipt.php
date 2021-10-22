<?php 
include '../config.php';

// $slno = mysqli_real_escape_string($con, $_POST['slno']);
$mrdate = mysqli_real_escape_string($con, $_POST['date']);
$rf = mysqli_real_escape_string($con, $_POST['rf']);
$sor = mysqli_real_escape_string($con, $_POST['sor']);
$bc = mysqli_real_escape_string($con, $_POST['bc']);
$rdate = mysqli_real_escape_string($con, $_POST['rdate']);
$ob = mysqli_real_escape_string($con, $_POST['ob']);
$ao = mysqli_real_escape_string($con, $_POST['ao']);
$amt = mysqli_real_escape_string($con, $_POST['amt']);
$mn = $_POST['mn'];
$sadd = $_POST['sadd'];
$osign = $_POST['osign'];
$email = $_POST['email'];
$id = $_POST['id'];


 $sql = "UPDATE receipts set 
		rdate = '$mrdate',
		rf = '$rf',
		sor = '$sor',
		bc = '$bc',
		rdate = '$rdate',
		ob = '$ob',
		ao = '$ao',
		amt = '$amt',
		mobileno = '$mn',
		sadd = '$sadd',
		osign = '$osign',
		email = '$email'
	 	where id='{$id}'";

$query = mysqli_query($con, $sql);

if($query){
	echo 'true';
}else{
	echo 'false';
}	


?>