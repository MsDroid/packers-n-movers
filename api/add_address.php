<?php 
include '../config.php';

$address = $_POST['address'];


$sql = "INSERT into address (address) VALUES ('{$address}')";
$query = mysqli_query($con, $sql);


if($query){
	echo 'true';
}else{
	echo 'false';
}


?>