<?php 
	session_start();
	$upoption = $_POST['upoption'];
?>
<html>
<head>
	<title> Update Admin Profile | Admin</title>
</head>
	<form method="post" action="UpdateAdmin.php" enctype="">
		<fieldset>
			<legend>Update Admin Profile</legend>
<?php
	if($upoption == null){
		echo "Please enter your data again.";
?>
	<tr>
		<td>
			<br></br>
			<a href="UpdateAdmin.html"> Back </a>
		</td>
	</tr>
<?php
	}
	else if($upoption == 'password') {
?>
	<tr>
		<td>Old Password</td>
		<tr></tr>
		<td><input type="password" name="old_password" value="" ></td>
	</tr>
	<tr>
		<td>New Password</td>
		<tr></tr>
		<td><input type="password" name="new_password" value="" ></td>
	</tr>
	<tr>
		<td>Confirm Password</td>
		<tr></tr>
		<td><input type="password" name="new_con_password" value="" ></td>
	</tr>
<?php	
	}
	else{
		echo "Invalid user";
?>
	<tr>
		<td>
			<br></br>
			<a href="UpdateAdmin.html"> Back </a>
		</td>
	</tr>
<?php
	}
?>
		</fieldset>
	</form>
</body>
</html>