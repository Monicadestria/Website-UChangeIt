<?php
session_start();
require 'koneksi.php';

if(isset($_POST['hapus']))
{
    $no = mysqli_real_escape_string($conn, $_POST['hapus']);

    $hapsql = "DELETE FROM tb_target WHERE no='$no' ";
    $hapquery = mysqli_query($conn, $hapsql);

    if($hapquery)
    {
        echo '<script type = "text/javascript">';
        echo 'alert("Hapus data berhasil")';
        echo '</script>';
        header("Location: riwayat.php");
        unlink();

    }
    else
    {
        echo '<script type = "text/javascript">';
        echo 'alert("Gagal!")';
        echo '</script>';
        header("Location: riwayat.php");

    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Title -->
    <title>UChangeIt</title>

    <!-- Icon Title -->
    <link rel="icon" href="assets/LogoUChangeIt.png" type="image/x-icon" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md bg-black navbar-light">
      <div class="container">
        <!-- Navbar Logo -->
        <a class="navbar-brand text-white" href="">
          <img src="assets/LogoUChangeIt.png" alt="Logo" style="width: 30px" class="d-inline-block align-text-top me-2" />
          UChangeIt
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon bg-white rounded-1"></span>
        </button>
        
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="utama.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="materi.php">Materi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="target.php">Target</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="tipsntrik.php">Tips & Trik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href=""><?php echo $_SESSION['email']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- Tutup Navbar -->
    
    <section id="judulRiwayat">
      <div class="container">
        <div class="row">
          <h1 class="text-light"><a href="javascript:history.back()"><img src="assets/back-icons.png"></a> Riwayat Perubahan</h1>
        </div>
      </div>
    </section>
    <div class="container-lg">
        <div class="row"></div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Batas Waktu</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            require 'koneksi.php';
                            // Menampilkan data pada email yang sudah login
                            $sql = "SELECT * FROM tb_target WHERE email = '$_SESSION[email]'";
                            $query = mysqli_query($conn, $sql);
                            
                            if(mysqli_num_rows($query) > 0)
                                {
                                foreach($query as $target)
                                    {
                        ?>
            <tr>
                <td><?= $target['email']; ?></td>
                <td><?= $target['judul']; ?></td>
                <td><?= $target['deskripsi']; ?></td>
                <td><?= $target['batas_waktu']; ?></td>
                <td><img src="foto/<?php echo $target['foto']; ?>" style="width: 120px;"/></td>
                <td>
                    <form action="riwayat.php" method="POST" class="d-inline">
                        <!--<button type="submit" name="edit" value="<?=$target['no'];?>" class="btn btn-outline-success btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Mengedit?')">Edit</button>-->
                        <button type="submit" name="hapus" value="<?=$target['no'];?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php
                    }
                }
                else
                {
                    echo "<h5> Tidak ditemukan data perubahan perilaku  </h5>";
                }
                        ?>
                                
                            </tbody>
                        </table>
            </div>
        </div>
    </div>
    
  </body>
</html>