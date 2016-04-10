<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sticky Text Inputs</title>
</head>
<body>
<?php // Script 10.3 - sticky2.php 
/* This script defines and calls a function that creates a sticky text input. */

// This function makes a sticky text input.
// This function requires two arguments be passed to it.
// A third argument is optional (it has a default value).
function make_text_input($name, $label, $size = 20) {
	
	// Begin a paragraph and a label:
	print '<p><label>' . $label . ': ';
	
	// Begin the input:
	print '<input type="text" name="' . $name . '" size="' . $size . '" ';
	
	// Add the value:
	if (isset($_POST[$name])) {
		print ' value="' . htmlspecialchars($_POST[$name]) . '"';
	}
	
	// Complete the input, the label and the paragraph:
	print '></label></p>';
	
} // End of make_text_input() function.

// Make the form:
print '<form action="" method="post">';

// Create some text inputs:
make_text_input('first_name', 'First Name');
make_text_input('last_name', 'Last Name', 30);
make_text_input('email', 'Email Address', 50);

print '<input type="submit" name="submit" value="Register!"></form>';

?>
</body>
</html>