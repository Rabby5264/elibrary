<?php include 'include/header.php'; ?>
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
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Author</th>
                          <th>Catagory</th>
                          <th>File</th>
                          <th>Details</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                          <td>John</td>
                          <td>img</td>
                          <td>John</td>
                          <td>John</td>
                          <td>John</td>
                          <td>John</td>
                          <td><label class="badge badge-info">Delete</label>    
                          <label class="badge badge-info">Edit</label></td>
                        </tr>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

<?php include 'include/footer.php'; ?>
