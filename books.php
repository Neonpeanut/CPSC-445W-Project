<!doctype html>
<head>
	<title>Library Database</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="styles.css" rel="stylesheet">
	<link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
	<script src="jquery-3.3.1.min.js" charset="utf8" type="text/javascript"></script>
	<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf8" type="text/javascript"></script>
</head>
<body>
	<header>
		<h1>Library Database</h1>
	</header>
	
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="add_book.php">Add Book</a></li>
			<li><a href="delete_book.php">Delete Book</a></li>
			<li><a href="check_out.php">Check Out</a></li>
			<li><a href="reserve_book.php">Reserve</a></li>
			<li><a href="check_in.php">Check In</a></li>
		</ul>
	</nav>
	
	<main>
		<?php
			$db = mysqli_connect('localhost','root','opendoor','library')
				or die('ERR Could not connect to database');
				
			$result = mysqli_query($db,'SELECT * FROM book');
				
			echo '<table id="table" class="display" style="width:100%">
				  <thead>
					<tr>
						<th>ISBN</th>
						<th>Title</th>
						<th>Author</th>
						<th>Description</th>
						<th>Status</th>
					</tr>
				   </thead>
				   <tbody>';
				   
			while($row = mysqli_fetch_array($result)) {
				echo '<tr>';
				echo '<td>' . $row['isbn'] . '</td>';
				echo '<td>' . $row['title'] . '</td>';
				echo '<td>' . $row['authorF'] . ' ' . $row['authorL'] . '</td>';
				echo '<td>' . $row['description'] . '</td>';
				echo '<td>' . $row['status'] . '</td>';
				echo '</tr>';
			}
					   
			echo '</tbody></table>';
			
			mysqli_close($db);
		?>
	</main>
	
	<script>
		$(document).ready(function() {
			var table = $('#table').DataTable();
		});
	</script>
	
	<footer>
		&copy; 2018 Zachary Naumann
	</footer>
</body>
</html>