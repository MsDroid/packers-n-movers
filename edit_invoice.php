<?php
include 'config.php';
if (isset($_GET['id']) & $_GET['id'] != '') {
  $id = $_GET['id'];
 }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Invoice</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/invoice.css">
	<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    /** {
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }
    body {
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
        position: fixed;
        bottom: 25px;
    }
    .wrapper {
        border: 1px solid #4b00ff;
        border-right: 0;
    }
    canvas#signature-pad,canvas#signature-pad1 {
        background: #fff;
        width: 100%;
        height: 100%;
        cursor: crosshair;
    }
    button#clear,button#clear1 {
        height: 100%;
        background: #4b00ff;
        border: 1px solid transparent;
        color: #fff;
        font-weight: 600;
        cursor: pointer;
    }
    button#clear span{
        transform: rotate(90deg);
        display: block;
    }
    button#clear1 span{
        transform: rotate(90deg);
        display: block;
    }
  
    </style>
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
						<p>Regd. No. </p>
						<p>Invoice</p>
					</div>
					<div>
						<h1>SAFE-N-FAST PACKERS & MOVERS</h1>
					</div>
					<div>
						<p>
							<select class="form-control address" id="site_address" style="font-size: 10px;overflow: visible;width: 107%;text-align: center;border: none;margin: 0;padding: 0;">
                    <option>Select Address</option>
                    <?php
                      $add_sql = "SELECT * from address";
                      $add_query = mysqli_query($con, $add_sql);
                      while ($arow = mysqli_fetch_assoc($add_query)) {
                        echo "<option><p>".$arow['address']."</p></option>";    
                      }
                     ?>
                  </select></p>
						<p>Contact : 876734878 / 345840358</p>
					</div>
				</div>
				<div class="col-sm-5 lb">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6 dflex">Sl.No.
								<input  type="text" id="slno" class="form-control bdr-none" value="">
							</div>
							<div class="col-sm-6 dflex" >Date:
								<input  type="date" id="date" class="form-control bdr-none" value="" required>
							</div>
						</div>
						<p class="txt-right">GSTIN NO. 20AMGPV8554R1Z5</p>
						<div class="row">
							<div class="col-sm-12 mb10">Messrs
								<input  type="text" id="messrs" class="form-control bdr-none w100p" >
								<div class="dflex">
									Email: <input type="email" id="email" class="form-control bdr-none" style="width:100%">
									Contact: <input type="number" id="contact" class="form-control bdr-none" style="width:100%">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main>
		<form id="invoiceUpdateForm">
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
								<td><input  type="date" id="d1" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c1" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p1" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w1" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a1" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td><input  type="date" id="d2" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c2" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p2" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w2" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a2" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td><input  type="date" id="d3" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c3" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p3" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w3" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a3" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td><input  type="date" id="d4" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c4" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p4" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w4" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a4" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td><input  type="date" id="d5" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c5" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p5" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w5" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a5" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">6</th>
								<td><input  type="date" id="d6" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c6" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p6" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w6" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a6" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">7</th>
								<td><input  type="date" id="d7" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c7" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p7" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w7" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a7" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">8</th>
								<td><input  type="date" id="d8" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c8" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p8" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w8" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a8" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">9</th>
								<td><input  type="date" id="d9" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c9" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p9" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w9" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a9" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">10</th>
								<td><input  type="date" id="d10" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c10" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p10" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w10" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a10" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">11</th>
								<td><input  type="date" id="d11" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c11" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p11" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w11" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a11" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">12</th>
								<td><input  type="date" id="d12" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c12" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p12" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w12" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a12" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">13</th>
								<td><input  type="date" id="d13" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c13" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p13" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w13" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a13" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">14</th>
								<td><input  type="date" id="d14" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c14" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p14" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w14" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a14" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">15</th>
								<td><input  type="date" id="d15" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c15" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p15" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w15" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a15" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">16</th>
								<td><input  type="date" id="d16" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c16" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p16" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w16" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a16" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">17</th>
								<td><input  type="date" id="d17" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c17" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p17" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w17" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a17" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">18</th>
								<td><input  type="date" id="d18" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c18" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p18" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w18" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a18" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">19</th>
								<td><input  type="date" id="d19" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c19" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p19" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w19" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a19" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<th scope="row">20</th>
								<td><input  type="date" id="d20" class="form-control bdr-none"></td>
								<td><input  type="cn" id="c20" class="form-control bdr-none"></td>
								<td><input  type="particular" id="p20" class="form-control bdr-none"></td>
								<td><input  type="weight" id="w20" class="form-control bdr-none"></td>
								<td><input  type="amount" id="a20" class="form-control bdr-none txt-right"></td>
							</tr>
						</tbody>
						<tfoot>
							<td colspan="4"></td>
							<td>Revers Charge</td>
							<td><input  type="text" disabled id="rc" class="form-control bdr-none txt-right" placeholder="" required></td>
						</tfoot>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<div class="dflexc">
						<div>Rupees in Words</div>&nbsp;&nbsp;&nbsp;
						<div class="w80p">
							<input  type="text" id="riw" class="form-control bn w100p" >
							<input  type="text" id="riw1" class="form-control bn w100p">
							<!-- <input  type="text" id="riw" class="form-control bn w100p"> -->
						</div>
					</div>
					<div style="margin-top: 10px;margin-bottom: 10px;" id="snfsign">
						<img src="" alt="" width="200" height="100">
					</div>
					<input type="hidden" name="" id="officeSignImg">
					<div>
						<button type="button" id="officeSign">Authorised Signature</button>
					</div>
					<p class="txtl">Note: Subject to Ranchi Jurisdiction</p>
				</div>
				<div class="col-sm-4">
					<table class="table caption-top">
						<tbody>
							<tr class="bgcol">
								<td>Total</td>
								<td><input   type="text" disabled value="0" id="total" class="form-control bdr-none bgcol txt-right" ></td>
							</tr>
							<tr>
								<td class="dflex">CGST@<input  type="text" value="0" id="cgstp" class="form-control bdr-none w80p txt-right">%</td>
								<td><input  type="number" disabled id="cgstv" value="0" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<td class="dflex">SGST@<input  type="text" value="0" id="sgstp" class="form-control bdr-none w80p txt-right">%</td>
								<td><input  type="number" disabled id="sgstv" value="0" class="form-control bdr-none txt-right"></td>
							</tr>
							<tr>
								<td class="dflex">IGST@<input  type="text" id="igstp" class="form-control bdr-none w80p txt-right">%</td>
								<td><input  type="number" disabled id="igstv" value="0" class="form-control bdr-none txt-right"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row bt">
				<div class="col-sm-5 dflexc">State:<input  type="text" id="state" class="form-control bdr-none"></div>
				<div class="col-sm-3 dflexc">State Code:<input  type="text" id="state-code" class="form-control bdr-none w80p"></div>
				<div class="col-sm-2">Grand Total</div>
				<div class="col-sm-2"><input disabled type="text" id="grand-total" class="form-control bdr-none txt-right"></div>
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
			<input type="hidden" name="id" id="id">
			<button class="btn btn-success" type="submit">Update</button>
		</div>
	</form>
	</main>
<div>
        <!-- sign 2 -->
        <div class="flex-row" id="sign1">
         <div class="wrapper">
             <canvas id="signature-pad1" width="400" height="200"></canvas>
         </div>
         <div class="clear-btn">
             <button id="clear1" type="button"><span> Clear </span></button>
              <button id="save1" type="button" class="btn btn-primary"><span> SAVE </span></button>
         </div>
        </div>  
</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="assets/js/invoice.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
    $('#sign1').hide(); 

    // office sign
    let oSign = $('#officeSign').click(function(){
      // console.log("officeSign");

      $('#sign1').show();
      // signature part
      let mycanvas = document.getElementById("signature-pad1");

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

       document.getElementById("clear1").addEventListener('click', function(){
        signaturePad.clear();
       })

       document.getElementById("save1").addEventListener('click', function(){
        var img    = mycanvas.toDataURL("image/png");

        // document.write('<img src="'+img+'"/>');

        const base64Canvas = mycanvas.toDataURL("image/png").split(';base64,')[1];
        
        sendOSignToServer(base64Canvas);
       })
       function sendOSignToServer(sig){
        $.ajax({
        url : "thumbnail-uploader-content.php",
        method : "POST",
        data : {
          'thumbnail':sig
          },
          success:function(r){
          // console.log(r);
          let y = jQuery.parseJSON(r);
          
          $('#officeSignImg').val(y.img_name);
          let img_field = "<img src=upload/"+y.img_name+" alt='' width='200' height='100'>";
          $('#snfsign').html(img_field);
          $('#sign1').hide();
          
          }
        });
      }
    });
  })


		$(document).ready(function(){
			$.ajax({
			url : "api/get_invoice.php",
			method : "POST",
			data : {'id':<?php echo $id; ?>},
			success:function(r){
				// console.log(r);
				let x = jQuery.parseJSON(r);
				let o = jQuery.parseJSON(x.myjsondata);
				let y = jQuery.parseJSON(x.mjson);
				// console.log(y);
				$('#slno').val(x.slno);
				$('#date').val(x.cdate);
				$('#messrs').val(x.messrs);
				$('#site_address').val(x.sadd);
				$('#email').val(x.email);
				$('#contact').val(x.contact);
				$('#id').val(x.id);
				let img_field = "<img src=upload/"+x.sign+" alt='' width='200' height='100'>";
        $('#snfsign').html(img_field);

				// insert fetch data
				for (let i = 0; i < o.length; i++)
                {
                  insertFetchData(o[i], i+1);
                }

                $('#rc').val(y.rc);
                $('#riw').val(y.riw);
                $('#riw1').val(y.riw1);
                $('#total').val(y.total);
                $('#cgstp').val(y.cgstp);
                $('#cgstv').val(y.cgstv);
                $('#sgstp').val(y.sgstp);
                $('#sgstv').val(y.sgstv);
                $('#igstp').val(y.igstp);
                $('#igstv').val(y.igstv);
                $('#state').val(y.state);
                $('#state-code').val(y.stateCode);
                $('#grand-total').val(y.grandTotal);
            }
		});


			// assign fetch data value
			function insertFetchData(data,i){
        
		        let d = $("#d"+i).val(data.d);
		        let c = $("#c"+i).val(data.c);
		        let p = $("#p"+i).val(data.p);
		        let w = $("#w"+i).val(data.w);
		        let a = $("#a"+i).val(data.a);
			}

		})
</script>
</body>
</html>