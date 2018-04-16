<?php
	$db = mysqli_connect('localhost','root','opendoor','library')
				or die('ERR Could not connect to database');
				
	$isbn = $_POST['isbn'];
	$userID = $_POST['userID'];
	$dueDate = $_POST['dueDate'];
	
	$query = "UPDATE book SET status='Checked Out' WHERE isbn='$isbn'";

	$res = mysqli_query($db,$query) or die(mysqli_errno($db).':'.mysqli_error($db));
	
	$query = "
		INSERT INTO booksBorrowed (isbn, userID, dueDate)
		VALUES ('$isbn', '$userID', '$dueDate')";
	
	$res = mysqli_query($db,$query) or die(mysqli_errno($db).':'.mysqli_error($db));
				
	mysqli_close($db);
?>