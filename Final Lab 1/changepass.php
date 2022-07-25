<?php
	session_start();
	$username = $_SESSION['user'];
	$oldpassword = $_POST['oldpassword'];
	$newpassword = $_POST['newpassword'];
	$connewpassword = $_POST['connewpassword'];
	if($newpassword != $connewpassword)
	{
		echo "Password missmatch";
	}
	$file = fopen('admin.txt', 'r');
			
	while(!feof($file)){

		$data = fgets($file);
		$admin = explode('|', $data);
        if($admin[0] == $username && $admin[1] == $oldpassword)
		{
			$admin[1] = $newpassword;
			break;
		}
	}
	
?>