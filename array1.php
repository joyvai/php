<?php
$car = array('volvo','BMW','Mercha','Tesla');
for($x=0;$x < count($car); $x++)
{
	echo $car[$x].'<br>';
}

$age = array("Joy" => 23, "Liza" => 29, "Robin" => 28, "Bhabi" => 26);

foreach ($age as $key => $value) {
	# code...
	echo "Name ".$key." Age ".$value."<br>";
	print asort($age);
}
?>