<?php
if (@!$_SESSION['login']) {
    header("location: ../index.php");
}
include_once "../head.php"
?>
<div class="container">
    <!-- Form Upload -->
    <div class="col-md-12 mt-4">
        <form action="create.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nopal Gans">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Nama</label>
                <input type="number" class="form-control" id="nim" name="nim" placeholder="201851111">
            </div>
            <div class="mb-3">
                <label for="fakultas" class="form-label"> Fakultas </label>
                <select class="form-control" name="fakultas">
                    <option>Pilih Fakultas</option>
                    <option>Teknik</option>
                    <option>Ekonomi dan Bisnis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label"> Fakultas </label>
                <select class="form-control" name="jurusan">
                    <option>Pilih Jurusan</option>
                    <option>Teknik Informatika</option>
                    <option>Akuntansi</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label"> Pilih Foto</label>
                <input class="form-control" name="foto" type="file">
            </div>
            <div class="mb-3 text-right ms-auto">
                <button type="submit" class="btn btn-success btn-sm">Simpan </button>
                <button type="reset" class="btn btn-primary btn-sm">Batal</button>
            </div>
        </form>
    </div>
    <!-- End Form -->
</div>
<?php include_once "../foot.php" ?>