<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php
	// this script receives five values from posting.html
	// first_name,last_name,email,posting,submit
	//get the values from the $_POST array:
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$posting = nl2br($_POST['posting'],false);

	//create a full name variable:
	$name = $first_name . ' ' . $last_name;
	//print a message:
	print "<div>Thank you, $name, for your posting:<p>$posting</p></div>";


?>
</body>
</html>