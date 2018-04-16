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
			<li><a href="add_user.php">Add User</a></li>
			<li><a href="delete_user.php">Delete User</a></li>
		</ul>
	</nav>
	
	<main>
		<?php
			$db = mysqli_connect('localhost','root','opendoor','library')
				or die('ERR Could not connect to database');
				
			$result = mysqli_query($db,'SELECT * FROM user');
				
			echo '<table id="table_id" class="display" style="width:100%">
				  <thead>
					<tr>
						<th>User ID</th>
						<th>Name</th>
						<th>Street Address</th>
						<th>City</th>
						<th>State</th>
						<th>Zip Code</th>
						<th>Email</th>
						<th>Phone</th>
					</tr>
				   </thead>
				   <tbody>';
				   
			while($row = mysqli_fetch_array($result)) {
				echo '<tr>';
				echo '<td>' . $row['userID'] . '</td>';
				echo '<td>' . $row['fName'] . ' ' . $row['lName'] . '</td>';
				echo '<td>' . $row['streetAddress'] . '</td>';
				echo '<td>' . $row['city'] . '</td>';
				echo '<td>' . $row['state'] . '</td>';
				echo '<td>' . $row['zipcode'] . '</td>';
				echo '<td>' . $row['email'] . '</td>';
				echo '<td>' . $row['phone'] . '</td>';
				echo '</tr>';
			}
					   
			echo '</tbody></table>';
			
			mysqli_close($db);
		?>
	</main>
	
	<script>
		$(document).ready(function() {
			var table = $('#table_id').DataTable();
		});
	</script>

	<footer>
		&copy; 2018 Zachary Naumann
	</footer>
</body>
</html>