<?php
	session_start();
	if(isset($_COOKIE['status'])){
	$username = $_SESSION['user'];
?>
<html>
<head>
	<title>Profile | Admin</title>
</head>
<body>
		<h2>Profile: </h2>
		<table border="1">
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Contact Number</td>
				<td>Address</td>
				<td>Division</td>
				<td>Postal Code</td>
				<td>Gender</td>
				<td>Date of birth</td>
				<td>Blood Group</td>
				<td>CV</td>
				<td>Picture</td>
			</tr>
<?php
		$file = fopen('admin.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$admin = explode('|', $data);
        if( $admin[0] != null && $admin[2] != null && $admin[3] != null && $admin[4] != null && $admin[5] != null && $admin[6] != null && $admin[7] != null && $admin[8] != null && $admin[9] != null && $admin[10] != null && $admin[11] != null)
		{
			if($username == $admin[0]) {
?>
			<tr>
				<td><?=$admin[0]?></td>
				<td><?=$admin[2]?></td>
				<td><?=$admin[3]?></td>
				<td><?=$admin[4]?></td>
				<td><?=$admin[5]?></td>
				<td><?=$admin[6]?></td>
				<td><?=$admin[7]?></td>
				<td><?=$admin[8]?></td>
				<td><?=$admin[9]?></td>
				<td><?=$admin[10]?></td>
				<td><img src=<?=$admin[11]?> width="100px" height="100px" /></td>
			</tr>
<?php
		}
		}
		}
?>
		</table>
		<tr>
			<td>
				<br> </br>
				<a href="Admin.php"> Back </a>
			</td>
		</tr>
</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>