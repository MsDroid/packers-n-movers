<?php 
include '../config.php';

if (isset($_GET['id']) & $_GET['id'] != '') {
	$id = $_GET['id'];

	$sql = "delete from users where id = '$id'";
	$query = mysqli_query($con, $sql);

	if ($query) {
		header("location:../users.php");
	}else{
		echo "Somthing Wrong!";
	}
}


?>