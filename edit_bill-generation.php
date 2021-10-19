<?php 
session_start();
require 'vendor/autoload.php';
include 'config.php';

use Dompdf\Dompdf;

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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


	<link href="assets/style.css" rel="stylesheet">


	<title>Consignee Copy</title>
</head>
<body>

	<main>
		<form>
		<section id="consignee-copy">
			<div class="container-fluid">
				<div class="row pd10">
					<div class="col-md-8 br">
						<header>
							<div class="dflex">
								<div class="img-wrapper">
									<img class="img" src="logo.png" alt="logo" width="200px">
								</div>
								<div class="logo-content-wrapper">
									<h1>SAFE & FAST</h1>
									<h5>A House of complete Transport Solution ( Service All over India Doot to Door)</h5>
									<select class="form-control address" id="site_address" style="font-size: 10px;overflow: visible;width: 107%;text-align: center;border: none;margin: 0;padding: 0;">
										<option>Select Address</option>
										<?php
											$add_sql = "SELECT * from address";
											$add_query = mysqli_query($con, $add_sql);
											while ($arow = mysqli_fetch_assoc($add_query)) {
												echo "<option><p>".$arow['address']."</p></option>";		
											}
										 ?>
										
										<option></option>
									</select>
									<!-- <p>E.W.S.-30, Harmu Housing Colony, Near Nigam Park, Ranchi (JH)</p> -->
									<p><span class="">Email : support@safenfast.in</span> | <span class="">Website : www.safenfast.com</span></p>
									<h3>Contact : 9955797111  / 9955172777</h3>
								</div>	
							</div>
						</header>
						
						<h2 class="cc">CONSIGNEE COPY</h2>
						<div class="row pd10">
							<div class="col-md-6 cstmfnt">
								<div>
									<center>
										<h5>CONSIGNOR</h5>	
									</center>
								</div>
								<h4>Address
									<input type="text" id="cadd1" value="<?php echo $x->consignor->cadd1; ?>" name="consignor-addres1" class="bdr-none w100p">
									<input type="text" id="cadd2" value="<?php echo $x->consignor->cadd2; ?>" name="consignor-addres2" class="bdr-none w308">
									<input type="text" id="cadd3" value="<?php echo $x->consignor->cadd3; ?>" name="consignor-addres3" class="bdr-none w308">
									<input type="text" id="cadd4" value="<?php echo $x->consignor->cadd4; ?>" name="consignor-addres4" class="bdr-none w308">
								</h4>
								<h4>Contact No.
									<input type="text" id="cno" value="<?php echo $x->consignor->consignorNo; ?>" name="consignor-contact" class="bdr-none w100p">
								</h4>
								<h4>
									<table>
										<tr>
											<td><span class="mr20">Pin</span>
												<input id="cp0" type="number" value="<?php echo $x->consignor->cp0; ?>" name="pin_n1" class="w30"></td>
											<td><input id="cp1" value="<?php echo $x->consignor->cp1; ?>" type="number" name="pin_n2" class="w30"></td>
											<td><input id="cp2" value="<?php echo $x->consignor->cp2; ?>" type="number" name="pin_n3" class="w30"></td>
											<td><input id="cp3" value="<?php echo $x->consignor->cp3; ?>" type="number" name="pin_n4" class="w30"></td>
											<td><input id="cp4" value="<?php echo $x->consignor->cp4; ?>" type="number" name="pin_n5" class="w30"></td>
											<td><input id="cp5" value="<?php echo $x->consignor->cp5; ?>" type="number" name="pin_n6" class="w30"></td>
										</tr>
									</table>
								</h4>

							</div>	
							<!-- <div class="col-md-2 vrl"></div> -->
							<div class="col-md-6 cstmfnt">
								<div>
									<center>
										<h5>CONSIGNEE</h5>	
									</center>
								</div>
								<h4>Address
									<input type="text" id="cneadd1" value="<?php echo $x->consignee->cneadd1; ?>" name="consignor-addres1" class="bdr-none w100p">
									<input type="text" id="cneadd2" value="<?php echo $x->consignee->cneadd2; ?>" name="consignor-addres2" class="bdr-none w308">
									<input type="text" id="cneadd3" value="<?php echo $x->consignee->cneadd3; ?>" name="consignor-addres3" class="bdr-none w308">
									<input type="text" id="cneadd4" value="<?php echo $x->consignee->cneadd4; ?>" name="consignor-addres4" class="bdr-none w308">
								</h4>
								<h4>Contact No.
									<input type="text" id="cneno" value="<?php echo $x->consignee->consigneeNo; ?>" name="consignor-contact" class="bdr-none w100p">
								</h4>
								<h4>
									<table>
										<tr>
											<td><span class="mr20">Pin</span>
												<input id="cnep0" value="<?php echo $x->consignee->cnep0; ?>" type="number" name="pin_n1" class="w30"></td>
											<td><input id="cnep1" type="number" value="<?php echo $x->consignee->cnep1; ?>" name="pin_n2" class="w30"></td>
											<td><input id="cnep2" type="number" value="<?php echo $x->consignee->cnep2; ?>" name="pin_n3" class="w30"></td>
											<td><input id="cnep3" type="number" value="<?php echo $x->consignee->cnep3; ?>" name="pin_n4" class="w30"></td>
											<td><input id="cnep4" type="number" value="<?php echo $x->consignee->cnep4; ?>" name="pin_n5" class="w30"></td>
											<td><input id="cnep5" type="number" value="<?php echo $x->consignee->cnep5; ?>" name="pin_n6" class="w30"></td>
										</tr>
									</table>
								</h4>
							</div>		
						</div>
						<!-- table -->
						<div class="row pd10">
							<div class="col-md-12">
								<table class="table table-bordered pdtb" style="font-size: 14px;padding-top: 2px;width: 100%;padding-bottom: 2px;">
									<tbody>
										<tr>
											<th width="50%">Insured : 
												Owner Type
												<input type="radio" id="owner" value="owner"  <?php echo ($rows['inspt'] == 'owner') ?  "checked" : "" ;  ?> name="ins_check" class="w300" > 
												Carrier 
												<input type="radio" id="carrier" <?php echo ($rows['inspt'] == 'carrier') ?  "checked" : "" ;  ?> value="carrier" name="ins_check" class="w300">
											</th>
											<th width="25%">PKG</th>
											<th width="25%">PARTICULARS</th>
										</tr>
										<tr>
											<td>Name of Insured Co.&nbsp;<input type="text" value="<?php echo $rows['name']; ?>" id="insured_co_name" class="bdr-none"></td>
											<td width="20%"><input type="number" value="<?php echo $x->insured->pkg; ?>" id="pkg" class="bdr-none"></td>
											<td width="30%"><input type="text"  value="<?php echo $x->insured->particular; ?>" id="particular" class="bdr-none"></td>
										</tr>
										<tr>
											<td >Policy No.&nbsp; <input type="text" value="<?php echo $x->insured->policyno; ?>" id="policy" class="bdr-none"></td>
											<td colspan="2">Charged Wt. (Kg.) </td>

										</tr>
										<tr>
											<td>Invoice No.&nbsp;<input type="text" value="<?php echo $x->insured->invoice;  ?>" id="invoice" class="bdr-none"></td>
											<td colspan="2" class="wfdb"><center><span >WORK FOR DESTINATION BRANCH</span></center></td>

										</tr>
										<tr>
											<td>Date:&nbsp;<input type="date" value="<?php echo $x->insured->date;  ?>" id="date" class="bdr-none"></td>
											<td rowspan="4" colspan="2">
												<ol style="line-height: 20px;">
													<li>Unloading <span class="ml5">
														Yes 
														<input type="radio" value="Yes" <?php echo ($x->insured->unloading == 'Yes') ?  "checked" : "" ;  ?> name="unloading_check" class="bdr-none">
														No 
														<input type="radio" name="unloading_check" <?php echo ($x->insured->unloading == 'No') ?  "checked" : "" ;  ?> value="No" class="bdr-none">&nbsp;&nbsp;&nbsp;
														Floor 
														<input type="text" value="<?php echo $x->insured->floor;?>"  id="floor" class="bdr-none"></span></li>
													<li>Unpacking 
														<span class="ml5">Yes 
															<input type="radio" <?php echo ($x->insured->unloading == 'Yes') ?  "checked" : "" ;  ?> value="Unpacking Yes" name="unpacking_check" class="bdr-none">
															No
															 <input type="radio" <?php echo ($x->insured->unloading == 'No') ?  "checked" : "" ;  ?> value="Unpacking No" name="unpacking_check" class="bdr-none"></span></li>
													<li>
														Adjusting <span class="ml5">
															Yes<input type="radio" <?php echo ($x->insured->unloading == 'Yes') ?  "checked" : "" ;  ?> value="adjuting yes" id="adjusting_check_yes" name="adjusting_check" class="bdr-none">
															No <input type="radio" <?php echo ($x->insured->unloading == 'No') ?  "checked" : "" ;  ?> value="adjuting no " id="adjusting_check_no" name="adjusting_check" class="bdr-none"></span></li>
													<li>To pay collection form party Rs. <input type="text" value="<?php echo $x->insured->pc; ?>" id="party_collection" class="bdr-none"></li>
													<li>Balance fair to be paid to Driver Rs. <input type="text" value="<?php echo$x->insured->dp; ?>" id="driver_paid" class="bdr-none"></li>
												</ol>
											</td>
										</tr>
										<tr>
											<td>Permit No.<input type="text" value="<?php echo $x->insured->permitno;  ?>" id="permit" class="bdr-none" required></td>

										</tr>
										<tr>
											<td>Lorry No.<input type="text" value="<?php echo $x->insured->lorryno;  ?>" id="lorry_no" class="bdr-none"></td>

										</tr>
										<tr>
											<td>Driver Mob.<input type="number" value="<?php echo $x->insured->driverno;  ?>" id="driver_no" class="bdr-none"></td>

										</tr>
										<tr>
											<td>Owner Mob.:<input type="number" value="<?php echo $x->insured->ownerno;  ?>" id="owner_no" class="bdr-none">
												<p class="line-high">I hereby agree to the terms & Conditions printed will pay all charges as per Tariff / Agreement</p>
												<p class="txt-right" style="font-size:600;">Consignor/Rep. Signature & Date</p>
											</td>
											<td colspan="2" class="ftr-right">
												<p>We hereby received the materials in good condition & agreed to pay all charges including Octroi & taxes as applicable</p>
												<h4>Receiver's Name</h4>
												<h4>Date</h4>
												<div>
													<span class="left">Time</span><span class="right">Signature</span>
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
									<td width="50%">Consignment No. :</td>
									<td colspan="2" rowspan="3" ></td>
								</tr>
								<tr>
									<td><b>BRANCH SEAL</b></td>

								</tr>
								<tr>
									<td colspan="3">Govt. Regd. No. : 70604</br>GSTIN NO. : 20IDIP3889N1ZV</td>
								</tr>
								<tr>
									<td colspan="3" >DATE : <input type="date" value="<?php echo $x->chargetbl->created_date ?>" class="bdr-none" id="curr_date"></td>
								</tr>
								<tr>
									<td colspan="3" >
										From: <select class="bdr-none w30p" id="from-add">
											<option class="">Select from</option>
											<?php 

											$city_sql= "SELECT * from cities ORDER BY name ASC";
											$city_query = mysqli_query($con,$city_sql);
											$select = "selected";
											
											while ($cities = mysqli_fetch_assoc($city_query)){

												if($rows['fromadd'] == $cities['name']){ ?>
											
													<option value="<?php echo $cities['name']; ?>" selected><?php echo $cities['name']; ?></option>";
											
											<?php	}else{ ?>
											
													<option value="<?php echo $cities['name']; ?>" ><?php echo $cities['name']; ?></option>";
											
											<?php	}
												
											}
											?>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan="3" >
										To: <select class="bdr-none w30p" id="to-add">
											<option class="">Select to</option>
											<?php 
											$city_sql= "SELECT * from cities ORDER BY name ASC";
											$city_query = mysqli_query($con,$city_sql);
											
											while ($cities = mysqli_fetch_assoc($city_query)){
												
												if($rows['toadd'] == $cities['name']){ ?>
											
													<option value="<?php echo $cities['name']; ?>" selected><?php echo $cities['name']; ?></option>";
											
											<?php	}else{ ?>
											
													<option value="<?php echo $cities['name']; ?>" ><?php echo $cities['name']; ?></option>";
											
											<?php	}
											}
											?>
										</select>
									</td>
								</tr>
								<tr class="cst-tr">
									<td width="33%">SERVICE</td>
									<td width="33%">CHARGES ( Rs. )</td>
									
								</tr>
								<tr>
									<td>DKT Charges</td>
									<td><input type="number" id="dkt_charge" value="0" name="ser_chr1" class="bdr-none w100p txt-align-right" onchange="getValue('dkt_charge')"></td>
									
								</tr>
								<tr>
									<td>Lorry Fair</td>
									<td><input type="number" id="lorry" value="0" name="ser_chr2" class="bdr-none w100p txt-align-right" onchange="getValue('lorry')" ></td>
									
								</tr>
								<tr>
									<td>Packing Charges</td>
									<td><input type="number" id="packing" value="0" name="ser_chr3" class="bdr-none w100p txt-align-right" onchange="getValue('packing')"></td>
									
								</tr>
								<tr>
									<td>Loading Charges</td>
									<td><input type="number" id="loading" value="0" name="ser_chr4" class="bdr-none w100p txt-align-right" onchange="getValue('loading')"></td>
									
								</tr>
								<tr>
									<td>Unloading Charges</td>
									<td><input type="number" id="unloading" value="0" name="ser_chr5" class="bdr-none w100p txt-align-right" onchange="getValue('unloading')"></td>
									
								</tr>
								<tr>
									<td>Unpacking & Adjusting Charges</td>
									<td><input type="number" id="unpacking" value="0" name="ser_chr6" class="bdr-none w100p txt-align-right" onchange="getValue('unpacking')"></td>
									
								</tr>
								<tr>
									<td>Freight</td>
									<td><input type="number" id="freight" value="0" name="ser_chr7" class="bdr-none w100p txt-align-right" onchange="getValue('freight')"></td>
									
								</tr>
								<tr>
									<td>Escorting Charges</td>
									<td><input type="number" id="escorting" value="0" name="ser_chr8" class="bdr-none w100p txt-align-right" onchange="getValue('escorting')"></td>
									
								</tr>
								<tr>
									<td>Ins./FOV Charges</td>
									<td><input type="number" id="ins" value="0" name="ser_chr9" class="bdr-none w100p txt-align-right" onchange="getValue('ins')"></td>
									
								</tr>
								<tr>
									<td>Other Charges</td>
									<td><input type="number" id="other" value="0" name="ser_chr10" class="bdr-none w100p txt-align-right" onchange="getValue('other')"></td>
									
								</tr>
								<tr style="font-weight:900">
									<td style="background-color: firebrick;color: white;">Sub. Total</td>
									<td style="background-color: firebrick;"><input type="text" id="sub-total" value="0" style="color: white;background-color: firebrick;border: none;" disabled name="ser_chr11" class="bdr-none w100p txt-align-right" ></td>
									
								</tr>
								<tr>
									<td>CGST@
										<input type="number" id="cgst" name="cgst_per" value="0" class="bdr-none w100p txt-align-right" onchange="cGst()">%
									</td>
									<td>
										<input type="number" id="cgst-value" style="border: none;font-weight: 900;" disabled value="0" name="ser_chr12" class="bdr-none w100p txt-align-right" >
									</td>
									
								</tr>
								<tr>
									<td>SGST@<input type="number" id="sgst" name="sgst_per" value="0" class="bdr-none w100p txt-align-right" onchange="sGST()">%</td>
									<td><input type="number" id="sgst-value" style="border:none;font-weight: 900;" disabled  value="0" name="ser_chr13" class="bdr-none w100p txt-align-right" ></td>
									
								</tr>
								<tr>
									<td>Entry Tax</td>
									<td><input type="number" id="entry-tax" value="0" name="ser_chr14" class="bdr-none w100p txt-align-right" onchange="grandTotal()"></td>
									
								</tr>
								<tr>
									<td style="background-color: firebrick;color: white;">Grand Total</td>
									<td style="background-color: firebrick;"><input type="number" style="color: white;background-color: firebrick;border: none;" id="grand-total" disabled value="0" name="ser_chr15" class="bdr-none w100p txt-align-right" ></td>
									
								</tr>
								<tr>
									<td>Amt. in Words</td>
									<td><input type="text" id="amtinword" name="ser_chr16" class="bdr-none w100p txt-align-right"></td>
									
								</tr>
								<tr>
									<td class="ftitle" style="padding-top: 60px!important;" colspan="3" rowspan="2">For SAFE & FAST</td>
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
				<button class="btn btn-success" onclick="generateBill()" type="button">Generate</button>
			</div>
		</section>
		</form>

	</main>
	<script type="text/javascript" src="script.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- custom js -->
	<script src="assets/script.js"></script>
	<script type="text/javascript">
		function getValue(arrrr) {
			//Get Data from subtotal
			let st = getCheckValue("sub-total");

			// GET Form data
			let a = getCheckValue("dkt_charge");
			let b = getCheckValue("lorry");
			let c = getCheckValue("packing");
			let d = getCheckValue("loading");
			let e = getCheckValue("unloading");
			let f = getCheckValue("unpacking");
			let g = getCheckValue("freight");
			let i = getCheckValue("escorting");
			let j = getCheckValue("ins");
			let k = getCheckValue("other");
			let amountTotal = a + b + c + d + e + f + g + i + j + k;
			document.getElementById("sub-total").value = amountTotal;
			cGst();
		}

		
		function cGst(){
			// console.log("CGST CALLED");
			let st = document.getElementById("sub-total").value;
			// st=st.replace(',','');
			let x = parseInt(st);
			
			// console.log(typeof(x));
			let a = document.getElementById("cgst").value;
			let y = parseInt(a);

			document.getElementById("cgst-value").value = (x * y)/100;
		}

		function sGST(){
			// console.log("SGST CALLED");
			let st = document.getElementById("sub-total").value;
			// st=st.replace(',','');
			let x = parseInt(st);
			// console.log(typeof(x));
			let a = document.getElementById("sgst").value;
			let y = parseInt(a);

			document.getElementById("sgst-value").value = (x * y)/100;
		}

		function grandTotal() {
			let st = document.getElementById('sub-total').value;
			// st=st.replace(',','');
			a  = parseInt(st);
			
			let cgstv = document.getElementById('cgst-value').value;
			b = parseInt(cgstv);
			
			let sgstv = document.getElementById('sgst-value').value;
			c = parseInt(sgstv);
			
			let entrytax = document.getElementById('entry-tax').value;
			d = parseInt(entrytax);
			

			document.getElementById('grand-total').value = a + b + c + d; 

		}

		function getCheckValue(ids) {
			let finalamt = document.getElementById(ids).value;
			let arg = '';
			for (let x=0; x<finalamt.length;x++){
				arg += (finalamt[x]=='e')?'':finalamt[x];
			}
			// console.log(ids, arg);
			document.getElementById(ids).value=arg;
			arg=(arg=="")?0:parseInt(arg);
			// console.log(ids, arg);
			return arg;	
		}

		
		function numberWithCommas(x) {
    	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}	

		
	</script>
</body>
</html>