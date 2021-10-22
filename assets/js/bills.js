// ======================================================================================================
// bill generation
// ======================================================================================================
function generateBill(){
	// var billDetails = [];

	var oaddress = document.getElementById('site_address').value;
// alert(oaddress);
console.log(oaddress);
	var cadd1 = document.getElementById('cadd1').value;
	var cadd2 = document.getElementById('cadd2').value;
	var cadd3 = document.getElementById('cadd3').value;
	var cadd4 = document.getElementById('cadd4').value;
	var cno = document.getElementById('cno').value;
	var cp0 = document.getElementById('cp0').value;
	var cp1 = document.getElementById('cp1').value;
	var cp2 = document.getElementById('cp2').value;
	var cp3 = document.getElementById('cp3').value;
	var cp4 = document.getElementById('cp4').value;
	var cp5 = document.getElementById('cp5').value;

	var cemail = document.getElementById('cemail').value;
	
	// var consignorPin = cp0+''+cp1+''+cp2+''+cp3+''+cp4+''+cp5;

	var consignorobj = {
		'cadd1' : cadd1,
		'cadd2' : cadd2,
		'cadd3' : cadd3,
		'cadd4' : cadd4,
		'cp0' : cp0,
		'cp1' : cp1,
		'cp2' : cp2,
		'cp3' : cp3,
		'cp4' : cp4,
		'cp5' : cp5,
		'cemail' : cemail,
		'consignorNo'  : cno
		}
	
	// billDetails.push(consignorobj);
	
	// consignee
	var cneadd1 = document.getElementById('cneadd1').value;
	var cneadd2 = document.getElementById('cneadd2').value;
	var cneadd3 = document.getElementById('cneadd3').value;
	var cneadd4 = document.getElementById('cneadd4').value;

	// var consigneeAdd = cneadd1 + ' ' + cneadd2 + ' ' + cneadd3 + ' ' + cneadd4 ;
	var cneno = document.getElementById('cneno').value;

	var cnep0 = document.getElementById('cnep0').value;
	var cnep1 = document.getElementById('cnep1').value;
	var cnep2 = document.getElementById('cnep2').value;
	var cnep3 = document.getElementById('cnep3').value;
	var cnep4 = document.getElementById('cnep4').value;
	var cnep5 = document.getElementById('cnep5').value;
	
	var cneemail = document.getElementById('cneemail').value;
	// var consigneePin = cnep0+''+cnep1+''+cnep2+''+cnep3+''+cnep4+''+cnep5;

	var consigneeobj = {
		'cneadd1' : cneadd1,
		'cneadd2' : cneadd2,
		'cneadd3' : cneadd3,
		'cneadd4' : cneadd4,
		'cnep0' : cnep0,
		'cnep1' : cnep1,
		'cnep2' : cnep2,
		'cnep3' : cnep3,
		'cnep4' : cnep4,
		'cnep5' : cnep5,
		'cneemail' : cneemail,
		'consigneeNo'  : cneno
		}

		// billDetails.push(consigneeobj);
	
	// console.log(billDetails);

	// insured owner section
	 const rbs = document.querySelectorAll('input[name="ins_check"]');
            let insuredPersonType;
            for (const rb of rbs) {
                if (rb.checked) {
                    insuredPersonType = rb.value;
                    break;
                }
            }

            // unloading check
    const ulcs = document.querySelectorAll('input[name="unloading_check"]');
            let unloadingselect;
            for (const uc of ulcs) {
                if (uc.checked) {
                    unloadingselect = uc.value;
                    break;
                }
            }

    // unpacking check
    const upcs = document.querySelectorAll('input[name="unpacking_check"]');
            let unpackingselect;
            for (const up of upcs) {
                if (up.checked) {
                    unpackingselect = up.value;
                    break;
                }
            }
            // alert(unloadingselect);


            // unpacking check
    const ajcs = document.querySelectorAll('input[name="adjusting_check"]');
            let adjustingselect;
            for (const aj of ajcs) {
                if (aj.checked) {
                    adjustingselect = aj.value;
                    break;
                }
            }

            // alert(insuredPersonType);

    // console.log(billDetails, insuredPersonType);
	// insured person details
    var name = document.getElementById('insured_co_name').value;
    var pkg = document.getElementById('pkg').value;
    var particular = document.getElementById('particular').value;
    var floor = document.getElementById('floor').value;
    var policy = document.getElementById('policy').value;
    var invoice = document.getElementById('invoice').value;
    var date = document.getElementById('date').value;
    var permit = document.getElementById('permit').value;
    var lorry = document.getElementById('lorry_no').value;
    var driver = document.getElementById('driver_no').value;
    var ownerno = document.getElementById('owner_no').value;
	var pc = document.getElementById('party_collection').value;
	var dp = document.getElementById('driver_paid').value;
	var csign = document.getElementById('csv').value;
	var cnesign = document.getElementById('cnesv').value;
	var snfsign = document.getElementById('snfsv').value;

const sign = {
	'csign' : csign,
	'cnesign' : cnesign,
	'snfsign' : snfsign
}
	
	const insuredobj ={
		'pkg'	: pkg,
		'particular' : particular,
		'floor' : floor,
		'policyno' : policy,
		'invoice' : invoice,
		'date' : date,
		'permitno' : permit,
		'lorryno' : lorry,
		'driverno' : driver,
		'ownerno' : ownerno,
		'pc' : pc,
		'dp' : dp,
		'unloading' : unloadingselect,
		'unpacking' : unpackingselect,
		'adjusting' : adjustingselect 
	}

	// billDetails.push(insuredobj);


var consign_no = document.getElementById('consign_no').value;
var created_date = document.getElementById('curr_date').value;
var fromAdd = document.getElementById('from-add').value;
var toAdd = document.getElementById('to-add').value;

// if (created_date == '' && fromAdd == '' && toAdd == '') {
// 	alert("Please Enter Date, Address from and Address to!");
// }
// charges table
var dktCharge = document.getElementById('dkt_charge').value;
var lorryCharge = document.getElementById('lorry').value;
var packingCharge = document.getElementById('packing').value;
var loadingCharge = document.getElementById('loading').value;
var unloadingCharge = document.getElementById('unloading').value;
var unpackingCharge = document.getElementById('unpacking').value;
var freightCharge = document.getElementById('freight').value;
var escortingCharge = document.getElementById('escorting').value;
var insCharge = document.getElementById('ins').value;
var otherCharge = document.getElementById('other').value;

var subTotal = document.getElementById('sub-total').value;
var cgst = document.getElementById('cgst').value;
var cgstvalue = document.getElementById('cgst-value').value;
var sgst = document.getElementById('sgst').value;
var sgstvalue = document.getElementById('sgst').value;
var entrytax = document.getElementById('entry-tax').value;
var grandtotal = document.getElementById('grand-total').value;
var amtinword = document.getElementById('amtinword').value;
var insp = document.getElementById('insp').value;
var insv = document.getElementById('insv').value;


chargeTblString = {
	'created_date':created_date,
	'dktCharge' : dktCharge,
	'lorryCharge' : lorryCharge,
	'packingCharge' : packingCharge,
	'unloadingCharge' : unloadingCharge,
	'loadingCharge' : loadingCharge,
	'unpackingCharge' : unpackingCharge,
	'freightCharge' : freightCharge,
	'escortingCharge' : escortingCharge,
	'insCharge' : insCharge,
	'otherCharge' : otherCharge,
	'subTotal' : subTotal,
	'cgst' : cgst,
	'cgstvalue' : cgstvalue,
	'sgst' : sgst,
	'sgstvalue' : sgstvalue,
	'entrytax' : entrytax,
	'grandtotal' : grandtotal,
	'insp' : insp,
	'insv' : insv,
	'amtinword' : amtinword
}

let c = {
	'consignor' : consignorobj,
	'consignee' : consigneeobj,
	'insured' : insuredobj,
	'chargetbl' : chargeTblString,
	'sign' : sign
}

let data = JSON.stringify(c);

let officeAddress = document.getElementById('site_address').value;
// let psign = document.getElementById('partySign').value;
// let osign = document.getElementById('oSignImage').value;

let dataString = 'officeAddress=' + officeAddress + '&name=' + name + '&inspt=' + insuredPersonType + '&consign_no=' + consign_no + '&fromadd=' + fromAdd + '&toadd=' + toAdd + '&data=' + data;

if(insuredPersonType != '' && name !='' && fromAdd !='' && toAdd !='' && created_date!=''){

$.ajax({
	url : "api/createBill.php",
    method : "POST",
    data : dataString,
	success:function(r){
		if(true){
			alert("Successfully Created!");
			window.location.href='bill-generationlist.php';
		}else{
			alert("Somthing Wrong, Please Try Again!");
		}	
	}
});

}else{
	alert("Please Enter Insured Type, Name, Ship from, Ship to and Date!");
}


}

// =============================================================================
// update
// ==============================================================================
function updateBill(){
	// var billDetails = [];
	var oaddress = document.getElementById('site_address').value;

	var cadd1 = document.getElementById('cadd1').value;
	var cadd2 = document.getElementById('cadd2').value;
	var cadd3 = document.getElementById('cadd3').value;
	var cadd4 = document.getElementById('cadd4').value;
	var cno = document.getElementById('cno').value;
	var cp0 = document.getElementById('cp0').value;
	var cp1 = document.getElementById('cp1').value;
	var cp2 = document.getElementById('cp2').value;
	var cp3 = document.getElementById('cp3').value;
	var cp4 = document.getElementById('cp4').value;
	var cp5 = document.getElementById('cp5').value;

	var cemail = document.getElementById('cemail').value;
	
	// var consignorPin = cp0+''+cp1+''+cp2+''+cp3+''+cp4+''+cp5;

	var consignorobj = {
		'cadd1' : cadd1,
		'cadd2' : cadd2,
		'cadd3' : cadd3,
		'cadd4' : cadd4,
		'cp0' : cp0,
		'cp1' : cp1,
		'cp2' : cp2,
		'cp3' : cp3,
		'cp4' : cp4,
		'cp5' : cp5,
		'cemail' : cemail,
		'consignorNo'  : cno
		}
	
	// billDetails.push(consignorobj);
	
	// consignee
	var cneadd1 = document.getElementById('cneadd1').value;
	var cneadd2 = document.getElementById('cneadd2').value;
	var cneadd3 = document.getElementById('cneadd3').value;
	var cneadd4 = document.getElementById('cneadd4').value;

	// var consigneeAdd = cneadd1 + ' ' + cneadd2 + ' ' + cneadd3 + ' ' + cneadd4 ;
	var cneno = document.getElementById('cneno').value;

	var cnep0 = document.getElementById('cnep0').value;
	var cnep1 = document.getElementById('cnep1').value;
	var cnep2 = document.getElementById('cnep2').value;
	var cnep3 = document.getElementById('cnep3').value;
	var cnep4 = document.getElementById('cnep4').value;
	var cnep5 = document.getElementById('cnep5').value;

	var cneemail = document.getElementById('cneemail').value;
	
	// var consigneePin = cnep0+''+cnep1+''+cnep2+''+cnep3+''+cnep4+''+cnep5;

	var consigneeobj = {
		'cneadd1' : cneadd1,
		'cneadd2' : cneadd2,
		'cneadd3' : cneadd3,
		'cneadd4' : cneadd4,
		'cnep0' : cnep0,
		'cnep1' : cnep1,
		'cnep2' : cnep2,
		'cnep3' : cnep3,
		'cnep4' : cnep4,
		'cnep5' : cnep5,
		'cneemail' : cneemail,
		'consigneeNo'  : cneno
		}

		// billDetails.push(consigneeobj);
	
	// console.log(billDetails);

	// insured owner section
	 const rbs = document.querySelectorAll('input[name="ins_check"]');
            let insuredPersonType;
            for (const rb of rbs) {
                if (rb.checked) {
                    insuredPersonType = rb.value;
                    break;
                }
            }

            // unloading check
    const ulcs = document.querySelectorAll('input[name="unloading_check"]');
            let unloadingselect;
            for (const uc of ulcs) {
                if (uc.checked) {
                    unloadingselect = uc.value;
                    break;
                }
            }

    // unpacking check
    const upcs = document.querySelectorAll('input[name="unpacking_check"]');
            let unpackingselect;
            for (const up of upcs) {
                if (up.checked) {
                    unpackingselect = up.value;
                    break;
                }
            }
            // alert(unloadingselect);


            // unpacking check
    const ajcs = document.querySelectorAll('input[name="adjusting_check"]');
            let adjustingselect;
            for (const aj of ajcs) {
                if (aj.checked) {
                    adjustingselect = aj.value;
                    break;
                }
            }

            // alert(insuredPersonType);

    // console.log(billDetails, insuredPersonType);
	// insured person details
    var name = document.getElementById('insured_co_name').value;
    var pkg = document.getElementById('pkg').value;
    var particular = document.getElementById('particular').value;
    var floor = document.getElementById('floor').value;
    var policy = document.getElementById('policy').value;
    var invoice = document.getElementById('invoice').value;
    var date = document.getElementById('date').value;
    var permit = document.getElementById('permit').value;
    var lorry = document.getElementById('lorry_no').value;
    var driver = document.getElementById('driver_no').value;
    var ownerno = document.getElementById('owner_no').value;
	var pc = document.getElementById('party_collection').value;
	var dp = document.getElementById('driver_paid').value;
	var csign = document.getElementById('csv').value;
	var cnesign = document.getElementById('cnesv').value;
	var snfsign = document.getElementById('snfsv').value;

	const sign = {
	'csign' : csign,
	'cnesign' : cnesign,
	'snfsign' : snfsign
}
	const insuredobj ={
		'pkg'	: pkg,
		'particular' : particular,
		'floor' : floor,
		'policyno' : policy,
		'invoice' : invoice,
		'date' : date,
		'permitno' : permit,
		'lorryno' : lorry,
		'driverno' : driver,
		'ownerno' : ownerno,
		'pc' : pc,
		'dp' : dp,
		'unloading' : unloadingselect,
		'unpacking' : unpackingselect,
		'adjusting' : adjustingselect 
	}

	// billDetails.push(insuredobj);


var consign_no = document.getElementById('consign_no').value;
var created_date = document.getElementById('curr_date').value;
var fromAdd = document.getElementById('from-add').value;
var toAdd = document.getElementById('to-add').value;

// if (created_date == '' && fromAdd == '' && toAdd == '') {
// 	alert("Please Enter Date, Address from and Address to!");
// }
// charges table
var dktCharge = document.getElementById('dkt_charge').value;
var lorryCharge = document.getElementById('lorry').value;
var packingCharge = document.getElementById('packing').value;
var loadingCharge = document.getElementById('loading').value;
var unloadingCharge = document.getElementById('unloading').value;
var unpackingCharge = document.getElementById('unpacking').value;
var freightCharge = document.getElementById('freight').value;
var escortingCharge = document.getElementById('escorting').value;
var insCharge = document.getElementById('ins').value;
var otherCharge = document.getElementById('other').value;

var subTotal = document.getElementById('sub-total').value;
var cgst = document.getElementById('cgst').value;
var cgstvalue = document.getElementById('cgst-value').value;
var sgst = document.getElementById('sgst').value;
var sgstvalue = document.getElementById('sgst').value;
var entrytax = document.getElementById('entry-tax').value;
var grandtotal = document.getElementById('grand-total').value;
var amtinword = document.getElementById('amtinword').value;
var insp = document.getElementById('insp').value;
var insv = document.getElementById('insv').value;
// let chargeTblArr = [];
chargeTblString = {
	'created_date':created_date,
	'dktCharge' : dktCharge,
	'lorryCharge' : lorryCharge,
	'packingCharge' : packingCharge,
	'unloadingCharge' : unloadingCharge,
	'loadingCharge' : loadingCharge,
	'unpackingCharge' : unpackingCharge,
	'freightCharge' : freightCharge,
	'escortingCharge' : escortingCharge,
	'insCharge' : insCharge,
	'otherCharge' : otherCharge,
	'subTotal' : subTotal,
	'cgst' : cgst,
	'cgstvalue' : cgstvalue,
	'sgst' : sgst,
	'sgstvalue' : sgstvalue,
	'entrytax' : entrytax,
	'grandtotal' : grandtotal,
	'insp' : insp,
	'insv' : insv,
	'amtinword' : amtinword
}

let c = {
	'consignor' : consignorobj,
	'consignee' : consigneeobj,
	'insured' : insuredobj,
	'chargetbl' : chargeTblString,
	'sign' : sign
}

let data = JSON.stringify(c);
const bid = document.getElementById('bid').value;
let dataString = 'officeAddress=' + oaddress + '&name=' + name + '&inspt=' + insuredPersonType + '&consign_no=' + consign_no + '&fromadd=' + fromAdd + '&toadd=' + toAdd + '&data=' + data + '&bid=' + bid;

if(insuredPersonType != '' && name !='' && fromAdd !='' && toAdd !='' && created_date!=''){

$.ajax({
	url : "api/updateBill.php",
    method : "POST",
    data : dataString,
	success:function(r){
		if(true){
			alert("Successfully Updated!");
			window.location.href='bill-generationlist.php';
			// window.location.href='billsignature_uploader.php?invoice_no='+invoice;
		}else{
			alert("Somthing Wrong, Please Try Again!");
		}	
	}
});

}else{
	alert("Please Enter Address, Name, Person Type, Date, From, To,  All Fields!");
}


}
function getValue(arrrr) {
			//Get Data from subtotal
			// alert("heelo");
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
			// console.log(j, "ugwdywgdwygd");
			let amountTotal = a + b + c + d + e + f + g + i + j + k;
			// console.log(amountTotal);
			document.getElementById("sub-total").value = amountTotal.toFixed(2);
			// cGst();
		}

		
		function cGst(){
			// console.log("CGST CALLED");
			let st = document.getElementById("sub-total").value;
			// st=st.replace(',','');
			let x = parseFloat(st);
			
			// console.log(typeof(x));
			let a = document.getElementById("cgst").value;
			let y = parseFloat(a);

			let z = (x * y)/100;
			document.getElementById("cgst-value").value = z.toFixed(2);
		}

		function sGST(){
			// console.log("SGST CALLED");
			let st = document.getElementById("sub-total").value;
			// st=st.replace(',','');
			let x = parseFloat(st);
			// console.log(typeof(x));
			let a = document.getElementById("sgst").value;
			let y = parseFloat(a);
			// console.log(x,y);

			let z = (x * y)/100;
			document.getElementById("sgst-value").value = z.toFixed(2);
		}

		function grandTotal() {
			let st = document.getElementById('sub-total').value;
			// st=st.replace(',','');
			a  = parseFloat(st);
			
			let cgstv = document.getElementById('cgst-value').value;
			b = parseFloat(cgstv);
			
			let sgstv = document.getElementById('sgst-value').value;
			c = parseFloat(sgstv);
			
			let entrytax = document.getElementById('entry-tax').value;
			d = parseFloat(entrytax);
			
			let z = a + b + c + d;
			document.getElementById('grand-total').value = z.toFixed(2); 

		}

		function getCheckValue(ids) {
			let finalamt = document.getElementById(ids).value;
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

		
		function numberWithCommas(x) {
    	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}	




		