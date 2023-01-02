<?php
include "connection.php";

    
    $name           =$_POST['name'];
    $email          =$_POST['email'];
    $subject         =$_POST['subject'];
    $message       =$_POST['message'];
   



$sql="INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";

$result=$db->query($sql);

if($result){

    echo 'Data insert success';
        // header('Location:user.php') ;
    
   
}


else{echo"Data Insert Fail !";}



?>