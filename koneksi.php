<?php
$servername = "localhost:3306";
$database = "ptik2214_uchangeit";
$username = "ptik2214_uchangeit";
$password = "Uchangeit123";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil. ";
?>