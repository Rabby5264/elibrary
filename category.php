<?php include 'include/header.php'; 
include "connection.php"; 

$category = $_GET['category'];

$sql    ="SELECT * FROM books WHERE catagory='$category'";
$result =$db->query($sql);
$result1 =$db->query($sql);

// var_dump($result);

?>


 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>BOOKS By Category</h2>
         </div>
       </div>
     </div>
   </div>
 </section>


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
                  </div>
                </div>

                </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Categories</h3>
                    <ul class="mu-sidebar-catg">
                    <?php while($row = $result1->fetch_assoc()):   ?>
                      <li><a href="category.php?category=<?php echo $row['catagory']; ?>"><?php echo $row['catagory']; ?></a></li>
                      <?php endwhile; ?>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>


 <?php include 'include/footer.php'; ?>
