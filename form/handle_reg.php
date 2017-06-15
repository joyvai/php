<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error{color:red;}
		
	</style>
</head>
<body>
	<h1>Registration Results</h1>
	<?php
		//flag variable to track successs:
		$okay = true;
		// if there were no errors, print a success message:
		// Validate the email address:
		if (empty($_POST['email'])) {
			# code...
			print '<p class="error">Pleasee enter your email address.</p>';
			$okay = false;
		}
		if (empty($_POST['password'])) {
			# code...
			print '<p class="error">Please enter your passoword.</p>';
			$okay = false;
		}	
		// check the two passwords for equality:
		// use brackets must.
		if(($_POST['password']) != ( $_POST['confirm'])){
			print '<p class="error"> Your confirmed password does not match the original password.</p>';
			$okay = false;
		}

		// Validate the birth year
		if (is_numeric($_POST['year'])){
			$age = 2016 - $_POST['year'];
		}
		else
		{
			print '<p class="error">Please enter the year you were born as four digits.</p>';
			$okay = false;
		}

		if ($okay){
			print '<p>You have been successfully resgistered(but not really).</p>';
			print "<p>You will turn $age this year.</p>";
		}
	?>
</body>
</html>
