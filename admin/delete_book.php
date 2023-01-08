<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM books WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:books.php');
?>