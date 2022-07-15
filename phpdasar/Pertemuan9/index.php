<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" >
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>No. Anggota</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach($mahasiswa as $mhs)  : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="gambar/<?= $mhs["gambar"]; ?>"  width=30></td>
            <td><?= $mhs["nrp"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["emaill"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
        </tr>
        <?= $i++; ?>
        <?php endforeach?>
    </table>
</body>
</html>