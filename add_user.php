<?php
//add_book.php
?><!doctype html>
<head>
	<title>Library Database</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="styles.css" rel="stylesheet">
	<script src="jquery-3.3.1.min.js" charset="utf8" type="text/javascript"></script>
</head>
<body>
	<header>
		<h1>Library Database</h1>
	</header>
	
	<main>
		<h2>Add User</h2>
		<p>Required fields are marked with an asterisk *</p>
		<form method="post" action="submit_user.php">
			<label for="fName">*First Name:</label>
			<input type="text" name="fName" id="fName" required>
			<label for="lName">*Last Name:</label>
			<input type="text" name="lName" id="lName" required>
			<label for="streetAddress">Street Address:</label>
			<input type="text" name="streetAddress" id="streetAddress">
			<label for="city">City:</label>
			<input type="text" name="city" id="city">
			<label for="state">State:</label>
			<input type="text" name="state" id="state">
			<label for="zipcode">Zip Code:</label>
			<input type="text" name="zipcode" id="zipcode">
			<label for="email">*Email:</label>
			<input type="email" name="email" id="email" required>
			<label for="phone">Phone:</label>
			<input type="text" name="phone" id="phone">
			<input type="submit" value="Submit"><input type="button" value="Cancel" onClick="history.back()">
		</form>
	</main>
	
	<footer>
		&copy; 2018 Zachary Naumann
	</footer>
</body>
</html>