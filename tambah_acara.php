<!DOCTYPE html>
<html>
<head>
    <title>Data Acara</title>
</head>
<body>
    <h3>Tambah Data Acara</h3>
    <form action="proses_tambah.php" method="POST">
      <table border="0">
        <tr>
        <td>Nama Acara</td>    
        <td><input type="text" name="nama_acara" required></td>
</tr>
<tr>
    <td>Lokasi</td>
    <td><textarea name="lokasi_acara"></textarea></td>
</tr>
<tr>
    <td>Deskripsi</td>
    <td><input type="text" name="deskripsi"></td>   
</tr>
<tr>
        <td>Tanggal</td>   
        <td> 
      <input type="date" name="tanggal_acara" style="width: 100%">
</td>
</tr> 
</table>
<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</form>
</body>
</html>