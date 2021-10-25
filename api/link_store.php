<?php 
include '../config.php';

$title = $_POST['title'];
$desc = $_POST['desc'];
$cno = $_POST['cno'];
$invoice = $_POST['invoice'];
$remark = $_POST['remark'];
$email = $_POST['email'];
$contact = $_POST['contact'];

	


$sql1 = "INSERT into link(invoice_no,c_no,status,title,description,remarks, email, contact) values ('{$invoice}','{$cno}','0','{$title}','{$desc}','{$remark}','{$email}','{$contact}')";
	$query1 = mysqli_query($con, $sql1); 

	if($query1){
		echo 'true';
	}else{
		echo 'false';
	}	



?>