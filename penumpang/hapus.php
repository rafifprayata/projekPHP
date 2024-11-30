<?php
session_start();
include("../koneksi.php");

if (isset($_GET['penumpang_id'])) {

    $penumpang_id = $_GET['penumpang_id'];

    $sql = "DELETE FROM penumpang WHERE penumpang_id = $penumpang_id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal dihapus!";
    }

    header('Location: index.php');
} else {

    die("Akses ditolak");
}
?>