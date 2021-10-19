<?php 
session_start();
include '../config.php';

$name = mysqli_real_escape_string($con,$_POST['name']);
$fromAdd = mysqli_real_escape_string($con,$_POST['fromAdd']);
$toAdd = mysqli_real_escape_string($con,$_POST['toAdd']);
$cNoteNo = mysqli_real_escape_string($con,$_POST['cNoteNo']);
$date = mysqli_real_escape_string($con,$_POST['date']);
$jsondata = $_POST['data'];
$id = $_POST['id'];


$sql = "UPDATE towhom set 
		name = '$name',
		fromAddress = '$fromAdd',
		toAddress = '$toAdd',
		cnoteno = '$cNoteNo',
		date = '$date',
		data = '$jsondata'
	 	where id='{$id}'";
	 	
$query = mysqli_query($con,$sql);

if ($query) {
	echo "true";

}else{
	echo "false";
}

?>