<?php
//koneksi database
require_once 'functions.php';
$siswa = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Siswa</h1>
<a href="tambah.php">Tambah Data siswa</a>
<br>

<table border="1" cellppadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>NIS</th>
    <th>Email</th>
    <th>Jurusan</th>
    
</tr>
<?php $i= 1; ?>
<?php foreach($siswa as $row): ?>
<tr >
    <td><?= $i ?></td>
    <td>
        <a href=''> ubah</a> |
        <a href="hapus.php?id=<?= $row->id ?>" onclick="
         return confirm ('Are you sure you want to delete this row')
        ">Hapus</a>
    </td>
     <td>
        <img src='gambar/satine.jpg' width='50' height='50'/>
        
     </td>
     <td><?=$row->nama ;?></td>
     <td><?=$row->nis;?></td>
     <td><?=$row->email;?></td>
     <td><?=$row->jurusan;?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>; 
</table>
</body>
</html>