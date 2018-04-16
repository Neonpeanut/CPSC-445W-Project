<?php
	$db = mysqli_connect('localhost','root','opendoor','library')
				or die('ERR Could not connect to database');
				
	$isbn = $_POST['isbn'];
	$userID = $_POST['userID'];
	
	$query = "UPDATE book SET status='Available' WHERE isbn='$isbn'";

	$res = mysqli_query($db,$query) or die(mysqli_errno($db).':'.mysqli_error($db));
	
	$query = "
		DELETE FROM booksBorrowed
		WHERE isbn='$isbn'";
	
	$res = mysqli_query($db,$query) or die(mysqli_errno($db).':'.mysqli_error($db));
				
	mysqli_close($db);
?>