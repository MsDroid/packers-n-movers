<?php 
include '../config.php';

$name = $_POST['name'];
$consign_no = $_POST['consign_no'];
$fromadd = $_POST['fromadd'];
$toadd = $_POST['toadd'];
$inspt = $_POST['inspt'];
$data = $_POST['data'];
$bid = $_POST['bid'];

$sql = "UPDATE bills set 
	name = '$name',
	consign_no = '$consign_no',
	fromadd = '$fromadd',
	toadd = '$toadd',
	inspt = '$inspt',
	data = '$data'
 	where id = '{$bid}' ";

$query = mysqli_query($con, $sql);

if ($query) {
	return true;
}else{
	return false;
}


?>