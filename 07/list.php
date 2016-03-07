<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>I Have This Sorted Out</title>
</head>
<body>
<?php // Script 7.7 - list.php
/* This script receives a string in $_POST['words']. It then turns it into an array,
sorts the array alphabetically, and reprints it. */

// Address error management, if you want.

// Turn the incoming string into an array:
$words_array = explode(' ' , $_POST['words']);

// Sort the array:
sort($words_array);

// Turn the array back into a string:
$string_words = implode('<br>', $words_array);

// Print the results:
print "<p>An alphabetized version of your list is: <br>$string_words</p>";

?>
</body>
</html>