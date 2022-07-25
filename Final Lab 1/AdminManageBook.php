<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Manage Book | Admin</title>
</head>
<body>
	<center>
			<fieldset>
				<h2>Manage Book</h2>
				<table>
					<tr>
						<td>
							<a href="BookList.php">View Book List</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="">Update Book List</a>
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