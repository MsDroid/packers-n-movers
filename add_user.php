<?php include 'include/header.php'; ?>
      
        <div class="content-wrapper">
          <div class="row w-100">
          <div class="col-lg-6 mx-auto user-create">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center" style="margin-bottom: 15px;">
                <img src="logo.png" alt="logo" style="width:50px";>
              </div>
              <h6 class="font-weight-light" style="text-align: center;margin:0">Create User Account</h6>
              <form class="pt-3">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control form-control-lg" id="name" placeholder="Name" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control form-control-lg" id="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" autocomplete="off">
                </div>
                <div class="mt-3" style="margin-bottom: 10px;">
                  <button type="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="signup-form" onclick="adUser();" href="">Add User</button>
                </div>
               <!--  <span style="margin-right:10px;">Already have an account</span><a href="login.php">Click here..</a> -->
              </form>
            </div>
          </div>
        </div>
          
        </div>
        


<?php include 'include/footer.php'; ?>