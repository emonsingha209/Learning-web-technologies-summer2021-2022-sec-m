<?php 
	session_start();
	
	require_once "../model/userModel.php";
	
	$username = $_POST['UserName'];
	$password = $_POST['Password'];
	$usertype = $_POST['UserType'];

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
	else
	{
		$status = login($username, $password, $usertype);
		if($status)
		{
			$_SESSION['status'] = true;
			$_SESSION['user'] = $username;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/Admin.php');
		}
		else {
			echo "Incorrect password or user name";
		}
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