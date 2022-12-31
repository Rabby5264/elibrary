
<?php include 'include/header.php'; ?>


    <div class="col-lg-10 stretch-card">
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
                          <th> id</th>
                          <th>Book Name </th>
                          <th>Author Name </th>
                          <th> Details </th>
                          <th> File </th>
                          <th> Image </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr class="table-info">
                          <td> 1 </td>
                          <td> Herman Beck </td>
                          <td> Photoshop </td>
                          <td> Photoshop </td>
                          <td> Photoshop </td>
                          <td> image </td>
                          <td class="text-center">
                          <button type="button" class="btn btn-inverse-primary btn-fw"><i class="mdi mdi-lead-pencil"></i>Edit</button>
                          <button type="button" class="btn btn-inverse-danger btn-fw"><i class="mdi mdi-beer"></i>Delete</button>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


<?php include 'include/footer.php'; ?>