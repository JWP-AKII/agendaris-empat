<?php
include '../koneksi.php';

    $q_buku = mysqli_query($conn,"SELECT * FROM buku");

if (isset($_POST['submit'])) {
    $nomorsurat = $_POST['nomorsurat'];
    $tanggalsurat = $_POST['tanggalsurat'];
    $pengirim = $_POST['pengirim'];
    $nomoragenda = $_POST['nomoragenda'];
    $tanggalagenda = $_POST['tanggalagenda'];
    $buku = $_POST['buku'];
    $status = $_POST['status'];
    
    $query = "INSERT INTO surat_masuk (nomor_surat,tanggal_surat,pengirim,nomor_agenda,tanggal_agenda,buku_id,status)
                VALUES ('$nomorsurat','$tanggalsurat','$pengirim','$nomoragenda','$tanggalagenda','$buku','$status')
    ";
    $proses = mysqli_query($conn,$query);
    if ($proses) {
        header('Location:surat_masuk.php');
    }
}
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
                  <a class="dropdown-item" href="surat_masuk.php"
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
                TAMBAH DATA SURAT MASUK
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  
                  <div class="form-group">
                    <label>Nomor Surat</label>
                    <input type="text" name="nomorsurat" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>tanggal surat</label>
                    <input type="date" name="tanggalsurat"  class="form-control">
                  </div>
                  <div class="form-group">
                    <label>pengirim</label>
                    <input type="text" name="pengirim"  class="form-control">
                  </div> <div class="form-group">
                    <label>no agenda</label>
                    <input type="number" name="nomoragenda"  class="form-control">
                  </div> <div class="form-group">
                    <label>tanggal agenda</label>
                    <input type="date" name="tanggalagenda"  class="form-control">
                  </div>
                  
                  <div class="form-group">
                    <label>buku</label>
                    <input type="text" name="buku"  class="form-control">
                  </div> 
                  <div class="form-group">
                    <label>status</label>
                    <select name="buku" id="">
                    <?php while($result=mysqli_fetch_assoc($q_buku)) {?>
                    <option value="<?php echo $result['id'];?>"><?php echo $result['nama'];?></option>
                    <?php
                    }
                    ?>
                    </select>
                  </div>
                  <button type="submit"class="btn btn-primary mt-5" name= "submit" >tambahkan</button>
                  </form>
    
  </body>
</html>
