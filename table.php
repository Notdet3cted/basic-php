<?php include_once "head.php" ?>
<div class="continer">
    <!-- Table Content -->
    <div class="col-md-12 mt-4">

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <td> No. </td>
                        <td> Nama </td>
                        <td> NIM </td>
                        <td> Fakultas </td>
                        <td> Prodi </td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once "koneksi.php";
                    $sql = "SELECT * FROM data_mahasiswa";
                    $data = mysqli_query($koneksi, $sql);
                    $no = 1;
                    if (mysqli_num_rows($data) > 0) {
                        while ($dt = mysqli_fetch_array($data)) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td> <?= $dt['nama'] ?> </td>
                                <td> <?= $dt['nim'] ?> </td>
                                <td> <?= $dt['fakultas'] ?></td>
                                <td> <?= $dt['jurusan'] ?> </td>
                            </tr>

                    <?php
                            $no++;
                        }
                    } else {
                        echo "Tidak ada data";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Table -->
</div>
<?php include_once "foot.php" ?>