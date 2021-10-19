<?php 
include '../config.php';

$oaddress = $_POST['oaddress'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$name = $_POST['name'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$fromadd = $_POST['fromadd'];
$toadd = $_POST['toadd'];
$no = $_POST['no'];
$date = $_POST['date'];
$tbldata = $_POST['tbldata'];
$qjson = $_POST['qjson'];
$qcjson = $_POST['qcjson'];


$sql = "insert into quotations (oaddress,email,contact,name,add1,add2,fromadd,toadd,no,cdate,tbldata,qjson,qcjson) values ('{$oaddress}','{$email}','{$contact}','{$name}','{$add1}','{$add2}','{$fromadd}','{$toadd}','{$no}','{$date}','{$tbldata}','{$qjson}','{$qcjson}')";
$query = mysqli_query($con, $sql);

if ($query) {
	echo true;
}else{
	echo false;
}


?>