<?php
	$db = mysqli_connect('localhost','root','opendoor','library')
				or die('ERR Could not connect to database');
				
	$isbn = $_POST['isbn'];
	
	$query = "UPDATE book SET status='Reserved' WHERE isbn='$isbn'";

	$res = mysqli_query($db,$query) or die(mysqli_errno($db).':'.mysqli_error($db));
				
	mysqli_close($db);
?>