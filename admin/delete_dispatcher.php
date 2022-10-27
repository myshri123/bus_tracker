<?php 

include('db/dbcon.php');

$get_id=$_GET['dispatcherid'];

mysql_query("delete from dispatcher where dispatcherid = '$get_id' ")or die(mysql_error());
echo "<script>alert('Successfully Delete'); window.location='dispatcher.php'</script>";
?>