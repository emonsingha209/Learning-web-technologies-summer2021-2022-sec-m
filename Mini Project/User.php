<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>User's Home Page</title>
</head>
<body>
	<h1>Welcome User</h1>
	<a href="Profile.php"> Profile </a> | 
	<a href="Change_Password.php"> Change Password </a> |
	<a href="Log_out.php"> Log out </a>
</body>
</html>


<?php 
	}else{
		echo "invalid request";
	}  
?>