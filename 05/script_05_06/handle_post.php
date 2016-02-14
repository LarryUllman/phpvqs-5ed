<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.6 - handle_post.php #5
/* This script receives five values from posting.html:
first_name, last_name, email, posting, submit */

// Address error management, if you want.

// Get the values from the $_POST array:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting']);

// Create a full name variable:
$name = $first_name . ' ' . $last_name;

// Get a word count:
$words = str_word_count($posting);

// Get a snippet of the posting:
$posting = substr($posting, 0, 50);

// Print a message:
print "<div>Thank you, $name, for your posting:
<p>$posting...</p>
<p>($words words)</p></div>";

?>
</body>
</html>