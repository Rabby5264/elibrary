<?php include 'include/header.php'; 
include "connection.php"; 
$sql    ="SELECT * FROM admin ORDER BY id DESC";
$result =$db->query($sql);
?>
        <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Admin Table</h4>
                    <p class="card-description"> Admins List <code></code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Mobile </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <?php while($row = $result->fetch_assoc()):   ?>
                      <tbody>

                        <tr>
                          <td><?php echo $row['id']  ;  ?></td>
                          <td><?php echo $row['name']  ;  ?></td>
                          <td><?php echo $row['email']  ;  ?></td>
                          <td><?php echo $row['mobile']  ;  ?></td>
                          <td>
                            <a href="edit_admin.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="delete_admin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                          </td>
                        </tr>
                        <?php endwhile; ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


<?php include 'include/footer.php'; ?>
