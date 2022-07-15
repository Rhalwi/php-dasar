<?php
    require 'functions.php';
 if( isset($_POST["submit"]) ){

    

    // cek apakah berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0){
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>tambah data mahasiswa</title>
</head>
<body>
    <h1>tambah data mahasiswa</h1>

    <form action="" method = "post" >
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp"
                required>
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama"
                required>
            </li>
            <li>
                <label for="email">E-mail :</label>
                <input type="text" name="email" id="email"
                required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan"
                required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <button type="submit" name="submit">TAMBAH DATA</button>
        </ul>
    </form>

</body>
</html>