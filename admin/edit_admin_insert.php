<?php
include "connection.php";

    
    $name           =$_POST['uname'];
    $email          =$_POST['email'];
    $mobile         =$_POST['mobile'];
    $password       =$_POST['password'];
   



$sql="UPDATE admin SET uname='$name',email='$email',mobile='$mobile',password='$password' WHERE id='$id' ";

$result=$db->query($sql);

if($result){

    echo 'Data insert success';
        // header('Location:user.php') ;
    
   
}


else{echo"Data Inser Fail !";}



?>