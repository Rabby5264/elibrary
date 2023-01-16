
<!-- Delete Home Slider  -->
<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM home_slider WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:home.php');
?>
<!-- Delete end -->



