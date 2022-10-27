<?php require('header.php'); ?>

			<ul class="breadcrumb" style="margin-top:1px;">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Sagay Bus Terminal</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Viewing Schedule</a></li>
			</ul>
			
						<table class="table table-striped table-bordered" style="width:90%; margin:auto;">
						<h2 style="text-indent:20px;">Bacolod to Sagay City </h2>
						  <thead>
							  <tr>
								  <th>Driver Name</th>
								  <th>Bus Number</th>
								  <th>Bus Type</th>
								  <th>From</th>
								  <th>Destination</th>
								  <th>Departure</th>
								  <th>Arrival</th>
								  <th>Terminal Location</th>
								  <th>Status</th>
							  </tr>
						  </thead>   
						  <tbody>
<?php
include ('db/dbcon.php');
$result= mysql_query("select * from schedule
LEFT JOIN bus ON schedule.busid = bus.busid
LEFT JOIN driver ON schedule.driverid = driver.driverid
 where destination_location='Sagay City' ORDER BY schedule.scheduleid DESC ") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['scheduleid'];
$busid=$row['busid'];
$driverid=$row['driverid'];



?>
							<tr>
								<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
								<td><span class="label label-success"><?php echo $row['bus_number']; ?></span></td>
								<td><?php echo $row['bus_type']; ?></td>
								<td><?php echo $row['from_location']; ?></td>
								<td><?php echo $row['destination_location']; ?></td>
								<td><span class="label label-info"><?php echo date("M d, Y H:i:s",strtotime($row['departure_time'])); ?></span></td>
								<td><span class="label label-success"><?php echo ($row['arrival_time'] == "0000-00-00 00:00:00") ? "Travel" : date("M d, Y H:i:s",strtotime($row['arrival_time'])); ?></span></td>
								<td><span class="label label-success"><?php echo $row['terminal_location']; ?></span></td>
								<?php
									if ($row['status_operation'] == 'On Travel') {
										echo "<td><span class='label label-info'>".$row['status_operation']."</span></td>";
									} elseif ($row['status_operation'] == 'Cancelled') {
										echo "<td><span class='label label-warning'>".$row['status_operation']."</span></td>";
									} else {
										echo "<td><span class='label label-success'>".$row['status_operation']."</span></td>";
									}
								?>
							</tr>
<?php } ?>					  
						  </tbody> 
					  </table> 
					  
<br />
<br />
<br />

						<table class="table table-striped table-bordered" style="width:90%; margin:auto;">
						<h2 style="text-indent:20px;">Sagay to Bacolod City </h2>
						  <thead>
							  <tr>
								  <th>Driver Name</th>
								  <th>Bus Number</th>
								  <th>Bus Type</th>
								  <th>From</th>
								  <th>Destination</th>
								  <th>Departure</th>
								  <th>Arrival</th>
								  <th>Terminal Location</th>
								  <th>Status</th>
							  </tr>
						  </thead>   
						  <tbody>
<?php
include ('db/dbcon.php');
$result= mysql_query("select * from schedule
LEFT JOIN bus ON schedule.busid = bus.busid
LEFT JOIN driver ON schedule.driverid = driver.driverid
 where destination_location='Bacolod City' ORDER BY schedule.scheduleid DESC ") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['scheduleid'];
$busid=$row['busid'];
$driverid=$row['driverid'];
?>
							<tr>
								<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
								<td><span class="label label-success"><?php echo $row['bus_number']; ?></span></td>
								<td><?php echo $row['bus_type']; ?></td>
								<td><?php echo $row['from_location']; ?></td>
								<td><?php echo $row['destination_location']; ?></td>
								<td><span class="label label-info"><?php echo date("M d, Y H:i:s",strtotime($row['departure_time'])); ?></span></td>
								<td><span class="label label-success"><?php echo ($row['arrival_time'] == "0000-00-00 00:00:00") ? "Travel" : date("M d, Y H:i:s",strtotime($row['arrival_time'])); ?></span></td>
								<td><span class="label label-success"><?php echo $row['terminal_location']; ?></span></td>
								<?php
									if ($row['status_operation'] == 'On Travel') {
										echo "<td><span class='label label-info'>".$row['status_operation']."</span></td>";
									} elseif ($row['status_operation'] == 'Cancelled') {
										echo "<td><span class='label label-warning'>".$row['status_operation']."</span></td>";
									} else {
										echo "<td><span class='label label-success'>".$row['status_operation']."</span></td>";
									}
								?>
							</tr>
<?php } ?>					  
						  </tbody> 
					  </table> 
					  
<br />
<?php require('footer.php'); ?>
