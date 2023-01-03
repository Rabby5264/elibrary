<?php include 'include/header.php'; 
include "connection.php"; 

$category = $_GET['category'];

$sql    ="SELECT * FROM books WHERE catagory='$category'";
$result =$db->query($sql);

var_dump($result);

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


 <?php include 'include/footer.php'; ?>