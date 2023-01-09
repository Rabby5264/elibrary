<?php include 'include/header.php'; 
include "connection.php"; 
$sql    ="SELECT * FROM books ORDER BY id DESC";
$result =$db->query($sql);
$result1 =$db->query($sql);



function getCategoryNameById($id=null){

  global $db ;

  $sql    ="SELECT * FROM category_list WHERE id = '$id' ORDER BY id DESC";
  
  $result =$db->query($sql);

  $data= $result->fetch_assoc();

  if($data) return $data['name'];

  return;

}



?>


 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>BOOKS</h2>
           <!-- <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Course</li>
          </ol> -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->

                <div class="mu-course-container">
                  <div class="row">
                  <?php while($row = $result->fetch_assoc()):   ?>

                    <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="<?php echo"admin/images/slider/" .$row['image']  ;  ?>" height="450px" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#"><?php echo $row['author_name']; ?></a>
                          <span><i class="fa fa-clock-o"></i>90Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#"><?php echo $row['book_name']; ?></a></h4>
                        <p><?php echo $row['details']; ?></p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="book_detail.php">Details</a>
                        </div>
                      </div>
                    </div> 
                  </div>     
                  <?php endwhile; ?>
             
                  <!-- <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Engineering </a>
                          <span><i class="fa fa-clock-o"></i>75Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Details</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Drawing</a>
                          <span><i class="fa fa-clock-o"></i>90Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Details</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Engineering </a>
                          <span><i class="fa fa-clock-o"></i>75Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Details</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Drawing</a>
                          <span><i class="fa fa-clock-o"></i>90Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Details</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Engineering </a>
                          <span><i class="fa fa-clock-o"></i>75Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Details</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start course pagination -->
                <div class="mu-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span class="fa fa-angle-left"></span> Prev 
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                         Next <span class="fa fa-angle-right"></span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- end course pagination -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Categories</h3>
                    <ul class="mu-sidebar-catg">
                    <?php while($row = $result1->fetch_assoc()):   ?>
                      <li><a href="category.php?category=<?php echo $row['category']; ?>"><?php echo getCategoryNameById($row['category']) ; ?></a></li>
                      <?php endwhile; ?>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Popular Books</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <!-- <img class="media-object" src="assets/img/courses/1.jpg" alt="img"> -->
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Stay True: A Memoir</a></h4>                      
                          <span class="popular-course-price">Hua Hsu (Author)</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <!-- <img class="media-object" src="assets/img/courses/2.jpg" alt="img"> -->
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Super Good Baking for Kids</a></h4>                      
                          <span class="popular-course-price">Duff Goldman (Author)</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <!-- <img class="media-object" src="assets/img/courses/3.jpg" alt="img"> -->
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">The Peanuts</a></h4>                      
                          <span class="popular-course-price">Various Authors (Author)</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Author</h3>
                    <ul class="mu-sidebar-catg mu-sidebar-archives">

                      <li><a href="">Humayun Ahmed <span>(35)</span></a></li>
                      <li><a href="">Jahanara Imam <span>(20)</span></a></li>
                      <li><a href="">Taslima Nasrin <span>(125)</span></a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <!-- <div class="mu-single-sidebar">
                    <h3>Tags Cloud</h3>
                    <div class="tag-cloud">
                      <a href="#">Health</a>
                      <a href="#">Science</a>
                      <a href="#">Sports</a>
                      <a href="#">Mathematics</a>
                      <a href="#">Web Design</a>
                      <a href="#">Admission</a>
                      <a href="#">History</a>
                      <a href="#">Environment</a>
                    </div>
                  </div> -->
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

 <?php include 'include/footer.php'; ?>