<?php
$slno = 'SN-'.time();
// echo $slno;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Invoice</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/invoice.css">
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2 txtcntr">
					<img src="assets/images/logo.png" alt="logo" width="100">
				</div>
				<div class="col-sm-5">
					<div class="dflex">
						<p>Regd. No. 98877</p>
						<p>Invoice</p>
					</div>
					<div>
						<h1>SAFE-N-FAST PACKERS & MOVERS</h1>
					</div>
					<div>
						<p>Anandpuri Chowk,Vidyanagar Road,Harmu, Ranchi,Jharkhand</p>
						<p>Contact : 876734878 / 345840358</p>
					</div>
				</div>
				<div class="col-sm-5 lb">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6 dflex">Sl.No.
								<input type="text" id="slno" class="form-control bdr-none" value="<?php echo $slno; ?>">
							</div>
							<div class="col-sm-6 dflex" >Date:
								<input type="date" id="date" class="form-control bdr-none" value="" required>
							</div>
						</div>
						<p class="txt-right">GSTIN NO. 979797977d7f97</p>
						<div class="row">
							<div class="col-sm-12 mb10">Messrs
								<input type="text" id="messrs" class="form-control bdr-none w100p" required>
								<input type="text" id="messrs1" class="form-control bdr-none w100p">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main>
		<form id="invoiceForm">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<table class="table caption-top">
						<thead>
							<tr>
								<th scope="col">S.no.</th>
								<th scope="col">Date</th>
								<th scope="col">C/N No.</th>
								<th scope="col">Particulars</th>
								<th scope="col">Weight MT.</th>
								<th scope="col">Amount</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td><input type="date" id="d1" class="form-control bdr-none"></td>
								<td><input type="cn" id="c1" class="form-control bdr-none"></td>
								<td><input type="particular" id="p1" class="form-control bdr-none"></td>
								<td><input type="weight" id="w1" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a1" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td><input type="date" id="d2" class="form-control bdr-none"></td>
								<td><input type="cn" id="c2" class="form-control bdr-none"></td>
								<td><input type="particular" id="p2" class="form-control bdr-none"></td>
								<td><input type="weight" id="w2" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a2" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td><input type="date" id="d3" class="form-control bdr-none"></td>
								<td><input type="cn" id="c3" class="form-control bdr-none"></td>
								<td><input type="particular" id="p3" class="form-control bdr-none"></td>
								<td><input type="weight" id="w3" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a3" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td><input type="date" id="d4" class="form-control bdr-none"></td>
								<td><input type="cn" id="c4" class="form-control bdr-none"></td>
								<td><input type="particular" id="p4" class="form-control bdr-none"></td>
								<td><input type="weight" id="w4" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a4" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td><input type="date" id="d5" class="form-control bdr-none"></td>
								<td><input type="cn" id="c5" class="form-control bdr-none"></td>
								<td><input type="particular" id="p5" class="form-control bdr-none"></td>
								<td><input type="weight" id="w5" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a5" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">6</th>
								<td><input type="date" id="d6" class="form-control bdr-none"></td>
								<td><input type="cn" id="c6" class="form-control bdr-none"></td>
								<td><input type="particular" id="p6" class="form-control bdr-none"></td>
								<td><input type="weight" id="w6" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a6" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">7</th>
								<td><input type="date" id="d7" class="form-control bdr-none"></td>
								<td><input type="cn" id="c7" class="form-control bdr-none"></td>
								<td><input type="particular" id="p7" class="form-control bdr-none"></td>
								<td><input type="weight" id="w7" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a7" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">8</th>
								<td><input type="date" id="d8" class="form-control bdr-none"></td>
								<td><input type="cn" id="c8" class="form-control bdr-none"></td>
								<td><input type="particular" id="p8" class="form-control bdr-none"></td>
								<td><input type="weight" id="w8" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a8" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">9</th>
								<td><input type="date" id="d9" class="form-control bdr-none"></td>
								<td><input type="cn" id="c9" class="form-control bdr-none"></td>
								<td><input type="particular" id="p9" class="form-control bdr-none"></td>
								<td><input type="weight" id="w9" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a9" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">10</th>
								<td><input type="date" id="d10" class="form-control bdr-none"></td>
								<td><input type="cn" id="c10" class="form-control bdr-none"></td>
								<td><input type="particular" id="p10" class="form-control bdr-none"></td>
								<td><input type="weight" id="w10" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a10" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">11</th>
								<td><input type="date" id="d11" class="form-control bdr-none"></td>
								<td><input type="cn" id="c11" class="form-control bdr-none"></td>
								<td><input type="particular" id="p11" class="form-control bdr-none"></td>
								<td><input type="weight" id="w11" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a11" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">12</th>
								<td><input type="date" id="d12" class="form-control bdr-none"></td>
								<td><input type="cn" id="c12" class="form-control bdr-none"></td>
								<td><input type="particular"  id="p12" class="form-control bdr-none"></td>
								<td><input type="weight" id="w12" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a12" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">13</th>
								<td><input type="date" id="d13" class="form-control bdr-none"></td>
								<td><input type="cn" id="c13" class="form-control bdr-none"></td>
								<td><input type="particular" id="p13" class="form-control bdr-none"></td>
								<td><input type="weight" id="w13" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a13" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">14</th>
								<td><input type="date" id="d14" class="form-control bdr-none"></td>
								<td><input type="cn" id="c14" class="form-control bdr-none"></td>
								<td><input type="particular" id="p14" class="form-control bdr-none"></td>
								<td><input type="weight" id="w14" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a14" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">15</th>
								<td><input type="date" id="d15" class="form-control bdr-none"></td>
								<td><input type="cn" id="c15" class="form-control bdr-none"></td>
								<td><input type="particular" id="p15" class="form-control bdr-none"></td>
								<td><input type="weight" id="w15" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a15" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">16</th>
								<td><input type="date" id="d16" class="form-control bdr-none"></td>
								<td><input type="cn" id="c16" class="form-control bdr-none"></td>
								<td><input type="particular" id="p16" class="form-control bdr-none"></td>
								<td><input type="weight" id="w16" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a16" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">17</th>
								<td><input type="date" id="d17" class="form-control bdr-none"></td>
								<td><input type="cn" id="c17" class="form-control bdr-none"></td>
								<td><input type="particular" id="p17" class="form-control bdr-none"></td>
								<td><input type="weight" id="w17" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a17" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">18</th>
								<td><input type="date" id="d18" class="form-control bdr-none"></td>
								<td><input type="cn" id="c18" class="form-control bdr-none"></td>
								<td><input type="particular" id="p18" class="form-control bdr-none"></td>
								<td><input type="weight" id="w18" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a18" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">19</th>
								<td><input type="date" id="d19" class="form-control bdr-none"></td>
								<td><input type="cn" id="c19" class="form-control bdr-none"></td>
								<td><input type="particular" id="p19" class="form-control bdr-none"></td>
								<td><input type="weight" id="w19" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a19" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">20</th>
								<td><input type="date" id="d20" class="form-control bdr-none"></td>
								<td><input type="cn" id="c20" class="form-control bdr-none"></td>
								<td><input type="particular" id="p20" class="form-control bdr-none"></td>
								<td><input type="weight" id="w20" class="form-control bdr-none"></td>
								<td><input type="number" value="0"  onChange="getValue()" id="a20" class="form-control bdr-none txt-right"></td>
							</tr>
						</tbody>
						<tfoot>
							<td colspan="4"></td>
							<td>Revers Charge</td>
							<td><input type="number" id="rc" value="0" onChange="getValue()" class="form-control txt-right bdr-none" placeholder="" required></td>
						</tfoot>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<div class="dflexc">
						<div>Rupees in Words</div>&nbsp;&nbsp;&nbsp;
						<div class="w80p">
							<input type="text" id="riw" class="form-control bn w100p" required>
							<input type="text" id="riw1" class="form-control bn w100p">
							<!-- <input type="text" id="riw" class="form-control bn w100p"> -->
						</div>
					</div>
					<p class="txtl">Note: Subject to Ranchi Jurisdiction</p>
				</div>
				<div class="col-sm-4">
					<table class="table caption-top">
						<tbody>
							<tr class="bgcol">
								<td>Total</td>
								<td><input disabled type="number" value="0" id="total" class="form-control bdr-none bgcol txt-right" ></td>
							</tr>
							<tr>
								<td class="dflex">CGST@<input type="text" onchange="cGST()" value="0" value="0" id="cgstp" class="form-control bdr-none w80p txt-right">%</td>
								<td><input type="text" disabled value="0" id="cgstv" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<td class="dflex">SGST@<input type="text" onchange="sGST()" value="0" id="sgstp" class="form-control bdr-none w80p txt-right">%</td>
								<td><input type="text" disabled value="0" id="sgstv" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<td class="dflex">IGST@<input type="text" onchange="iGST()" value="0" id="igstp" class="form-control bdr-none w80p txt-right">%</td>
								<td><input type="text" value="0" disabled id="igstv" class="form-control bdr-none txt-right"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row bt">
				<div class="col-sm-5 dflexc">State:<input type="text" id="state" class="form-control bdr-none"></div>
				<div class="col-sm-3 dflexc">State Code:<input type="text" id="state-code" class="form-control bdr-none w80p"></div>
				<div class="col-sm-2">Grand Total</div>
				<div class="col-sm-2"><input type="text" value="0" id="grand-total" class="form-control bdr-none txt-right"></div>
			</div>
		</div>
		<div class="row bgcol" style="margin-top: 10px;">
			<div class="col-sm-6 tl">
				<p>E-mail : support@safenfast.in&nbsp; | &nbsp;Website: www.safenfast.in </p>
			</div>
			<div class="col-sm-6">For SAFE N FAST PACKERS & MOVERS</div>
		</div>
		<div class="text-center" style="margin:10px 0">
			<a href="invoice.php" class="btn btn-primary">
				Back
			</a>
			<button class="btn btn-success" type="submit">Create</button>
		</div>
	</form>
	</main>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<script src="assets/js/invoice.js"></script>
	<script type="text/javascript">
		function getValue() {
			//Get Data from subtotal
			let st = getCheckValue("rc");

			// GET Form data
			let a = getCheckValue("a1");
			let b = getCheckValue("a2");
			let c = getCheckValue("a3");
			let d = getCheckValue("a4");
			let e = getCheckValue("a5");
			let f = getCheckValue("a6");
			let g = getCheckValue("a7");
			let h = getCheckValue("a8");
			let i = getCheckValue("a9");
			let j = getCheckValue("a10");
			let k = getCheckValue("a11");
			let l = getCheckValue("a12");
			let m = getCheckValue("a13");
			let n = getCheckValue("a14");
			let o = getCheckValue("a15");
			let p = getCheckValue("a16");
			let q = getCheckValue("a17");
			let r = getCheckValue("a18");
			let s = getCheckValue("a19");
			let t = getCheckValue("a20");
			let amountTotal = a + b + c + d + e + f + g + h + i + j + k + l + m + n + o + p + q + r + s + t + st;
			document.getElementById("total").value = amountTotal;
			grandTotal();
			
		}


// =============================================================================================

		function getCheckValue(ids) {
			let finalamt = document.getElementById(ids).value;
			let arg = '';
			for (let x=0; x<finalamt.length;x++){
				arg += (finalamt[x]=='e')?'':finalamt[x];
			}
			console.log(ids, arg);
			document.getElementById(ids).value=arg;
			arg=(arg=="")?0:parseFloat(arg);
			// console.log(ids, arg);
			return arg;	
		}

		function cGST(){
			// console.log("CGST CALLED");
			let t = document.getElementById("total").value;
			// st=st.replace(',','');
			let x = parseFloat(t);
			
			// console.log(typeof(x));
			let a = document.getElementById("cgstp").value;
			let y = parseFloat(a);

			document.getElementById("cgstv").value = (x * y)/100;
			grandTotal();
		}

		function sGST(){
			// console.log("SGST CALLED");
			let st = document.getElementById("total").value;
			// st=st.replace(',','');
			let x = parseFloat(st);
			// console.log(typeof(x));
			let a = document.getElementById("sgstp").value;
			let y = parseFloat(a);

			document.getElementById("sgstv").value = (x * y)/100;
			grandTotal();
		}

		function iGST(){
			// console.log("SGST CALLED");
			let st = document.getElementById("total").value;
			// st=st.replace(',','');
			let x = parseFloat(st);
			// console.log(typeof(x));
			let a = document.getElementById("igstp").value;
			let y = parseFloat(a);

			document.getElementById("igstv").value = (x * y)/100;
			grandTotal();

		}

		function grandTotal(){
			let a =getCheckValue("total");
			let b =getCheckValue("cgstv");
			let c =getCheckValue("sgstv");
			let d =getCheckValue("igstv");

			let gt = a + b + c + d;
			document.getElementById("grand-total").value = gt;
		}


	</script>
</body>
</html>