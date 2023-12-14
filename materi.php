<?php
session_start();
require 'koneksi.php';
if (isset($_POST['submit_materi'])){
    $file_jawaban = $_FILES["file_jawaban"]["name"];
    $file_tmp = $_FILES["file_jawaban"]["tmp_name"];
    
    $target_dir = "ftjawaban/";
    $target_file = $target_dir . basename($file_jawaban);
    $ukuran_file = $_FILES["foto"]["size"];
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // $check = getimagesize($file_tmp);
    // if($check !== false) {
    //     echo "File is an image - " . $check["mime"] . ".";
    // } else {
    //     echo "File is not an image.";
    // }
    
  
    
    // Check file size
    if ($ukuran_file > 500000) {
        echo '<script type = "text/javascript">';
        echo 'alert("Maaf, ukuran file Anda terlalu besar!")';
        echo '</script>';
        return false;
    }
    
        move_uploaded_file($file_tmp, $target_file);
        $sql = "INSERT INTO tb_jawaban (file_jawaban) VALUES ( '$file_jawaban')";
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
            <a class="nav-link active text-white" href="materi.php">Materi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="target.php">Target</a>
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
    <!-- Referensi -->
    <section id="Referensi">
      <div class="container">
        <div class="row text-light">
          <h1><a href="javascript:history.back()"><img src="assets/back-icons.png"></a> Referensi</h1>
        </div>
      </div>
      <div class="container pt-4 pb-3 row mb-4">
        <h1 class="text-uppercase text-black" style="font-size: medium; padding-left: 7%;">Matematika Kelas 7</h1>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1gmVLSY6wqp0Ndb_Bp2i-JYWgjnuc21I1/view?usp=sharing">Bab 1 Bilangan Bulat</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1LT3rhvH0TwTiaDzLLGcNknDob7XbSFjv/view?usp=sharing">Bab 2 Aljabar</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1ejpg37D8veiBAlRsBL2GsZIr0V5NQKBl/view?usp=sharing">Bab 3 Persamaan Linear</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1XcUcttowpdosEcNabkgMTsypky_oUJd2/view?usp=sharing">Bab 4 Perbandingan Senilai dan Perbandingan Berbalik Nilai</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1C0u9T0k5scPQGqOdGfLXa3hrgI9hYqqd/view?usp=sharing">Bab 5 Bangun Datar</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1Ns3mxKq6XqT9zhEd1-DonHkQ1c_ZExQU/view?usp=sharing">Bab 6 Bangun Ruang</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1UTHB2jYMYcpY3H9OaA3dOlsCXW7DAMVy/view?usp=sharing">Bab 7 Menggunakan Data</a></p>
        
        <h2 class="text-uppercase text-black pt-3" style="font-size: medium; padding-left: 7%;"> IPA Kelas 7</h2>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1AOWSGcguD6eoAREZVe885LHhn0pMfdB3/view?usp=sharing">Bab 1 Hakikat Ilmu Sains dan Metode Ilmiah</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1hxwzdVt2ZzblPzxxfAjrr1pM0mr3ADI6/view?usp=sharing">Bab 2 Zat dan Perubahannya</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/14AR8scWLZDvXSLoL37CcMgtRq4nmOCNG/view?usp=sharing">Bab 3 Suhu Kalor dan Pemuaian</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1wtFSNDv444dbqjv39TZXshY2LYqxqzXc/view?usp=sharing">Bab 4 Gerak dan Gaya</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1L_OgRfFP-oKy3S95JtJtokmS-bq2zJRv/view?usp=sharing">Bab 5 Klasifikasi Makhluk Hidup</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1g-wlbwG6brJFxrdFkC6qciivmrVrBjXY/view?usp=sharing">Bab 6 Ekologi dan Keanekaragaman Hayati Indonesia</a></p>
          <p class="texted-muted fz-13" style="padding-left: 7%;"><a href="https://drive.google.com/file/d/1Q33zrn2gEybLEamMspBYOg87bYCoIiRr/view?usp=sharing">Bab 7 Bumi dan Tata Surya</a></p>
        </div>
      </div>

      <!-- soal -->
      <div class="container-fluid" id="soal">
        <div class="row text-light">
          <h1 class="text-uppercase" style="padding-left: 7%;">Soal</h1>
        </div>
      </div>
      <div class="container-fluid pt-3 pb-2 row mb-4">
        <h1 class="text-uppercase text-black" style="font-size: 30px; padding-left: 7%;">Matematika</h1>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%;">
          1. Terdapat nilai A = {5,6,7} sedangkan nilai B = {3, 4}, jadi nilai dari A 𝖴 B yaitu …
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          A. {3}
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          B. {3, 4, 5, 6, 7}
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          C.{1, 3}
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          D. {2, 4}
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%;">
          2. Jika M = {a, i, u, e, o} , N = {a, u, o}, nilai n dari (M 𝖴 N) yaitu ….
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          A. 5
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          B. 6
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          c. 7
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          D. 8
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%;">
          3. nilai n (A) = 10, nilai n (B) = 8 ada n (A ∩ B) = 8, maka nilai n atas (A 𝖴 B) ialah ….
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          A. 8
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          B. 9
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          c. 10
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          D. 11
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%;">
          4. Nilai P = 100, Q = 120 serta terdapat nilai dari (P ∩ Q) = 80, maka nilai (P 𝖴 Q) ialah
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          A. 80
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          B. 100
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          c. 120
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          D. 140
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%;">
          5. Diketahui B = {1, 2, 3, 4}. Maka nilai dari himpunan B ….
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          A. 4
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          B. 8
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          c. 16
        </p>
        <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
          D. 32
        </p>
      </div>
    </div>
    <div class="container-fluid pt-3 pb-2 row mb-4">
      <h1 class="text-uppercase text-black" style="font-size: 30px; padding-left: 7%;">IPA</h1>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%;">
        1. Suhu badan orang sehat adalah 360 Celcius, yang termasuk besaran yaitu ….
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        A. benda
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        B. 50
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        C. Celcius
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        D. Suhu
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%;">
        2. Dua buah balok besi dengan ukuran berbeda, akan memiliki …..
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        A. Volume yang sama
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        B. Massa yang sama
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        c. Massa jenis yang sama
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        D. Berat yang sama
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%;">
        3. Raksa digunakan untuk mengisi thermometer karena …
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        A.  titik didihnya teratur
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        B. pemuaiannya teratur
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        c. titik bekunya tinggi
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        D. pemuaiannya tidak teratur
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%;">
        4. Perpindahan kalor pada zat yang tidak disertai perpindahan partikel-partikelnya disebut…..
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        A. konveksi
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        B. konduksi
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        c. radiasi
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        D. konduksi dan radiasi
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%;">
        5. Jika kertas lakmus merah dimasukkan ke larutan cuka, maka warna kertas lakmus merah akan …
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        A. tetap merah
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        B. menjadi biru
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        c. menjadi ungu
      </p>
      <p style="color: black; font-size: medium; text-align:justify; padding-left: 7%">
        D. menjadi putih
      </p>
    </div>
    </div>
    </div>
    
    <!-- upload file -->
    <section id="uploadJawaban">
        <div class="container-fluid">
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-5">
                     <form action="materi.php" class="needs-validation" enctype="multipart/form-data" method="POST">
                        <div class="mb-4">
                            <label for="labelUpload" class="form-label" style="color: black;">Bukti foto mengerjakan soal</label>
                            <input type="file" class="form-control" name="file_jawaban" id="inputFile" required>
                            <div class="valid-feedback">Valid</div>
                            <div class="invalid-feedback">File belum terisi</div>
                        </div>
                        <div class="d-grid mb-3 text-center pb-4" >
                            <button type="submit" name="submit_materi" class="btn btn-outline-success" onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan?')">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
  </section>

  <!-- Javascript -->
  <script>
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
      }
    })
})()
  </script>
<!-- Tutup Javascript -->
  </body>
</html>
