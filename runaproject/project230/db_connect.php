<?php
	$server="localhost";
	$user="root";
	$password="";
	$db="restaurant";
	$conn=mysqli_connect($server,$user,$password,$db);
	if(!$conn){
		echo "please check the connection again";
	}
?>