<?php
include("koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Acara</title>
    <style>
   table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
   }

    </style>
</head>
<body>
    <h2>Data Acara</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
      <?php unset($_SESSION['notifikasi']); ?>
      <?php endif; ?>
      <table>
        <thead>
           <tr align="center">
             <th>#</th> 
             <th>Nama Acara</th>
             <th>Tanggal</th>
             <th>Lokasi</th>
             <th>Deskripsi</th>
             <th><a href="tambah_acara.php">Tambah Data</a></th>
    </tr> 
        </thead>
        <tbody>
          <?php
         $no = 1;
           $query = $db->query("SELECT * FROM acara");
            while ($event = $query->fetch_assoc()) {
?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $event['nama_acara'] ?></td>
    <td><?php echo date("d-m-Y",
    strtotime($event['tanggal_acara'])); ?></td>
    <td><?php echo $event['lokasi_acara'] ?></td>
    <td><?php echo $event['deskripsi'] ?></td>
    
    <td align="center">
        <a href="edit_acara.php?id=<?php echo $event['acara_id'] ?>">Edit</a>
        <a onclick="return confirm('anda yakin akan menghapus data?')" 
        href="hapus_acara.php?id=<?php echo $event['acara_id'] ?>">Hapus</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>