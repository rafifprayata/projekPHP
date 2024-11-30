<?php

include("../koneksi.php");

$penumpang_id = $_GET['penumpang_id'];

$query = $db->query("SELECT * FROM penumpang WHERE penumpang_id = '$penumpang_id'");
$penumpang = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit PENUMPANG</title>
</head>
<body>
    <h3>EDIT PENUMPANG</h3>
    <form action="proses_edit.php" method="POST">
    <input type="hidden" name="penumpang_id" value="<?php echo $penumpang['penumpang_id']; ?>">
    <table border="0">
        <tr>
            <td>NAMA PENUMPANG</td>
            <td>
                <input type="text" name="nama" value="<?php echo $penumpang['nama']; ?>" required>
</td>
</tr>
<tr>
            <td>HARGA TIKET</td>
            <td>
                <input type="number" name="harga" value="<?php echo $penumpang['harga']; ?>" required>
</td>
</tr>

</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>

