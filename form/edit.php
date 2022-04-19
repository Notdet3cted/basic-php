<?php include_once "../head.php" ?>

<div class="container">
    <?php
    if (@!$_SESSION['login']) {
        header("location: ../index.php");
    }
    include_once "../koneksi.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM data_mahasiswa WHERE id='$id'";
    $data = mysqli_query($koneksi, $sql);
    $dt = mysqli_fetch_assoc($data);
    ?>

    <!-- Form edit -->
    <div class="col-md-12 mt-4">
        <form action="create.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $dt['nama'] ?>" placeholder="Nopal Gans">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Nama</label>
                <input type="number" class="form-control" id="nim" name="nim" value="<?= $dt['nim'] ?>" placeholder="201851111">
            </div>
            <div class="mb-3">
                <label for="fakultas" class="form-label"> Fakultas </label>
                <select class="form-control" name="fakultas">
                    <option>Pilih Fakultas</option>
                    <?php
                    $fakultas = ['Teknik', 'Ekonomi dan Bisnis', 'Pertanian', "Hukum"];
                    foreach ($fakultas as $fk) { ?>
                        <option <?= $dt['fakultas'] == $fk ? "Selected" : "" ?>><?= $fk ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
            <div class="mb-3">
                <label for="fakultas" class="form-label"> Fakultas </label>
                <select class="form-control" name="fakultas">
                    <option>Pilih Jurusan</option>
                    <?php
                    $jurusan = ['Teknik Informatika', 'Akuntansi', 'Manajemen', "PGSD"];
                    foreach ($jurusan as $jur) { ?>
                        <option <?= $dt['jurusan'] == $jur ? "Selected" : "" ?>><?= $jur ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
            <div class="mb-3">
                <label class="form-label"> Pilih Foto</label>
                <input class="form-control" name="foto" type="file">
            </div>
            <div class="mb-3">
                <label class="form-label">Foto Saat ini </label></br>
                <img src="../foto/<?= $dt['foto'] ?>" />
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