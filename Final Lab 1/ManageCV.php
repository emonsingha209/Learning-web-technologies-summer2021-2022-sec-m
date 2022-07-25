<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>View CV | Admin</title>
</head>
<body>
	<center>
			<fieldset>
				<h2>View CV</h2>
				<table>
					<tr>
						<td>
							<a href="ViewManagerCV.php">Manager</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="ViewTeacherCV.php">Teacher</a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							<a href="Admin.php"> Back </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</center>
</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>