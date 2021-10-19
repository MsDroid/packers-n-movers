<?php 
include '../config.php';

$name = $_POST['name'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$fromadd = $_POST['fromadd'];
$toadd = $_POST['toadd'];
$no = $_POST['no'];
$date = $_POST['date'];
$tbldata = $_POST['tbldata'];
$qjson = $_POST['qjson'];
$qcjson = $_POST['qcjson'];
$qid = $_POST['id'];


$sql = "UPDATE quotations set 
	name = '$name',
	add1 = '$add1',
	add2	= '$add2',
	fromadd = '$fromadd',
	toadd = '$toadd',
	no	= '$no',
	cdate = '$date',
	tbldata	= '$tbldata',
	qjson = '$qjson',
	qcjson = '$qcjson'
	where id = '{$qid}' ";

$query = mysqli_query($con, $sql);

if ($query) {
	return true;
}else{
	return false;
}

?>
