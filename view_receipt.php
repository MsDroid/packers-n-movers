<?php
include 'config.php';
if (isset($_GET['id']) & $_GET['id'] != '') {
  $id = $_GET['id'];
  $rsql = "SELECT * from receipts where id = '{$id}'";
  $rquery = mysqli_query($con, $rsql);
  $rows = mysqli_fetch_assoc($rquery);
  // echo "<pre>";
  // print_r ($rows);
  // echo "</pre>";
  }


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Money Receipt</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/receipt.css">
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
								<select class="form-control address" disabled id="site_address" style="font-size: 16px;overflow: visible;width: 100%;text-align: center;border: none;margin: 0;padding: 0;white-space: normal;">
										<option>Select Address</option>
										<?php
											$add_sql = "SELECT * from address";
											$add_query = mysqli_query($con, $add_sql);
											while ($arow = mysqli_fetch_assoc($add_query)) {
												if($arow['address'] == $rows['sadd']){ ?>
													
													<option value="<?php echo $arow['address']; ?>" selected ><?php echo $arow['address']; ?></option>";
											
											<?php	}else{ ?>
											
													<option value="<?php echo $arow['address']; ?>" ><?php echo $arow['address'];?></option>";
											
											<?php	}
												// echo "<option value=".$arow['address']."><p>".$arow['address']."</p></option>";		
											}
										 ?>
									</select>
								<p>Contact : 9955797111 / 9955172777</p>
							</center>
						</div>
			</div>
			<div class="row bdr">
				<!-- <form class="row g-3" id="mreceipt"> -->
					<div class="col-md-2">
						<label for="slno" class="form-label">Sl.No.</label>
						<input disabled type="text" class="form-control" disabled id="slno" value="" >
					</div>
					<div class="col-md-8">
						<!-- <label for="inputEmail4" class="form-label">Sl.No.</label>
						<input disabled type="number" class="form-control" id="inputEmail4" pattern="[0-9]"> -->
					</div>
					<div class="col-md-2">
						<label for="date" class="form-label">Date</label>
						<input disabled  type="date" class="form-control" id="date">
					</div>
					<div class="col-6">
						<label for="rf" class="form-label">Received with thanks from</label>
						<input disabled  type="text" class="form-control" id="rf" placeholder="">
					</div>
					<div class="col-6">
						<label for="sor" class="form-label">a sum of rupees</label>
						<input disabled  type="text" class="form-control" id="sor" placeholder="">
					</div>
					<div class="col-md-4">
							<label for="bc" class="form-label">By Cash / Cheque /Draft No.</label>
							<input  disabled type="text" class="form-control" id="bc">
					</div>
					<div class="col-md-4">
							<label for="email" class="form-label">Email</label>
							<input disabled type="email" class="form-control" id="email">
					</div>
					<div class="col-md-4">
						<label for="rdate" class="form-label">Date</label>
						<input disabled  type="date" class="form-control" id="rdate">
					</div>
					<div class="col-md-4">
						<label for="ob" class="form-label">on Bank</label>
						<input disabled  type="text" class="form-control" id="ob">
					</div>
					<div class="col-4">
						<label for="ao" class="form-label">being payment on account of</label>
						<input disabled  type="text" class="form-control" id="ao">
					</div>
					<div class="col-4">
						<label for="ao" class="form-label">Mobile no.</label>
						<input disabled  type="number" class="form-control" id="mn">
					</div>
					<div class="col-12">
						<label for="inputZip" class="form-label snf">SAFE N FAST PACKERS & MOVERS <span style="font-size: 10px;">(Regd.)</span></label>
						<!-- <input disabled  type="text" class="form-control" id="inputZip"> -->
					</div>
					<div class="col-md-2">
						<label for="amt" class="form-label"><!-- Rs. --></label>
						<input disabled  type="number" class="form-control" id="amt" placeholder="Rs." pattern="[0-9]">
					</div>
					<div class="col-md-8">
						
					</div>
					<div class="col-md-2">
						<div id="snfsign">
							<img src="" alt="" width="200" height="60">
						</div>
						<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> Authorised Signatory</button>
						<!-- <label for="inputPassword4" class="form-label">Authorised Signatory</label> -->
						<!-- <input disabled type="date" class="form-control" id="inputPassword4"> -->
					</div>
					<div class="col-12 txtcntr mb10">
						<a href="money_receipt.php" class="btn btn-primary">
							Back
						</a>
						<!-- <button type="submit" id="receiptBtn" class="btn btn-success">Create</button> -->
					</div>
					<input disabled type="hidden" id="id" value="<?php echo $id; ?>">
				<!-- </form> -->

			</div>
		</div>
	</header>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	 <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<script type="text/javascript">
		// $('#mreceipt').submit(function(e){
		// 	e.preventDefault();
		// 	// alert("hello");
		// 	let slno = $('#slno').val();
		// 	let date = $('#date').val();
		// 	let rf = $('#rf').val();
		// 	let sor = $('#sor').val();
		// 	let bc = $('#bc').val();
		// 	let rdate = $('#rdate').val();
		// 	let ob = $('#ob').val();
		// 	let ao = $('#ao').val();
		// 	let amt = $('#amt').val();

		// 	let dataString = 'slno=' + slno + '&date='+ date + '&rf=' + rf + '&sor=' + sor + '&bc=' + bc + '&rdate=' + rdate + '&ob=' + ob + '&ao=' + ao + '&amt=' + amt;

			$.ajax({
				url:'api/get_mreceipt.php',
				method: 'POST',
				data: {'id':<?php echo $id; ?>},
				success:function(r){
					if (true) {
						// console.log(r);
						var x = JSON.parse(r);
						// console.log(x);
						 	// $('#site_address').val(x.sadd);
							$('#slno').val(x.slno);
							$('#date').val(x.mrdate);
							$('#rf').val(x.rf);
							$('#sor').val(x.sor);
							$('#bc').val(x.bc);
							$('#rdate').val(x.rdate);
							$('#ob').val(x.ob);
							$('#ao').val(x.ao);
							$('#amt').val(x.amt);
							$('#email').val(x.email);
							$('#mn').val(x.mobileno);
							let img_field = "<img src=upload/"+x.osign+" alt='' width='200' height='100'>";
          		$('#snfsign').html(img_field);
						// window.location.href='money_receipt.php';
					}
				}
			})
		// })
	</script>
</body>
</html>