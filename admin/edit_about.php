<?php include 'include/header.php';
    include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM about WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
 ?>



<div class="col-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">About</h4>
                    <p class="card-description"> About <code>Edit</code></p> 

                    <form class="forms-sample" method="POST" action="about_insert.php" enctype="multipart/form-data">
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <label for="exampleInputName1">Text</label>
                        <input type="text" name="text" value="<?php echo $data['text'] ; ?>" class="form-control" id="exampleInputName1" placeholder="Enter Descripption">
                      </div>
                      <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="image" class="form-control" id="exampleInputName1" placeholder="file">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

<?php include 'include/footer.php'; ?>