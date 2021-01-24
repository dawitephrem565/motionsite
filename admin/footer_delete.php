<?php 
 include("db/connect.php");
$id= $_REQUEST['id'];
$display_docu_table ="";
mysqli_query($con,"DELETE FROM footer WHERE id=$id") or die(mysqli_errno());
header("location: footer_image.php");
exit;
?>