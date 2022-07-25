<?php 
	session_start();
	if(isset($_COOKIE['status'])){
	$username = $_SESSION['user'];
	$upname = $_POST['upusername'];
	$upemail = $_POST['upemail'];
	$upaddress = $_POST['upaddress'];
    $updivision = $_POST['updivision'];
    $uppostalcode = $_POST['uppostalcode'];
	$upcontnum = $_POST['upcontnum'];
	$upgender = $_POST['upgender'];
	$updob = $_POST['updob'];
	$upbloodgroup = $_POST['upBloodGroup'];
	$upcv = $_POST['upcv'];
	$uppicture = $_POST['uppicture'];
	$uppassword = $_POST['upPassword'];
	$upconpassword = $_POST['upConfirm_Password'];

	if($upname == null || $uppassword== null || $upconpassword == null || $upemail == null || $upcontnum == null || $upaddress == null || $updivision == null|| $upgender == null || $uppostalcode == null || $updob == null || $upbloodgroup == null || $upcv == null || $uppicture == null ){
		echo "Please make sure all are filled up";
?>	
<html>
<body>	
	<tr>
		<td>
			<br></br>
			<a href="AdminProfileUpdate.php"> Back </a>
		</td>
	</tr>
<?php
	}
	elseif($uppassword != $upconpassword) {
		echo "Please check the password again.";
?>		
	<tr>
		<td>
			<br></br>
			<a href="AdminProfileUpdate.php"> Back </a>
		</td>
	</tr>
<?php
	}
	else{

		$file = fopen('admin.txt', 'r');
		
		$updated = "";
		
		while (!feof($file)) {
			$data=fgets($file);
			$admin = explode('|', $data);
			if($username == $admin[0]) {
				$data = $upname."|".$uppassword."|".$upemail."|".$upcontnum."|".$upaddress."|".$updivision."|".$uppostalcode."|".$upgender."|".$updob."|".$upbloodgroup."|".$upcv."|".$uppicture."\r\n";
			}
			$updated .= $data;
		}
		$file = fopen('admin.txt', 'w');
		fwrite($file, $updated);
		echo "Profile Updated";
?>
	<tr>
		<td>
			<br></br>
			<a href="Admin.php"> Back </a>
		</td>
	</tr>
</body>
</html>
<?php
	}
	}
	else {
		header('location:LogIn.html');
	}
?>