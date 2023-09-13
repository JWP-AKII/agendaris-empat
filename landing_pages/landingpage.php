<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
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
                <li><a class="dropdown-item" href="surat_keluar.php">surat keluar</a></li>
                <li><a class="dropdown-item" href="#">desposisi</a></li>
                <li><a class="dropdown-item" href="#">buku</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-3">
      <div class="mt-4 p-5 bg-success text-white rounded">
        <h1>Selamat Datang user</h1>
        <p>
          Anda login sebagai user, anda memiliki akses penuh terhadap sistem
        </p>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
