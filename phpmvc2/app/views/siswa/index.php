
<div class="container">
    <h2 class="my-3">Master Siswa</h2>
    <a href="<?= BASEURL ?>/siswa/tambah" class="btn btn-primary btn-sm">Add Data</a>
    <div class="row my-2">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <table class="table table-hover mt-5">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No.HP</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $n = 1;
            foreach ($data['siswa'] as $row) {
            ?>
                    <tr>
                        <th scope="row"><?= $n++ ?></th>
                        <td><?= $row['nis'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['kelas'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['jkl'] ?></td>
                        <td><?= $row['no_hp'] ?></td>
                        <td>
                            <a href="<?= BASEURL ?>/siswa/edit/<?= $row['id_siswa'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= BASEURL ?>/siswa/deleteData/<?= $row['id_siswa'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
