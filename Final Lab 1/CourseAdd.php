<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Course Add | Shapners</title>
</head>
		<form method="post" action="CourseAddCheck.php" enctype="">
			<fieldset>
				<legend>Course Add</legend>
				<table>
					<tr>
						<td>Course Name</td>
						<tr></tr>
						<td><input type="text" name="CourseName" value="" ></td>
					</tr>
					
					<tr>
						<td>Course Teacher</td>
						<tr></tr>
						<td><input type="text" name="CourseTeacher" value="" ></td>
					</tr>
					
					<tr>
						<td>Course Program</td>
						<tr></tr>
						<td><input type="text" name="CourseProgram" value="" ></td>
					</tr>
					
					<tr>
						<td>Course Time</td>
						<tr></tr>
						<td><input type="text" name="CourseTime" value="" ></td>
					</tr>
					
					<tr>
						<td>Upload Course File</td>
						<tr></tr>
						<td><input type="file" name="CourseFile" value="" ></td>
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