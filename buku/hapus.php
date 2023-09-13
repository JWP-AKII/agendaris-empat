<?php
require_once '../koneksi.php';

$id = $_GET ['id'];

$sql= "DELETE FROM buku WHERE id='$id'";

$prosesQuery=mysqli_query($conn,$sql);

if ($prosesQuery == TRUE) {
    echo "Data Berhasil Dihapus";
    header('location:index.php');
} else {
    echo "Data Gagal Dihapus";
}
?>
