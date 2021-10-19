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
$mn = mysqli_real_escape_string($con, $_POST['mn']);

$sql = "INSERT into receipts(slno,mrdate,rf,sor,bc,rdate,ob,ao,amt,mn) VALUES('{$slno}','{$date}','{$rf}','{$sor}','{$bc}','{$rdate}','{$ob}','{$ao}','{$amt}','{$mn}')";
$query = mysqli_query($con, $sql);

if($query){
	echo 'true';
}else{
	echo 'false';
}	


?>