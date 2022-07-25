<?php
	session_start();
	if(isset($_COOKIE['status'])) {
?>
<html>
<head>
	<title>Student List | Student</title>
</head>
<body>
<br><br>
<h2>Student List: </h2>
		<table border="1">
				<td>Name</td>
				<td>Email</td>
				<td>Contact Number</td>
				<td>Institute</td>
				<td>Address</td>
				<td>Division</td>
				<td>Postal Code</td>
				<td>Gender</td>
				<td>Date of Birth</td>
				<td>Blood Group</td>
				<td>Picture</td>
			</tr>
			
<?php
		$file = fopen('student.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$student = explode('|', $data);
        if( $student[0] != null && $student[2] != null && $student[3] != null && $student[4] != null && $student[5] != null && $student[6] != null && $student[7] != null && $student[8] != null && $student[9] != null && $student[10] != null && $student[11] != null)
		{
?>
			<tr>
				<td><?=$student[0]?></td>
				<td><?=$student[2]?></td>
				<td><?=$student[3]?></td>
				<td><?=$student[4]?></td>
				<td><?=$student[5]?></td>
				<td><?=$student[6]?></td>
				<td><?=$student[7]?></td>
				<td><?=$student[8]?></td>
				<td><?=$student[9]?></td>
				<td><?=$student[10]?></td>
				<td><img src=<?=$student[11]?> width="100px" height="100px" /></td>
			</tr>
<?php
		}
		}
?>
			
		</table>	
		<tr>
			<td>
			<br> </br>
							
			<a href="student.php"> Back </a>
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