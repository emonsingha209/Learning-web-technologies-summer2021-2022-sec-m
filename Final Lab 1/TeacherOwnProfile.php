<?php
	session_start();
	if(isset($_COOKIE['status'])) {
?>

<?php
	session_start();
	$username = $_SESSION['user'];
?>
<html>
<head>
	<title>Profile | Teacher</title>
</head>
<body>
<br><br>
		<table border="1">
			<tr>
				<td>Email</td>
				<td>Name</td>
				<td>Contact Number</td>
				<td>institute</td>
				<td>Address</td>
				<td>Division</td>
				<td>Postal Code</td>
				<td>Gender</td>
				<td>Date of Birth</td>
				<td>Blood Group</td>
				<td>Nid number</td>
				<td>Picture</td>
			</tr>
			
<?php
		$file = fopen('teacher.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$teacher = explode('|', $data);
        if( $teacher[0] != null && $teacher[2] != null && $teacher[3] != null && $teacher[4] != null && $teacher[5] != null && $teacher[6] != null && $teacher[7] != null && $teacher[8] != null && $teacher[9] != null && $teacher[10] != null && $teacher[11] != null && $teacher[12] != null)
		{
			if($username == $teacher[0]) {
?>
			<tr>
				<td><?=$teacher[0]?></td>
				<td><?=$teacher[2]?></td>
				<td><?=$teacher[3]?></td>
				<td><?=$teacher[4]?></td>
				<td><?=$teacher[5]?></td>
				<td><?=$teacher[6]?></td>
				<td><?=$teacher[7]?></td>
				<td><?=$teacher[8]?></td>
				<td><?=$teacher[9]?></td>
				<td><?=$teacher[10]?></td>
				<td><?=$teacher[11]?></td>
				<td><img src=<$admin[12]?> width="100px" height="100px" /></td>
			</tr>
<?php
		}
		}
		}
?>
			
		</table>	
		<tr>
						<td>
						<br> </br>
							
							<a href="Teacher.php"> Back </a>
						</td>
					</tr>
					
					<tr>
						<td>
						<br> </br>
							
							<a href="LogIn.html"> Sign out </a>
						</td>
					</tr>
</body>
</html>
<?php
	}
	else {
		header ('location:LogIn.html');
	}
?>