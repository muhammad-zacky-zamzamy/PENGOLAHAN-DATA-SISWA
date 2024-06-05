
<div class="container">
    <h2 class="my-3">Add Siswa</h2>
    <div class="row my-2">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <form action="<?= BASEURL ?>/siswa/tambahData" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">NIS*</label>
                            <input type="text" name="nis" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama*</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas*</label>
                            <select name="kelas" class="form-control">
                                <option value="">-- Pilih Kelas --</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Tanggal Lahir*</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="ttl-1" class="form-control" placeholder="Nama Kota" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="ttl-2" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat*</label>
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                        <a href="<?= BASEURL ?>/siswa" name="save" class="btn btn-danger">Kembali</a>
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
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Agama*</label>
                                    <select name="agama" class="form-control">
                                        <option value="">-- Pilih Agama --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Ayah*</label>
                            <input type="text" name="nama_ayah" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Ibu*</label>
                            <input type="text" name="nama_ibu" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No.Hp*</label>
                            <input type="text" name="no_hp" class="form-control" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
