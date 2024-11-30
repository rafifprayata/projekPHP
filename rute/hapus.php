<?php
session_start();
include("../koneksi.php");

if (isset($_GET['rute_id'])) {
    $rute_id = $_GET['rute_id'];

    $sql = "DELETE FROM rute WHERE rute_id = $rute_id";
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