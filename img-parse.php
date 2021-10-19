<?php
if(!empty($_FILES)){
include ('config.php');

	$product_number = $_REQUEST['media-number'];	

	$targetDir = "uploads/";

	$fileName = time().rand().$_FILES['file']['name'];

	$targetFile = $targetDir.$fileName;	

	if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){

		//insert file information into db table

		 $query = mysqli_query($con,"INSERT INTO multi_media (m_filename, m_m_no) VALUES('{$fileName}','{$product_number}')");
		if($query){
			echo "true";
		}else{
			echo "dffsf";
		}
	}

	

}

?>