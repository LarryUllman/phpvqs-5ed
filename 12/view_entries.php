<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View My Blog</title>
</head>
<body>
<h1>My Blog</h1>
<?php // Script 12.6 - view_entries.php
/* This script retrieves blog entries from the database. */

// Connect and select:
$dbc = mysqli_connect('localhost', 'username', 'password', 'myblog');

// Define the query:
$query = 'SELECT * FROM entries ORDER BY date_entered DESC';

if ($r = mysqli_query($dbc, $query)) { // Run the query.

	// Retrieve and print every record:
	while ($row = mysqli_fetch_array($r)) {
		print "<p><h3>{$row['title']}</h3>
		{$row['entry']}<br>
		<a href=\"edit_entry.php?id={$row['id']}\">Edit</a>
		<a href=\"delete_entry.php?id={$row['id']}\">Delete</a>
		</p><hr>\n";
	}

} else { // Query didn't run.
	print '<p style="color: red;">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
} // End of query IF.

mysqli_close($dbc); // Close the connection.

?>
</body>
</html>