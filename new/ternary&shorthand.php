<?php 
	$logged = false;
	$isLogged = true;
	if ($isLogged) {
		# code...
		echo "You are logged in";
	}
	else{
		echo "You are not logged in";
	}

	echo "<br>";

	$age = 20;
	$score = 30;

	echo 'your score is '.($score > 10) ?($age > 10 ? 'Average':'Exceptional'):($age > 10 ? 'Horrible':'Average');

?>

<div>
	<?php if($logged): ?>
		<h1>Welcome user</h1>
	<?php else: ?>
		<h1>Welcome Guest</h1>
	<?php endif; ?>

</div>
<br>

<div>
	<?php 
		for ($i=0; $i <10 ; $i++) { 
			# code...
			echo $i;
		}
	?>

</div>