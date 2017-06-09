<?php

	$name = "Iftekhar joy";
	$location = "Florida";
	$one = 1;
	$two = 2;	
	$distance_to_work = 2.2;
	$distance_to_home = 3.5;
	$greeting = "Hello World!";
	$bool = 0;
	// How to define constants
	define("Year", 1993);
	define("Job Title", "Teacher");
	define("MAX_BADGES", 150000);

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name?></title>
</head>
<body>
	<header>
		<h1>My Name is <?php echo $name?></h1>
	</header>
	<p>I live in <?php echo $location ?></p>
	<p>Sum: <?php echo "one+two=",$one+$two ?></p>
	<!-- if we want to get type of variable then we use gettype() function -->
	<p><?php echo gettype($one)?></p>
	<li>Distance:<?php echo $distance_to_work +$distance_to_home ?></li>
	<h2><?php echo $greeting, var_dump($bool);?></h2>
	<?php echo Year?>
</body> 
</html>