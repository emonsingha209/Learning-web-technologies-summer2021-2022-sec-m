<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Admin | Sharpeners </title>
</head>
	<center>
	<h1>SHARPENERS</h1>
    <h2>Welcome <?php echo $_SESSION['user'] ?> </h2>
	<table>
		<tr>
			<td>
				<a href="AdminOwnProfile.php">Profile</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="AdminRegistration.php">Add New Admin</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ViewAdminList.php">View Admin List</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="AdminProfileUpdate.php">Update Profile</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManageManager.php">Manage Manager</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManageTeacher.php">Manage Teacher</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManageStudent.php">Manage Student</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="AdminManageCourse.php">Manage Course</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="AdminManageBook.php">Manage Book</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManageCV.php">View CV</a>
			</td>
		</tr>
		<tr>
			<td>
				<br> </br>
				<a href="LogOut.php">Log Out</a>
			</td>
		</tr>
	</table>
	</center>
</body>
</html>

<?php
	}
	else {
		header('location:LogIn.html');
	}
?>