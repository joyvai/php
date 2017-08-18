<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
<nav>
	<div class="main-wrapper">
		<ul>
			<li><a href="index.php">Home</a></li>
		</ul>
		<div class="nav-login">
			<form method="POST" action="includes/login.inc.php">
				<input type="text" name="uid" placeholder="Username/e-mail">
				<input type="password" name="pwd" placeholder="password">
				<button type="submit" name="submit">Login</button>
			</form>
			<a href="signup.php">SIGN UP</a>
		</div>
	</div>
</nav>	
</header>