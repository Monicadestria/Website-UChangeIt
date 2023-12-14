<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,500&display=swap" rel="stylesheet" />

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
        <a class="navbar-brand text-white" href="#section1">
          <img src="assets/LogoUChangeIt.png" alt="Logo" style="width: 30px" class="d-inline-block align-text-top me-2" />
          UChangeIt
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon bg-white rounded-1"></span>
        </button>
        
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" href="#section1">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#section2">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#Kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#Tentang">Tentang</a>
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

    <!-- Section Utama -->
    <section id="section1">
      <div class="container h-100">
        <div class="col-md-6 my-auto">
          <h1 style="color: white; font-size: 40px; font-weight: 650">Membantu Seseorang Yang Ingin Mengubah Kebiasaan Buruk</h1>
          <p style="color: white; font-size: 18px; width: 65%">Mari kita ubah perilaku atau kebiasaan yang awalnya buruk menjadi yang terbaik</p>
          <a href="target.php" class="btn btn-light text-success p-3 me-2" style="font-size: 20px; font-weight: 600">Mulai Berubah</a>
          <img src="assets/ElemenHome.png" alt="Picture" class="img-fluid position-absolute end-0 bottom-0 img-section" />
        </div>
      </div>
    </section>

    <!-- Section Layanan -->
    <section id="section2">
      <div class="container-fluid-layanan">
        <!-- Judul Section Layanan -->
        <div class="row">
          <div class="col-12 text-center header">
            <h2>LAYANAN</h2>
            <span class="title-sub">Solusi untuk mengubah kepribadian Anda</span>
          </div>
        </div>

        <!-- Baris Layanan -->
        <div class="row">
          <!-- Kolom Pertama -->
          <div class="col-md-4">
            <div class="card-services text-center">
              <div class="icon-circle">
                <img src="https://img.icons8.com/fluency/48/null/length.png" />
              </div>
              <h3>Materi</h3>
              <p>Berisi materi dasar terkait mata pelajaran Matematika dan IPA jenjang SMP/MTs</p>
              <a href="materi.php" class="btn btn-light text-success rounded-3" style="font-weight: 600">Mulai Belajar</a>
            </div>
          </div>
          <!-- Kolom Kedua -->
          <div class="col-md-4">
            <div class="card-services text-center">
              <div class="icon-circle">
                <img src="https://img.icons8.com/fluency/48/null/learning.png" />
              </div>
              <h3>Target</h3>
              <p>Berisi target pengubahan kebiasaan, perilaku, maupun mind set</p>
              <a href="target.php" class="btn btn-light text-success rounded-3" style="font-weight: 600"> Mulai Ubah </a>
            </div>
          </div>
          <!-- Kolom Ketiga -->
          <div class="col-md-4">
            <div class="card-services text-center">
              <div class="icon-circle">
                <img src="https://img.icons8.com/fluency/48/null/light-on.png" />
              </div>
              <h3>Tips & Trik</h3>
              <p>Berisi motivasi untuk melakukan perubahan terhadap diri sendiri</p>
              <a href="tipsntrik.php" class="btn btn-light text-success rounded-3" style="font-weight: 600">Mulai Baca</a>
            </div>
          </div>
          <!-- Akhir Kolom -->
        </div>
      </div>
    </section>
   
  <!-- Kontak-->
  <section id="Kontak">
      <div class="container-fluid-kontak pt-4 pb-5">
        <div class="row">
          <div class="col-12 text-center header">
            <h1 style="color: white; padding-top: 50px;">KONTAK</h1>
            <span style="color: white;">Hubungi kami apabila terdapat kritik dan saran</span>
          </div>
        </div>
        <div class="row mb-3 justify-content-center">
          <div class="col-lg-6">
        <form onsubmit="kirimEmail(); reset(); return false;">
            <div class="mb-4">
              <label for="to" class="form-label" style="color: white;">Email</label>
              <input type="to" class="form-control" id="to" placeholder="Masukkan Email Anda">
            </div>
            <div class="mb-4">
              <label for="kritik" class="form-label" style="color: white;">Kritik dan Saran</label>
              <textarea class="form-control" id="kritik" placeholder="Masukkan Kritik dan Saran Anda" rows="4"></textarea>
          </div>
          <div class="col-md-5 mx-auto text-center">
            <button class="btn btn-light text-success p-3 me-2" style="font-size: 15px; font-weight: 600;">Kirim Pesan</button>
        </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container-mail text-center pt-3 pb-3" style="color: white;">
      Email kami : fulanhamballah@gmail.com
    </div>
  </section>

  <!-- Tentang -->
  <section id="Tentang">
    <div class="container-fluid pt-5 pb-5">
      <div class="container-tentang">
        <h2 style="color: black; font-size: 50px; font-weight: 650; text-align: center; color: rgb(20, 120, 72);">TENTANG</h2>
        <p class="text-center">
          Mengenai Aplikasi UChangeIt
        </p>
        <div class="container-fluid pt-3 pb-2 row mb-4">
          <p style="color: black; font-size: 20px; font-weight: 500; text-align:justify; padding-right: 25%; padding-left: 25%;">
            Web ini berfungsi untuk membantu seseorang mencapai target
            atau berprogres dalam suatu hal, baik pembelajaran maupun yang lain.
          </p>
          <p style="color: black; font-size: 20px; font-weight: 500; text-align:justify; padding-right: 25%; padding-left: 25%">
            Web UChangeIt ini dapat mencatat dan melihat setiap progres yang telah dilakukan, hal itu tentunya akan membantu dalam mencapai target untuk memahami suatu pembelajaran.
          </p>
          <p style="color: black; font-size: 20px; font-weight: 500; text-align:justify; padding-right: 25%; padding-left: 25%">
            Semoga Web ini dapat berguna untuk Anda
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <div class="container-fluid">
    <footer class="text-center text-white" style="background-color: black">
      <hr class="my-2" />
      
      <section class="mb-1">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-7">
            <p>
              Niatkan dari hati jika Anda sangat ingin berubah perilaku maupun kebiasaan buruk. Berubahlah dimulai dari 1% dan Jangan terburu-buru dalam berubah! Tetap semangat dan jadilah diri Anda sendiri!
            </p>
          </div>
        </div>
      </section>
      
      <hr class="my-1" />
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        Copyright © 2023 : ADMY(PTI'2021-B)
      </div>
    </footer>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <!-- Javascript Send Email -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
      function kirimEmail(){
        Email.send({
            Host : "smtp.elasticemail.com",
            Username : "fulanhamballah@gmail.com",
            Password : "6C4509149D0D34DCC8CFF2DBD6A96B082BAD",
            To : 'monicadestria1@gmail.com',
            From : document.getElementById("to").value,
            Subject : "Ada Kritik dan Saran Baru",
            Body : document.getElementById("kritik").value
        }).then(
          message => alert(message)
        );
      }
    </script>
  </body>
</html>
