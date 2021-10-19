<?php 
include 'config.php';

if (isset($_GET['id']) & $_GET['id'] != '') {
  $id = $_GET['id'];

  $sql = "delete from cities where id='$id'";
  $query = mysqli_query($con,$sql);
  	if ($query) {
  	echo	"<script>
  		alert('City Successfully Created!'');
  		window.location.href='city.php';
  		</script>";
  	}else{
  		return false;
  	}

  }


?>