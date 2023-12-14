<?php
session_start();
require 'koneksi.php';
if (isset($_POST['submit_target'])){
    $email = $_SESSION["email"];
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $batas_waktu = $_POST["batas_waktu"];
    
    $file_foto = $_FILES["foto"]["name"];
    $file_tmp = $_FILES["foto"]["tmp_name"];
    $target_dir = "foto/";
    $target_file = $target_dir . basename($file_foto);
    $ukuran_file = $_FILES["foto"]["size"];
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // $check = getimagesize($file_tmp);
    // if($check !== false) {
    //     echo "File is an image - " . $check["mime"] . ".";
    // } else {
    //     echo "File is not an image.";
    // }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo '<script type = "text/javascript">';
        echo 'alert("Foto sudah ada. Cari foto yang lain!")';
        echo '</script>';
        return false;
    }
    
    // Check file size
    if ($ukuran_file > 500000) {
        echo '<script type = "text/javascript">';
        echo 'alert("Maaf, ukuran file Anda terlalu besar!")';
        echo '</script>';
        return false;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo '<script type = "text/javascript">';
            echo 'alert("Maaf, hanya JPG, PNG, JPEG, dan GIF yang boleh Anda unggah!")';
            echo '</script>';
            return false;
    }
    
        move_uploaded_file($file_tmp, $target_file);
        $sql = "INSERT INTO tb_target (email, judul, deskripsi, batas_waktu, foto) VALUES ( '$email', '$judul', '$deskripsi', '$batas_waktu', '$file_foto')";
        // echo $sql;
        // die;
        mysqli_query($conn, $sql);
        echo '<script type = "text/javascript">';
        echo 'alert("Data berhasil disimpan")';
        echo '</script>';
    
}else {
        echo '<script type = "text/javascript">';
        echo 'alert("Gagal!")';
        echo 'window.location.href = "masuk.php"';
        echo '</script>';
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
    <nav class="navbar navbar-expand-md bg-black navbar-light fixed-top">
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
    
    
    <!-- Section judul -->
    <section id="judulTarget">
      <div class="container">
        <div class="row text-light">
          <h1><a href="javascript:history.back()"><img src="assets/back-icons.png"></a> Target Perubahan</h1>
        </div>
      </div>
    </section>


    <!-- Section Form -->
    <section id="note">
      <div class="container-fluid">
        <div class="row mb-3 justify-content-center">
          <div class="col-lg-5">
        <!-- form -->
            <form action="target.php" class="needs-validation" enctype="multipart/form-data" novalidate method="post">
          <!-- input Email -->
          <!--<div class="mb-4">-->
          <!--  <label for="labelEmail" class="form-label" style="color: black;">Email</label>-->
          <!--  <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Masukkan email Anda" required>-->
          <!--  <div class="valid-feedback">Valid</div>-->
          <!--  <div class="invalid-feedback">Wajib diisi</div>-->
          <!--</div>-->
          
          <!-- input Judul -->
          <div class="mb-4">
            <label for="labelJudul" class="form-label" style="color: black;">Judul Perubahan</label>
            <input type="text" class="form-control" name="judul" id="inputJudul" placeholder="Masukkan judul perubahan perilaku Anda" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Wajib diisi</div>
          </div>
          <!-- input Deskripsi -->
          <div class="mb-4">
              <label for="desc" class="form-label" style="color: black;">Deskripsi</label>
              <textarea class="form-control" name="deskripsi" id="inputDesc" placeholder="Masukkan deskripsi perubahan perilaku Anda" rows="4" required></textarea>
              <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Wajib diisi</div>
            </div>
            <!-- Input Batas Waktu -->
            <div class="mb-4">
              <label for="labelTgl" class="form-label" style="color: black;">Batas Waktu</label>
              <input type="date" class="form-control" name="batas_waktu" id="inputTgl" required>
              <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Wajib diisi</div>
            </div>
            <!-- Input Bukti Foto -->
            <div class="mb-4">
              <label for="labelUpload" class="form-label" style="color: black;">Bukti foto melakukan perubahan</label>
              <input type="file" class="form-control" name="foto" id="inputFile" required>
              <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Wajib diisi</div>
            </div>
            <div class="d-grid mb-3 text-center">
              <button type="submit" name="submit_target" class="btn btn-outline-success" onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan?')">Simpan</button>
            </div>
            <div class="d-grid mb-3 text-center">
              <a href="riwayat.php" class="btn btn-outline-dark">Riwayat</a>
            </div>
          </form>
      </div>
    </div>
    </section>

    <!-- Javascript -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()
    </script>
<!-- Tutup Javascript -->


  </body>
</html>
