<?php
session_start();
include("koneksi.php");
if (isset($_POST['simpan'])) {

$id = $_POST['acara_id'];
$nama_acara = $_POST['nama_acara'];
$tanggal_acara = $_POST['tanggal_acara'];
$lokasi_acara = $_POST['lokasi_acara'];
$deskripsi = $_POST['deskripsi'];
$sql = "UPDATE acara SET
nama_acara='$nama_acara',
tanggal_acara='$tanggal_acara',
lokasi_acara='$lokasi_acara',
deskripsi='$deskripsi'
WHERE acara_id=$id";
$query = mysqli_query($db, $sql);
if ($query) {
    $_SESSION['notifikasi'] = "Data acara berhasil diupdate!";
} else {
    $_SESSION['notifikasi'] = "Data acara gagal diupdate!";
}
header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>