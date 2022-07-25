<?php 
	session_start();
	if(isset($_COOKIE['status'])){
	$name = $_POST['username'];
	$email = $_POST['email'];
	$address = $_POST['address'];
    $division = $_POST['division'];
    $postalcode = $_POST['postalcode'];
	$contnum = $_POST['contnum'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$bloodgroup = $_POST['BloodGroup'];
	$cv = $_POST['cv'];
	$picture = $_POST['picture'];
	$password = $_POST['Password'];
	$conpassword = $_POST['Confirm_Password'];

	if($name == null || $password== null || $conpassword == null || $email == null || $contnum == null || $address == null || $division == null|| $gender == null || $postalcode == null || $dob == null || $bloodgroup == null || $cv == null || $picture == null ){
		echo "Please make sure all are filled up";
?>	
<html>
<body>	
	<tr>
		<td>
			<br></br>
			<a href="AdminRegistration.php"> Back </a>
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
			<a href="AdminRegistration.php"> Back </a>
		</td>
	</tr>
</body>
</html>
<?php
	}
	else{
		$file = fopen('admin.txt', 'a');
		$admin = $name."|".$password."|".$email."|".$contnum."|".$address."|".$division."|".$postalcode."|".$gender."|".$dob."|".$bloodgroup."|".$cv."|".$picture."\r\n";
		fwrite($file, $admin);

		if($file == 'create'){
				header('location: Admin.php');
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