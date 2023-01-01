<?php
include "connection.php";

    
    $name           =$_POST['name'];
    $position          =$_POST['position'];
    $details         =$_POST['details'];
    
    $image          = $_FILES['image']['name'] ; 
    $target         = "images/slider/".basename($image) ;



$sql="INSERT INTO founder (name,position,details,image) VALUES ('$name','$position','$details','$image')";

$result=$db->query($sql);

if($result){

    if( move_uploaded_file($_FILES['image']['tmp_name'] , $target))
    // {
    //     header('Location:home.php') ;
    // }
    echo 'data insert success';
   
}


else{echo"Data Insert Fail !";}



?>