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
	// // Adjust for HTML tags:
	// $html_post = htmlentities($_POST['posting']);
	// $strip_post = strip_tags($_POST['posting']);
	//print a message:
	print "<div>Thank you, $name, for your posting.<p>$posting</p></div>";
	$name=urlencode($name);
	$email=urlencode($_POST['email']);
	print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a>to continue.</p>"

?>
</body>
</html>