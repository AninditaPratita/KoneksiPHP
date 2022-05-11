<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Membuat Database Pegawai</title>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";

//Create connection
$conn = mysqli_connect($servername, $username, $password);
//Check connection
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

//Create Database
$sql = "CREATE DATABASE db_pegawai";
if (mysqli_query($conn, $sql)){
	echo "Database created successfully";
} else {
	echo "Error creating database: ".mysqli_error($conn);
}

mysqli_close($conn);
?>
<body>

</body>
</html>