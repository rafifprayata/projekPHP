<!DOCTYPE html>
<html>
    <head>
        <title>RAFIF</title>
</head>
<body>
    <h3>TAMBAH PENUMPANG</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
<tr>
    <td>KOTA ASAL</td>
    <td><input type="text" name="kota_asal" required></td>
</tr>
<tr>
    <td>KOTA TUJUAN</td>
    <td><input type="text" name="kota_tujuan" required></td>
</tr>
<tr>
    <td>HARGA</td>
    <td><input type="number" name="harga" required></td>
</tr>
</table>
<button type="submit" name="simpan">Simpan</button>
   
</body>
</html>