<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Assistant</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<nav>
		<li><a href="index.php">Home</a></li>
		<li><a href="insert.php">New Entry</a></li>
		<li><a href="update.php">Update</a></li>
		<div class="searchdelete">
			<li><form action="delete.php" method="post">
			<input type="text" name="id">
			<input type="submit" value="Delete" name="">
		</form></li>
		<li><form action="searchdata.php" method="post">
			<input type="text" name="id" placeholder="Id">
			<input type="submit" value="Search" name="">
		</form></li>
		</div>

	</nav>
	<div class="dashboardtable">
		<center>
		<h3>Dashboard</h3>
		<br>
		<br>
		<?php
			include('db_connect.php');
			$sql="SELECT * FROM `billtable` ";
			$result=mysqli_query($conn,$sql);
		?>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Customer Name</th>
				<th>Total Bill</th>
				<th>Date</th>
				
			</tr>
			<?php
				while ($row=mysqli_fetch_array($result)) {
					
				
			?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['total_bill'];?></td>
				<td><?php echo $row['date'];?></td>
				
			</tr>
			<?php 
				}
			?>
		</table>
	</center>
	</div>
</body>
</html>