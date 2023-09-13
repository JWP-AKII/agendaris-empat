<?php
include '../koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM surat_masuk WHERE id = $id";
$proses = mysqli_query($conn,$query);
if ($proses) {
    header('Location:index.php');
}
?>