<!DOCTYPE html>
<html>
<head>
	<title>User Authentication Form</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<center>
		<h3>User Authentication Form</h3>
		<form class="loginform" action="authentication.php" method="post">
			<table>
				<tr>
					<td>UserName:</td>
					<td><input type="text" name="username" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="submit" name=""></td>
				</tr>
			</table>
			
		</form>
	</center>
</body>
</html>

