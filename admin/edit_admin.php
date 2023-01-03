<?php include 'include/header.php';
    include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM admin WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
 ?>


        <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Admin Registration Form</h4>
                    <p class="card-description"> New Member </p>
                    <form class="forms-sample" method="POST" action="registration_insert.php">
                      <div class="form-group row">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" value="<?php echo $data['name'] ; ?>" class="form-control" id="exampleInputUsername2" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" name="email" value="<?php echo $data['email'] ; ?>" class="form-control" id="exampleInputEmail2" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                          <input type="text" name="mobile" value="<?php echo $data['mobile'] ; ?>" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="password" value="<?php echo $data['password'] ; ?>" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                      </div>
                    
                      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                    </form>
                  </div>
                </div>
              </div>

    <?php include 'include/footer.php'; ?>
