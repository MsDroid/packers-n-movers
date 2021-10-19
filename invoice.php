<?php 
include 'config.php';
include 'include/header.php'; ?>
      
         <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6"><h4 class="card-title"></h4></div>
                <div class="col-sm-6">
                        <a href="add_invoice.php"><button type="button" class="btn btn-primary adUserbtn">create</button></a>        
                </div>
              </div>
              
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <!-- <th>State</th> -->
                            <th>Sl no</th>
                            <th>Date</th>
                            <th>Messrs</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
                        $sql = "select * from invoices";
                        $query = mysqli_query($con, $sql);
                        $count = mysqli_num_rows($query);
                        if ($count > 0 ) { 
                          $n=1;
                          while($row = mysqli_fetch_assoc($query)){ ?>
                              <tr>
                                <td><?php echo $n; ?></td>
                               <td><?php echo $row['slno']; ?></td>
                                <td><?php echo $row['cdate']; ?></td>
                                <td><?php echo $row['messrs']; ?></td>
                                <td>
                                  <a href="view_invoice.php?id=<?php echo $row['id']; ?>">
                                    <button class="btn btn-outline-primary">View</button>  
                                  </a>
                                  <a href="edit_invoice.php?id=<?php echo $row['id']; ?>">
                                    <button class="btn btn-outline-primary">Edit</button>  
                                  </a>
                                  <!-- <a href="api/delete_city.php?id=<?php echo $row['id']; ?>">
                                    <button class="btn btn-outline-primary">Delete</button>  
                                  </a> -->
                                  
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