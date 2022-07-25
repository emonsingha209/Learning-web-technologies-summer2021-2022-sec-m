<?php
	session_start();
	if(isset($_COOKIE['status'])) {
?>
<html>
<head>
	<title>View CV | Manager</title>
</head>
<body>
	<h2>CV of Managers: </h2>
		<table border="1">
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>CV</td>
			</tr>
			
<?php
		$file = fopen('manager.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$manager = explode('|', $data);
        if( $manager[0] != null && $manager[2] != null && $manager[10] != null )
		{
?>
			<tr>
				<td><?=$manager[0]?></td>
				<td><?=$manager[2]?></td>
				<td><?=$manager[10]?></td>
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