<?php include 'include/header.php'; 
include "connection.php"; 
$sql    ="SELECT * FROM home_slider ORDER BY id DESC";
$result =$db->query($sql);
?>


    <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Home Slider  &  About Edit</h4>
                    <p class="card-description"> Home <code> Slider </code>
                    </p>
                    <a class="nav-link" href="add_home_slider.php">
                    <button type="button" class="btn btn-inverse-primary btn-fw">
                    <i class="mdi mdi-book-open-page-variant">
                      Add New Slider
                    </i></button></a>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Head</th>
                          <th>Title</th>
                          <th>Text</th>
                          <th>file</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <?php while($row = $result->fetch_assoc()):   ?>
                      <tbody>
                        <tr>
                          <td><?php echo $row['id']  ;  ?></td>
                          <td><?php echo $row['head']  ;  ?></td>
                          <td><?php echo $row['title']  ;  ?></td>
                          <td><?php echo $row['text']  ;  ?></td>
                          <td><img src="<?php echo"images/slider/" .$row['image']  ;  ?>" width="90px" alt="image"></td>
                          <td>
                            <a href="edit_about.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="delete_admin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                          </td>
                        </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                    <br>



<?php  
include "connection.php"; 
$sql    ="SELECT * FROM about ORDER BY id DESC";
$result =$db->query($sql);
?>                 
                    <p class="card-description"> Home <code> About </code>
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>About us</th>
                          <th>File</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <?php while($row = $result->fetch_assoc()):   ?>
                      <tbody>
                        <tr>
                          <td><?php echo $row['text']  ;  ?></td>
                          <td><img src="<?php echo"images/slider/" .$row['image']  ;  ?>" width="90px" alt="image"></td>
                          <td>
                            <a href="edit_about.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="delete_admin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                          </td>
                        </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              <br>

              

<?php include 'include/footer.php'; ?>
