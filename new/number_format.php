<?php
	// $number = 1234.56;
	// // $english_format_number = number_format($number);
	// // echo $english_format_number;
	// $newNumber = 1234.5678;
	// $english_format_number = number_format($newNumber,2,'.','');
	// echo $english_format_number;
	echo $_SERVER['PHP_SELF'];// it gives you the file path
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['SERVER_ADDR'];
	echo "<br>";
	echo $_SERVER['SERVER_SOFTWARE'];
	echo "<br>";
	echo $_SERVER['REQUEST_METHOD'];
	echo "<br>";
	echo $_SERVER['SCRIPT_FILENAME'];
	echo "<br>";
	
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>";

	function bd_nice_number($n)
	{
		// first strip any formatting
		$n = (0+str_replace(",", ",", $n));

		// is this a number
		if (!is_numeric($n)) {
			return false;
		}

		//now filter it.
		if ($n > 1000) return round (($n/1000),1).'thousand';
		elseif ($n>1000000) return round(($n/1000000),1).'million';
		elseif ($n > 1000000000) return round(($n/1000000000 ),1).'billion';
		elseif ($n > 1000000000000) return round(($n/1000000000000),1).'trillion';

		return number_format($n);
		}
		$num = bd_nice_number(25100);
		echo $num;
?>