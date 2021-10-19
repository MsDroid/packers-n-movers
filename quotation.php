<?php

include 'config.php';

session_start();

if(!isset($_SESSION['IS_LOGIN'])){
  header("location:login.php");
  
}

$consign_no = 'SNF-'.time();
?>
<!doctype html>
  <html lang="en">

  <head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="assets/css/quotation.css" rel="stylesheet">
    <title>Quotation</title>
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
    <header id="topbar" style="margin:0;padding: 0;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 topbar-wrapper">
            <!-- <span><img class="logo" src="logo.png" alt="logo" width="200" /></span> -->
            <p class="contact"><i class="fas fa-phone-alt no-icon"></i>9955797111</p>
            <h1 class="title">SAFE N FAST <span style="font-size: 10px;">(Regd.)</span></h1>
            <p class="p">A House of complete Transport Solution (Services All over India Door to Door)</p>
            <select class="form-control address" id="site_address" style="font-size: 10px;overflow: visible;width: 107%;text-align: center;border: none;margin: 0;padding: 0;">
                    <option>Select Address</option>
                    <?php
                      $add_sql = "SELECT * from address";
                      $add_query = mysqli_query($con, $add_sql);
                      while ($arow = mysqli_fetch_assoc($add_query)) {
                        echo "<option><p>".$arow['address']."</p></option>";    
                      }
                     ?>
                  </select>
            <!-- <p class="p">EWS 30, Harmu Housing Colony, Near Nigam Park, Harmu, Ranchi (JH)</p> -->
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <p class="p-br">COMMITMENT DELIVERY, EXCELLENT PACKING WITH EXPERT PACKERS</p>  
              </div>
              <div class="col-sm-2"></div>  
            </div>
          </div>
          <div class="row cntr">
            <div class="col-4 align-left">
              <span class="sub-contact">Contact : 9955797111 / 9955172777</span>  
            </div>
            <div class="col-4">
              <span class="sub-email">Email:- support@safenfast.in</span>  
            </div>
            <div class="col-4 align-right">
              <span class="sub-website">Website : www.safenfast.in</span>    
            </div>
          </div>
          <hr style="margin: 5px;">

        </div>
      </div>
    </header>

    <main>
      <section id="content-wrapper" style="margin:0;padding: 0;">
        <div class="container-fluid">
          <form id="billForm">
            <div class="row">
              <div class="col-8 quotation-fields">
                <div class="dflex">
                  <h6>To,</br>
                  Mr./Mrs./M/s </h6>
                  <h6 class="w100p"></br><input type="text" id="name" name="name" class="bdr-none w100p" placeholder="Name" ></h6> 
                </div>
                <div class="dflex">
                  <h6>Address .</h6>
                  <h6 class="w100p"></br><input type="text" id="add1" name="address-1" class="bdr-none w100p" placeholder="Address" ></h6> 
                </div>
                 <div class="dflex">
                  <h6 style="color:white;">Address .</h6>
                  <h6 class="w100p"></br><input type="text" name="address-1" id="add2" class="bdr-none w100p" placeholder="Address" ></h6> 
                </div>
                 <div class="dflex" style="justify-content: normal;width: 100%;">
                    <div class="dflex">
                        <h6>From:</h6>
                        <h6 class="w100p">
                          <select class="bdr-none w100p" id="fromadd" name="from-add">
                            <option class="">Select from</option>
                            <?php 
                            $city_sql= "SELECT * from cities ORDER BY city ASC";
                            $city_query = mysqli_query($con,$city_sql);
                            while ($cities = mysqli_fetch_assoc($city_query)){
                              echo "<option value=".$cities['city'].">".$cities['city']."</option>";
                            }
                            ?>
                          </select>
                        </h6>
                    </div> 
                    <div class="dflex">
                      <h6> To:</h6>
                        <h6 class="w100p">
                          <select class="bdr-none w100p" id="toadd" name="to-add">
                            <option class="">Select to</option>
                            <?php 
                            $city_sql= "SELECT * from cities ORDER BY city ASC";
                            $city_query = mysqli_query($con,$city_sql);
                            while ($cities = mysqli_fetch_assoc($city_query)){
                              echo "<option value=".$cities['city'].">".$cities['city']."</option>";
                            }
                            ?>
                          </select>
                        </h6>
                    </div>
                    <div class="dflex">
                      <h6 style="width: 100%"> Contact No.:</h6>
                        <h6 class="w100p">
                          <input type="number" name="contact no" id="contact" class ="bdr-none w100p">
                        </h6>
                    </div>
                    <div class="dflex" style="width:40%">
                      <h6 style="">Email:</h6>
                        <h6 class="w100p">
                          <input type="email" name="" id="email" class ="bdr-none w100p">
                        </h6>
                    </div>
                </div>
              </div>
              <div class="col-4 pd-l70">
               <h2>QUOTATION</h2>
               <div class="dflex">
                 <h6>Govt Regd. No. :</h6>
                 <h6></h6>
               </div>
               <div class="dflex">
                 <h6>GSTIN No.:</h6>
                 <h6>20AMGPV8554R1Z5</h6>
               </div>
               <div class="dflex">
                 <h6>No. :</h6>
                 <h6><input class="bdr-none" disabled id="no" value="<?php echo $consign_no; ?>" type="text" name="no"></h6>
               </div>
               <div class="dflex">
                 <h6>Date :</h6>
                 <h6><input class="bdr-none" id="date" type="date" name="date"></h6>
               </div>
             </div>
           </div>
           <!-- quotation -->
         </section>

         <section id="table-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-4">
                <table class="table table-bordered table-sm tbl">
                  <thead>
                    <tr style="text-align:center;">
                      <th scope="col" width="10%">Sl. No.</th>
                      <th scope="col" width="40%" >PARTICULARS</th>
                      <th scope="col" width="10%">Qty.</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">1</th>
                      <td><input type="text" id="n1" name="s1_name1" class="border-none tc"></td>
                      <td><input type="number" id="q1" name="s1_qty1" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">2</th>
                      <td><input id="n2" type="text" name="s2_name2" class="border-none tc"></td>
                      <td><input id="q2" type="number" name="s2_qty2" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">3</th>
                      <td><input id="n3" type="text" name="s3_name3" class="border-none tc"></td>
                      <td><input id="q3" type="number" name="s3_qty3" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">4</th>
                      <td><input id="n4" type="text" name="s4_name4" class="border-none tc"></td>
                      <td><input id="q4" type="number" name="s4_qty4" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">5</th>
                      <td><input id="n5" type="text" name="s5_name5" class="border-none tc"></td>
                      <td><input id="q5" type="number" name="s5_qty5" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">6</th>
                      <td><input id="n6" type="text" name="s6_name6" class="border-none tc"></td>
                      <td><input id="q6" type="number" name="s6_qty6" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">7</th>
                      <td><input id="n7" type="text" name="s7_name7" class="border-none tc"></td>
                      <td><input id="q7" type="number" name="s7_qty7" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">8</th>
                      <td><input id="n8" type="text" name="s8_name8" class="border-none tc"></td>
                      <td><input id="q8" type="number" name="s8_qty8" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">9</th>
                      <td><input id="n9" type="text" name="s9_name9" class="border-none tc"></td>
                      <td><input id="q9" type="number" name="s9_qty9" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">10</th>
                      <td><input id="n10" type="text" name="s10_name10" class="border-none tc"></td>
                      <td><input id="q10" type="number" name="s10_qty10" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">11</th>
                      <td><input id="n11" type="text" name="s11_name11" class="border-none tc"></td>
                      <td><input id="q11" type="number" name="s11_qty11" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">12</th>
                      <td><input id="n12" type="text" name="s12_name12" class="border-none tc"></td>
                      <td><input id="q12" type="number" name="s12_qty12" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">13</th>
                      <td><input id="n13" type="text" name="s13_name13" class="border-none tc"></td>
                      <td><input id="q13" type="number" name="s13_qty13" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">14</th>
                      <td><input id="n14" type="text" name="s14_name14" class="border-none tc"></td>
                      <td><input id="q14" type="number" name="s14_qty14" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">15</th>
                      <td><input id="n15" type="text" name="s15_name15" class="border-none tc"></td>
                      <td><input id="q15" type="number" name="s15_qty15" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">16</th>
                      <td><input id="n16" type="text" name="s16_name16" class="border-none tc"></td>
                      <td><input id="q16" type="number" name="s16_qty16" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">17</th>
                      <td><input id="n17" type="text" name="s17_name17" class="border-none tc"></td>
                      <td><input id="q17" type="number" name="s17_qty17" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">18</th>
                      <td><input id="n18" type="text" name="s18_name18" class="border-none tc"></td>
                      <td><input id="q18" type="number" name="s18_qty18" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">19</th>
                      <td><input id="n19" type="text" name="s19_name19" class="border-none tc"></td>
                      <td><input id="q19" type="number" name="s19_qty19" class="border-none tc"></td>
                    </tr>
                  </tbody>
                </table>        
              </div>
              <div class="col-4">
                <table class="table table-bordered table-sm tbl">
                  <thead>
                    <tr style="text-align:center;">
                      <th scope="col" width="10%" >Sl. No.</th>
                      <th scope="col" width="40%" >PARTICULARS</th>
                      <th scope="col" width="10%" >Qty.</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">20</th>
                      <td><input id="n20" type="text" name="s23_name23" class="border-none tc"></td>
                      <td><input id="q20" type="number" name="s23_qty23" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">21</th>
                      <td><input id="n21" type="text" name="s24_name24" class="border-none tc"></td>
                      <td><input id="q21" type="number" name="s24_qty24" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">22</th>
                      <td><input id="n22" type="text" name="s25_name25" class="border-none tc"></td>
                      <td><input id="q22" type="number" name="s25_qty25" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">23</th>
                      <td><input id="n23" type="text" name="s26_name26" class="border-none tc"></td>
                      <td><input id="q23" type="number" name="s26_qty26" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">24</th>
                      <td><input id="n24" type="text" name="s27_name27" class="border-none tc"></td>
                      <td><input id="q24" type="number" name="s27_qty27" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">25</th>
                      <td><input id="n25" type="text" name="s28_name28" class="border-none tc"></td>
                      <td><input id="q25" type="number" name="s28_qty28" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">26</th>
                      <td><input id="n26" type="text" name="s29_name29" class="border-none tc"></td>
                      <td><input id="q26" type="number" name="s29_qty29" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">27</th>
                      <td><input id="n27" type="text" name="s30_name30" class="border-none tc"></td>
                      <td><input id="q27" type="number" name="s30_qty30" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">28</th>
                      <td><input id="n28" type="text" name="s31_name31" class="border-none tc"></td>
                      <td><input id="q28" type="number" name="s31_qty31" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">29</th>
                      <td><input id="n29" type="text" name="s32_name32" class="border-none tc"></td>
                      <td><input id="q29" type="number" name="s32_qty32" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">30</th>
                      <td><input id="n30" type="text" name="s33_name33" class="border-none tc"></td>
                      <td><input id="q30" type="number" name="s33_qty33" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">31</th>
                      <td><input id="n31" type="text" name="s34_name34" class="border-none tc"></td>
                      <td><input id="q31" type="number" name="s34_qty34" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">32</th>
                      <td><input id="n32" type="text" name="s35_name35" class="border-none tc"></td>
                      <td><input id="q32" type="number" name="s35_qty35" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">33</th>
                      <td><input id="n33" type="text" name="s36_name36" class="border-none tc"></td>
                      <td><input id="q33" type="number" name="s36_qty36" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">34</th>
                      <td><input id="n34" type="text" name="s37_name37" class="border-none tc"></td>
                      <td><input id="q34" type="number" name="s37_qty37" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">35</th>
                      <td><input id="n35" type="text" name="s38_name38" class="border-none tc"></td>
                      <td><input id="q35" type="number" name="s38_qty38" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">36</th>
                      <td><input id="n36" type="text" name="s39_name39" class="border-none tc"></td>
                      <td><input id="q36" type="number" name="s39_qty39" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">37</th>
                      <td><input id="n37" type="text" name="s40_name40" class="border-none tc"></td>
                      <td><input id="q37" type="number" name="s40_qty40" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">38</th>
                      <td><input id="n38" type="text" name="s41_name41" class="border-none tc"></td>
                      <td><input id="q38" type="number" name="s41_qty41" class="border-none tc"></td>
                    </tr>
                  </tbody>
                </table> 
              </div>
              <div class="col-4">
                <table class="table table-bordered table-sm tbl">
                  <thead>
                    <tr style="text-align:center;">
                      <th scope="col" width="10%">Sl. No.</th>
                      <th scope="col" width="40%">PARTICULARS</th>
                      <th scope="col" width="10%">Qty.</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">39</th>
                      <td><input id="n39" type="text" name="s45_name45" class="border-none tc"></td>
                      <td><input id="q39" type="number" name="s45_qty45" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">40</th>
                      <td><input id="n40" type="text" name="s46_name46" class="border-none tc"></td>
                      <td><input id="q40" type="number" name="s46_qty46" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">41</th>
                      <td><input id="n41" type="text" name="s47_name47" class="border-none tc"></td>
                      <td><input id="q41" type="number" name="s47_qty47" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">42</th>
                      <td><input id="n42" type="text" name="s48_name48" class="border-none tc"></td>
                      <td><input id="q42" type="number" name="s48_qty48" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">43</th>
                      <td><input id="n43" type="text" name="s49_name49" class="border-none tc"></td>
                      <td><input id="q43" type="number" name="s49_qty49" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">44</th>
                      <td><input id="n44" type="text" name="s50_name50" class="border-none tc"></td>
                      <td><input id="q44" type="number" name="s50_qty50" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">45</th>
                      <td><input id="n45" type="text" name="s51_name51" class="border-none tc"></td>
                      <td><input id="q45" type="number" name="s51_qty51" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">46</th>
                      <td><input id="n46" type="text" name="s52_name52" class="border-none tc"></td>
                      <td><input id="q46" type="number" name="s52_qty52" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">47</th>
                      <td><input id="n47" type="text" name="s53_name53" class="border-none tc"></td>
                      <td><input id="q47" type="number" name="s53_qty53" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">48</th>
                      <td><input id="n48" type="text" name="s54_name54" class="border-none tc"></td>
                      <td><input id="q48" type="number" name="s54_qty54" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">49</th>
                      <td><input id="n49" type="text" name="s55_name55" class="border-none tc"></td>
                      <td><input id="q49" type="number" name="s55_qty55" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">50</th>
                      <td><input id="n50" type="text" name="s56_name56" class="border-none tc"></td>
                      <td><input id="q50" type="number" name="s56_qty56" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">51</th>
                      <td><input id="n51" type="text" name="s57_name57" class="border-none tc"></td>
                      <td><input id="q51" type="number" name="s57_qty57" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">52</th>
                      <td><input id="n52" type="text" name="s58_name58" class="border-none tc"></td>
                      <td><input id="q52" type="number" name="s58_qty58" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">53</th>
                      <td><input id="n53" type="text" name="s59_name59" class="border-none tc"></td>
                      <td><input id="q53" type="number" name="s59_qty59" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">54</th>
                      <td><input id="n54" type="text" name="s60_name60" class="border-none tc"></td>
                      <td><input id="q54" type="number" name="s60_qty60" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">55</th>
                      <td><input id="n55" type="text" name="s61_name61" class="border-none tc"></td>
                      <td><input id="q55" type="number" name="s61_qty61" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">56</th>
                      <td><input id="n56" type="text" name="s62_name62" class="border-none tc"></td>
                      <td><input id="q56" type="number" name="s62_qty62" class="border-none tc"></td>
                    </tr>
                    <tr>
                      <td scope="row">57</th>
                      <td><input id="n57" type="text" name="s63_name63" class="border-none tc"></td>
                      <td><input id="q57" type="number" name="s63_qty63" class="border-none tc"></td>
                    </tr>
                  </tbody>
                </table> 
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-7 comments">
                <h3>Comments :</h3>
                <div class="dflex">
                  <h6 style="width:40%;">From Floor</h6>
                  <h6 class="w100p">
                    <input type="text" class="bdr-none w100p" id="from-floor" placeholder="">
                  </h6>
                </div>

                <div class="dflex">
                  <h6 style="width:40%;">To Floor</h6>
                  <h6 class="w100p">
                    <input type="text" class="bdr-none w100p" id="to-floor" placeholder="">
                  </h6>
                </div>

                <div class="dflex">
                  <h6 style="width:40%;">How many days Reqd. for packing</h6>
                  <h6 class="w100p">
                    <input type="text" class="bdr-none w100p" id="packing_date_no">
                  </h6>
                </div>

                <div class="dflex">
                  <h6 style="width:40%;">Packing Date & time</h6>
                  <h6 class="w100p">
                    <input type="date" class="bdr-none w100p" id="packing_date">
                  </h6>
                </div>

                 <div class="dflex">
                  <h6 style="width:40%;">Date of Loading</h6>
                  <h6 class="w100p">
                    <input type="date" class="bdr-none w100p" placeholder="" id="loading_date">
                  </h6>
                </div>

                 <div class="dflex">
                  <h6 style="width:40%;">Lorry Type</h6>
                  <h6 class="w100p">
                    <input type="text" class="bdr-none w100p" id="lorry_type">
                  </h6>
                </div>

                <div class="dflex">
                  <h6 style="width:40%;">Loading Place is in "No Entry Zone"</h6>
                  <span>
                    <input type="radio" value="Yes" name="noentry_checked">&nbsp;Yes&nbsp;
                    <input type="radio" value="No" name="noentry_checked">&nbsp;no
                  </span>
                </div>

                <div class="dflex">
                  <h6 style="width:40%;">At What Distance Lorry will stand at loading place</h6>
                  <h6 class="w100p">
                    <input type="number" class="bdr-none w100p" id="loading_diatance" placeholder="" >
                  </h6>
                </div>

                <div class="dflex">
                  <h6 style="width:40%;">At What Distance Lorry will stand at uploading place</h6>
                  <h6 class="w100p">
                    <input type="number" class="bdr-none w100p" id="uploading_diatance" placeholder="">
                  </h6>
                </div>

                 <div class="dflex">
                  <h6 style="width:40%;">Packing Requirement on Packing Day</h6>
                  <h6 class="w100p">
                    <input type="text" class="bdr-none w100p" id="packing_requirement">
                  </h6>
                </div>
               
               <div class="dflex">
                  <h6 style="width:40%;">Labour Requirement on Loading Day</h6>
                  <h6 class="w100p">
                    <input type="text" class="bdr-none w100p" id="labour_requirement">
                  </h6>
                </div>

                <div class="dflex">
                  <h6 style="width:40%;">Payment Mode</h6>
                  <div style="width:100%">
                    <select class="bdr-none w100p" id="payment_mode">
                      <option disabled>Select Payment Mode</option>
                      <option >Credit Card</option>
                      <option >Debit Card</option>
                      <option >Cash on Delivery</option>
                    </select>
                  </div>
                </div>

                <div class="dflex">
                  <h6 style="width:40%;">Advance / Token Money Paid : Rs. </h6>
                  <h6 class="w100p">
                    <input type="text" class="bdr-none w100p" id="adv_token">
                  </h6>
                </div>

                <div class="dflex">
                  <h6 style="width:40%;">Amount Due : Rs. </h6>
                  <h6 class="w100p">
                    <input type="text" class="bdr-none w100p" id="amt_due">
                  </h6>
                </div>
              </div>
              <div class="col-5 charges">
                <table class="table table-bordered table-sm border-danger tbl">
                  <thead>
                    <tr>
                      <th scope="col" class="">Services</th>
                      <th scope="col" class="tc">Charges</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-align:left">Packing</td>
                      <td><input type="number" onchange="getQuotation()" value="0" id="charge_packing_no" class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="text-align:left">Transportation</td>
                      <td><input type="number" onchange="getQuotation()" value="0" id="charge_transportation" class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="text-align:left">Loading</td>
                      <td><input type="number" onchange="getQuotation()" value="0" id="charge_loading" class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="text-align:left">Uploading</td>
                      <td><input type="number" onchange="getQuotation()" value="0" id="charge_uploading" class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="text-align:left">Unpacking & Adjusting</td>
                      <td><input type="number" onchange="getQuotation()" value="0" id="charge_unpacking" class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="text-align:left">Escorting</td>
                      <td><input type="number" onchange="getQuotation()" value="0" id="charge_escorting" class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="text-align:left">Storage</td>
                      <td><input type="number" onchange="getQuotation()" value="0" id="charge_storage" class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="background-color: firebrick;color: white;text-align:left">Sub - Total</td>
                      <td style="background-color:firebrick;"><input style="background-color: firebrick;color: white;border: none;font-weight: 900;" type="number" disabled value="0" id="charge_sub_total" class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="text-align:left">CSGT <input onchange="cGst()" type="number" value="0" id="csgtp" class="bdr-none txtr">%</td>
                      <td><input type="number" value="0" id="csgt" disabled class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="text-align:left">SGST <input onchange="sGst()" type="number" value="0" id="sgstp" class="bdr-none txtr">%</td>
                      <td><input type="number" value="0" id="sgst" disabled class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="text-align:left">Insurance (Basic / All Risk)</td>
                      <td><input type="number" onchange="grandTotal()" value="0" id="insurance" class="bdr-none txtr"></td>
                    </tr>
                    <tr>
                      <td style="background-color: firebrick;color: white;text-align:left">Grand Total</td>
                      <td style="background-color:firebrick;"><input style="background-color: firebrick;color: white;border: none;font-weight: 900;" disabled type="number" value="0" id="grand_total" class="bdr-none txtr"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-3">
                <div id="signChild"></div>
                <input type="hidden" name="" id="partySignImg" value="">
                <p>
                  <button type="button" id="partySign">Party Signature</button>
                </p>  
              </div>
              <div class="col-sm-4 bdr ">
                <p>Rs. in Words <input type="text" id="rs" class="bdr-none w100p"></br>
                  </p>
              </div>
              <div class="col-sm-4 bdr ml5">
                <p>For SAFE & FAST</p>
                <div id="snfsign"></div>
                  <input type="hidden" id="officeSignImg" value="">
                  <button type="button" id="officeSign">
                    SafeNFast Signature
                  </button>
                <h6>Executive</h6>
              </div>
            </div>
            
          </div>
        </section>


      </main>
      <div>
        <!-- sign one -->
      <div class="flex-row" id="sign">
         <div class="wrapper">
             <canvas id="signature-pad" width="400" height="200"></canvas>
         </div>
         <div class="clear-btn">
             <button id="clear" type="button"><span> Clear </span></button>
              <button id="save" type="button" class="btn btn-primary"><span> SAVE </span></button>
         </div>
      </div>
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
      <footer>
        <div class="container-fluid">
          <div class="row">
            <div class="col-2 left-side">
              
            </div>
            <div class="col-6">
              <p>Service all over India</p>
            </div>
            <div class="col-4">
              <p> We are Provide IBA Approved Bill </p>  
            </div>
          </div>
        </div>

        <div>
          <a href="quotationlist.php">
            <button type="button" class="btn btn-primary">Back</button>
          </a>
          <button class="btn btn-success" type="button" name="btn" onclick="quotation();">Generate Quotation</button>
        </div>
      </form>
    </footer>



    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- custom js -->
    <script src="assets/script.js"></script>

    <script src="assets/js/quotation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

  $(document).ready(function(){
    $('#sign').hide(); 
    $('#sign1').hide(); 

    let pSign = $('#partySign').click(function(){
      // console.log("partySign");

      $('#sign').show();
      // signature part
      let mycanvas = document.getElementById("signature-pad");

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

       document.getElementById("clear").addEventListener('click', function(){
        signaturePad.clear();
       })

       document.getElementById("save").addEventListener('click', function(){
        var img    = mycanvas.toDataURL("image/png");

        // document.write('<img src="'+img+'"/>');

        const base64Canvas = mycanvas.toDataURL("image/png").split(';base64,')[1];
        
        sendPSignToServer(base64Canvas);
       })

       function sendPSignToServer(sig){
        $.ajax({
        url : "thumbnail-uploader-content.php",
        method : "POST",
        data : {
          'thumbnail':sig
          },
          success:function(r){
          console.log(r);
          let x = jQuery.parseJSON(r);
          // console.log(x.img_name);
          $('#partySignImg').val(x.img_name);
          let img_field = "<img src=upload/"+x.img_name+" alt='' width='200' height='100'>";
          $('#signChild').html(img_field);
          $('#sign').hide();
          
          }
        });
      }
    });

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
          console.log(r);
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

      
   </script>
</body>

  </html>