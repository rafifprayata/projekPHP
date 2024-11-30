<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data penayangan</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
            </style>
</head>
<body>
    <ul>
        <li><a href="../penumpang/index.php">PENUMPANG</a></li>
        <li><a href="index.php">RUTE</a></li>
    </ul>    

    <h2>RUTE</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>KOTA ASAL</th>
                <th>KOTA TUJUAN</th>
                <th>HARGA</th>
                <th><a href="tambah.php">TAMBAH DATA</a></th>
</tr>
</thead>
<tbody>
    <?php
    $no = 1;
    $query = $db->query("SELECT * FROM rute");
    while ($rute = $query->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $rute['kota_asal'] ?></td>
        <td><?php echo $rute ['kota_tujuan'] ?></td>
        <td><?php echo $rute ['harga'] ?></td>
        <td align="center">
        <a href="edit.php?rute_id=<?php echo $rute['rute_id'] ?>">Edit</a>
        <a onclick="return confirm('Anda yakin ingin menghapus data?')"href="hapus.php?rute_id=<?php echo $rute['rute_id'] ?>">Hapus</a>
        </td>
        </tr>
        <?php
}
        ?>
        </tbody>
        </table>
        <p>Total : <?php echo mysqli_num_rows($query) ?></p>
        </body
        </html>
