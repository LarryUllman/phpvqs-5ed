<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Thanks!</title>
</head>
<body>
<?php // Script 5.x - thanks.php
/* This is the page the user sees after clicking on the link in handle_post.php (Script 5.5).
This page is not formally developed in the book.
This page receives name and email variables in the URL. */

// Address error management, if you want.

// Get the values from the $_GET array:
$name = $_GET['name'];
$email = $_GET['email'];

// Print a message:
print "<p>Thank you, $name. We will contact you at $email.</p>";

?>
</body>
</html>