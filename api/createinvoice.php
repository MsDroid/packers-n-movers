<?php 
include '../config.php';


$slno = $_POST['slno'];
$cdate = $_POST['date'];
$messrs = $_POST['messrs'];
$messrs1 = $_POST['messrs1'];
$myjsondata = $_POST['myjsondata'];
$mjson = $_POST['mjson'];

$sql = "insert into invoices (slno,cdate,messrs,messrs1,myjsondata,mjson) values ('{$slno}','{$cdate}','{$messrs}','{$messrs1}','{$myjsondata}','{$mjson}')";
$query = mysqli_query($con, $sql);

if ($query) {
	return true;
}else{
	return false;
}


?>