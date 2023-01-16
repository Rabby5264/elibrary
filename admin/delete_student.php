<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM signup WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:students.php');
?>