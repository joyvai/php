<?php
	$dbc = mysqli_connect('localhost','root',"");
	// if the database is connect
	if ($dbc){
		//define the query 
		$query = 'CREATE TABLE entries(
			id int unsigned not null auto_increament primary key,
			title varchar(100) not null,
			entry TEXT NOT NULL,
			date_entered DATETIME NOT NULL
		) CHARACTER SET utf8';
		// execute the query
		if (mysqli_query($dbc,$query))
		{
			print '<p>The table has been created!</p>';
		}
		else{
			print '<p style="color:red;">Could not create the table because:<br>'.mysqli_connect_error($dbc).'</p><p>The query being run was: '.$query.'</p>';
		}
		mysqli_close($dbc); // close the connection.
	}
	else {
		// connection failure 
		print '<p style="color:red";>Could not connect to the database:<br>'.mysqli_connect_error().'.</p>';
	}

?>