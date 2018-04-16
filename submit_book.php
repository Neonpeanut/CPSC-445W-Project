<?php
	$db = mysqli_connect('localhost','root','opendoor','library')
				or die('ERR Could not connect to database');
				
	$isbn = $_POST['isbn'];
	$title = $_POST['title'];
	$authorF = $_POST['authorF'];
	$authorL = $_POST['authorL'];
	$desc = $_POST['desc'];
	
	$query = "
		INSERT INTO book (isbn, title, authorF, authorL, description)
		VALUES ('$isbn', '$title', '$authorF', '$authorL', '$desc')";

	$res = mysqli_query($db,$query) or die(mysqli_errno($db).':'.mysqli_error($db));
				
	mysqli_close($db);
?>