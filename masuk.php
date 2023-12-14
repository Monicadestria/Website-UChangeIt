<?php
session_start();
require 'koneksi.php';
if (isset($_POST['login'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM tb_users WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    
    if(is_array($row)){
        //echo var_dump($row) . "<br>";
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
        header("Location: utama.php");
    }else{
        echo '<script type = "text/javascript">';
        echo 'alert("Email atau Passoword Salah!")';
        echo 'window.location.href = "masuk.php"';
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
    <div class="container-masuk">
      <div class="row align-items-center justify-content-center vh-100">
        <div class="col-lg-4">
          <div class="shadow">
            <div class="row">
            <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <div class="row mb-5"></div>
                <div class="login-form">
                  <h5 class="mb-4 fw-bold">MASUK</h5>
                  <form action="masuk.php" method="POST">
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda" id="Email" />
                    </div>
                    <div class="mb-3">
                      <label for="pass" class="form-label">Kata Sandi</label>
                      <input type="password" name="password" class="form-control" placeholder="Masukkan Kata Sandi Anda" id="pass" />
                    </div>

                    <div class="d-grid mb-3">
                      <button type="submit" name="login" class="btn btn-outline-success">Masuk</button>
                    </div>
                  </form>
                  <p class="texted-muted fz-13 text-center">Belum memiliki akun? <a href="daftar.php">Daftar</a></p>
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

