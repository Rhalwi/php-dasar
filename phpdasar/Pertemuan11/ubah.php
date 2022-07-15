<?php
    require 'functions.php';

    // ambil data id
    $id = $_GET["id"];

    // query data id mengambil data
    $mhs = query("SELECT *FROM mahasiswa WHERE id = $id")[0];

 if( isset($_POST["submit"]) ){

    // cek apakah berhasil diubah atau tidak
    if( ubah($_POST) > 0){
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
        </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h1>ubah data mahasiswa</h1>

    <form action="" method = "post" >
        <ul>
            <input type="hidden" name="id" value=<?= $mhs["id"] ?>>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"] ?>">
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="email">E-mail :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"] ?>">
            </li>
            <button type="submit" name="submit">UBAH DATA</button>
        </ul>
    </form>

</body>
</html>