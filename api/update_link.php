<?php 
include '../config.php';

$remark = $_POST['remark'];
$sat = $_POST['sat'];
$contact = $_POST['contact'];

$sql = "UPDATE links set
	status = '$sat', 
	remarks = '$remark'
	where contact = '{$contact}' ";

$query = mysqli_query($con, $sql);

if ($query) {
	return true;
}else{
	return false;
}


?>