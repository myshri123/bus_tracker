<?php 

include('db/dbcon.php');

$get_id=$_GET['busid'];

mysql_query("delete from bus where busid = '$get_id' ")or die(mysql_error());
echo "<script>alert('Successfully Delete'); window.location='bus.php'</script>";
?>