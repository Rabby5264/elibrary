<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM category_list WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:category_list.php');
?>