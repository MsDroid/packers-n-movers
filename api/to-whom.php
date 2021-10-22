<?php 
session_start();
include '../config.php';

$name = $_POST['name'];
$fromAdd = $_POST['fromAdd'];
$toAdd = $_POST['toAdd'];
$cNoteNo = $_POST['cNoteNo'];
$date = $_POST['date'];
$myjsondata = $_POST['data'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$oaddress = $_POST['oaddress'];
$faddress = $_POST['faddress'];
$psign = $_POST['psign'];
$osign = $_POST['osign'];

$sql = "insert into towhom (name,fromAddress,toaddress,cnoteno,date,data,email,contact,oaddress,faddress,psign,osign) values ('{$name}','{$fromAdd}','{$toAdd}','{$cNoteNo}','{$date}','{$myjsondata}','{$email}','{$contact}','{$oaddress}','{$faddress}','{$psign}','{$osign}')";

$query = mysqli_query($con,$sql);

if ($query) {
	return true;

}else{
	return false;
}

?>