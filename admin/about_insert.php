<?php
include "connection.php";

    $id                 =$_POST['id'];
    $text               =$_POST['text'];
    $image              = $_FILES['image']['name'] ; 
    $target             = "images/slider/".basename($image) ;



$sql="UPDATE about SET text='$text',image='$image' WHERE id='$id' ";

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