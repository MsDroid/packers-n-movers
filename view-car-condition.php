<?php
session_start();
include 'config.php';

if(!isset($_SESSION['IS_LOGIN'])){
  header("location:login.php");
} 


if (isset($_GET['id']) & $_GET['id'] != '') {
  $id = $_GET['id'];
}


$media_number = rand().time();
?>
<!doctype html>
  <html lang="en">
  <head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="assets/style.css">

    <title>View Car Condition Report</title>

  </head>
  <body>
    <header id="car_condition_topbar">
      <div class="container-fluid">
        <!-- contact no -->
        <div class="row">
          <div class="tar">
            <span class="icon"><i class="fas fa-phone-alt"></i></span>
            <span class="hno">9955797111</span>
            
          </div>
        </div>
        <!-- end contact no -->
        <!-- header section -->
        <div class="row">
          <div class="col-sm-8">
            <div class="logo-wrapper cleft-s">
              <img src="logo.png" alt="logo" class="img">
              <h1>SAFE & FAST <span style="font-size: 10px">(Regd.)</span></h1>
            </div>
          </div>
          <div class="col-sm-2 hcard">
            <div>  
              <h5>Regd. Office</h5>
              <p>9SWARN JAYANTI NAGAR, ROAD NO - 05,</p>
              <p>NEAR SHIV MANDIR MADHUKAM,</p>
              <p>RANCHI - 834001, JHARKHAND,INDIA</p>
            </div>
          </div>
          <div class="col-sm-2 hcard">
            <div>
              <h5><i class="fas fa-phone-alt"></i><span class="ml5">9955172777</span></h5>
              <p><i class="fas fa-headphones"></i><span class="ml5">support@safenfast.in</span></p>
              <p><i class="fas fa-globe"></i><span class="ml5">www.safenfast.in</span></p>
            </div>
          </div>
        </div>
        <!-- end header section -->
      </div>
    </header>
    <main>
      <div class="container-fluid" style="font-size:14px;">
        <div class="row">
          <!-- <div class="sno">S.No.</div> -->
          <div class="title-c">
            <span class="flot-left">S.No.</span>
            <span class="txt-center">FOUR WHEELER CONDITION REPORT</span>
            <span class="txt-right">BRANCH SEAL</span>  
          </div>
        </div>
        <div class="row">

          <div class="col-md-4">
            <input type="text" class="form-control bdr-none" id="name"  placeholder="Name">
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control bdr-none" id="contact-no"  placeholder="Mobile" pattern= "[0-9]">
          </div>
          <div class="col-md-4"></div>
          <div class="col-4">
            <input type="text" class="form-control bdr-none" id="address"  placeholder="1234 Main St">
          </div>
          <div class="col-4">
            <input type="text" class="form-control bdr-none" id="address-1"  placeholder="Apartment, studio, or floor">
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-2">
            <select class="form-select bdr-none" id="from-to" >
              <option class="">Select destination</option>
              <?php 
              $city_sql= "SELECT * from cities ORDER BY city ASC";
              $city_query = mysqli_query($con,$city_sql);
              while ($cities = mysqli_fetch_assoc($city_query)){
                echo "<option value=".$cities['city'].">".$cities['city']."</option>";
              }
              ?>
            </select>

          </div>
          <div class="col-md-2">
            <select class="form-select bdr-none" id="from-add" >
              <option class="">Select from</option>
              <?php 
              $city_sql= "SELECT * from cities ORDER BY city ASC";
              $city_query = mysqli_query($con,$city_sql);
              while ($cities = mysqli_fetch_assoc($city_query)){
                echo "<option value=".$cities['city'].">".$cities['city']."</option>";
              }
              ?>
            </select>

          </div>
          <div class="col-md-2">
            <input type="date" class="form-control bdr-none" id="date" placeholder="date" >
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control bdr-none" id="ins_poly_no"  placeholder="Insurance Policy No.">
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="car_regd_no"  placeholder="Car/Bike Regd. No.">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="make"  placeholder="Make">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="colour"  placeholder="Colour">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="comp_name"  placeholder="Company Name">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="bat_no"  placeholder="Battery No.">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="chasi_name"  placeholder="Chasis No.">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="eng_no"  placeholder="Engine No.">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="fuel"  placeholder="Fuel ( Petrol / Diesel )">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="f_l_tyre_no" placeholder="Tyre Serial No. Front(L)">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="f_r_tyre_no"  placeholder="Front(R)">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="r_l_tyre_no"  placeholder="Rear(L)">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="r_r_tyre_no"  placeholder="Rear(R)">
          </div>
        </div>
        <div class="row">
          <div class="btm">
            <h3>S (SCRATCHED) D (DENTED) R (RUSTED) L (LOOSE) M (MISSING) P (PAINT PEELED OFF)</h3>  
          </div>
        </div>
        <!-- accessories section start -->
        <div class="row">
          <div class="cntr-acces">ACCESSORIES DECLARATION</div>
          <!-- accessories checkbox left table start -->
          <div class="col-sm-6 lft-tbl">
            <table class="table table-borderless c-tbl">
              <tbody>
                <tr>
                  <td>1</td>
                  <td>STEPNEY</td>
                  <td>Yes &nbsp; 
                    <input type="radio" value="yes" id="syes" name="stepney"> 
                    No &nbsp;
                    <input type="radio" value="no" id="sno" name="stepney"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>WHEEL CAP</td>
                  <td>Yes &nbsp; 
                    <input type="radio" value="yes" id="wyes" name="wheel_cap"> 
                    No &nbsp;
                    <input type="radio" value="no" id="wno"  name="wheel_cap"></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>SIDE REAR VIEW MIRROR</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="srvmy" value="yes" name="side_rear_mirror"> 
                    No &nbsp;
                    <input type="radio" id="srvmn" value="no"  name="side_rear_mirror"></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>CAR RADIO PLAYER</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="crpy" value="yes" name="car_radio_player"> 
                    No &nbsp;
                    <input type="radio" id="crpn" value="no"  name="car_radio_player">
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>AIR CONDITIONER</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="acy" value="yes" name="air_conditioner"> 
                    No &nbsp;
                    <input type="radio" id="acn" value="no"  name="air_conditioner"></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>LIGHTNER</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="ly" value="yes" name="lightner"> 
                    No &nbsp;
                    <input type="radio" id="ln" value="no"  name="lightner">
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>DIGITAL WATCH</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="dwy" value="yes" name="digital_watch"> 
                    No &nbsp;
                    <input type="radio" id="dwn" value="no"  name="digital_watch">
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>SPEAKERS</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="spy" value="yes" name="speakers"> 
                    No &nbsp;
                    <input type="radio" id="spn" value="no"  name="speakers">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>        
          <!-- accessories checkbox left table end -->
          <!-- accessories checkbox right table start -->
          <div class="col-sm-6 lft-tbl">
            <table class="table table-borderless c-tbl">
              <tbody>
                <tr>
                  <td>9</td>
                  <td>TOOL KIT</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="tky" value="yes" name="tool_kit"> 
                    No &nbsp;
                    <input type="radio" id="tkn" value="no"  name="tool_kit">
                  </td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>JACK</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="jy" value="yes" name="jack"> 
                    No &nbsp;
                    <input type="radio" id="jn" value="no"  name="jack">
                  </td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>FLOOR RUBBER MATS</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="frby" value="yes" name="floor_rubber_mats"> 
                    No &nbsp;
                    <input type="radio" id="frbyn" value="no"  name="floor_rubber_mats"></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>WIPER ARMS AND BLADER</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="waby" value="yes" name="wiper_arms_and_blade"> 
                    No &nbsp;
                    <input type="radio" id="wabn" value="no"  name="wiper_arms_and_blade">
                  </td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>FLOOR CARPETS</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="fcy" value="yes" name="floor_carper"> 
                    No &nbsp;
                    <input type="radio" id="fcn" value="no"  name="floor_carper">
                  </td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>SEAT COVER</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="scy" value="yes" name="seat_cover"> 
                    No &nbsp;
                    <input type="radio" id="scn" value="no"  name="seat_cover">
                  </td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>METER OK</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="moy" value="yes" name="meter_ok"> 
                    No &nbsp;
                    <input type="radio" id="mon" value="no"  name="meter_ok">
                  </td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>CAR COVER</td>
                  <td>Yes &nbsp; 
                    <input type="radio" id="ccy" value="yes" name="car_cover"> 
                    No &nbsp;
                    <input type="radio" id="ccn" value="no"  name="car_cover">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>  
          <!-- accessories checkbox right table end -->
        </div>
        <!-- accessories section end -->

        <!-- remark section start -->
        <div class="remark">Remarks:</div>
        <div class="row">
          <div class="col-sm-6">
            <div class="col-sm-12">
             A. SCRATCHES 
             <input type="text" id="scratches" class="form-control bdr-none">
            <input type="text" id="scratches-1" class="form-control bdr-none">
            </div>
            <div class="col-sm-12">
             B. DENTS 
             <input type="text" id="dents" class="form-control bdr-none">
             <input type="text" id="dents-1" class="form-control bdr-none">
            </div>
             <div class="col-sm-12">
             C. ANY OTHER VISIBLE OBSERVATION <input type="text" id="other" class="form-control bdr-none">
              <input type="text" id="other-1" class="form-control bdr-none">
            </div>
             <div class="col-sm-12">
             D. CLOSED K.M <input type="text" id="closed_km" class="form-control bdr-none">
              <input type="text" id="closed_km_in_words" class="form-control bdr-none">
            </div>
             <div class="col-sm-12 td-para">
             E. <p>CAR IS BEING TRANSPORTED UNDER OWNER'S RISK,PARTY SHOULD COVER INSURANCE DIRECTLY.CARRIER IN NOT RESPONSIBLE FOR ANY ACCIDENT / REPAIR ETC.</p>
            </div>
             <div class="col-sm-12">
             F. DENTS <p class="d">DELIVERY WILL BE TAKEN FROM DRIVER / UNLOADING POINT</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="img-wrapper">
              <center>
                <img src="car_condition.jpg" alt="car condition report">  
              </center>
              <div id="ccrimg"></div>
            </div>
          </div>
        </div>
        <!-- remark section end -->
        <div class="row">
          <div class="col-sm-6 c-sign">
            <div class="note">
              <p>Note: We are not Responsible any Bettery and Mechenical Problem.</p>
            </div>            
            <div style="text-align:center" id="partySignImg">
              <img src="" alt="" width="200" height="100">
            </div>            
            <h3>
             
              <button type="button">
                SIGNATURE OF CONSIGNOR
              </button>
            </h3>
          </div>
          <div class="col-sm-6 c-thnk">
            <div style="text-align:center;">
              <input type="hidden" value="<?php echo $media_number; ?>" id="m_no" class="media_number" name="media-number-c"/>
              <!-- <button type="button" id="img_upload" onclick="uploadImg()" class="btn btn-warning">Image upload</button>   -->
            </div>
            
            
            <div style="text-align:center" id="snfsignimg">
              <img src="" alt="" width="200" height="100">
            </div>
            <h3>
              <!-- <input type="hidden" id="officeSignImg" value=""> -->
              <button type="button">Authorised Signatory
              </button>
            </h3>
          </div>
        </div>
      </div>
      <div style="margin: 10px;text-align: center;">
        <a href="car_condition_reportlist.php">
          <button class="btn btn-primary" type="button">Back</button> 
        </a>
        <input type="hidden" name="m_no" id="media_number">
        <!-- <button class="btn btn-success" onclick="createCarConditionReport()" type="button">Generate</button> -->
      </div>
    </main>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--Get your code at fontawesome.com-->
    <script src="https://kit.fontawesome.com/bb74ce6b04.js" crossorigin="anonymous"></script>

    <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="script.js"></script>

<script type="text/javascript">
       
         $.ajax({
              url : "api/get-ccr.php",
              method : "POST",
              data : {'id':<?php echo $_GET['id']; ?>},
              success:function(r){
                
                let x = jQuery.parseJSON(r);
                let y = jQuery.parseJSON(x.ccrrjson);
                let z = jQuery.parseJSON(x.ccrradios_json);
                let a = jQuery.parseJSON(x.ccrremarkjson);
                // console.log(x);
                $('#name').val(x.name);
                $('#contact-no').val(x.mob);
                $('#from-add').val(x.fromadd);
                $('#from-to').val(x.toadd);
                $('#address').val(y.add);
                $('#address-1').val(y.add1);
                $('#bat_no').val(y.btno);
                $('#date').val(y.date);
                $('#ins_poly_no').val(y.ipno);
                $('#car_regd_no').val(y.crn);
                $('#make').val(y.mkn);
                $('#colour').val(y.col);
                $('#comp_name').val(y.cn);
                $('#chasi_name').val(y.chnm);
                $('#eng_no').val(y.eng_no);
                $('#fuel').val(y.fuel);
                
                $('#f_l_tyre_no').val(y.fl_t_no);
                $('#f_r_tyre_no').val(y.fr_t_no);
                $('#r_l_tyre_no').val(y.rl_t_no);
                $('#r_r_tyre_no').val(y.rr_t_no);

                $('#media_number').val(x.m_no);

           
                // stepney radio button
                let stpny = document.getElementById('syes').value;
                // console.log(stpny,z.stepneyselect);
                (z.stepneyselect=='yes')?document.getElementById('syes').checked = true :document.getElementById('syes').checked = false;

                let stpnn = document.getElementById('sno').value;
                (z.stepneyselect =='no')?document.getElementById('sno').checked = true :document.getElementById('sno').checked = false;


                // stepney radio button
                let wtpny = document.getElementById('wyes').value;
                // console.log(wtpny,z.wcselect);
                (z.wcselect=='yes')?document.getElementById('wyes').checked = true :document.getElementById('wyes').checked = false;

                let wtpnn = document.getElementById('wno').value;
                (z.wcselect =='no')?document.getElementById('wno').checked = true :document.getElementById('wno').checked = false;



                // srmselect radio button
                let srvmy = document.getElementById('srvmy').value;
                // console.log(wtpny,z.wcselect);
                (z.srmselect=='yes')?document.getElementById('srvmy').checked = true :document.getElementById('srvmy').checked = false;

                let srvmn = document.getElementById('srvmn').value;
                (z.srmselect =='no')?document.getElementById('srvmn').checked = true :document.getElementById('srvmn').checked = false;


                 // stepney radio button
                let crpy = document.getElementById('crpy').value;
                // console.log(wtpny,z.wcselect);
                (z.crpselect=='yes')?document.getElementById('crpy').checked = true :document.getElementById('crpy').checked = false;

                let crpn = document.getElementById('crpn').value;
                (z.crpselect =='no')?document.getElementById('crpn').checked = true :document.getElementById('crpn').checked = false;

                // stepney radio button
                let acy = document.getElementById('acy').value;
                // console.log(wtpny,z.wcselect);
                (z.acselect=='yes')?document.getElementById('acy').checked = true :document.getElementById('acy').checked = false;

                let acn = document.getElementById('acn').value;
                (z.acselect =='no')?document.getElementById('acn').checked = true :document.getElementById('acn').checked = false;

              // stepney radio button
                let ly = document.getElementById('ly').value;
                (z.lselect=='yes')?document.getElementById('ly').checked = true :document.getElementById('ly').checked = false;

                let ln = document.getElementById('ln').value;
                (z.lselect =='no')?document.getElementById('ln').checked = true :document.getElementById('ln').checked = false;

              // stepney radio button
                let dwy = document.getElementById('dwy').value;
                // console.log(wtpny,z.wcselect);
                (z.dwselect=='yes')?document.getElementById('dwy').checked = true :document.getElementById('dwy').checked = false;

                let dwn = document.getElementById('dwn').value;
                (z.dwselect =='no')?document.getElementById('dwn').checked = true :document.getElementById('dwn').checked = false;

              // // stepney radio button
                let spy = document.getElementById('spy').value;
                // console.log(wtpny,z.wcselect);
                (z.sselect=='yes')?document.getElementById('spy').checked = true :document.getElementById('spy').checked = false;

                let spn = document.getElementById('spn').value;
                (z.sselect =='no')?document.getElementById('spn').checked = true :document.getElementById('spn').checked = false;


              // // stepney radio button
                let tky = document.getElementById('tky').value;
                // console.log(wtpny,z.wcselect);
                (z.tkselect=='yes')?document.getElementById('tky').checked = true :document.getElementById('tky').checked = false;

                let tkn = document.getElementById('tkn').value;
                (z.tkselect =='no')?document.getElementById('tkn').checked = true :document.getElementById('tkn').checked = false;

                // // stepney radio button
                let jy = document.getElementById('jy').value;
                // console.log(wtpny,z.wcselect);
                (z.jkselect=='yes')?document.getElementById('jy').checked = true :document.getElementById('jy').checked = false;

                let jn = document.getElementById('jn').value;
                (z.jkselect =='no')?document.getElementById('jn').checked = true :document.getElementById('jn').checked = false;


               // // stepney radio button
                let frby = document.getElementById('frby').value;
                // console.log(frby,z.frmselect);
                (z.frmselect=='yes')?document.getElementById('frby').checked = true :document.getElementById('frby').checked = false;

                let frbn = document.getElementById('frbyn').value;
                (z.frmselect =='no')?document.getElementById('frbyn').checked = true :document.getElementById('frbyn').checked = false;


              // // stepney radio button
                let waby = document.getElementById('waby').value;
                // console.log(wtpny,z.wcselect);
                (z.wabsselect=='yes')?document.getElementById('waby').checked = true :document.getElementById('waby').checked = false;

                let wabn = document.getElementById('wabn').value;
                (z.wabsselect =='no')?document.getElementById('wabn').checked = true :document.getElementById('wabn').checked = false;

               // // stepney radio button
                let fcy = document.getElementById('fcy').value;
                // console.log(wtpny,z.wcselect);
                (z.fcselect=='yes')?document.getElementById('fcy').checked = true :document.getElementById('fcy').checked = false;

                let fcn = document.getElementById('fcn').value;
                (z.fcselect =='no')?document.getElementById('fcn').checked = true :document.getElementById('fcn').checked = false;

                // // stepney radio button
                let scy = document.getElementById('scy').value;
                // console.log(wtpny,z.wcselect);
                (z.acselect=='yes')?document.getElementById('scy').checked = true :document.getElementById('scy').checked = false;

                let scn = document.getElementById('scn').value;
                (z.acselect =='no')?document.getElementById('scn').checked = true :document.getElementById('scn').checked = false;

              // // stepney radio button
                let moy = document.getElementById('moy').value;
                // console.log(wtpny,z.wcselect);
                (z.acselect=='yes')?document.getElementById('moy').checked = true :document.getElementById('moy').checked = false;

                let mon = document.getElementById('mon').value;
                (z.acselect =='no')?document.getElementById('mon').checked = true :document.getElementById('mon').checked = false;

              // // stepney radio button
                let ccy = document.getElementById('ccy').value;
                // console.log(wtpny,z.wcselect);
                (z.acselect=='yes')?document.getElementById('ccy').checked = true :document.getElementById('ccy').checked = false;

                let ccn = document.getElementById('ccn').value;
                (z.acselect =='no')?document.getElementById('ccn').checked = true :document.getElementById('ccn').checked = false;

                $('#scratches').val(a.scr);
                $('#scratches-1').val(a.scr1);
                $('#dents').val(a.dent);
                $('#dents-1').val(a.dent1);
                $('#other').val(a.other);
                $('#other-1').val(a.other1);
                $('#closed_km').val(a.clo_km);
                $('#closed_km_in_words').val(a.clo_kmw);

             
                let psignhtml = "<img src=upload/"+ x.psign +" alt='' width='200' height='100'>"
                // console.log(psignhtml);
                $('#partySignImg').html(psignhtml);

                let osignhtml = "<img src=upload/"+ x.osign +" alt='' width='200' height='100'>"
                $('#snfsignimg').html(psignhtml);


                  let media_no = x.m_no;
                  // console.log(media_no);
                   $.ajax({
                      url: "api/get-img.php",
                      data: {'media_no' : media_no},
                      method : "POST",
                      success:function(r){
                        // console.log(r);
                        var x = jQuery.parseJSON(r);
                        // console.log(x);

                        for (var i = 0; i <=x.length-1; i++) {
                          // console.log(x[i].m_filename);
                          let simg = "<img src=car-condition-img/"+ x[i].m_filename +" alt='' width='100' height='100'>";
                          // console.log(simg);
                          $('#ccrimg').append(simg);
                        }


                      }
                      })

              }
            })

            
           

   
    </script>


    
  </body>
  </html>