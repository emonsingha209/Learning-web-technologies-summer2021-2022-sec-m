<?php 
	session_start();
	if(isset($_COOKIE['status'])){
	$coursename = $_POST['CourseName'];
	$courseteacher = $_POST['CourseTeacher'];
	$courseprogram = $_POST['CourseProgram'];
	$coursetime = $_POST['CourseTime'];
    $coursefile = $_POST['CourseFile'];

	if($coursename == null || $courseteacher == null || $courseprogram == null || $coursetime == null || $coursefile == null){
		echo "Please make sure all are filled up";
?>	
<html>
<body>	
	<tr>
		<td>
			<br></br>
			<a href="Manager.php"> Back </a>
		</td>
	</tr>
<?php
	}
	else{
		$file = fopen('CourseList.txt', 'a');
		$book = $coursename."|".$courseteacher."|".$courseprogram."|".$coursetime."|".$coursefile."\r\n";
		fwrite($file, $book);

		if($file == 'create'){
				header('location: Manager.php');
			}
		else{
			header('location: LogIn.html');
		}
	}
	}
	else {
		header('location:LogIn.html');
	}
?>