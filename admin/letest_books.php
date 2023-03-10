<?php include 'include/header.php'; 
include "connection.php"; 
$sql    ="SELECT * FROM letest_books ORDER BY id DESC";
$result =$db->query($sql);
?>


        <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Letest Book Table</h4>
                    <p class="card-description"> Letest Book List <code> Slider </code>
                    </p>
                    <a class="nav-link" href="add_letest_book.php">
                    <button type="button" class="btn btn-inverse-primary btn-fw">
                    <i class="mdi mdi-book-open-page-variant">
                      Add New 
                    </i></button></a>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                      <tr class="text-info text-center">
                          <th>Book Name </th>
                          <th>Author Name </th>
                          <th>Catagory</th>
                          <th> Details </th>
                          <th> Image </th>
                          <th> File </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while($row = $result->fetch_assoc()):   ?>
                        <tr class="table-info">
                          <td><?php echo $row['book_name']; ?></td>
                          <td><?php echo $row['author_name']; ?></td>
                          <td><?php echo $row['catagory']; ?></td>
                          <td><?php echo $row['details']; ?></td>
                          <td><img src="<?php echo"images/slider/" .$row['image']  ;  ?>" width="90px" alt="image"></td>
                          <td> <a href="uploads/files/<?php echo $row['file']; ?>"><?php echo $row['file']; ?></a> </td>
                          <td class="text-center">
                          <a href="edit_letest_book.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                          <a href="delete_letest_books.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                          </td>
                        </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>

<?php include 'include/footer.php'; ?>
