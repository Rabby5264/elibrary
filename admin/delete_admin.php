<!-- Delete Admin  -->
<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM admin WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:admins.php');

?>
<!-- Delete End  -->



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



<!-- Delete About Section -->
<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM about WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:home.php');
?>
<!-- Delete end -->


<!-- Delete Student -->
<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM students WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:students.php');
?>
<!-- End  -->


<!-- Delete Books -->

<!-- end  -->


<!-- Delete Letest Book -->
<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM letest_books WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:letest_books.php');
?>
<!-- end  -->



<!-- Delete Founder -->
<?php
include 'connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM founder WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:founder_slider.php');
?>
<!-- end  -->
