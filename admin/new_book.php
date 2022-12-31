<?php include 'include/header.php'; ?>


<div class="col-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New book</h4>
                    <p class="card-description"> Book Form </p>
                    <form class="forms-sample" method="POST" action="new_book_insert.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Book Name</label>
                        <input type="text" name="book_name" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Author Name</label>
                        <input type="text" name="author_name" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Catagory</label>
                        <input type="text" name="catagory" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="file" class="form-control" id="exampleInputName1" placeholder="file">
                      </div>
                      <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="image" class="form-control" id="exampleInputName1" placeholder="file">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Details</label>
                        <textarea type="text" name="details" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

<?php include 'include/footer.php'; ?>