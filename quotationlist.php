<?php
include 'config.php';
 include 'include/header.php'; ?>
      
         <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <div class="row">
               <!--  <div class="col-sm-6"><h4 class="card-title">To Whom So Ever List</h4></div> -->
                <div class="col-sm-12 btnalign">
                        <a href="quotation.php">
                          <button type="button" class="btn btn-primary adUserbtn">Create</button>
                        </a>        
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
                        $sql = "select * from quotations";
                        $query = mysqli_query($con, $sql);
                        $count = mysqli_num_rows($query);
                        if ($count > 0 ) { 
                          $n=1;
                          while($row = mysqli_fetch_assoc($query)){ ?>
                              <tr>
                                <td><?php echo $n; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['fromadd']; ?></td>
                                <td><?php echo $row['toadd']; ?></td>
                                <td><?php echo $row['no']; ?></td>
                                <td>
                                  <a href="view_quotation.php?id=<?php echo $row['id'];?>">
                                    <button class='btn btn-outline-info'>View</button>  
                                  </a>
                                  <a href="edit_quotation.php?id=<?php echo $row['id'];?>">
                                    <button class='btn btn-outline-primary'>Edit</button>  
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