<?php
	$db = mysqli_connect('localhost','root','opendoor','library')
				or die('ERR Could not connect to database');
				
	$fName = $_POST['fName'];
	$lName = $_POST['lName'];
	$streetAddress = $_POST['streetAddress'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	$query = "
		INSERT INTO user (fName, lName, streetAddress, city, state, zipcode, email, phone)
		VALUES ('$fName', '$lName', '$streetAddress', '$city', '$state', $zipcode, '$email', '$phone')";
	
	$res = mysqli_query($db,$query) or die(mysqli_errno($db).':'.mysqli_error($db));
		
	mysqli_close($db);
?>