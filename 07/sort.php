<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Little Gradebook</title>
</head>
<body>
<?php // Script 7.5 - sort.php
/* This script creates, sorts, and prints out an array. */

// Address error management, if you want.

// Create the array:
$grades = [
	'Richard' => 95, 
	'Sherwood' => 82,
	'Toni' => 98,
	'Franz' => 87, 
	'Melissa' => 75,
	'Roddy' => 85
];

// Print the original array:
print '<p>Originally the array looks like this: <br>';
foreach ($grades as $student => $grade) {
	print "$student: $grade<br>\n";
}
print '</p>';

// Sort by value in reverse order, then print again:
arsort($grades);
print '<p>After sorting the array by value using arsort(), the array looks like this: <br>';
foreach ($grades as $student => $grade) {
	print "$student: $grade<br>\n";
}
print '</p>';

// Sort by key, then print again:
ksort($grades);
print '<p>After sorting the array by key using ksort(), the array looks like this: <br>';
foreach ($grades as $student => $grade) {
	print "$student: $grade<br>\n";
}
print '</p>';

?>
</body>
</html>