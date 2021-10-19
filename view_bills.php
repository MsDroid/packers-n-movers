<?php 
include 'config.php';
session_start();

if(!isset($_SESSION['IS_LOGIN'])){
  header("location:login.php");
}

if (isset($_GET['id']) & $_GET['id'] != '') {
  $id = $_GET['id'];

  $sql = "select * from bills where id = '$id'";
  $query = mysqli_query($con,$sql);
  $rows = mysqli_fetch_assoc($query);
  $x = json_decode($rows['data']);
  // echo "<pre>";
  // print_r($rows);
  // print_r($x);
  // echo "</pre>";
  }

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
									<!-- <p>E.W.S.-30, Harmu Housing Colony, Near Nigam Park, Ranchi (JH)</p> -->
									<p><span class="">Email : info@safenfast.in</span> | <span class="">Website : www.safenfast.in</span></p>
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
									<input disabled type="text" id="cadd1" value="<?php echo $x->consignor->cadd1; ?>" name="consignor-addres1"  class="bdr-none w100p">
									<input disabled type="text" id="cadd2" value="<?php echo $x->consignor->cadd2; ?>" name="consignor-addres2" class="bdr-none w100p">
									<input disabled type="text" id="cadd3" value="<?php echo $x->consignor->cadd3; ?>" name="consignor-addres3" class="bdr-none w100p">
									<input disabled type="text" id="cadd4" value="<?php echo $x->consignor->cadd4; ?>" name="consignor-addres4" class="bdr-none w100p">
								</h6>
								<h6>Contact No.
									<input disabled type="text" id="cno" value="<?php echo $x->consignor->consignorNo; ?>" name="consignor-contact" class="bdr-none w100p">
								</h6>
								<h6>
									<table>
										<tr>
											<td><span class="mr20">Pin</span>
												<input disabled id="cp0" value="<?php echo $x->consignor->cp0; ?>" type="number" name="pin_n1" class="w30"></td>
											<td><input disabled id="cp1" value="<?php echo $x->consignor->cp1; ?>" type="number" name="pin_n2" class="w30"></td>
											<td><input disabled id="cp2" value="<?php echo $x->consignor->cp2; ?>" type="number" name="pin_n3" class="w30"></td>
											<td><input disabled id="cp3" value="<?php echo $x->consignor->cp3; ?>" type="number" name="pin_n4" class="w30"></td>
											<td><input disabled id="cp4" value="<?php echo $x->consignor->cp4; ?>" type="number" name="pin_n5" class="w30"></td>
											<td><input disabled id="cp5" value="<?php echo $x->consignor->cp5; ?>" type="number" name="pin_n6" class="w30"></td>
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
									<input disabled type="text" id="cneadd1" value="<?php echo $x->consignee->cneadd1; ?>" name="consignor-addres1" class="bdr-none w100p"required>
									<input disabled type="text" id="cneadd2" value="<?php echo $x->consignee->cneadd2; ?>" name="consignor-addres2" class="bdr-none w100p">
									<input disabled type="text" id="cneadd3" value="<?php echo $x->consignee->cneadd3; ?>" name="consignor-addres3" class="bdr-none w100p">
									<input disabled type="text" id="cneadd4" value="<?php echo $x->consignee->cneadd4; ?>" name="consignor-addres4" class="bdr-none w100p">
								</h6>
								<h6>Contact No.
									<input disabled type="text" id="cneno" value="<?php echo $x->consignee->consigneeNo; ?>" name="consignor-contact" class="bdr-none w100p" required>
								</h6>
								<h6>
									<table>
										<tr>
											<td><span class="mr20">Pin</span>
												<input disabled id="cnep0" value="<?php echo $x->consignee->cnep0; ?>" type="number" name="pin_n1" class="w30"></td>
											<td><input disabled id="cnep1" value="<?php echo $x->consignee->cnep1; ?>"  type="number" name="pin_n2" class="w30" required></td>
											<td><input disabled id="cnep2" value="<?php echo $x->consignee->cnep2; ?>"  type="number" name="pin_n3" class="w30" required></td>
											<td><input disabled id="cnep3" value="<?php echo $x->consignee->cnep3; ?>"  type="number" name="pin_n4" class="w30" required></td>
											<td><input disabled id="cnep4" value="<?php echo $x->consignee->cnep4; ?>"   type="number" name="pin_n5" class="w30" required></td>
											<td><input disabled id="cnep5" value="<?php echo $x->consignee->cnep5; ?>"  type="number" name="pin_n6" class="w30" required></td>
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
												<input disabled type="radio" id="owner" value="owner" <?php echo ($rows['inspt'] == 'owner') ?  "checked" : "" ;  ?> name="ins_check" class="w300" required> &nbsp;&nbsp;
												Carrier &nbsp;&nbsp;
												<input disabled type="radio" id="carrier" value="carrier" <?php echo ($rows['inspt'] == 'carrier') ?  "checked" : "" ;  ?> name="ins_check" class="w300">
											</th>
											<th width="25%">PKG</th>
											<th width="25%">PARTICULARS</th>
										</tr>
										<tr>
											<td class="dflex"><h6>Name of Insured Co.</h6>
												<input disabled type="text" id="insured_co_name" value="<?php echo $rows['name']; ?>" class="bdr-none w60p"></td>
											<td width="20%"><input disabled type="number" id="pkg" value="<?php echo $x->insured->pkg; ?>" class="bdr-none w100p"></td>
											<td width="30%"><input disabled type="text" value="<?php echo $x->insured->particular; ?>" id="particular" class="bdr-none w100p"></td>
										</tr>
										<tr>
											<td class="dflex"><h6>Policy No.</h6> <input disabled type="text" value="<?php echo $x->insured->policyno; ?>" id="policy" class="bdr-none w60p"></td>
											<td colspan="2"><h6>Charged Wt. (Kg.)</h6></td>

										</tr>
										<tr>
											<td class="dflex"><h6>Invoice No.</h6>
												<input disabled type="text" value="<?php echo $x->insured->invoice; ?>" disabled id="invoice" class="bdr-none w60p"></td>
											<td colspan="2" class="wfdb"><center><h5>WORK FOR DESTINATION BRANCH</h5></center></td>

										</tr>
										<tr>
											<td class="dflex"><h6>Date:</h6><input disabled type="text" value="<?php echo $x->insured->date;  ?>" id="date" class="bdr-none w60p"></td>
											<td rowspan="4" colspan="2">
												<table class="w100p">
												<tr>
													<td><h6>1.&nbsp; Unloading</h6></td>
													<td style="font-size: 10px;text-align: center;"><span class="f12">Yes</span> 
														<input disabled type="radio" value="Yes" <?php echo ($x->insured->unloading == 'Yes') ?  "checked" : "" ;  ?> name="unloading_check" class="bdr-none">
														<span class="f12">No</span> 
														<input disabled type="radio" name="unloading_check" value="Unloading No" <?php echo ($x->insured->unloading == 'No') ?  "checked" : "" ;  ?> class="bdr-none">
													</td>
												</tr>
												<tr>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;<h6>Floor</h6></td>
													<td><input disabled type="text" value="<?php echo $x->insured->floor;?>" id="floor" class="bdr-none w100p"></td>
												</tr>
												<tr>
													<td><h6>2.&nbsp; Unpacking</h6></td>
													<td style="font-size: 10px;text-align: center;"><span class="f12">Yes</span>
														<input disabled type="radio" value="Yes" <?php echo ($x->insured->unpacking == 'Yes') ?  "checked" : "" ;  ?> name="unpacking_check" class="bdr-none">
														<span class="f12">No</span> 
														<input disabled type="radio" value="No" <?php echo ($x->insured->unpacking == 'No') ?  "checked" : "" ;  ?> name="unpacking_check" class="bdr-none">
													</td>
												</tr>
												<tr>
													<td><h6>3.&nbsp; Adjusting</h6></td>
													<td style="font-size: 10px;text-align: center;"><span class="f12">Yes</span>
														<input disabled type="radio" value="Yes" <?php echo ($x->insured->adjusting == 'Yes') ?  "checked" : "" ;  ?> id="adjusting_check_yes" name="adjusting_check" class="bdr-none">
														<span class="f12">No</span> 
														<input disabled type="radio" value="No" <?php echo ($x->insured->adjusting == 'No') ?  "checked" : "" ;  ?> id="adjusting_check_no" name="adjusting_check" class="bdr-none">
													</td>
												</tr>
												<tr>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;<h6>To pay collection form party Rs. </h6></td>
													<td><input disabled type="text" value="<?php echo $x->insured->pc; ?>" id="party_collection" class="bdr-none"></td>
												</tr>
												<tr >
													<td>&nbsp;&nbsp;&nbsp;&nbsp;<h6>Balance fair to be paid to Driver Rs. </h6></td>
													<td><input disabled type="text" value="<?php echo$x->insured->dp; ?>" id="driver_paid" class="bdr-none"></td>
												</tr>
											</table>
										</td>
										</tr>
										<tr>
											<td class="dflex"><h6>Permit No.</h6><input disabled type="text" value="<?php echo $x->insured->permitno;  ?>"  id="permit" class="bdr-none w60p" required></td>

										</tr>
										<tr>
											<td class="dflex"><h6>Lorry No.</h6><input disabled type="text" value="<?php echo $x->insured->lorryno;  ?>"   id="lorry_no" class="bdr-none w60p"></td>

										</tr>
										<tr>
											<td class="dflex"><h6>Driver Mob.</h6><input disabled type="number" value="<?php echo $x->insured->driverno;  ?>"  id="driver_no" class="bdr-none w60p"></td>

										</tr>
										<tr>
											<td class="dflex"><h6>Owner Mob.:</h6>
												<input disabled type="number" value="<?php echo $x->insured->ownerno;  ?>"   id="owner_no" class="bdr-none w60p"></td>
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
									<td><input disabled type="text" value="<?php echo $rows['consign_no'] ?>" id="consign_no" class="bdr-none w100p"></td>
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
									<td><input disabled type="text" class="bdr-none w100p" value="<?php echo $x->chargetbl->created_date; ?>" id="curr_date"></td>
								</tr>
								<tr>
									<td><h6>From: </h6></td> 
									<td><select class="bdr-none w100p" id="from-add">
											<option class="">Select from</option>
											<?php 

											$city_sql= "SELECT * from cities ORDER BY city ASC";
											$city_query = mysqli_query($con,$city_sql);
											$select = "selected";
											
											while ($cities = mysqli_fetch_assoc($city_query)){

												if($rows['fromadd'] == $cities['city']){ ?>
											
													<option value="<?php echo $cities['city']; ?>" selected><?php echo $cities['city']; ?></option>";
											
											<?php	}else{ ?>
											
													<option value="<?php echo $cities['city']; ?>" ><?php echo $cities['city']; ?></option>";
											
											<?php	}
												
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
												
												if($rows['toadd'] == $cities['city']){ ?>
											
													<option value="<?php echo $cities['city']; ?>" selected><?php echo $cities['city']; ?></option>";
											
											<?php	}else{ ?>
											
													<option value="<?php echo $cities['city']; ?>" ><?php echo $cities['city']; ?></option>";
											
											<?php	}
											}
											?>
										</select>
									</td>
								</tr>
								<tr class="cst-tr">
									<td width="33%" class="pd5">SERVICE</td>
									<td width="33%" class="pd5">CHARGES ( Rs. )</td>
								</tr>
								<tr>
									<td><h6>DKT Charges</h6></td>
									<td><input disabled type="number" id="dkt_charge" value="<?php echo $x->chargetbl->dktCharge; ?>" name="ser_chr1" class="bdr-none w100p text-right" onchange="getValue('dkt_charge')"></td>
									
								</tr>
								<tr>
									<td><h6>Lorry Fair</h6></td>
									<td><input disabled type="number" id="lorry" value="<?php echo $x->chargetbl->lorryCharge; ?>" name="ser_chr2" class="bdr-none w100p text-right" onchange="getValue('lorry')" ></td>
									
								</tr>
								<tr>
									<td><h6>Packing Charges</h6></td>
									<td><input disabled type="number" id="packing" value="<?php echo $x->chargetbl->packingCharge; ?>" name="ser_chr3" class="bdr-none w100p text-right" onchange="getValue('packing')"></td>
									
								</tr>
								<tr>
									<td><h6>Loading Charges</h6></td>
									<td><input disabled type="number" id="loading" value="<?php echo $x->chargetbl->loadingCharge; ?>" name="ser_chr4" class="bdr-none w100p text-right" onchange="getValue('loading')"></td>
									
								</tr>
								<tr>
									<td><h6>Unloading Charges</h6></td>
									<td><input disabled type="number" id="unloading" value="<?php echo $x->chargetbl->unloadingCharge; ?>" name="ser_chr5" class="bdr-none w100p text-right" onchange="getValue('unloading')"></td>
									
								</tr>
								<tr>
									<td><h6>Unpacking & Adjusting Charges</h6></td>
									<td><input disabled type="number" id="unpacking" value="<?php echo $x->chargetbl->unpackingCharge; ?>" name="ser_chr6" class="bdr-none w100p text-right" onchange="getValue('unpacking')"></td>
									
								</tr>
								<tr>
									<td><h6>Freight</h6></td>
									<td><input disabled type="number" id="freight" value="<?php echo $x->chargetbl->freightCharge; ?>" name="ser_chr7" class="bdr-none w100p text-right" onchange="getValue('freight')"></td>
									
								</tr>
								<tr>
									<td><h6>Escorting Charges<h6></td>
									<td><input disabled type="number" id="escorting" value="<?php echo $x->chargetbl->escortingCharge; ?>" name="ser_chr8" class="bdr-none w100p text-right" onchange="getValue('escorting')"></td>
									
								</tr>
								<tr>
									<td style="display: flex;justify-content: space-between;">
										<h6>Ins./FOV Charges</h6>
										<input disabled type="text" class="bdr-none" value="0" style="width: 10%; text-align: right;" id="insp">(%)
										<input disabled type="text" id="insv" class="bdr-none" value="0" onchange="getIns();" style="width: 20%; text-align:right;">
									</td>
									<td>
										<input disabled type="number" id="ins" value="<?php echo $x->chargetbl->insCharge; ?>" name="ser_chr9" class="bdr-none w100p text-right" >
									</td>
								</tr>
								<!-- <tr>
									<td><h6>Ins./FOV Charges</h6></td>
									<td><input disabled type="number" id="ins" value="" name="ser_chr9" class="bdr-none w100p text-right" onchange="getValue('ins')"></td>
									
								</tr> -->
								<tr>
									<td><h6>Other Charges</h6></td>
									<td><input disabled type="number" id="other" value="<?php echo $x->chargetbl->otherCharge; ?>" name="ser_chr10" class="bdr-none w100p text-right" onchange="getValue('other')"></td>
								</tr>
								<tr class="cst-tr">
									<td style="background-color: firebrick;color: white;" class="pd5">Sub. Total</td>
									<td style="background-color: firebrick;"><input disabled type="text" id="sub-total" value="<?php echo $x->chargetbl->subTotal; ?>" style="color: white;background-color: firebrick;border: none;" disabled name="ser_chr11" class="bdr-none w100p text-right" ></td>
								</tr>
								<tr>
									<td class="dflex"><h6>CGST@</h6>
										<p>
										<input disabled type="number" id="cgst" name="cgst_per" value="<?php echo $x->chargetbl->cgst; ?>" class="bdr-none w60p text-right" onchange="cGst()">%
									</p>
									</td>
									<td>
										<input disabled type="number" id="cgst-value" style="border: none;font-weight: 900;" disabled value="<?php echo $x->chargetbl->cgstvalue; ?>" name="ser_chr12" class="bdr-none w100p text-right" >
									</td>
								</tr>
								<tr>
									<td class="dflex"><h6>SGST@</h6>
										<p><input disabled type="number" id="sgst" name="sgst_per" value="<?php echo $x->chargetbl->sgst; ?>" class="bdr-none w60p text-right" onchange="sGST()">%
										</p>
									</td>
									<td><input disabled type="number" id="sgst-value" style="border:none;font-weight: 900;" disabled  value="<?php echo $x->chargetbl->sgstvalue; ?>" name="ser_chr13" class="bdr-none w100p text-right" ></td>
								</tr>
								<tr>
									<td><h6>Entry Tax</h6></td>
									<td><input disabled type="number" id="entry-tax" value="<?php echo $x->chargetbl->entrytax; ?>" name="ser_chr14" class="bdr-none w100p text-right" onchange="grandTotal()"></td>
									
								</tr>
								<tr class="cst-tr">
									<td style="background-color: firebrick;color: white;">Grand Total</td>
									<td style="background-color: firebrick;">
										<input disabled type="number" style="color: white;background-color: firebrick;border: none;" id="grand-total" disabled value="<?php echo $x->chargetbl->grandtotal; ?>" name="ser_chr15" class="bdr-none w100p text-right" ></td>
									
								</tr>
								<tr>
									<td colspan="2"><h6>Amt. in Words</h6>
										<input disabled type="text" style="text-align: left;" id="amtinword" name="ser_chr16" value="<?php echo $x->chargetbl->amtinword; ?>" class="bdr-none w100p text-right">
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
				<!-- <button class="btn btn-success" type="button">Generate</button> -->
			</div>
		</section>
		</form>

	</main>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- custom js -->
	<script src="assets/js/bills.js"></script>
	<script src="assets/script.js"></script>
	
</body>
</html>