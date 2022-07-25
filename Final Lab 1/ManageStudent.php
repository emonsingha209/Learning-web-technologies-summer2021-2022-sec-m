<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Manage Student | Admin</title>
</head>
<body>
	<center>
			<fieldset>
				<h2>Manage Student</h2>
				<table>
					<tr>
						<td>
							<a href="StudentRegistration.html">Add New Student</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="StudentList.php">View Student List</a>
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