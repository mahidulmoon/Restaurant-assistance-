<?php
	include('db_connect.php');
	$username1=$_POST['username'];
	$password1=$_POST['password'];
	$sql1="SELECT * FROM `user` ";
	if ($result1=mysqli_query($conn,$sql1)) {
		$row1=mysqli_fetch_array($result1);
		if ($username1==$row1['username'] and $password1==$row1['password']) {
			include('index.php');
		}else{
			echo "Sorry you are not Authorized";

		}
	}
?>