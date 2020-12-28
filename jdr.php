<!doctype html>
<html lang="en">
  <head>
  <?php
        session_start();
        if(!isset($_SESSION['username'])){
          // header("Location: index.php");
          // echo'<script> alert("Harap Login Terlebih Dahulu");</script>';
          echo'
          <script>
          var OK = confirm("Harap login terlebih dahulu");
  
          if (OK) {
              window.location = "index.php";
          } else {
            window.location = "index.php";
          }
          </script>';
        }
        include"koneksi.php";
        ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="jkb.css">
    <title>MENU JADWAL KULIAH</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand" href="dashboard.php">Universitas Ahmad Dahlan</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Jadwal Kuliah
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="jps.php">Program Studi</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="jdd.php">Dosen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="jdr.php">Ruangan</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    </div>
    <main>
    <div class="jumbotron">
      <div class="container">
      <div class="row" style="width: 500px;">
        <div class="col-md-6">
        <p class="lead">Menu
        </p>
        <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;color:black;">
                Jadwal Kuliah
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="jps.php">Program Studi</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="jdd.php">Dosen</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="jdr.php">Ruangan</a>
                </div>
              </li>
            </ul>
        </div>
        <div class="table-responsive-sm" style="width: 20px;">
        <table class="table">
            </thead>
            <tbody>
                <tr>
                    <td><h1>JADWAL DOSEN</h1></td>
                </tr>
                <tr >
                    <td><h4>KAMPUS</h4></td>
                    <td>
                    <select id="input" style="width: 300px;">
                        <option>PILIH</option>
                        <option>KAMPUS 1</option>
                        <option>KAMPUS 2</option>
                        <option>KAMPUS 3</option>
                        <option>KAMPUS 4</option>
                        <option>KAMPUS 5</option>
                        <option>KAMPUS 6</option>
                    </select>
                    </td>
                </tr>
                <tr>
                  <td></td>  
                  <td><button type="button" class="btn btn-secondary">CARI</button></td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <table width="800">
                    <tr>
                      <td>AKSI</td><td>NO</td><td>RUANGAN</td><td>KAPASITAS</td><td>JUMLAH SESI</td><td>SESI TERPAKAI</td><td>SESI TERSEDIA</td>
                    </tr>
                  </table>
                  </td>
                </tr>
            </tbody>
            </table>
        </div>
      </div>  
      </div>
    </div>
  </main>
    <footer>
    <div class="card text-center" style="width: 100%; height: 50px;">
      <div class="card-footer text-muted" style="width: 100%; height: 50px;">
        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>, swan</p>
      </div>
    </div>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>