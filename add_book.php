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
		<h2>Add Book</h2>
		<p>Required fields are marked with an asterisk *</p>
		<form method="post" action="submit_book.php">
			<label for="isbn">*ISBN:</label>
			<input type="text" name="isbn" id="isbn" required>
			<label for="title">*Title:</label>
			<input type="text" name="title" id="title" required>
			<label for="authorF">Author's <br>First Name:</label>
			<input type="text" name="authorF" id="authorF">
			<label for="authorL">Author's <br>Last Name:</label>
			<input type="text" name="authorL" id="authorL">
			<label for="desc">Description:</label>
			<textarea name="desc" id="desc" rows="3" cols="40"></textarea>
			<input type="submit" value="Submit"><input type="button" value="Cancel" onClick="history.back()">
		</form>
	</main>
	
	<footer>
		&copy; 2018 Zachary Naumann
	</footer>
</body>
</html>