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

    <a href="tambah.php">tambah</a>
    <br><br>

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
                <a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick = "return confirm('yakin?');">Hapus</a>
            </td>
            <td><img src="gambar/<?= $mhs["gambar"]; ?>"  width=30></td>
            <td><?= $mhs["nrp"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach?>
    </table>
</body>
</html>