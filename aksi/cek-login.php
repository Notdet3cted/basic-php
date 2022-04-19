<?php
// mengaktifkan session pada php
session_start();

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// cek apakah username dan password di temukan pada database
if ($username == 'admin@admin.com' && $password == 'admin123') {
	$_SESSION['login'] = true;
	echo '<script>alert("Selamat Datang Admin")
	window.location.replace("../index.php")</script>';
} else {
	echo "<script>alert('Akun salah'); location.href = '../login.php'</script>";
}
