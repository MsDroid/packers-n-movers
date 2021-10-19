<?php 
include 'config.php';
session_start();

if(!isset($_SESSION['IS_LOGIN'])){
  header("location:login.php");
}

$invoice_no = rand().time();

$consign_no = 'SNF-'.time();
// echo $consign_no;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" >
<link href="assets/style.css" rel="stylesheet">

	<link href="assets/css/bills.css" rel="stylesheet">


	<title>Consignee Copy</title>
	<style type="text/css">
    	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
		/** {
		    padding: 0;
		    margin: 0;
		    font-family: 'Poppins', sans-serif;
		}*/
		/*body {
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    height: 100vh;
		    width: 100vw;
		    background: #ececec;
		    overflow: hidden;
		}*/
		.flex-row {
		    display: flex;
		}
		.wrapper {
		    border: 1px solid #4b00ff;
		    /*border-right: 0;*/
		}
		canvas#signature-pad {
		    background: #fff;
		    width: 100%;
		    height: 100%;
		    cursor: crosshair;
		}
		/*button#clear {
		    height: 100%;
		    background: #4b00ff;
		    border: 1px solid transparent;
		    color: #fff;
		    font-weight: 600;
		    cursor: pointer;
		}*/
		/*button#clear span {
		    transform: rotate(90deg);
		    display: block;
		}*/
    </style>
</head>
<body>

	<main>
		<form>
		<section id="consignee-copy">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 br">
						<header>
							<div class="">
								<div class="img-wrapper">
									<img class="img" src="logo.png" alt="logo" width="200px">
								</div>
								<div class="logo-content-wrapper">
									<h1>SAFE N FAST <span style="font-size: 10px;">(Regd.)</span></h1>
									<h5>A House of complete Transport Solution ( SERVICES All over India Door to Door )</h5>
									<select class="form-control address" id="site_address" style="font-size: 10px;overflow: visible;width: 107%;text-align: center;border: none;margin: 0;padding: 0;white-space: normal;">
										<option>Select Address</option>
										<?php
											$add_sql = "SELECT * from address";
											$add_query = mysqli_query($con, $add_sql);
											while ($arow = mysqli_fetch_assoc($add_query)) {
												echo "<option value=".$arow['address']."><p>".$arow['address']."</p></option>";		
											}
										 ?>
									</select>
									<!-- <p>SWARN JAYANTI NAGAR, ROAD NO - 05, NEAR SHIV MANDIR MADHUKAM, RANCHI - 834001, JHARKHAND,INDIA</p> -->
									<p><span class="">Email : support@safenfast.in</span> | <span class="">Website : www.safenfast.in</span></p>
									<h3>Contact : 9955797111 / 9955172777</h3>
								</div>	
							</div>
						</header>
						
						<h2 class="cc">CONSIGNEE COPY</h2>
						<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 cstmfnt">
								<div>
									<center>
										<h5>CONSIGNOR</h5>	
									</center>
								</div>
								<h6>Address
									<input type="text" id="cadd1" name="consignor-addres1" class="bdr-none w100p">
									<input type="text" id="cadd2" name="consignor-addres2" class="bdr-none w100p">
									<input type="text" id="cadd3" name="consignor-addres3" class="bdr-none w100p">
									<input type="text" id="cadd4" name="consignor-addres4" class="bdr-none w100p">
								</h6>
								<h6>Contact No.
									<input type="number" id="cno" name="consignor-contact" class="bdr-none w100p">
								</h6>
								<h6>Email Id.
									<input type="email" id="email" class="bdr-none w100p" required>
								</h6>
								<h6>
									<table>
										<tr>
											<td><span class="mr20">Pin</span>
												<input id="cp0" type="number" name="pin_n1" class="w30"></td>
											<td><input id="cp1" type="number" name="pin_n2" class="w30"></td>
											<td><input id="cp2" type="number" name="pin_n3" class="w30"></td>
											<td><input id="cp3" type="number" name="pin_n4" class="w30"></td>
											<td><input id="cp4" type="number" name="pin_n5" class="w30"></td>
											<td><input id="cp5" type="number" name="pin_n6" class="w30"></td>
										</tr>
									</table>
								</h6>

							</div>	
							<!-- <div class="col-md-2 vrl"></div> -->
							<div class="col-md-6 cstmfnt">
								<div>
									<center>
										<h5>CONSIGNEE</h5>	
									</center>
								</div>
								<h6>Address
									<input type="text" id="cneadd1" name="consignor-addres1" class="bdr-none w100p"required>
									<input type="text" id="cneadd2" name="consignor-addres2" class="bdr-none w100p">
									<input type="text" id="cneadd3" name="consignor-addres3" class="bdr-none w100p">
									<input type="text" id="cneadd4" name="consignor-addres4" class="bdr-none w100p">
								</h6>
								<h6>Contact No.
									<input type="number" id="cneno" name="consignor-contact" class="bdr-none w100p" required>
								</h6>
								<h6>Email Id.
									<input type="email" id="email" class="bdr-none w100p" required>
								</h6>
								<h6>
									<table>
										<tr>
											<td><span class="mr20">Pin</span><input id="cnep0" type="number" name="pin_n1" class="w30"></td>
											<td><input id="cnep1" type="number" name="pin_n2" class="w30" required></td>
											<td><input id="cnep2" type="number" name="pin_n3" class="w30" required></td>
											<td><input id="cnep3" type="number" name="pin_n4" class="w30" required></td>
											<td><input id="cnep4" type="number" name="pin_n5" class="w30" required></td>
											<td><input id="cnep5" type="number" name="pin_n6" class="w30" required></td>
										</tr>
									</table>
								</h6>
							</div>		
						</div>
						</div>
						<!-- table -->
						<div class="row pd10">
							<div class="col-md-12">
								<table class="table table-bordered pdtb" style="font-size: 14px;padding-top: 2px;width: 100%;padding-bottom: 2px;">
									<tbody>
										<tr>
											<th width="50%">Insured Type :&nbsp;&nbsp; 
												Owner  &nbsp;&nbsp;
												<input type="radio" id="owner" value="owner" name="ins_check" class="w300" required> &nbsp;&nbsp;
												Carrier &nbsp;&nbsp;
												<input type="radio" id="carrier" value="carrier" name="ins_check" class="w300">
											</th>
											<th width="25%">PKG</th>
											<th width="25%">PARTICULARS</th>
										</tr>
										<tr>
											<td class="dflex"><h6>Name of Insured Co.</h6>
												<input type="text" id="insured_co_name" class="bdr-none w60p"></td>
											<td width="20%"><input type="number" id="pkg" class="bdr-none w100p"></td>
											<td width="30%"><input type="text" id="particular" class="bdr-none w100p"></td>
										</tr>
										<tr>
											<td class="dflex"><h6>Policy No.</h6> <input type="text" id="policy" class="bdr-none w60p"></td>
											<td colspan="2"><h6>Charged Wt. (Kg.)</h6></td>

										</tr>
										<tr>
											<td class="dflex"><h6>Invoice No.</h6>
												<input type="text" value="<?php echo $invoice_no; ?>" disabled id="invoice" class="bdr-none w60p"></td>
											<td colspan="2" class="wfdb"><center><h5>WORK FOR DESTINATION BRANCH</h5></center></td>

										</tr>
										<tr>
											<td class="dflex"><h6>Date:</h6><input type="date" id="date" class="bdr-none w60p"></td>
											<td rowspan="4" colspan="2">
												<table class="w100p">
												<tr>
													<td><h6>1.&nbsp; Unloading</h6></td>
													<td style="font-size: 10px;text-align: center;"><span class="f12">Yes</span> 
														<input type="radio" value="Yes" name="unloading_check" class="bdr-none">
														<span class="f12">No</span> 
														<input type="radio" name="unloading_check" value="No" class="bdr-none">
													</td>
												</tr>
												<tr>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;<h6>Floor</h6></td>
													<td><input type="text" id="floor" class="bdr-none w100p"></td>
												</tr>
												<tr>
													<td><h6>2.&nbsp; Unpacking</h6></td>
													<td style="font-size: 10px;text-align: center;"><span class="f12">Yes</span>
														<input type="radio" value="Yes" name="unpacking_check" class="bdr-none">
														<span class="f12">No</span> 
														<input type="radio" value="No" name="unpacking_check" class="bdr-none">
													</td>
												</tr>
												<tr>
													<td><h6>3.&nbsp; Adjusting</h6></td>
													<td style="font-size: 10px;text-align: center;"><span class="f12">Yes</span>
														<input type="radio" value="Yes" id="adjusting_check_yes" name="adjusting_check" class="bdr-none">
														<span class="f12">No</span> 
														<input type="radio" value="No " id="adjusting_check_no" name="adjusting_check" class="bdr-none">
													</td>
												</tr>
												<tr>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;<h6>To pay collection form party Rs. </h6></td>
													<td><input type="text" id="party_collection" class="bdr-none"></td>
												</tr>
												<tr >
													<td>&nbsp;&nbsp;&nbsp;&nbsp;<h6>Balance fair to be paid to Driver Rs. </h6></td>
													<td><input type="text" id="driver_paid" class="bdr-none"></td>
												</tr>
											</table>
										</td>
										</tr>
										<tr>
											<td class="dflex"><h6>Permit No.</h6><input type="text" id="permit" class="bdr-none w60p" required></td>

										</tr>
										<tr>
											<td class="dflex"><h6>Lorry No.</h6><input type="text" id="lorry_no" class="bdr-none w60p"></td>

										</tr>
										<tr>
											<td class="dflex"><h6>Driver Mob.</h6><input type="number" id="driver_no" class="bdr-none w60p"></td>

										</tr>
										<tr>
											<td class="dflex"><h6>Owner Mob.:</h6>
												<input type="number" id="owner_no" class="bdr-none w60p"></td>
											<td colspan="2" class="ftr-right">
												<p>We hereby received the materials in good condition & agreed to pay all charges including Octroi & taxes as applicable</p>
											</td>
										</tr>
										<tr>
											<td style="text-align:center;">
												<p style="margin-bottom: 0;" class="line-high">I hereby agree to the terms & Conditions printed will pay all charges as per Tariff / Agreement</p>
												<div class="">
													<div id="consignor-sign">
														<img src="" alt="" width="100%" height="100px">
													</div>
												<button data-bs-toggle="modal" type="button" style="font-size: 10px;padding: 3px;margin: 0 2%;" data-bs-target="#cModal">Consignor Signature</button>
											</div>
											</td>
											<!-- <td colspan="2" ><p class="rsign">Receiver's Signature</p></td> -->
											<td colspan="2" style="position: relative;">
												<div class="" style="position: absolute; width: 96%; text-align:center; bottom: 0;">
													<div id="consignee-sign">
														<img src="" alt="" width="100%" height="100px">
													</div>
												<button data-bs-toggle="modal" type="button" style="font-size: 10px;padding: 3px;margin: 0 2%;" data-bs-target="#rModal">Consignee Signature</button>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 br">
						<table class="table table-bordered fnt12">
							<tbody>
								<tr>
									<td width="50%"></h6>Consignment No. :</h6></td>
									<td><input type="text" disabled id="consign_no" value="<?php echo $consign_no; ?>" class="bdr-none w100p"></td>
								</tr>
								<tr>
									<td><h6>BRANCH SEAL</h6></td>
								</tr>
								<tr>
									<td><h6>Govt. Regd. No. :</h6></td>
									<td ><h6></h6></td>
								</tr>
								<tr>
									<td><h6>GSTIN NO. :</h6></td>
									<td ><h6>20AMGPV8554R1Z5</h6></td>
								</tr>
								<tr>
									<td><h6>DATE : </h6></td>
									<td><input type="date" class="bdr-none w100p" id="curr_date"></td>
								</tr>
								<tr>
									<td><h6>From: </h6></td> 
									<td><select class="bdr-none w100p" id="from-add">
											<option class="">Select from</option>
											<?php 
											$city_sql= "SELECT * from cities ORDER BY city ASC";
											$city_query = mysqli_query($con,$city_sql);
											while ($cities = mysqli_fetch_assoc($city_query)){
												echo "<option value=".$cities['city'].">".$cities['city']."</option>";
											}
											?>
										</select>
									</td>
								</tr>
								<tr>
									<td><h6>To:</h6></td>
									<td> <select class="bdr-none w100p" id="to-add">
											<option class="">Select to</option>
											<?php 
											$city_sql= "SELECT * from cities ORDER BY city ASC";
											$city_query = mysqli_query($con,$city_sql);
											while ($cities = mysqli_fetch_assoc($city_query)){
												echo "<option value=".$cities['city'].">".$cities['city']."</option>";
											}
											?>
										</select>
									</td>
								</tr>
								<tr class="cst-tr">
									<td width="33%" class="pd5">SERVICES</td>
									<td width="33%" class="pd5">CHARGES ( Rs. )</td>
								</tr>
								<tr>
									<td><h6>DKT Charges</h6></td>
									<td><input type="number" id="dkt_charge" value="0" name="ser_chr1" class="bdr-none w100p text-right" onchange="getValue('dkt_charge')"></td>
									
								</tr>
								<tr>
									<td><h6>Lorry Fair</h6></td>
									<td><input type="number" id="lorry" value="0" name="ser_chr2" class="bdr-none w100p text-right" onchange="getValue('lorry')" ></td>
									
								</tr>
								<tr>
									<td><h6>Packing Charges</h6></td>
									<td><input type="number" id="packing" value="0" name="ser_chr3" class="bdr-none w100p text-right" onchange="getValue('packing')"></td>
									
								</tr>
								<tr>
									<td><h6>Loading Charges</h6></td>
									<td><input type="number" id="loading" value="0" name="ser_chr4" class="bdr-none w100p text-right" onchange="getValue('loading')"></td>
									
								</tr>
								<tr>
									<td><h6>Unloading Charges</h6></td>
									<td><input type="number" id="unloading" value="0" name="ser_chr5" class="bdr-none w100p text-right" onchange="getValue('unloading')"></td>
									
								</tr>
								<tr>
									<td><h6>Unpacking & Adjusting Charges</h6></td>
									<td><input type="number" id="unpacking" value="0" name="ser_chr6" class="bdr-none w100p text-right" onchange="getValue('unpacking')"></td>
									
								</tr>
								<tr>
									<td><h6>Freight</h6></td>
									<td><input type="number" id="freight" value="0" name="ser_chr7" class="bdr-none w100p text-right" onchange="getValue('freight')"></td>
									
								</tr>
								<tr>
									<td><h6>Escorting Charges<h6></td>
									<td><input type="number" id="escorting" value="0" name="ser_chr8" class="bdr-none w100p text-right" onchange="getValue('escorting')"></td>
									
								</tr>
								<tr>
									<td style="display: flex;justify-content: space-between;">
										<h6>Ins./FOV Charges</h6>
										<input type="text" class="bdr-none" value="0" style="width: 10%; text-align: right;" id="insp">(%)
										<input type="text" id="insv" class="bdr-none" value="0" onchange="getIns();" style="width: 20%; text-align:right;">
									</td>
									<td>
										<input type="number" id="ins" value="0" name="ser_chr9" class="bdr-none w100p text-right" >
									</td>
								</tr>
								<tr>
									<td><h6>Other Charges</h6></td>
									<td><input type="number" id="other" value="0" name="ser_chr10" class="bdr-none w100p text-right" onchange="getValue('other')"></td>
								</tr>
								<tr class="cst-tr">
									<td style="background-color: firebrick;color: white;" class="pd5">Sub. Total</td>
									<td style="background-color: firebrick;">
										<input type="text" id="sub-total" value="0" style="color: white;background-color: firebrick;border: none;" disabled name="ser_chr11" class="bdr-none w100p text-right">
									</td>
								</tr>
								<tr>
									<td class="dflex"><h6>CGST@</h6>
										<p>
										<input type="number" id="cgst" name="cgst_per" value="0" class="bdr-none w60p text-right" onchange="cGst()">%
									</p>
									</td>
									<td>
										<input type="number" id="cgst-value" style="border: none;font-weight: 900;" disabled value="0" name="ser_chr12" class="bdr-none w100p text-right" >
									</td>
								</tr>
								<tr>
									<td class="dflex"><h6>SGST@</h6>
										<p><input type="number" id="sgst" name="sgst_per" value="0" class="bdr-none w60p text-right" onchange="sGST()">%
										</p>
									</td>
									<td><input type="number" id="sgst-value" style="border:none;font-weight: 900;" disabled  value="0" name="ser_chr13" class="bdr-none w100p text-right" ></td>
								</tr>
								<tr>
									<td><h6>Entry Tax</h6></td>
									<td><input type="number" id="entry-tax" value="0" name="ser_chr14" class="bdr-none w100p text-right" onchange="grandTotal()"></td>
									
								</tr>
								<tr class="cst-tr">
									<td style="background-color: firebrick;color: white;">Grand Total</td>
									<td style="background-color: firebrick;">
										<input type="number" style="color: white;background-color: firebrick;border: none;" id="grand-total" disabled value="0" name="ser_chr15" class="bdr-none w100p text-right" ></td>
									
								</tr>
								<tr>
									<td colspan="2"><h6>Amt. in Words</h6>
										<input type="text" id="amtinword" name="ser_chr16" style="text-align: left;" class="bdr-none w100p text-right">
									</td>
								</tr>
								<tr>
									<td colspan="2" style="position:relative;">
										<div style="position: absolute;width: 96%;text-align: center;">
											<img src="" alt="" width="100%" height="100px">
											<button data-bs-toggle="modal" type="button" style="font-size: 10px;padding: 3px;margin: 0 2%;" data-bs-target="#snfModal">Signature
											</button>
											<span class="ftitle" style="padding-top: 10%!important;display: inline-block;width: 100%;" >
												For SAFE & FAST
											</span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div style="margin: 10px;text-align: center;">
				<a href="bill-generationlist.php">
					<button class="btn btn-primary" type="button">Back</button>	
				</a>

				<button class="btn btn-success" onclick="generateBill();" type="button">Generate</button>
			</div>
		</section>
		</form>

	</main>

	<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- rModal -->
<div class="modal fade" id="cModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Consignor Sign</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="wrapper">
           <canvas id="signature-pad" width="400" height="200"></canvas>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="clear" class="btn btn-primary">Clear</button>
        <button type="button" id="save" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- cModal -->
<div class="modal fade" id="rModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Consignee Sign</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- snfModal -->
<div class="modal fade" id="snfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SafeNFast Sign</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- custom bill js -->
	<script src="assets/js/bills.js"></script>
	<!-- custom js -->
	<script src="assets/script.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>

       var canvas = document.getElementById("signature-pad");

       function resizeCanvas() {
           var ratio = Math.max(window.devicePixelRatio || 1, 1);
           canvas.width = canvas.offsetWidth * ratio;
           canvas.height = canvas.offsetHeight * ratio;
           canvas.getContext("2d").scale(ratio, ratio);
       }
       window.onresize = resizeCanvas;
       resizeCanvas();

       var signaturePad = new SignaturePad(canvas, {
        backgroundColor: 'rgb(250,250,250)'
       });

       document.getElementById("clear").addEventListener('click', function(){
        signaturePad.clear();
       })
       document.getElementById("save").addEventListener('click', function(){
        var img    = canvas.toDataURL("image/png");

        // document.write('<img src="'+img+'"/>');

        const base64Canvas = canvas.toDataURL("image/png").split(';base64,')[1];
        
        sendSignToServer(base64Canvas);
       })
       function sendSignToServer(sig){
       	$.ajax({
			url : "thumbnail-uploader-content.php",
		    method : "POST",
		    data : {
		    	'thumbnail':sig
		    },
			success:function(r){
				console.log(r);
					
			}
		});
       }
  
  // =======================================================================
		function getIns(){
			let insp = document.getElementById('insp').value;
			let x  = parseFloat(insp);
			let insv = document.getElementById('insv').value;
			let y = parseFloat(insv);

			let famt = (x * y)/100;
			document.getElementById('ins').value = parseFloat(famt);
		}

		
	</script>

	
</body>
</html>