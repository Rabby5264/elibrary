<?php include 'include/header.php'; 
include "connection.php"; 

$category = $_GET['category'];

$sql    ="SELECT * FROM books WHERE catagory='$category'";
$result =$db->query($sql);

// var_dump($result);

?>


<section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Category</h2>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p> -->
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
          <h1>
           <code> Bangla Nobel </code>
          </h1>

          <div id="mu-latest-course-slide" class="mu-latest-courses-content">
            <?php while($row = $result->fetch_assoc()):   ?>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="<?php echo"admin/images/slider/" .$row['image']  ;  ?>" height="400px" alt="image"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#"><?php echo $row['author_name']; ?></a>
                      <span><i class="fa fa-clock-o"></i>90Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#"><?php echo $row['book_name']; ?></a></h4>
                    <p><?php echo $row['details']; ?></p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="<?php echo"admin/images/slider/" . $row['file']; ?>">Download</a>
                      <!-- <span class="mu-course-price" href="#">Read</span> -->
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            </div> 
              
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>



<?php include 'include/footer.php'; ?>