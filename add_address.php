<?php include 'include/header.php'; ?>
      
        <div class="content-wrapper">
          <div class="row w-100">
          <div class="col-lg-6 mx-auto user-create">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center" style="margin-bottom: 15px;">
                <img src="logo.png" alt="logo" style="width:50px";>
              </div>
              <h6 class="font-weight-light" style="text-align: center;margin:0">Create Address</h6>
              <form class="pt-3">
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control form-control-lg" id="address" placeholder="Address"></textarea>
                </div>
                <div class="mt-3" style="margin-bottom: 10px;">
                  <button type="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="signup-form" onclick="adAddress();" href="">Add Address</button>
                </div>
               <!--  <span style="margin-right:10px;">Already have an account</span><a href="login.php">Click here..</a> -->
              </form>
            </div>
          </div>
        </div>
          
        </div>
        
<script>
  function adAddress(){
    let address = $('#address').val();

    $.ajax({
      url: "api/add_address.php",
      method : "POST",
      data : {'address':address},
      success:function(r){
        console.log(r);
        if(r == 'true'){
          alert("Successfully Created!");
          window.location.href="address.php";
        }else if (r == 'false'){
          alert("Somthing Wrong Please Try Again!");
        }
      }
    })
  }
</script>

<?php include 'include/footer.php'; ?>