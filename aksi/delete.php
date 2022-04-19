<?php
if (@!$_SESSION['login']) {
    echo '<script>alert("Anda tidak dapat menghapus data")
	window.location.replace("../index.php")</script>';
}
include_once "koneksi.php";

$id = $_GET['id'];

$sql = "SELECT * FROM data_mahasiswa";
$data = mysqli_query($koneksi, $sql);
$dt = mysqli_fetch_assoc($data);

function delete($data)
{
    global $koneksi;
    return mysqli_query($koneksi, "DELETE FROM data_mahasiswa WHERE id='$data'");
}


if (mysqli_num_rows($data) < 0) {
    echo "data kosong";
} else {
    if ($dt['foto'] != "") {
        unlink("foto/" . $dt['foto']);
        delete($id);
    } else {
        delete($id);
    }
    echo "hapus berhasil";
}
