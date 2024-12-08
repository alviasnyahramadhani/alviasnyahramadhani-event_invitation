<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "event_invitation";
$db = mysqli_connect($server, $user, $password, $nama_database);
if (!$db) {
 die("gagal terhubung dengan databse: " . mysqli_connect_error());   
}
?>