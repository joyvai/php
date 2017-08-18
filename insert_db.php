<?php
	// define("DB_HOST", "locathost");
	//create connection
	$serverName = "localhost";
	$username = "root";
	$password = "";
	// $dbname = "myDB";
	// check connection
	$conn = mysqli_connect($serverName,$username,$password);
	if(!$conn)
	{
		die ("connection falied".mysqli_connect_error());
	}
	// create database
	$sql = "CREATE DATABASE myDB";
	if($conn->query($sql) === TRUE)
	{
		echo "Database created successfully";
	}
	else{
		echo "error" . $conn->error;
	}

	$insert = "INSERT INTO information (id,name) VALUES ('John','john@example.com')";

	if ($conn -> query($insert) === TRUE)
	{
		echo "New record created successfully";

	}
	else {

		echo "ERROR: ".$sql . "<br>". $conn->error;
	}

	$conn->close();
	
?>