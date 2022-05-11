<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bukutamu";

//Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Mengecek connection
if(!$conn){ 
	die("Connection failed: ".mysqli_connect_error());
}
?>