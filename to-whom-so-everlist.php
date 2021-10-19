<?php 
include 'config.php';
include 'include/header.php'; 
?>
      
         <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <div class="row">
               <!--  <div class="col-sm-6"><h4 class="card-title">To Whom So Ever List</h4></div> -->
                <div class="col-sm-12">
                        <a href="to-whom-so-ever.php"><button type="button" class="btn btn-primary adUserbtn">Create</button></a>        
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
                            <th>From</th>
                            <th>To</th>
                            <th>Consignment No.</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $sql="SELECT * from towhom";
                        $query = mysqli_query($con, $sql);
                        $count = mysqli_num_rows($query);
                        if ($count > 0) {
                          $n = 1;
                          while($rows=mysqli_fetch_assoc($query)){ ?>
                            <tr>
                            <td><?php echo $n; ?></td>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['fromaddress']; ?></td>
                            <td><?php echo $rows['toaddress']; ?></td>
                            <td><?php echo $rows['cnoteno']; ?></td>
                            <td>
                              <a href="view-to-whom-so-ever.php?id=<?php echo $rows['id']; ?>">
                                  <button class="btn btn-outline-primary">View</button>    
                              </a>
                              <a href="edit-to-whom-so-ever.php?id=<?php echo $rows['id']; ?>">
                                  <button class="btn btn-outline-primary">Edit</button>    
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