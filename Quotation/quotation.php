<!DOCTYPE html>
<html>
<head>
	<title>Quotation</title>
</head>
<body>
<?php 

// Single or double quotation marks won't matter here:

$first_name = "Larry";
$last_name = "Ullman";

// Single or double quotation marks DOES matter here:

$name1 = '$first_name $last_name';
$name2 = "$first_name $last_name";

// Single or double quotation marks DOES matter here:

print "<h1>Double Quotes</h1> <p>name1 is $name1<br>
name2 is $name2</p>";

// within single quote $name1 is single quote but inside 
// $first_name $last_name are double quote
// so it's not work. 
print '<h1>Single Quotes</h1> <p>name1 is $name1<br>
name2 is $name2</p>';

?>
</body>
</html>