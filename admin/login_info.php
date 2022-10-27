<?php
include('db/dbcon.php');

if (isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$login_query=mysql_query("select * from admin where username='$username' and password='$password'");
$count=mysql_num_rows($login_query);
$row=mysql_fetch_array($login_query);
$firstname=$row['firstname'];
$lastname=$row['lastname'];

if ($count > 0){
session_start();
$_SESSION['id']=$row['adminid'];

echo "<script>alert('Successfully Login!'); window.location='dashboard.php'</script>";
}else{
	echo "<script>alert('Invalid Username and Password! Try again.'); window.location='index.php'</script>";
?>
<?php } 
}
?>