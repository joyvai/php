<?php
// for loop
	// for ($i=0; $i <10 ; $i++) { 
	// 	# code...
	// 	echo $i;
	// 	echo "<br>";
	// }
	// $j=1;
	// while ( $j <= 10) {
	// 	# code...
	// 	echo $j;
	// 	$j++;
	// 	echo "<br>";
	// }	

	// $num=20;
	// do{
	// 	echo $num;
	// 	$num=$num-1;
	// 	echo "<br>";
	// }
	// while ( $num > 10);

	// associative array
	//foreach loop

	// $people = arrary('malik', 'david', 'hasan');

	// foreach ($people as $person) {
	// 	# code...
	// 	echo $person;
	// 	echo "<br>";
	// }

	$address = array('joy' => 'hi@gmail.com', 'robin' => 'robin@gmail.com', 'hasan' => 'hasan@gmail.com');
	foreach ($address as $name => $email){
		echo $name . ': '.$email ;
		echo "<br>";
	}

	$array = array(1,2,3,4,5);
	foreach($array as $value){
		echo $value;
		echo "<br>";
	}

	$colors = array('red','blue','green','white','yellow');

	foreach ($colors as $color) {
		# code...
		echo "Do you like $color?\n";
		echo "<br>";
	}

?>