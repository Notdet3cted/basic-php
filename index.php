<?php include_once "head.php" ?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12 d-grid gap-2">
            <a href="form/form-tambah.php" class="btn btn-info">Tambah Data</a>
        </div>
    </div>
    <!-- Content -->
    <div class="row mt-4">
        <?php
        include_once "koneksi.php";
        $sql = "SELECT * FROM data_mahasiswa";
        $data = mysqli_query($koneksi, $sql);
        if (mysqli_num_rows($data) <= 0) {
            echo "<h2>Data Tidak Ada</h2>";
        } else {
            while ($dt = mysqli_fetch_array($data)) { ?>
                <div class="col-md-3 mt-4">
                    <div class="card">
                        <img src="foto/<?= $dt['foto'] ?>" class="card-img-top" alt="<?= $dt['nim'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $dt['nama'] ?></h5>
                            <p class="card-text"><?= $dt['nim'] ?></p>
                            <p class="card-text"><?= $dt['fakultas'] . "-" . $dt['jurusan'] ?></p>
                            <div class="col-md-6 ms-auto">
                                <?php
                                if (@!$_SESSION['login']) {
                                } else {
                                ?>
                                    <a href="form/edit.php?id=<?= $dt['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

        <?php }
        }
        ?>
    </div>
    <!-- End Content -->
</div>

<?php include_once "foot.php" ?>