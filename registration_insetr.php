<?php
include "connection.php";

    
    $name           =$_POST['name'];
    $email          =$_POST['password'];
    $password       =$_POST['email'];
   



$sql="INSERT INTO signup (name,email,password) VALUES ('$name','$email','$password')";

$result=$db->query($sql);

if($result){

    echo 'Data insert success';
        // header('Location:user.php') ;
    
   
}


else{echo"Data Inser Fail !";}



?>