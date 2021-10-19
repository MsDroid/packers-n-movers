<?php 
include 'config.php';
include 'include/header.php'; ?>
      
         <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6"><h4 class="card-title">All Cities</h4></div>
                <div class="col-sm-6">
                        <a href="add_city.php"><button type="button" class="btn btn-primary adUserbtn">Add City</button></a>        
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
                            <th>City</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
                        $sql = "select * from cities";
                        $query = mysqli_query($con, $sql);
                        $count = mysqli_num_rows($query);
                        if ($count > 0 ) { 
                          $n=1;
                          while($row = mysqli_fetch_assoc($query)){ ?>
                              <tr>
                                <td><?php echo $n; ?></td>
                                <!-- <td><?php echo $row['state']; ?></td> -->
                                <td><?php echo $row['city']; ?></td>
                                <td>
                                  <!-- <a href="edit_city?id=<?php echo $row['id']; ?>">
                                    <button class="btn btn-outline-primary">Edit</button>  
                                  </a> -->
                                  <a href="api/delete_city.php?id=<?php echo $row['id']; ?>">
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