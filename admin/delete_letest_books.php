<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM letest_books WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:letest_books.php');
?>