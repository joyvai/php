<?php
	$dbc = mysqli_connect('localhost','root',"");
	if (!(isset($dbc)))
	{
		die("connection problem").mysqli_connect_error();
	}
	else 
	{
		print "success!";
		mysqli_close($dbc);
	}

?>