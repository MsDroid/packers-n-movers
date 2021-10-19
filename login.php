<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SAFE & FAST</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="sidebar-light">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center" style="margin-bottom: 15px;">
                <img src="assets/images/logo.png" alt="logo" style="width:100px";>
              </div>
              <h6 class="font-weight-light" style="text-align: center;margin:0">Sign in to continue.</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="Password">
                </div>
                <div class="mt-3" style="margin-bottom: 10px;">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="login-form" href="">SIGN IN</a>
                </div>
                <!-- <span style="margin-right:10px;">Don't have an account</span><a href="register.php">Click here..</a> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- plugins:js -->
  <script src="assets/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->

  <script>
    var loginBtn = document.getElementById('login-form');
    loginBtn.addEventListener("click",function(e){
        e.preventDefault();
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;

      if (email != '' && password != '') {
        dataString = 'email=' + email + '&password=' + password ;
        
        $.ajax({
          url:"api/login.php",
          method:"POST",
          data: dataString,
          success:function(r){
            if (r == 'true') {
                window.location.href='index.php';
            }else if(r == 'false'){
              alert("Please Enter Valid Details!!");
            }
          }
        });

      }else{
        alert("Please Enter Fields!!");
      }
    });
  </script>
</body>
</html>