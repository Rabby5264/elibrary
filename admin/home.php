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
                          <td><label class="badge badge-danger">Edit</label>  
                          <label class="badge badge-danger">Delete</label></td>
                        </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                    <br>
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
                      <tbody>
                        <tr>
                          <td>Ja</td>
                          <td>Photoshop</td>
                          <td><a href="edit_about.php"><label class="badge badge-danger">Edit</label></a></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              <br>

              

<?php include 'include/footer.php'; ?>
