<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>
	<h1>Mmm...soups</h1>
	<?php
		// create the array
		$soups = [
			'Monday' => 'Clam Chowder',
			'Thuesday' => 'White Chicken',
			'Wednesday' => 'Vegetarian'
		];
		// count and print the current number of elements:
		$count1 = count($soups);
		print "<p>The soups array originally had $count1 elements.</p>";
		//Add three items to the array:
		$soups['Thursday'] = 'Chicken Noodle';
		$soups['Friday'] = 'Tomato';
		$soups['Saturday'] = 'Cream of Brocoli';
		//count and print the number of element again:
		$count2 = count($soups);
		print "<p>After adding 3 more soups,the array now has $count2 elements.</p>";
		// try to print the array:
		print "<p>$soups</p>";
		//print the contents of the array:
		print_r($soups);
	?>
</body>
</html>