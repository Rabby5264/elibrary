<?php
include "connection.php";

    
    $name           =$_POST['uname'];
    $email          =$_POST['email'];
    $mobile         =$_POST['mobile'];
    $password       =$_POST['password'];
   



$sql="INSERT INTO admin (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";

$result=$db->query($sql);

if($result){

    echo 'Data insert success';
        // header('Location:user.php') ;
    
   
}


else{echo"Data Inser Fail !";}



?>