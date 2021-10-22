<?php
include 'config.php';
$slno = 'SN-'.time();
// echo $slno;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Money Receipt</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/receipt.css">
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

	.flex-row {
		display: flex;
		position: fixed;
		bottom: 25px;
	}
	.wrapper {
		border: 1px solid #4b00ff;
		border-right: 0;
	}
	canvas#signature-pad2 {
		background: #fff;
		width: 100%;
		height: 100%;
		cursor: crosshair;
	}
	button#clear2 {
		height: 100%;
		background: #4b00ff;
		border: 1px solid transparent;
		color: #fff;
		font-weight: 600;
		cursor: pointer;
	}

	button#clear2 span{
		transform: rotate(90deg);
		display: block;
	}

</style>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row" style="position: relative;">
				<div class="col-sm-2 txtcntr" style="position: absolute;left: 0;">
					<img src="assets/images/logo.png" width="100" alt="logo">
				</div>
				<div class="col-sm-12" style="text-align: center;">
					<div class="row" style="text-align: center;">
						<div class="col-sm-12">
							<center><h5>MONEY RECEIPT</h5></center>
						</div>
						<div class="col-sm-4 gst-wrapper" style="position: absolute;right: 0;text-align: right;">
							<p>GSTIN NO. : &nbsp;20AMGPV8554R1Z5</p>
							<p>Regd. No. : </p>
						</div>
					</div>
					<div class="row" style="margin: 5px 15%;">
						<div class="col-sm-12">
							<h1>SAFE N FAST PACKERS & MOVERS <span style="font-size:10px">(Regd.)</span></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 add-wrapper">
					<center>
						<select class="form-control address" id="site_address" style="font-size: 16px;overflow: visible;width: 100%;text-align: center;border: none;margin: 0;padding: 0;white-space: normal;">
							<option>Select Address</option>
							<?php
							$add_sql = "SELECT * from address";
							$add_query = mysqli_query($con, $add_sql);
							while ($arow = mysqli_fetch_assoc($add_query)) { ?>

								<option value="<?php echo $arow['address']; ?>"><p><?php echo $arow['address'] ?></p></option>
							<?php }
							?>
						</select>
						<p>Contact : 9955797111 / 9955172777</p>
					</center>
				</div>
			</div>
			<div class="row bdr">
				<form class="row g-3" id="mreceipt">
					<div class="col-md-2">
						<label for="slno" class="form-label">Sl.No.</label>
						<input type="text" class="form-control" disabled id="slno" value="<?php echo $slno;?>">
					</div>
					<div class="col-md-8">
						<!-- <label for="inputEmail4" class="form-label">Sl.No.</label>
							<input type="number" class="form-control" id="inputEmail4" pattern="[0-9]"> -->
						</div>
						<div class="col-md-2">
							<label for="date" class="form-label">Date</label>
							<input required type="date" class="form-control" id="date">
						</div>
						<div class="col-6">
							<label for="rf" class="form-label">Received with thanks from</label>
							<input required type="text" class="form-control" id="rf" placeholder="">
						</div>
						<div class="col-6">
							<label for="sor" class="form-label">A Sum Of Rupees</label>
							<input required type="text" class="form-control" id="sor" placeholder="">
						</div>
						<div class="col-md-4">
							<label for="bc" class="form-label">By Cash / Cheque /Draft No.</label>
							<input required type="text" class="form-control" id="bc">
						</div>
						<div class="col-md-4">
							<label for="email" class="form-label">Email</label>
							<input required type="email" class="form-control" id="email">
						</div>
						<div class="col-md-4">
							<label for="rdate" class="form-label">Date</label>
							<input required type="date" class="form-control" id="rdate">
						</div>
						<div class="col-md-4">
							<label for="ob" class="form-label">On Bank</label>
							<input required type="text" class="form-control" id="ob">
						</div>
						<div class="col-4">
							<label for="ao" class="form-label">Being Payment On Account Of</label>
							<input required type="text" class="form-control" id="ao">
						</div>
						<div class="col-4">
							<label for="ao" class="form-label">Mobile no.</label>
							<input required type="number" class="form-control" id="mn">
						</div>
						<div class="col-12">
							<label for="inputZip" class="form-label snf">SAFE N FAST PACKERS & MOVERS <span style="font-size: 10px;">(Regd.)</span></label>
							<!-- <input required type="text" class="form-control" id="inputZip"> -->
						</div>
						<div class="col-md-2">
							<label for="amt" class="form-label"><!-- Rs. --></label>
							<input required type="number" class="form-control" id="amt" placeholder="Rs." pattern="[0-9]">
						</div>
						<div class="col-md-8">

						</div>
						<div class="col-md-2">
							<div id="snfsignimg">
								<img src="" alt="" width="200" height="60">
							</div>
							<input type="hidden" id="snfsv" name="" value="">
							<button type="button" id="snfsign"> Authorised Signatory</button>

						</div>
						<div class="col-12 txtcntr mb10">
							<a href="money_receipt.php" class="btn btn-primary">
								Back
							</a>
							<button type="submit" id="receiptBtn" class="btn btn-success">Create</button>
						</div>
					</form>
				</div>
			</div>
		</header>
		<div>
			<!-- sign 3 -->
			<div class="flex-row" id="sign2">
				<div class="wrapper">
					<canvas id="signature-pad2" width="400" height="200"></canvas>
				</div>
				<div class="clear-btn">
					<button id="clear2" type="button"><span> Clear </span></button>
					<button id="save2" type="button" class="btn btn-primary"><span> SAVE </span></button>
				</div>
			</div>  
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#sign2').hide();
						$('#snfsign').click(function(){
				      // console.log("partySign");

				      $('#sign2').show();
				      // signature part
				      let mycanvas = document.getElementById("signature-pad2");

				      function resizeCanvas() {
				      	var ratio = Math.max(window.devicePixelRatio || 1, 1);
				           mycanvas.width = 750;//canvas.offsetWidth * ratio;
				           mycanvas.height = 400;//canvas.offsetHeight * ratio;
				           mycanvas.getContext("2d").scale(ratio, ratio);
				           // console.log("GDWGDYG____________________________");
				         }
				         window.onresize = resizeCanvas;
				         resizeCanvas();

				         let signaturePad = new SignaturePad(mycanvas);

				         document.getElementById("clear2").addEventListener('click', function(){
				         	signaturePad.clear();
				         })

				         document.getElementById("save2").addEventListener('click', function(){
				         	var img    = mycanvas.toDataURL("image/png");

					        // document.write('<img src="'+img+'"/>');

					        const base64Canvas = mycanvas.toDataURL("image/png").split(';base64,')[1];
					        
					        sendPSignToServer(base64Canvas);
					      	})

			         function sendPSignToServer(sig){
			         	$.ajax({
			         		url : "thumbnail-uploader-content.php",
			         		method : "POST",
			         		data : {
			         			'thumbnail':sig
			         		},
			         		success:function(r){
			          // console.log(r);
			          let x = jQuery.parseJSON(r);
			          // console.log(x.img_name);
			          $('#snfsv').val(x.img_name);
			          let img_field = "<img src=upload/"+x.img_name+" alt='' width='200' height='100'>";
			          $('#cneimg').hide();
			          $('#snfsignimg').html(img_field);
			          $('#sign2').hide();
			          
			        }
			      });

         }
       });

// ==================================================================================
$('#mreceipt').submit(function(e){
	e.preventDefault();
			// alert("hello");
			let sadd = $('#site_address').val();
			let slno = $('#slno').val();
			let date = $('#date').val();
			let rf = $('#rf').val();
			let sor = $('#sor').val();
			let bc = $('#bc').val();
			let rdate = $('#rdate').val();
			let ob = $('#ob').val();
			let ao = $('#ao').val();
			let amt = $('#amt').val();
			let mn = $('#mn').val();
			let email = $('#email').val();
			let osign = $('#snfsv').val();

			let dataString = 'slno=' + slno + '&date='+ date + '&rf=' + rf + '&sor=' + sor + '&bc=' + bc + '&rdate=' + rdate + '&ob=' + ob + '&ao=' + ao + '&amt=' + amt + '&mn=' + mn + '&sadd=' + sadd + '&email=' + email + '&osign=' + osign;

			$.ajax({
				url:'api/create_mreceipt.php',
				method: 'POST',
				data: dataString,
				success:function(r){
					if (true) {
						alert("Successfully Created!");
						window.location.href='money_receipt.php';
					}else{
						alert("Somthing Wrong Please Try Again!");
					}
				}
			})
		})
})
	</script>
</body>
</html>