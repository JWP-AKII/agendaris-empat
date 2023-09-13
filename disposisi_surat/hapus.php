<?php
require_once 'koneksiDisposisi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "DELETE FROM disposisi_surat WHERE id=$id");

if ($data == TRUE) {
    echo "Data Berhasil Dihapus";
    header('Location: index.php');
} else {
    echo "Data Gagal Dihapus";
}
?>