<?php
	// need the session
	session_start();
	// set the page title and include the header file.
	define('TITLE', 'Welcome to the J.D.Salinger Fan Club!');
	include('templates/header.html');
	print '<h2>Welcome to the J.D.Salinger fan club</h2>';
	print '<p>Hello, '.$_SESSION['email'].'!</p>';
	//print how long they have been logged in:
	date_default_timezone_set('America/New_York');
	print '<p>You have been logged in since: '.date('g:i a',$_SESSION['loggedin']).'.</p>';
	// Make a logout link:
	print '<p><a href="logout.php">Logout</a></p>';

	include('templates/footer.html');

?>