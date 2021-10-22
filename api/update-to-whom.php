<?php 
session_start();
include '../config.php';

$name = mysqli_real_escape_string($con,$_POST['name']);
$fromAdd = mysqli_real_escape_string($con,$_POST['fromAdd']);
$toAdd = mysqli_real_escape_string($con,$_POST['toAdd']);
$cNoteNo = mysqli_real_escape_string($con,$_POST['cNoteNo']);
$date = mysqli_real_escape_string($con,$_POST['date']);
$jsondata = $_POST['data'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$oaddress = $_POST['oaddress'];
$faddress = $_POST['faddress'];
$psign = $_POST['psign'];
$osign = $_POST['osign'];
$id = $_POST['id'];


echo $sql = "UPDATE towhom set 
		name = '$name',
		fromAddress = '$fromAdd',
		toAddress = '$toAdd',
		cnoteno = '$cNoteNo',
		date = '$date',
		data = '$jsondata',
		email = '$email',
		contact = '$contact',
		oaddress = '$oaddress',
		faddress = '$faddress',
		psign = '$psign',
		osign = '$osign'
	 	where id='{$id}'";
	 	
	$query = mysqli_query($con,$sql);

	if ($query) {
	echo "true";

	}else{
	echo "false";
	}

?>