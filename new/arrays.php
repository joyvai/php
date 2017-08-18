<?php

// Indexed

$people = array('kevin','Jeremy','Sara');
$ids = array(23,55,12);
$cars = ['Honda','Toyota','Ford'];
$cars[3] = 'Chevy';
$cars[] = 'BMW';


// if i want to count how many cars
// use count function

echo count($cars)."<br>";
print_r($cars);
var_dump($cars);



// associative arrays 

//key-value pairs

$arrayName = array('joy' => 23, 'mama' => 24, 'rabbit' => 22 );

print_r($arrayName);

$arrayName['faldua'] = 222;
var_dump($arrayName); 

// multi-Dimensional

// array in array

$Cars = array(
	array('Honda', 20, 10),
	array('BMW',200,199),
	array('Ford',2000,1990)
);

echo $Cars[0][2]."<br>";

$color = array(
	'color' => 'red',
	'taste' => 'sweet',
	'shape' => 'rectangle',
	'magazine' => 'vague',
	'a' => 'gun'
);

var_dump($color);


























































?>