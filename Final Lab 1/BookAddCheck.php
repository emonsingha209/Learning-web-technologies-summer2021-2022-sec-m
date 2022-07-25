<?php 
	session_start();
	if(isset($_COOKIE['status'])){
	$bookname = $_POST['BookName'];
	$authorname = $_POST['AuthorName'];
	$booktype = $_POST['BookType'];
	$bookedi = $_POST['BookEdi'];
    $bookfile = $_POST['BookFile'];

	if($bookname == null || $authorname == null || $booktype == null || $bookedi == null || $bookfile == null){
		echo "Please make sure all are filled up";
?>	
<html>
<body>	
	<tr>
		<td>
			<br></br>
			<a href="Manager.php"> Back </a>
		</td>
	</tr>
<?php
	}
	else{
		$file = fopen('booklist.txt', 'a');
		$book = $bookname."|".$authorname."|".$booktype."|".$bookedi."|".$bookfile."\r\n";
		fwrite($file, $book);

		if($file == 'create'){
				header('location: Manager.php');
			}
		else{
			header('location: LogIn.html');
		}
	}
	}
	else {
		header('location:LogIn.html');
	}
?>