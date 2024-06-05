<?php
foreach ($data['siswa'] as $row) {
}
$datattl = explode(', ', $row['ttl']);
$ttl1 = $datattl[0];
$ttl2 = $datattl[1];
?>
<div class="container">
    <h2 class="my-3">Edit Siswa</h2>
    <form action="<?= BASEURL ?>/siswa/editData" method="post">
        <input type="hidden" name="id_siswa" value="<?= $row['id_siswa'] ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">NIS*</label>
                            <input type="text" name="nis" class="form-control" value="<?= $row['nis'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama*</label>
                            <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas*</label>
                            <select name="kelas" class="form-control">
                                <option value="">-- Pilih Kelas --</option>
                                <option value="X" <?php if($row['kelas'] == "X"){ echo "selected"; } ?>>X</option>
                                <option value="XI" <?php if($row['kelas'] == "XI"){ echo "selected"; } ?>>XI</option>
                                <option value="XII" <?php if($row['kelas'] == "XII"){ echo "selected"; } ?>>XII</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Tanggal Lahir*</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="ttl-1" class="form-control" placeholder="Nama Kota" value="<?= $ttl1 ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="ttl-2" class="form-control" value="<?= $ttl2 ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat*</label>
                            <textarea class="form-control" name="alamat"><?= $row['alamat'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Jenis Kelamin*</label>
                                    <select name="jkl" class="form-control">
                                        <option value="">-- Pilih Jenis --</option>
                                        <option value="Laki-Laki" <?php if($row['jkl'] == "Laki-Laki"){ echo "selected"; } ?>>Laki-Laki</option>
                                        <option value="Perempuan" <?php if($row['jkl'] == "Perempuan"){ echo "selected"; } ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Agama*</label>
                                    <select name="agama" class="form-control">
                                        <option value="">-- Pilih Agama --</option>
                                        <option value="Islam" <?php if($row['agama'] == "Islam"){ echo "selected"; } ?>>Islam</option>
                                        <option value="Hindu" <?php if($row['agama'] == "Hindu"){ echo "selected"; } ?>>Hindu</option>
                                        <option value="Budha" <?php if($row['agama'] == "Budha"){ echo "selected"; } ?>>Budha</option>
                                        <option value="Kristen" <?php if($row['agama'] == "Kristen"){ echo "selected"; } ?>>Kristen</option>
                                        <option value="Katolik" <?php if($row['agama'] == "Katolik"){ echo "selected"; } ?>>Katolik</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Ayah*</label>
                            <input type="text" name="nama_ayah" class="form-control" value="<?= $row['nama_ayah'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Ibu*</label>
                            <input type="text" name="nama_ibu" class="form-control" value="<?= $row['nama_ibu'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No.Hp*</label>
                            <input type="text" name="no_hp" class="form-control" value="<?= $row['no_hp'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <a href="<?= BASEURL ?>/siswa" name="save" class="btn btn-danger">Kembali</a>
    </form>
</div>

<?php include '../footer.php' ?>