<?php

session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])) {

    $penumpang_id = $_POST['penumpang_id'];
    $nama = $_POST['nama'];
    $hargat = $_POST['harga'];

    $sql = "UPDATE penumpang SET
        nama='$nama',
        harga='$harga'
        WHERE penumpang_id=$penumpang_id";

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

