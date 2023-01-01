<?php include 'include/header.php'; 
include "connection.php"; 
$sql    ="SELECT * FROM founder ORDER BY id DESC";
$result =$db->query($sql);
?>


        <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Founder Table</h4>
                    <p class="card-description"> Founder<code>Slider</code>
                    </p>
                    <a class="nav-link" href="new_founder.php">
                    <button type="button" class="btn btn-inverse-primary btn-fw">
                    <i class="mdi mdi-book-open-page-variant">
                      Add New Member
                    </i></button></a>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Image </th>
                          <th> Name </th>
                          <th> Position </th>
                          <th> Details </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while($row = $result->fetch_assoc()):   ?>

                        <tr>
                          <td><img src="<?php echo"images/slider/" .$row['image']  ;  ?>" width="90px" alt="image"></td>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['position']; ?></td>
                          <td><?php echo $row['details']; ?></td>
                          <td><label class="badge badge-info">Delete</label>      
                          <label class="badge badge-info">Edit</label></td>
                        </tr>
                        <?php endwhile; ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


<?php include 'include/footer.php'; ?>
