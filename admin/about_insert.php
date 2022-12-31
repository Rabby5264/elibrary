<?php
include "connection.php";

    
    $text         =$_POST['text'];
    $image          = $_FILES['image']['name'] ; 
    $target         = "images/slider/".basename($image) ;



$sql="INSERT INTO about (text,image) VALUES ('$text','$image')";

$result=$db->query($sql);

if($result){

    if( move_uploaded_file($_FILES['image']['tmp_name'] , $target))
    // {
    //     header('Location:home.php') ;
    // }
    echo 'data insert success';
   
}


else{echo"Data Inser Fail !";}



?>