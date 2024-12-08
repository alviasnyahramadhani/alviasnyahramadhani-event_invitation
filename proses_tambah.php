<?php
session_start();

include("koneksi.php");
if (isset($_POST['simpan'])) {
    $nama_acara = $_POST['nama_acara'];
    $tanggal_acara = $_POST['tanggal_acara'];
    $lokasi_acara = $_POST['lokasi_acara'];
    $deskripsi = $_POST['deskripsi'];
    $sql = "INSERT INTO acara
    (nama_acara, tanggal_acara, lokasi_acara, deskripsi)
    VALUES ('$nama_acara', '$tanggal_acara', '$lokasi_acara', '$deskripsi')";
    $query = mysqli_query($db, $sql);
    if ($query) {
       $_SESSION['notifikasi'] = "Data acara berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data acara gagal ditambahkan!";
    }
    header('Location: index.php');
} else {
    die("akses ditolak..");
}
?>    

