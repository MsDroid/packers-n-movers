<?php
include 'config.php';
if (isset($_GET['id']) & $_GET['id'] != '') {
  $id = $_GET['id'];
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SafeNFast Confirmation Link</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 
  <div class="content-wrapper">
    <div class="row w-100">
      <div class="col-lg-6 mx-auto user-create">
        <div class="auth-form-light text-left p-5">
          <div class="brand-logo text-center" style="margin-bottom: 15px;">
            <img src="logo.png" alt="logo" style="width:50px";>
          </div>
          <h6 class="font-weight-light" style="text-align: center;margin:0">Create Confirmation Link</h6>
          <form class="pt-3">
            <div class="form-group">
              <label>Title</label>
              <input type="text" class="form-control form-control-lg" id="title" >
            </div>
            <div class="form-group">
              <label>Description <span style="color:red;">(For SafeNFast)</span></label>
              <textarea class="form-control form-control-lg" id="desc"></textarea>
            </div>
            <div class="form-group">
              <label>Consignment No.</label>
              <input type="text" class="form-control form-control-lg" id="cno" >
            </div>
            <div class="form-group">
              <label>Invoice No</label>
              <input type="text" class="form-control form-control-lg" id="invoice" >
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control form-control-lg" id="email" >
            </div>
            <div class="form-group">
              <label>Contact No</label>
              <input type="number" class="form-control form-control-lg" id="contact" pattern="[o-9]" >
            </div>
            <div class="form-group">
              <label>Remarks <span style="color:red;">(For Client)</span></label>
              <textarea class="form-control form-control-lg" id="remark" disabled></textarea>
            </div>
            <div class="form-group">
              <label>Are you satisfied? <span style="color:red;">(For Client)</span></label>
              <select class="form-control" disabled>
                <option >Select your opinion</option>
                <option>Satisfied</option>
                <option>Unsatisfied</option>
              </select>
            </div>
            <div class="mt-3" style="margin-bottom: 10px;">
              <button type="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="signup-form" onclick="adlink();" href="">Send</button>
            </div>
            <!--  <span style="margin-right:10px;">Already have an account</span><a href="login.php">Click here..</a> -->
          </form>
          <input type="hidden" id="id" value="<?php echo $id; ?>">
        </div>
      </div>
    </div>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $.ajax({
      url: "api/update_link.php",
      method : "POST",
      data : dataString,
      success:function(r){
              // console.log(r);
              if(true){
                alert("Mail Send!");
                insertData(dataString);
                msgSend(contact);
                window.location.href="address.php";
              }else{
                alert("Somthing Wrong Please Try Again!");
              }
            })



    function adlink(){
      let title = $('#title').val();
      let desc = $('#desc').val();
      let cno = $('#cno').val();
      let invoice = $('#invoice').val();
    // let remark = $('#remark').val();
    let email = $('#email').val();
    let contact = $('#contact').val();



    if (title != '' && desc != '' && cno != '' && invoice != '' && email != '' && contact != '') {

      let dataString = 'title=' + title + '&desc=' + desc + '&cno=' + cno + '&invoice=' + invoice +  '&email=' + email + '&contact=' + contact;

      $.ajax({
        url: "api/update_link.php",
        method : "POST",
        data : dataString,
        success:function(r){
              // console.log(r);
              if(true){
                alert("Mail Send!");
                insertData(dataString);
                msgSend(contact);
                window.location.href="address.php";
              }else{
                alert("Somthing Wrong Please Try Again!");
              }
            }
          })
    }else{
      alert("Please Enter title, desc, consign no,invoice no!");
    }
    
  }






</script>


</body>
</html>