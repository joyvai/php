<?php
	$string = "Hi, i am joy";
	$compressed = gzcompress($string);
	//echo $compressed;

	$uncompressed = gzuncompress($compressed);
	echo $uncompressed."<br>";

	$name = "IFTEKHARUL ISLAM CHOWDHURY";
	// strlen() = returns the len of the string
	$output = strlen($name);
	echo $name.' length: '.$output;
	echo "<br>";

	// strpos()
	// Finds the position of the first occurence of a sub string

	$StrPosition = strpos('Hello World','o');
	echo $StrPosition."<br>";

	// strrpos()
	// Finds the position of the last occurence of a sub string

	$StrRightPostion = strrpos("jolly LLB", 'L');
	echo $StrRightPostion;

	// trim()
	//strips whitespace
	$Text = "If i fail, I fail, But never give up!               ";
	
	var_dump($Text);

	$trimed = trim($Text);
	var_dump($trimed);

	// strtoupper() - it makes your word all uppercase
	echo "<br>";

	$sentence = "hi, i am php!";

	echo strtoupper($sentence);

	echo "<br>";

	//strtolower() - all lowercase

	$UpperSen = "HI, HOW'S GOING? BAD";

	echo strtolower($UpperSen);

	echo "<br>";

	// ucwords()
	//capitalize every word.

	$greetings = 'hola, como estas?';
	echo ucwords($greetings);
	echo "<br>";

	$replace = "hello php";
	$answer = str_replace("php", "python", $replace);
	echo $answer;
	echo "<br>";

	//is_string = if string then true 

	$Value = array(true,false,1,2,3,'1','2','4');
	foreach ($Value as $values) {
		# code...
		if (is_string($values)) {
			# code...
			echo $values."<br>";
		}
	}






























































?>
