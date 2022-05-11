<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bukutamu";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (nama, email, isi) VALUES ('Atisanta', 'Atisantapramesi@gmail.com', '2 kamar master room')";

if (mysqli_query($conn, $sql)){
	echo "New record created successfully";
} else {
	echo "Error : ". $sql . "<br>" . mysqli_error($conn);
} 

mysqli_close($conn);
?>