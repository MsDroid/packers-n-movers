<?php include 'include/header.php'; ?>
      
        <div class="content-wrapper">
          <div class="row w-100">
          <div class="col-lg-6 mx-auto user-create">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center" style="margin-bottom: 15px;">
                <img src="logo.png" alt="logo" style="width:50px";>
              </div>
              <h6 class="font-weight-light" style="text-align: center;margin:0">Create City</h6>
              <form class="pt-3">
                <div class="form-group">
                  <label>State</label>
                  <input type="text" class="form-control form-control-lg" id="state" placeholder="State" required>
                </div>
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control form-control-lg" id="city" placeholder="city" required>
                </div>
                <div class="mt-3" style="margin-bottom: 10px;">
                  <button type="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" onclick="addCity();">Add City</button>
                </div>
              
              </form>
            </div>
          </div>
        </div>
          
        </div>
        
        <script>
          function addCity(){
    // e.preventDefault();
    var state = document.getElementById("state").value;
    var city = document.getElementById("city").value;
    

    if (state != '' && city != '') {
      dataString = 'state=' + state + '&city=' + city ; 
      
      $.ajax({
        url:"api/create_city.php",
        data: dataString,
        method: "POST",
        success:function(r){
          // console.log(r);
          if(r == 'true'){
            alert("Successfully Created!");
            // window.location.href="city.php";

          }else if(r == 'false'){
            alert('Somthing Wrong!');
            
          }else{
            alert('City Already Exist');
          }
        }
      });

    }else{
      alert("Please Enter Fields.");
    }

  }
 
        </script>

<?php include 'include/footer.php'; ?>