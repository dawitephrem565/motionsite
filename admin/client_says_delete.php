<?php 
 include("db/connect.php");
$id= $_REQUEST['id'];
$display_docu_table ="";
mysqli_query($con,"DELETE FROM client_say WHERE id=$id") or die(mysqli_errno());
header("location: client_say.php");
exit;
?>