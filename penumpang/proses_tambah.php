<?php

session_start();

include("../koneksi.php");

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO penumpang      
    (nama, harga)
    VALUES ('$nama','$harga')";

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