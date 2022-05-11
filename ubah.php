<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

//buat connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek connection
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

$sql= "Select * from db_pegawai WHERE NIP =$_GET[key]";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h2> FORM UPDATE DATA PEGAWAI</h2>
	<form method="POST" action="isi.php">
		<table>
			<tr>
				<td> NIP </td>
				<td><input type="text" name="nip" value="<?php echo $row['NIP'] ?>"></td>
			</tr>

			<tr>
				<td> Nama </td>
				<td><input type="text" name="nama" value="<?php echo $row['Nama'] ?>"></td>
			</tr>

			<tr>
				<td> Alamat </td>
				<td><input type="text" name="alamat" value="<?php echo $row['Alamat'] ?>"></td>
			</tr>

			<tr>
				<td> Tempat Tanggal Lahir </td>
				<td><input type="text" name="ttl" value="<?php echo $row['Tempat Tanggal Lahir'] ?>"></td>
			</tr>

			<tr>
				<td> Jenis Kelamin </td>
				<td><input type="text" name="j_kelamin" value="<?php echo $row['Jenis Kelamin'] ?>"></td>
			</tr>

			<tr>
				<td> Jabatan </td>
				<td><input type="text" name="jabatan" value="<?php echo $row['Jabatan'] ?>"></td>
			</tr>

			<tr>
				<td> Email </td>
				<td><input type="text" name="email" value="<?php echo $row['Email'] ?>"></td>
			</tr>

			<tr>
				<td> Nomor Telepon </td>
				<td><input type="text" name="no_telp" value="<?php echo $row['Nomor Telepon'] ?>"></td>
			</tr>

			<tr>
				<td><input type="submit" name="btnupdate" value="Update"></td>
			</tr>
		</table>
	</form>
	<form method="POST" action="isi.php">
	<input type="submit" name="Batal">
</form>
</body>
</html>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

//buat connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek connection
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

if(isset($_POST['btnupdate'])){
	$sql="Update datapegawai SET NIP='$_POST[NIP]', Nama='$_POST[nama]', Alamat='$_POST[alamat]', Tempat Tanggal Lahir='$_POST[ttl]', Jenis Kelamin='$_POST[j_kelamin]', Jabatan='$_POST[jabatan]', Email='$_POST[email]', Nomor Telpon='$_POST[no_telp]' WHERE NIP='$_GET[NIP]'";
	if(mysqli_query($conn,$sql)){
		echo "Data berhasil diubah";
	}else{
		echo"Data tidak berhasil diubah, eror".$sql."<br>". mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>