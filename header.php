<?php
session_start();

if(!isset($_SESSION['IS_LOGIN'])){
  header("location:login.php");
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
<link href="assets/css/jquery.signature.css" rel="stylesheet">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="asset/style.css">
  <!-- <link rel="stylesheet" href="asset/style.css"> -->
  <!-- custom css -->
  <link rel="stylesheet" href="assets/style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="assets/js/jquery.signature.js"></script>

<style>
  #sigimg{
    width: 200px;
    height: 100px;
    border: 1px solid #ccc;
  }
</style>
<script>
$(function() {
  var sig = $('#sig').signature();
 
  $('#clear').click(function() {
    sig.signature('clear');
  });
  
});
</script>
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
</head>
<body class="sidebar-light">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
          
        </ul>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo.png" alt="logo"/></a>
        </div>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name"><?php echo $_SESSION['username']; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-account-settings"></i>
                My Account
              </a>
            </div>
          </li>
          
          <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- bill generation -->
          <li class="nav-item">
            <a class="nav-link" href="bill-generationlist.php">
              <i class="mdi mdi-briefcase-check menu-icon"></i>
              <span class="menu-title">Bill Generation</span>
            </a>
          </li>
          <!-- quotation -->
          <li class="nav-item">
            <a class="nav-link" href="quotationlist.php">
              <i class="mdi mdi-animation menu-icon"></i>
              <span class="menu-title">Quotation</span>
            </a>
          </li>
          <!-- to whom so ever -->
          <li class="nav-item">
            <a class="nav-link" href="to-whom-so-everlist.php">
              <i class="mdi mdi-book-open menu-icon"></i>
              <span class="menu-title">To Whom So Ever</span>
            </a>
          </li>
          
          <!-- car condition -->
          <li class="nav-item">
            <a class="nav-link" href="car_condition_reportlist.php">
              <i class="mdi mdi-car menu-icon"></i>
              <span class="menu-title">Car Condition</span>
            </a>
          </li>
          <!-- ad users -->
          <li class="nav-item">
            <a class="nav-link" href="users.php">
              <i class="mdi mdi-account-plus text-primary menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <!-- Address -->
          <li class="nav-item">
            <a class="nav-link" href="address.php">
              <i class="mdi mdi-book-open menu-icon"></i>
              <span class="menu-title">Address</span>
            </a>
          </li>
          <!-- Money Receipt -->
          <li class="nav-item">
            <a class="nav-link" href="money_receipt.php">
              <i class="mdi mdi-clipboard-outline text-primary menu-icon"></i>
              <span class="menu-title">Money Receipt</span>
            </a>
          </li>
          <!-- Invoice Receipt -->
          <li class="nav-item">
            <a class="nav-link" href="invoice.php">
              <i class="mdi mdi-account-plus text-primary menu-icon"></i>
              <span class="menu-title">Invoice</span>
            </a>
          </li>
          <!-- City -->
          <li class="nav-item">
            <a class="nav-link" href="city.php">
              <i class="mdi mdi-google-maps text-primary menu-icon"></i>
              <span class="menu-title">City</span>
            </a>
          </li>
          <!-- Link -->
          <li class="nav-item">
            <a class="nav-link" href="link.php">
              <i class="mdi mdi-google-maps text-primary menu-icon"></i>
              <span class="menu-title">Share Link</span>
            </a>
          </li>
          <!-- logout -->
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="mdi mdi-logout text-primary menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">