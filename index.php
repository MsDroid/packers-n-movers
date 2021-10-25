<?php 
include 'config.php';
include 'include/header.php'; 

?>

<div class="content-wrapper">
  <div class="row"  style="display: none;">
<!-- bills -->
<?php 
$billsql = "select * from bills";
$billquery = mysqli_query($con, $billsql);
$bcount = mysqli_num_rows($billquery);
 ?>
          <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                        <div class="inner">
                                <h3><?php echo $bcount; ?></h3>
                                <p>All Bills</p>
                        </div>
                        <div class="icon">
                                <i class="mdi mdi-briefcase-check menu-icon"></i>
                        </div>
                </div>
        </div>
<!-- Quotation -->
<?php 
$qsql = "select * from quotations";
$qquery = mysqli_query($con, $qsql);
$qcount = mysqli_num_rows($qquery);
 ?>
        <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                        <div class="inner">
                                <h3><?php echo $qcount; ?></h3>
                                <p>All Quotation</p>
                        </div>
                        <div class="icon">
                                <i class="mdi mdi-animation menu-icon"></i>
                        </div>
                </div>
        </div>

<!-- to whome so ever -->
<?php 
$towhomsql = "select * from towhom";
$towhomquery = mysqli_query($con, $towhomsql);
$tcount = mysqli_num_rows($towhomquery);
 ?>
        <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                        <div class="inner">
                                <h3><?php echo $tcount; ?></h3>
                                <p>To Whom So</p>
                        </div>
                        <div class="icon">
                                <i class="mdi mdi-book-open menu-icon"></i>
                        </div>
                </div>
        </div>

<!-- car conditon -->
<?php 
$csql = "select * from carconditions";
$cquery = mysqli_query($con, $csql);
$ccount = mysqli_num_rows($cquery);
 ?>
<div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                        <div class="inner">
                                <h3><?php echo $ccount; ?></h3>
                                <p>Car Conditon</p>
                        </div>
                        <div class="icon">
                                <i class="mdi mdi-car menu-icon"></i>
                        </div>
                </div>
        </div>

<!-- Link send -->
<?php 
$csql = "select * from link";
$cquery = mysqli_query($con, $csql);
$ccount = mysqli_num_rows($cquery);
 ?>
<div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                        <div class="inner">
                                <h3><?php echo $ccount; ?></h3>
                                <p>Link </p>
                        </div>
                        <div class="icon">
                                <i class="mdi mdi-car menu-icon"></i>
                        </div>
                </div>
        </div>

<!-- users -->
<?php 
$usql = "select * from users";
$uquery = mysqli_query($con, $usql);
$ucount = mysqli_num_rows($uquery);
 ?>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $ucount; ?></h3>                
                <p>All User</p>
        </div>
        <div class="icon">
                <i class="mdi mdi-account-multiple"></i>
        </div>
</div>
</div>
</div>
</div>

<?php include 'include/footer.php'; ?>