<?php

include("../koneksi.php");

$rute_id = $_GET['rute_id'];

$query = $db->query("SELECT * FROM rute WHERE rute_id = '$rute_id'");
$rute = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>EDIT RUTE</title>
</head>
<body>
    <h3>EDIT RUTE</h3>
    <form action="proses_edit.php" method="POST">
    <input type="hidden" name="rute_id" value="<?php echo $rute['rute_id']; ?>">
    <table border="0">
        <tr>
            <td>Judul Film</td>
            <td>
                <input type="text" name="kota_asal" value="<?php echo $rute['kota_asal']; ?>" required>
</td>
</tr>
<tr>
            <td>Waktu</td>
            <td>
                <input type="text" name="kota_tujuan" value="<?php echo $rute['kota_tujuan']; ?>" required>
</td>
</tr>
<tr>
            <td>Tanggal</td>
            <td>
                <input type="number" name="harga" value="<?php echo $rute['harga']; ?>" required>
</td>
</tr>
</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>
