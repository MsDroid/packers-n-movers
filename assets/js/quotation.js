

function quotation() {
    let oaddress = document.getElementById('site_address').value;
	let name = document.getElementById('name').value;
	let add1 = document.getElementById('add1').value;
	let add2 = document.getElementById('add2').value;
	let fromadd = document.getElementById('fromadd').value;
	let toadd = document.getElementById('toadd').value;
	let no = document.getElementById('no').value;
	let date = document.getElementById('date').value;
    let contact = document.getElementById('contact').value;
    let email = document.getElementById('email').value;
	// let address = add1 + add2;

	if ( oaddress != '' && name != '' && contact != '' && email != '' && fromadd != '' && toadd != '' && no !='' && date != '') {
		
		let arr = [];
		for (var i = 1 ; i <= 57; i++) {
			arr.push(getDataFromRow(i));
		}
        // console.log(arr);
        let myjsondata = JSON.stringify(arr);

        let ff = document.getElementById('from-floor').value;
        let tf = document.getElementById('to-floor').value;
        let pkno = document.getElementById('packing_date_no').value;
        let pkdt = document.getElementById('packing_date').value;
        let ldt = document.getElementById('loading_date').value;
        let lt = document.getElementById('lorry_type').value;
        let pm = document.getElementById('payment_mode').value;
        

        // radio button
        const neck = document.querySelectorAll('input[name="noentry_checked"]');
        let noentryselect;
        for (const nk of neck) {
        	if (nk.checked) {
        		noentryselect = nk.value;
        		break;
        	}
        }

         // radio button
         // const pmck = document.querySelectorAll('input[name="payment_mode"]');
         // let pmselect;
         // for (const pm of pmck) {
         // 	if (pm.checked) {
         // 		pmselect = pm.value;
         // 		break;
         // 	}
         // }

        // let fromfloor = document.getElementById('from-floor').value;
        let ld = document.getElementById('loading_diatance').value;
        let ud = document.getElementById('uploading_diatance').value;
        let pr = document.getElementById('packing_requirement').value;
        let lr = document.getElementById('labour_requirement').value;
        let at = document.getElementById('adv_token').value;
        let ad = document.getElementById('amt_due').value;
        let psign = document.getElementById('partySignImg').value;
        let osign = document.getElementById('officeSignImg').value;

        let qobj = {
        	'ff':ff,
        	'tf':tf,
        	'pkno':pkno,
        	'pkdt':pkdt,
        	'ldt':ldt,
        	'lt':lt,
        	'neck':noentryselect,
        	'ld':ld,
        	'ud':ud,
        	'pr':pr,
        	'lr':lr,
        	'at':at,
        	'ad':ad,
            'psign':psign,
            'osign':osign,
            'pm':pm
        };

        let qjson = JSON.stringify(qobj);


        // charge tbl
        var cpn = document.getElementById('charge_packing_no').value;
        var ct = document.getElementById('charge_transportation').value;
        var cl = document.getElementById('charge_loading').value;
        var cupl = document.getElementById('charge_uploading').value;
        var cupk = document.getElementById('charge_unpacking').value;
        var ce = document.getElementById('charge_escorting').value;
        var cs = document.getElementById('charge_storage').value;
        var cst = document.getElementById('charge_sub_total').value;
        var cgstp = document.getElementById('csgtp').value;
        var cgst = document.getElementById('csgt').value;
        var sgst = document.getElementById('sgst').value;
        var sgstp = document.getElementById('sgstp').value;
        var ins = document.getElementById('insurance').value;
        var gt = document.getElementById('grand_total').value;
        var rs = document.getElementById('rs').value;

        let qcobj = {
        	'cpn' : cpn,
        	'ct':ct,
        	'cl':cl,
        	'cupl':cupl,
        	'cupk':cupk,
        	'ce':ce,
        	'cs':cs,
        	'cst':cst,
        	'cgstp':cgstp,
        	'cgst':cgst,
        	'sgst':sgst,
        	'sgstp':sgstp,
        	'ins':ins,
        	'gt':gt,
        	'rs':rs
        };

        let qcjson = JSON.stringify(qcobj); 


        var dataString = 'oaddress='+ oaddress + '&contact=' + contact + '&email='+ email + '&name=' + name + '&add1=' + add1 + '&add2=' + add2 + '&fromadd=' + fromadd + '&toadd=' + toadd + '&no=' + no + '&date=' + date + '&tbldata=' + myjsondata + '&qjson=' + qjson + '&qcjson=' + qcjson;       

	 // console.log(dataString);
	 $.ajax({
	 	url:"api/generateQuotation.php",
	 	method:"POST",
	 	data : dataString,
	 	success:function(r){
	 		if(true){
	 			alert("Successfully Created!");
	 			window.location.href = "quotationlist.php";
	 		}else{
	 			alert("Somthing Wrong!");
	 		}
	 	}
	 });


	}else{
		alert('Please Enter Name, Add, From, Destination, and Date!!');
	}
}

// ============================================================================================
// update
// ============================================================================================
function updateQuotation() {
     let oaddress = document.getElementById('site_address').value;
	let name = document.getElementById('name').value;
	let add1 = document.getElementById('add1').value;
	let add2 = document.getElementById('add2').value;
	let fromadd = document.getElementById('fromadd').value;
	let toadd = document.getElementById('toadd').value;
	let no = document.getElementById('no').value;
	let date = document.getElementById('date').value;
    let contact = document.getElementById('contact').value;
    let email = document.getElementById('email').value;
	// let address = add1 + add2;

	if (name != '' && add1 != '' && fromadd != '' && toadd != '' && no !='' && date != '') {
		
		let arr = [];
		for (var i = 1 ; i <= 57; i++) {
			arr.push(getDataFromRow(i));
		}
        // console.log(arr);
        let myjsondata = JSON.stringify(arr);

        let ff = document.getElementById('from-floor').value;
        let tf = document.getElementById('to-floor').value;
        let pkno = document.getElementById('packing_date_no').value;
        let pkdt = document.getElementById('packing_date').value;
        let ldt = document.getElementById('loading_date').value;
        let lt = document.getElementById('lorry_type').value;
        let pm = document.getElementById('payment_mode').value;

        // radio button
        const neck = document.querySelectorAll('input[name="noentry_checked"]');
        let noentryselect;
        for (const nk of neck) {
        	if (nk.checked) {
        		noentryselect = nk.value;
        		break;
        	}
        }

         // radio button
         // const pmck = document.querySelectorAll('input[name="payment_mode"]');
         // let pmselect;
         // for (const pm of pmck) {
         // 	if (pm.checked) {
         // 		pmselect = pm.value;
         // 		break;
         // 	}
         // }

        // let fromfloor = document.getElementById('from-floor').value;
        let ld = document.getElementById('loading_diatance').value;
        let ud = document.getElementById('uploading_diatance').value;
        let pr = document.getElementById('packing_requirement').value;
        let lr = document.getElementById('labour_requirement').value;
        let at = document.getElementById('adv_token').value;
        let ad = document.getElementById('amt_due').value;
        let psign = document.getElementById('partySignImg').value;
        let osign = document.getElementById('officeSignImg').value;

        let qobj = {
        	'ff':ff,
        	'tf':tf,
        	'pkno':pkno,
        	'pkdt':pkdt,
        	'ldt':ldt,
        	'lt':lt,
        	'neck':noentryselect,
        	'ld':ld,
        	'ud':ud,
        	'pr':pr,
        	'lr':lr,
        	'at':at,
        	'ad':ad,
            'psign':psign,
            'osign':osign,
            'pm':pm
        };

        let qjson = JSON.stringify(qobj);


        // charge tbl
        var cpn = document.getElementById('charge_packing_no').value;
        var ct = document.getElementById('charge_transportation').value;
        var cl = document.getElementById('charge_loading').value;
        var cupl = document.getElementById('charge_uploading').value;
        var cupk = document.getElementById('charge_unpacking').value;
        var ce = document.getElementById('charge_escorting').value;
        var cs = document.getElementById('charge_storage').value;
        var cst = document.getElementById('charge_sub_total').value;
        var cgstp = document.getElementById('csgtp').value;
        var cgst = document.getElementById('csgt').value;
        var sgst = document.getElementById('sgst').value;
        var sgstp = document.getElementById('sgstp').value;
        var ins = document.getElementById('insurance').value;
        var gt = document.getElementById('grand_total').value;
        var rs = document.getElementById('rs').value;

        let qcobj = {
        	'cpn' : cpn,
        	'ct':ct,
        	'cl':cl,
        	'cupl':cupl,
        	'cupk':cupk,
        	'ce':ce,
        	'cs':cs,
        	'cst':cst,
        	'cgstp':cgstp,
        	'cgst':cgst,
        	'sgst':sgst,
        	'sgstp':sgstp,
        	'ins':ins,
        	'gt':gt,
        	'rs':rs
        };

        let qcjson = JSON.stringify(qcobj); 

        let id = document.getElementById('id').value;

        var dataString = 'name=' + name + '&add1=' + add1 + '&add2=' + add2 + '&fromadd=' + fromadd + '&toadd=' + toadd + '&no=' + no + '&date=' + date + '&tbldata=' + myjsondata + '&qjson=' + qjson + '&qcjson=' + qcjson + '&id=' + id;       

	 // console.log(dataString);
	 $.ajax({
	 	url:"api/updateQuotation.php",
	 	method:"POST",
	 	data : dataString,
	 	success:function(r){
	 		if(true){
	 			alert("Successfully Updated!");
	 			window.location.href = "quotationlist.php";
	 		}else{
	 			alert("Somthing Wrong!");
	 		}
	 	}
	 });


	}else{
		alert('Please Enter Fields!!');
	}
}

function getDataFromRow(index) {
        
        let name = $("#n"+index).val();
        let qty = $("#q"+index).val();

        return {
          "name":name,
          "quantity":qty,
        };
      }

function getQuotation() {
			//Get Data from subtotal
			let st = getCheckedValue("charge_sub_total");

			// GET Form data
			let a = getCheckedValue("charge_packing_no");
			let b = getCheckedValue("charge_transportation");
			let c = getCheckedValue("charge_loading");
			let d = getCheckedValue("charge_uploading");
			let e = getCheckedValue("charge_unpacking");
			let f = getCheckedValue("charge_escorting");
			let g = getCheckedValue("charge_storage");
			
			let amountTotal = a + b + c + d + e + f + g;
			// console.log(a,amountTotal);
			document.getElementById('charge_sub_total').value = amountTotal;
			// cGst();
		}

		function getCheckedValue(ids) {
			let finalamt = document.getElementById(ids).value;
			// console.log(finalamt);
			let arg = '';
			for (let x=0; x<finalamt.length;x++){
				arg += (finalamt[x]=='e')?'':finalamt[x];
			}
			// console.log(ids, arg);
			document.getElementById(ids).value=arg;
			arg=(arg=="")?0:parseFloat(arg);
			// console.log(ids, arg);
			return arg;	
		}


		


function cGst(){

      // console.log("CGST CALLED");
      let st = document.getElementById("charge_sub_total").value;
      let x = parseFloat(st);
      
      // console.log(typeof(st),st);
      let a = document.getElementById("csgtp").value;
      let y = parseFloat(a);

      let res = (x * y)/100;

      document.getElementById("csgt").value = res.toFixed(2) ;
  }


function sGst(){

      // console.log("CGST CALLED");
      let st = document.getElementById("charge_sub_total").value;
      let x = parseFloat(st);
      
      // console.log(typeof(st),st);
      let a = document.getElementById("sgstp").value;
      let y = parseFloat(a);

      let res = (x * y)/100;

      document.getElementById("sgst").value = res.toFixed(2) ;
  }



  function grandTotal() {
  	let st = document.getElementById('charge_sub_total').value;
      // st=st.replace(',','');
      let a  = parseFloat(st);
      
      let cgstv = document.getElementById('csgt').value;
      let b = parseFloat(cgstv);
      
      let sgstv = document.getElementById('sgst').value;
      let c = parseFloat(sgstv);
      
      let insurance = document.getElementById('insurance').value;
      let d = parseFloat(insurance);
      
     let res = a + b + c + d;
      document.getElementById('grand_total').value = res.toFixed(2); 

  }



