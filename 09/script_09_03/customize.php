<?php // Script 9.1 - customize.php

// Handle the form if it has been submitted:
if (isset($_POST['font_size'], $_POST['font_color'])) {
	
	// Send the cookies:
	setcookie('font_size', $_POST['font_size'], time()+10000000, '/');
	setcookie('font_color', $_POST['font_color'], time()+10000000, '/');

	// Message to be printed later:
	$msg = '<p>Your settings have been entered! Now see them <a href="view_settings.php">in action</a>.</p>';
	
} // End of submitted IF.
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customize Your Settings</title>
</head>
<body>
<?php // If the cookies were sent, print a message.
if (isset($msg)) {
	print $msg;
}
?>

<p>Use this form to set your preferences:</p>

<form action="customize.php" method="post">
	<select name="font_size">
	<option value="">Font Size</option>
	<option value="xx-small">xx-small</option>
	<option value="x-small">x-small</option>
	<option value="small">small</option>
	<option value="medium">medium</option>
	<option value="large">large</option>
	<option value="x-large">x-large</option>
	<option value="xx-large">xx-large</option>
	</select>
	<select name="font_color">
	<option value="">Font Color</option>
	<option value="999">Gray</option>
	<option value="0c0">Green</option>
	<option value="00f">Blue</option>
	<option value="c00">Red</option>
	<option value="000">Black</option>
	</select>
	<input type="submit" name="submit" value="Set My Preferences">
</form>

</body>
</html>