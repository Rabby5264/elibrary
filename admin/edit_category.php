<?php include 'include/header.php';
    include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM category_list WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
 ?>

<div class="col-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Category</h4>
                    <p class="card-description"> Category Form </p>
                    <form class="forms-sample" method="POST" action="edit_category_insert.php" enctype="multipart/form-data">
                      <div class="form-group">

                        <label for="exampleInputName1"> Name</label>
                        <input type="text" name="name" value="<?php echo $data['name'] ; ?>" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

<?php include 'include/footer.php'; ?>