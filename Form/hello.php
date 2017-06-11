<!DOCTYPE html>
<html>
<head>
	<title>Greetings!</title>
	<style type="text/css">
		.bold{font-weight: bolder;}
	</style>
</head>
<body>
	<?php
		// line 12 & 13 tells if anything wrong with the script. 
		ini_set('display_errors', 1);
		error_reporting(E_ALL); // show all posible problems
		//
		// say "Hello":
		$name = $_GET['myname'];
		print "<p>Hello, <span class=\"bold\">$name</span>!</p>";
	?>
</body>
</html>