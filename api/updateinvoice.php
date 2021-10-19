<?php 
include '../config.php';

$slno = $_POST['slno'];
$cdate = $_POST['cdate'];
$messrs = $_POST['messrs'];
$messrs1 = $_POST['messrs1'];
$myjsondata = $_POST['myjsondata'];
$mjson = $_POST['mjson'];
$id = $_POST['id'];

$sql = "UPDATE invoices set 
	slno = '$slno',
	cdate = '$cdate',
	messrs = '$messrs',
	messrs1 = '$messrs1',
	myjsondata = '$myjsondata',
	mjson = '$mjson'
 	where id = '{$id}' ";

$query = mysqli_query($con, $sql);

if ($query) {
	return true;
}else{
	return false;
}


?>