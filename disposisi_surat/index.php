<?php
include "koneksiDisposisi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1>Disposisi</h1>

    <button class="tambah"><a href="tambah.php"><strong><i class="fa fa-plus"></i> Tambah Data</strong></a></button>

    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Surat Masuk</th>
                <th>Disposisi</th>
                <th style="width: 90px;"></th>
            </tr>
        </thead>
        <?php 
        $sql = "SELECT * FROM disposisi_surat";
        $no= 1;
        $data = mysqli_query($conn, $sql);

        while ($result = mysqli_fetch_assoc($data)) {
        ?>
        <tbody>
            <tr>
            <td><?php echo "<strong>" . $no++ . "</strong>";?></td>
                <td><?php echo $result['user_id'];?></td>
                <td><?php echo $result['surat_masuk_id'];?></td>
                <td><?php echo $result['disposisi'];?></td>
                <td style="text-align: center;">
                    <a class="editt" href="edit.php?id=<?php echo $result['id']?>"><i class="fa fa-edit"></i> Edit</a><br>
                    <a class="deletee" href="hapus.php?id=<?php echo $result['id']?>"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
        </tbody>

        <?php
        }
        ?>

    </table>
</body>
</html>