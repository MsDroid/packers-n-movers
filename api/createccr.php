<?php 
include '../config.php';


$name = $_POST['name'];
$fromadd = $_POST['fromadd'];
$toadd = $_POST['toadd'];
$mob = $_POST['mob'];
$ccrrjson = $_POST['ccrjson'];
$ccrradios_json = $_POST['ccrradios_json'];
$ccrremarkjson = $_POST['ccrremarkjson'];
$m_no = $_POST['m_no'];

$sql ="insert into carconditions (name,fromadd,toadd,mob,ccrrjson,ccrradios_json,ccrremarkjson,m_no) values ('$name','$fromadd','$toadd','$mob','$ccrrjson','$ccrradios_json','$ccrremarkjson','$m_no')";
$query = mysqli_query($con, $sql);

if ($query) {
	return true;
}else{
	return false;
	}


?>