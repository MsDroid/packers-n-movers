<?php 

if (isset($_GET['consign_no']) & $_GET['consign_no'] != '') {
	$consign_no = $_GET['consign_no'];
  echo $consign_no;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>Quotation Signature</title>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
	<link href="assets/css/jquery.signature.css" rel="stylesheet">
	<style>
	.kbw-signature { width: 400px; height: 200px; }
</style>
<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="assets/js/jquery.signature.js"></script>
<script>
	$(function() {
		var sig = $('#sig').signature();

		$('#clear').click(function() {
			sig.signature('clear');
		});

	});
</script>

</head>
<body>
	<h1>Signature Uploader</h1>
	<form action="#" method="POST">
		<div id="sig"></div>
		<p style="clear: both;">
			<input type="hidden" name="consign_no" id="consign_no" value="<?php echo $consign_no; ?>">
			<textarea id="signature64" name="signed" style="display: none;"></textarea>
		</p>
		<div><button id="clear">Clear</button>&nbsp;&nbsp;&nbsp;<button id="submitbtn">submit</button></div>
	</form>

	<script type="text/javascript">
		var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
		$('#clear').click(function(e) {
			e.preventDefault();
			sig.signature('clear');
			$("#signature64").val('');
		});


		$('#submitbtn').click(function (e) {
			e.preventDefault();
			let consign_no = $('#consign_no').val();
			let signed = $('#signature64').val();
			let dataString = 'consign_no=' + consign_no + '&signed=' + signed;
			
			$.ajax({
				url:"q-sign-upload.php",
				method:"POST",
				data:dataString,
				success:function(r){
					if(true){
						alert("Signature Created!");
						window.location.href="quotationlist.php";
					}else{
						alert("Please try again!");
					}
				}
			})
		})
	</script>


</body>
</html>
