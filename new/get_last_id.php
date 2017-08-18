<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($serverName,$username,$password,$dbname);
if(!$conn)
{
	die ("connection falied".mysqli_connect_error());
}

$sql = "INSERT INTO myGuests(firstname,lastname) values ('iftekhar','joy')";


if ($conn->query($sql) === TRUE)
{
	$last_id = $conn->insert_id;
	echo "New record created successfully.Last inserted ID is: ". $last_id;
}
else {

	echo "ERROR". $sql. "<br>". $conn->error;
}

$conn-> close();

?>