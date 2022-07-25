
<?php 
	session_start();

	$name = $_POST['username'];
	$email = $_POST['email'];
	$address = $_POST['address'];
    $division = $_POST['division'];
    $postalcode = $_POST['postalcode'];
	$contnum = $_POST['contnum'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$bloodgroup = $_POST['BloodGroup'];
	$picture = $_POST['picture'];
	$password = $_POST['Password'];
	$conpassword = $_POST['Confirm_Password'];
	$institute = $_POST['institute'];
	

	if($name == null || $password== null || $conpassword == null || $email == null || $contnum == null || $address == null || $division == null || $gender == null || $postalcode == null || $dob == null || $bloodgroup == null  || $picture == null || $institute == null ){
		echo "Please make sure all are filled up";
?>	
<html>
<body>	
	<tr>
		<td>
			<br></br>
			<a href="UserType.html"> Back </a>
		</td>
	</tr>
<?php
	}
	elseif($password != $conpassword) {
		echo "Please check the password again.";
?>		
	<tr>
		<td>
			<br></br>
			<a href="UserType.html"> Back </a>
		</td>
	</tr>
</body>
</html>
<?php
	}
	else{
		$file = fopen('student.txt', 'a');
		$student = $name."|".$password."|".$email."|".$contnum."|".$institute."|".$address."|".$division."|".$postalcode."|".$gender."|".$dob."|".$bloodgroup."|".$picture."\r\n";
		fwrite($file, $student);

		if($file == 'create'){
				header('location: Student.php');
			}
		else{
			header('location: LogIn.html');
		}
	}
?>