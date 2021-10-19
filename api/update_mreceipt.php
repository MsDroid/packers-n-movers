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
$id = $_POST['id'];


echo $sql = "UPDATE receipts set 
		mrdate = '$mrdate',
		rf = '$rf',
		sor = '$sor',
		bc = '$bc',
		rdate = '$rdate',
		ob = '$ob',
		ao = '$ao',
		amt = '$amt'
	 	where id='{$id}'";

$query = mysqli_query($con, $sql);

if($query){
	echo 'true';
}else{
	echo 'false';
}	


?>