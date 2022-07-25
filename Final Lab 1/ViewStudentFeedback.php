<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Student Feedback | Admin</title>
</head>
<body>
		<h2>Feedback: </h2>
		<table border="1">
			<tr>
				<td>Student Name</td>
				<td>Feedback</td>
			</tr>
<?php
		$file = fopen('studentFeedback.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$stufdbk = explode('|', $data);
        if( $stufdbk[0] != null && $stufdbk[1] != null)
		{
?>
			<tr>
				<td><?=$stufdbk[0]?></td>
				<td><?=$stufdbk[1]?></td>
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