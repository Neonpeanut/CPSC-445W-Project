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
		<h2>Check Out</h2>
		<p>Required fields are marked with an asterisk *</p>
		<form method="post" action="check.php">
			<label for="isbn">*ISBN:</label>
			<input type="text" name="isbn" id="isbn" required>
			<label for="userID">*User ID:</label>
			<input type="number" name="userID" id="userID" required>
			<label for="dueDate">*Due Date:</label>
			<input type="date" name="dueDate" id="dueDate" required>
			<input type="submit" value="Submit"><input type="button" value="Cancel" onClick="history.back()">
		</form>
	</main>
	
	<footer>
		&copy; 2018 Zachary Naumann
	</footer>
</body>
</html>