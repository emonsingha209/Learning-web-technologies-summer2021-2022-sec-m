<?php
	session_start();
	if(isset($_COOKIE['status'])) {
?>
<html>
<head>
	<title>View CV | Teacher</title>
</head>
<body>
	<h2>CV of Teachers: </h2>
		<table border="1">
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>CV</td>
			</tr>
			
<?php
		$file = fopen('teacher.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$teacher = explode('|', $data);
        if( $teacher[0] != null && $teacher[2] != null && $teacher[12] != null )
		{
?>
			<tr>
				<td><?=$teacher[0]?></td>
				<td><?=$teacher[2]?></td>
				<td><?=$teacher[12]?></td>
			</tr>
<?php
		}
		}
?>
			
		</table>	
		<tr>
			<td>
			<br> </br>
							
			<a href="ManageCV.php"> Back </a>
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