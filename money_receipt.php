<?php 
include 'config.php';
include 'include/header.php'; 
?>
      
         <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <div class="row">
               <!--  <div class="col-sm-6"><h4 class="card-title">To Whom So Ever List</h4></div> -->
                <div class="col-sm-12 btnalign">
                        <a href="create_receipt.php"><button type="button" class="btn btn-primary adUserbtn">Create</button></a>        
                </div>
              </div>
              
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Bank</th>
                            <th>Account No.</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $sql = "SELECT * from receipts";
                          $query = mysqli_query($con, $sql);
                          $count = mysqli_num_rows($query);
                          if ($count > 0) {
                            $n=1;
                            while($row = mysqli_fetch_assoc($query)){ ?>
                            <tr>
                                      <td><?php echo $n; ?></td>
                                      <td><?php echo $row['rf']; ?></td>
                                      <td><?php echo $row['ob']; ?></td>
                                      <td><?php echo $row['ao']; ?></td>
                                      <td><?php echo $row['amt']; ?></td>
                                      <td>
                                        <a href="view_receipt.php?id=<?php echo $row['id'];?>">
                                          <button class='btn btn-outline-info'>View</button>  
                                        </a>
                                        <a href="edit_receipt.php?id=<?php echo $row['id'];?>">
                                          <button class='btn btn-outline-primary'>Edit</button>  
                                        </a>
                                        <!-- <a href="pdf_bill.php?id=<?php echo $row['id'];?>">
                                          <button class='btn btn-outline-primary'>PDF</button>  
                                        </a> -->
                                      </td>
                                  </tr>
                            <?php  
                            $n++;
                              } 
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                                </div>
        
<?php include 'include/footer.php'; ?>