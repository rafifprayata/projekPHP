<?php

session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])) {

    $rute_id = $_POST['rute_id'];
    $kota_asal = $_POST['kota_asal'];
    $kota_tujuan = $_POST['kota_tujuan'];
    $harga = $_POST['harga'];

    $sql = "UPDATE rute SET
        kota_asal='$kota_asal',
        kota_tujuan='$kota_tujuan',
        harga='$harga'
        WHERE rute_id=$rute_id";

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