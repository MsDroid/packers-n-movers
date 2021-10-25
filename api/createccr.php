<?php 
include '../config.php';

$psign = $_POST['psign'];
$osign = $_POST['osign'];
$name = $_POST['name'];
$fromadd = $_POST['fromadd'];
$toadd = $_POST['toadd'];
$mob = $_POST['mob'];
$ccrrjson = $_POST['ccrjson'];
$ccrradios_json = $_POST['ccrradios_json'];
$ccrremarkjson = $_POST['ccrremarkjson'];
$m_no = $_POST['m_no'];

echo $sql ="insert into carconditions (name,fromadd,toadd,mob,ccrrjson,ccrradios_json,ccrremarkjson,m_no,psign,osign) values ('$name','$fromadd','$toadd','$mob','$ccrrjson','$ccrradios_json','$ccrremarkjson','$m_no','$psign','$osign')";
$query = mysqli_query($con, $sql);

if ($query) {
	return true;
}else{
	return false;
	}


?>