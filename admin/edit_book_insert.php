<?php
include "connection.php";

    $id              =  $_POST['id'];
    $book_name       =  $_POST['book_name'];
    $author_name     =  $_POST['author_name'];
    $category        =  $_POST['category'];
    $details         =  $_POST['details'];
    
    $image          =   $_FILES['image']['name'] ; 
    $imagetarget    =   "images/slider/".basename($image) ;

    $file          = $_FILES['file']['name'] ; 
    $filetarget    = "images/slider/".basename($file) ;



if($image and $file){
    $sql="UPDATE books SET book_name='$book_name',author_name='$author_name',category='$category',details='$details',image='$image', file='$file'   WHERE id='$id' ";
}
else if($image){
    $sql="UPDATE books SET book_name='$book_name',author_name='$author_name',category='$category',details='$details',image='$image' WHERE id='$id' ";  
} 
else if($file){
    $sql="UPDATE books SET book_name='$book_name',author_name='$author_name',category='$category',details='$details',file='$file' WHERE id='$id' ";  
} 
else{
    $sql="UPDATE books SET book_name='$book_name',author_name='$author_name',category='$category',details='$details' WHERE id='$id' ";  
}


$result=$db->query($sql);

if($result){

    if($image){

        if( move_uploaded_file($_FILES['image']['tmp_name'] , $imagetarget))
        {
            header('Location:books.php') ;
        }

    }

    if($file){

        if( move_uploaded_file($_FILES['file']['tmp_name'] , $filetarget))
        {
            header('Location:books.php') ;
        }

    }

    header('Location:books.php') ;    
   
}


else{echo"Data Update Fail !";}



?>