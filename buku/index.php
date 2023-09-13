<?php
require_once '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buku</h1>
    <a href="tambah.php">Tambah</a>
    <table border="1">
        <thead>
            <td>No</td>
            <td>Nama</td>
            <td>Action</td>
        </thead>
        <?php
        $sql = "SELECT * FROM buku";
        $prosesQuery = mysqli_query($conn,$sql);
        $no=1;
        while ($result = mysqli_fetch_assoc($prosesQuery)) {
           ?>

           <tbody>
            <td><?php echo $no++ ?></td>
            <td><?php echo $result['nama']?></td>
            <td>
                <a href="edit.php?id=<?php echo $result['id']?>">Edit</a>
                <a href="hapus.php?id=<?php echo $result['id']?>">Hapus</a>
            </td>
           </tbody>
           <?php
        }
        ?>
    </table>
    
</body>
</html>