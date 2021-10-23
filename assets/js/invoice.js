$(document).ready(function(){
	$('#invoiceForm').submit(function(e){
		e.preventDefault()
		// alert("hello");
		let slno = $('#slno').val();
		let date = $('#date').val();
		let messrs = $('#messrs').val();

		let sadd = $('#site_address').val();
		let email = $('#email').val();
		let contact = $('#contact').val();
		let sign = $('#officeSignImg').val();

		let arr = [];
		for (var i = 1 ; i <= 20; i++) {
			arr.push(getDataFromRow(i));
		}

		let myjsondata = JSON.stringify(arr);

		// console.log(myjsondata);
		let rc = $('#rc').val();
		let riw = $('#riw').val();
		let riw1 = $('#riw1').val();
		let total = $('#total').val();
		let cgstp = $('#cgstp').val();
		let cgstv = $('#cgstv').val();
		let sgstp = $('#sgstp').val();
		let sgstv = $('#sgstv').val();
		let igstp = $('#igstp').val();
		let igstv = $('#igstv').val();

		let state = $('#state').val();
		let stateCode = $('#state-code').val();
		let grandTotal = $('#grand-total').val();

		mobj = {
			'rc':rc,
			'riw':riw,
			'riw1':riw1,
			'total':total,
			'cgstp':cgstp,
			'cgstv':cgstv,
			'sgstp':sgstp,
			'sgstv':sgstv,
			'igstp':igstp,
			'igstv':igstv,
			'state':state,
			'stateCode':stateCode,
			'grandTotal':grandTotal
		}

		mjson = JSON.stringify(mobj);

		if (sadd != '' && email != '' && contact != '' && date != '') {
				let dataString = 'slno=' + slno + '&cdate=' + date + '&messrs=' + messrs + '&sadd=' + sadd + '&sign=' + sign + '&email=' + email + '&contact=' + contact + '&myjsondata=' + myjsondata + '&mjson=' + mjson;
				$.ajax({
			url : "api/createinvoice.php",
			method : "POST",
			data : dataString,
			success:function(r){
				if (true) {
					alert("Successfully Created!!");
					window.location.href="invoice.php";
				}else{
					alert("Somthing Wrong Please Try Again!");
				}
			}
		});
		}else{
			alert("Please Enter Site address, Email,Date and Contact");
		}

	})

	// ===========================================================================================
	// update invoice
	// =============================================================================================
$('#invoiceUpdateForm').submit(function(e){
		e.preventDefault()
		// alert("updaed");
		let slno = $('#slno').val();
		let date = $('#date').val();
		let messrs = $('#messrs').val();

		let sadd = $('#site_address').val();
		let email = $('#email').val();
		let contact = $('#contact').val();
		let sign = $('#officeSignImg').val();
		
		let arr = [];
		for (var i = 1 ; i <= 20; i++) {
			arr.push(getDataFromRow(i));
		}

		let myjsondata = JSON.stringify(arr);

		// console.log(myjsondata);
		let rc = $('#rc').val();
		let riw = $('#riw').val();
		let riw1 = $('#riw1').val();
		let total = $('#total').val();
		let cgstp = $('#cgstp').val();
		let cgstv = $('#cgstv').val();
		let sgstp = $('#sgstp').val();
		let sgstv = $('#sgstv').val();
		let igstp = $('#igstp').val();
		let igstv = $('#igstv').val();

		let state = $('#state').val();
		let stateCode = $('#state-code').val();
		let grandTotal = $('#grand-total').val();

		mobj = {
			'rc':rc,
			'riw':riw,
			'riw1':riw1,
			'total':total,
			'cgstp':cgstp,
			'cgstv':cgstv,
			'sgstp':sgstp,
			'sgstv':sgstv,
			'igstp':igstp,
			'igstv':igstv,
			'state':state,
			'stateCode':stateCode,
			'grandTotal':grandTotal
		}

		mjson = JSON.stringify(mobj);

		let id = $('#id').val();
		if (sadd != '' && email != '' && contact != '' && date != '') {
		let dataString = 'slno=' + slno + '&cdate=' + date + '&messrs=' + messrs + '&sadd=' + sadd + '&sign=' + sign + '&email=' + email + '&contact=' + contact + '&myjsondata=' + myjsondata + '&mjson=' + mjson + '&id=' + id;

		$.ajax({
			url : "api/updateinvoice.php",
			method : "POST",
			data : dataString,
			success:function(r){
				if (true) {
					alert("Successfully Updated!!");
					window.location.href="invoice.php";
				}else{
					alert("Somthing Wrong Please Try Again!");
				}
			}
		})
		}else{
			alert("Please Enter Site address, Email,Date and Contact");
		}
 
	})

// ==========================================================================================
	function getDataFromRow(index) {
        
        let d = $("#d"+index).val();
        let c = $("#c"+index).val();
        let p = $("#p"+index).val();
        let w = $("#w"+index).val();
        let a = $("#a"+index).val();

        return {
          "d":d,
          "c":c,
          "p":p,
          "w":w,
          "a":a,
        };
      }

// =============================================================================================
      


})