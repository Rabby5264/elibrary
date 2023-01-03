<?php
include "connection.php";

    $id           =$_POST['id'];
    $head         =$_POST['head'];
    $title        =$_POST['title'];
    $text         =$_POST['text'];

    $image        = $_FILES['image']['name'] ; 
    $imagetarget  = "images/slider/".basename($image) ;



$sql="UPDATE home_slider SET head='$head',title='$title',text='$text',image='$image' WHERE id='$id' ";


$result=$db->query($sql);

if($result){

    if( move_uploaded_file($_FILES['image']['tmp_name'] , $imagetarget))

    {
        header('Location:home.php') ;
    }
    // echo 'data insert success';
   
}


else{echo"Data Inser Fail !";}



?>