<?php
include "connection.php";

    
    $id           =$_POST['id'];
    $name           =$_POST['name'];

$sql="INSERT INTO category_list (id,name) VALUES ('$id','$name')";

$result=$db->query($sql);

if($result){

    {
        header('Location:category_list.php') ;
    }
    echo 'data insert success';
   
}


else{echo"Data Inser Fail !";}



?>