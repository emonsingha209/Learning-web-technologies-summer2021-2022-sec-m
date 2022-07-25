<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Manager | Shapners </title>
</head>
<body>

	<center>

		<fieldset>

			<table>
				<tr>
				   <td>
					   <h1>
					   Shapners
					   </h1> 
				 </td>
				</tr>
			</table>


		</fieldset>

	</center>
	<br></br>

	
     <center>
	
    <h1>Welcome <?php echo $_SESSION['user'] ?> </h1>
	<table>
	    <tr>
			<td>
				<a href="ManagerProfile.php">Manager Own Profile</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ManagerRegistration.html">Add new Manager</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="ViewManagerList.php">View Manager List</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="UpdateManager.html">Update Manager Profile</a>
			</td>
		</tr>
		
		<tr>
			<td>
				<a href="teacher.txt">View Teacher List</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="student.txt">View Student List</a>
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