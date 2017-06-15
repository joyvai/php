<?php
$soups = [
			'Monday' => 'Clam Chowder',
			'Thuesday' => 'White Chicken',
			'Wednesday' => 'Vegetarian'
		];
$soups2 = [
'Thursday' => 'Chicken Noodle',
'Friday' => 'Tomato',
'Saturday' => 'Cream of Broccoli'
];
$s = array_merge($soups,$soups2); 
echo $s;

?>