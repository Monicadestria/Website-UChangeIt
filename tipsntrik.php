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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTips" aria-controls="navbarTips" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon bg-white rounded-1"></span>
        </button>
        
        <div class="collapse navbar-collapse text-center" id="navbarTips">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="utama.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="materi.php">Materi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="target.php">Target</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="tipsntrik.php">Tips & Trik</a>
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

    <!-- Judul Tips & Trik -->
    <section id="judul">
      <div class="container">
        <div class="row text-light bg-secondary">
          <h1><a href="javascript:history.back()"><img src="assets/back-icons.png"></a> Tips dan Trik</h1>
        </div>
      </div>
      <!-- Tips -->
      <div class="container pt-4 row mb-1">
          <h2 style="color: black; font-size: 50px; font-weight: 650; text-align: left; padding-left: 15%; color: rgb(20, 120, 72);">TIPS</h2>
          <div class="container-fluid pt-3 pb-2 row mb-4">
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 15%;">
              Ketika proses membangun kebiasaan tantangan terbesarnya adalah ketika harus bertahan di tengah proses perubahan. Tak banyak yang akhirnya menyerah karena rasa bosan atau faktor lainnya. James Clear merekomendasikan sebuah tips yang bisa dilakukan untuk mengatasi masalah ini, yaitu PANTAU PROGRES.
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 15%;">
              Memantau kemajuan yang telah dicapai dapat memunculkan motivasi untuk tetap melakukan suatu kebiasaan. Strategi sederhana ini merupakan cara yang efektif untuk memastikan kita tetap melakukan apa yang telah direncanakan di awal. Tips ini dapat diterapkan dengan cara mencatat kemajuan setiap hari.
            </p>
            <!-- Trik -->
            <p style="color: black; font-size: 50px; font-weight: 650; text-align: left; padding-left: 15%; color: rgb(20, 120, 72);">
            TRIK
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 15%;">
              Membangun kebiasaan baik memang sulit untuk dilakukan. James Clear, penulis asal Amerika Serikat, dalam bukunya yang berjudul Atomic Habits memberitahukan cara-cara jitu untuk membangun kebiasaan baik :
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 15%;">
              1. Hukum 1%
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 18%;">
              Jika Anda bisa menjadi 1% lebih baik setiap hari dalam setahun, akhirnya Anda akan 37 kali lebih baik pada pengujung tahun. Sebaliknya, jika Anda 1% lebih buruk setiap hari dalam setahun, Anda akan menurun hampir menjadi nol. Yang berawal dari satu kemenangan kecil atau satu kemunduran remeh dapat terakumulasi menjadi jauh lebih besar.
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 15%;">
              2. Buat agar mudah dilihat (CUE)
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 18%;">
              Cue memberi sinyal kepada otak kita bahwa ini adalah saatnya untuk melakukan kebiasaanmu. James Clear menjelaskan bahwa kita bisa memanipulasi lingkungan kita untuk menumbuhkan kebiasaan yang baik. Salah-satu caranya adalah dengan cue visual karena apa yang kita lihat dapat memberikan dampak besar pada apa yang kita lakukan.
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 18%;">
              Contoh : Jika Anda ingin menjadi penulis, maka taruh buku dan alat tulismu di atas meja kamar Anda di mana Anda bisa melihatnya dengan jelas, setidaknya Anda akan teringat bahwa Anda harus menulis setiap hari atau Anda dapat membuat catatan sebagai pengingat untuk selalu belajar menulis.
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 15%;">
              3. Buat kebiasaan menjadi menarik
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 18%;">
              Dengan membuat kebiasaan baru itu menjadi menarik Anda bisa meningkatkan dorongan untuk melakukan kebiasaan baru. Cara untuk membuat kebiasaan baru lebih menarik adalah dengan menggabungkan hal yang perlu anda lakukan dengan hal yang ingin Anda lakukan.
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 15%;">
              4. Mulai dari yang paling mudah
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 18%;">
              Salah-satu masalah yang paling umum terjadi ketika membangun kebiasaan baru adalah kita terlalu banyak berencana namun tidak diiringi dengan tindakan. Kita terlalu fokus pada metode apa yang paling baik dilakukan sehingga rencana kita dapat berjalan dengan sempurna.
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 18%;">
              Sebagai contoh, ketika ingin memulai kebiasaan menulis, jangan tanamkan dalam diri untuk membuat tulisan yang bagus tapi ingatlah untuk mencoba menulis paragraf-paragraf sederhana dulu.
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 15%;">
              5. Buat kebiasaan menjadi menyenangkan
            </p>
            <p style="color:black; font-size: 20px; font-weight: 500; text-align: justify; padding-left: 18%;">
              Anda juga bisa mencoba sistem reward dengan menentukan hadiah tertentu yang bisa didapatkan setelah kita berhasil melaksanakan sebuah kebiasaan.
            </p>
          </div>
        </div>
        <div class="container-mail text-center pt-3 pb-3" style="color: white;">
          <p class="fst-italic">
          Referensi : Clear, J. (2018). ATOMIC HABITS Perubahan Kecil yang Memberikan Hasil Luar Biasa. Jakarta: Gramedia Pustaka Umum.
          </p>
        </div>
        </div>
    </section>
  </body>
</html>
