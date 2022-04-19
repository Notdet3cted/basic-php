<?php
// Memanggil file koneksi
include_once "koneksi.php";

$nama = $_POST['nama'];
// $nim = $_POST['nim'];
$nim = 201511;
$fakultas = $_POST['fakultas'];
$jurusan = $_POST['jurusan'];
$foto = $_FILES['foto'];


$ekstensi =  array('png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    echo "<script> alert('Data Gagal ditambahkan')</script>";
    // header("location: index.php");
} else {
    if ($ukuran < 1044070) {
        $xx = $nim . ".$ext";
        move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/' . $nim . ".$ext");
        $sql = mysqli_query($koneksi, "INSERT INTO data_mahasiswa VALUES(NULL,'$nim','$nama','$fakultas','$jurusan','$xx')");
        if ($sql) {
            echo "<script> alert('Data Berhasil ditambahkan')</script>";
            header("location: index.php");
        } else {
            echo mysqli_error($koneksi);
        }
    } else {
        echo "<script> alert('Ukuran Gambar Terlalu besar')</script>";
        // header("location: index.php");
    }
}
