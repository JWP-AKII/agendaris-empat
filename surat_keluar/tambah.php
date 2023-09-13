<?php
include '../koneksi.php';

    $q_buku = mysqli_query($conn,"SELECT * FROM buku");

if (isset($_POST['submit'])) {
    $nomorsurat = $_POST['nomorsurat'];
    $tanggalsurat = $_POST['tanggalsurat'];
    $tujuan = $_POST['tujuan'];
    $nomoragenda = $_POST['nomoragenda'];
    $tanggalagenda = $_POST['tanggalagenda'];
    $buku = $_POST['buku'];
    $status = $_POST['status'];
    
    var_dump($_POST);
    $query = "INSERT INTO surat_keluar (nomor_surat,tanggal_surat,tujuan,nomor_agenda,tanggal_agenda,buku_id,status)
                VALUES ('$nomorsurat','$tanggalsurat','$tujuan','$nomoragenda','$tanggalagenda','$buku','$status')
    ";
    $proses = mysqli_query($conn,$query);
    if ($proses) {
        header('Location:index.php');
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
    <form action="" method="post">
        <label for="">Nomor Surat</label><br>
        <input type="text" name="nomorsurat">
        <br>
        <label for="">Tanggal Surat</label><br>
        <input type="date" name="tanggalsurat">
        <br>
        <label for="">Tujuan</label><br>
        <input type="text" name="tujuan">
        <br>
        <label for="">Nomor Agenda</label><br>
        <input type="text" name="nomoragenda">
        <br>
        <label for="">tanggal Agenda</label><br>
        <input type="date" name="tanggalagenda">
        <br>
        <select name="buku" id="">
            <option value="">Pilih Buku</option>
            <?php while($result=mysqli_fetch_assoc($q_buku)) {?>
            <option value="<?php echo $result['id'];?>"><?php echo $result['nama'];?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <label for="">Status</label><br>
        <input type="text" name="status">
        <br>
        <button type="submit" name="submit">Tambahkan !</button>
    </form>
</body>
</html>