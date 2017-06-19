<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$words_array = explode(' ', $_POST['words']);
	//explode string to array
	//sort the array 
	sort($words_array);
	// turn the array back into a string
	$string_words = implode('<br>', $words_array);
	//print the results
	print "<p>An alphabetized version of your list is: <br>$string_words</p>"
?>
</body>
</html>