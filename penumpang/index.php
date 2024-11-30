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
                        <li><a href="../rute/index.php">RUTE</a></li>
                        <li><a href="index.php">PENUMPANG</a></li>
                    </ul>    

    <h2>PENUMPANG</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>

        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>NAMA</th>
                <th>HARGA</th>
                <th><a href="tambah.php">TAMBAH DATA</a></th>
</tr>
</thead>
<tbody>
    <?php
    $no = 1;
    $query = $db->query("SELECT * FROM penumpang");
    while ($penumpang = $query->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $penumpang['nama'] ?></td>
        <td><?php echo $penumpang['harga'] ?></td>
        <td align="center">
        <a href="edit.php?penumpang_id=<?php echo $penumpang['penumpang_id'] ?>">Edit</a>
        <a onclick="return confirm('Anda yakin ingin menghapus data?')"href="hapus.php?penumpang_id=<?php echo $penumpang['penumpang_id'] ?>">Hapus</a>
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
