<?php
include("koneksi.php");
$id = $_GET['id'];
$query = $db->query("SELECT * FROM acara WHERE acara_id = '$id'");
$acara = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Acara</title>
</head>
<body>
    <h3>Edit Data Acara</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="acara_id" value="<?php echo $acara['acara_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Acara</td>
            <td>
            <input type="text" name="nama_acara"
            value="<?php echo $acara['nama_acara']; ?>" required>
</td>
</tr>
<tr>
    <td>Tanggal Acara</td>
    <td>
        <input type="date" name="tanggal_acara"
        value="<?php echo $acara['tanggal_acara']; ?>" style="width: 100%">
    </td>
</tr>
<tr>
    <td>Lokasi</td>
    <td>
        <textarea name="lokasi_acara"><?php echo $acara['lokasi_a=cara']; ?></textarea>
    </td>
</tr>
<tr>
                <td>deskripsi</td>
            <td>
            <input type="text" name="deskripsi"
            value="<?php echo $acara['deskripsi']; ?>" required>
</td>
</tr>

</table>
<button type="submit" name="simpan">simpan</button>
</form>
</body>
</html>