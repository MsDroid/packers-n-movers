<?php
session_start();
include 'config.php';

if(!isset($_SESSION['IS_LOGIN'])){
  header("location:login.php");
  
} 

$media_number = rand().time();
?>
<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
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
            <input type="text" class="form-control bdr-none" id="name" required placeholder="Name">
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control bdr-none" id="contact-no" required placeholder="Mobile" pattern= "[0-9]">
          </div>
          <div class="col-md-4"></div>
          <div class="col-4">
            <input type="text" class="form-control bdr-none" id="address" required placeholder="1234 Main St">
          </div>
          <div class="col-4">
            <input type="text" class="form-control bdr-none" id="address-1" required placeholder="Apartment, studio, or floor">
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-2">
            <select class="form-select bdr-none" id="from-to" required>
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
            <select class="form-select bdr-none" id="from-add" required>
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
            <input type="date" class="form-control bdr-none" id="date" placeholder="date" required>
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control bdr-none" id="ins_poly_no" required placeholder="Insurance Policy No.">
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="car_regd_no" required placeholder="Car/Bike Regd. No.">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="make" required placeholder="Make">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="colour" required placeholder="Colour">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="comp_name" required placeholder="Company Name">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="bat_no" required placeholder="Battery No.">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="chasi_name" required placeholder="Chasis No.">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="eng_no" required placeholder="Engine No.">
          </div>
          <div class="col-md-3">
            <input type="number" class="form-control bdr-none" id="fuel" required placeholder="Fuel ( Petrol / Diesel )">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="f_l_tyre_no" placeholder="Tyre Serial No. Front(L)">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="f_r_tyre_no" required placeholder="Front(R)">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control bdr-none" id="r_l_tyre_no" required placeholder="Rear(L)">
          </div>
          <div class="col-md-3">
            <input type="number" class="form-control bdr-none" id="r_r_tyre_no" required placeholder="Rear(R)">
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
                  <td>Yes &nbsp; <input type="radio" value="yes" name="stepney"> No &nbsp;<input type="radio" value="no" onclick="radioChecked('stepney')" name="stepney"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>WHEEL CAP</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="wheel_cap"> No &nbsp;<input type="radio" value="no"  name="wheel_cap"></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>SIDE REAR VIEW MIRROR</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="side_rear_mirror"> No &nbsp;<input type="radio" value="no"  name="side_rear_mirror"></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>CAR RADIO PLAYER</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="car_radio_player"> No &nbsp;<input type="radio" value="no"  name="car_radio_player"></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>AIR CONDITIONER</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="air_conditioner"> No &nbsp;<input type="radio" value="no"  name="air_conditioner"></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>LIGHTNER</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="lightner"> No &nbsp;<input type="radio" value="no"  name="lightner"></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>DIGITAL WATCH</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="digital_watch"> No &nbsp;<input type="radio" value="no"  name="digital_watch"></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>SPEAKERS</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="speakers"> No &nbsp;<input type="radio" value="no"  name="speakers"></td>
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
                  <td>Yes &nbsp; <input type="radio" value="yes" name="tool_kit"> No &nbsp;<input type="radio" value="no"  name="tool_kit"></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>JACK</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="jack"> No &nbsp;<input type="radio" value="no"  name="jack"></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>FLOOR RUBBER MATS</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="floor_rubber_mats"> No &nbsp;<input type="radio" value="no"  name="floor_rubber_mats"></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>WIPER ARMS AND BLADER</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="wiper_arms_and_blade"> No &nbsp;<input type="radio" value="no"  name="wiper_arms_and_blade"></td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>FLOOR CARPETS</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="floor_carper"> No &nbsp;<input type="radio" value="no"  name="floor_carper"></td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>SEAT COVER</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="seat_cover"> No &nbsp;<input type="radio" value="no"  name="seat_cover"></td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>METER OK</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="meter_ok"> No &nbsp;<input type="radio" value="no"  name="meter_ok"></td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>CAR COVER</td>
                  <td>Yes &nbsp; <input type="radio" value="yes" name="car_cover"> No &nbsp;<input type="radio" value="no"  name="car_cover"></td>
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
             A. SCRATCHES <input type="text" id="scratches" class="form-control bdr-none">
              <input type="text" id="scratches-1" class="form-control bdr-none">
            </div>
            <div class="col-sm-12">
             B. DENTS <input type="text" id="dents" class="form-control bdr-none">
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
            </div>
          </div>
        </div>
        <!-- remark section end -->
        <div class="row">
          <div class="col-sm-6 c-sign">
            <div class="note">
              <p>Note: We are not Responsible any Bettery and Mechenical Problem.</p>
            </div>            
            <div style="text-align:center">
              <img src="" alt="" width="200" height="100">
            </div>            
            <h3>
              <button data-bs-toggle="modal" data-bs-target="#cModal" type="button">SIGNATURE OF CONSIGNOR
              </button>
            </h3>
          </div>
          <div class="col-sm-6 c-thnk">
            <div style="text-align:center;">
              <input type="hidden" value="<?php echo $media_number; ?>" id="m_no" class="media_number" name="media-number-c"/>
              <!-- <button type="button" id="img_upload" onclick="uploadImg()" class="btn btn-warning">Image upload</button>   -->
            </div>
            
            
            <div style="text-align:center">
              <img src="" alt="" width="200" height="100">
            </div>
            <h3>
              <button data-bs-toggle="modal" data-bs-target="#oModal" type="button">Authorised Signatory
              </button>
            </h3>
          </div>
        </div>
      </div>
      <div style="margin: 10px;text-align: center;">
        <a href="car_condition_reportlist.php">
          <button class="btn btn-primary" type="button">Back</button> 
        </a>
        <button class="btn btn-success" onclick="createCarConditionReport()" type="button">Generate</button>
      </div>
    </main>
<!-- =================================================== -->
   <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="cModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Party Sign</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================= -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="oModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Office Sign</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- =================================================================== -->
<!-- =================================================== -->
   <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="cModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Party Sign</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================= -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="oModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Office Sign</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- =================================================================== -->

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--Get your code at fontawesome.com-->
    <script src="https://kit.fontawesome.com/bb74ce6b04.js" crossorigin="anonymous"></script>

    <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="script.js"></script>

<script type="text/javascript">
  
  function uploadImg(){
    alert("hello");
  }
</script>


    
  </body>
  </html>