<?php
include 'include/header.php'; 
include "connection.php"; 


$sqlCat = "SELECT * FROM category_list" ;
$resultCat = $db->query($sqlCat);

function getBookByCat($category){
    global $db;
    $sqlCat = "SELECT * FROM books WHERE category='$category'" ;
    $resultCat = $db->query($sqlCat);
    $html ='';
    while($row = $resultCat->fetch_assoc()){
        $html.='<p>'.$row['book_name'].'</p>';
    }
    return $html;
}

?>


<?php while($dataCat = $resultCat->fetch_assoc()): ?>

    <h2><?php echo $dataCat['name'] ; ?></h2>
    <?php echo getBookByCat($dataCat['id']); ?>


<?php endwhile; ?>


<?php include 'include/footer.php' ;?>