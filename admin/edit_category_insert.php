<?php
include "connection.php";

    $id                 =$_POST['id'];
    $name           =$_POST['name'];



$sql="UPDATE category_list SET name='$name' WHERE id='$id' ";

$result=$db->query($sql);

if($result){

    {
        header('Location:category_list.php') ;
    }
    echo 'data insert success';
   
}


else{echo"Data Insert Fail !";}



?>