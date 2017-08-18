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

// $sql = "INSERT INTO myGuests(firstname,lastname) values ('john','doe')";
$anotherSql= "INSERT INTO myGuests(firstname,lastname) values ('Captain','America')";

if ($conn -> query($anotherSql) === TRUE){
	echo "New record created successfully";
}

else {
	echo "Error: " .$sql. "<br>" .$conn->error;
}

$conn->close();
?>