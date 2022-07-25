<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Teacher Feedback | Admin</title>
</head>
<body>
		<h2>Feedback: </h2>
		<table border="1">
			<tr>
				<td>Teacher Name</td>
				<td>Feedback</td>
			</tr>
<?php
		$file = fopen('teacherFeedback.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$tchrfdbk = explode('|', $data);
        if( $tchrfdbk[0] != null && $tchrfdbk[1] != null)
		{
?>
			<tr>
				<td><?=$tchrfdbk[0]?></td>
				<td><?=$tchrfdbk[1]?></td>
			</tr>
<?php
		}
		}
?>
		</table>
		<tr>
			<td>
				<br> </br>
				<a href="LogIn.html"> Back </a>
			</td>
		</tr>
</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>