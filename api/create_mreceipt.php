<?php 
include '../config.php';

$slno = mysqli_real_escape_string($con, $_POST['slno']);
$date = mysqli_real_escape_string($con, $_POST['date']);
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

echo $sql = "INSERT into receipts(slno,mrdate,rf,sor,bc,rdate,ob,ao,amt,mobileno,email,sadd,osign) VALUES('{$slno}','{$date}','{$rf}','{$sor}','{$bc}','{$rdate}','{$ob}','{$ao}','{$amt}','{$mn}','{$email}','{$sadd}','{$osign}')";
$query = mysqli_query($con, $sql);

if($query){
	echo 'true';
}else{
	echo 'false';
}	


?>