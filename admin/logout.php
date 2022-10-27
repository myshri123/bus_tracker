<?php
include('db/dbcon.php');
include('session.php');

$logout_query=mysql_query("select * from admin where adminid=$id_session");
$row=mysql_fetch_array($logout_query);
$user=$row['firstname']." ".$row['lastname'];
session_start();
session_destroy();

header('location:index.php');

?>