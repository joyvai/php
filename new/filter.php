<?php
	// check for posted data
	// if (filter_has_var(INPUT_POST, 'data')) {
	// 	# code...
	// 	echo "data found";
	// }
	// else{
	// 	echo "No Data";
	// }
	
	// data is field name.
	// INPUT_POST is a method post. You can use get INPUT_GET when use get method
	// 
/*
	if (filter_has_var(INPUT_POST, 'data')){

		$email = $_POST['data'];
		//remove illegal chars
		// LIKE @#@!/////\\[[]][text@\\\\///gmail.com
		// text@gmail.com

		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		echo $email."<br>";
		if (filter_var($email, FILTER_VALIDATE_EMAIL )){
			echo "Email is valid";
		}
		else{
			echo "Email is not valid";
		}
	}

	FILTER_VALIDATE_BOOLEAN
	FILTER_VALIDATE_EMAIL
	FILTER_VALIDATE_FLOAT
	FILTER_VALIDATE_INT
	FILTER_VALIDATE_IP
	FILTER_VALIDATE_REGEXP
	FILTER_VALIDATE_URL

	FILTER_SANITIZE_EMAIL
	FILTER_SANITIZE_ENCODED
	FILTER_SANITIZE_NUMBER_FLOAT
	FILTER_SANITIZE_NUMBER_INT
	FILTER_SANITIZE_SPECIAL_CHARS
	FILTER_SANITIZE_STRING
	FILTER_SANITIZE_URL
*/
/*
	$number= 23;
	if(filter_var($number, FILTER_VALIDATE_INT)){
		echo $number. ' '. "is a number";
	}
	else{
		echo $number.' '."is not a number";
	}
	*/
	// if anyone want to execute script in your form using 
	//  FILTER_SANITIZE_SPECIAL_CHARS you can prevent 
	$scriptTag = '<script>alert(1)</script>';
	// echo $scriptTag;
	echo filter_var($scriptTag,FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!-- php_self means it calls the current page -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="data">
	<button type="submit">Submit</button>
</form>

















