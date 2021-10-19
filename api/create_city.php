<?php 
include '../config.php';

$state = $_POST['state'];
$city = $_POST['city'];



$sql = "SELECT * from cities where city='{$city}'";
$query = mysqli_query($con, $sql);
$count = mysqli_num_rows($query);

if($count > 0){
	echo 'city already exist!';
}else{
	$sql1 = "INSERT into cities(state,city) values ('{$state}','{$city}')";
	$query1 = mysqli_query($con, $sql1); 

	if($query1){
		echo 'true';
	}else{
		echo 'false';
	}	
}


?>