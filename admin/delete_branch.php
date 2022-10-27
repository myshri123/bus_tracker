<?php 

include('db/dbcon.php');

$get_id=$_GET['branchid'];

mysql_query("delete from branch where branchid = '$get_id' ")or die(mysql_error());
echo "<script>alert('Successfully Delete'); window.location='branch.php'</script>";
?>