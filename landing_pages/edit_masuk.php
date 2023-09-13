<?php
include '../koneksi.php';
$id= $_GET['id'];

if (isset($_POST['submit'])) {
    $nomor_surat= $_POST['nomor_surat'];
    $tanggal_surat= $_POST['tanggal_surat'];
    $pengirim= $_POST['pengirim'];
    $nomor_agenda= $_POST['nomor_agenda'];
    $tanggal_agenda= $_POST['tanggal_agenda'];
    $buku= $_POST['buku'];
    $status= $_POST['status'];

    $sql= 
    "UPDATE surat_masuk SET nomor_surat='$nomor_surat', tanggal_surat='$tanggal_surat', pengirim='$pengirim', nomor_agenda='$nomor_agenda', tanggal_agenda='$tanggal_agenda', buku_id='$buku', status='$status' WHERE id=$id";

    $query= mysqli_query($conn, $sql);
    if ($query) {
        header('location: surat_masuk.php');
    } else {
        echo mysqli_error($conn);
    }
}

$sql_surat= "SELECT * FROM surat_masuk WHERE id=$id";
$query_surat= mysqli_query($conn, $sql_surat);
$surat= mysqli_fetch_object($query_surat);
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tambah surat masuk</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
    <!-- navbar awal -->
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
                  <a class="dropdown-item" href="surat_masuk.html"
                    >surat masuk</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="landingpage.html">Home</a>
                </li>
                <li><a class="dropdown-item" href="#">surat keluar</a></li>
                <li><a class="dropdown-item" href="#">desposisi</a></li>
                <li><a class="dropdown-item" href="#">buku</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar akhir -->
    <div class="container" style="margin-top: 80px">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card">
              <div class="card-header">
                UBAH DATA
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  
                  <div class="form-group">
                    <label>Nomor Surat</label>
                    <input type="text" name="nomor_surat" class="form-control" value="<?php echo $surat->nomor_surat; ?>">
                  </div>
                  <div class="form-group">
                    <label>tanggal surat</label>
                    <input type="date" name="tanggal_surat"  class="form-control" value="<?php echo $surat->tanggal_surat; ?>">
                  </div>
                  <div class="form-group">
                    <label>pengirim</label>
                    <input type="text" name="pengirim"  class="form-control" value="<?php echo $surat->pengirim; ?>">
                  </div> 
                  <div class="form-group">
                    <label>no agenda</label>
                    <input type="number" name="nomor_agenda"  class="form-control"value="<?php echo $surat->nomor_agenda; ?>">
                  </div> 
                  <div class="form-group">
                    <label>tanggal agenda</label>
                    <input type="date" name="tanggal_agenda"  class="form-control"value="<?php echo $surat->tanggal_agenda; ?>">
                  </div> 
                  
                  <div class="form-group">
                  <label for="buku">buku</label>
                  <select name="buku" id="">
                  
                    <?php
                    $sql= "SELECT * FROM buku";
                    $query= mysqli_query($conn, $sql);

                    while ($tampil= mysqli_fetch_object($query)) {    
                    ?>
                    <option value="<?php echo $tampil->id;?>" <?php echo ($surat->buku_id == $tampil->id) ? 'selected' : '' ;?>>
                      <?php echo $tampil->nama;?>
                    </option>
                    <?php
                    }
                    ?>
                </select>
                <br>
                <br>
                  <label for="status">Status</label>
                    <select name="status" id="">
                    <option value="terkirim">terkirim</option>
                    <option value="pending">pending</option>
                    <option value="gagal">gagal</option>


                    </select>

                  
                  </div>
                  
                  <button type="submit"class="btn btn-primary mt-5" name= "submit" >tambahkan</button>
                  </form>
    
  </body>
</html>
