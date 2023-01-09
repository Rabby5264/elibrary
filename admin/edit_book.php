<?php include 'include/header.php';
    include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();


    function getCategoryList($id=null){

      global $db;
    
      $sql = "SELECT * FROM category_list";
      $result = $db->query($sql);
      $html='<select name="category" class="form-control">';

      $debug =123;

      while($data = $result->fetch_assoc()){
        if($id){

          if($data['id'] == $id)
            $html.='<option value="'.$data['id'].'" selected>'.$data['name'].'</option>';
          
            if($data['id'] != $id)
          $html.='<option value="'.$data['id'].'">'.$data['name'].'</option>';
  
        }else{
          $html.='<option value="'.$data['id'].'">'.$data['name'].'</option>';
        }
      }
      $html.='</select>';
    
      return $html;
    
    }
    


 ?>

<div class="col-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New book</h4>
                    <p class="card-description"> Book Form </p>
                    <form class="forms-sample" method="POST" action="edit_book_insert.php" enctype="multipart/form-data">
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
                        <?php echo getCategoryList($data['category']) ; ?>
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
                        <input type="text" name="details" value="<?php echo $data['details'] ; ?>" class="form-control" id="exampleinputname1" rows="4"></input>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

<?php include 'include/footer.php'; ?>