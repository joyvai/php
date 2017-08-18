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

// sql to create table
$sql = "CREATE TABLE myGuests(
id INT(6) unsigned auto_increment primary key,
firstname varchar(30) not null,
lastname varchar(30) not null,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE)
{
	echo "Table myGuests created successfully";
}
else{
	echo "Error creating table: " . $conn->error;
}
$conn -> close();
?>