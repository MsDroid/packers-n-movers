<?php 
include 'config.php';
	
	$invoice_no = $_POST['invoice_no'];
	$folderPath = "upload/";
	$image_parts = explode(";base64,", $_POST['signed']);
	$image_type_aux = explode("image/", $image_parts[0]);
	$image_type = $image_type_aux[1];
	$image_base64 = base64_decode($image_parts[1]);
	$file = uniqid() . '.'.$image_type;

	file_put_contents($folderPath.$file, $image_base64);

	// echo "Signature Uploaded Successfully.";

	$sql = "INSERT INTO signature (invoice_no,file_name) VALUES('$invoice_no','$file')";
	$query = mysqli_query($con, $sql);
	if($query){
		echo "true";
	}else{
		echo "false";
	}


?>