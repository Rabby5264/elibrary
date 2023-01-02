<?php include 'include/header.php';
    include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM letest_books WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();

 ?>


<div class="col-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Letest book</h4>
                    <p class="card-description"> Letest Book <code>slider</code></p> 

                    <form class="forms-sample"  method="POST" action="letest_book_update_insert.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <label for="exampleInputName1">Book Name</label>
                        <input type="text" name="book_name" value="<?php echo $data['book_name'] ; ?>" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Author Name</label>
                        <input type="text" name="author_name" value="<?php echo $data['author_name'] ; ?>" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Catagory</label>
                        <input type="text" name="catagory" value="<?php echo $data['catagory'] ; ?>" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="file"  class="form-control" id="exampleInputName1" placeholder="file">
                      </div>
                      <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="image"  class="form-control" id="exampleInputName1" placeholder="file">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Details</label>
                        <input type="text" name="details" value="<?php echo $data['details'] ; ?>" class="form-control" id="exampleTextarea1" rows="4">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                    </form>
                  </div>
                </div>
              </div>

<?php include 'include/footer.php'; ?>