<?php 
	session_start();

	$id = $_POST['Id'];
	$password = $_POST['Password'];
	$name = $_POST['Name'];
	$usertype = $_POST['User_Type'];
	$fname = $_POST['fname'];

	if($id == null || $password== null || $name == null){
		echo "Please make sure all are filled up";
	}
	else{

		$user = $id."|".$password."|".$name."|".$usertype."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);

		if($fname == 'create'){
				header('location: User.php');
			}
		else{
			header('location: Login.html');
		}
	}
?>