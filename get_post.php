
<?php
// GET method send data through the url 
	if (isset($_GET['name'])) {
		# code...
		//name variable declared here
		$name = htmlentities ($_GET['name']);
	}	

	// if (isset($_POST['name'])) {
	// 	# code...
	// 	$name = htmlentities ($_POST['name']);
	// 	echo $name;
	// }	
?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
<form method="GET" action="get_post.php">
	<div>
		<label>Name</label>
		<input type="text" name="name">
	</div>
	<div>
		<label>Email</label>
		<input type="text" name="email">
	</div>
	<input type="submit" name="submit">
</form>
	<ul>
		<li>
			<a href="get_post.php?name=Brad">Brad</a>
		</li>
		<li>
			<a href="get_post.php?name=Steve">Steve</a>
		</li>
	</ul>
	<!-- name variable print here. -->
	<h1> <?php echo "{$name} profile";?> </h1>
</body>
</html>