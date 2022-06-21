<?php 
	session_start();

	//print_r($_GET);  
	$id = $_POST['Id'];
	$password = $_POST['Password'];
	//echo $username;

	if($id == null || $password == null){
		echo "Please enter your data again.";
	}else{
		$file = fopen('user.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($id == trim($user[0]) && $password == trim($user[1])){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: User.php');
			}
		}
		echo "invalid user";
	}
?>