<?php
$servername = "localhost";
$database = "mahasiswa";
$username = "root";
$password = "";

// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
