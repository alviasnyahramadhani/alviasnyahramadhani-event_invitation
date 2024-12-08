<?php
session_start();
include("koneksi.php");
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $sql = "DELETE FROM acara WHERE acara_id=$id";
 $query = mysqli_query($db, $sql);
 if ($query) {
    $_SESSION['nontifikasi'] = "Data Acara berhasil dihapus!";
} else {
    $_SESSION['nontifikasi'] = "Data Acara gagal dihapus!";
}
header('Location: index.php');
} else {
die("akses ditolak..");
}
?>