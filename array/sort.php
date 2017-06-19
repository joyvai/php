<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Little Gradebook</title>
</head>
<body>
<?php
	//create the array
	$grades = [
		'Richard' => 95,
		'Sherwood' => 82,
		'Toni' => 98,
		'Franz'=> 87,
		'Melissa' => 75
	];
	//print the original array
	print '<p>Originally the array looks like this: <br></p>';
	foreach ($grades as $student => $grade) {
		# code...
		print "$student: $grade<br>\n";
	}
	print '</p>';
	// sort by value in reverse order,then print again
	arsort($grades);
	print '<p>After sorting the array by value using arsort(),the array looks like this: <br>';
	foreach ($grades as $student => $grade) {
		# code...

		print "$student: $grade<br>\n";
	}

	print '</p>';


?>
</body>
</html>