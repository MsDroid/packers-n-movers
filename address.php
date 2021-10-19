<?php 
include 'config.php';
include 'include/header.php'; ?>
      
         <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6"><h4 class="card-title"></h4></div>
                <div class="col-sm-6">
                        <a href="add_address.php"><button type="button" class="btn btn-primary adUserbtn">Add Address</button></a>        
                </div>
              </div>
              
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th width="60%">Address</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
                        $sql = "select * from address";
                        $query = mysqli_query($con, $sql);
                        $count = mysqli_num_rows($query);
                        if ($count > 0 ) { 
                          $n=1;
                          while($row = mysqli_fetch_assoc($query)){ ?>
                              <tr>
                                <td><?php echo $n; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td>
                                  <a href="api/edit_address.php?id=<?php echo $row['id']; ?>">
                                    <button class="btn btn-outline-primary">Edit</button>  
                                  </a>
                                  <a href="api/delete_address.php?id=<?php echo $row['id']; ?>">
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