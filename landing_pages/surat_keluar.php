<?php
include '../koneksi.php';

$query = "SELECT * FROM surat_keluar";
$proses = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>surat keluar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
    <!-- awal navbar -->
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">APLIKASI SURAT</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                >Dropdown</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="landingpage.html">Home</a>
                </li>
                <li></li>
                <li><a class="dropdown-item" href="surat_masuk.php">surat masuk</a></li>
                <li><a class="dropdown-item" href="surat_keluar.php">surat keluar</a></li>
                <li><a class="dropdown-item" href="#">desposisi</a></li>
                <li><a class="dropdown-item" href="#">buku</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- tabel surat masuk awal -->
    <div class="container mt-5">
      <h2>Surat keluar</h2>
      <a href="tambah_sm.php" class="btn btn-primary">tambah</a>
      <table class="table table-bordered table-sm mt-2">
        


        <tr>
          <th>No.</th>
          <th>No Surat</th>
          <th>Tanggal Surat</th>
          <th>Tujuan</th>
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
            <td><?php echo $row['tujuan'];?></td>
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
      <!-- tabel surat masuk akhir -->
    </div>
  </body>
</html>
