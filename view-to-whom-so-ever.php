<?php 
include 'config.php';
session_start();

if(!isset($_SESSION['IS_LOGIN'])){
  header("location:login.php");
  
}


if (isset($_GET['id']) & $_GET['id'] != '') {
  $id = $_GET['id'];
  $tsql = "SELECT * from towhom where id = '{$id}'" ;
  $tquery = mysqli_query($con,$tsql);
  $trow = mysqli_fetch_assoc($tquery);
  }



?>
<!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <link href="assets/style.css" rel="stylesheet">
    <title>To Whom So Ever</title>
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
    canvas#signature-pad,canvas#signature-pad1,canvas#signature-pad2 {
        background: #fff;
        width: 100%;
        height: 100%;
        cursor: crosshair;
    }
    button#clear,button#clear1,button#clear2 {
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
    button#clear2 span{
        transform: rotate(90deg);
        display: block;
    }
  
    </style>
  </head>


<body>
  <header id="topbar" style="padding:0;">
    <div class="container-fluid">

      <div class="row">
          <!-- <div class="col-2 logo-wrapper">
           <img class="logo" src="logo.png" alt="logo" width="200" />
         </div> -->

         <div class="col-12 topbar-wrapper">
          <span><img class="logo" src="logo.png" alt="logo" width="200" /></span>
          <p>ALL OVER INDIA DOOR TO DOOR SERVICE</p>
          <h1>TO WHOM SOEVER IT CHART SHEET</h1>
          <span class="sub-heading">( Quick Delivery Anywhere In India )</span>
        </div>

      </div>
    </div>
  </header>

  <main>
    <section id="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <form id="billForm" action="bill_generate.php" method="POST">
          <p class="para-1">List of old and used household effects of Mr./Mrs. : &nbsp; 
            <input disabled type="text" name="name" value="<?php echo $erow['name']; ?>" id="name" class="bdr-none" placeholder="Name"> 
            being packed by
            <span class="c-name">SAFE & FAST <span><small>(Regd.no)</small></span></span></br> 
            <select disabled class="bdr-none" style="width: " name="site_address" id="saddress">
                      <option class="">Select from</option>
                      <?php 
                      $s_sql= "SELECT * from address ORDER BY address ASC";
                      $s_query = mysqli_query($con,$s_sql);
                      while ($cities = mysqli_fetch_assoc($s_query)){
                        if($trow['address'] == $cities['oaddress']){ ?>
                      
                          <option value="<?php echo $cities['address']; ?>" selected><?php echo $cities['address']; ?></option>";
                      
                      <?php }else{ ?>
                      
                          <option value="<?php echo $cities['address']; ?>" ><?php echo $cities['address'];?></option>";
                      
                      <?php }
                        // echo "<option value=".$cities['address'].">".$cities['address']."</option>";
                      }
                      ?>  </select>
            Handled over to for transportation 
            from <select disabled class="bdr-none w30p" name="from-add" id="from-add">
                      <option class="">Select from</option>
                      <?php 
                      $city_sql= "SELECT * from cities ORDER BY city ASC";
                      $city_query = mysqli_query($con,$city_sql);
                      while ($cities = mysqli_fetch_assoc($city_query)){
                        echo "<option value=".$cities['city'].">".$cities['city']."</option>";
                      }
                      ?>  </select>
                <!-- <input disabled type="text" id="from-add" placeholder="Addredd - 1" class="adr" required>  -->
            To <select disabled class="bdr-none w30p" name="from-add" id="to-add">
                      <option class="">Select to</option>
                      <?php 
                      $city_sql1= "SELECT * from cities ORDER BY city ASC";
                      $city_query1 = mysqli_query($con,$city_sql1);
                      while ($cities1 = mysqli_fetch_assoc($city_query1)){

                        echo "<option value=".$cities1['city'].">".$cities1['city']."</option>";
                      }
                      ?>   </select>
            <!-- <input disabled type="text" placeholder="Addredd - 2" class="adr" id="to-add" required>  -->
            vide their 
            Consignment Note No <input disabled type="text" id="note-no" value="<?php echo $erow['cnoteno']; ?>" class="bdr-none" placeholder="Consignment No.">
            dated 
            <input disabled type="date" value="" id="on-date" class="bdr-none" required>
            Contact No. 
            <input disabled type="number" value="" id="contact" class="bdr-none" required>
            Email <input disabled type="email" value="" id="email" class="bdr-none" required style="width: 20%;">
          </p>

            <p class="para-2">The goods and personal belonging are not most for sale and are having no commercial value, therefore
            exempted from all Taxes / Octroi, Vide Authority Act No.-2 Sectopm 1580 of the India Tolls Act - 1901.</p>
          </div>
        </div>
      </section>
      <section id="table-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <table class="table table-bordered table-sm tbl">
                <thead>
                  <tr style="text-align:center;">
                    <th scope="col" width="10%">Sl. No.</th>
                    <th scope="col" width="20%" >PARTICULARS</th>
                    <th scope="col" width="10%">Qty.</th>
                    <th scope="col" width="10%">Goods Value</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">1</th>
                    <td><input disabled id="n1" type="text" name="s1_name1" class="border-none tc"></td>
                    <td><input disabled id="q1" type="number" name="s1_qty1" class="border-none tc"></td>
                    <td><input disabled id="v1" type="number" name="s1_value1" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">2</th>
                    <td><input disabled id="n2" type="text" name="s2_name2" class="border-none tc"></td>
                    <td><input disabled id="q2" type="number" name="s2_qty2" class="border-none tc"></td>
                    <td><input disabled id="v2" type="number" name="s2_value2" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">3</th>
                    <td><input disabled id="n3" type="text" name="s3_name3" class="border-none tc"></td>
                    <td><input disabled id="q3" type="number" name="s3_qty3" class="border-none tc"></td>
                    <td><input disabled id="v3" type="number" name="s3_value3" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">4</th>
                    <td><input disabled id="n4" type="text" name="s4_name4" class="border-none tc"></td>
                    <td><input disabled id="q4" type="number" name="s4_qty4" class="border-none tc"></td>
                    <td><input disabled id="v4" type="number" name="s4_value4" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">5</th>
                    <td><input disabled id="n5" type="text" name="s5_name5" class="border-none tc"></td>
                    <td><input disabled id="q5" type="number" name="s5_qty5" class="border-none tc"></td>
                    <td><input disabled id="v5" type="number" name="s5_value5" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">6</th>
                    <td><input disabled id="n6" type="text" name="s6_name6" class="border-none tc"></td>
                    <td><input disabled id="q6" type="number" name="s6_qty6" class="border-none tc"></td>
                    <td><input disabled id="v6" type="number" name="s6_value6" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">7</th>
                    <td><input disabled id="n7" type="text" name="s7_name7" class="border-none tc"></td>
                    <td><input disabled id="q7" type="number" name="s7_qty7" class="border-none tc"></td>
                    <td><input disabled id="v7" type="number" name="s7_value7" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">8</th>
                    <td><input disabled id="n8" type="text" name="s8_name8" class="border-none tc"></td>
                    <td><input disabled id="q8" type="number" name="s8_qty8" class="border-none tc"></td>
                    <td><input disabled id="v8" type="number" name="s8_value8" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">9</th>
                    <td><input disabled id="n9" type="text" name="s9_name9" class="border-none tc"></td>
                    <td><input disabled id="q9" type="number" name="s9_qty9" class="border-none tc"></td>
                    <td><input disabled id="v9" type="number" name="s9_value9" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">10</th>
                    <td><input disabled id="n10" type="text" name="s10_name10" class="border-none tc"></td>
                    <td><input disabled id="q10" type="number" name="s10_qty10" class="border-none tc"></td>
                    <td><input disabled id="v10" type="number" name="s10_value10" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">11</th>
                    <td><input disabled id="n11" type="text" name="s11_name11" class="border-none tc"></td>
                    <td><input disabled id="q11" type="number" name="s11_qty11" class="border-none tc"></td>
                    <td><input disabled id="v11" type="number" name="s11_value11" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">12</th>
                    <td><input disabled id="n12" type="text" name="s12_name12" class="border-none tc"></td>
                    <td><input disabled id="q12" type="number" name="s12_qty12" class="border-none tc"></td>
                    <td><input disabled id="v12" type="number" name="s12_value12" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">13</th>
                    <td><input disabled id="n13" type="text" name="s13_name13" class="border-none tc"></td>
                    <td><input disabled id="q13" type="number" name="s13_qty13" class="border-none tc"></td>
                    <td><input disabled id="v13" type="number" name="s13_value13" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">14</th>
                    <td><input disabled id="n14" type="text" name="s14_name14" class="border-none tc"></td>
                    <td><input disabled id="q14" type="number" name="s14_qty14" class="border-none tc"></td>
                    <td><input disabled id="v14" type="number" name="s14_value14" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">15</th>
                    <td><input disabled id="n15" type="text" name="s15_name15" class="border-none tc"></td>
                    <td><input disabled id="q15" type="number" name="s15_qty15" class="border-none tc"></td>
                    <td><input disabled id="v15" type="number" name="s15_value15" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">16</th>
                    <td><input disabled id="n16" type="text" name="s16_name16" class="border-none tc"></td>
                    <td><input disabled id="q16" type="number" name="s16_qty16" class="border-none tc"></td>
                    <td><input disabled id="v16" type="number" name="s16_value16" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">17</th>
                    <td><input disabled id="n17" type="text" name="s17_name17" class="border-none tc"></td>
                    <td><input disabled id="q17" type="number" name="s17_qty17" class="border-none tc"></td>
                    <td><input disabled id="v17" type="number" name="s17_value17" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">18</th>
                    <td><input disabled id="n18" type="text" name="s18_name18" class="border-none tc"></td>
                    <td><input disabled id="q18" type="number" name="s18_qty18" class="border-none tc"></td>
                    <td><input disabled id="v18" type="number" name="s18_value18" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">19</th>
                    <td><input disabled id="n19" type="text" name="s19_name19" class="border-none tc"></td>
                    <td><input disabled id="q19" type="number" name="s19_qty19" class="border-none tc"></td>
                    <td><input disabled id="v19" type="number" name="s19_value19" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">20</th>
                    <td><input disabled id="n20" type="text" name="s20_name20" class="border-none tc"></td>
                    <td><input disabled id="q20" type="number" name="s20_qty20" class="border-none tc"></td>
                    <td><input disabled id="v20" type="number" name="s20_value20" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">21</th>
                    <td><input disabled id="n21" type="text" name="s21_name21" class="border-none tc"></td>
                    <td><input disabled id="q21" type="number" name="s21_qty21" class="border-none tc"></td>
                    <td><input disabled id="v21" type="number" name="s21_value21" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">22</th>
                    <td><input disabled id="n22" type="text" name="s22_name22" class="border-none tc"></td>
                    <td><input disabled id="q22" type="number" name="s22_qty22" class="border-none tc"></td>
                    <td><input disabled id="v22" type="number" name="s22_value22" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">23</th>
                    <td><input disabled id="n23" type="text" name="s23_name23" class="border-none tc"></td>
                    <td><input disabled id="q23" type="number" name="s23_qty23" class="border-none tc"></td>
                    <td><input disabled id="v23" type="number" name="s23_value23" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">24</th>
                    <td><input disabled id="n24" type="text" name="s24_name24" class="border-none tc"></td>
                    <td><input disabled id="q24" type="number" name="s24_qty24" class="border-none tc"></td>
                    <td><input disabled id="v24" type="number" name="s24_value24" class="border-none tc"></td>
                  </tr>
                </tbody>
              </table>        
            </div>
            <div class="col-6">
              <table class="table table-bordered table-sm tbl">
                <thead>
                  <tr style="text-align:center;">
                    <th scope="col">Sl. No.</th>
                    <th scope="col">PARTICULARS</th>
                    <th scope="col">Qty.</th>
                    <th scope="col">Goods Value</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">25</th>
                    <td><input disabled id="n25" type="text" name="s25_name25" class="border-none tc"></td>
                    <td><input disabled id="q25" type="number" name="s25_qty25" class="border-none tc"></td>
                    <td><input disabled id="v25" type="number" name="s25_value25" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">26</th>
                    <td><input disabled id="n26" type="text" name="s26_name26" class="border-none tc"></td>
                    <td><input disabled id="q26" type="number" name="s26_qty26" class="border-none tc"></td>
                    <td><input disabled id="v26" type="number" name="s26_value26" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">27</th>
                    <td><input disabled id="n27" type="text" name="s27_name27" class="border-none tc"></td>
                    <td><input disabled id="q27" type="number" name="s27_qty27" class="border-none tc"></td>
                    <td><input disabled id="v27" type="number" name="s27_value27" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">28</th>
                    <td><input disabled id="n28" type="text" name="s28_name28" class="border-none tc"></td>
                    <td><input disabled id="q28" type="number" name="s28_qty28" class="border-none tc"></td>
                    <td><input disabled id="v28" type="number" name="s28_value28" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">29</th>
                    <td><input disabled id="n29" type="text" name="s29_name29" class="border-none tc"></td>
                    <td><input disabled id="q29" type="number" name="s29_qty29" class="border-none tc"></td>
                    <td><input disabled id="v29" type="number" name="s29_value29" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">30</th>
                    <td><input disabled id="n30" type="text" name="s30_name30" class="border-none tc"></td>
                    <td><input disabled id="q30" type="number" name="s30_qty30" class="border-none tc"></td>
                    <td><input disabled id="v30" type="number" name="s30_value30" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">31</th>
                    <td><input disabled id="n31" type="text" name="s31_name31" class="border-none tc"></td>
                    <td><input disabled id="q31" type="number" name="s31_qty31" class="border-none tc"></td>
                    <td><input disabled id="v31" type="number" name="s31_value31" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">32</th>
                    <td><input disabled id="n32" type="text" name="s32_name32" class="border-none tc"></td>
                    <td><input disabled id="q32" type="number" name="s32_qty32" class="border-none tc"></td>
                    <td><input disabled id="v32" type="number" name="s32_value32" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">33</th>
                    <td><input disabled id="n33" type="text" name="s33_name33" class="border-none tc"></td>
                    <td><input disabled id="q33" type="number" name="s33_qty33" class="border-none tc"></td>
                    <td><input disabled id="v33" type="number" name="s33_value33" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">34</th>
                    <td><input disabled id="n34" type="text" name="s34_name34" class="border-none tc"></td>
                    <td><input disabled id="q34" type="number" name="s34_qty34" class="border-none tc"></td>
                    <td><input disabled id="v34" type="number" name="s34_value34" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">35</th>
                    <td><input disabled id="n35" type="text" name="s35_name35" class="border-none tc"></td>
                    <td><input disabled id="q35" type="number" name="s35_qty35" class="border-none tc"></td>
                    <td><input disabled id="v35" type="number" name="s35_value35" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">36</th>
                    <td><input disabled id="n36" type="text" name="s36_name36" class="border-none tc"></td>
                    <td><input disabled id="q36" type="number" name="s36_qty36" class="border-none tc"></td>
                    <td><input disabled id="v36" type="number" name="s36_value36" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">37</th>
                    <td><input disabled id="n37" type="text" name="s37_name37" class="border-none tc"></td>
                    <td><input disabled id="q37" type="number" name="s37_qty37" class="border-none tc"></td>
                    <td><input disabled id="v37" type="number" name="s37_value37" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">38</th>
                    <td><input disabled id="n38" type="text" name="s38_name38" class="border-none tc"></td>
                    <td><input disabled id="q38" type="number" name="s38_qty38" class="border-none tc"></td>
                    <td><input disabled id="v38" type="number" name="s38_value38" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">39</th>
                    <td><input disabled id="n39" type="text" name="s39_name39" class="border-none tc"></td>
                    <td><input disabled id="q39" type="number" name="s39_qty39" class="border-none tc"></td>
                    <td><input disabled id="v39" type="number" name="s39_value39" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">40</th>
                    <td><input disabled id="n40" type="text" name="s40_name40" class="border-none tc"></td>
                    <td><input disabled id="q40" type="number" name="s40_qty40" class="border-none tc"></td>
                    <td><input disabled id="v40" type="number" name="s40_value40" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">41</th>
                    <td><input disabled id="n41" type="text" name="s41_name41" class="border-none tc"></td>
                    <td><input disabled id="q41" type="number" name="s41_qty41" class="border-none tc"></td>
                    <td><input disabled id="v41" type="number" name="s41_value41" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">42</th>
                    <td><input disabled id="n42" type="text" name="s42_name42" class="border-none tc"></td>
                    <td><input disabled id="q42" type="number" name="s42_qty42" class="border-none tc"></td>
                    <td><input disabled id="v42" type="number" name="s42_value42" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">43</th>
                    <td><input disabled id="n43" type="text" name="s43_name43" class="border-none tc"></td>
                    <td><input disabled id="q43" type="number" name="s43_qty43" class="border-none tc"></td>
                    <td><input disabled id="v43" type="number" name="s43_value43" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">44</th>
                    <td><input disabled id="n44" type="text" name="s44_name44" class="border-none tc"></td>
                    <td><input disabled id="q44" type="number" name="s44_qty44" class="border-none tc"></td>
                    <td><input disabled id="v44" type="number" name="s44_value44" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">45</th>
                    <td><input disabled id="n45" type="text" name="s45_name45" class="border-none tc"></td>
                    <td><input disabled id="q45" type="number" name="s45_qty45" class="border-none tc"></td>
                    <td><input disabled id="v45" type="number" name="s45_value45" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">46</th>
                    <td><input disabled id="n46" type="text" name="s46_name46" class="border-none tc"></td>
                    <td><input disabled id="q46" type="number" name="s46_qty46" class="border-none tc"></td>
                    <td><input disabled id="v46" type="number" name="s46_value46" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">47</th>
                    <td><input disabled id="n47" type="text" name="s47_name47" class="border-none tc"></td>
                    <td><input disabled id="q47" type="number" name="s47_qty47" class="border-none tc"></td>
                    <td><input disabled id="v47" type="number" name="s47_value47" class="border-none tc"></td>
                  </tr>
                  <tr>
                    <td scope="row">48</th>
                    <td><input disabled id="n48" type="text" name="s48_name48" class="border-none tc"></td>
                    <td><input disabled id="q48" type="number" name="s48_qty48" class="border-none tc"></td>
                    <td><input disabled id="v48" type="number" name="s48_value48" class="border-none tc"></td>
                  </tr>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </section>

    </main>


    <footer>
      <div class="container-fluid bg-col">
        <div class="row">
          <div class="col-3 pt40">
            <div  class="left-side" style="text-align: center;">
              <div id="signChild">
                <img src="" alt="" width="200" height="100">
              </div>
              <span>
                <button  type="button" >
                Party Signature
              </button>
            </span>  
            </div>   
          </div>
          <div class="col-6">
            <p class="f-title">
              <select class="bdr-none" style="width: 100%;white-space: break-spaces;height: 50px;word-spacing: 1px;font-weight: 900;text-align: center;vertical-align: bottom;background-color: firebrick;color: white;" name="from-add" id="oaddress">
                      <option class="">Select Address</option>
                      <?php 
                      $city_sql= "SELECT * from address ORDER BY address ASC";
                      $city_query = mysqli_query($con,$city_sql);
                      while ($cities = mysqli_fetch_assoc($city_query)){
                       if($trow['address'] == $cities['oaddress']){ ?>
                      
                          <option value="<?php echo $cities['address']; ?>" selected><?php echo $cities['address']; ?></option>";
                      
                      <?php }else{ ?>
                      
                          <option value="<?php echo $cities['address']; ?>" ><?php echo $cities['address'];?></option>";
                      
                      <?php } 
                      }
                      ?>  </select>
            </p>
            <!-- <p class="f-desc">Near Nigam Park, Ranchi</p> -->
            <h5 class="">E-mail : support@safenfast.in</h5>
            <h5 class="">Website : www.safenfast.in</h5>
            <h5 class="">Contact : 9955797111 / 9955172777</h5>      
          </div>
          <div class="col-3 pt40">
            <div class="right-side" style="text-align: center;">
              <div id="snfsign">
                <img src="" alt="" width="200" height="100">
              </div>
              <span >
                <button  type="button">
                  SafeNFast Signature
                </button>
              </span>  
            </div>   
          </div>
        </div>
      </div>

      <div style="margin:20px;">
        <a href="to-whom-so-everlist.php">
          <button class="btn btn-primary" type="button">Back</button>
        </a>
        <input disabled type="hidden" name="id" value="<?php echo $id; ?>" id="id">

        <!-- <button class="btn btn-success" type="button" onclick="updateMyForm()" name="btn" id="updateBill">
          Update
        </button> -->
        
        
      </div>
    </form>
    </footer>
  


    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- custom js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/script.js"></script> -->

    <script type="text/javascript">
      //submit function
      

// update functions
//       function updateMyForm() {

//         // get all value 
//         var name = document.getElementById("name").value;
//         var fromAdd = document.getElementById("from-add").value;
//         var toAdd = document.getElementById("to-add").value;
//         var cNoteNo = document.getElementById("note-no").value;
//         var date = document.getElementById("on-date").value;
//         var id = document.getElementById("id").value;
        
//         if (name != '' & fromAdd != '' & toAdd != '' & cNoteNo != '' & date != '') {
//               let arr = [];

//               for (var i = 1 ; i <= 48; i++) {
//               arr.push(getDataFromRow(i));
//         }

//             // data = arr.toString();
//             let myjsondata = JSON.stringify(arr);

//             // console.log(myjsondata);
//             var dataString = 'name=' + name + '&fromAdd=' + fromAdd + '&toAdd=' + toAdd + '&cNoteNo=' + cNoteNo + '&date=' + date + '&id=' + id  + '&data=' + myjsondata;

//             $.ajax({
//               url : "api/update-to-whom.php",
//               method : "POST",
//               data : dataString,
//               success:function(r){
//                 // console.log(r);
//                 if(r == true){
//                   alert("Successfully updated!");
//                 // window.location.href='to-whom-so-everlist.php';  
//                 }else{
//                   alert(r);
//                 // alert("Somthing Wrong Please Try Again!!");
//                 }
                
//               }
//             })

//         }else{
//               alert("Please fill Name, Address, Consignment No and Date!");
//         }
// }


//       function getDataFromRow(index) {
        
//         let name = $("#n"+index).val();
//         let qty = $("#q"+index).val();
//         let fromvalue = $("#v"+index).val();

//         // console.log(name, qty, fromvalue);

//         return {
//           "name":name,
//           "quantity":qty,
//           "value":fromvalue
//         };
//       }

    </script>



<!-- fetch all data -->
    <script type="text/javascript">
         $.ajax({
              url : "api/get_to-whom_data.php",
              method : "POST",
              data : {'id':<?php echo $_GET['id']; ?>},
              success:function(r){
                
                let x = jQuery.parseJSON(r);
                
                // console.log(x);
                $("#name").val(x.name);
                // $("#saddress").val(x.oaddress);
                // $("#oaddress").val(x.faddress);
                $("#email").val(x.email);
                $("#contact").val(x.contact);

                 let psign = "<img src=upload/"+x.psign+" alt='' width='200' height='100'>";
                $("#signChild").html(psign);

                let osign = "<img src=upload/"+x.osign+" alt='' width='200' height='100'>";
                $("#snfsign").html(osign);
                
                $("#note-no").val(x.cnoteno);
                $("#on-date").val(x.date);
                $("#from-add").val(x.fromaddress);
                $("#to-add").val(x.toaddress);
                
                let o = jQuery.parseJSON(x.data);
                // console.log(o.length);
                for (let i = 0; i < o.length; i++)
                {
                  insertFetchData(o[i], i+1);
                }

                function insertFetchData(data,i){
                  // console.log(data,i);
                    $("#n"+i).val(data.name);
                    $("#q"+i).val(data.quantity);
                    $("#v"+i).val(data.value);
                }
                
              }
            })

    </script>
  </body>

  </html>