<?php 

include('db/dbcon.php');

$get_id=$_GET['adminid'];

mysql_query("delete from admin where adminid = '$get_id' ")or die(mysql_error());
echo "<script>alert('Successfully Delete'); window.location='profile.php'</script>";
?>