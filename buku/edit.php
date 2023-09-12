<?php
require_once '../koneksi.php';

$id = $_GET['id'];

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
}

$sql = 