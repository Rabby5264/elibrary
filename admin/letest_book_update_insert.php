<?php
include "connection.php";

    $id                 =$_POST['id'];
    $book_name          =$_POST['book_name'];
    $author_name        =$_POST['author_name'];
    $catagory           =$_POST['catagory'];
    $details            =$_POST['details'];
    
    $file               = $_FILES['file']['name'] ; 
    $filetarget         = "images/slider/".basename($file) ;

    $image              = $_FILES['image']['name'] ; 
    $imagetarget        = "images/slider/".basename($image) ;



$sql="UPDATE letest_books SET book_name='$book_name',author_name='$author_name',catagory='$catagory',details='$details',file='$file',image='$image' WHERE id='$id' ";


$result=$db->query($sql);

if($result){

    if( move_uploaded_file($_FILES['image']['tmp_name'] , $imagetarget))
    if(move_uploaded_file($_FILES['file']['tmp_name'] , $filetarget));

    {
        header('Location:letest_books.php') ;
    }
    // echo 'data insert success';
   
}


else{echo"Data Inser Fail !";}



?>