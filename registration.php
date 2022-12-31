<?php include 'include/header.php'; ?>
<?php include 'connection.php'; ?>

<main>
<div class="reg" >
<div class="container">
  <div class="row">
    <div class="col-md-8">
    <h1>Registration</h1><hr>
        <form action="registration_insert.php" method="POST">
          <label for="name">Name</label>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="firstname" placeholder="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="lastname" placeholder="Last name">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
          </div>
          <div class="col">
          <label for="mobile">Mobile</Mabel>
              <input type="text" class="form-control" name="mobile" placeholder="mobile">
            </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</main>


<?php include 'include/footer.php'; ?>