<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>No soup for you!</title>
</head>
<body>
<h1>Mmm..soups</h1>
<?php
	$soups = [
		'Monday' => 'Clam Chowder',
		'Thuesday' => 'White Chicken Chili',
		'Wednesday' => 'Vegetarian',
		'Thursday' => 'Chicken Noodle',
		'Friday' => 'Tomato',
		'Saturday' => 'Cream of Brocoli'
	];
	//print the key and value
	foreach ($soups as $day => $soup) {
		# code...
		print "<p>$day: $soup</p>";
	}
?>
</body>
</html>