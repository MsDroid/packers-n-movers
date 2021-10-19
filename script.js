

// ===========================================================================================================
// quotation
// =============================================================================================================


function quotation() {
	let name = document.getElementById('name').value;
	let add1 = document.getElementById('add1').value;
	let add2 = document.getElementById('add2').value;
	let fromadd = document.getElementById('fromadd').value;
	let toadd = document.getElementById('toadd').value;
	let no = document.getElementById('no').value;
	let date = document.getElementById('date').value;
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

        // radio button
        const neck = document.querySelectorAll('input[name="noentry_checked"]');
            let noentryselect;
            for (const nk of neck) {
                if (nk.checked) {
                    noentryselect = nk.value;
                    break;
                }
            }
    
        // let fromfloor = document.getElementById('from-floor').value;
        let ld = document.getElementById('loading_diatance').value;
        let ud = document.getElementById('uploading_diatance').value;
        let pr = document.getElementById('packing_requirement').value;
        let lr = document.getElementById('labour_requirement').value;
        let at = document.getElementById('adv_token').value;
        let ad = document.getElementById('amt_due').value;

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
        	'ad':ad
        }

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
        var cgst = document.getElementById('csgt').value;
        var sgst = document.getElementById('sgst').value;
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
        	'cgst':cgst,
        	'sgst':sgst,
        	'ins':ins,
        	'gt':gt,
        	'rs':rs
        }
		
		let qcjson = JSON.stringify(qcobj); 

	
	 var dataString = 'name=' + name + '&add1=' + add1 + '&add2=' + add2 + '&fromadd=' + fromadd + '&toadd=' + toadd + '&no=' + no + '&date=' + date + '&tbldata=' + myjsondata + '&qjson=' + qjson + '&qcjson=' + qcjson;       

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
	 })


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



// ======================================================================================================================================
// car conditions report
// ================================================================================================================================

      
      function createCarConditionReport(){
      	let name = document.getElementById('name').value;
      	let add = document.getElementById('address').value;
      	let add1 = document.getElementById('address-1').value;
      	let mob = document.getElementById('contact-no').value;
      	let fromadd = document.getElementById('from-add').value;
      	let toadd = document.getElementById('from-to').value;
      	let date = document.getElementById('date').value;
      	let crn = document.getElementById('car_regd_no').value;
      	let mkn = document.getElementById('make').value;
      	let col = document.getElementById('colour').value;
      	let ipno = document.getElementById('ins_poly_no').value;
      	let cn = document.getElementById('comp_name').value;
      	let btno = document.getElementById('bat_no').value;
      	let chnm = document.getElementById('chasi_name').value;
      	let eng_no = document.getElementById('eng_no').value;
      	let fuel = document.getElementById('fuel').value;
      	let fl_t_no = document.getElementById('f_l_tyre_no').value;
      	let fr_t_no = document.getElementById('f_r_tyre_no').value;
		let rl_t_no = document.getElementById('r_l_tyre_no').value;
      	let rr_t_no = document.getElementById('r_r_tyre_no').value;
      	

      	if(name != '' && add != '' && mob != '' && fromadd != '' && toadd != ''){
      		
      		let ccrobj = {
      		'add':add,
      		'add1':add1,
      		'date':date,
      		'crn':crn,
      		'mkn':mkn,
      		'col':col,
      		'ipno':ipno,
      		'cn':cn,
      		'btno':btno,
      		'chnm':chnm,
      		'eng_no':eng_no,
      		'fuel':fuel,
      		'fl_t_no':fl_t_no,
      		'fr_t_no':fr_t_no,
      		'rl_t_no':rl_t_no,
      		'rr_t_no':rr_t_no
      	}

      	let ccrjson = JSON.stringify(ccrobj);


      		//1 radio button
        const ste = document.querySelectorAll('input[name="stepney"]');
            let stepneyselect;
            for (const st of ste) {
                if (st.checked) {
                    stepneyselect = st.value;
                    break;
                }
            }

        	//1 radio button
        const wcs = document.querySelectorAll('input[name="wheel_cap"]');
            let wcselect;
            for (const wc of wcs) {
                if (wc.checked) {
                    wcselect = wc.value;
                    break;
                }
            }



            	//1 radio button
        const srms = document.querySelectorAll('input[name="side_rear_mirror"]');
            let srmselect;
            for (const srm of srms) {
                if (srm.checked) {
                    srmselect = srm.value;
                    break;
                }
            }


            	//1 radio button
        const crps = document.querySelectorAll('input[name="car_radio_player"]');
            let crpselect;
            for (const crp of crps) {
                if (crp.checked) {
                    crpselect = crp.value;
                    break;
                }
            }


            	//1 radio button
        const acs = document.querySelectorAll('input[name="air_conditioner"]');
            let acselect;
            for (const ac of acs) {
                if (ac.checked) {
                    acselect = ac.value;
                    break;
                }
            }


            	//1 radio button
        const ls = document.querySelectorAll('input[name="lightner"]');
            let lselect;
            for (const l of ls) {
                if (l.checked) {
                    lselect = l.value;
                    break;
                }
            }


            	//1 radio button
        const dws = document.querySelectorAll('input[name="digital_watch"]');
            let dwselect;
            for (const dw of dws) {
                if (dw.checked) {
                    dwselect = dw.value;
                    break;
                }
            }


            	//1 radio button
        const ss = document.querySelectorAll('input[name="speakers"]');
            let sselect;
            for (const s of ss) {
                if (s.checked) {
                    sselect = s.value;
                    break;
                }
            }


            	//1 radio button
        const tks = document.querySelectorAll('input[name="tool_kit"]');
            let tkselect;
            for (const tk of tks) {
                if (tk.checked) {
                    tkselect = tk.value;
                    break;
                }
            }


            	//1 radio button
        const jks = document.querySelectorAll('input[name="jack"]');
            let jkselect;
            for (const jk of jks) {
                if (jk.checked) {
                    jkselect = jk.value;
                    break;
                }
            }


            	//1 radio button
        const frms = document.querySelectorAll('input[name="floor_rubber_mats"]');
            let frmselect;
            for (const frm of frms) {
                if (frm.checked) {
                    frmselect = frm.value;
                    break;
                }
            }


            	//1 radio button
        const wabs = document.querySelectorAll('input[name="wiper_arms_and_blade"]');
            let wabsselect;
            for (const wab of wabs) {
                if (wab.checked) {
                    wabsselect = wab.value;
                    break;
                }
            }



            	//1 radio button
        const fcs = document.querySelectorAll('input[name="floor_carper"]');
            let fcselect;
            for (const fc of fcs) {
                if (fc.checked) {
                    fcselect = fc.value;
                    break;
                }
            }



            	//1 radio button
        const scs = document.querySelectorAll('input[name="seat_cover"]');
            let scselect;
            for (const sc of scs) {
                if (sc.checked) {
                    scselect = sc.value;
                    break;
                }
            }



            	//1 radio button
        const mos = document.querySelectorAll('input[name="meter_ok"]');
            let moselect;
            for (const mo of mos) {
                if (mo.checked) {
                    moselect = mo.value;
                    break;
                }
            }


            	//1 radio button
        const ccs = document.querySelectorAll('input[name="car_cover"]');
            let ccselect;
            for (const cc of ccs) {
                if (cc.checked) {
                    ccselect = cc.value;
                    break;
                }
            }

// radio select obj
            let ccrradios_obj = {
        	'stepneyselect':stepneyselect,
        	'wcselect':wcselect,
        	'srmselect':srmselect,
        	'crpselect':crpselect,
        	'acselect':acselect,
        	'lselect':lselect,
        	'dwselect':dwselect,
        	'sselect':sselect,
        	'tkselect':tkselect,
        	'jkselect':jkselect,
        	'frmselect':frmselect,
        	'wabsselect':wabsselect,
        	'fcselect':fcselect,
        	'scselect':scselect,
        	'moselect':moselect,
        	'ccselect':ccselect
        }

       let ccrradios_json = JSON.stringify(ccrradios_obj);


       // remark area in ccr
       var scr = document.getElementById('scratches').value;
       var scr1 = document.getElementById('scratches-1').value;
       var dent = document.getElementById('dents').value;
       var dent1 = document.getElementById('dents-1').value;
       var other = document.getElementById('other').value;
       var other1 = document.getElementById('other-1').value;
       var clo_km = document.getElementById('closed_km').value;
       var clo_kmw = document.getElementById('closed_km_in_words').value;

		let m_no = document.getElementById('m_no').value;

       let ccrremarkobj = {
       		'scr':scr,
       		'scr1':scr1,
       		'dent':dent,
       		'dent1':dent1,
       		'other':other,
       		'other1':other1,
       		'clo_km':clo_km,
       		'clo_kmw':clo_kmw
       }

       let ccrremarkjson = JSON.stringify(ccrremarkobj);

           let dataString = 'name=' + name + '&fromadd=' + fromadd + '&toadd=' + toadd + '&mob=' + mob + '&ccrjson=' + ccrjson + '&ccrradios_json=' + ccrradios_json + '&ccrremarkjson=' + ccrremarkjson + '&m_no=' + m_no;
      		
      		$.ajax({
      			url:"api/createccr.php",
      			method:"POST",
      			data : dataString,
      			success:function(r){
      				if (true) {
							alert("Successfully Created!");
							window.location.href='car_condition_reportlist.php';
						}else{
							alert("Somthing Wrong!");
						}
      			}
      		})
      		// console.log(dataString);
      	}else{
      		alert("Please Enter Fields!");
      	}

      }


