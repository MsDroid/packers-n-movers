<?php 
session_start();
include '../config.php';

$name = mysqli_real_escape_string($con,$_POST['name']);
$fromAdd = mysqli_real_escape_string($con,$_POST['fromAdd']);
$toAdd = mysqli_real_escape_string($con,$_POST['toAdd']);
$cNoteNo = mysqli_real_escape_string($con,$_POST['cNoteNo']);
$date = mysqli_real_escape_string($con,$_POST['date']);
$myjsondata = $_POST['data'];


$sql = "insert into towhom (name,fromAddress,toaddress,cnoteno,date,data) values ('{$name}','{$fromAdd}','{$toAdd}','{$cNoteNo}','{$date}','{$myjsondata}')";
$query = mysqli_query($con,$sql);

if ($query) {
	echo true;

}else{
	echo false;
}

?>