<?php
include "koneksiDisposisi.php";
$query = mysqli_query($conn, "SELECT * FROM dispoisi_surat");

if (isset($_POST['simpan'])) {
    $name = $_POST['user_id'];
    $suratmasuk = $_POST['surat_masuk_id'];
    $disposisi = $_POST['disposisi'];

    $sql = "INSERT INTO disposisi_surat (user_id, surat_masuk_id, disposisi) 
    VALUES ('$name', '$suratmasuk', '$disposisi')";
    $data_disposisi = mysqli_query($conn, $sql);

    if ($data_disposisi) {
        echo "('Data berhasil disimpan')";
    } else {
        $error = mysqli_error($conn);
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
    <h1>Edit Data Disposisi</h1>

        <form action="tambah.php" method="post">
        <label for="user_id">User</label>
        <input type="text" name="user_id" id="user_id">
        <br>

        <label for="surat_masuk_id">Surat Masuk</label>
        <input type="text" name="surat_masuk_id" id="surat_masuk_id">
        <br>

        <label for="disposisi">Disposisi</label>
        <input type="text" name="disposisi" id="disposisi">
        <br>

        <button type="submit" name="simpan" class="btn-simpan">Update</button>
        </form>

</body>
</html>