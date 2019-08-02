<?php
	include('db_connect.php');
	$customername=$_POST['customername'];
	$bill=(float)$_POST['totalbill'];
	$date=$_POST['date'];
	$query="INSERT INTO `billtable`(`id`, `name`, `total_bill`, `date`) VALUES (NULL,'$customername','$bill','$date')";
	if (mysqli_query($conn,$query)) {
		echo "<p style='background-color:lightgreen;'>New insertion success</p>";
		include('insert.php');
	}else{
		echo "Data cannot insert";
	}
?>