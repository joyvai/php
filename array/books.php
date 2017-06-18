<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Larry Ullman's Books</title>
</head>
<body>
<h1>Some of Larry Ullman's Books.</h1>
<?php
	// create and prints out a multidimesional array
	// Address error management, if you want
	// create the first array
	$phpvqs = [1=>'Getting started with PHP','Variables','HTML Forms and PHP','Using Numbers'];
	$phpadv = [1=>'Advanced PHP Techniques','Developing Web Applications','Advanced Database Concepts','Basic Object-oriented Programming'];

	$phpmysql = [1=>'Introduction to PHP','Programming with PHP','Creating Dynamic Web sites','Introduction to MySQL'];

	$books =[

		'PHP VQS' => $phpvqs,
		'PHP Advanced VQP' => $phpadv,
		'PHP and MySQL VQP' => $phpmysql
	];
	// Print out some values
	print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
	print "<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>";
	print "<p>The fourth chapter of my fourth book is <i>{$books['PHP and MySQL VQP'][4]}</i>.</p>";
	//see what happens with foreach:
	foreach ($books as $title => $chapters) {
		# code...
		print_r("<p>$title") ;
		foreach ($chapters as $number => $chapter) {
			# code...
			print_r ("<br/> Chapter $number is $chapter");
		}
		print '</p>';
	}

?>

</body>
</html>