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

$sql = "SELECT nama, email, isi FROM buku_tamu";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)){
		echo "NAMA : " . $row["nama"]. "- EMAIL ". $row["email"]."- Pesan : ".$row["isi"]. "<br>";
	}
} else {
	echo "0 result";
} 

mysqli_close($conn);
?>