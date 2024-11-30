<?php

session_start();

include("../koneksi.php");

if(isset($_POST['simpan'])){
    $kota_asal = $_POST['kota_asal'];
    $kota_tujuan = $_POST['kota_tujuan'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO rute      
    (kota_asal, kota_tujuan, harga)
    VALUES ('$kota_asal','$kota_tujuan','$harga')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal ditambahkan!";
    }
    header('Location: index.php');
} else {
    die("akses ditolak");
}
?>
