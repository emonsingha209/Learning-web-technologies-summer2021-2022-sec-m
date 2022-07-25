<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Book Add | Shapners</title>
</head>
		<form method="post" action="BookAddCheck.php" enctype="">
			<fieldset>
				<legend>Book Add</legend>
				<table>
					<tr>
						<td>Book Name</td>
						<tr></tr>
						<td><input type="text" name="BookName" value="" ></td>
					</tr>
					
					<tr>
						<td>Author</td>
						<tr></tr>
						<td><input type="text" name="AuthorName" value="" ></td>
					</tr>
					
					<tr>
						<td>Book Type</td>
						<tr></tr>
						<td><input type="text" name="BookType" value="" ></td>
					</tr>
					
					<tr>
						<td>Latest Edition</td>
						<tr></tr>
						<td><input type="text" name="BookEdi" value="" ></td>
					</tr>
					
					<tr>
						<td>Upload Book File</td>
						<tr></tr>
						<td><input type="file" name="BookFile" value="" ></td>
					</tr>

					<tr>
						<td>
						<br> </br>
							<input type="submit" name="" value="Add">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>