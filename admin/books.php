<?php include 'include/header.php'; 
include "connection.php"; 
$sql    ="SELECT * FROM books ORDER BY id DESC";
$result =$db->query($sql);
?>


    <div class="col-lg-8 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Books Table</h4>
                    <p class="card-description"> Books List <code></code>
                    </p>
                    <a class="nav-link" href="new_book.php">
                    <button type="button" class="btn btn-inverse-primary btn-fw">
                    <i class="mdi mdi-book-open-page-variant">
                      Add New Book
                    </i></button></a>
                    <table class="table table-bordered">
                      <thead class="font-weight-bold">
                        <tr class="text-info text-center">
                          <th>Book Name </th>
                          <th>Author Name </th>
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
                          <button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-lead-pencil"></i>Edit</button>
                          <button type="button" class="btn btn-inverse-danger btn-fw"><i class="mdi mdi-beer"></i>Delete</button>
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


<?php include 'include/footer.php'; ?>