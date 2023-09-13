<?php
require_once "../koneksi.php";

if (isset($_POST['simpan'])) {
    $nama=$_POST['nama'];
    
    $sql = "INSERT INTO buku (nama) VALUES ('$nama')";

    $prosesQuery =mysqli_query($conn,$sql);
    if ($prosesQuery == TRUE) {
        header ('location:index.php');
        echo "Data Berhasil";
    }else {
        echo "Data Gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah</h1>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="">
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>