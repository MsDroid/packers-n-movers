<?php 
session_start();

$title = $_POST['title'];
$desc = $_POST['desc'];
$cno = $_POST['cno'];
$invoice = $_POST['invoice'];
// $remark = $_POST['remark'];
$email = $_POST['email'];
$contact = $_POST['contact'];
// $msg = $_POST['msg'];


$msg = '
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-3">
  <h2>Consignement Confirmation From SafeNFast</h2>
  
    <table class="table">
  
  <tbody>
     <tr>
      <th scope="col" >Title :</th>
      <th scope="col" >'.$_POST['title'].'</th>
    </tr>
    <tr>
      <th scope="row">Description :</th>
      <td>'.$_POST['desc'].'</td>
    </tr>
    <tr>
      <th scope="row">Consignement No :</th>
      <td>'.$_POST['cno'].'</td>
    </tr>
    <tr>
      <th scope="row">Invoice No :</th>
      <td>'.$_POST['invoice'].'</td>
    </tr>
    <tr>
      <th scope="row">Email : </th>
      <td>'.$_POST['email'].'</td>
    </tr>
    <tr>
      <th scope="row">Contact :</th>
      <td>'.$_POST['contact'].'</td>
    </tr>
    
  </tbody>
</table>
</div>

</body>
</html>
'; 


// echo "<pre>";
// print_r($_POST);


if( isset($_POST['email']) && isset($_POST['contact']) )

{

//Email OTP


    $to = $email;

    $subject = "Dear, There is a message from SafeNFast.in";

    $message = $msg;


// Always set content-type when sending HTML email

    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers

    $headers .= 'From: <support@safenfast.in>' . "\r\n";


    mail($to,$subject,$message,$headers); 

    echo "true";
    ?>



    <!-- <!DOCTYPE html>

    <html>

    <head>

        <title>Message Sent</title>

    </head>

    <body>

        <center>
            <br><br>
            <img src="http://safenfast.in/assets/images/logo.png" style="width: 8%;"><br>
            <h1>Thank You <?php echo $_POST['name'] ?>,</h1>
            <h2>Your Message has been sent. We'll get in touch with you soon.</h2> <br> 
            <a href="index.php" style="border: 1px solid #ec5569; border-radius: 3px;color: #ec5569;padding: 8px;text-decoration: none;">
                Back to home
            </a>
        </center>

    </body>

    </html>

 -->


<?php } else{ echo "false"; ?> 

    <script type="text/javascript">window.location.href="index.php";</script> 
    <?php  } ?>



