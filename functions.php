<?php
	// simple function
	// Function - block of code 
	// you can use this function anywhere many time
	// reusability

	function simpleFunction(){
		return "I am a function without a param";
	}

	function HelloWorld($value='hello')
	{
		# code...
		echo $value .' '. "world";
		echo "<br>";
	}

	// add two numbers

	function AddNumbers($first,$second)
	{	
		echo "Add $first plus $second = ";
		return $first+$second;
		echo "<br>";
	
	}

	print AddNumbers(1,2);
	echo "<br>";	
	HelloWorld();
	print simpleFunction();
?>