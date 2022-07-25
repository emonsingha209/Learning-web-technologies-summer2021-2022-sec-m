<?php 
	session_start();
	
	$username = $_POST['UserName'];
	$password = $_POST['Password'];
	$usertype = $_POST['usertype'];

	if($username == null || $password == null || $usertype == null){
		echo "Please enter your data again.";
?>		
<html>
<body>
	<tr>
		<td>
			<br></br>
			<a href="LogIn.html"> Back </a>
		</td>
	</tr>
<?php
	}
	
	elseif($username == "eduwebsiteAdmin" && $password == "edu42344"){
		$_SESSION['status'] = true;
		$_SESSION['user'] = $username;
		setcookie('status', 'true', time()+3600, '/');
		header('location: Admin.php');
	}
	elseif($usertype == 'Admin') {
		$file = fopen('admin.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$admin = explode('|', $data);
			if($username == trim($admin[0]) && $password == trim($admin[1])){
				$_SESSION['status'] = true;
				$_SESSION['user'] = $username;
				setcookie('status', 'true', time()+3600, '/');
				header('location: Admin.php');
			}
		}
		echo "Incorrect password or user name";
?>
		<tr>
		<td>
			<br></br>
			<a href="LogIn.html"> Back </a>
		</td>
		</tr>
<?php
	}
	elseif($usertype == 'Manager') {
		$file = fopen('manager.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$manager = explode('|', $data);
			if($username == trim($manager[0]) && $password == trim($manager[1])){
				$_SESSION['status'] = true;
				$_SESSION['user'] = $username;
				setcookie('status', 'true', time()+3600, '/');
				header('location: Manager.php');
			}
		}
	}

	else{
		echo "Invalid user";
?>		
	<tr>
		<td>
			<br></br>
			<a href="LogIn.html"> Back </a>
		</td>
	</tr>
</body>
</html>
<?php
	}
?>