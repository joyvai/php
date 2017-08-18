<?php
$month = [1 => 'jan','feb','march','april','may','june','july','aug','sep','oct','nov','dec'];
foreach ($month as $key => $value) {
	# code...
	echo $key ,"\n";
	echo $value,"\n";
}

$start_year = date('Y');
// echo $start_year;

for ($y = $start_year;$y <= ($start_year+10); $y++){
	echo $y;
}


function defaultValue($who='joy',$id='14-27234-2')
{
	echo "my name is ".$who.$id;	
}

defaultValue("dink",'23434');
?>