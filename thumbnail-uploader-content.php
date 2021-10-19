<?php 


	if(isset($_POST['thumbnail']))
		{  
		    $video = $_POST['thumbnail'];
		    // $thumb = $event_json['thumbbase64']['file_data'];

		    // $targetDir = "../course_content/video/";
		    $targetDir_thumb = "upload/";
		    $fileName=date("mjYHis")."_"."thumbnail";

		    // $Video_File_Name = $fileName.".mp4";
		    $Thumb_File_Name = $fileName.".png";

		    // $videoTargetDir = $targetDir.$fileName.".mp4";
		    $thumbTargetDir = $targetDir_thumb.$fileName.".png";
			
			/*Putting Video*/
			// $video = base64_decode($video);
			// file_put_contents($videoTargetDir, $video);

			/*Putting Thumbnail*/
			$thumb = base64_decode($video);
			file_put_contents($thumbTargetDir, $thumb);

			$output = array( "response" => "1", "msg" => "Uploaded Successfully", "img_name" => $Thumb_File_Name);	

		} else {

			$output = array( "response" => "0", "msg" => "error");	

		}


	print_r(json_encode($output, true));

?>