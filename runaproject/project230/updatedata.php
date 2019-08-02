<?php
	include('db_connect.php');
	$id=$_POST['id'];
	$customername=$_POST['customername'];
	$bill=(float)$_POST['totalbill'];
	$date=$_POST['date'];
	$query="UPDATE `billtable` SET `id`='$id',`name`='$customername',`total_bill`='$bill',`date`='$date' WHERE id=".$id;
	if (mysqli_query($conn,$query)) {
		echo "Update success";
		include('index.php');
	}else{
		echo "Data cannot insert";
	}
?>