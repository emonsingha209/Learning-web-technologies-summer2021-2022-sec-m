<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Course List | Sharpners</title>
</head>
<body>
		<h2>Course List: </h2>
		<table border="1">
			<tr>
				<td>Course Name</td>
				<td>Course Teacher</td>
				<td>Course Title</td>
				<td>Course Time</td>
				<td>File</td>
			</tr>
<?php
		$file = fopen('CourseList.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$course = explode('|', $data);
        if( $course[0] != null && $course[1] != null && $course[2] != null && $course[3] != null && $course[4] != null )
		{
?>
			<tr>
				<td><?=$course[0]?></td>
				<td><?=$course[1]?></td>
				<td><?=$course[2]?></td>
				<td><?=$course[3]?></td>
				<td><?=$course[4]?></td>
			</tr>
<?php
		}
		}
?>
		</table>
</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>