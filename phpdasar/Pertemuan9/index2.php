<?php 
//konekkan dengan Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// amnil data dari tabel mahasswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array assosiatif
// mysqli_fetch_array() // mengembalikan array keduanya
// mysqli_fetch_object() // menggunakan object (->)

// while($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }

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
        <?php while($mhs = mysqli_fetch_assoc($result) ) : ?>
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
        <?php endwhile?>
    </table>
</body>
</html>