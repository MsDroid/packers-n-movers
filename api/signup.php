<?php 
include '../config.php';

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5($_POST['password']);


$user_check_sql = "select * from users where email='{$email}'";
$user_check_query = mysqli_query($con, $user_check_sql);
$count = mysqli_num_rows($user_check_query);

if($count > 0){
	echo 'user email exist!';
}else{
	$query = mysqli_query($con,"insert into users(name,email,password) values ('{$name}','{$email}','{$password}')"); 

	if($query){
		echo 'true';
	}else{
		echo 'false';
	}	
}


?>