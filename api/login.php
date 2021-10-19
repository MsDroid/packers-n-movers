<?php 
session_start();
include '../config.php';

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5($_POST['password']);

$sql = "SELECT * from users where email='{$email}' AND password='{$password}'";
$query = mysqli_query($con,$sql);
$count = mysqli_num_rows($query);

if ($count > 0) {
	$get_query = mysqli_query($con, "select * from users where email='{$email}'");

	$get_data = mysqli_fetch_assoc($get_query);
	
		$_SESSION['IS_LOGIN'] = 'yes';
		$_SESSION['uid'] = $get_data['id'];
		$_SESSION['username'] = $get_data['name'];
		echo 'true';

}else{
	echo 'false';
}

?>