<?php
include('koneksi.php');

if (isset($_POST['simpan'])) {
    $nama = $_POST['username'];
    $jabatan = $_POST['jabatan'];
    $password = sha1($_POST['password']);

    $sql = "INSERT INTO user(username,jabatan,password) VALUES ('$nama', '$jabatan', '$password')";
    $data = mysqli_query($conn,$sql);


    if ($data == TRUE) {
        header('location: index.php');
        echo "berhasil";
    } else{
        echo "gagal". mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
</head>
<body>
    <h1>tambah data</h1>

    <form action="tambah.php" method="post">
        <label for="">nama</label>
        <input type="text" name="username">
        <br>
        <label for="">jabatan</label>
        <input type="text" name="jabatan">
        <br>
        <label for="">password</label>
        <input type="password" name="password">
        <br>
        <button type="submit" name="simpan">simpan</button>
    </form>
</body>
</html>