<?php
include "connection.php";

    
    $head           =$_POST['head'];
    $title          =$_POST['title'];
    $text         =$_POST['text'];
    
    $image          = $_FILES['image']['name'] ; 
    $target         = "images/slider/".basename($image) ;



$sql="INSERT INTO home_slider (head,title,text,image) VALUES ('$head','$title','$text','$image')";

$result=$db->query($sql);

if($result){

    if( move_uploaded_file($_FILES['image']['tmp_name'] , $target))
    {
        header('Location:home.php') ;
    }
    // echo 'data insert success';
   
}


else{echo"Data Insert Fail !";}



?>