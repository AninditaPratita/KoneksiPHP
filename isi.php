<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inputan Buku Tamu</title>
</head>
<center>
<body>
    <table border=1>
        <?php 
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $isi=$_POST['isi'];
        echo "<tr><td>Nama <td> $nama";
        echo "<tr><td>Email <td> $email";
        echo "<tr><td>Isi <td> $isi";
        if(($nama!="") && ($email!="") && ($isi!="")){
            $conn = mysqli_connect("localhost","root","");
            mysqli_select_db("bukutamu");
            $sql = "insert into buku_tamu(nama, email, isi) values('$nama','$email','$isi')";
            $hasil = mysqli_query($conn,$sql);
            if($hasil){
                echo "<tr><td colspan=2>Data telah disimpan!";
            } else {
                echo"<tr><td colspan=2>Data gagal disimpan!";
            }
        }
        else {
            echo "<tr><td colspan=2>Data masih kosong!";
        }
        ?> 
    </table>
</body>
</center>
</html>