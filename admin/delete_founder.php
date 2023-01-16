
<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM founder WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:founder_slider.php');
?>