<?php
	session_start();
	$username= $_SESSION['user'];
?>
<html>
<head>
	<title>Manager Profile | Manager</title>
</head>
<body style = "background:lightgray;">

	<center>

		<fieldset style="width:1000px;height:200px;background:red">

			<table>
				<tr>
				   <td>
					   <h1 style="color:white;font-size:100px;"> 
					   Shapners
					   </h1> 
				 </td>
				</tr>
			</table>


		</fieldset>

	</center>
	<br></br>
<body>
		<h1>Manager Profile: </h1>
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
		$file = fopen('manager.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$manager = explode('|', $data);
        if( $manager[0] != null && $manager[2] != null && $manager[3] != null && $manager[4] != null && $manager[5] != null && $manager[6] != null && $manager[7] != null && $manager[8] != null && $manager[9] != null && $manager[10] != null && $manager[11] != null)
		{
		if($username==$manager[0])
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
				<a href="Manager.php"> Back </a>
			</td>
		</tr>
</body>
</html>