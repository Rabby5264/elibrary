<?php
include "connection.php";

    
    $book_name     = $_POST['book_name'];
    $author_name   = $_POST['author_name'];
    $category      = $_POST['category'];
    $details       = $_POST['details'];
    
    $file          = $_FILES['file']['name'] ; 
    $filetarget    = "images/slider/".basename($file) ;

    $image          = $_FILES['image']['name'] ; 
    $imagetarget    = "images/slider/".basename($image) ;



$sql="INSERT INTO books (book_name,author_name,category,details,file,image) VALUES ('$book_name','$author_name','$category','$details','$file','$image')";

$result=$db->query($sql);

if($result){

    if( move_uploaded_file($_FILES['image']['tmp_name'] , $imagetarget))
    if(move_uploaded_file($_FILES['file']['tmp_name'] , $filetarget));

    {
        header('Location:books.php') ;
    }

   
}


else{echo"Data Inser Fail !";}



?>