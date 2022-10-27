<?php include ('db/dbcon.php');
$ID=$_GET['busid'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bus Dispatch and Information System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/css/simple-sidebar.css" rel="stylesheet">
	
    <!-- SignIn CSS -->
	<link href="css/css/signin.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

        <!-- navbar start -->
<nav class="navbar navbar-inverse" style="border-radius:0px;" >

<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Bus Dispatch and Information System</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
	<li class="">						
	<a>
		<?php include('currentdate.php'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php include('clock_lcd.php'); ?>
	</a>
	</li>
    </ul>
</div>

</nav>
        <!-- navbar end -->

<div class="account-container register">
	
	<div class="content clearfix">
		
		<form method="post">
			<h1>Edit Details</h1>			
			
			<div class="login-fields">
<?php
  $query=mysql_query("select * from bus where busid='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
				
				<p>Edit bus information:</p>
				
				<div class="field">
					<label for="bus_number">Bus Number:</label>
					<input type="text" id="bus_number" name="bus_number" value="<?php echo $row['bus_number']; ?>" placeholder="Bus Number" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="Branch Location">Bus Type</label>
				<select name="bus_type" class="login" style="font-family: 'Open Sans'; font-size: 13px; color: #8e8d8d; background-color: #fdfdfd; width: 297px; display: block; height: 40px; margin: 0; box-shadow: inset 2px 2px 4px #f1f1f1;">
				<option value="<?php echo $row['bus_type']; ?>"><?php echo $row['bus_type']; ?></option>
				<option value="Economy">Economy</option>
				<option value="Aircon">Aircon</option>
				</select>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				<button type="submit" name="update" class="button btn btn-primary btn-large">Update</button>
				<a href="bus.php"><button type="button" style="margin-right:20px;" class="button btn btn-primary btn-large">Cancel</button></a>
			</div> 
			<!-- .actions -->
			
		</form>
		
<?php
$id =$_GET['busid'];
if (isset($_POST['update'])) {
	
$bus_number=$_POST['bus_number'];	
$bus_type=$_POST['bus_type'];

mysql_query(" UPDATE bus SET bus_number='$bus_number', bus_type='$bus_type' WHERE busid = '$id' ")or die(mysql_error());

echo "<script>alert('Successfully Update!'); window.location='bus.php'</script>";
}
?>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="js/js/jquery-1.7.2.min.js"></script>
<script src="js/js/bootstrap.js"></script>
               
<script src="js/js/signin.js"></script>