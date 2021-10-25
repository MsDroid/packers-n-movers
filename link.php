<?php 
include 'config.php';
include 'include/header.php'; ?>
      
         <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <!-- <h4 class="card-title">All Users</h4> -->
                </div>
                <div class="col-sm-6">
                        <a href="add_link.php"><button type="button" class="btn btn-primary adUserbtn">Create</button></a>        
                </div>
              </div>
              
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Invoice no</th>
                            <th>Consignment no</th>
                            <th>Status</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Remark</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
                        $sql = "select * from link";
                        $query = mysqli_query($con, $sql);
                        $count = mysqli_num_rows($query);
                        if ($count > 0 ) { 
                          $n=1;
                          while($row = mysqli_fetch_assoc($query)){ ?>
                              <tr>
                                <td><?php echo $n; ?></td>
                                <td><?php echo $row['invoice_no']; ?></td>
                                <td><?php echo $row['c_no']; ?></td>
                               <td>
                                  <?php 
                                    ($row['status'] == 0)? echo "<span style='color:yellow;'>Pending</span>"; : echo "<span style='color:green'>confirmed</span>"?>
                                      
                                </td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['remarks']; ?></td>
                                
                                <td>
                                  <a href="api/delete_user.php?id=<?php echo $row['id']; ?>">
                                    <button class="btn btn-outline-primary">Delete</button>  
                                  </a>
                                  
                                </td>
                              </tr>
                          <?php $n++; }
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                                </div>
        
<?php include 'include/footer.php'; ?>