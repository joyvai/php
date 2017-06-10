<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
<?php

	ini_set('display_errors', 1);

	$title = $_POST['title'];
	$name = $_POST['name'];
	$response = $_POST['response'];
	$comments = $_POST['comments'];

	// Print the received data:
	print "<p>Thank you, $title $name,for your comments.</p>
	<p>You stated that you found this example to be '$response' and added:<br>$comments</p>"
?>
</body>
</html>