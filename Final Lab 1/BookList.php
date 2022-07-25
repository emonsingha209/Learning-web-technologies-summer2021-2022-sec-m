<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Book List | Sharpners</title>
</head>
<body>
		<h2>Book List: </h2>
		<table border="1">
			<tr>
				<td>Book Name</td>
				<td>Author</td>
				<td>Type</td>
				<td>Latest Edition</td>
				<td>File</td>
			</tr>
<?php
		$file = fopen('BookList.txt', 'r');
			
		while(!feof($file)){

		$data = fgets($file);
		$book = explode('|', $data);
        if( $book[0] != null && $book[1] != null && $book[2] != null && $book[3] != null && $book[4] != null )
		{
?>
			<tr>
				<td><?=$book[0]?></td>
				<td><?=$book[1]?></td>
				<td><?=$book[2]?></td>
				<td><?=$book[3]?></td>
				<td><?=$book[4]?></td>
			</tr>
<?php
		}
		}
?>
		</table>
</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>