<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Buku Tamu</title>
</head>
<center>
<body>
<form method="POST" action="isi.php">
    <h1>Silahkan Mengisi Formulir Buku Tamu</h1>
    <hr>
    <table>
        <tr><td> Nama <td><input type=text name=nama size=20>
            <tr><td> Email <td><input type=text name=email size=20>
                <tr> <td> Isi <td> <textarea name=isi ></textarea>
    </table>
    <input type=submit value=Kirim> <input type=reset value=Reset>
</form>
</body>
</center>
</html>