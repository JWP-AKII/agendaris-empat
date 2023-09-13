<?php
require_once '../koneksi.php';

$id = $_GET['id'];

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];


$sql = "UPDATE buku SET nama = '$nama' WHERE id = '$id'";
$prosesQuery = mysqli_query($conn,$sql);
if ($prosesQuery) {
    header ("location:index.php");
    echo "Data Berhasil Dihapus";
} else {
    echo "Data Gagal".mysqli_error($conn);
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
    <h1>Edit Buku</h1>
    <?php
    $sql = "SELECT * FROM buku WHERE id = '$id'";
    $data = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($data);
    ?>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?php echo $result['nama'];?>">
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>