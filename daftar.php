<?php
require 'koneksi.php';
if (isset($_POST['btn-daftar'])){
$nama_awal = $_POST["firstname"];
$nama_akhir = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO tb_users (nama_awal, nama_akhir, email, password) VALUES ('$nama_awal', '$nama_akhir', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
        // header("Location: masuk.php");
        echo '<script type = "text/javascript">';
        echo 'alert("Pendaftaran akun berhasil!")';
        echo 'window.location.href = "masuk.php"';
        echo '</script>';
} else {
        echo '<script type = "text/javascript">';
        echo 'alert("Pendaftaran akun tidak berhasil!")';
        echo 'window.location.href = "daftar.php"';
        echo '</script>';
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
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
    <div class="container-daftar">
      <div class="row align-items-center justify-content-center vh-100">
        <div class="col-lg-6">
          <div class="shadow">
            <div class="row mb-1">
              <div class="col-lg-3"></div>
              <div class="col-lg-7">
                <div class="row mb-5"></div>
                <div class="register-form">
                  <h4 class="mb-1 fw-bold">
                    Daftar
                  </h4>
                  <p class="mb-4 text-muted">Isi data di bawah ini untuk Daftar</p>
                  <form action="daftar.php" method="POST">
                    <div class="row mb-3">
                      <div class="col">
                        <label for="firstname">Nama Awal</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Nama Awal" id="firstname" />
                      </div>
                      <div class="col">
                        <label for="lastname">Nama Akhir</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Nama Akhir" id="lastname" />
                      </div>
                    </div>

                    <label for="email">Email</label>
                    <div class="input-group mb-4">
                      <input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda" id="email" />
                    </div>

                    <div class="row mb-4">
                      <div class="col">
                        <label for="pass" class="form-label">Kata Sandi </label>
                        <input type="password" name="password" class="form-control" placeholder="Kata Sandi" id="password" />
                      </div>
                      <div class="col">
                        <label for="pass2" class="form-label" >Konfirmasi Kata Sandi</label>
                        <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Kata Sandi" id="password2" />
                      </div>
                    </div>

                    <div class="d-grid mb-3">
                      <button type="submit" name="btn-daftar" class="btn btn-outline-success" onclick="return confirm('Apakah Data Yang Anda Masukkan Sudah Benar?')">Daftar</button>
                    </div>
                  </form>
                  <p class="texted-muted fz-13 text-center">Sudah memiliki akun? <a href="masuk.php">Masuk</a></p>
                  <div class="row mb-4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
