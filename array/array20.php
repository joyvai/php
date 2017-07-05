<?php
// 	$myarray=array();
// 	// $myarray=[];
// 	// print_r($myarray);
// 	$sizeOfArray = 5;
// 	$fill = 'placeholder';
// 	for($i=0; $i<$sizeOfArray; $i++){
// 		$myarray[] = $fill;
// 	}	
// 	print_r($myarray); 
// // 	Array ( [0] => placeholder [1] => placeholder [2] => placeholder [3] => placeholder [4] => placeholder )
// 	$array = [];
// 	$array_with_range = range(1, 4);
// 	// var_dump($array_with_range);
// 	for ($i=1;$i<=4;$i++){
// 		$array[] = $i;
// 	}
// 	print_r($array);
// 	echo "<br>";
// 	print_r($array_with_range);

	//check if key exists
	// use array_key_exists() or isset() or !empty():
	// $map=[
	// 	'foo' => 1,
	// 	'bar' => null,
	// 	'foobar' => '',
	// ];
	// echo array_key_exists('bar', $map);//true
	// echo isset($map['foo']); //
	// echo !empty($map['foobar']);
	
	//creating array of variables
	$username = 'Hadibut';
	$email = 'hadibut@example.org';
	$variables = compact('username','email');
	var_dump($variables);
// ?>