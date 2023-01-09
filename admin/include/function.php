<?php

include '../connection.php';


function getCategoryNameById($id=null){

    global $db ;
  
    $sql    ="SELECT * FROM category_list WHERE id = '$id' ORDER BY id DESC";
    
    $result =$db->query($sql);
  
    $data= $result->fetch_assoc();
  
    if($data) return $data['name'];
  
    return;
  
}