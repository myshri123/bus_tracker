<?php 

include('db/dbcon.php');

$get_id=$_GET['driverid'];

mysql_query("delete from driver where driverid = '$get_id' ")or die(mysql_error());
echo "<script>alert('Successfully Delete'); window.location='driver.php'</script>";
?>