<?php 
  session_start();
  if($_SESSION['id']):
  include "connection.php"; 
include 'include/header.php' 


?>

<?php 
$sql    ="SELECT * FROM home_slider ORDER BY id DESC";
$result =$db->query($sql);
?>

  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <?php while($row = $result->fetch_assoc()):   ?>

    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="<?php echo"admin/images/slider/" .$row['image']  ;  ?>"  alt="image">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4><?php echo $row['head']  ;  ?></h4>
        <span></span>
        <h2><?php echo $row['title']  ;  ?></h2>
        <p><?php echo $row['text']  ;  ?></p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <?php endwhile; ?>

    <!-- Start single slider item -->
      
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Learn Online</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Happy Students</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3>Best Library</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->



  <!-- Start about us -->
  <?php 
include "connection.php"; 
$sql    ="SELECT * FROM about ORDER BY id DESC";
$result =$db->query($sql);
?>
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- <div class="mu-about-us-area">            -->
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>About Us</h2>              
                  </div>
                  <?php while($row = $result->fetch_assoc()):   ?>
                  <!-- End Title -->
                  <h3><?php echo $row['text']  ;  ?></h3>
                 
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <img src="<?php echo"admin/images/slider/" .$row['image']  ;  ?>" height="50%" width="70%" alt="image">
                <?php endwhile; ?>
               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->





  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-book"></span>
                  <h4 class="counter">568</h4>
                  <p>Books</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-users"></span>
                  <h4 class="counter">3500</h4>
                  <p>Students</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-flask"></span>
                  <h4 class="counter">65</h4>
                  <p>Modern Lab</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-user-secret"></span>
                  <h4 class="counter">250</h4>
                  <p>Authors</p>
                </div>
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->

  <!-- Start latest books section -->

  <?php 
include "connection.php"; 
$sql    ="SELECT * FROM letest_books ORDER BY id DESC";
$result =$db->query($sql);
?>

  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>trending Books</h2>
              <p>Our Most Anticipated Books of</p>
            </div>
            <!-- End Title -->
            <!-- Start latest books content -->
            
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
  <!-- End latest course section -->

  <?php 
include "connection.php"; 
$sql    ="SELECT * FROM founder ORDER BY id DESC";
$result =$db->query($sql);
?>

  <!-- Start our teacher -->
  <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2>Founder</h2>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, repudiandae, suscipit repellat minus molestiae ea.</p> -->
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <?php while($row = $result->fetch_assoc()):   ?>

            <div class="mu-our-teacher-content">
              <div class="row">
                <div class="col-lg-3 col-md-3  col-sm-6">
                  <div class="mu-our-teacher-single">
                    <figure class="mu-our-teacher-img">
                    <img src="<?php echo"admin/images/slider/" .$row['image']  ; ?>" height="250" alt="image">
                      <div class="mu-our-teacher-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </figure>                    
                    <div class="mu-ourteacher-single-content">
                      <h4><?php echo $row['name']; ?></h4>
                      <span><?php echo $row['position']; ?></span>
                      <p><?php echo $row['details']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <?php endwhile; ?>

            <!-- End our teacher content -->           
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End our teacher -->


  <?php
include 'include/footer.php' ;
else:
  header("Location:joinus.php");

endif;
 ?>