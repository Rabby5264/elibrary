<?php include 'include/header.php'; 
include "connection.php"; 
$sql    ="SELECT * FROM category_list ORDER BY id DESC";
$result =$db->query($sql);
?>


    <div class="col-lg-8 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category Table</h4>
                    <p class="card-description"> Category List <code></code>
                    </p>
                    <a class="nav-link" href="new_category.php">
                    <button type="button" class="btn btn-inverse-primary btn-fw">
                    <i class="mdi mdi-book-open-page-variant">
                      Add New Category
                    </i></button></a>
                    <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead class="font-weight-bold">
                        <tr class="text-info text-center">
                          <th>id </th>
                          <th> Name </th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while($row = $result->fetch_assoc()):   ?>
                        <tr class="table-info">
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['name']; ?></td>
                          <td class="text-center">
                          <a href="edit_category.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                          <a href="delete_category.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                          </td>
                        </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


<?php include 'include/footer.php'; ?>