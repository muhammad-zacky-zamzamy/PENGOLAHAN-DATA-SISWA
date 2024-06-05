
<div class="container">
    <h2 class="my-3">Master User</h2>
    <div class="row">
        <div class="col-md-4">
            <form action="<?= BASEURL ?>/laporan/cari" method="post">
                <label class="form-label">Kelas</label>
                <div class="input-group mb-3">
                    <select name="kelas" class="form-control">
                        <option value="">-- Pilih Kelas --</option>
                        <option value="X" <?php if($data['kelas'] == "X"){ echo "selected"; } ?>>X</option>
                        <option value="XI" <?php if($data['kelas'] == "XI"){ echo "selected"; } ?>>XI</option>
                        <option value="XII" <?php if($data['kelas'] == "XII"){ echo "selected"; } ?>>XII</option>
                    </select>
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No.HP</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $n = 1;
            foreach ($data['laporan'] as $row) {
            ?>
                <tr>
                    <th scope="row"><?= $n++ ?></th>
                    <td><?= $row['nis'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['jkl'] ?></td>
                    <td><?= $row['no_hp'] ?></td>
                </tr>
            <?php
            }
            if ($data['kelas'] == "") {
                echo '
                <tr>
                    <td colspan="7">Silahkan Input Kelas Terlebih Dahulu!</td>
                </tr>
                ';
            }elseif ($n < 2) {
                echo '
                <tr>
                    <td colspan="7">Tidak Ada Data Siswa di Kelas '. $data['kelas'] .'</td>
                </tr>
                ';
            }
            ?>
        </tbody>
    </table>
</div>
