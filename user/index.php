<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <h1>Selamat datang admin</h1>
  <button type="submit"><a href="tambah.php">tambah</a></button>
  <table border=1>
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>jabatan</th>
      <th>aksi</th>
    </tr>
    <?php
      
      $sql = "SELECT * FROM user ORDER BY id DESC";
      $data = mysqli_query($conn, $sql);
      // $result = mysqli_fetch_assoc($data);
      // var_dump($result);

      $no = 1;

      while ($result = mysqli_fetch_assoc($data)) {
    ?>

    <tr>
      <td><?php echo $no++?></td>
      <td><?php echo $result['username']?></td>
      <td><?php echo $result['jabatan']?></td>
      <td>
        <a href="edit.php?id= <?php echo $result['id']?>">edit</a>
        <a href="hapus.php?id= <?php echo $result['id']?>">hapus</a>
      </td>
      </tr>
      <?php }?>
   
  </table>
</body>
</html>