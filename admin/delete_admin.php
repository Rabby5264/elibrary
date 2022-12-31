<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM admin WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:admins.php');



?>
