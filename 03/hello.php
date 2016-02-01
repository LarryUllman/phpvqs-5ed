<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Greetings!</title>
	<style type="text/css">
	.bold {
		font-weight: bolder;
	}
	</style>
</head>
<body>
<?php // Script 3.7 - hello.php 

ini_set('display_errors', 1); // Let me learn from my mistakes!
error_reporting(E_ALL); // Show all possible problems!

// This page should receive a name value in the URL.

// Say "Hello":
$name = $_GET['name'];
print "<p>Hello, <span class=\"bold\">$name</span>!</p>";

?>
</body>
</html>