
// $(document).ready(function(){
//   $("#generateBill").click(function(){
//     	// e.preventDefault();
//     	var name = $("#name").val();
//     	var fromAd = $("#from-add").val();
//     	var toAdd = $("#to-add").val();
//     	var noteNo = $("#note-no").val();
//     	var onDate = $("#on-date").val();
    	
//     	if(name != '' && fromAd != '' && toAdd != '' && noteNo != '' && onDate != '' ){
//     		var formData = $("billForm").serialize();
//     		console.log(formData);
//     	}else{
//     		alert("Please Enter Fields!!");
//     	}

//   });
// });


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
