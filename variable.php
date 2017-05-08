<?php
// always start with dollar sign$
//then use letter or underscore
// case sensitive example Output and output are two different.
//declare a variable called name

// Datatypes
/*
int 
float
boolean
string
*/

	$Floatnumber = 4.4;
	echo $Floatnumber."<br>";



	$bool1 = true;
	$FirstName = "Jakir";
	$LastName = "Nayek";

	$FullName = $FirstName .' '. $LastName;//that's how you add two strings.
	echo $FullName . "<br>";
	echo $fullname = "$FirstName $LastName"; // also use that add 2 string 
	$name = "joy";
	echo $name."<br>";

	// if you need to declare constant then use define function

	define("GREETING", "Hello Everyone",true);
	echo GREETING."<br>";// now if you want case sensitive then use true
	echo greeting;// i use true that's why it shows outfut. 

	$string3 = "They\"re here";
	echo $string3;

	$_number = 1;
	echo $_number;

?>