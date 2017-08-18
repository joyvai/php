<?php
	$nameErr=$emailErr =  $websiteErr = $genderErr= "";
	$name=$email= $website= $comment= $gender = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (empty($_POST['name'])){
			$nameErr = "<h1>Please Enter your name</h1>";
			echo $nameErr;
			echo "<br>";
		}
		else
		{
			$name = test_input($_POST["name"]);
			echo "<h1>My name is $name</h1>";
			if (!preg_match("/^[a-zA-Z]*$/", $name))
			{
				$nameErr = "Only letters and white space allowed";
				echo $nameErr;
			}

		}		
	
		if (empty($_POST['email'])){
			$emailErr = "Email is required";
		}
		else
		{
			$email = test_input($_POST['email']);
			echo "<h1>$name Your Email $email</h1>";

			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				echo $emailErr;
			}
		}
		if (empty($_POST['website']))
		{
			$websiteErr = "";
		}
		else
		{
			$website = test_input($_POST['website']);
			if(!preg_match("/\b(?:(?:https? |ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%?=~_|]/i",$website))
			{
				$websiteErr = "<h1>Invaild website name</h1>";
				echo $websiteErr;
			}
		}
		$comment = test_input($_POST['comment']);
		echo "<h2>Your comment response is: $comment</h2>";
		if (empty($_POST['gender']))
		{
			$genderErr = 'Gender is required';
		}
		else
		{
			$gender = test_input($_POST['gender']);
		}
	}
	// $name = $_POST['name'];
	// // $password = $_POST['pass'];
	// $email = $_POST['email'];
	// print("<h1>Your name: $name</h1>");
	// print ("<h2>Your email address: $email</h2>");
function test_input($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// 
// echo "<h1>$name Your Email $email</h1>";
// echo "<h1>$name you are a $gender</h1>"

?>

</body>
</html>