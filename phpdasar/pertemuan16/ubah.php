<?php
session_start();
if(!isset($_SESSION["Login"])){
    header("Location: login.php");
    exit;
}

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

    <form action="" method = "post" enctype="multipart/form-data" >
        <ul>
            <input type="hidden" name="id" value=<?= $mhs["id"] ?>>
            <input type="hidden" name="gambarLama" value=<?= $mhs["gambar"] ?>>
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
                <label for="gambar">Gambar :</label><br>
                <img src="gambar/<?= $mhs['gambar'] ?>" width="40"> <br>
                <input type="file" name="gambar" id="gambar">
            <button type="submit" name="submit">UBAH DATA</button>
        </ul>
    </form>

</body>
</html>