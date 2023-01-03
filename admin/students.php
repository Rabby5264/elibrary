<?php include 'include/header.php'; 
include "connection.php"; 
$sql    ="SELECT * FROM signup ORDER BY id DESC";
$result =$db->query($sql);
?>

<div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Student table</h4>
                    <p class="card-description"> List of Student <code> User List </code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> id </th>
                          <th> User Name </th>
                          <th> Email </th>
                          <th> Password </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while($row = $result->fetch_assoc()):   ?>
                        <tr>
                          <td> <?php echo $row['id']  ;  ?> </td>
                          <td>  <?php echo $row['name']  ;  ?></td>
                          <td><?php echo $row['email']  ;  ?></td>
                          <td> <?php echo $row['password']  ;  ?> </td>
                          <td>

                          <a href="edit_about.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>

                          <a href="student_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>

                        </td>
                        </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

    <?php include 'include/footer.php'; ?>