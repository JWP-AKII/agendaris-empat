<?php
include '../koneksi.php';

$query = "SELECT * FROM surat_masuk";
$proses = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Surat Masuk</h1>
    <a href="tambah.php">add</a>
    <table>
        <tr>
            <th>No.</th>
            <th>No Surat</th>
            <th>Tanggal Surat</th>
            <th>Pengirim</th>
            <th>No Agenda</th>
            <th>Tanggal Agenda</th>
            <th>Buku</th>
            <th>Status</th>
            <th>Update</th>
        </tr>
        <tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($proses)) {?>
            <td><?php echo $no;?></td>
            <td><?php echo $row['nomor_surat'];?></td>
            <td><?php echo $row['tanggal_surat'];?></td>
            <td><?php echo $row['pengirim'];?></td>
            <td><?php echo $row['nomor_agenda'];?></td>
            <td><?php echo $row['tanggal_agenda'];?></td>
            <td><?php echo $row['buku_id'];?></td>
            <td><?php echo $row['status'];?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                <a href="hapus.php?id=<?php echo $row['id'];?>" onclick="return confirm('Yakin?')">Delete</a>
            </td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </table>
</body>
</html>