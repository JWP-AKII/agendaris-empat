<?php
include "koneksiDisposisi.php";

$id = $_GET['id'];

if (isset($_POST['simpan'])) {
    $name = $_POST['user_id'];
    $suratmasuk = $_POST['surat_masuk_id'];
    $disposisi = $_POST['disposisi'];

    $query = "UPDATE disposisi_surat SET user_id = '$name', surat_masuk_id = '$suratmasuk', disposisi = '$disposisi' WHERE id = $id";

    $dat = mysqli_query($conn, $query);

    if ($dat) {
        header("location:index.php");
        echo "Data berhasil diperbarui";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
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

    <?php
    $sql = "SELECT * FROM disposisi_surat WHERE id = $id";
    $data = mysqli_query($conn, $sql);
    $tampil = mysqli_fetch_object($data);
    ?>

    <div class="box">
        <center><h1>Edit Data Disposisi</h1></center>

        <form action="edit.php?id=<?php echo $id; ?>" method="post">
            <label for="user_id">User</label>
            <input type="text" name="user_id" id="user_id" value="<?php echo $tampil->user_id;?>">
            <br>

            <label for="surat_masuk_id">Surat Masuk</label>
            <input type="text" name="surat_masuk_id" id="surat_masuk_id" value="<?php echo $tampil->surat_masuk_id;?>">
            <br>

            <label for="disposisi">Disposisi</label>
            <input type="text" name="disposisi" id="disposisi" value="<?php echo $tampil->disposisi;?>">
            <br>

            <button type="submit" name="simpan"><strong>Simpan</strong></button>

        </form>
    </div>
</body>
</html>