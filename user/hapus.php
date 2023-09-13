<?php include('koneksi.php');

$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id = $id";

$data = mysqli_query($conn, $sql);

if ($data == true) {
    header('location: index.php');
    // echo "berhasil";
}else{
    echo "gagal". mysqli_error($conn);
}