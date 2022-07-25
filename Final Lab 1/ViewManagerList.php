<?php
	session_start();
?>
<html>
<head>
	<title>Manager List | Manager</title>
</head>
<body>

	<center>

		<fieldset>

			<table>
				<tr>
				   <td>
					   <h1>
					   Sharpners
					   </h1> 
				 </td>
				</tr>
			</table>


		</fieldset>

	</center>
	<br></br>
<body>
		<h2>Manager List: </h2>
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
                        <td>ACTION</td>
			</tr>
<?php
		$file = fopen('manager.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$manager = explode('|', $data);
        if( $manager[0] != null && $manager[2] != null && $manager[3] != null && $manager[4] != null && $manager[5] != null && $manager[6] != null && $manager[7] != null && $manager[8] != null && $manager[9] != null && $manager[10] != null && $manager[11] != null)
		{
?>
			<tr>
				<td><?=$manager[0]?></td>
				<td><?=$manager[2]?></td>
				<td><?=$manager[3]?></td>
				<td><?=$manager[4]?></td>
				<td><?=$manager[5]?></td>
				<td><?=$manager[6]?></td>
				<td><?=$manager[7]?></td>
				<td><?=$manager[8]?></td>
				<td><?=$manager[9]?></td>
				<td><?=$manager[10]?></td>
				<td><img src=<?=$manager[11]?>width="100px" height="100px" /></td>
                <td><a href="DelectManagerList.php">Delect</a></td>
				
			</tr>
<?php
		}
		}
?>
		</table>
		<tr>
			<td>
				<br> </br>
				<a href="ManageCV.php"> Back </a>
			</td>
		</tr>
</body>
</html>